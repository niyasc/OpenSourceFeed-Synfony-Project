<?php

/* OpenSourceFeedBundle:Category:index.html.twig */
class __TwigTemplate_90db7e88dcb8621136ae6ffe175b83635f884911367abf484a1b93c9165f5b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Category:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OpenSourceFeedBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2708a8b299a6e9a0ea460445c3c5b790d5c2a00658c91bc8ecdd362e3ba41c36 = $this->env->getExtension("native_profiler");
        $__internal_2708a8b299a6e9a0ea460445c3c5b790d5c2a00658c91bc8ecdd362e3ba41c36->enter($__internal_2708a8b299a6e9a0ea460445c3c5b790d5c2a00658c91bc8ecdd362e3ba41c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2708a8b299a6e9a0ea460445c3c5b790d5c2a00658c91bc8ecdd362e3ba41c36->leave($__internal_2708a8b299a6e9a0ea460445c3c5b790d5c2a00658c91bc8ecdd362e3ba41c36_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0bd64d32eeaf6172203429b13caf024ce7c1fcd7e5ab480a27c8f0971dea46e = $this->env->getExtension("native_profiler");
        $__internal_d0bd64d32eeaf6172203429b13caf024ce7c1fcd7e5ab480a27c8f0971dea46e->enter($__internal_d0bd64d32eeaf6172203429b13caf024ce7c1fcd7e5ab480a27c8f0971dea46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"page-header\">
  <h1>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
</div>
<a class=\"btn btn-default btn-xs text-right\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("category_new");
        echo "\">
  Create a new entry
</a>
<table class=\"table table-striped table-bordered table-rounded\">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
            // line 20
            echo "    <tr>
      <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory", array("category" => twig_template_get_attributes($this, $context["entity"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "</a></td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "name", array()), "html", null, true);
            echo "</td>
      <td>
        <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory", array("category" => twig_template_get_attributes($this, $context["entity"], "name", array()))), "html", null, true);
            echo "\">show</a>

        <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("name" => twig_template_get_attributes($this, $context["entity"], "name", array()))), "html", null, true);
            echo "\">edit</a>

      </td>
    </tr>
    ";
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
        echo "  </tbody>
</table>




";
        
        $__internal_d0bd64d32eeaf6172203429b13caf024ce7c1fcd7e5ab480a27c8f0971dea46e->leave($__internal_d0bd64d32eeaf6172203429b13caf024ce7c1fcd7e5ab480a27c8f0971dea46e_prof);

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
        return array (  118 => 31,  99 => 26,  94 => 24,  89 => 22,  83 => 21,  80 => 20,  63 => 19,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
