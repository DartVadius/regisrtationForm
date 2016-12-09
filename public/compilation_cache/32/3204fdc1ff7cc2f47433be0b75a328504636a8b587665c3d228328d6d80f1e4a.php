<?php

/* layout.tpl */
class __TwigTemplate_44ec6deac86fdb9f5f6b49b98413a30e3a4a1eacea499b9033c02d41d5c08c88 extends Twig_Template
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
        $this->loadTemplate("header.tpl", "layout.tpl", 1)->display($context);
        // line 2
        $this->loadTemplate("main.tpl", "layout.tpl", 2)->display($context);
        // line 3
        $this->loadTemplate("footer.tpl", "layout.tpl", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
