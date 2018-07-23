<?php

/* stock_auto.html */
class __TwigTemplate_131370346d229a94b372228316c2c0e7 extends Twig_Template
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
        if (array_key_exists("success", $context)) {
            // line 11
            echo "        <h3>";
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "</h3>
    ";
        } else {
            // line 13
            echo "    ";
            if ((!twig_test_empty((isset($context["empty_inputs"]) ? $context["empty_inputs"] : null)))) {
                // line 14
                echo "        <div class=\"card-panel teal lighten-2 white-text center-align\"><strong><em>";
                echo twig_escape_filter($this->env, (isset($context["empty_inputs"]) ? $context["empty_inputs"] : null), "html", null, true);
                echo "</em></strong></div>
    ";
            }
            // line 16
            echo "    <div class=\"col s12\">
        <h3 class=\"center\">Характеристики автомобиля</h3>
    </div>
    <div class=\"col s12\">
        <div class=\"col s12 m3\"></div>
        <div class=\"col s12 m6\">
            <form action=\"\" method=\"post\">
                <div class=\"input-field col s12 m12\">
                    <div class=\"divider\"></div>
                    <div class=\"section\">
                        <h5>Список авто:</h5>
                        <select class=\"icons\" name=\"label_auto\">
                            <option value=\"\" disabled selected>Марка автомобиля</option>
                            ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_auto"]) ? $context["list_auto"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "car_brand"), "html", null, true);
                echo "\" data-icon=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link_img"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "car_brand"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "                        </select>
                    </div>

                    <div class=\"divider\"></div>
                    <div class=\"section\">
                        <h5>Основные характеристики:</h5>
                        <select class=\"icons\" name=\"transmission_auto\">
                            <option value=\"\" disabled selected>Трансмиссия</option>
                            ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_transmission"]) ? $context["list_transmission"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "transmission"), "html", null, true);
                echo "\" data-icon=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "transmission"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 43
            echo "                        </select>
                        <select class=\"icons\" name=\"engine_auto\">
                            <option value=\"\" disabled selected>Объем двигателя</option>
                            ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_force_car"]) ? $context["list_force_car"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 47
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "amount"), "html", null, true);
                echo "\" data-icon=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "amount"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 49
            echo "                        </select>
                        <select class=\"icons\" name=\"class_auto\">
                            <option value=\"\" disabled selected>Класс авто</option>
                            ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_class_by_car"]) ? $context["list_class_by_car"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class"), "html", null, true);
                echo "\" data-icon=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class"), "html", null, true);
                echo " <em>- ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), "html", null, true);
                echo "</em></option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 55
            echo "                        </select>
                        <select class=\"icons\" name=\"color_auto\">
                            <option value=\"\" disabled selected>Цвет</option>
                            ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_color_car"]) ? $context["list_color_car"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 59
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "color_name"), "html", null, true);
                echo "\" data-icon=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "color_img"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "color_name"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "                        </select>
                    </div>
                    <div class=\"divider\"></div>
                    <div class=\"section\">
                        <h5>Видимость авто:</h5>
                        <div class=\"switch\">
                            <label>
                                Off
                                <input type=\"checkbox\" name=\"visible_auto\" value=\"1\">
                                <span class=\"lever\"></span>
                                On
                            </label>
                        </div>
                    </div>
                </div>
                <input type=\"submit\" name=\"submit_choice\" value=\"Подтвердить выбор\" class=\"btn-large\">
            </form>
        </div>
        <div class=\"col s12 m3\"></div>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "stock_auto.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 61,  179 => 59,  175 => 58,  170 => 55,  157 => 53,  153 => 52,  148 => 49,  137 => 47,  133 => 46,  128 => 43,  117 => 41,  113 => 40,  103 => 32,  90 => 30,  86 => 29,  71 => 16,  65 => 14,  62 => 13,  56 => 11,  53 => 10,  50 => 9,  37 => 5,  32 => 4,  29 => 3,);
    }
}
