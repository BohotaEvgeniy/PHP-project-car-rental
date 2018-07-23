<?php

/* region_country.html */
class __TwigTemplate_dca4f419b8fbdfae6f4da95e100f7bc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu_list"]) ? $context["menu_list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if (((isset($context["success"]) ? $context["success"] : null) != null)) {
            // line 11
            echo "        <div class=\"col s12\">
            <h3>";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "</h3>
        </div>
    ";
        } else {
            // line 15
            echo "        ";
            if (((isset($context["warning"]) ? $context["warning"] : null) != null)) {
                // line 16
                echo "            <div class=\"card-panel teal lighten-2 white-text center-align\"><strong><em>";
                echo twig_escape_filter($this->env, (isset($context["warning"]) ? $context["warning"] : null), "html", null, true);
                echo "</em></strong></div>
        ";
            }
            // line 18
            echo "            <div class=\"col s12\">
                <h3>Регион получения авто</h3>
            </div>
            <div class=\"col s12\">
                <form class=\"col s12\" method=\"post\">
                    <div class=\"input-field col s12\">
                        <select name=\"regions\">
                            <option value=\"\" disabled selected>Выбор области</option>
                            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["region_list"]) ? $context["region_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 29
            echo "                        </select>
                    </div>
                    <div class=\"col s12\">
                        <input class=\"btn\" type=\"submit\" name=\"submit_region\" value=\"Подтвердить выбор\">
                    </div>
                </form>
            </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "region_country.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  88 => 27,  84 => 26,  74 => 18,  68 => 16,  65 => 15,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  37 => 5,  32 => 4,  29 => 3,);
    }
}
