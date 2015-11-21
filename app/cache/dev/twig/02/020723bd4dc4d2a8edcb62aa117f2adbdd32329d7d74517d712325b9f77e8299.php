<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8656587f74d6a05efe66b04e84e025f57926c4dfcb44d9309f9c83806662c703 extends Twig_Template
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
        $__internal_17829b1e6736135977347a5b74ecf3a3965872962e9f5f9960911516ad376cb7 = $this->env->getExtension("native_profiler");
        $__internal_17829b1e6736135977347a5b74ecf3a3965872962e9f5f9960911516ad376cb7->enter($__internal_17829b1e6736135977347a5b74ecf3a3965872962e9f5f9960911516ad376cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_17829b1e6736135977347a5b74ecf3a3965872962e9f5f9960911516ad376cb7->leave($__internal_17829b1e6736135977347a5b74ecf3a3965872962e9f5f9960911516ad376cb7_prof);

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
