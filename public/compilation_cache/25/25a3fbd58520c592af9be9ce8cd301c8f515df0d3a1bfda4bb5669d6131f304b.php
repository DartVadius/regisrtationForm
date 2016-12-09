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
    </head>
    <body>
    <div class=\"container\">
        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 18
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_id", array())) {
            // line 19
            echo "                        ";
            $this->loadTemplate("logged.tpl", "header.tpl", 19)->display($context);
            // line 20
            echo "                    ";
        } elseif (twig_test_empty((isset($context["register"]) ? $context["register"] : null))) {
            // line 21
            echo "                        ";
            $this->loadTemplate("login.tpl", "header.tpl", 21)->display($context);
            // line 22
            echo "                    ";
        }
        // line 23
        echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 27
        $this->loadTemplate("menu.tpl", "header.tpl", 27)->display($context);
        // line 28
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
        return array (  60 => 28,  58 => 27,  52 => 23,  49 => 22,  46 => 21,  43 => 20,  40 => 19,  38 => 18,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
