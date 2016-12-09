<?php

/**
 * UserValidate
 *
 * @author DartVadius
 */
class UserValidate {
    private $user = NULL;
    public function __construct(UserModel $data) {
        $this->user = $data;
    }
    /**
     * check model
     * 
     * @return boolean
     */
    public function validate() {
        if (preg_match("/^[a-zA-Z0-9]+$/", $this->user->getUserLogin()) &&
            strlen($this->user->getUserLogin()) >= Application::$App->login_length &&                
            strlen($this->user->getUserPass()) >= Application::$App->pass_length) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
