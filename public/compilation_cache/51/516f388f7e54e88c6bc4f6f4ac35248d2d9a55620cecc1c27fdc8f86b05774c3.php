<?php

/* profile.tpl */
class __TwigTemplate_5ef50094a9d806f48e531868c9b7c639cbf1c15ed4141517a6b731e46cddbae5 extends Twig_Template
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
        echo "<div class=\"page-header\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <p>Логин: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_login", array()), "html", null, true);
        echo "</p>
            <p>E-mail: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_email", array()), "html", null, true);
        echo "</p>
            <form action=\"\" method=\"post\" class=\"login\">                
                <input type=\"submit\" value=\"Update\" onclick=\"formWind()\" class=\"btn btn-primary\"/>                
            </form>            
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profile.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
