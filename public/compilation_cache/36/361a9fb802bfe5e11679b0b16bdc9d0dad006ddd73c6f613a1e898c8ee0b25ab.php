<?php

/* login.tpl */
class __TwigTemplate_cdfa2deb3ce6664f402d302bebf95e8299b34042116c6fce1f69cd0bbfd2a63e extends Twig_Template
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
    <form method=\"POST\" action=\"/testreg/user/login\" class=\"login text-right\">                
        <div class=\"form-group field\">
            <p class=\"small\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_log", array()), "html", null, true);
        echo "</p>
            <label for=\"login\">Login </label>
            <input type=\"text\" name=\"login\" size=\"20\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "log", array()), "html", null, true);
        echo "\" required/><br>
            <label for=\"pass\">Password </label>
            <input type=\"password\" name=\"pass\" size=\"20\"/><br>
            <a href=\"/testreg/user/register\" class=\"\">Register</a>
            <input type=\"submit\" value=\"Login\" class=\"btn btn-primary\"/>                    
        </div>
    </form>        
</div>          
";
    }

    public function getTemplateName()
    {
        return "login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
