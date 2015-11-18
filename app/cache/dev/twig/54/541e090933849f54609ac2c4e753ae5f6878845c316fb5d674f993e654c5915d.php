<?php

/* OpenSourceFeedBundle:Post:index.html.twig */
class __TwigTemplate_53127e3860a5dbf4aec7c6fbc1f3c6ec39b142196631923a40c75b5441f231eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Post:index.html.twig", 1);
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
        $__internal_c001cb419279d874eba79eaaf6c5c11a8837afe4ce5086871c67b660f110e9f8 = $this->env->getExtension("native_profiler");
        $__internal_c001cb419279d874eba79eaaf6c5c11a8837afe4ce5086871c67b660f110e9f8->enter($__internal_c001cb419279d874eba79eaaf6c5c11a8837afe4ce5086871c67b660f110e9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c001cb419279d874eba79eaaf6c5c11a8837afe4ce5086871c67b660f110e9f8->leave($__internal_c001cb419279d874eba79eaaf6c5c11a8837afe4ce5086871c67b660f110e9f8_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_88c7e98852cc7ccfddaa6bf7dbc348543c4f365e762c827ed65cca44f950780d = $this->env->getExtension("native_profiler");
        $__internal_88c7e98852cc7ccfddaa6bf7dbc348543c4f365e762c827ed65cca44f950780d->enter($__internal_88c7e98852cc7ccfddaa6bf7dbc348543c4f365e762c827ed65cca44f950780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<h2>POST SUMMARY</h2>
<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\" class=\"btn btn-primary btn-sm custom-btn\">
  NEW POST
</a>
<table class=\"table table-bordered table-striped\" style=\"text-align: left\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 10
            echo "  <tr>
    <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 12
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
    <td>
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "slug" => $this->getAttribute($context["entity"], "slug", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm custom-btn\">VIEW</a>
      <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm custom-btn\">EDIT</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
</table>
<div class=\"navigation\">
  ";
        // line 22
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>



";
        
        $__internal_88c7e98852cc7ccfddaa6bf7dbc348543c4f365e762c827ed65cca44f950780d->leave($__internal_88c7e98852cc7ccfddaa6bf7dbc348543c4f365e762c827ed65cca44f950780d_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  82 => 19,  72 => 15,  68 => 14,  61 => 12,  57 => 11,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block main -%}*/
/* <h2>POST SUMMARY</h2>*/
/* <a href="{{ path('post_new') }}" class="btn btn-primary btn-sm custom-btn">*/
/*   NEW POST*/
/* </a>*/
/* <table class="table table-bordered table-striped" style="text-align: left">*/
/*   {% for entity in pagination %}*/
/*   <tr>*/
/*     <td>{{ entity.title }}</td>*/
/*     <td>{% if entity.date %}{{ entity.date|date('Y-m-d') }}{% endif %}</td>*/
/*     <td>*/
/*       <a href="{{ path('post_show', { 'id': entity.id, 'slug': entity.slug }) }}" class="btn btn-primary btn-sm custom-btn">VIEW</a>*/
/*       <a href="{{ path('post_edit', { 'id': entity.id }) }}" class="btn btn-primary btn-sm custom-btn">EDIT</a>*/
/*     </td>*/
/*   </tr>*/
/*   {% endfor %}*/
/* */
/* </table>*/
/* <div class="navigation">*/
/*   {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
