<?php

/* OpenSourceFeedBundle:Post:new.html.twig */
class __TwigTemplate_98bdec5b4700ed48694e4d3079edf540e61e1b112c68ab9b7ccb67e60bce896c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Post:new.html.twig", 1);
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
        $__internal_a67fe69383e3e611d2d60d0c55aee2fe5fc53aac06ba5e80b6116071aeac1bcc = $this->env->getExtension("native_profiler");
        $__internal_a67fe69383e3e611d2d60d0c55aee2fe5fc53aac06ba5e80b6116071aeac1bcc->enter($__internal_a67fe69383e3e611d2d60d0c55aee2fe5fc53aac06ba5e80b6116071aeac1bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a67fe69383e3e611d2d60d0c55aee2fe5fc53aac06ba5e80b6116071aeac1bcc->leave($__internal_a67fe69383e3e611d2d60d0c55aee2fe5fc53aac06ba5e80b6116071aeac1bcc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe59ea52f38ac5b3c80206ce770e2cdaa2e3f2a1f6df6be65165cf2f6252e55a = $this->env->getExtension("native_profiler");
        $__internal_fe59ea52f38ac5b3c80206ce770e2cdaa2e3f2a1f6df6be65165cf2f6252e55a->enter($__internal_fe59ea52f38ac5b3c80206ce770e2cdaa2e3f2a1f6df6be65165cf2f6252e55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_fe59ea52f38ac5b3c80206ce770e2cdaa2e3f2a1f6df6be65165cf2f6252e55a->leave($__internal_fe59ea52f38ac5b3c80206ce770e2cdaa2e3f2a1f6df6be65165cf2f6252e55a_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Post creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('post') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
