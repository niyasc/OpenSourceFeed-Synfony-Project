<?php

/* OpenSourceNewsLetterBundle:Default:index.html.twig */
class __TwigTemplate_d67a994ace68875b566b183bc1df9d58d53d574b9afa47dd8e8774f9fe0d232d extends Twig_Template
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
        $__internal_464231bf63364b0b094838ccb3b0a4c5b05b5c4fd5971757ad94262af0252bdb = $this->env->getExtension("native_profiler");
        $__internal_464231bf63364b0b094838ccb3b0a4c5b05b5c4fd5971757ad94262af0252bdb->enter($__internal_464231bf63364b0b094838ccb3b0a4c5b05b5c4fd5971757ad94262af0252bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceNewsLetterBundle:Default:index.html.twig"));

        // line 1
        echo "Hello, ";
        echo twig_escape_filter($this->env, strtoupper((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "!
";
        
        $__internal_464231bf63364b0b094838ccb3b0a4c5b05b5c4fd5971757ad94262af0252bdb->leave($__internal_464231bf63364b0b094838ccb3b0a4c5b05b5c4fd5971757ad94262af0252bdb_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceNewsLetterBundle:Default:index.html.twig";
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
/* Hello, {{ name | upper}}!*/
/* */
