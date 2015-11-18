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
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2951fd3a96de63f7e2193364012c4cce997265e9027e77ad15341076a5a859c = $this->env->getExtension("native_profiler");
        $__internal_a2951fd3a96de63f7e2193364012c4cce997265e9027e77ad15341076a5a859c->enter($__internal_a2951fd3a96de63f7e2193364012c4cce997265e9027e77ad15341076a5a859c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2951fd3a96de63f7e2193364012c4cce997265e9027e77ad15341076a5a859c->leave($__internal_a2951fd3a96de63f7e2193364012c4cce997265e9027e77ad15341076a5a859c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_9564d1cda538a58da0d8aeb668157c0e4d9369e52dcd82024c469cda83a28ee1 = $this->env->getExtension("native_profiler");
        $__internal_9564d1cda538a58da0d8aeb668157c0e4d9369e52dcd82024c469cda83a28ee1->enter($__internal_9564d1cda538a58da0d8aeb668157c0e4d9369e52dcd82024c469cda83a28ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<h2>NEW POST</h2>
<hr>
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "post-form")));
        echo "
<div class=\"form-group\">
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preText", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postText", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-sm custom-btn"), "label" => "POST"));
        echo "
  <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\" class=\"btn btn-primary btn-sm custom-btn\">CANCEL</a>
</div>
";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_9564d1cda538a58da0d8aeb668157c0e4d9369e52dcd82024c469cda83a28ee1->leave($__internal_9564d1cda538a58da0d8aeb668157c0e4d9369e52dcd82024c469cda83a28ee1_prof);

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
        return array (  94 => 29,  89 => 27,  85 => 26,  79 => 23,  73 => 20,  67 => 17,  61 => 14,  55 => 11,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block main -%}*/
/* <h2>NEW POST</h2>*/
/* <hr>*/
/* {{ form_start(form, {'attr': {'class': 'post-form'}}) }}*/
/* <div class="form-group">*/
/*   {{form_widget(form.title)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(form.preText)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(form.summary)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(form.postText)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(form.link)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(form.category)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(form.submit, {'attr': {'class': 'btn btn-primary btn-sm custom-btn'}, 'label': 'POST'})}}*/
/*   <a href="{{ path('post') }}" class="btn btn-primary btn-sm custom-btn">CANCEL</a>*/
/* </div>*/
/* {{ form_end(form)}}*/
/* */
/* */
/* {% endblock %}*/
/* */
