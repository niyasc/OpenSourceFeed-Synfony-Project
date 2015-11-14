<?php

/* base.html.twig */
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
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95c54735a14b2715420ac717030bf8b7d3ce4135838aa340eb790270b7fab09f = $this->env->getExtension("native_profiler");
        $__internal_95c54735a14b2715420ac717030bf8b7d3ce4135838aa340eb790270b7fab09f->enter($__internal_95c54735a14b2715420ac717030bf8b7d3ce4135838aa340eb790270b7fab09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "</body>
</html>
";
        
        $__internal_95c54735a14b2715420ac717030bf8b7d3ce4135838aa340eb790270b7fab09f->leave($__internal_95c54735a14b2715420ac717030bf8b7d3ce4135838aa340eb790270b7fab09f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2f121b76a4ee1aa5bf21c8f85b1b097b8d390dba07d16010e85977755b136d0 = $this->env->getExtension("native_profiler");
        $__internal_b2f121b76a4ee1aa5bf21c8f85b1b097b8d390dba07d16010e85977755b136d0->enter($__internal_b2f121b76a4ee1aa5bf21c8f85b1b097b8d390dba07d16010e85977755b136d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_b2f121b76a4ee1aa5bf21c8f85b1b097b8d390dba07d16010e85977755b136d0->leave($__internal_b2f121b76a4ee1aa5bf21c8f85b1b097b8d390dba07d16010e85977755b136d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_537d124aa975dde3af90de0bd709b6d88504d53ff247a1387b494ed97778236c = $this->env->getExtension("native_profiler");
        $__internal_537d124aa975dde3af90de0bd709b6d88504d53ff247a1387b494ed97778236c->enter($__internal_537d124aa975dde3af90de0bd709b6d88504d53ff247a1387b494ed97778236c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_537d124aa975dde3af90de0bd709b6d88504d53ff247a1387b494ed97778236c->leave($__internal_537d124aa975dde3af90de0bd709b6d88504d53ff247a1387b494ed97778236c_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_26f17e537b67f85fb7672c5d480064e87a5ceffb727938646f0338762ec26423 = $this->env->getExtension("native_profiler");
        $__internal_26f17e537b67f85fb7672c5d480064e87a5ceffb727938646f0338762ec26423->enter($__internal_26f17e537b67f85fb7672c5d480064e87a5ceffb727938646f0338762ec26423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "  ";
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "  <div class=\"admin-panel\">
    Hi, ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
    <a class=\"btn btn-sm btn-primary custom-btn\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout", array("target_url" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()))), "html", null, true);
            echo "\">Logout</a>
  </div>
  ";
        }
        // line 44
        echo "  <div class=\"content\">
    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "  </div>
  ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_26f17e537b67f85fb7672c5d480064e87a5ceffb727938646f0338762ec26423->leave($__internal_26f17e537b67f85fb7672c5d480064e87a5ceffb727938646f0338762ec26423_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_76f09566fa4725c66df323fab589de4b838b1539e2eb209e23e3dc6c5676df7c = $this->env->getExtension("native_profiler");
        $__internal_76f09566fa4725c66df323fab589de4b838b1539e2eb209e23e3dc6c5676df7c->enter($__internal_76f09566fa4725c66df323fab589de4b838b1539e2eb209e23e3dc6c5676df7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "  <header>
    <a href=\"<?=site_url()?>\">
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
      <li><a href=\"#\">Home</a></li>
      <li><a href=\"#\">Review</a></li>
      <li><a href=\"#\">News</a></li>
      <li><a href=\"#\">Tutorials</a></li>
      <li><a href=\"#\">About</a></li>
    </ul>
  </nav>
  ";
        
        $__internal_76f09566fa4725c66df323fab589de4b838b1539e2eb209e23e3dc6c5676df7c->leave($__internal_76f09566fa4725c66df323fab589de4b838b1539e2eb209e23e3dc6c5676df7c_prof);

    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        $__internal_de93969d89b4bdbf6d8b61686b326e68fc6899d0d6101f5f0517cc1f395c5462 = $this->env->getExtension("native_profiler");
        $__internal_de93969d89b4bdbf6d8b61686b326e68fc6899d0d6101f5f0517cc1f395c5462->enter($__internal_de93969d89b4bdbf6d8b61686b326e68fc6899d0d6101f5f0517cc1f395c5462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 46
        echo "    ";
        
        $__internal_de93969d89b4bdbf6d8b61686b326e68fc6899d0d6101f5f0517cc1f395c5462->leave($__internal_de93969d89b4bdbf6d8b61686b326e68fc6899d0d6101f5f0517cc1f395c5462_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        $__internal_873d02c2d211589b30bb47ece8978e4cb388322a34265ba9e952aff2e35bf9e9 = $this->env->getExtension("native_profiler");
        $__internal_873d02c2d211589b30bb47ece8978e4cb388322a34265ba9e952aff2e35bf9e9->enter($__internal_873d02c2d211589b30bb47ece8978e4cb388322a34265ba9e952aff2e35bf9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "  <footer>
    &copy; OpenSourceFeeder 2014-2015
  </footer>
";
        
        $__internal_873d02c2d211589b30bb47ece8978e4cb388322a34265ba9e952aff2e35bf9e9->leave($__internal_873d02c2d211589b30bb47ece8978e4cb388322a34265ba9e952aff2e35bf9e9_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71433af1fdc68fcfbdfe66ab514535d5ba7b5c4895f236c2c7b761b53a3c1ebb = $this->env->getExtension("native_profiler");
        $__internal_71433af1fdc68fcfbdfe66ab514535d5ba7b5c4895f236c2c7b761b53a3c1ebb->enter($__internal_71433af1fdc68fcfbdfe66ab514535d5ba7b5c4895f236c2c7b761b53a3c1ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_71433af1fdc68fcfbdfe66ab514535d5ba7b5c4895f236c2c7b761b53a3c1ebb->leave($__internal_71433af1fdc68fcfbdfe66ab514535d5ba7b5c4895f236c2c7b761b53a3c1ebb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 56,  206 => 55,  200 => 54,  190 => 49,  184 => 48,  177 => 46,  171 => 45,  144 => 17,  138 => 16,  131 => 48,  128 => 47,  126 => 45,  123 => 44,  117 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 16,  98 => 15,  88 => 9,  84 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 58,  50 => 54,  48 => 15,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
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
/*     <a href="<?=site_url()?>">*/
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
/*       <li><a href="#">Home</a></li>*/
/*       <li><a href="#">Review</a></li>*/
/*       <li><a href="#">News</a></li>*/
/*       <li><a href="#">Tutorials</a></li>*/
/*       <li><a href="#">About</a></li>*/
/*     </ul>*/
/*   </nav>*/
/*   {% endblock %}*/
/*   {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*   <div class="admin-panel">*/
/*     Hi, {{ app.user.username }}*/
/*     <a class="btn btn-sm btn-primary custom-btn" href="{{ path('logout', {'target_url': app.request.uri}) }}">Logout</a>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="content">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/*   </div>*/
/*   {% block footer %}*/
/*   <footer>*/
/*     &copy; OpenSourceFeeder 2014-2015*/
/*   </footer>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
