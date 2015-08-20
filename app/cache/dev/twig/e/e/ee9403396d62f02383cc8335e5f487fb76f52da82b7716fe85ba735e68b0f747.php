<?php

/* OpenSourceFeedBundle::base.html.twig */
class __TwigTemplate_ee9403396d62f02383cc8335e5f487fb76f52da82b7716fe85ba735e68b0f747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_13f860ad09bde4d1b9ecd87a5196a25fdc1f0a0f91579d0df1d6fd59cba702cd = $this->env->getExtension("native_profiler");
        $__internal_13f860ad09bde4d1b9ecd87a5196a25fdc1f0a0f91579d0df1d6fd59cba702cd->enter($__internal_13f860ad09bde4d1b9ecd87a5196a25fdc1f0a0f91579d0df1d6fd59cba702cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle::base.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo " ";
        
        $__internal_13f860ad09bde4d1b9ecd87a5196a25fdc1f0a0f91579d0df1d6fd59cba702cd->leave($__internal_13f860ad09bde4d1b9ecd87a5196a25fdc1f0a0f91579d0df1d6fd59cba702cd_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_c569df9089dea055ced45c8e9e9e5a9a8d0e0720d5a336f9a0762437886c8927 = $this->env->getExtension("native_profiler");
        $__internal_c569df9089dea055ced45c8e9e9e5a9a8d0e0720d5a336f9a0762437886c8927->enter($__internal_c569df9089dea055ced45c8e9e9e5a9a8d0e0720d5a336f9a0762437886c8927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "<head>
\t";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t<title> Open Source Feed : ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
</head>
";
        
        $__internal_c569df9089dea055ced45c8e9e9e5a9a8d0e0720d5a336f9a0762437886c8927->leave($__internal_c569df9089dea055ced45c8e9e9e5a9a8d0e0720d5a336f9a0762437886c8927_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c91bd0623cd0e5118aa588f7defe444938f036a16a3e120c0b8d04caff57411 = $this->env->getExtension("native_profiler");
        $__internal_7c91bd0623cd0e5118aa588f7defe444938f036a16a3e120c0b8d04caff57411->enter($__internal_7c91bd0623cd0e5118aa588f7defe444938f036a16a3e120c0b8d04caff57411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6f72308_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f72308_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6f72308_bootstrap.min_1.css");
            // line 7
            echo "
\t<link rel=\"stylesheet\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "6f72308"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f72308") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6f72308.css");
            // line 7
            echo "
\t<link rel=\"stylesheet\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 10
        echo "\t";
        
        $__internal_7c91bd0623cd0e5118aa588f7defe444938f036a16a3e120c0b8d04caff57411->leave($__internal_7c91bd0623cd0e5118aa588f7defe444938f036a16a3e120c0b8d04caff57411_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5dbcd0917059b532b69b30b24f6e85c2d3b1f530465a14ac1b3972512906226 = $this->env->getExtension("native_profiler");
        $__internal_f5dbcd0917059b532b69b30b24f6e85c2d3b1f530465a14ac1b3972512906226->enter($__internal_f5dbcd0917059b532b69b30b24f6e85c2d3b1f530465a14ac1b3972512906226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "<body>
\t";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\tLeft Side Bar
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\tRight Sidebar
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo " ";
        // line 83
        echo "

\t";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo " ";
        // line 95
        echo "
</body>
";
        
        $__internal_f5dbcd0917059b532b69b30b24f6e85c2d3b1f530465a14ac1b3972512906226->leave($__internal_f5dbcd0917059b532b69b30b24f6e85c2d3b1f530465a14ac1b3972512906226_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_0e3873789163bd60fbedcfb5c8d2afe641ea8a48f0c2ec7134e8685ed4de7563 = $this->env->getExtension("native_profiler");
        $__internal_0e3873789163bd60fbedcfb5c8d2afe641ea8a48f0c2ec7134e8685ed4de7563->enter($__internal_0e3873789163bd60fbedcfb5c8d2afe641ea8a48f0c2ec7134e8685ed4de7563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "\t<header>
\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Open Source Feed</a>
\t\t\t\t</div>

\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\">Link</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">One more separated link</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<form class=\"navbar-form navbar-left\" role=\"search\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t\t\t\t\t</form>
\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t</div><!-- /.container-fluid -->
\t\t</nav>
\t</header>
\t";
        
        $__internal_0e3873789163bd60fbedcfb5c8d2afe641ea8a48f0c2ec7134e8685ed4de7563->leave($__internal_0e3873789163bd60fbedcfb5c8d2afe641ea8a48f0c2ec7134e8685ed4de7563_prof);

    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        $__internal_74f53c79d243973575f246afe88b9099337b597b1158df53475897746a610e9f = $this->env->getExtension("native_profiler");
        $__internal_74f53c79d243973575f246afe88b9099337b597b1158df53475897746a610e9f->enter($__internal_74f53c79d243973575f246afe88b9099337b597b1158df53475897746a610e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 68
        echo "\t\t\t\t\tDefault Content
\t\t\t\t";
        
        $__internal_74f53c79d243973575f246afe88b9099337b597b1158df53475897746a610e9f->leave($__internal_74f53c79d243973575f246afe88b9099337b597b1158df53475897746a610e9f_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b8d87fdb8e6ed4688497e66921f97f1d93f1dface5c083e959869b771faae4ab = $this->env->getExtension("native_profiler");
        $__internal_b8d87fdb8e6ed4688497e66921f97f1d93f1dface5c083e959869b771faae4ab->enter($__internal_b8d87fdb8e6ed4688497e66921f97f1d93f1dface5c083e959869b771faae4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "\t<footer>
\t\t&copy; Open Source Feed
\t</footer>

\t";
        
        $__internal_b8d87fdb8e6ed4688497e66921f97f1d93f1dface5c083e959869b771faae4ab->leave($__internal_b8d87fdb8e6ed4688497e66921f97f1d93f1dface5c083e959869b771faae4ab_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f95697c13e80c8afa91ab4c021c1c754b3c6202615b1d956af82eea924b8b8a9 = $this->env->getExtension("native_profiler");
        $__internal_f95697c13e80c8afa91ab4c021c1c754b3c6202615b1d956af82eea924b8b8a9->enter($__internal_f95697c13e80c8afa91ab4c021c1c754b3c6202615b1d956af82eea924b8b8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "13a5ac9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13a5ac9_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/13a5ac9_jquery.min_1.js");
            // line 90
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></<script>

\t</script>
\t";
            // asset "13a5ac9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13a5ac9_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/13a5ac9_bootstrap.min_2.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></<script>

\t</script>
\t";
        } else {
            // asset "13a5ac9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13a5ac9") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/13a5ac9.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></<script>

\t</script>
\t";
        }
        unset($context["asset_url"]);
        // line 94
        echo "\t";
        
        $__internal_f95697c13e80c8afa91ab4c021c1c754b3c6202615b1d956af82eea924b8b8a9->leave($__internal_f95697c13e80c8afa91ab4c021c1c754b3c6202615b1d956af82eea924b8b8a9_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  276 => 94,  250 => 90,  245 => 86,  239 => 85,  228 => 78,  222 => 77,  214 => 68,  208 => 67,  159 => 18,  153 => 17,  144 => 95,  142 => 94,  140 => 85,  136 => 83,  134 => 82,  132 => 77,  123 => 70,  121 => 67,  113 => 61,  111 => 17,  108 => 16,  102 => 15,  95 => 10,  89 => 8,  86 => 7,  79 => 8,  76 => 7,  71 => 4,  65 => 3,  54 => 11,  52 => 3,  49 => 2,  43 => 1,  36 => 97,  34 => 15,  31 => 14,  29 => 1,);
    }
}
