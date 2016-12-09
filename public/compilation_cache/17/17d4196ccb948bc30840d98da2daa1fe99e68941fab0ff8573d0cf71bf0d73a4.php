<?php

/* register.tpl */
class __TwigTemplate_27923c0695649fa4334aa231081916db33eb619544e7fc934459a5b754eff468 extends Twig_Template
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
            <form action=\"/testreg/user/save\" method=\"post\" class=\"login text-right\">
                <div class=\"form-group field\">
                    <p class=\"small\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_log", array()), "html", null, true);
        echo "</p>
                    <label for=\"login\">Login </label>
                    <input type=\"text\" name=\"login\" size=\"20\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "reg_log", array()), "html", null, true);
        echo "\" required/><br>
                    <p class=\"small\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_log", array()), "html", null, true);
        echo "</p>
                    <label for=\"pass\">Password </label>
                    <input type=\"password\" name=\"pass\" size=\"20\" required/><br>
                    <p class=\"small\"></p>
                    <label for=\"conf\">Confirm password </label>
                    <input type=\"password\" name=\"conf\" size=\"20\" required/><br>
                    <p class=\"small\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_pass", array()), "html", null, true);
        echo "</p>
                    <label for=\"email\">Email </label>
                    <input id=\"email\" type=\"text\" name=\"email\" size=\"20\" value=\"\" required/><br>
                    <p class=\"small\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_email", array()), "html", null, true);
        echo "</p>
                    <a href=\"/testreg/index\" class=\"\">Back</a>
                    <input type=\"submit\" value=\"Register\" class=\"btn btn-primary\"/>
                </div>
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
        return array (  50 => 18,  44 => 15,  35 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
