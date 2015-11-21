<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_773621eddcceddc38ea9d029b39ec6c5916132e3ffb041a35e46fde86bdef6a8 extends Twig_Template
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
        $__internal_829964510a180095a589333259ffffdf9a80d5e7b57b85938c6227c2fd236712 = $this->env->getExtension("native_profiler");
        $__internal_829964510a180095a589333259ffffdf9a80d5e7b57b85938c6227c2fd236712->enter($__internal_829964510a180095a589333259ffffdf9a80d5e7b57b85938c6227c2fd236712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_829964510a180095a589333259ffffdf9a80d5e7b57b85938c6227c2fd236712->leave($__internal_829964510a180095a589333259ffffdf9a80d5e7b57b85938c6227c2fd236712_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
