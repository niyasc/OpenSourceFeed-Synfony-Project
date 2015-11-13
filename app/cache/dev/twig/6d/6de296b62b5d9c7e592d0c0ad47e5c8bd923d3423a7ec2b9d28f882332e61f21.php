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
        $__internal_20847adc8bb78113da95d05cf599ef4968fb8e2c67de2856b91b542802f6a614 = $this->env->getExtension("native_profiler");
        $__internal_20847adc8bb78113da95d05cf599ef4968fb8e2c67de2856b91b542802f6a614->enter($__internal_20847adc8bb78113da95d05cf599ef4968fb8e2c67de2856b91b542802f6a614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20847adc8bb78113da95d05cf599ef4968fb8e2c67de2856b91b542802f6a614->leave($__internal_20847adc8bb78113da95d05cf599ef4968fb8e2c67de2856b91b542802f6a614_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7901f56de84b5fc1ecf83eee905372d748c40ccfd376db0113e65a4090435f26 = $this->env->getExtension("native_profiler");
        $__internal_7901f56de84b5fc1ecf83eee905372d748c40ccfd376db0113e65a4090435f26->enter($__internal_7901f56de84b5fc1ecf83eee905372d748c40ccfd376db0113e65a4090435f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7901f56de84b5fc1ecf83eee905372d748c40ccfd376db0113e65a4090435f26->leave($__internal_7901f56de84b5fc1ecf83eee905372d748c40ccfd376db0113e65a4090435f26_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6548fa33e37357a123ab5510698a43f0299002433aa4dd6301b338c8313ef4c6 = $this->env->getExtension("native_profiler");
        $__internal_6548fa33e37357a123ab5510698a43f0299002433aa4dd6301b338c8313ef4c6->enter($__internal_6548fa33e37357a123ab5510698a43f0299002433aa4dd6301b338c8313ef4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6548fa33e37357a123ab5510698a43f0299002433aa4dd6301b338c8313ef4c6->leave($__internal_6548fa33e37357a123ab5510698a43f0299002433aa4dd6301b338c8313ef4c6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cf880f4b9b4ecdf62145a671fc765a7394e985c3d16b111f77044f7919a44d8 = $this->env->getExtension("native_profiler");
        $__internal_9cf880f4b9b4ecdf62145a671fc765a7394e985c3d16b111f77044f7919a44d8->enter($__internal_9cf880f4b9b4ecdf62145a671fc765a7394e985c3d16b111f77044f7919a44d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9cf880f4b9b4ecdf62145a671fc765a7394e985c3d16b111f77044f7919a44d8->leave($__internal_9cf880f4b9b4ecdf62145a671fc765a7394e985c3d16b111f77044f7919a44d8_prof);

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
