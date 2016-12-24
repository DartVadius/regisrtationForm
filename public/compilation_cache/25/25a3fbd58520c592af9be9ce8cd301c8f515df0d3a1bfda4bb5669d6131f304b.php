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
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/style.css\">
        <script src=\"/public/js/myJS.js\" type=\"text/javascript\"></script>
        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
                integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
        crossorigin=\"anonymous\"></script>
    </head>
    <body>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_conf", array()), "html", null, true);
        echo "</p>
                        ";
        // line 25
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_id", array())) {
            // line 26
            echo "                        ";
            $this->loadTemplate("logged.tpl", "header.tpl", 26)->display($context);
            // line 27
            echo "                        ";
        } elseif (twig_test_empty((isset($context["register"]) ? $context["register"] : null))) {
            // line 28
            echo "                        ";
            $this->loadTemplate("login.tpl", "header.tpl", 28)->display($context);
            // line 29
            echo "                        ";
        }
        // line 30
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 34
        $this->loadTemplate("menu.tpl", "header.tpl", 34)->display($context);
        // line 35
        echo "                    </div>
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
        return array (  70 => 35,  68 => 34,  62 => 30,  59 => 29,  56 => 28,  53 => 27,  50 => 26,  48 => 25,  44 => 24,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
