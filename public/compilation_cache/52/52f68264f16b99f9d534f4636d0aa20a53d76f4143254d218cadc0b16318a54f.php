<?php

/* layout.tpl */
class __TwigTemplate_cc636e42df709de5396159c1de9d9bf28940f162a9647c5d2dcf9165982381b9 extends Twig_Template
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
