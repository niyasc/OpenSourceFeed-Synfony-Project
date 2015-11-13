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
        $__internal_89f8e12e28f1db90a9b7437c1a4e0363e662b78cadaecf5c83accb0d90be582d = $this->env->getExtension("native_profiler");
        $__internal_89f8e12e28f1db90a9b7437c1a4e0363e662b78cadaecf5c83accb0d90be582d->enter($__internal_89f8e12e28f1db90a9b7437c1a4e0363e662b78cadaecf5c83accb0d90be582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89f8e12e28f1db90a9b7437c1a4e0363e662b78cadaecf5c83accb0d90be582d->leave($__internal_89f8e12e28f1db90a9b7437c1a4e0363e662b78cadaecf5c83accb0d90be582d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd7d5fb76c4f9bc208a4118b3a12618de052cbc91e2ce44205dd0f902e591520 = $this->env->getExtension("native_profiler");
        $__internal_fd7d5fb76c4f9bc208a4118b3a12618de052cbc91e2ce44205dd0f902e591520->enter($__internal_fd7d5fb76c4f9bc208a4118b3a12618de052cbc91e2ce44205dd0f902e591520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>Open Source News Letters</h2>
";
        // line 5
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "<a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
            echo $this->env->getExtension('routing')->getPath("newsletter_new");
            echo "\">
  NEW ENTRY
</a>

<table class=\"table table-condensed table-bordered table-striped table-custom\">
";
        } else {
            // line 12
            echo "<table class=\"table table-striped table-bordered table-custom\" style=\"text-align: center\">
";
        }
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "<tr>
  <td>
    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
      ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "
    </a>
  </td>

  ";
            // line 22
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 23
                echo "  <td>
    <a class=\"btn btn-sm btn-primary custom-btn\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">EDIT</a>
    <a class=\"btn btn-sm btn-primary custom-btn\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">VIEW</a>
  </td>
  ";
            }
            // line 28
            echo "
</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>
<div class=\"navigation\">
  ";
        // line 35
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>

";
        
        $__internal_fd7d5fb76c4f9bc208a4118b3a12618de052cbc91e2ce44205dd0f902e591520->leave($__internal_fd7d5fb76c4f9bc208a4118b3a12618de052cbc91e2ce44205dd0f902e591520_prof);

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
        return array (  107 => 35,  103 => 33,  93 => 28,  87 => 25,  83 => 24,  80 => 23,  78 => 22,  71 => 18,  67 => 17,  63 => 15,  59 => 14,  55 => 12,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <h2>Open Source News Letters</h2>*/
/* {% if is_granted('ROLE_ADMIN') %}*/
/* <a class="btn btn-primary btn-sm custom-btn" href="{{ path('newsletter_new') }}">*/
/*   NEW ENTRY*/
/* </a>*/
/* */
/* <table class="table table-condensed table-bordered table-striped table-custom">*/
/* {%  else %}*/
/* <table class="table table-striped table-bordered table-custom" style="text-align: center">*/
/* {% endif %}*/
/* {% for entity in pagination %}*/
/* <tr>*/
/*   <td>*/
/*     <a href="{{entity.link}}" target="_blank">*/
/*       {{entity.name}}*/
/*     </a>*/
/*   </td>*/
/* */
/*   {% if is_granted('ROLE_ADMIN') %}*/
/*   <td>*/
/*     <a class="btn btn-sm btn-primary custom-btn" href="{{ path('newsletter_edit', { 'id': entity.id }) }}">EDIT</a>*/
/*     <a class="btn btn-sm btn-primary custom-btn" href="{{ path('newsletter_show', { 'id': entity.id }) }}">VIEW</a>*/
/*   </td>*/
/*   {% endif %}*/
/* */
/* </tr>*/
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
