<?php

/* OpenSourceFeedBundle:NewsLetter:edit.html.twig */
class __TwigTemplate_9e7b91915b7422772f5f09fcd77a7aaebbfaa4e30e53ddb13d8f0bfd1991c358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:NewsLetter:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5215a654035467c125a8373d4040c78d92033b91c4a516e1e75e5f47b8887e9c = $this->env->getExtension("native_profiler");
        $__internal_5215a654035467c125a8373d4040c78d92033b91c4a516e1e75e5f47b8887e9c->enter($__internal_5215a654035467c125a8373d4040c78d92033b91c4a516e1e75e5f47b8887e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5215a654035467c125a8373d4040c78d92033b91c4a516e1e75e5f47b8887e9c->leave($__internal_5215a654035467c125a8373d4040c78d92033b91c4a516e1e75e5f47b8887e9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e51ae1d65fd8b4db6960ed0b11d633430fe8e546b457b77dd6cdae7524b346b = $this->env->getExtension("native_profiler");
        $__internal_2e51ae1d65fd8b4db6960ed0b11d633430fe8e546b457b77dd6cdae7524b346b->enter($__internal_2e51ae1d65fd8b4db6960ed0b11d633430fe8e546b457b77dd6cdae7524b346b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>NewsLetter edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_2e51ae1d65fd8b4db6960ed0b11d633430fe8e546b457b77dd6cdae7524b346b->leave($__internal_2e51ae1d65fd8b4db6960ed0b11d633430fe8e546b457b77dd6cdae7524b346b_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:NewsLetter:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>NewsLetter edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('newsletter') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
