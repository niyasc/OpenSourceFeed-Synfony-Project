<?php

/* OpenSourceFeedBundle:Comment:edit.html.twig */
class __TwigTemplate_05d816e7cf7c6f214187fa67d2765937b94b5fbcc19c87208edc97704043ab26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Comment:edit.html.twig", 1);
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
        $__internal_4b271b4134e7fbc54d7fdfee10b844db04173d5c12ecc99b1b0c0021bc5892a1 = $this->env->getExtension("native_profiler");
        $__internal_4b271b4134e7fbc54d7fdfee10b844db04173d5c12ecc99b1b0c0021bc5892a1->enter($__internal_4b271b4134e7fbc54d7fdfee10b844db04173d5c12ecc99b1b0c0021bc5892a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Comment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b271b4134e7fbc54d7fdfee10b844db04173d5c12ecc99b1b0c0021bc5892a1->leave($__internal_4b271b4134e7fbc54d7fdfee10b844db04173d5c12ecc99b1b0c0021bc5892a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_546dd103355e80d02f9b92675d8eda7a5744079b9d6ff65b51dadaa6894467e3 = $this->env->getExtension("native_profiler");
        $__internal_546dd103355e80d02f9b92675d8eda7a5744079b9d6ff65b51dadaa6894467e3->enter($__internal_546dd103355e80d02f9b92675d8eda7a5744079b9d6ff65b51dadaa6894467e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Comment edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("comment");
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
        
        $__internal_546dd103355e80d02f9b92675d8eda7a5744079b9d6ff65b51dadaa6894467e3->leave($__internal_546dd103355e80d02f9b92675d8eda7a5744079b9d6ff65b51dadaa6894467e3_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Comment:edit.html.twig";
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
/*     <h1>Comment edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('comment') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
