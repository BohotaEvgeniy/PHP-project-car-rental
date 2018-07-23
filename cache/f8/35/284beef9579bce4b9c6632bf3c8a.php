<?php

/* index.html */
class __TwigTemplate_f835284beef9579bce4b9c6632bf3c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset=\"utf-8\">
  <title>Car rental</title>
  <meta name=\"description\" content=\"Auto,car rental\">
  <meta name=\"author\" content=\"Evhen Shevcov\">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href=\"//fonts.googleapis.com/css?family=Raleway:400,300,600\" rel=\"stylesheet\" type=\"text/css\">

  <!--Import Google Icon Font-->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

  <!--Import materialize.css-->
  <link type=\"text/css\" rel=\"stylesheet\" href=\"http://auto/views/assets/lib_materialize/css/materialize.min.css\"  media=\"screen,projection\"/>
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel=\"stylesheet\" href=\"http://auto/views/assets/main_styles/css/main.css\">

  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <!--main navigation-->
  <nav>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"nav-wrapper\">
          <a href=\"#!\" class=\"brand-logo\"><i class=\"material-icons\">directions_car</i>Car rental</a>
          <a href=\"#\" data-target=\"mobile-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
          <ul class=\"right hide-on-med-and-down\">
            ";
        // line 45
        $this->displayBlock('nav', $context, $blocks);
        // line 48
        echo "
          </ul>
        </div>
        <!--Mobile navigation-->
        <ul class=\"sidenav\" id=\"mobile-demo\">
         <!-- ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu_list"]) ? $context["menu_list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "
          <li><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "-->
        </ul>
      </div>
    </div>
  </nav>
  <!--end main navigation-->

  <!--main content-->
  <main class=\"main\" style=\"padding-top: 20px;\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "      </div>
    </div>
  </main>
  <!--end main content-->


  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--JQuery-->
  <script type=\"text/javascript\" src=\"http://auto/views/assets/lib_Jquery/jquery.js\"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script type=\"text/javascript\" src=\"http://auto/views/assets/lib_materialize/js/materialize.min.js\"></script>
  <!--my JS-->
  <script type=\"text/javascript\" src=\"http://auto/views/assets/main_styles/js/main.js\"></script>
  <script type=\"text/javascript\" src=\"http://auto/views/assets/main_styles/js/main-auto.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>

  <script>
      // In your Javascript (external .js resource or <script> tag)
      \$(document).ready(function() {
          \$('.js-example-basic-single').select2();
      });
  </script>
</body>
</html>
";
    }

    // line 45
    public function block_nav($context, array $blocks = array())
    {
        // line 46
        echo "
            ";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        // line 68
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 68,  145 => 67,  140 => 46,  137 => 45,  108 => 70,  106 => 67,  93 => 56,  83 => 55,  80 => 54,  76 => 53,  69 => 48,  67 => 45,  21 => 1,  53 => 10,  50 => 9,  37 => 5,  32 => 4,  29 => 3,);
    }
}
