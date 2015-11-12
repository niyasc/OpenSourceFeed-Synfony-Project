<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_be7b121635d8f2614b5c5833ff56b5044bcf049a23f7eeeec9d26c2439029b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6efe9b3e6992d05872731ae8bcd57e3a1d6a8aafebd7ce971ef84e5aaa63661 = $this->env->getExtension("native_profiler");
        $__internal_d6efe9b3e6992d05872731ae8bcd57e3a1d6a8aafebd7ce971ef84e5aaa63661->enter($__internal_d6efe9b3e6992d05872731ae8bcd57e3a1d6a8aafebd7ce971ef84e5aaa63661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6efe9b3e6992d05872731ae8bcd57e3a1d6a8aafebd7ce971ef84e5aaa63661->leave($__internal_d6efe9b3e6992d05872731ae8bcd57e3a1d6a8aafebd7ce971ef84e5aaa63661_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_308f6dc7be431db63f98e720518839526e48bdf90cd177db31a7188f609c5f84 = $this->env->getExtension("native_profiler");
        $__internal_308f6dc7be431db63f98e720518839526e48bdf90cd177db31a7188f609c5f84->enter($__internal_308f6dc7be431db63f98e720518839526e48bdf90cd177db31a7188f609c5f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_308f6dc7be431db63f98e720518839526e48bdf90cd177db31a7188f609c5f84->leave($__internal_308f6dc7be431db63f98e720518839526e48bdf90cd177db31a7188f609c5f84_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a10a469ed43ee8122b912f85c6b1c511537f4592d759c9d44f71d3eaf5c22e3 = $this->env->getExtension("native_profiler");
        $__internal_2a10a469ed43ee8122b912f85c6b1c511537f4592d759c9d44f71d3eaf5c22e3->enter($__internal_2a10a469ed43ee8122b912f85c6b1c511537f4592d759c9d44f71d3eaf5c22e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a10a469ed43ee8122b912f85c6b1c511537f4592d759c9d44f71d3eaf5c22e3->leave($__internal_2a10a469ed43ee8122b912f85c6b1c511537f4592d759c9d44f71d3eaf5c22e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eeff144c21891f198677a1e839bb7fb70be398bec2d540ed87796c4752958e0 = $this->env->getExtension("native_profiler");
        $__internal_6eeff144c21891f198677a1e839bb7fb70be398bec2d540ed87796c4752958e0->enter($__internal_6eeff144c21891f198677a1e839bb7fb70be398bec2d540ed87796c4752958e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6eeff144c21891f198677a1e839bb7fb70be398bec2d540ed87796c4752958e0->leave($__internal_6eeff144c21891f198677a1e839bb7fb70be398bec2d540ed87796c4752958e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
