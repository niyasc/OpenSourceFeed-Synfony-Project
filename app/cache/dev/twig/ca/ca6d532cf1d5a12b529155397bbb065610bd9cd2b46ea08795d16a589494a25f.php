<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_16675b05d88ec1dfa8207480cd4e3eafda028d329a47e8613e73958de84344ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58842316d98744fa5cfc978579ef5b873a0906581a78b8ef2e65670314600b6f = $this->env->getExtension("native_profiler");
        $__internal_58842316d98744fa5cfc978579ef5b873a0906581a78b8ef2e65670314600b6f->enter($__internal_58842316d98744fa5cfc978579ef5b873a0906581a78b8ef2e65670314600b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58842316d98744fa5cfc978579ef5b873a0906581a78b8ef2e65670314600b6f->leave($__internal_58842316d98744fa5cfc978579ef5b873a0906581a78b8ef2e65670314600b6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_477a0197f81ac0127789c0a2e93a945990469d5200c918bde24be9de2384e87f = $this->env->getExtension("native_profiler");
        $__internal_477a0197f81ac0127789c0a2e93a945990469d5200c918bde24be9de2384e87f->enter($__internal_477a0197f81ac0127789c0a2e93a945990469d5200c918bde24be9de2384e87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_477a0197f81ac0127789c0a2e93a945990469d5200c918bde24be9de2384e87f->leave($__internal_477a0197f81ac0127789c0a2e93a945990469d5200c918bde24be9de2384e87f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cba0f5282c9225e47b6b8977246b651e1b7439e2a56a3a8066b1fbfb3b02d695 = $this->env->getExtension("native_profiler");
        $__internal_cba0f5282c9225e47b6b8977246b651e1b7439e2a56a3a8066b1fbfb3b02d695->enter($__internal_cba0f5282c9225e47b6b8977246b651e1b7439e2a56a3a8066b1fbfb3b02d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_cba0f5282c9225e47b6b8977246b651e1b7439e2a56a3a8066b1fbfb3b02d695->leave($__internal_cba0f5282c9225e47b6b8977246b651e1b7439e2a56a3a8066b1fbfb3b02d695_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeebd05d3e3c5e7c9a1c70fb8d0d7f16d4c63069c071cc51bc6552bb3117fedc = $this->env->getExtension("native_profiler");
        $__internal_eeebd05d3e3c5e7c9a1c70fb8d0d7f16d4c63069c071cc51bc6552bb3117fedc->enter($__internal_eeebd05d3e3c5e7c9a1c70fb8d0d7f16d4c63069c071cc51bc6552bb3117fedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_eeebd05d3e3c5e7c9a1c70fb8d0d7f16d4c63069c071cc51bc6552bb3117fedc->leave($__internal_eeebd05d3e3c5e7c9a1c70fb8d0d7f16d4c63069c071cc51bc6552bb3117fedc_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9caabcdc6fe00e01c298b32f55f2953f8293413ffe0b52f52d04a05e50cd07a3 = $this->env->getExtension("native_profiler");
        $__internal_9caabcdc6fe00e01c298b32f55f2953f8293413ffe0b52f52d04a05e50cd07a3->enter($__internal_9caabcdc6fe00e01c298b32f55f2953f8293413ffe0b52f52d04a05e50cd07a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9caabcdc6fe00e01c298b32f55f2953f8293413ffe0b52f52d04a05e50cd07a3->leave($__internal_9caabcdc6fe00e01c298b32f55f2953f8293413ffe0b52f52d04a05e50cd07a3_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
