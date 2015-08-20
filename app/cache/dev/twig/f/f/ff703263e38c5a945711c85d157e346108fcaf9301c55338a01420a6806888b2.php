<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_ff703263e38c5a945711c85d157e346108fcaf9301c55338a01420a6806888b2 extends Twig_Template
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
        $__internal_f27f9619257609c8dbdaa85125197d8f3ebbe60ea4e54f52790dd0027a451240 = $this->env->getExtension("native_profiler");
        $__internal_f27f9619257609c8dbdaa85125197d8f3ebbe60ea4e54f52790dd0027a451240->enter($__internal_f27f9619257609c8dbdaa85125197d8f3ebbe60ea4e54f52790dd0027a451240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f27f9619257609c8dbdaa85125197d8f3ebbe60ea4e54f52790dd0027a451240->leave($__internal_f27f9619257609c8dbdaa85125197d8f3ebbe60ea4e54f52790dd0027a451240_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
