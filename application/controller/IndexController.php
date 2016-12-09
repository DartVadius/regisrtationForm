<?php


/**
 * IndexController
 */
class IndexController extends BaseController {
    
    public function indexAction() {        
        $param = ['session' => $_SESSION];        
        $twig = TwigLib::twigRender();
        echo $twig->render('layout.tpl', $param);
    }    
}