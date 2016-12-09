<?php

/**
 * UserController
 *
 * @author DartVadius
 */
class UserController {
    public function profileAction() {
        $param = array();
        if (empty($_SESSION['user_id'])) {
            header("Location: index");
            exit();
        }        
        $param = [
            'update' => 1,
            'session' => $_SESSION
            ];        
        $twig = TwigLib::twigRender();
        echo $twig->render('layout.tpl', $param);
    }
    public function loginAction() {
        if (!empty($_POST['login']) && !empty($_POST['pass'])) {
            $log = SequreLib::clearReq($_POST['login']);
            $pass = SequreLib::clearReq($_POST['pass']);
            $_SESSION['msg_log'] = '';
            $_SESSION['log'] = $log;
            $rep = new UserRepository();
            $user = $rep->findByLogin($log);
            if (empty($user)) {
                $_SESSION['msg_log'] = 'Ой вэй, юзверь не найден';                
            } else {
                $hash = $user->getUserPass();
                if (password_verify($pass, $hash)) {
                    $_SESSION['user_id'] = $user->getUserId();
                    $_SESSION['user_login'] = $user->getUserLogin();
                    $_SESSION['user_email'] = $user->getUserEmail();
                    $_SESSION['msg_log'] = '';
                    $_SESSION['log'] = '';
                }
                else {
                    $_SESSION['msg_log'] = 'Ой вэй, юзверь не найден';                
                }
            }            
            header("Location: /index");
            exit();
        }
        $_SESSION['msg_log'] = 'Таки заполните все поля'; 
        header("Location: /index");
        exit();
    }
    public function logoutAction() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_login']);
        unset($_SESSION['user_email']);
        header("Location: /index");
        exit();
    }

    public function registerAction() {
        $param = array();
        $_SESSION['msg_pass'] = $_SESSION['msg_email'] = $_SESSION['msg_log'] = $_SESSION['msg_user'] = '';
        if (!empty($_SESSION['user_id'])) {
            header("Location: /index");
            exit();
        }
        $param = [
            'register' => 1,
            'session' => $_SESSION
            ];        
        $twig = TwigLib::twigRender();
        echo $twig->render('layout.tpl', $param);
    }
    public function saveAction() {
        if (!empty($_POST)) {
            $_SESSION['msg_pass'] = $_SESSION['msg_email'] = $_SESSION['msg_log'] = $_SESSION['msg_user'] = '';
            $log = SequreLib::clearReq($_POST['login']);
            $_SESSION['reg_log'] = $log;
            $pass = SequreLib::clearReq($_POST['pass']);
            $passcheck = SequreLib::clearReq($_POST['conf']);
            if ($pass != $passcheck) {
                $_SESSION['msg_pass'] = 'Пароли не совпадают';                
            }
            $email = $_POST['email'];
            $_SESSION['email'] = $email;
            if (!SequreLib::emailValidate($email)) {
                $_SESSION['msg_email'] = "Введите корректный email";                
            }
            $user = new UserModel($log, $pass, $email);            
            $valid = new UserValidate($user);
            if (!$valid->validate()) {
                $_SESSION['msg_log'] = "Проверьте корректность логина/пароля";                
            }
            $rep = new UserRepository();
            if ($rep->findByLogin($log)) {
                $_SESSION['msg_user'] = 'Пользователь с таким логином уже зарегистрирован';                
            }
            if (!empty($_SESSION['msg_pass']) || 
                !empty($_SESSION['msg_email']) || 
                !empty($_SESSION['msg_log']) ||
                !empty($_SESSION['msg_user'])) {
                header("Location: /user/register");
                exit();
            }
            $user->save();
            $user = $rep->findByLogin($log);
            $id = $user->getUserId();
            $_SESSION['user_id'] = $id;
            unset($_SESSION['reg_log']);
            unset($_SESSION['email']);
            $_SESSION['msg_pass'] = $_SESSION['msg_email'] = $_SESSION['msg_log'] = $_SESSION['msg_user'] = '';
            header("Location: /index");
            exit();
        }
        header("Location: /index");
        exit();
    }
}
