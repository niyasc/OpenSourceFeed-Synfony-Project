<?php

/* OpenSourceFeedBundle:Default:index.html.twig */
class __TwigTemplate_0356b048997aa23f8fd9914075477ba141a5d12bd5c368757a0a29446ff3de21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Default:index.html.twig", 1);
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
        $__internal_20ae413d2788ff2e3c7abfe0c45208f77ef328c79f87b7378346bba13cbcd283 = $this->env->getExtension("native_profiler");
        $__internal_20ae413d2788ff2e3c7abfe0c45208f77ef328c79f87b7378346bba13cbcd283->enter($__internal_20ae413d2788ff2e3c7abfe0c45208f77ef328c79f87b7378346bba13cbcd283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20ae413d2788ff2e3c7abfe0c45208f77ef328c79f87b7378346bba13cbcd283->leave($__internal_20ae413d2788ff2e3c7abfe0c45208f77ef328c79f87b7378346bba13cbcd283_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1bc73f344f2145735f89b5a331a7b4007bd9b91ba4cc75f273fdd15361ead94 = $this->env->getExtension("native_profiler");
        $__internal_f1bc73f344f2145735f89b5a331a7b4007bd9b91ba4cc75f273fdd15361ead94->enter($__internal_f1bc73f344f2145735f89b5a331a7b4007bd9b91ba4cc75f273fdd15361ead94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 5
            if ((($this->getAttribute($context["loop"], "index0", array()) % 2) == 0)) {
                // line 6
                echo "<div class=\"row\">
";
            }
            // line 8
            echo "<div class=\"col-sm-6\">
  <div class=\"post-thumbnail\">


    <h3><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "slug" => $this->getAttribute($context["entity"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a></h3>

    <div class=\"post-meta\">
      <span class=\"post-date\">
        ";
            // line 16
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            }
            // line 17
            echo "      </span>
      <span class=\"post-category\">
        /";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "category", array()), "html", null, true);
            echo "
      </span>
    </div>
    <div class=\"post-text\">
      ";
            // line 23
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($this->getAttribute($context["entity"], "preText", array()) . $this->getAttribute($context["entity"], "summary", array()))) > 200)) ? ((twig_slice($this->env, ($this->getAttribute($context["entity"], "preText", array()) . $this->getAttribute($context["entity"], "summary", array())), 0, 200) . "...")) : (($this->getAttribute($context["entity"], "preText", array()) . $this->getAttribute($context["entity"], "summary", array())))), "html", null, true);
            echo "
    </div>
  </div>
</div>
";
            // line 27
            if (((($this->getAttribute($context["loop"], "index0", array()) % 2) == 1) || ($this->getAttribute($context["loop"], "index", array()) == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "count", array())))) {
                // line 28
                echo "</div>
";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
<div class=\"navigation\">
  ";
        // line 33
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>
";
        
        $__internal_f1bc73f344f2145735f89b5a331a7b4007bd9b91ba4cc75f273fdd15361ead94->leave($__internal_f1bc73f344f2145735f89b5a331a7b4007bd9b91ba4cc75f273fdd15361ead94_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  121 => 31,  105 => 28,  103 => 27,  96 => 23,  89 => 19,  85 => 17,  81 => 16,  72 => 12,  66 => 8,  62 => 6,  60 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block content %}*/
/* */
/* {% for entity in pagination %}*/
/* {% if loop.index0 % 2 == 0 %}*/
/* <div class="row">*/
/* {% endif %}*/
/* <div class="col-sm-6">*/
/*   <div class="post-thumbnail">*/
/* */
/* */
/*     <h3><a href="{{ path('post_show', { 'id': entity.id, 'slug': entity.slug }) }}">{{ entity.title }}</a></h3>*/
/* */
/*     <div class="post-meta">*/
/*       <span class="post-date">*/
/*         {% if entity.date %}{{ entity.date|date('Y-m-d') }}{% endif %}*/
/*       </span>*/
/*       <span class="post-category">*/
/*         /{{entity.category}}*/
/*       </span>*/
/*     </div>*/
/*     <div class="post-text">*/
/*       {{ (entity.preText ~ entity.summary)|length > 200 ? (entity.preText ~ entity.summary)|slice(0, 200) ~ '...' : (entity.preText ~ entity.summary) }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% if loop.index0 % 2 == 1 or loop.index == pagination.count %}*/
/* </div>*/
/* {% endif %}*/
/* {% endfor %}*/
/* */
/* <div class="navigation">*/
/*   {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
