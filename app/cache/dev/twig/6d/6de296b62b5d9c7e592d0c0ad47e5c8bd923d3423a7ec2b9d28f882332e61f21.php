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
        $__internal_0dc53b7adbc1c6c8660ee8992c3a9411718d3542c531fceacf16461a3ff5b3bf = $this->env->getExtension("native_profiler");
        $__internal_0dc53b7adbc1c6c8660ee8992c3a9411718d3542c531fceacf16461a3ff5b3bf->enter($__internal_0dc53b7adbc1c6c8660ee8992c3a9411718d3542c531fceacf16461a3ff5b3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dc53b7adbc1c6c8660ee8992c3a9411718d3542c531fceacf16461a3ff5b3bf->leave($__internal_0dc53b7adbc1c6c8660ee8992c3a9411718d3542c531fceacf16461a3ff5b3bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee5d4382247d8e7fedb542369645ae656ba39b1644c78ddf6f53e7c6b9d09778 = $this->env->getExtension("native_profiler");
        $__internal_ee5d4382247d8e7fedb542369645ae656ba39b1644c78ddf6f53e7c6b9d09778->enter($__internal_ee5d4382247d8e7fedb542369645ae656ba39b1644c78ddf6f53e7c6b9d09778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ee5d4382247d8e7fedb542369645ae656ba39b1644c78ddf6f53e7c6b9d09778->leave($__internal_ee5d4382247d8e7fedb542369645ae656ba39b1644c78ddf6f53e7c6b9d09778_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fb96893e2066bae7771b96305408726d164b4359b5792a1e87cc30c8bfff9b1 = $this->env->getExtension("native_profiler");
        $__internal_4fb96893e2066bae7771b96305408726d164b4359b5792a1e87cc30c8bfff9b1->enter($__internal_4fb96893e2066bae7771b96305408726d164b4359b5792a1e87cc30c8bfff9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4fb96893e2066bae7771b96305408726d164b4359b5792a1e87cc30c8bfff9b1->leave($__internal_4fb96893e2066bae7771b96305408726d164b4359b5792a1e87cc30c8bfff9b1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_306d94ee1cda076fe9b30ef73f976d1fe0ff01ede63bb540df07678e5804211b = $this->env->getExtension("native_profiler");
        $__internal_306d94ee1cda076fe9b30ef73f976d1fe0ff01ede63bb540df07678e5804211b->enter($__internal_306d94ee1cda076fe9b30ef73f976d1fe0ff01ede63bb540df07678e5804211b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_306d94ee1cda076fe9b30ef73f976d1fe0ff01ede63bb540df07678e5804211b->leave($__internal_306d94ee1cda076fe9b30ef73f976d1fe0ff01ede63bb540df07678e5804211b_prof);

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
