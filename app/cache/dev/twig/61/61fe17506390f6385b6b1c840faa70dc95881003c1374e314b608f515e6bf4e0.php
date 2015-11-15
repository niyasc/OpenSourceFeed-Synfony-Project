<?php

/* OpenSourceFeedBundle:Post:edit.html.twig */
class __TwigTemplate_2e60e976f278aa726de82b1029889fbda60b05148f57a9ffea7e92b5cac33b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Post:edit.html.twig", 1);
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
        $__internal_9b3a2b15de2e425c180afdc48434fcf478bce6b95a0f9f769bd688556bcce6d0 = $this->env->getExtension("native_profiler");
        $__internal_9b3a2b15de2e425c180afdc48434fcf478bce6b95a0f9f769bd688556bcce6d0->enter($__internal_9b3a2b15de2e425c180afdc48434fcf478bce6b95a0f9f769bd688556bcce6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b3a2b15de2e425c180afdc48434fcf478bce6b95a0f9f769bd688556bcce6d0->leave($__internal_9b3a2b15de2e425c180afdc48434fcf478bce6b95a0f9f769bd688556bcce6d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed4050ecd1587d1572de2b76e45065baf2243011fac70c7cd149cb55cab7685a = $this->env->getExtension("native_profiler");
        $__internal_ed4050ecd1587d1572de2b76e45065baf2243011fac70c7cd149cb55cab7685a->enter($__internal_ed4050ecd1587d1572de2b76e45065baf2243011fac70c7cd149cb55cab7685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_ed4050ecd1587d1572de2b76e45065baf2243011fac70c7cd149cb55cab7685a->leave($__internal_ed4050ecd1587d1572de2b76e45065baf2243011fac70c7cd149cb55cab7685a_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Post:edit.html.twig";
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
/*     <h1>Post edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('post') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
