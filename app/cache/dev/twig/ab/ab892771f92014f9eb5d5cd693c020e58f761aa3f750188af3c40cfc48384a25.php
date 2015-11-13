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
        $__internal_557e45cd23aa6624ece7deb02ce2895e4982410c687c0cce2c0a1ba6d2cc717d = $this->env->getExtension("native_profiler");
        $__internal_557e45cd23aa6624ece7deb02ce2895e4982410c687c0cce2c0a1ba6d2cc717d->enter($__internal_557e45cd23aa6624ece7deb02ce2895e4982410c687c0cce2c0a1ba6d2cc717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_557e45cd23aa6624ece7deb02ce2895e4982410c687c0cce2c0a1ba6d2cc717d->leave($__internal_557e45cd23aa6624ece7deb02ce2895e4982410c687c0cce2c0a1ba6d2cc717d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89e2e80402518ecec83a2d44e4fea96ba89cabcc0516499ea7504cedbf241bc1 = $this->env->getExtension("native_profiler");
        $__internal_89e2e80402518ecec83a2d44e4fea96ba89cabcc0516499ea7504cedbf241bc1->enter($__internal_89e2e80402518ecec83a2d44e4fea96ba89cabcc0516499ea7504cedbf241bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89e2e80402518ecec83a2d44e4fea96ba89cabcc0516499ea7504cedbf241bc1->leave($__internal_89e2e80402518ecec83a2d44e4fea96ba89cabcc0516499ea7504cedbf241bc1_prof);

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
