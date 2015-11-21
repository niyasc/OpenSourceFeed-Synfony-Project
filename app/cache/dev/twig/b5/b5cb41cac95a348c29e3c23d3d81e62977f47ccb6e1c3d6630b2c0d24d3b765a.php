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
        $__internal_8b2dbfe3a0bd9c0e7322c625de6750441ec093b72a9c0b458bf4714f5816548f = $this->env->getExtension("native_profiler");
        $__internal_8b2dbfe3a0bd9c0e7322c625de6750441ec093b72a9c0b458bf4714f5816548f->enter($__internal_8b2dbfe3a0bd9c0e7322c625de6750441ec093b72a9c0b458bf4714f5816548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8b2dbfe3a0bd9c0e7322c625de6750441ec093b72a9c0b458bf4714f5816548f->leave($__internal_8b2dbfe3a0bd9c0e7322c625de6750441ec093b72a9c0b458bf4714f5816548f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0e7700c6ec15906dd6e8295ff54621559400750023d5e1ffdf4723377e7b73c = $this->env->getExtension("native_profiler");
        $__internal_f0e7700c6ec15906dd6e8295ff54621559400750023d5e1ffdf4723377e7b73c->enter($__internal_f0e7700c6ec15906dd6e8295ff54621559400750023d5e1ffdf4723377e7b73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_f0e7700c6ec15906dd6e8295ff54621559400750023d5e1ffdf4723377e7b73c->leave($__internal_f0e7700c6ec15906dd6e8295ff54621559400750023d5e1ffdf4723377e7b73c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6128922f11f5945d5546c6f675c5069b1d49daaa3487c8f508b042beadf8c3f = $this->env->getExtension("native_profiler");
        $__internal_c6128922f11f5945d5546c6f675c5069b1d49daaa3487c8f508b042beadf8c3f->enter($__internal_c6128922f11f5945d5546c6f675c5069b1d49daaa3487c8f508b042beadf8c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c6128922f11f5945d5546c6f675c5069b1d49daaa3487c8f508b042beadf8c3f->leave($__internal_c6128922f11f5945d5546c6f675c5069b1d49daaa3487c8f508b042beadf8c3f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ccc012b96f57c815c7797d0d1ac7af2f77fc5811bb83644bef99751496a4eaa = $this->env->getExtension("native_profiler");
        $__internal_4ccc012b96f57c815c7797d0d1ac7af2f77fc5811bb83644bef99751496a4eaa->enter($__internal_4ccc012b96f57c815c7797d0d1ac7af2f77fc5811bb83644bef99751496a4eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ccc012b96f57c815c7797d0d1ac7af2f77fc5811bb83644bef99751496a4eaa->leave($__internal_4ccc012b96f57c815c7797d0d1ac7af2f77fc5811bb83644bef99751496a4eaa_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_1f2b4209c2d4bb5d55e92d716284cc22ff15a9e1847c158b59b903991e8d0160 = $this->env->getExtension("native_profiler");
        $__internal_1f2b4209c2d4bb5d55e92d716284cc22ff15a9e1847c158b59b903991e8d0160->enter($__internal_1f2b4209c2d4bb5d55e92d716284cc22ff15a9e1847c158b59b903991e8d0160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1f2b4209c2d4bb5d55e92d716284cc22ff15a9e1847c158b59b903991e8d0160->leave($__internal_1f2b4209c2d4bb5d55e92d716284cc22ff15a9e1847c158b59b903991e8d0160_prof);

    }

    // line 47
    public function block_main($context, array $blocks = array())
    {
        $__internal_2160afeaa3b65a73ba31807fe5757b9878e738e6d3985a8e140c5b98d78b4bb0 = $this->env->getExtension("native_profiler");
        $__internal_2160afeaa3b65a73ba31807fe5757b9878e738e6d3985a8e140c5b98d78b4bb0->enter($__internal_2160afeaa3b65a73ba31807fe5757b9878e738e6d3985a8e140c5b98d78b4bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_2160afeaa3b65a73ba31807fe5757b9878e738e6d3985a8e140c5b98d78b4bb0->leave($__internal_2160afeaa3b65a73ba31807fe5757b9878e738e6d3985a8e140c5b98d78b4bb0_prof);

    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        $__internal_65ca031b0a6f2be22d953c9df0e841bcc06efa7e1499911c8136130d36612ca1 = $this->env->getExtension("native_profiler");
        $__internal_65ca031b0a6f2be22d953c9df0e841bcc06efa7e1499911c8136130d36612ca1->enter($__internal_65ca031b0a6f2be22d953c9df0e841bcc06efa7e1499911c8136130d36612ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "            ";
        
        $__internal_65ca031b0a6f2be22d953c9df0e841bcc06efa7e1499911c8136130d36612ca1->leave($__internal_65ca031b0a6f2be22d953c9df0e841bcc06efa7e1499911c8136130d36612ca1_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ba4280ba54b580f955e07df8c3878f70c831bbeb5b3826aa5882f65edd01fac0 = $this->env->getExtension("native_profiler");
        $__internal_ba4280ba54b580f955e07df8c3878f70c831bbeb5b3826aa5882f65edd01fac0->enter($__internal_ba4280ba54b580f955e07df8c3878f70c831bbeb5b3826aa5882f65edd01fac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 65
        echo "<footer>
  &copy; OpenSourceFeeder 2014-2015
</footer>
";
        
        $__internal_ba4280ba54b580f955e07df8c3878f70c831bbeb5b3826aa5882f65edd01fac0->leave($__internal_ba4280ba54b580f955e07df8c3878f70c831bbeb5b3826aa5882f65edd01fac0_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83a648f8b914b4bfa33c70d858d44ac2307ee3fc122cd59eb245ed51d2161136 = $this->env->getExtension("native_profiler");
        $__internal_83a648f8b914b4bfa33c70d858d44ac2307ee3fc122cd59eb245ed51d2161136->enter($__internal_83a648f8b914b4bfa33c70d858d44ac2307ee3fc122cd59eb245ed51d2161136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_83a648f8b914b4bfa33c70d858d44ac2307ee3fc122cd59eb245ed51d2161136->leave($__internal_83a648f8b914b4bfa33c70d858d44ac2307ee3fc122cd59eb245ed51d2161136_prof);

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
