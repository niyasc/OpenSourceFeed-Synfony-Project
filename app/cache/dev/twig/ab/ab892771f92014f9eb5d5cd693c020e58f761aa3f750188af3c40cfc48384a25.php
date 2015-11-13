<?php

/* OpenSourceFeedBundle:NewsLetter:edit.html.twig */
class __TwigTemplate_b3a4f6b471d3e0a89cc1e1445b209ee4b9787dd8925e9651355494adf10629c8 extends Twig_Template
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
        $__internal_b7219a54c1c00f573afb1e2ad128beb59327510a2cc304d28fbcc4d90d2cc2c7 = $this->env->getExtension("native_profiler");
        $__internal_b7219a54c1c00f573afb1e2ad128beb59327510a2cc304d28fbcc4d90d2cc2c7->enter($__internal_b7219a54c1c00f573afb1e2ad128beb59327510a2cc304d28fbcc4d90d2cc2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7219a54c1c00f573afb1e2ad128beb59327510a2cc304d28fbcc4d90d2cc2c7->leave($__internal_b7219a54c1c00f573afb1e2ad128beb59327510a2cc304d28fbcc4d90d2cc2c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4875c70de035b875d3589820fdb2ea79d7a32081f88dad1a2549dc20d81acb11 = $this->env->getExtension("native_profiler");
        $__internal_4875c70de035b875d3589820fdb2ea79d7a32081f88dad1a2549dc20d81acb11->enter($__internal_4875c70de035b875d3589820fdb2ea79d7a32081f88dad1a2549dc20d81acb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4875c70de035b875d3589820fdb2ea79d7a32081f88dad1a2549dc20d81acb11->leave($__internal_4875c70de035b875d3589820fdb2ea79d7a32081f88dad1a2549dc20d81acb11_prof);

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
