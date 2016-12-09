<?php


/**
 * IndexController
 */
class IndexController extends BaseController {
    
    public function indexAction() {        
        $param = ['session' => $_SESSION];
        if (!empty($_SESSION['msg_conf'])) {
            unset($_SESSION['msg_conf']);
        }
        $twig = TwigLib::twigRender();
        echo $twig->render('layout.tpl', $param);
    }    
}