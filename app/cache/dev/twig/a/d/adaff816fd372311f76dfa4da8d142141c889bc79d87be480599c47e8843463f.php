<?php

/* OpenSourceFeedBundle:Subcategory:show.html.twig */
class __TwigTemplate_adaff816fd372311f76dfa4da8d142141c889bc79d87be480599c47e8843463f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Subcategory:show.html.twig", 1);
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
        $__internal_8d0b061b29d57d8850ce352a2d23cb83da0bc8fbca61115c19faeb2a3acb7490 = $this->env->getExtension("native_profiler");
        $__internal_8d0b061b29d57d8850ce352a2d23cb83da0bc8fbca61115c19faeb2a3acb7490->enter($__internal_8d0b061b29d57d8850ce352a2d23cb83da0bc8fbca61115c19faeb2a3acb7490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Subcategory:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0b061b29d57d8850ce352a2d23cb83da0bc8fbca61115c19faeb2a3acb7490->leave($__internal_8d0b061b29d57d8850ce352a2d23cb83da0bc8fbca61115c19faeb2a3acb7490_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_69defd88ebae3237e46a43848083222dd7ec0be1065c48e3ce973b62845b41d5 = $this->env->getExtension("native_profiler");
        $__internal_69defd88ebae3237e46a43848083222dd7ec0be1065c48e3ce973b62845b41d5->enter($__internal_69defd88ebae3237e46a43848083222dd7ec0be1065c48e3ce973b62845b41d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory", array("category" => twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "name", array()))), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory_edit", array("category" => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "name" => twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_69defd88ebae3237e46a43848083222dd7ec0be1065c48e3ce973b62845b41d5->leave($__internal_69defd88ebae3237e46a43848083222dd7ec0be1065c48e3ce973b62845b41d5_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Subcategory:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  75 => 26,  67 => 21,  57 => 14,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
