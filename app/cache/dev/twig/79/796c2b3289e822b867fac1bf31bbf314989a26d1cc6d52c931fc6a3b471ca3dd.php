<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_73e92c7430ba8a46228354d49984abc75300e18a107d6b8df0a890db62477402 extends Twig_Template
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
        $__internal_a78a4c4b7cf3d34635dbe01c53b0089ba4d2978b9bfae445631c2fb095964ff6 = $this->env->getExtension("native_profiler");
        $__internal_a78a4c4b7cf3d34635dbe01c53b0089ba4d2978b9bfae445631c2fb095964ff6->enter($__internal_a78a4c4b7cf3d34635dbe01c53b0089ba4d2978b9bfae445631c2fb095964ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a78a4c4b7cf3d34635dbe01c53b0089ba4d2978b9bfae445631c2fb095964ff6->leave($__internal_a78a4c4b7cf3d34635dbe01c53b0089ba4d2978b9bfae445631c2fb095964ff6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
