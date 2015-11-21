<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e3930225259eca9877808ab79734184a348d18adeba1aa1bb59147ed702addfb extends Twig_Template
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
        $__internal_bb246271b3eee75627436c0fc9edbebed82528159230c28fa509b92769efa708 = $this->env->getExtension("native_profiler");
        $__internal_bb246271b3eee75627436c0fc9edbebed82528159230c28fa509b92769efa708->enter($__internal_bb246271b3eee75627436c0fc9edbebed82528159230c28fa509b92769efa708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bb246271b3eee75627436c0fc9edbebed82528159230c28fa509b92769efa708->leave($__internal_bb246271b3eee75627436c0fc9edbebed82528159230c28fa509b92769efa708_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
