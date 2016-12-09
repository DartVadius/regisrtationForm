<?php

/* error.tpl */
class __TwigTemplate_6a1721682f1066ba075765493a41b3b8bb22d9c6a24a145793e76577c3385d19 extends Twig_Template
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
        echo "<div class=\"row text-center\">
<h2>
    ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["exmsg"]) ? $context["exmsg"] : null), "html", null, true);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["excode"]) ? $context["excode"] : null), "html", null, true);
        echo "
</h2>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.tpl";
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
