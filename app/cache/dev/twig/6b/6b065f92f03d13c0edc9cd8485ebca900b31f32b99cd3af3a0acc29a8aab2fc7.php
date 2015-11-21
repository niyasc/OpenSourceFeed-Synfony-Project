<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7a7b468c589cb47cf31ceca18e030722734732785d1a33323d28cbd7bcfafff5 extends Twig_Template
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
        $__internal_79500707c1825bd78d1540e49527ef682fd73b4cc88ed256c16feab97c102d2d = $this->env->getExtension("native_profiler");
        $__internal_79500707c1825bd78d1540e49527ef682fd73b4cc88ed256c16feab97c102d2d->enter($__internal_79500707c1825bd78d1540e49527ef682fd73b4cc88ed256c16feab97c102d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_79500707c1825bd78d1540e49527ef682fd73b4cc88ed256c16feab97c102d2d->leave($__internal_79500707c1825bd78d1540e49527ef682fd73b4cc88ed256c16feab97c102d2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
