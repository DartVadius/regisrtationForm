<?php

/* logged.tpl */
class __TwigTemplate_e3f21c45a1562a54a641f2278a91f8fca503cc8f7232189e125172dae55f50cc extends Twig_Template
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
    <a href=\"/testreg/user/logout\" class=\"\">Logout</a><br>
    <a href=\"/testreg/user/profile\" class=\"\">Profile</a>    
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
