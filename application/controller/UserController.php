<?php

/**
 * UserController
 *
 * @author DartVadius
 */
class UserController {

    public function indexAction() {
        header("Location: /index");
        exit();
    }

    public function profileAction() {
        $param = array();
        if (empty($_SESSION['user_id']) || empty($_SESSION['user_login']) || empty($_SESSION['user_email'])) {
            header("Location: /index");
            exit();
        }
        $param = [
            'profile' => 1,
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
                $_SESSION['msg_log'] = 'Ой вэй, мы вас не знаем';
            } else {
                $hash = $user->getUserPass();
                if (password_verify($pass, $hash)) {
                    $_SESSION['user_id'] = $user->getUserId();
                    $_SESSION['user_login'] = $user->getUserLogin();
                    $_SESSION['user_email'] = $user->getUserEmail();
                    $_SESSION['msg_log'] = '';
                    $_SESSION['log'] = '';
                } else {
                    $_SESSION['msg_log'] = 'Ой вэй, мы вас не знаем';
                }
            }
            header("Location: /user/profile");
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
        $entityBody = file_get_contents('php://input');
        $data = json_decode($entityBody, TRUE);
        if (!empty($data)) {
            $_SESSION['msg_pass'] = $_SESSION['msg_email'] = $_SESSION['msg_log'] = $_SESSION['msg_user'] = '';
            $log = SequreLib::clearReq($data['login']);
            $_SESSION['reg_log'] = $log;
            $pass = SequreLib::clearReq($data['pass']);
            $passcheck = SequreLib::clearReq($data['conf']);
            if ($pass != $passcheck) {
                $answer = ['msg' => 'Пароли не совпадают'];
                echo (json_encode($answer));
                exit();
            }
            $email = $data['email'];
            $_SESSION['email'] = $email;
            if (!SequreLib::emailValidate($email)) {
                $answer = ['msg' => 'Введите корректный email'];
                echo (json_encode($answer));
                exit();
            }
            $user = new UserModel($log, $pass, $email);
            $valid = new UserValidate($user);
            if (!$valid->validate()) {
                $answer = ['msg' => 'Проверьте корректность логина/пароля'];
                echo (json_encode($answer));
                exit();
            }
            $rep = new UserRepository();
            if ($rep->findByLogin($log)) {
                $answer = ['msg' => 'Пользователь с таким логином уже зарегистрирован'];
                echo (json_encode($answer));
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
            $activation = md5($id);
            $subject = "Подтверждение регистрации";
            $message = "Для активации аккаунта перейдите по ссылке:\n
            http://www.testreg/user/activation/" . $user->getUserLogin() . "/" . $activation;
            mail($user->getUserEmail(), $subject, $message, "Content-type:text/plain; Charset=utf-8\r\n");
            $_SESSION['user_id'] = $user->getUserId();
            $_SESSION['user_login'] = $user->getUserLogin();
            $_SESSION['user_email'] = $user->getUserEmail();
            unset($_SESSION['reg_log']);
            unset($_SESSION['email']);
            $_SESSION['msg_conf'] = 'На вашу почту было выслано сообщение для подтверждения регистрации';
            $_SESSION['msg_pass'] = $_SESSION['msg_email'] = $_SESSION['msg_log'] = $_SESSION['msg_user'] = '';
        }
    }

    public function updateAction() {
        $param = [
            'update' => 1,
            'session' => $_SESSION
        ];
        $twig = TwigLib::twigRender();
        echo $twig->render('layout.tpl', $param);
    }

    public function activationAction($log = NULL, $activ = NULL) {
        if ($log == NULL || $activ == NULL) {
            header("Location: /index");
            exit();
        }
        $log = SequreLib::clearReq($log);
        $activ = SequreLib::clearReq($activ);
        $rep = new UserRepository();
        $user = $rep->findByLogin($log);
        if (md5($user->getUserId()) == $activ) {
            $user->setUserStatus('1');
            $user->update();
            $_SESSION['msg_conf'] = 'Ваш аккаунт активирован';
            header("Location: /index");
            exit();
        } else {
            $_SESSION['msg_conf'] = 'Что-то пошло не так';
            header("Location: /index");
            exit();
        }
    }

    public function saveUpdateAction() {
        if (isset($_POST['pass']) && isset($_POST['conf']) && isset($_POST['email'])) {
            $pass = SequreLib::clearReq($_POST['pass']);
            $passcheck = SequreLib::clearReq($_POST['conf']);
            if ($pass != $passcheck) {
                $_SESSION['msg_pass'] = 'Пароли не совпадают';
            }
            $email = $_POST['email'];
            if (!SequreLib::emailValidate($email)) {
                $_SESSION['msg_email'] = "Введите корректный email";
            }
            $rep = new UserRepository();
            $user = $rep->findByLogin($_SESSION['user_login']);
            $user->setUserEmail($email);
            $user->setUserPass($pass);
            $valid = new UserValidate($user);
            if (!$valid->validate()) {
                $_SESSION['msg_log'] = "Проверьте корректность логина/пароля";
            }
            if (!empty($_SESSION['msg_pass']) ||
                    !empty($_SESSION['msg_email']) ||
                    !empty($_SESSION['msg_log'])) {
                header("Location: /user/update");
                exit();
            }
            $user->updatePass();
            $user->update();
            $_SESSION['user_email'] = $user->getUserEmail();
            header("Location: /user/profile");
            exit();
        } else {
            header("Location: /user/update");
            exit();
        }
    }

}
