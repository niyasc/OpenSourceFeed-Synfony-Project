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
        $__internal_afba88afcdb87872cdb766ac11add82e1c112d36aa998b92da8436820dfdd4e5 = $this->env->getExtension("native_profiler");
        $__internal_afba88afcdb87872cdb766ac11add82e1c112d36aa998b92da8436820dfdd4e5->enter($__internal_afba88afcdb87872cdb766ac11add82e1c112d36aa998b92da8436820dfdd4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 48
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "</body>
</html>
";
        
        $__internal_afba88afcdb87872cdb766ac11add82e1c112d36aa998b92da8436820dfdd4e5->leave($__internal_afba88afcdb87872cdb766ac11add82e1c112d36aa998b92da8436820dfdd4e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8de3f9bfc0a64c5d80dc5ac9656c596f6951f30443dd7c6249674baa257ecc1 = $this->env->getExtension("native_profiler");
        $__internal_d8de3f9bfc0a64c5d80dc5ac9656c596f6951f30443dd7c6249674baa257ecc1->enter($__internal_d8de3f9bfc0a64c5d80dc5ac9656c596f6951f30443dd7c6249674baa257ecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_d8de3f9bfc0a64c5d80dc5ac9656c596f6951f30443dd7c6249674baa257ecc1->leave($__internal_d8de3f9bfc0a64c5d80dc5ac9656c596f6951f30443dd7c6249674baa257ecc1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e4f2c6f9dd89e5aea5693e044e79c2f84fce49e0784fa600e8aea333eba4f45 = $this->env->getExtension("native_profiler");
        $__internal_1e4f2c6f9dd89e5aea5693e044e79c2f84fce49e0784fa600e8aea333eba4f45->enter($__internal_1e4f2c6f9dd89e5aea5693e044e79c2f84fce49e0784fa600e8aea333eba4f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1e4f2c6f9dd89e5aea5693e044e79c2f84fce49e0784fa600e8aea333eba4f45->leave($__internal_1e4f2c6f9dd89e5aea5693e044e79c2f84fce49e0784fa600e8aea333eba4f45_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8f063541c8f7734cec51922039969e34329d965cc22b3cffd7c06ec89a0a285 = $this->env->getExtension("native_profiler");
        $__internal_c8f063541c8f7734cec51922039969e34329d965cc22b3cffd7c06ec89a0a285->enter($__internal_c8f063541c8f7734cec51922039969e34329d965cc22b3cffd7c06ec89a0a285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "  ";
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "  <div class=\"content\">
    ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "  </div>
  ";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "  ";
        
        $__internal_c8f063541c8f7734cec51922039969e34329d965cc22b3cffd7c06ec89a0a285->leave($__internal_c8f063541c8f7734cec51922039969e34329d965cc22b3cffd7c06ec89a0a285_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_045fe5cd6a0773a793c0e0572850e3de60e298c6c6d29bd6c9a908b26be6edf3 = $this->env->getExtension("native_profiler");
        $__internal_045fe5cd6a0773a793c0e0572850e3de60e298c6c6d29bd6c9a908b26be6edf3->enter($__internal_045fe5cd6a0773a793c0e0572850e3de60e298c6c6d29bd6c9a908b26be6edf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_045fe5cd6a0773a793c0e0572850e3de60e298c6c6d29bd6c9a908b26be6edf3->leave($__internal_045fe5cd6a0773a793c0e0572850e3de60e298c6c6d29bd6c9a908b26be6edf3_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_66b195986fb85c4effca81b39c2b2c7a2d38e29c73f72eb397d03c9541f5e487 = $this->env->getExtension("native_profiler");
        $__internal_66b195986fb85c4effca81b39c2b2c7a2d38e29c73f72eb397d03c9541f5e487->enter($__internal_66b195986fb85c4effca81b39c2b2c7a2d38e29c73f72eb397d03c9541f5e487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "    ";
        
        $__internal_66b195986fb85c4effca81b39c2b2c7a2d38e29c73f72eb397d03c9541f5e487->leave($__internal_66b195986fb85c4effca81b39c2b2c7a2d38e29c73f72eb397d03c9541f5e487_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1de6308a212b0bfd5df4c8e8cb551611c36a207cb38aa88fa71b0b2cde9b41ee = $this->env->getExtension("native_profiler");
        $__internal_1de6308a212b0bfd5df4c8e8cb551611c36a207cb38aa88fa71b0b2cde9b41ee->enter($__internal_1de6308a212b0bfd5df4c8e8cb551611c36a207cb38aa88fa71b0b2cde9b41ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "  <footer>
    &copy; OpenSourceFeeder 2014-2015
  </footer>
  ";
        
        $__internal_1de6308a212b0bfd5df4c8e8cb551611c36a207cb38aa88fa71b0b2cde9b41ee->leave($__internal_1de6308a212b0bfd5df4c8e8cb551611c36a207cb38aa88fa71b0b2cde9b41ee_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd924e462abb6446452c6dbf76301fdaed59696591f0b2fb78b6a6d5518743eb = $this->env->getExtension("native_profiler");
        $__internal_fd924e462abb6446452c6dbf76301fdaed59696591f0b2fb78b6a6d5518743eb->enter($__internal_fd924e462abb6446452c6dbf76301fdaed59696591f0b2fb78b6a6d5518743eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_fd924e462abb6446452c6dbf76301fdaed59696591f0b2fb78b6a6d5518743eb->leave($__internal_fd924e462abb6446452c6dbf76301fdaed59696591f0b2fb78b6a6d5518743eb_prof);

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
        return array (  198 => 50,  193 => 49,  187 => 48,  177 => 43,  171 => 42,  164 => 40,  158 => 39,  131 => 17,  125 => 16,  118 => 47,  116 => 42,  113 => 41,  111 => 39,  108 => 38,  105 => 16,  99 => 15,  89 => 9,  85 => 8,  80 => 7,  74 => 6,  62 => 5,  53 => 52,  50 => 48,  48 => 15,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
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
/*   <div class="content">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/*   </div>*/
/*   {% block footer %}*/
/*   <footer>*/
/*     &copy; OpenSourceFeeder 2014-2015*/
/*   </footer>*/
/*   {% endblock %}*/
/*   {% endblock %}*/
/*   {% block javascripts %}*/
/*   <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>*/
/*   <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>*/
/*   {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
