<?php

/* registration_form.html */
class __TwigTemplate_ff3f16eccb2236cf63022ad1c15a1436 extends Twig_Template
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
            <h1>";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "</h1>
        </div>
    ";
        } elseif (((isset($context["respond"]) ? $context["respond"] : null) == null)) {
            // line 15
            echo "        <form method=\"post\" class=\"col s12\">
            <div class=\"row\">
                <div class=\"input-field col s6\">
                    <i class=\"material-icons prefix\">account_circle</i>
                    <input id=\"icon_login\" type=\"text\" class=\"validate\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" name=\"login\" required minlength=\"2\" maxlength=\"30\">
                    <label for=\"icon_login\">Login</label>
                </div>
                <div class=\"input-field col s6\">
                    <i class=\"material-icons prefix\">security</i>
                    <input id=\"icon_security\" type=\"password\" class=\"validate\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
            echo "\" name=\"password\" required minlength=\"6\" maxlength=\"40\">
                    <label for=\"icon_security\">Password</label>
                </div>
                <div class=\"input-field col s6\">
                    <i class=\"material-icons prefix\">email</i>
                    <input id=\"icon_email\" type=\"email\" class=\"validate\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "\" name=\"email\" required minlength=\"5\" maxlength=\"40\">
                    <label for=\"icon_email\">Email</label>
                </div>
                <div class=\"input-field col s6\">
                    <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"registration\">Зарегистрироваться
                        <i class=\"material-icons right\">send</i>
                    </button>
                </div>
            </div>
        </form>
    ";
        } else {
            // line 40
            echo "        <div class=\"col s12\">
            <h3>";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["respond"]) ? $context["respond"] : null), "html", null, true);
            echo "</h3>
        </div>
        <form method=\"post\" class=\"col s12\">
            <div class=\"row\">
                <div class=\"input-field col s6\">
                    <i class=\"material-icons prefix\">account_circle</i>
                    <input id=\"icon_login\" type=\"text\" class=\"validate\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" name=\"login\" required minlength=\"2\" maxlength=\"30\">
                    <label for=\"icon_login\">Login</label>
                </div>
                <div class=\"input-field col s6\">
                    <i class=\"material-icons prefix\">security</i>
                    <input id=\"icon_security\" type=\"password\" class=\"validate\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
            echo "\" name=\"password\" required minlength=\"6\" maxlength=\"40\">
                    <label for=\"icon_security\">Password</label>
                </div>
                <div class=\"input-field col s6\">
                    <i class=\"material-icons prefix\">email</i>
                    <input id=\"icon_email\" type=\"email\" class=\"validate\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "\" name=\"email\" required minlength=\"5\" maxlength=\"40\">
                    <label for=\"icon_email\">Email</label>
                </div>
                <div class=\"input-field col s6\">
                    <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"registration\">Зарегистрироваться
                        <i class=\"material-icons right\">send</i>
                    </button>
                </div>
            </div>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "registration_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  121 => 52,  113 => 47,  104 => 41,  101 => 40,  87 => 29,  79 => 24,  71 => 19,  65 => 15,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  37 => 5,  32 => 4,  29 => 3,);
    }
}
