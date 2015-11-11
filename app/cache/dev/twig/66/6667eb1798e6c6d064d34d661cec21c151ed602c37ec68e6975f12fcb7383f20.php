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
        $__internal_acce9ae77c5d857fcfda82035b9b6aca4dd5a965ae7fa9197a414ae63b8743d1 = $this->env->getExtension("native_profiler");
        $__internal_acce9ae77c5d857fcfda82035b9b6aca4dd5a965ae7fa9197a414ae63b8743d1->enter($__internal_acce9ae77c5d857fcfda82035b9b6aca4dd5a965ae7fa9197a414ae63b8743d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
<body>
  ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "</body>
</html>
";
        
        $__internal_acce9ae77c5d857fcfda82035b9b6aca4dd5a965ae7fa9197a414ae63b8743d1->leave($__internal_acce9ae77c5d857fcfda82035b9b6aca4dd5a965ae7fa9197a414ae63b8743d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7df3e794087323d794ecce49179c2a3dadaee8dc20c79a0e0bc31612bd7ab98 = $this->env->getExtension("native_profiler");
        $__internal_f7df3e794087323d794ecce49179c2a3dadaee8dc20c79a0e0bc31612bd7ab98->enter($__internal_f7df3e794087323d794ecce49179c2a3dadaee8dc20c79a0e0bc31612bd7ab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_f7df3e794087323d794ecce49179c2a3dadaee8dc20c79a0e0bc31612bd7ab98->leave($__internal_f7df3e794087323d794ecce49179c2a3dadaee8dc20c79a0e0bc31612bd7ab98_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d7b774027ef8b55d75be06a5f725fd689802d225c864e6e29ea58be39596053 = $this->env->getExtension("native_profiler");
        $__internal_5d7b774027ef8b55d75be06a5f725fd689802d225c864e6e29ea58be39596053->enter($__internal_5d7b774027ef8b55d75be06a5f725fd689802d225c864e6e29ea58be39596053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5d7b774027ef8b55d75be06a5f725fd689802d225c864e6e29ea58be39596053->leave($__internal_5d7b774027ef8b55d75be06a5f725fd689802d225c864e6e29ea58be39596053_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bf6f747a7d35f9d38e6ac286e1cc4fa3c7b272417f2d488ad3eab94823e19d2 = $this->env->getExtension("native_profiler");
        $__internal_7bf6f747a7d35f9d38e6ac286e1cc4fa3c7b272417f2d488ad3eab94823e19d2->enter($__internal_7bf6f747a7d35f9d38e6ac286e1cc4fa3c7b272417f2d488ad3eab94823e19d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "  ";
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_7bf6f747a7d35f9d38e6ac286e1cc4fa3c7b272417f2d488ad3eab94823e19d2->leave($__internal_7bf6f747a7d35f9d38e6ac286e1cc4fa3c7b272417f2d488ad3eab94823e19d2_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_4ed66b3dad0065b74b0826c1257c98fc8b185286caf598c517e5bd7eba110a4d = $this->env->getExtension("native_profiler");
        $__internal_4ed66b3dad0065b74b0826c1257c98fc8b185286caf598c517e5bd7eba110a4d->enter($__internal_4ed66b3dad0065b74b0826c1257c98fc8b185286caf598c517e5bd7eba110a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "  <header>
    <h1>OpenSourceFeed</h1>
  </header>
  ";
        
        $__internal_4ed66b3dad0065b74b0826c1257c98fc8b185286caf598c517e5bd7eba110a4d->leave($__internal_4ed66b3dad0065b74b0826c1257c98fc8b185286caf598c517e5bd7eba110a4d_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_63c64a9526e8078b56d0873b1ac436313d9624a17c79830a6d3e127953dd8651 = $this->env->getExtension("native_profiler");
        $__internal_63c64a9526e8078b56d0873b1ac436313d9624a17c79830a6d3e127953dd8651->enter($__internal_63c64a9526e8078b56d0873b1ac436313d9624a17c79830a6d3e127953dd8651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "  ";
        
        $__internal_63c64a9526e8078b56d0873b1ac436313d9624a17c79830a6d3e127953dd8651->leave($__internal_63c64a9526e8078b56d0873b1ac436313d9624a17c79830a6d3e127953dd8651_prof);

    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6de4071e634530fb0c2a09ee5c8ec8fe43b9d3819265f8a3e984cd3267eff581 = $this->env->getExtension("native_profiler");
        $__internal_6de4071e634530fb0c2a09ee5c8ec8fe43b9d3819265f8a3e984cd3267eff581->enter($__internal_6de4071e634530fb0c2a09ee5c8ec8fe43b9d3819265f8a3e984cd3267eff581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 24
        echo "  <footer>
    &copy; OpenSourceFeeder 2014-2015
  </footer>
  ";
        
        $__internal_6de4071e634530fb0c2a09ee5c8ec8fe43b9d3819265f8a3e984cd3267eff581->leave($__internal_6de4071e634530fb0c2a09ee5c8ec8fe43b9d3819265f8a3e984cd3267eff581_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8143f15b6c4994e41af7236103ae472d9e15e0c93740f20cd71e8814f02bd0c = $this->env->getExtension("native_profiler");
        $__internal_f8143f15b6c4994e41af7236103ae472d9e15e0c93740f20cd71e8814f02bd0c->enter($__internal_f8143f15b6c4994e41af7236103ae472d9e15e0c93740f20cd71e8814f02bd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f8143f15b6c4994e41af7236103ae472d9e15e0c93740f20cd71e8814f02bd0c->leave($__internal_f8143f15b6c4994e41af7236103ae472d9e15e0c93740f20cd71e8814f02bd0c_prof);

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
        return array (  165 => 29,  155 => 24,  149 => 23,  142 => 22,  136 => 21,  126 => 17,  120 => 16,  113 => 28,  110 => 23,  107 => 21,  104 => 16,  98 => 15,  88 => 9,  84 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 30,  50 => 29,  48 => 15,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
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
/* <body>*/
/*   {% block body %}*/
/*   {% block header %}*/
/*   <header>*/
/*     <h1>OpenSourceFeed</h1>*/
/*   </header>*/
/*   {% endblock %}*/
/*   {% block content %}*/
/*   {% endblock %}*/
/*   {% block footer %}*/
/*   <footer>*/
/*     &copy; OpenSourceFeeder 2014-2015*/
/*   </footer>*/
/*   {% endblock %}*/
/*   {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
