<?php

/**
 * TwigLib
 *
 * @author DartVadius
 */
class TwigLib {
    public static function twigRender() {
        Twig_Autoloader::register();
        $path = APP . 'view';
        $loader = new Twig_Loader_Filesystem($path);
        $twig = new Twig_Environment($loader, array(
            'cache' => 'compilation_cache',
            'auto_reload' => true
        ));
        return $twig;
    }
}
