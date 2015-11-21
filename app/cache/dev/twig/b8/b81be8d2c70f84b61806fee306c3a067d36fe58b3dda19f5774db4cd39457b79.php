<?php

/* OpenSourceFeedBundle:Category:edit.html.twig */
class __TwigTemplate_caf3c24a5db75072262c0611ad433c69f268ad36f698c1cc2a3af4f88fe3cee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Category:edit.html.twig", 1);
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
        $__internal_ac34f5b40efe76446c90c0776607aea9d5ab34af833cff9796dc4bd1ac8c56ee = $this->env->getExtension("native_profiler");
        $__internal_ac34f5b40efe76446c90c0776607aea9d5ab34af833cff9796dc4bd1ac8c56ee->enter($__internal_ac34f5b40efe76446c90c0776607aea9d5ab34af833cff9796dc4bd1ac8c56ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac34f5b40efe76446c90c0776607aea9d5ab34af833cff9796dc4bd1ac8c56ee->leave($__internal_ac34f5b40efe76446c90c0776607aea9d5ab34af833cff9796dc4bd1ac8c56ee_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b6c072207dcc4b64720c8ebc64c03e1d70664581077cecd905bdbf3301216f5 = $this->env->getExtension("native_profiler");
        $__internal_4b6c072207dcc4b64720c8ebc64c03e1d70664581077cecd905bdbf3301216f5->enter($__internal_4b6c072207dcc4b64720c8ebc64c03e1d70664581077cecd905bdbf3301216f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>EDIT CATEGORY</h2>

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
";
        // line 7
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'errors')) {
            // line 8
            echo "<div class=\"alert alert-danger\" role=\"alert\">
  ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'errors');
            echo "
</div>
";
        }
        // line 12
        echo "<div class=\"form-group\">
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'label');
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-sm custom-btn"), "label" => "SAVE"));
        echo "
</div>
";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "



<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\" class=\"btn btn-primary btn-sm custom-btn\">
  CANCEL
</a>

</ul>
";
        
        $__internal_4b6c072207dcc4b64720c8ebc64c03e1d70664581077cecd905bdbf3301216f5->leave($__internal_4b6c072207dcc4b64720c8ebc64c03e1d70664581077cecd905bdbf3301216f5_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  77 => 19,  72 => 17,  66 => 14,  62 => 13,  59 => 12,  53 => 9,  50 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <h2>EDIT CATEGORY</h2>*/
/* */
/* {{ form_start(edit_form)}}*/
/* {% if form_errors(edit_form.name) %}*/
/* <div class="alert alert-danger" role="alert">*/
/*   {{ form_errors(edit_form.name) }}*/
/* </div>*/
/* {% endif %}*/
/* <div class="form-group">*/
/*   {{ form_label(edit_form.name) }}*/
/*   {{ form_widget(edit_form.name) }}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{ form_widget(edit_form.submit, {attr: {'class': 'btn btn-primary btn-sm custom-btn'}, label: 'SAVE'})}}*/
/* </div>*/
/* {{ form_end(edit_form)}}*/
/* */
/* */
/* */
/* <a href="{{ path('category') }}" class="btn btn-primary btn-sm custom-btn">*/
/*   CANCEL*/
/* </a>*/
/* */
/* </ul>*/
/* {% endblock %}*/
/* */
