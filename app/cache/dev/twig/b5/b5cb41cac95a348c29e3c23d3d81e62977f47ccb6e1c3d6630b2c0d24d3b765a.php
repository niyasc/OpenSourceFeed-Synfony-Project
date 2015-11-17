<?php

/* ::base.html.twig */
class __TwigTemplate_f9a64e87652b118ab65caf08ecdfe86e154776befaed2d3cf0d505050c6078f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1287592362e20a4be8ae74c392b8071a5bd84f850fefa9b7d04f91bf5abc9e27 = $this->env->getExtension("native_profiler");
        $__internal_1287592362e20a4be8ae74c392b8071a5bd84f850fefa9b7d04f91bf5abc9e27->enter($__internal_1287592362e20a4be8ae74c392b8071a5bd84f850fefa9b7d04f91bf5abc9e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body class=\"container-fluid\">
  ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "</body>
</html>
";
        
        $__internal_1287592362e20a4be8ae74c392b8071a5bd84f850fefa9b7d04f91bf5abc9e27->leave($__internal_1287592362e20a4be8ae74c392b8071a5bd84f850fefa9b7d04f91bf5abc9e27_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77af4487adb184c477cdef5c3ccd1cd6b72b9c1a866e20e6e385bdc1d737b87f = $this->env->getExtension("native_profiler");
        $__internal_77af4487adb184c477cdef5c3ccd1cd6b72b9c1a866e20e6e385bdc1d737b87f->enter($__internal_77af4487adb184c477cdef5c3ccd1cd6b72b9c1a866e20e6e385bdc1d737b87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_77af4487adb184c477cdef5c3ccd1cd6b72b9c1a866e20e6e385bdc1d737b87f->leave($__internal_77af4487adb184c477cdef5c3ccd1cd6b72b9c1a866e20e6e385bdc1d737b87f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1b924ac51dafdd1738b9c5b3ee73197dea0c0b18cf6a14fb4e355f026cdd713 = $this->env->getExtension("native_profiler");
        $__internal_c1b924ac51dafdd1738b9c5b3ee73197dea0c0b18cf6a14fb4e355f026cdd713->enter($__internal_c1b924ac51dafdd1738b9c5b3ee73197dea0c0b18cf6a14fb4e355f026cdd713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

  ";
        
        $__internal_c1b924ac51dafdd1738b9c5b3ee73197dea0c0b18cf6a14fb4e355f026cdd713->leave($__internal_c1b924ac51dafdd1738b9c5b3ee73197dea0c0b18cf6a14fb4e355f026cdd713_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_48d2284e7e450c49398753e38a98a38e5c0a6746ffbe23baa998967214a63eeb = $this->env->getExtension("native_profiler");
        $__internal_48d2284e7e450c49398753e38a98a38e5c0a6746ffbe23baa998967214a63eeb->enter($__internal_48d2284e7e450c49398753e38a98a38e5c0a6746ffbe23baa998967214a63eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "  ";
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "  <div class=\"admin-panel\">
    Hi, ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
    <a class=\"btn btn-sm btn-primary custom-btn\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout", array("target_url" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()))), "html", null, true);
            echo "\">Logout</a>
  </div>
  ";
        }
        // line 45
        echo "
  <main>
    ";
        // line 47
        $this->displayBlock('main', $context, $blocks);
        // line 61
        echo " <!-- End of Main -->
</main>

";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_48d2284e7e450c49398753e38a98a38e5c0a6746ffbe23baa998967214a63eeb->leave($__internal_48d2284e7e450c49398753e38a98a38e5c0a6746ffbe23baa998967214a63eeb_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_dee9427a8c7d9ea38588496b22daf1571259ea13bb8c299ea19d4ce776389073 = $this->env->getExtension("native_profiler");
        $__internal_dee9427a8c7d9ea38588496b22daf1571259ea13bb8c299ea19d4ce776389073->enter($__internal_dee9427a8c7d9ea38588496b22daf1571259ea13bb8c299ea19d4ce776389073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "  <header>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
      <h1>OpenSourceFeed</h1>
    </a>
    <p>
      Stories of Free/Open Source Technologies
    </p>
  </header>
  <div id=\"menu-btn\">
    &#9776; MENU
  </div>
  <nav>
    <ul>
      <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Home</a></li>
      <li><a href=\"#\">Review</a></li>
      <li><a href=\"#\">News</a></li>
      <li><a href=\"#\">Tutorials</a></li>
      <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\">News Letter</a></li>
      <li><a href=\"#\">About</a></li>
    </ul>
  </nav>
  ";
        
        $__internal_dee9427a8c7d9ea38588496b22daf1571259ea13bb8c299ea19d4ce776389073->leave($__internal_dee9427a8c7d9ea38588496b22daf1571259ea13bb8c299ea19d4ce776389073_prof);

    }

    // line 47
    public function block_main($context, array $blocks = array())
    {
        $__internal_d638b2f5bd1f81b32a9aaa6fafcd272b950219cee232e35175de7d3fdafd5e61 = $this->env->getExtension("native_profiler");
        $__internal_d638b2f5bd1f81b32a9aaa6fafcd272b950219cee232e35175de7d3fdafd5e61->enter($__internal_d638b2f5bd1f81b32a9aaa6fafcd272b950219cee232e35175de7d3fdafd5e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 48
        echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-8\">
          <div class=\"content\">
            ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "          </div>
        </div>
        <div class=\"col-md-4\">
          Sidebar
        </div>
      </div>
    </div>
  ";
        
        $__internal_d638b2f5bd1f81b32a9aaa6fafcd272b950219cee232e35175de7d3fdafd5e61->leave($__internal_d638b2f5bd1f81b32a9aaa6fafcd272b950219cee232e35175de7d3fdafd5e61_prof);

    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0b047805cf5979b2d9e34ba274ce5787f84311608b656ea03059d5885d73ee1 = $this->env->getExtension("native_profiler");
        $__internal_b0b047805cf5979b2d9e34ba274ce5787f84311608b656ea03059d5885d73ee1->enter($__internal_b0b047805cf5979b2d9e34ba274ce5787f84311608b656ea03059d5885d73ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "            ";
        
        $__internal_b0b047805cf5979b2d9e34ba274ce5787f84311608b656ea03059d5885d73ee1->leave($__internal_b0b047805cf5979b2d9e34ba274ce5787f84311608b656ea03059d5885d73ee1_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2e51a2f66234c57e3d39c8d6ae7ae7d8929029331c6285cf89e308e0dd972f8f = $this->env->getExtension("native_profiler");
        $__internal_2e51a2f66234c57e3d39c8d6ae7ae7d8929029331c6285cf89e308e0dd972f8f->enter($__internal_2e51a2f66234c57e3d39c8d6ae7ae7d8929029331c6285cf89e308e0dd972f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 65
        echo "<footer>
  &copy; OpenSourceFeeder 2014-2015
</footer>
";
        
        $__internal_2e51a2f66234c57e3d39c8d6ae7ae7d8929029331c6285cf89e308e0dd972f8f->leave($__internal_2e51a2f66234c57e3d39c8d6ae7ae7d8929029331c6285cf89e308e0dd972f8f_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55eeaf8829d9b8d4faaa8f1ed109cd9b2abd1d05df8b7bfbeaf5003fa86ea6c4 = $this->env->getExtension("native_profiler");
        $__internal_55eeaf8829d9b8d4faaa8f1ed109cd9b2abd1d05df8b7bfbeaf5003fa86ea6c4->enter($__internal_55eeaf8829d9b8d4faaa8f1ed109cd9b2abd1d05df8b7bfbeaf5003fa86ea6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_55eeaf8829d9b8d4faaa8f1ed109cd9b2abd1d05df8b7bfbeaf5003fa86ea6c4->leave($__internal_55eeaf8829d9b8d4faaa8f1ed109cd9b2abd1d05df8b7bfbeaf5003fa86ea6c4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 72,  248 => 71,  242 => 70,  232 => 65,  226 => 64,  219 => 53,  213 => 52,  199 => 54,  197 => 52,  191 => 48,  185 => 47,  173 => 34,  166 => 30,  151 => 18,  148 => 17,  142 => 16,  135 => 64,  130 => 61,  128 => 47,  124 => 45,  118 => 42,  114 => 41,  111 => 40,  108 => 39,  105 => 16,  99 => 15,  89 => 9,  85 => 8,  80 => 7,  74 => 6,  62 => 5,  53 => 74,  51 => 70,  49 => 15,  42 => 12,  40 => 6,  36 => 5,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="UTF-8" />*/
/*   <title>{% block title %}OpenSourceFeed - Stories of Free/Open Source Technologies{% endblock %}</title>*/
/*   {% block stylesheets %}*/
/*   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*   <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}" />*/
/*   <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/* */
/*   {% endblock %}*/
/*   <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body class="container-fluid">*/
/*   {% block body %}*/
/*   {% block header %}*/
/*   <header>*/
/*     <a href="{{ path('homepage') }}">*/
/*       <h1>OpenSourceFeed</h1>*/
/*     </a>*/
/*     <p>*/
/*       Stories of Free/Open Source Technologies*/
/*     </p>*/
/*   </header>*/
/*   <div id="menu-btn">*/
/*     &#9776; MENU*/
/*   </div>*/
/*   <nav>*/
/*     <ul>*/
/*       <li><a href="{{ path('homepage') }}">Home</a></li>*/
/*       <li><a href="#">Review</a></li>*/
/*       <li><a href="#">News</a></li>*/
/*       <li><a href="#">Tutorials</a></li>*/
/*       <li><a href="{{ path('newsletter') }}">News Letter</a></li>*/
/*       <li><a href="#">About</a></li>*/
/*     </ul>*/
/*   </nav>*/
/*   {% endblock %}*/
/*   {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*   <div class="admin-panel">*/
/*     Hi, {{ app.user.username }}*/
/*     <a class="btn btn-sm btn-primary custom-btn" href="{{ path('logout', {'target_url': app.request.uri})  }}">Logout</a>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   <main>*/
/*     {% block main %}*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-sm-8">*/
/*           <div class="content">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*           Sidebar*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endblock %} <!-- End of Main -->*/
/* </main>*/
/* */
/* {% block footer %}*/
/* <footer>*/
/*   &copy; OpenSourceFeeder 2014-2015*/
/* </footer>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
