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
        $__internal_3bd2eaaab0a52e5ec39a6ff5f441e73bdf4ed2f2b40e09f83f6e1ba7640e41ec = $this->env->getExtension("native_profiler");
        $__internal_3bd2eaaab0a52e5ec39a6ff5f441e73bdf4ed2f2b40e09f83f6e1ba7640e41ec->enter($__internal_3bd2eaaab0a52e5ec39a6ff5f441e73bdf4ed2f2b40e09f83f6e1ba7640e41ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd2eaaab0a52e5ec39a6ff5f441e73bdf4ed2f2b40e09f83f6e1ba7640e41ec->leave($__internal_3bd2eaaab0a52e5ec39a6ff5f441e73bdf4ed2f2b40e09f83f6e1ba7640e41ec_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b4b51356accb838f913dfed27a9406ff101304964fd0ca0583bdba7a1dd1452f = $this->env->getExtension("native_profiler");
        $__internal_b4b51356accb838f913dfed27a9406ff101304964fd0ca0583bdba7a1dd1452f->enter($__internal_b4b51356accb838f913dfed27a9406ff101304964fd0ca0583bdba7a1dd1452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>ADD NEWS LETTER</h2>
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'errors'))) {
            // line 7
            echo "<div class=\"alert alert-danger\" role=\"alert\">
  ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
            echo "
  ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'errors');
            echo "
</div>
";
        }
        // line 12
        echo "
<div class=\"form-group\">
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'label');
        echo "
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "ADD ENTRY", "attr" => array("class" => "btn btn-primary btn-sm custom-btn")));
        echo "
</div>

";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\">
  CANCEL
</a>

";
        
        $__internal_b4b51356accb838f913dfed27a9406ff101304964fd0ca0583bdba7a1dd1452f->leave($__internal_b4b51356accb838f913dfed27a9406ff101304964fd0ca0583bdba7a1dd1452f_prof);

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
        return array (  98 => 28,  93 => 26,  87 => 23,  81 => 20,  77 => 19,  70 => 15,  66 => 14,  62 => 12,  56 => 9,  52 => 8,  49 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <h2>ADD NEWS LETTER</h2>*/
/* {{ form_start(form)}}*/
/* {% if form_errors(form.name) or  form_errors(form.link) %}*/
/* <div class="alert alert-danger" role="alert">*/
/*   {{ form_errors(form.name) }}*/
/*   {{ form_errors(form.link) }}*/
/* </div>*/
/* {% endif %}*/
/* */
/* <div class="form-group">*/
/*   {{ form_label(form.name) }}*/
/*   {{ form_widget(form.name) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   {{ form_label(form.link) }}*/
/*   {{ form_widget(form.link) }}*/
/* </div>*/
/* <div class="form-group">*/
/* {{ form_widget(form.submit, {'label' : 'ADD ENTRY', 'attr' : {'class' : 'btn btn-primary btn-sm custom-btn'}} )}}*/
/* </div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* <a class="btn btn-primary btn-sm custom-btn" href="{{ path('newsletter') }}">*/
/*   CANCEL*/
/* </a>*/
/* */
/* {% endblock %}*/
/* */
