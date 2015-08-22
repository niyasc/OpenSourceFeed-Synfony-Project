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
        $__internal_bbe6122e78ae02f8c410e78d2d21431fb43534d32eff16bce4b5f9bda8d0da00 = $this->env->getExtension("native_profiler");
        $__internal_bbe6122e78ae02f8c410e78d2d21431fb43534d32eff16bce4b5f9bda8d0da00->enter($__internal_bbe6122e78ae02f8c410e78d2d21431fb43534d32eff16bce4b5f9bda8d0da00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle::base.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo " ";
        
        $__internal_bbe6122e78ae02f8c410e78d2d21431fb43534d32eff16bce4b5f9bda8d0da00->leave($__internal_bbe6122e78ae02f8c410e78d2d21431fb43534d32eff16bce4b5f9bda8d0da00_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a977d3f73eddb1e4794c1aa43fed9e973cbbf296d2e8d13b3d4b1a275e5876d = $this->env->getExtension("native_profiler");
        $__internal_3a977d3f73eddb1e4794c1aa43fed9e973cbbf296d2e8d13b3d4b1a275e5876d->enter($__internal_3a977d3f73eddb1e4794c1aa43fed9e973cbbf296d2e8d13b3d4b1a275e5876d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "<head>

\t";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "\t<title> Open Source Feed : ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
";
        
        $__internal_3a977d3f73eddb1e4794c1aa43fed9e973cbbf296d2e8d13b3d4b1a275e5876d->leave($__internal_3a977d3f73eddb1e4794c1aa43fed9e973cbbf296d2e8d13b3d4b1a275e5876d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b14ba6df9667898e2e688ffa4ba77ff71a63a4d661ce5ba7f3e4a59f43e66ef = $this->env->getExtension("native_profiler");
        $__internal_9b14ba6df9667898e2e688ffa4ba77ff71a63a4d661ce5ba7f3e4a59f43e66ef->enter($__internal_9b14ba6df9667898e2e688ffa4ba77ff71a63a4d661ce5ba7f3e4a59f43e66ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5ef2af1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5ef2af1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/5ef2af1_bootstrap.min_1.css");
            // line 9
            echo "
\t<link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "5ef2af1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5ef2af1_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/5ef2af1_style_2.css");
            // line 9
            echo "
\t<link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "5ef2af1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5ef2af1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/5ef2af1.css");
            // line 9
            echo "
\t<link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 12
        echo "\t";
        
        $__internal_9b14ba6df9667898e2e688ffa4ba77ff71a63a4d661ce5ba7f3e4a59f43e66ef->leave($__internal_9b14ba6df9667898e2e688ffa4ba77ff71a63a4d661ce5ba7f3e4a59f43e66ef_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b4b24d2e985a15856f720517f14c1e42aa208cc62a191d75e593eeff10270b3 = $this->env->getExtension("native_profiler");
        $__internal_7b4b24d2e985a15856f720517f14c1e42aa208cc62a191d75e593eeff10270b3->enter($__internal_7b4b24d2e985a15856f720517f14c1e42aa208cc62a191d75e593eeff10270b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<body>
\t";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-md-6 col-md-push-3\">
\t\t\t\t";
        // line 62
        if (array_key_exists("error_message", $context)) {
            // line 63
            echo "\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["error_message"]) ? $context["error_message"] : $this->getContext($context, "error_message")), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-md-pull-6\" style=\"height: 100%; border: 1px solid gray\">
\t\t\t\tLeft Side Bar
\t\t\t</div>
\t\t\t<div class=\"col-md-3\" style=\"height: 100%; border: 1px solid gray\">
\t\t\t\tRight Sidebar
\t\t\t</div>
\t\t</div> <!--end of row -->
\t</div> <!-- end of container-->

\t";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 85
        echo " ";
        // line 86
        echo "

\t";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo " ";
        // line 98
        echo "
</body>
";
        
        $__internal_7b4b24d2e985a15856f720517f14c1e42aa208cc62a191d75e593eeff10270b3->leave($__internal_7b4b24d2e985a15856f720517f14c1e42aa208cc62a191d75e593eeff10270b3_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_291df6f673ab48904e3d88a7ae7099c7e30b91cd2c91d3b86cc7f489152711cf = $this->env->getExtension("native_profiler");
        $__internal_291df6f673ab48904e3d88a7ae7099c7e30b91cd2c91d3b86cc7f489152711cf->enter($__internal_291df6f673ab48904e3d88a7ae7099c7e30b91cd2c91d3b86cc7f489152711cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "\t<header>
\t\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
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
\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t</div><!-- /.container-fluid -->
\t\t</nav>
\t</header>
\t";
        
        $__internal_291df6f673ab48904e3d88a7ae7099c7e30b91cd2c91d3b86cc7f489152711cf->leave($__internal_291df6f673ab48904e3d88a7ae7099c7e30b91cd2c91d3b86cc7f489152711cf_prof);

    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        $__internal_89450d96cdaa828b7c06f2be56c0c10aef950921286efc790bbb74ef8e056a78 = $this->env->getExtension("native_profiler");
        $__internal_89450d96cdaa828b7c06f2be56c0c10aef950921286efc790bbb74ef8e056a78->enter($__internal_89450d96cdaa828b7c06f2be56c0c10aef950921286efc790bbb74ef8e056a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 68
        echo "\t\t\t\tDefault Content
\t\t\t\t";
        
        $__internal_89450d96cdaa828b7c06f2be56c0c10aef950921286efc790bbb74ef8e056a78->leave($__internal_89450d96cdaa828b7c06f2be56c0c10aef950921286efc790bbb74ef8e056a78_prof);

    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7a66066a119af91f58f9ecc6c3397cb52e8aab70a65660da48ec1d6d6a0ec056 = $this->env->getExtension("native_profiler");
        $__internal_7a66066a119af91f58f9ecc6c3397cb52e8aab70a65660da48ec1d6d6a0ec056->enter($__internal_7a66066a119af91f58f9ecc6c3397cb52e8aab70a65660da48ec1d6d6a0ec056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 81
        echo "\t<footer>
\t\t&copy; Open Source Feed 2015
\t</footer>

\t";
        
        $__internal_7a66066a119af91f58f9ecc6c3397cb52e8aab70a65660da48ec1d6d6a0ec056->leave($__internal_7a66066a119af91f58f9ecc6c3397cb52e8aab70a65660da48ec1d6d6a0ec056_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a532e466b1f99c5871113878ce6957118c533d880ead09002c23b22614767311 = $this->env->getExtension("native_profiler");
        $__internal_a532e466b1f99c5871113878ce6957118c533d880ead09002c23b22614767311->enter($__internal_a532e466b1f99c5871113878ce6957118c533d880ead09002c23b22614767311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "13a5ac9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13a5ac9_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/13a5ac9_jquery.min_1.js");
            // line 93
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
        // line 97
        echo "\t";
        
        $__internal_a532e466b1f99c5871113878ce6957118c533d880ead09002c23b22614767311->leave($__internal_a532e466b1f99c5871113878ce6957118c533d880ead09002c23b22614767311_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  294 => 97,  268 => 93,  263 => 89,  257 => 88,  246 => 81,  240 => 80,  232 => 68,  226 => 67,  183 => 21,  177 => 20,  168 => 98,  166 => 97,  164 => 88,  160 => 86,  158 => 85,  156 => 80,  144 => 70,  141 => 67,  135 => 64,  132 => 63,  130 => 62,  124 => 58,  122 => 20,  119 => 19,  113 => 18,  106 => 12,  100 => 10,  97 => 9,  90 => 10,  87 => 9,  81 => 10,  78 => 9,  73 => 5,  67 => 4,  55 => 13,  53 => 4,  49 => 2,  43 => 1,  36 => 100,  34 => 18,  31 => 17,  29 => 1,);
    }
}
