<?php

/* work.tpl */
class __TwigTemplate_d35bc9c7b2705b3e4302307a0a109c92d23280373c1aa5f3a9654cf569e8491b extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-3\">
        <form method=\"post\" action=\"index.php\">
            <button name =\"logout\" value=\"1\" class=\"btn btn-primary wellcome\"><span>Logout</span></button>
        </form>
    </div>
    <div class=\"col-md-9\">
        <div class=\"alert-success\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
        echo "</div>
    </div>

</div>
<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"small\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tables"]) ? $context["tables"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 16
            echo "                <div><h4>Таблица ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "table", array()), "html", null, true);
            echo "</h4></div>
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "column", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 18
                echo "                    <div>";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
    </div>
    <div class=\"col-md-9\">
        <form method=\"post\" action=\"index.php\">
            <label for=\"sql\">SQL запрос </label><br>
            <textarea rows=\"10\" cols=\"130\" name=\"sql\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["sql"]) ? $context["sql"] : null), "html", null, true);
        echo "</textarea><br>
            <input type=\"submit\" value=\"Send request\" class=\"btn btn-primary\"/>
        </form>
        <div class=\"alert-warning\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["sqlmsg"]) ? $context["sqlmsg"] : null), "html", null, true);
        echo "</div>
        <div class=\"alert-success small\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 32
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "sql", array()), $context["i"], array(), "array"), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
        <table class=\"table table-bordered\" width=\"100%\">
            <tr>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["namereq"]) ? $context["namereq"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 38
            echo "                    <td><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "name", array()), "html", null, true);
            echo "</b></td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tr>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["req"]) ? $context["req"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 42
            echo "                <tr>
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 44
                echo "                        <td>";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "work.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  138 => 46,  129 => 44,  125 => 43,  122 => 42,  118 => 41,  115 => 40,  106 => 38,  102 => 37,  97 => 34,  88 => 32,  84 => 31,  79 => 29,  73 => 26,  66 => 21,  60 => 20,  51 => 18,  47 => 17,  42 => 16,  38 => 15,  28 => 8,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
