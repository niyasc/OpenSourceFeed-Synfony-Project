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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6daf3b9638ad4160a9ecbe61764113808085a796415306c83b005768f1c1e1a = $this->env->getExtension("native_profiler");
        $__internal_c6daf3b9638ad4160a9ecbe61764113808085a796415306c83b005768f1c1e1a->enter($__internal_c6daf3b9638ad4160a9ecbe61764113808085a796415306c83b005768f1c1e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6daf3b9638ad4160a9ecbe61764113808085a796415306c83b005768f1c1e1a->leave($__internal_c6daf3b9638ad4160a9ecbe61764113808085a796415306c83b005768f1c1e1a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_02fb33edde315ea42cd1860e74dde7d0feb488de60929374077f8b54c43bede7 = $this->env->getExtension("native_profiler");
        $__internal_02fb33edde315ea42cd1860e74dde7d0feb488de60929374077f8b54c43bede7->enter($__internal_02fb33edde315ea42cd1860e74dde7d0feb488de60929374077f8b54c43bede7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>EDIT NEWS LETTER</h2>

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
";
        // line 7
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "link", array()), 'errors'))) {
            // line 8
            echo "<div class=\"alert alert-danger\" role=\"alert\">
  ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'errors');
            echo "
  ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "link", array()), 'errors');
            echo "
</div>
";
        }
        // line 13
        echo "<div class=\"form-group\">
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'label');
        echo "
  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "link", array()), 'label');
        echo "
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "link", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("label" => "EDIT ENTRY", "attr" => array("class" => "btn btn-primary btn-sm custom-btn")));
        echo "
</div>

";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


<a class='btn btn-primary btn-sm custom-btn' href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\">
  CANCEL
</a>

";
        
        $__internal_02fb33edde315ea42cd1860e74dde7d0feb488de60929374077f8b54c43bede7->leave($__internal_02fb33edde315ea42cd1860e74dde7d0feb488de60929374077f8b54c43bede7_prof);

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
        return array (  99 => 29,  93 => 26,  87 => 23,  81 => 20,  77 => 19,  70 => 15,  66 => 14,  63 => 13,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <h2>EDIT NEWS LETTER</h2>*/
/* */
/* {{ form_start(edit_form) }}*/
/* {% if form_errors(edit_form.name) or  form_errors(edit_form.link) %}*/
/* <div class="alert alert-danger" role="alert">*/
/*   {{ form_errors(edit_form.name) }}*/
/*   {{ form_errors(edit_form.link) }}*/
/* </div>*/
/* {% endif %}*/
/* <div class="form-group">*/
/*   {{ form_label(edit_form.name) }}*/
/*   {{ form_widget(edit_form.name) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   {{ form_label(edit_form.link) }}*/
/*   {{ form_widget(edit_form.link) }}*/
/* </div>*/
/* <div class="form-group">*/
/* {{ form_widget(edit_form.submit, {'label' : 'EDIT ENTRY', 'attr' : {'class' : 'btn btn-primary btn-sm custom-btn'}} )}}*/
/* </div>*/
/* */
/* {{ form_end(edit_form) }}*/
/* */
/* */
/* <a class='btn btn-primary btn-sm custom-btn' href="{{ path('newsletter') }}">*/
/*   CANCEL*/
/* </a>*/
/* */
/* {% endblock %}*/
/* */
