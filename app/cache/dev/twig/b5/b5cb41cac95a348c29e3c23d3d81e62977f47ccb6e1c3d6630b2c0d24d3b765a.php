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
        $__internal_5506df74911ba99c858d471438863f564680f5dd28dc84b8a79424d908d31593 = $this->env->getExtension("native_profiler");
        $__internal_5506df74911ba99c858d471438863f564680f5dd28dc84b8a79424d908d31593->enter($__internal_5506df74911ba99c858d471438863f564680f5dd28dc84b8a79424d908d31593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "</body>
</html>
";
        
        $__internal_5506df74911ba99c858d471438863f564680f5dd28dc84b8a79424d908d31593->leave($__internal_5506df74911ba99c858d471438863f564680f5dd28dc84b8a79424d908d31593_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ce5cb9ef8e893bf591c14fe160d20074ad39bbc85b4f61669b52ad1d3e882e1 = $this->env->getExtension("native_profiler");
        $__internal_5ce5cb9ef8e893bf591c14fe160d20074ad39bbc85b4f61669b52ad1d3e882e1->enter($__internal_5ce5cb9ef8e893bf591c14fe160d20074ad39bbc85b4f61669b52ad1d3e882e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_5ce5cb9ef8e893bf591c14fe160d20074ad39bbc85b4f61669b52ad1d3e882e1->leave($__internal_5ce5cb9ef8e893bf591c14fe160d20074ad39bbc85b4f61669b52ad1d3e882e1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d269088c7baaad25a079d1576d1b948128d24ac44e9c702884d9e3e3679075d = $this->env->getExtension("native_profiler");
        $__internal_0d269088c7baaad25a079d1576d1b948128d24ac44e9c702884d9e3e3679075d->enter($__internal_0d269088c7baaad25a079d1576d1b948128d24ac44e9c702884d9e3e3679075d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0d269088c7baaad25a079d1576d1b948128d24ac44e9c702884d9e3e3679075d->leave($__internal_0d269088c7baaad25a079d1576d1b948128d24ac44e9c702884d9e3e3679075d_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f30bfd355bda0e1bd3ab46525d67ba2d59d8ad7c12b27f3e63bef91dc0a3f217 = $this->env->getExtension("native_profiler");
        $__internal_f30bfd355bda0e1bd3ab46525d67ba2d59d8ad7c12b27f3e63bef91dc0a3f217->enter($__internal_f30bfd355bda0e1bd3ab46525d67ba2d59d8ad7c12b27f3e63bef91dc0a3f217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "  <main>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-8\">
          <div class=\"content\">
            ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "          </div>
        </div>
        <div class=\"col-md-4\">
          Sidebar
        </div>
      </div>
    </div>
  </main>
  ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_f30bfd355bda0e1bd3ab46525d67ba2d59d8ad7c12b27f3e63bef91dc0a3f217->leave($__internal_f30bfd355bda0e1bd3ab46525d67ba2d59d8ad7c12b27f3e63bef91dc0a3f217_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_b92a90e7794d6b6e95d473bdd14f274043ca8b578c65667ba6c1ddfc7b14a78a = $this->env->getExtension("native_profiler");
        $__internal_b92a90e7794d6b6e95d473bdd14f274043ca8b578c65667ba6c1ddfc7b14a78a->enter($__internal_b92a90e7794d6b6e95d473bdd14f274043ca8b578c65667ba6c1ddfc7b14a78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b92a90e7794d6b6e95d473bdd14f274043ca8b578c65667ba6c1ddfc7b14a78a->leave($__internal_b92a90e7794d6b6e95d473bdd14f274043ca8b578c65667ba6c1ddfc7b14a78a_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_767cfc42a4aed19b1ae3d8bd14746fbf01f1fec6983b0cee954fae4b57ed2e92 = $this->env->getExtension("native_profiler");
        $__internal_767cfc42a4aed19b1ae3d8bd14746fbf01f1fec6983b0cee954fae4b57ed2e92->enter($__internal_767cfc42a4aed19b1ae3d8bd14746fbf01f1fec6983b0cee954fae4b57ed2e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo "            ";
        
        $__internal_767cfc42a4aed19b1ae3d8bd14746fbf01f1fec6983b0cee954fae4b57ed2e92->leave($__internal_767cfc42a4aed19b1ae3d8bd14746fbf01f1fec6983b0cee954fae4b57ed2e92_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_858f9a05375be3fd83cece8bb8ff7f264c4037dbdb6ac6337a9c74c8d47a0b37 = $this->env->getExtension("native_profiler");
        $__internal_858f9a05375be3fd83cece8bb8ff7f264c4037dbdb6ac6337a9c74c8d47a0b37->enter($__internal_858f9a05375be3fd83cece8bb8ff7f264c4037dbdb6ac6337a9c74c8d47a0b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "  <footer>
    &copy; OpenSourceFeeder 2014-2015
  </footer>
";
        
        $__internal_858f9a05375be3fd83cece8bb8ff7f264c4037dbdb6ac6337a9c74c8d47a0b37->leave($__internal_858f9a05375be3fd83cece8bb8ff7f264c4037dbdb6ac6337a9c74c8d47a0b37_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8985200dacdd7e154bf4e78ceca973b7d8b9192d13e9d3ff346846e5a255f2b7 = $this->env->getExtension("native_profiler");
        $__internal_8985200dacdd7e154bf4e78ceca973b7d8b9192d13e9d3ff346846e5a255f2b7->enter($__internal_8985200dacdd7e154bf4e78ceca973b7d8b9192d13e9d3ff346846e5a255f2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8985200dacdd7e154bf4e78ceca973b7d8b9192d13e9d3ff346846e5a255f2b7->leave($__internal_8985200dacdd7e154bf4e78ceca973b7d8b9192d13e9d3ff346846e5a255f2b7_prof);

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
        return array (  232 => 68,  227 => 67,  221 => 66,  211 => 61,  205 => 60,  198 => 51,  192 => 50,  180 => 34,  173 => 30,  158 => 18,  155 => 17,  149 => 16,  142 => 60,  132 => 52,  130 => 50,  123 => 45,  117 => 42,  113 => 41,  110 => 40,  107 => 39,  104 => 16,  98 => 15,  88 => 9,  84 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 70,  50 => 66,  48 => 15,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
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
/*   <main>*/
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
/*   </main>*/
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
