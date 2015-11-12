<?php

/* ::base.html.twig */
class __TwigTemplate_0530f17b7b101d275aa5daf74e91098c63bd4d04bdde28c470c2029913755fc6 extends Twig_Template
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
        $__internal_acfae206e928881ea80986b7dca2178d90ecf499557e57dcf25b57d1a79be3c5 = $this->env->getExtension("native_profiler");
        $__internal_acfae206e928881ea80986b7dca2178d90ecf499557e57dcf25b57d1a79be3c5->enter($__internal_acfae206e928881ea80986b7dca2178d90ecf499557e57dcf25b57d1a79be3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_acfae206e928881ea80986b7dca2178d90ecf499557e57dcf25b57d1a79be3c5->leave($__internal_acfae206e928881ea80986b7dca2178d90ecf499557e57dcf25b57d1a79be3c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_964f615f4547a17851a9389cb75b09125387fce0c2a0a46910a8eb2665aa4bb7 = $this->env->getExtension("native_profiler");
        $__internal_964f615f4547a17851a9389cb75b09125387fce0c2a0a46910a8eb2665aa4bb7->enter($__internal_964f615f4547a17851a9389cb75b09125387fce0c2a0a46910a8eb2665aa4bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_964f615f4547a17851a9389cb75b09125387fce0c2a0a46910a8eb2665aa4bb7->leave($__internal_964f615f4547a17851a9389cb75b09125387fce0c2a0a46910a8eb2665aa4bb7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a16ae574000597f520f18d4b7e1c90da5fb01f4080b10298221dfbb18c8d5a4 = $this->env->getExtension("native_profiler");
        $__internal_3a16ae574000597f520f18d4b7e1c90da5fb01f4080b10298221dfbb18c8d5a4->enter($__internal_3a16ae574000597f520f18d4b7e1c90da5fb01f4080b10298221dfbb18c8d5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3a16ae574000597f520f18d4b7e1c90da5fb01f4080b10298221dfbb18c8d5a4->leave($__internal_3a16ae574000597f520f18d4b7e1c90da5fb01f4080b10298221dfbb18c8d5a4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_442b210fc8907b17c98d6340abc1adbe992d357424edd3e8eaa48e3b3b051e5f = $this->env->getExtension("native_profiler");
        $__internal_442b210fc8907b17c98d6340abc1adbe992d357424edd3e8eaa48e3b3b051e5f->enter($__internal_442b210fc8907b17c98d6340abc1adbe992d357424edd3e8eaa48e3b3b051e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_442b210fc8907b17c98d6340abc1adbe992d357424edd3e8eaa48e3b3b051e5f->leave($__internal_442b210fc8907b17c98d6340abc1adbe992d357424edd3e8eaa48e3b3b051e5f_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_15745fb24546f27a1f181a03f23aaf48ad816f5c49e42f950bce7b6084c8cd7a = $this->env->getExtension("native_profiler");
        $__internal_15745fb24546f27a1f181a03f23aaf48ad816f5c49e42f950bce7b6084c8cd7a->enter($__internal_15745fb24546f27a1f181a03f23aaf48ad816f5c49e42f950bce7b6084c8cd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_15745fb24546f27a1f181a03f23aaf48ad816f5c49e42f950bce7b6084c8cd7a->leave($__internal_15745fb24546f27a1f181a03f23aaf48ad816f5c49e42f950bce7b6084c8cd7a_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_df9924bdef7c9465bb144ac5a2821c8570ee83d18051184f323463b0aa1b5b39 = $this->env->getExtension("native_profiler");
        $__internal_df9924bdef7c9465bb144ac5a2821c8570ee83d18051184f323463b0aa1b5b39->enter($__internal_df9924bdef7c9465bb144ac5a2821c8570ee83d18051184f323463b0aa1b5b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "    ";
        
        $__internal_df9924bdef7c9465bb144ac5a2821c8570ee83d18051184f323463b0aa1b5b39->leave($__internal_df9924bdef7c9465bb144ac5a2821c8570ee83d18051184f323463b0aa1b5b39_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1856f0f195118fc754b9af4a3cf860f43e99b52e2b3851c0e62bf7aaa1a5f3dc = $this->env->getExtension("native_profiler");
        $__internal_1856f0f195118fc754b9af4a3cf860f43e99b52e2b3851c0e62bf7aaa1a5f3dc->enter($__internal_1856f0f195118fc754b9af4a3cf860f43e99b52e2b3851c0e62bf7aaa1a5f3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "  <footer>
    &copy; OpenSourceFeeder 2014-2015
  </footer>
  ";
        
        $__internal_1856f0f195118fc754b9af4a3cf860f43e99b52e2b3851c0e62bf7aaa1a5f3dc->leave($__internal_1856f0f195118fc754b9af4a3cf860f43e99b52e2b3851c0e62bf7aaa1a5f3dc_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7b534d15b7cdcc83bb0a8e1eb5686990cb9b70405eca53dca4e22db375243c2 = $this->env->getExtension("native_profiler");
        $__internal_b7b534d15b7cdcc83bb0a8e1eb5686990cb9b70405eca53dca4e22db375243c2->enter($__internal_b7b534d15b7cdcc83bb0a8e1eb5686990cb9b70405eca53dca4e22db375243c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_b7b534d15b7cdcc83bb0a8e1eb5686990cb9b70405eca53dca4e22db375243c2->leave($__internal_b7b534d15b7cdcc83bb0a8e1eb5686990cb9b70405eca53dca4e22db375243c2_prof);

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
