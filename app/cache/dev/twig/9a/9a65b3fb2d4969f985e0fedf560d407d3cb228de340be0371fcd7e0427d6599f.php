<?php

/* OpenSourceFeedBundle:NewsLetter:new.html.twig */
class __TwigTemplate_26b9b4d4dc33339bb2ed02a36bf89bbee2eb9718f3c2c698ec052279f3c791ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:NewsLetter:new.html.twig", 1);
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
        $__internal_7c79600f345c8b0f411314b3cd361bb38d404f1ab886585e797b5014e1d490cd = $this->env->getExtension("native_profiler");
        $__internal_7c79600f345c8b0f411314b3cd361bb38d404f1ab886585e797b5014e1d490cd->enter($__internal_7c79600f345c8b0f411314b3cd361bb38d404f1ab886585e797b5014e1d490cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c79600f345c8b0f411314b3cd361bb38d404f1ab886585e797b5014e1d490cd->leave($__internal_7c79600f345c8b0f411314b3cd361bb38d404f1ab886585e797b5014e1d490cd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dfb102a280fa402ec4c3d2ea5efe5a57cc313ead48047c55d8c14942cce9a59a = $this->env->getExtension("native_profiler");
        $__internal_dfb102a280fa402ec4c3d2ea5efe5a57cc313ead48047c55d8c14942cce9a59a->enter($__internal_dfb102a280fa402ec4c3d2ea5efe5a57cc313ead48047c55d8c14942cce9a59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>ADD NEWS LETTER</h2>
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"form-group\">
  ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'errors');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'label');
        echo "
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'widget');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
</div>

";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\">
      Back to the list
    </a>

";
        
        $__internal_dfb102a280fa402ec4c3d2ea5efe5a57cc313ead48047c55d8c14942cce9a59a->leave($__internal_dfb102a280fa402ec4c3d2ea5efe5a57cc313ead48047c55d8c14942cce9a59a_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:NewsLetter:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  86 => 24,  80 => 21,  73 => 17,  69 => 16,  62 => 12,  58 => 11,  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <h2>ADD NEWS LETTER</h2>*/
/* {{ form_start(form)}}*/
/* <div class="form-group">*/
/*   {{ form_errors(form.name) }}*/
/*   {{ form_errors(form.link) }}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{ form_label(form.name) }}*/
/*   {{ form_widget(form.name) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   {{ form_label(form.link) }}*/
/*   {{ form_widget(form.link) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   {{ form_widget(form.submit) }}*/
/* </div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/*     <a class="btn btn-primary btn-sm custom-btn" href="{{ path('newsletter') }}">*/
/*       Back to the list*/
/*     </a>*/
/* */
/* {% endblock %}*/
/* */
