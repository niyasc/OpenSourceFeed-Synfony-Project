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
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96b1e0856874016305a3b5cf514255f0229750ac2f8158de69720472d4690ca4 = $this->env->getExtension("native_profiler");
        $__internal_96b1e0856874016305a3b5cf514255f0229750ac2f8158de69720472d4690ca4->enter($__internal_96b1e0856874016305a3b5cf514255f0229750ac2f8158de69720472d4690ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_96b1e0856874016305a3b5cf514255f0229750ac2f8158de69720472d4690ca4->leave($__internal_96b1e0856874016305a3b5cf514255f0229750ac2f8158de69720472d4690ca4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcc876703e9d5e4f818eacc0f38ce4bee0c9c447c18b87dc42ccd148429b0b70 = $this->env->getExtension("native_profiler");
        $__internal_bcc876703e9d5e4f818eacc0f38ce4bee0c9c447c18b87dc42ccd148429b0b70->enter($__internal_bcc876703e9d5e4f818eacc0f38ce4bee0c9c447c18b87dc42ccd148429b0b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_bcc876703e9d5e4f818eacc0f38ce4bee0c9c447c18b87dc42ccd148429b0b70->leave($__internal_bcc876703e9d5e4f818eacc0f38ce4bee0c9c447c18b87dc42ccd148429b0b70_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fb8d74149d2c9cdf6353571d79724616577d45db7c70cd5e26f24c1d8ef13f8 = $this->env->getExtension("native_profiler");
        $__internal_1fb8d74149d2c9cdf6353571d79724616577d45db7c70cd5e26f24c1d8ef13f8->enter($__internal_1fb8d74149d2c9cdf6353571d79724616577d45db7c70cd5e26f24c1d8ef13f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1fb8d74149d2c9cdf6353571d79724616577d45db7c70cd5e26f24c1d8ef13f8->leave($__internal_1fb8d74149d2c9cdf6353571d79724616577d45db7c70cd5e26f24c1d8ef13f8_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_962b7de815cea621042114a39e489cb9956cac107abdfc5b9721a7365b47ec08 = $this->env->getExtension("native_profiler");
        $__internal_962b7de815cea621042114a39e489cb9956cac107abdfc5b9721a7365b47ec08->enter($__internal_962b7de815cea621042114a39e489cb9956cac107abdfc5b9721a7365b47ec08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo $this->env->getExtension('routing')->getPath("logout");
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
        
        $__internal_962b7de815cea621042114a39e489cb9956cac107abdfc5b9721a7365b47ec08->leave($__internal_962b7de815cea621042114a39e489cb9956cac107abdfc5b9721a7365b47ec08_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_1937edaf8bb3a7127b74eb78b81719470d329a008a3ed0cbc0f9fea039572efe = $this->env->getExtension("native_profiler");
        $__internal_1937edaf8bb3a7127b74eb78b81719470d329a008a3ed0cbc0f9fea039572efe->enter($__internal_1937edaf8bb3a7127b74eb78b81719470d329a008a3ed0cbc0f9fea039572efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1937edaf8bb3a7127b74eb78b81719470d329a008a3ed0cbc0f9fea039572efe->leave($__internal_1937edaf8bb3a7127b74eb78b81719470d329a008a3ed0cbc0f9fea039572efe_prof);

    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        $__internal_13408f3e2538511ef6602745d9725d448235ea2ec68f5280bbf6777a0836626a = $this->env->getExtension("native_profiler");
        $__internal_13408f3e2538511ef6602745d9725d448235ea2ec68f5280bbf6777a0836626a->enter($__internal_13408f3e2538511ef6602745d9725d448235ea2ec68f5280bbf6777a0836626a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 46
        echo "    ";
        
        $__internal_13408f3e2538511ef6602745d9725d448235ea2ec68f5280bbf6777a0836626a->leave($__internal_13408f3e2538511ef6602745d9725d448235ea2ec68f5280bbf6777a0836626a_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0030179483da871147932a7d6ef8f18d7e4f54adac49b62ce691ae4c94eaca5d = $this->env->getExtension("native_profiler");
        $__internal_0030179483da871147932a7d6ef8f18d7e4f54adac49b62ce691ae4c94eaca5d->enter($__internal_0030179483da871147932a7d6ef8f18d7e4f54adac49b62ce691ae4c94eaca5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "  <footer>
    &copy; OpenSourceFeeder 2014-2015
  </footer>
";
        
        $__internal_0030179483da871147932a7d6ef8f18d7e4f54adac49b62ce691ae4c94eaca5d->leave($__internal_0030179483da871147932a7d6ef8f18d7e4f54adac49b62ce691ae4c94eaca5d_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ae7cf8322c5dfca87db9df2f8e2c92475274092477a87105577640a1061466d = $this->env->getExtension("native_profiler");
        $__internal_7ae7cf8322c5dfca87db9df2f8e2c92475274092477a87105577640a1061466d->enter($__internal_7ae7cf8322c5dfca87db9df2f8e2c92475274092477a87105577640a1061466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7ae7cf8322c5dfca87db9df2f8e2c92475274092477a87105577640a1061466d->leave($__internal_7ae7cf8322c5dfca87db9df2f8e2c92475274092477a87105577640a1061466d_prof);

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
/*     <a class="btn btn-sm btn-primary custom-btn" href="{{ path('logout') }}">Logout</a>*/
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
