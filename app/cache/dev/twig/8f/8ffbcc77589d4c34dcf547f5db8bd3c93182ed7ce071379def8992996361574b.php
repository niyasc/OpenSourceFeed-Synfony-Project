<?php

/* OpenSourceFeedBundle:Category:new.html.twig */
class __TwigTemplate_c0ae8a5c68869bbd765263f17f6100a031cb490308dd2268440580414deb425e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Category:new.html.twig", 1);
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
        $__internal_dec9327c803fcea2f04a11e2ec2460a067e1e165ca797a9b03967f0e1e07f759 = $this->env->getExtension("native_profiler");
        $__internal_dec9327c803fcea2f04a11e2ec2460a067e1e165ca797a9b03967f0e1e07f759->enter($__internal_dec9327c803fcea2f04a11e2ec2460a067e1e165ca797a9b03967f0e1e07f759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dec9327c803fcea2f04a11e2ec2460a067e1e165ca797a9b03967f0e1e07f759->leave($__internal_dec9327c803fcea2f04a11e2ec2460a067e1e165ca797a9b03967f0e1e07f759_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0052dca2597ed1db2c37e26ed47364108b706ce65509ec51fa8c71d1ab23d8bd = $this->env->getExtension("native_profiler");
        $__internal_0052dca2597ed1db2c37e26ed47364108b706ce65509ec51fa8c71d1ab23d8bd->enter($__internal_0052dca2597ed1db2c37e26ed47364108b706ce65509ec51fa8c71d1ab23d8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>ADD CATEGORY</h2>

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 7
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors')) {
            // line 8
            echo "<div class=\"alert alert-danger\" role=\"alert\">
  ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
            echo "
</div>
";
        }
        // line 12
        echo "<div class=\"form-group\">
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-sm custom-btn"), "label" => "SAVE"));
        echo "
</div>
";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\" class=\"btn btn-primary btn-sm custom-btn\">
  CANCEL
</a>
  </li>
</ul>
";
        
        $__internal_0052dca2597ed1db2c37e26ed47364108b706ce65509ec51fa8c71d1ab23d8bd->leave($__internal_0052dca2597ed1db2c37e26ed47364108b706ce65509ec51fa8c71d1ab23d8bd_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  77 => 19,  72 => 17,  66 => 14,  62 => 13,  59 => 12,  53 => 9,  50 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <h2>ADD CATEGORY</h2>*/
/* */
/* {{ form_start(form)}}*/
/* {% if form_errors(form.name) %}*/
/* <div class="alert alert-danger" role="alert">*/
/*   {{ form_errors(form.name) }}*/
/* </div>*/
/* {% endif %}*/
/* <div class="form-group">*/
/*   {{ form_label(form.name) }}*/
/*   {{ form_widget(form.name) }}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{ form_widget(form.submit, {attr: {'class': 'btn btn-primary btn-sm custom-btn'}, label: 'SAVE'})}}*/
/* </div>*/
/* {{ form_end(form)}}*/
/* */
/* */
/* <a href="{{ path('category') }}" class="btn btn-primary btn-sm custom-btn">*/
/*   CANCEL*/
/* </a>*/
/*   </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
