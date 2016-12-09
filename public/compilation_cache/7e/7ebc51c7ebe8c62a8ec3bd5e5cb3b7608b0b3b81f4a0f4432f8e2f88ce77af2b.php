<?php

/* update.tpl */
class __TwigTemplate_ecb6632e57442db3a1bf02d7989edee8b64f713f42540c8a7dc58c17b1c7ac55 extends Twig_Template
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
            <p><h2>Профиль пользователя: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_login", array()), "html", null, true);
        echo "</h2></p>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_pass", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_email", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "msg_log", array()), "html", null, true);
        echo "</p>
            <form action=\"/user/saveupdate\" method=\"post\" class=\"login\">                
                <div class=\"form-group field\">
                    <table class=\"table-condensed\">
                    <tr>
                        <th><label for=\"pass\">New password  </label></th>
                        <th><input type=\"password\" name=\"pass\" size=\"20\" required/></th>
                    </tr>
                    <tr>
                        <th><label for=\"conf\">Confirm password  </label></th>
                        <th><input type=\"password\" name=\"conf\" size=\"20\" required/></th>
                    </tr>
                    <tr>
                        <th><label for=\"email\">New Email  </label></th>
                        <th><input id=\"email\" type=\"text\" name=\"email\" size=\"20\" value=\"\" required/></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><a href=\"/index\" class=\"text-right\">Back </a><input type=\"submit\" value=\"Save Changes\" class=\"btn btn-primary\"/></th>
                    </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "update.tpl";
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
