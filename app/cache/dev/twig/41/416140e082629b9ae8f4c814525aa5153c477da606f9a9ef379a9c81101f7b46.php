<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6c0d81f5c553defff99817628bb298636bba72634b04cc153c7194a464b8f85f extends Twig_Template
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
        $__internal_0880ad018c72bc0832e6bc383003794f2813dd09b2bf273b1debab7c9abd0614 = $this->env->getExtension("native_profiler");
        $__internal_0880ad018c72bc0832e6bc383003794f2813dd09b2bf273b1debab7c9abd0614->enter($__internal_0880ad018c72bc0832e6bc383003794f2813dd09b2bf273b1debab7c9abd0614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0880ad018c72bc0832e6bc383003794f2813dd09b2bf273b1debab7c9abd0614->leave($__internal_0880ad018c72bc0832e6bc383003794f2813dd09b2bf273b1debab7c9abd0614_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
