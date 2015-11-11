<?php

/* OpenSourceFeedBundle:NewsLetter:new.html.twig */
class __TwigTemplate_993492404093a6c55321107963894577b559bc06754e58bcf03b3aaf5debecf1 extends Twig_Template
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
        $__internal_1857e5a56b85944026cad07aefe90ae504b12df2d504e8dc06e9b4c38b61b6af = $this->env->getExtension("native_profiler");
        $__internal_1857e5a56b85944026cad07aefe90ae504b12df2d504e8dc06e9b4c38b61b6af->enter($__internal_1857e5a56b85944026cad07aefe90ae504b12df2d504e8dc06e9b4c38b61b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1857e5a56b85944026cad07aefe90ae504b12df2d504e8dc06e9b4c38b61b6af->leave($__internal_1857e5a56b85944026cad07aefe90ae504b12df2d504e8dc06e9b4c38b61b6af_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae280d4d04e37e27e27a1324487d033a87ae78181ae895f14fb2751a14ac4e13 = $this->env->getExtension("native_profiler");
        $__internal_ae280d4d04e37e27e27a1324487d033a87ae78181ae895f14fb2751a14ac4e13->enter($__internal_ae280d4d04e37e27e27a1324487d033a87ae78181ae895f14fb2751a14ac4e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>NewsLetter creation</h1>
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div>
  ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'errors');
        echo "
</div>
<div>
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
</div>

<div>
  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'label');
        echo "
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'widget');
        echo "
</div>

<div>
  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
</div>

";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<ul class=\"record_actions\">
  <li>
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\">
      Back to the list
    </a>
  </li>
</ul>
";
        
        $__internal_ae280d4d04e37e27e27a1324487d033a87ae78181ae895f14fb2751a14ac4e13->leave($__internal_ae280d4d04e37e27e27a1324487d033a87ae78181ae895f14fb2751a14ac4e13_prof);

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
        return array (  92 => 27,  86 => 24,  80 => 21,  73 => 17,  69 => 16,  62 => 12,  58 => 11,  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <h1>NewsLetter creation</h1>*/
/* {{ form_start(form)}}*/
/* <div>*/
/*   {{ form_errors(form.name) }}*/
/*   {{ form_errors(form.link) }}*/
/* </div>*/
/* <div>*/
/*   {{ form_label(form.name) }}*/
/*   {{ form_widget(form.name) }}*/
/* </div>*/
/* */
/* <div>*/
/*   {{ form_label(form.link) }}*/
/*   {{ form_widget(form.link) }}*/
/* </div>*/
/* */
/* <div>*/
/*   {{ form_widget(form.submit) }}*/
/* </div>*/
/* */
/* {{ form_end(form) }}*/
/* <ul class="record_actions">*/
/*   <li>*/
/*     <a href="{{ path('newsletter') }}">*/
/*       Back to the list*/
/*     </a>*/
/*   </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
