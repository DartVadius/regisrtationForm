<?php

/* main.tpl */
class __TwigTemplate_2df1070ee20082fc686af93775d0ea99b343e64784425a59fe4175af82255789 extends Twig_Template
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
        echo "<div class=\"row\">
    ";
        // line 2
        if (array_key_exists("register", $context)) {
            // line 3
            echo "        ";
            $this->loadTemplate("register.tpl", "main.tpl", 3)->display($context);
            echo "        
    ";
        } elseif (        // line 4
array_key_exists("profile", $context)) {
            // line 5
            echo "        ";
            $this->loadTemplate("profile.tpl", "main.tpl", 5)->display($context);
            // line 6
            echo "    ";
        } elseif (array_key_exists("update", $context)) {
            // line 7
            echo "        ";
            $this->loadTemplate("update.tpl", "main.tpl", 7)->display($context);
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $this->loadTemplate("content.tpl", "main.tpl", 9)->display($context);
            // line 10
            echo "    ";
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "main.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
