<?php

/* header.tpl */
class __TwigTemplate_8e61006c9d432760ae634aadf9684f493d255a63485d8936406961a5afcff2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script src=\"/public/js/jquery-3.1.1.min.js\" type=\"text/javascript\"></script>
        <link rel=\"stylesheet\" href=\"/testreg/public/css/bootstrap.css\">
        <script src=\"/public/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/style.css\">
        <script src=\"/public/js/myJS.js\" type=\"text/javascript\"></script>
        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
\t\t\t  integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
\t\t\t  crossorigin=\"anonymous\"></script>
    </head>
    <body>
    <div class=\"container\">
        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_conf", array()), "html", null, true);
        echo "</p>
                    ";
        // line 22
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_id", array())) {
            // line 23
            echo "                        ";
            $this->loadTemplate("logged.tpl", "header.tpl", 23)->display($context);
            // line 24
            echo "                    ";
        } elseif (twig_test_empty((isset($context["register"]) ? $context["register"] : null))) {
            // line 25
            echo "                        ";
            $this->loadTemplate("login.tpl", "header.tpl", 25)->display($context);
            // line 26
            echo "                    ";
        }
        // line 27
        echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 31
        $this->loadTemplate("menu.tpl", "header.tpl", 31)->display($context);
        // line 32
        echo "                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 32,  65 => 31,  59 => 27,  56 => 26,  53 => 25,  50 => 24,  47 => 23,  45 => 22,  41 => 21,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
