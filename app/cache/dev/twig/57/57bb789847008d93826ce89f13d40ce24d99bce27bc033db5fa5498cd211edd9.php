<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cb933ceb2110937221a1662f1eb9da2d737514663c0c9030912716e560331ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d31e92c14841b743e00c52c7a6fff7d3d152e751ee09e5870d48eb9e23a6ee1 = $this->env->getExtension("native_profiler");
        $__internal_7d31e92c14841b743e00c52c7a6fff7d3d152e751ee09e5870d48eb9e23a6ee1->enter($__internal_7d31e92c14841b743e00c52c7a6fff7d3d152e751ee09e5870d48eb9e23a6ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7d31e92c14841b743e00c52c7a6fff7d3d152e751ee09e5870d48eb9e23a6ee1->leave($__internal_7d31e92c14841b743e00c52c7a6fff7d3d152e751ee09e5870d48eb9e23a6ee1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
