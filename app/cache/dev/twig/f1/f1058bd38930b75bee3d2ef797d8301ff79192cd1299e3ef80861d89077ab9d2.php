<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6342b5e3c39b01e2aabe8df2f5f166af73cf506f5827c0b950c15dd70a09416a extends Twig_Template
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
        $__internal_680408ca02f42c2dbe35c0ecf16a6d3e0e7804773123883f2dce6be66b24c3ac = $this->env->getExtension("native_profiler");
        $__internal_680408ca02f42c2dbe35c0ecf16a6d3e0e7804773123883f2dce6be66b24c3ac->enter($__internal_680408ca02f42c2dbe35c0ecf16a6d3e0e7804773123883f2dce6be66b24c3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_680408ca02f42c2dbe35c0ecf16a6d3e0e7804773123883f2dce6be66b24c3ac->leave($__internal_680408ca02f42c2dbe35c0ecf16a6d3e0e7804773123883f2dce6be66b24c3ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
