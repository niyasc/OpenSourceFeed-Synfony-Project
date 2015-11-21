<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_40bb6ed0038b1e39cd0e380a95e5a671adad5e6295feaa7e891cfcb34d462454 extends Twig_Template
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
        $__internal_3b3bdbf9312ade305a331a05d929d2001f08dd5b900b79d610cbf9b11a251ed9 = $this->env->getExtension("native_profiler");
        $__internal_3b3bdbf9312ade305a331a05d929d2001f08dd5b900b79d610cbf9b11a251ed9->enter($__internal_3b3bdbf9312ade305a331a05d929d2001f08dd5b900b79d610cbf9b11a251ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3b3bdbf9312ade305a331a05d929d2001f08dd5b900b79d610cbf9b11a251ed9->leave($__internal_3b3bdbf9312ade305a331a05d929d2001f08dd5b900b79d610cbf9b11a251ed9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
