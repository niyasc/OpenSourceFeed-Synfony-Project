<?php

/* OpenSourceFeedBundle:Comment:new.html.twig */
class __TwigTemplate_4f2dcd7968da795e444f5a6948bb004e4c83bf52beb21e39167810f0456e9590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Comment:new.html.twig", 1);
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
        $__internal_743db4bb165768bcf333a0e2c5d02a458361e04ba496aa3ff7e770ef197c896c = $this->env->getExtension("native_profiler");
        $__internal_743db4bb165768bcf333a0e2c5d02a458361e04ba496aa3ff7e770ef197c896c->enter($__internal_743db4bb165768bcf333a0e2c5d02a458361e04ba496aa3ff7e770ef197c896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Comment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743db4bb165768bcf333a0e2c5d02a458361e04ba496aa3ff7e770ef197c896c->leave($__internal_743db4bb165768bcf333a0e2c5d02a458361e04ba496aa3ff7e770ef197c896c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c92c4c964a70a501e034990b8f3c71697ddb10926325059ded6b51346d92382 = $this->env->getExtension("native_profiler");
        $__internal_8c92c4c964a70a501e034990b8f3c71697ddb10926325059ded6b51346d92382->enter($__internal_8c92c4c964a70a501e034990b8f3c71697ddb10926325059ded6b51346d92382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Comment creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_8c92c4c964a70a501e034990b8f3c71697ddb10926325059ded6b51346d92382->leave($__internal_8c92c4c964a70a501e034990b8f3c71697ddb10926325059ded6b51346d92382_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Comment:new.html.twig";
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
/*     <h1>Comment creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('comment') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
