<?php

/* register.tpl */
class __TwigTemplate_6f91fb7c62096bba860c4859adb2cb9df43cc990491b2f9aa830d732061a48e1 extends Twig_Template
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
        <div class=\"col-md-6\">
            <form name = \"reg\" class=\"login text-right\">
                <div class=\"form-group field\">
                    <label for=\"login\">Login </label>
                    <input id=\"login\" type=\"text\" name=\"login\" size=\"20\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "reg_log", array()), "html", null, true);
        echo "\" required/><br>
                    <label for=\"pass\">Password </label>
                    <input id=\"pass\" type=\"password\" name=\"pass\" size=\"20\" required/><br>
                    <label for=\"conf\">Confirm password </label>
                    <input id=\"conf\" type=\"password\" name=\"conf\" size=\"20\" required/><br>
                    <label for=\"email\">Email </label>
                    <input id=\"email\" type=\"text\" name=\"email\" size=\"20\" value=\"\" required/><br>
                    <a href=\"/index\" class=\"\">Back</a>
                    <input type=\"button\" id=\"register\" value=\"Register\" class=\"btn btn-primary\"/>
                </div>
                    <div id=\"response\"></div>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "register.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
