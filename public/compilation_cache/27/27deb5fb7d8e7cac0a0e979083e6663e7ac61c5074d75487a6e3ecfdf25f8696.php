<?php

/* 404.tpl */
class __TwigTemplate_bf7f1efa1394fbf5a50cb2b16278c54d61950486591ee719c77c8714bc89afbd extends Twig_Template
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
        echo "<div class=\"\">
    <h2 class=\"\">
    ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["exmsg"]) ? $context["exmsg"] : null), "html", null, true);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["excode"]) ? $context["excode"] : null), "html", null, true);
        echo "
    <br>
    <img src=\"/blog/public/images/404.jpg\">
</h2>
</div>";
    }

    public function getTemplateName()
    {
        return "404.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
