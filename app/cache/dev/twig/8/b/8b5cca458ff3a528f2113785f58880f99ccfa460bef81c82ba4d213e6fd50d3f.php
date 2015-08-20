<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_8b5cca458ff3a528f2113785f58880f99ccfa460bef81c82ba4d213e6fd50d3f extends Twig_Template
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
        $__internal_0706e4c4618462bb4e36e4e5d1e09a99d8e5926fba1f1e53cb4b6278a7cffe6d = $this->env->getExtension("native_profiler");
        $__internal_0706e4c4618462bb4e36e4e5d1e09a99d8e5926fba1f1e53cb4b6278a7cffe6d->enter($__internal_0706e4c4618462bb4e36e4e5d1e09a99d8e5926fba1f1e53cb4b6278a7cffe6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        // line 1
        if (twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo ((twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText(twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if ((twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo twig_template_get_attributes($this, (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_0706e4c4618462bb4e36e4e5d1e09a99d8e5926fba1f1e53cb4b6278a7cffe6d->leave($__internal_0706e4c4618462bb4e36e4e5d1e09a99d8e5926fba1f1e53cb4b6278a7cffe6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  32 => 4,  24 => 2,  22 => 1,);
    }
}
