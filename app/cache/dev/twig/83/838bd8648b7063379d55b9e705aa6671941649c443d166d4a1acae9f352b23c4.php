<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6760edaca1e8a9714d42199baae559e49ebd720c510808570873c9d2d4684b4d extends Twig_Template
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
        $__internal_cedc3dc51df354cea60cd8ae4ed3865292a7e16a3440a46d4c63019fa7e6d154 = $this->env->getExtension("native_profiler");
        $__internal_cedc3dc51df354cea60cd8ae4ed3865292a7e16a3440a46d4c63019fa7e6d154->enter($__internal_cedc3dc51df354cea60cd8ae4ed3865292a7e16a3440a46d4c63019fa7e6d154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_cedc3dc51df354cea60cd8ae4ed3865292a7e16a3440a46d4c63019fa7e6d154->leave($__internal_cedc3dc51df354cea60cd8ae4ed3865292a7e16a3440a46d4c63019fa7e6d154_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
