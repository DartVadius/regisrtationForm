<?php
/**
 * UserModel
 *
 * @author DartVadius
 */
class UserModel extends BaseModel {
    protected static $tableName = 'user';
    private $userId;    
    private $userLogin;
    private $userPass;
    private $userEmail;
    private $userStatus = 0;
    
    public function __construct($userLogin, $userPass, $userEmail = '') {
        parent::__construct();        
        $this->userLogin = $userLogin;
        $this->userPass = $userPass;
        $this->userEmail = $userEmail;
    }
    
    public static function getTableName() {        
        return self::$tableName;
    }
    public function getUserEmail() {
        return $this->userEmail;
    }

    public function getUserLogin() {
        return $this->userLogin;
    }
    public function getUserPass() {
        return $this->userPass;
    }    
    public function getUserId() {
        return $this->userId;
    }
    public function getUserStatus() {
        return $this->userStatus;
    }

    public function setUserId($id) {
        $this->userId = $id;
    }
    public function setUserStatus($status) {
        $this->userStatus = $status;
    }
    
    public function setUserPass($pass) {
        $this->userPass = $pass;
    }
    
    public function setUserEmail($email) {
        $this->userEmail = $email;
    }

    public function save() {
        $sql =  "INSERT INTO ". self::$tableName . " SET        
        user_login = :userLogin,
        user_password = :userPass,
        user_email = :userEmail,
        user_status = :userStatus";
        $pass = password_hash($this->userPass, PASSWORD_DEFAULT);        
        $arr = array (            
            'userLogin' => $this->userLogin,
            'userPass' => $pass,
            'userEmail' => $this->userEmail,
            'userStatus' => 0
        );
        try {
            $res = $this->pdo->prepare($sql);
            $res->execute($arr);
            return TRUE;
        } catch (PDOException $ex) {
            throw new Exception('Bad Request ', 400);
        }
    }
    
    public function update() {
        $sql =  "UPDATE " . self::$tableName . " SET
            user_email = :userEmail,            
            user_status = :userStatus
            WHERE user_id = :userId";
        
        $arr = array (
            'userEmail' => $this->userEmail,
            'userStatus' => $this->userStatus,
            'userId' => $this->userId
        );
        try {
            $res = $this->pdo->prepare($sql);
            $res->execute($arr);
            return TRUE;
        } catch (PDOException $ex) {
            throw new Exception('Bad Request ', 400);
        }
    }
    public function updatePass() {
        $pass = password_hash($this->userPass, PASSWORD_DEFAULT);
        $sql =  "UPDATE " . self::$tableName . " SET
            user_password = :userPass
            WHERE user_id = :userId";
        
        $arr = array (
            'userPass' => $pass,
            'userId' => $this->userId
        );
        try {
            $res = $this->pdo->prepare($sql);
            $res->execute($arr);
            return TRUE;
        } catch (PDOException $ex) {
            throw new Exception('Bad Request ', 400);
        }
    }
}