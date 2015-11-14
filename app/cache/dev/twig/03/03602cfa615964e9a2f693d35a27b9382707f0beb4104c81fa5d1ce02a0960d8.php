<?php

/* OpenSourceFeedBundle:Category:show.html.twig */
class __TwigTemplate_6f7b5aed8cda4640b8439b468e296ef4befee215802d3ba1f886f85552c9d014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Category:show.html.twig", 1);
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
        $__internal_bfc679761e0de8b275377bbabc1480493f1676f3aceadff151ff418fd6f92138 = $this->env->getExtension("native_profiler");
        $__internal_bfc679761e0de8b275377bbabc1480493f1676f3aceadff151ff418fd6f92138->enter($__internal_bfc679761e0de8b275377bbabc1480493f1676f3aceadff151ff418fd6f92138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc679761e0de8b275377bbabc1480493f1676f3aceadff151ff418fd6f92138->leave($__internal_bfc679761e0de8b275377bbabc1480493f1676f3aceadff151ff418fd6f92138_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fde8d8e127a512827ceea9a3f8b3aae2bee6b3faf7f82e0446111936c331c3c5 = $this->env->getExtension("native_profiler");
        $__internal_fde8d8e127a512827ceea9a3f8b3aae2bee6b3faf7f82e0446111936c331c3c5->enter($__internal_fde8d8e127a512827ceea9a3f8b3aae2bee6b3faf7f82e0446111936c331c3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>CATEGORY DETAILS</h2>

<table class=\"table table-bordered table-striped table-custom\">
  <tr>
    <td>ID</td>
    <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>Name</td>
    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\" style=\"text-align: center\">
      <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\" class=\"btn btn-primary btn-sm custom-btn\">
        BACK
      </a>
      <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm custom-btn\">
        EDIT
      </a>
      ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("style" => "display: inline", "onsubmit" => "return confirm(\"Are You Sure?\")")));
        echo "
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-sm custom-btn")));
        echo "
      ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </td>
  </tr>
</table>
";
        
        $__internal_fde8d8e127a512827ceea9a3f8b3aae2bee6b3faf7f82e0446111936c331c3c5->leave($__internal_fde8d8e127a512827ceea9a3f8b3aae2bee6b3faf7f82e0446111936c331c3c5_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  77 => 24,  73 => 23,  67 => 20,  61 => 17,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <h2>CATEGORY DETAILS</h2>*/
/* */
/* <table class="table table-bordered table-striped table-custom">*/
/*   <tr>*/
/*     <td>ID</td>*/
/*     <td>{{ entity.id }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>Name</td>*/
/*     <td>{{ entity.name }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td colspan="2" style="text-align: center">*/
/*       <a href="{{ path('category') }}" class="btn btn-primary btn-sm custom-btn">*/
/*         BACK*/
/*       </a>*/
/*       <a href="{{ path('category_edit', { 'id': entity.id }) }}" class="btn btn-primary btn-sm custom-btn">*/
/*         EDIT*/
/*       </a>*/
/*       {{form_start(delete_form, {attr: {'style': 'display: inline', 'onsubmit': 'return confirm("Are You Sure?")'}})}}*/
/*       {{form_widget(delete_form.submit, {attr: {'class': 'btn btn-primary btn-sm custom-btn'}})}}*/
/*       {{form_end(delete_form)}}*/
/* */
/*     </td>*/
/*   </tr>*/
/* </table>*/
/* {% endblock %}*/
/* */
