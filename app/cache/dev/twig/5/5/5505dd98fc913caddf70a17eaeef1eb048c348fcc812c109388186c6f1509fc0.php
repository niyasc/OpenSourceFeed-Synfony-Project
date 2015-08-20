<?php

/* OpenSourceFeedBundle:Subcategory:edit.html.twig */
class __TwigTemplate_5505dd98fc913caddf70a17eaeef1eb048c348fcc812c109388186c6f1509fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Subcategory:edit.html.twig", 1);
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
        $__internal_1d05d5e007008ebcff23c2e07a7308ca5b59f49647e7c64407cf55e39ed065fc = $this->env->getExtension("native_profiler");
        $__internal_1d05d5e007008ebcff23c2e07a7308ca5b59f49647e7c64407cf55e39ed065fc->enter($__internal_1d05d5e007008ebcff23c2e07a7308ca5b59f49647e7c64407cf55e39ed065fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Subcategory:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d05d5e007008ebcff23c2e07a7308ca5b59f49647e7c64407cf55e39ed065fc->leave($__internal_1d05d5e007008ebcff23c2e07a7308ca5b59f49647e7c64407cf55e39ed065fc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b9e83ee60ca4479bb8b5941ed1cb3d91aac66fb9e3fb4227e59c2e146a23e92f = $this->env->getExtension("native_profiler");
        $__internal_b9e83ee60ca4479bb8b5941ed1cb3d91aac66fb9e3fb4227e59c2e146a23e92f->enter($__internal_b9e83ee60ca4479bb8b5941ed1cb3d91aac66fb9e3fb4227e59c2e146a23e92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("subcategory");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_b9e83ee60ca4479bb8b5941ed1cb3d91aac66fb9e3fb4227e59c2e146a23e92f->leave($__internal_b9e83ee60ca4479bb8b5941ed1cb3d91aac66fb9e3fb4227e59c2e146a23e92f_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Subcategory:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 10,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
