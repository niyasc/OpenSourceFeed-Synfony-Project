<?php

/* OpenSourceFeedBundle:NewsLetter:index.html.twig */
class __TwigTemplate_840d6f2ad702b7dec4b2196f3db3f824b3a1fc514639357b5222b96b83a089ad extends Twig_Template
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
        $__internal_3bfbd45f6a4c2ac18325dd0fe6ceca741196cda4fa09e1d1f65e13391c3faf89 = $this->env->getExtension("native_profiler");
        $__internal_3bfbd45f6a4c2ac18325dd0fe6ceca741196cda4fa09e1d1f65e13391c3faf89->enter($__internal_3bfbd45f6a4c2ac18325dd0fe6ceca741196cda4fa09e1d1f65e13391c3faf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bfbd45f6a4c2ac18325dd0fe6ceca741196cda4fa09e1d1f65e13391c3faf89->leave($__internal_3bfbd45f6a4c2ac18325dd0fe6ceca741196cda4fa09e1d1f65e13391c3faf89_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_102a34ae00eed98231cb8bd9d9da6b7fdd8b8d66a9844a09c31097e91f144f5e = $this->env->getExtension("native_profiler");
        $__internal_102a34ae00eed98231cb8bd9d9da6b7fdd8b8d66a9844a09c31097e91f144f5e->enter($__internal_102a34ae00eed98231cb8bd9d9da6b7fdd8b8d66a9844a09c31097e91f144f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>Open Source News Letters</h2>
<table class=\"table table-condensed table-custom\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "  <tr>
    <td>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "
      </a>
    </td>
    <td>
      <a class=\"btn btn-sm btn-primary custom-btn\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
    </td>
  </tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>



<a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("newsletter_new");
        echo "\">
  NEW ENTRY
</a>

";
        
        $__internal_102a34ae00eed98231cb8bd9d9da6b7fdd8b8d66a9844a09c31097e91f144f5e->leave($__internal_102a34ae00eed98231cb8bd9d9da6b7fdd8b8d66a9844a09c31097e91f144f5e_prof);

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
        return array (  81 => 24,  75 => 20,  63 => 14,  56 => 10,  52 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <h2>Open Source News Letters</h2>*/
/* <table class="table table-condensed table-custom">*/
/*   {% for entity in entities %}*/
/*   <tr>*/
/*     <td>*/
/*       <a href="{{entity.link}}" target="_blank">*/
/*         {{entity.name}}*/
/*       </a>*/
/*     </td>*/
/*     <td>*/
/*       <a class="btn btn-sm btn-primary custom-btn" href="{{ path('newsletter_edit', { 'id': entity.id }) }}">EDIT</a>*/
/*     </td>*/
/*   </tr>*/
/* */
/* */
/* {% endfor %}*/
/* </table>*/
/* */
/* */
/* */
/* <a class="btn btn-primary btn-sm custom-btn" href="{{ path('newsletter_new') }}">*/
/*   NEW ENTRY*/
/* </a>*/
/* */
/* {% endblock %}*/
/* */
