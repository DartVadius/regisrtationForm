<?php

/**
 * UserRepository
 *
 * @author DartVadius
 */
class UserRepository extends BaseRepository {
    public function findAll() {
        $userList = array();
        $sql = "SELECT * FROM " . UserModel::getTableName();
        $res = $this->pdo->query($sql);
        $users = $res->fetchAll();
        if ($users) {
            foreach ($users as $user) {
                $newUser = new UserModel($user['user_login'], $user['user_password'], $user['user_email']);
                $newUser->setUserStatus($user['user_status']);
                $newUser->setUserId($user['user_id']);
                array_push($userList, $newUser);
            }
            return $userList;
        } else {
            return FALSE;
        }
    }
    public function findById($id) {
        $sql = "SELECT * FROM " . UserModel::getTableName() . " WHERE user_id = :id";
        $arr = array (
            'id' => $id
        );
        $res = $this->pdo->prepare($sql);
        $res->execute($arr);
        $res = $this->pdo->query($sql);
        $user = $res->fetch();
        if ($user) {
            $newUser = new UserModel($user['user_name'], $user['user_login'], $user['user_password'], $user['user_email']);
            $newUser->setUserStatus($user['user_status']);
            $newUser->setUserId($id);
            return $newUser;
        } else {
            return FALSE;
        }
    }

    public function findByLogin($login) {
        $sql = "SELECT * FROM " . UserModel::getTableName() . " WHERE user_login = :login";
        $arr = array (
            'login' => $login
        );
        $res = $this->pdo->prepare($sql);
        $res->execute($arr);
        $user = $res->fetch();
        if ($user) {
            $newUser = new UserModel($user['user_login'], $user['user_password'], $user['user_email']);
            $newUser->setUserStatus($user['user_status']);
            $newUser->setUserId($user['user_id']);
            return $newUser;
        } else {
            return FALSE;
        }
    } 
}
