<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9ab0e94fac7fe5a10aa172195a8a8e30fdd314e590516d9597387f210a2d16e2 extends Twig_Template
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
        $__internal_fc89a96ebce326fb95740328a8365922ff4d50be210659d861d9012de36a3fe1 = $this->env->getExtension("native_profiler");
        $__internal_fc89a96ebce326fb95740328a8365922ff4d50be210659d861d9012de36a3fe1->enter($__internal_fc89a96ebce326fb95740328a8365922ff4d50be210659d861d9012de36a3fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc89a96ebce326fb95740328a8365922ff4d50be210659d861d9012de36a3fe1->leave($__internal_fc89a96ebce326fb95740328a8365922ff4d50be210659d861d9012de36a3fe1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
