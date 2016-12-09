<?php

/**
 * ErrorController 
 * 
 * @author DartVadius
 */
class ErrorController extends BaseController {
    public function error($exception = '') {
        $param = array ();
        if ($exception->getCode() == 404) {
            $exmsg = $exception->getMessage();
            $excode = $exception->getCode();
            $param = [            
            'exmsg' => $exmsg,
            'excode' => $excode
            ];        
            $twig = TwigLib::twigRender();
            echo $twig->render('404.tpl', $param);            
        } else {
            $exmsg = $exception->getMessage();
            $excode = $exception->getCode();
            $param = [            
            'exmsg' => $exmsg,
            'excode' => $excode
            ];        
            $twig = TwigLib::twigRender();
            echo $twig->render('error.tpl', $param); 
        }
    }
}
