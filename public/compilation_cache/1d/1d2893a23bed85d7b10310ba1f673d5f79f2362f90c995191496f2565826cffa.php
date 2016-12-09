<?php

/* main.tpl */
class __TwigTemplate_d2d5f58af504ab4c38b26975e5ee094e964fe23de83ba793924f2445e57a53a8 extends Twig_Template
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
array_key_exists("update", $context)) {
            // line 5
            echo "        ";
            $this->loadTemplate("profile.tpl", "main.tpl", 5)->display($context);
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $this->loadTemplate("content.tpl", "main.tpl", 7)->display($context);
            // line 8
            echo "    ";
        }
        // line 9
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
        return array (  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
