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
        $__internal_0ebf5a50ee1c6970675878aabcdf2417b667616f2defadabb75ddc14f641dcc1 = $this->env->getExtension("native_profiler");
        $__internal_0ebf5a50ee1c6970675878aabcdf2417b667616f2defadabb75ddc14f641dcc1->enter($__internal_0ebf5a50ee1c6970675878aabcdf2417b667616f2defadabb75ddc14f641dcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "</body>
</html>
";
        
        $__internal_0ebf5a50ee1c6970675878aabcdf2417b667616f2defadabb75ddc14f641dcc1->leave($__internal_0ebf5a50ee1c6970675878aabcdf2417b667616f2defadabb75ddc14f641dcc1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_16231b8baeb5ec13c459f10159afc3a9cc67a929a0383f8c9008354d64937833 = $this->env->getExtension("native_profiler");
        $__internal_16231b8baeb5ec13c459f10159afc3a9cc67a929a0383f8c9008354d64937833->enter($__internal_16231b8baeb5ec13c459f10159afc3a9cc67a929a0383f8c9008354d64937833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_16231b8baeb5ec13c459f10159afc3a9cc67a929a0383f8c9008354d64937833->leave($__internal_16231b8baeb5ec13c459f10159afc3a9cc67a929a0383f8c9008354d64937833_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa907341e7ba4327ec5993adf5a77b8787d7a390d73a23e21c99b0712ef19199 = $this->env->getExtension("native_profiler");
        $__internal_aa907341e7ba4327ec5993adf5a77b8787d7a390d73a23e21c99b0712ef19199->enter($__internal_aa907341e7ba4327ec5993adf5a77b8787d7a390d73a23e21c99b0712ef19199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aa907341e7ba4327ec5993adf5a77b8787d7a390d73a23e21c99b0712ef19199->leave($__internal_aa907341e7ba4327ec5993adf5a77b8787d7a390d73a23e21c99b0712ef19199_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbb2b326b646ded0f62b85262df57e91d2fb04443c3e1843cdf1d825010bf2f1 = $this->env->getExtension("native_profiler");
        $__internal_fbb2b326b646ded0f62b85262df57e91d2fb04443c3e1843cdf1d825010bf2f1->enter($__internal_fbb2b326b646ded0f62b85262df57e91d2fb04443c3e1843cdf1d825010bf2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "  <div class=\"content\">
    ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "  </div>
  ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_fbb2b326b646ded0f62b85262df57e91d2fb04443c3e1843cdf1d825010bf2f1->leave($__internal_fbb2b326b646ded0f62b85262df57e91d2fb04443c3e1843cdf1d825010bf2f1_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_e82f381c5abff54e03064c6efc99d9cba9923dcb2e658b0f83ec90184404ff3a = $this->env->getExtension("native_profiler");
        $__internal_e82f381c5abff54e03064c6efc99d9cba9923dcb2e658b0f83ec90184404ff3a->enter($__internal_e82f381c5abff54e03064c6efc99d9cba9923dcb2e658b0f83ec90184404ff3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_e82f381c5abff54e03064c6efc99d9cba9923dcb2e658b0f83ec90184404ff3a->leave($__internal_e82f381c5abff54e03064c6efc99d9cba9923dcb2e658b0f83ec90184404ff3a_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9513353fa54f282a8f8c5c81817480e111a47b06bb4e97ddd6b0520231fb2b3 = $this->env->getExtension("native_profiler");
        $__internal_c9513353fa54f282a8f8c5c81817480e111a47b06bb4e97ddd6b0520231fb2b3->enter($__internal_c9513353fa54f282a8f8c5c81817480e111a47b06bb4e97ddd6b0520231fb2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 47
        echo "    ";
        
        $__internal_c9513353fa54f282a8f8c5c81817480e111a47b06bb4e97ddd6b0520231fb2b3->leave($__internal_c9513353fa54f282a8f8c5c81817480e111a47b06bb4e97ddd6b0520231fb2b3_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2baea3380c9cdc60d48d25a695b6bc23fab64c89029fd1b88915d0368d20390e = $this->env->getExtension("native_profiler");
        $__internal_2baea3380c9cdc60d48d25a695b6bc23fab64c89029fd1b88915d0368d20390e->enter($__internal_2baea3380c9cdc60d48d25a695b6bc23fab64c89029fd1b88915d0368d20390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "  <footer>
    &copy; OpenSourceFeeder 2014-2015
  </footer>
";
        
        $__internal_2baea3380c9cdc60d48d25a695b6bc23fab64c89029fd1b88915d0368d20390e->leave($__internal_2baea3380c9cdc60d48d25a695b6bc23fab64c89029fd1b88915d0368d20390e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b25ee3c32ebcefae0ec7bfbf9b0aa96a5aa981446d0bf65adb8195d16da41a7c = $this->env->getExtension("native_profiler");
        $__internal_b25ee3c32ebcefae0ec7bfbf9b0aa96a5aa981446d0bf65adb8195d16da41a7c->enter($__internal_b25ee3c32ebcefae0ec7bfbf9b0aa96a5aa981446d0bf65adb8195d16da41a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b25ee3c32ebcefae0ec7bfbf9b0aa96a5aa981446d0bf65adb8195d16da41a7c->leave($__internal_b25ee3c32ebcefae0ec7bfbf9b0aa96a5aa981446d0bf65adb8195d16da41a7c_prof);

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
        return array (  221 => 57,  216 => 56,  210 => 55,  200 => 50,  194 => 49,  187 => 47,  181 => 46,  169 => 34,  162 => 30,  147 => 18,  144 => 17,  138 => 16,  131 => 49,  128 => 48,  126 => 46,  123 => 45,  117 => 42,  113 => 41,  110 => 40,  107 => 39,  104 => 16,  98 => 15,  88 => 9,  84 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 59,  50 => 55,  48 => 15,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
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
