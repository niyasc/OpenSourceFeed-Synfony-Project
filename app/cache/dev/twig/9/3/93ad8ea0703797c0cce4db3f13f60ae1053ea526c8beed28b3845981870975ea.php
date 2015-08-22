<?php

/* OpenSourceFeedBundle:Subcategory:new.html.twig */
class __TwigTemplate_93ad8ea0703797c0cce4db3f13f60ae1053ea526c8beed28b3845981870975ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Subcategory:new.html.twig", 1);
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
        $__internal_591b24abbcbe28bc86a76a092a679b908119d1267b5f1a236075c58cac5170ac = $this->env->getExtension("native_profiler");
        $__internal_591b24abbcbe28bc86a76a092a679b908119d1267b5f1a236075c58cac5170ac->enter($__internal_591b24abbcbe28bc86a76a092a679b908119d1267b5f1a236075c58cac5170ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Subcategory:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_591b24abbcbe28bc86a76a092a679b908119d1267b5f1a236075c58cac5170ac->leave($__internal_591b24abbcbe28bc86a76a092a679b908119d1267b5f1a236075c58cac5170ac_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ac9bc14f8bfdfd2dc7b98407d55a6eb6cc48e0ae1b44dd92c6b20b7012df581 = $this->env->getExtension("native_profiler");
        $__internal_2ac9bc14f8bfdfd2dc7b98407d55a6eb6cc48e0ae1b44dd92c6b20b7012df581->enter($__internal_2ac9bc14f8bfdfd2dc7b98407d55a6eb6cc48e0ae1b44dd92c6b20b7012df581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory", array("category" => twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "name", array()))), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_2ac9bc14f8bfdfd2dc7b98407d55a6eb6cc48e0ae1b44dd92c6b20b7012df581->leave($__internal_2ac9bc14f8bfdfd2dc7b98407d55a6eb6cc48e0ae1b44dd92c6b20b7012df581_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Subcategory:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
