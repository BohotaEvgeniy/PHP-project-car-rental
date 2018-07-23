<?php

/* user_form.html */
class __TwigTemplate_d1d168ccb4fc8f0df98856b1ba42dfaa extends Twig_Template
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
        echo "    <ul class=\"tabs tabs-fixed-width tab-demo z-depth-1\">
        <li class=\"tab\"><a href=\"#test1\">Авторизация</a></li>
        <li class=\"tab\"><a class=\"active\" href=\"#test2\">Регистрация</a></li>
    </ul>
    <div id=\"test1\" class=\"col s12\">
        <p>
            <form method=\"post\" class=\"col s12\">
                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        <i class=\"material-icons prefix\">account_circle</i>
                        <input id=\"icon_login\" type=\"text\" class=\"validate\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" name=\"login\" required minlength=\"2\" maxlength=\"30\">
                        <label for=\"icon_login\">Login</label>
                    </div>
                    <!--<div class=\"input-field col s6\">-->
                        <!--<i class=\"material-icons prefix\">security</i>-->
                        <!--<input id=\"icon_security\" type=\"password\" class=\"validate\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
        echo "\" name=\"password\" required minlength=\"6\" maxlength=\"40\">-->
                        <!--<label for=\"icon_security\">Password</label>-->
                    <!--</div>-->
                    <div class=\"input-field col s6\">
                        <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"authorization\">Авторизоваться
                            <i class=\"material-icons right\">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </p>
    </div>
";
        // line 37
        if (((isset($context["respond"]) ? $context["respond"] : null) != true)) {
            // line 38
            echo "    <div id=\"test2\" class=\"col s12\">
        <p>
            <form method=\"post\" class=\"col s12\">
                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        <i class=\"material-icons prefix\">account_circle</i>
                        <input id=\"icon_login\" type=\"text\" class=\"validate\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" name=\"login\" required minlength=\"2\" maxlength=\"30\">
                        <label for=\"icon_login\">Login</label>
                    </div>
                    <div class=\"input-field col s6\">
                        <i class=\"material-icons prefix\">security</i>
                        <input id=\"icon_security\" type=\"password\" class=\"validate\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
            echo "\" name=\"password\" required minlength=\"6\" maxlength=\"40\">
                        <label for=\"icon_security\">Password</label>
                    </div>
                    <div class=\"input-field col s6\">
                        <i class=\"material-icons prefix\">email</i>
                        <input id=\"icon_email\" type=\"email\" class=\"validate\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "\" name=\"email\" required minlength=\"5\" maxlength=\"40\">
                        <label for=\"icon_email\">Password</label>
                    </div>
                    <div class=\"input-field col s6\">
                        <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"registration\">Зарегистрироваться
                            <i class=\"material-icons right\">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </p>
    </div>
";
        } else {
            // line 67
            echo "    <div class=\"col s12\">
        <h1>Вы зарегистрировались удачною</h1>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "user_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 67,  114 => 54,  106 => 49,  98 => 44,  90 => 38,  88 => 37,  73 => 25,  65 => 20,  53 => 10,  50 => 9,  37 => 5,  32 => 4,  29 => 3,);
    }
}
