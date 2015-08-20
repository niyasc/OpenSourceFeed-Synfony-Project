<?php

/* OpenSourceFeedBundle:Category:edit.html.twig */
class __TwigTemplate_4de69fabd17a0e2ad8a62e39fb434481023b21da75bf166f55495d10f775d920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Category:edit.html.twig", 1);
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
        $__internal_56b48576a34096b4ce4ffa56dac634eaa3cf68bd5135c3b3e8817e36cabdf622 = $this->env->getExtension("native_profiler");
        $__internal_56b48576a34096b4ce4ffa56dac634eaa3cf68bd5135c3b3e8817e36cabdf622->enter($__internal_56b48576a34096b4ce4ffa56dac634eaa3cf68bd5135c3b3e8817e36cabdf622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b48576a34096b4ce4ffa56dac634eaa3cf68bd5135c3b3e8817e36cabdf622->leave($__internal_56b48576a34096b4ce4ffa56dac634eaa3cf68bd5135c3b3e8817e36cabdf622_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1dbda18b510d8da42c9e8a062e3d0f9fca4b278b7d1b8eb2ad0bb0c07cced100 = $this->env->getExtension("native_profiler");
        $__internal_1dbda18b510d8da42c9e8a062e3d0f9fca4b278b7d1b8eb2ad0bb0c07cced100->enter($__internal_1dbda18b510d8da42c9e8a062e3d0f9fca4b278b7d1b8eb2ad0bb0c07cced100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('routing')->getPath("category");
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
        
        $__internal_1dbda18b510d8da42c9e8a062e3d0f9fca4b278b7d1b8eb2ad0bb0c07cced100->leave($__internal_1dbda18b510d8da42c9e8a062e3d0f9fca4b278b7d1b8eb2ad0bb0c07cced100_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Category:edit.html.twig";
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
