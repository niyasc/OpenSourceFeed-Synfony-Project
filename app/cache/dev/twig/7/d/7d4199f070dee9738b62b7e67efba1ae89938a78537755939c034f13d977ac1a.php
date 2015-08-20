<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_7d4199f070dee9738b62b7e67efba1ae89938a78537755939c034f13d977ac1a extends Twig_Template
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
        $__internal_da1f3eb792f3788deeb160ad0a68bebd2bd2934b149d3e0bfa98924ccfcc0d10 = $this->env->getExtension("native_profiler");
        $__internal_da1f3eb792f3788deeb160ad0a68bebd2bd2934b149d3e0bfa98924ccfcc0d10->enter($__internal_da1f3eb792f3788deeb160ad0a68bebd2bd2934b149d3e0bfa98924ccfcc0d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if ((twig_template_get_attributes($this, $context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif ((twig_template_get_attributes($this, $context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["log"], "message", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_da1f3eb792f3788deeb160ad0a68bebd2bd2934b149d3e0bfa98924ccfcc0d10->leave($__internal_da1f3eb792f3788deeb160ad0a68bebd2bd2934b149d3e0bfa98924ccfcc0d10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  38 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
