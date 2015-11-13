<?php

/* OpenSourceFeedBundle:NewsLetter:index.html.twig */
class __TwigTemplate_d53b2b1ad05c31f338f17ba579798ba4a989d0b4673a83f463a7078f31cda55b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:NewsLetter:index.html.twig", 1);
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
        $__internal_30ce4ae9bc38967951ce935cd9700c8520771098910cbc8bda025c63e316e863 = $this->env->getExtension("native_profiler");
        $__internal_30ce4ae9bc38967951ce935cd9700c8520771098910cbc8bda025c63e316e863->enter($__internal_30ce4ae9bc38967951ce935cd9700c8520771098910cbc8bda025c63e316e863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30ce4ae9bc38967951ce935cd9700c8520771098910cbc8bda025c63e316e863->leave($__internal_30ce4ae9bc38967951ce935cd9700c8520771098910cbc8bda025c63e316e863_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_99fd091e728e6da1d5bda8a1fe742be067c6a3c73ba16e9fcfc9f6caa042f24a = $this->env->getExtension("native_profiler");
        $__internal_99fd091e728e6da1d5bda8a1fe742be067c6a3c73ba16e9fcfc9f6caa042f24a->enter($__internal_99fd091e728e6da1d5bda8a1fe742be067c6a3c73ba16e9fcfc9f6caa042f24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>Open Source News Letters</h2>
<a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("newsletter_new");
        echo "\">
  NEW ENTRY
</a>
<table class=\"table table-condensed table-bordered table-striped table-custom\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 10
            echo "  <tr>
    <td>
      <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
        ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "
      </a>
    </td>
    <td>
      <a class=\"btn btn-sm btn-primary custom-btn\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
      <a class=\"btn btn-sm btn-primary custom-btn\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">VIEW</a>
    </td>
  </tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</table>
<div class=\"navigation\">
  ";
        // line 26
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>

";
        
        $__internal_99fd091e728e6da1d5bda8a1fe742be067c6a3c73ba16e9fcfc9f6caa042f24a->leave($__internal_99fd091e728e6da1d5bda8a1fe742be067c6a3c73ba16e9fcfc9f6caa042f24a_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:NewsLetter:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  85 => 24,  73 => 18,  69 => 17,  62 => 13,  58 => 12,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <h2>Open Source News Letters</h2>*/
/* <a class="btn btn-primary btn-sm custom-btn" href="{{ path('newsletter_new') }}">*/
/*   NEW ENTRY*/
/* </a>*/
/* <table class="table table-condensed table-bordered table-striped table-custom">*/
/*   {% for entity in pagination %}*/
/*   <tr>*/
/*     <td>*/
/*       <a href="{{entity.link}}" target="_blank">*/
/*         {{entity.name}}*/
/*       </a>*/
/*     </td>*/
/*     <td>*/
/*       <a class="btn btn-sm btn-primary custom-btn" href="{{ path('newsletter_edit', { 'id': entity.id }) }}">EDIT</a>*/
/*       <a class="btn btn-sm btn-primary custom-btn" href="{{ path('newsletter_show', { 'id': entity.id }) }}">VIEW</a>*/
/*     </td>*/
/*   </tr>*/
/* */
/* */
/* {% endfor %}*/
/* </table>*/
/* <div class="navigation">*/
/*   {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
