<?php

/* OpenSourceFeedBundle:Subcategory:index.html.twig */
class __TwigTemplate_f82472c4a11983e87ce148ba8796dc0ffde4b0021e5dde070a044bd66f5e7e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Subcategory:index.html.twig", 1);
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
        $__internal_8d4848b56cc6f5ae50ca303159139d5f851c5de701e12f828a2beb913ef67f08 = $this->env->getExtension("native_profiler");
        $__internal_8d4848b56cc6f5ae50ca303159139d5f851c5de701e12f828a2beb913ef67f08->enter($__internal_8d4848b56cc6f5ae50ca303159139d5f851c5de701e12f828a2beb913ef67f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Subcategory:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4848b56cc6f5ae50ca303159139d5f851c5de701e12f828a2beb913ef67f08->leave($__internal_8d4848b56cc6f5ae50ca303159139d5f851c5de701e12f828a2beb913ef67f08_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e03667cb6f5c4e2527d6b99fe9be74ecdbba5aa574d7d371c82dfaa2bd892468 = $this->env->getExtension("native_profiler");
        $__internal_e03667cb6f5c4e2527d6b99fe9be74ecdbba5aa574d7d371c82dfaa2bd892468->enter($__internal_e03667cb6f5c4e2527d6b99fe9be74ecdbba5aa574d7d371c82dfaa2bd892468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"page-header\">
  <h1>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
</div>

<table class=\"table table-striped table-bordered\">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 17
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
            // line 18
            echo "    <tr>
      <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory_show", array("name" => twig_template_get_attributes($this, $context["entity"], "name", array()), "category" => twig_template_get_attributes($this, twig_template_get_attributes($this, $context["entity"], "category", array()), "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
            echo "</a></td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "name", array()), "html", null, true);
            echo "</td>
      <td>

        <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory_show", array("name" => twig_template_get_attributes($this, $context["entity"], "name", array()), "category" => twig_template_get_attributes($this, twig_template_get_attributes($this, $context["entity"], "category", array()), "name", array()))), "html", null, true);
            echo "\">show</a>

        <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory_edit", array("name" => twig_template_get_attributes($this, $context["entity"], "name", array()), "category" => twig_template_get_attributes($this, twig_template_get_attributes($this, $context["entity"], "category", array()), "name", array()))), "html", null, true);
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
        // line 30
        echo "    <tr>
      <td colspan=\"3\" class=\"text-center\">
        <a class=\"btn btn-default btn-xs\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory_new", array("category" => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html", null, true);
        echo "\">
          Create a new entry
        </a>

        <a class=\"btn btn-default btn-xs\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\">
          View All Categories
        </a>
      </td>
    </tr>
  </tbody>
</table>



";
        
        $__internal_e03667cb6f5c4e2527d6b99fe9be74ecdbba5aa574d7d371c82dfaa2bd892468->leave($__internal_e03667cb6f5c4e2527d6b99fe9be74ecdbba5aa574d7d371c82dfaa2bd892468_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Subcategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  118 => 32,  114 => 30,  95 => 25,  90 => 23,  84 => 20,  78 => 19,  75 => 18,  58 => 17,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
