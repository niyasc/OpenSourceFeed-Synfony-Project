<?php

/* OpenSourceFeedBundle:Category:index.html.twig */
class __TwigTemplate_169e8bab0aaef351708e34ec848f8c4ceeab808d6e1a6f1e6857a0d82c0f1ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Category:index.html.twig", 1);
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
        $__internal_f7d6913c7b19b705b3943fe44b54aef5307671387830df53342ec70c3f901cda = $this->env->getExtension("native_profiler");
        $__internal_f7d6913c7b19b705b3943fe44b54aef5307671387830df53342ec70c3f901cda->enter($__internal_f7d6913c7b19b705b3943fe44b54aef5307671387830df53342ec70c3f901cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d6913c7b19b705b3943fe44b54aef5307671387830df53342ec70c3f901cda->leave($__internal_f7d6913c7b19b705b3943fe44b54aef5307671387830df53342ec70c3f901cda_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0fa344cbc0f3636dcbfa76f7e357cdf2771f7a43d9c6ef57392ceb042b11db9e = $this->env->getExtension("native_profiler");
        $__internal_0fa344cbc0f3636dcbfa76f7e357cdf2771f7a43d9c6ef57392ceb042b11db9e->enter($__internal_0fa344cbc0f3636dcbfa76f7e357cdf2771f7a43d9c6ef57392ceb042b11db9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>CATEGORY LIST</h2>
<a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("category_new");
        echo "\">
  NEW CATEGORY
</a>

<table class=\"table table-condensed table-bordered table-striped table-custom\">

  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "  <tr>

    <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
    <td>
      <a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
      <a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">VIEW</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
</table>
";
        
        $__internal_0fa344cbc0f3636dcbfa76f7e357cdf2771f7a43d9c6ef57392ceb042b11db9e->leave($__internal_0fa344cbc0f3636dcbfa76f7e357cdf2771f7a43d9c6ef57392ceb042b11db9e_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  69 => 17,  65 => 16,  60 => 14,  56 => 12,  52 => 11,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <h2>CATEGORY LIST</h2>*/
/* <a class="btn btn-primary btn-sm custom-btn" href="{{ path('category_new') }}">*/
/*   NEW CATEGORY*/
/* </a>*/
/* */
/* <table class="table table-condensed table-bordered table-striped table-custom">*/
/* */
/*   {% for entity in entities %}*/
/*   <tr>*/
/* */
/*     <td>{{ entity.name }}</td>*/
/*     <td>*/
/*       <a class="btn btn-primary btn-sm custom-btn" href="{{ path('category_edit', { 'id': entity.id }) }}">EDIT</a>*/
/*       <a class="btn btn-primary btn-sm custom-btn" href="{{ path('category_show', { 'id': entity.id }) }}">VIEW</a>*/
/*     </td>*/
/*   </tr>*/
/*   {% endfor %}*/
/* */
/* </table>*/
/* {% endblock %}*/
/* */
