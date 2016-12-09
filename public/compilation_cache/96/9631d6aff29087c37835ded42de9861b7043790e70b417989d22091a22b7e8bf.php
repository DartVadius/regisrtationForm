<?php

/* logged.tpl */
class __TwigTemplate_436af1b079e892876a50112782aa11bb7a3f0d186379927542beda334658b343 extends Twig_Template
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
        echo "<div class=\"text-right\">
    <a href=\"/user/logout\" class=\"\">Logout</a><br>
    <a href=\"/user/profile\" class=\"\">Profile</a>    
</div>";
    }

    public function getTemplateName()
    {
        return "logged.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
