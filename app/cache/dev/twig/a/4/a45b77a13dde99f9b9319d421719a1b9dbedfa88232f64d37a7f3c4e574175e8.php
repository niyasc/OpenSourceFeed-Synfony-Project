<?php

/* OpenSourceFeedBundle:Category:new.html.twig */
class __TwigTemplate_a45b77a13dde99f9b9319d421719a1b9dbedfa88232f64d37a7f3c4e574175e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Category:new.html.twig", 1);
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
        $__internal_b60d10e1544deb26fb99b5476469a9dbfefb0b1163ab26be4b12c5350553bc1a = $this->env->getExtension("native_profiler");
        $__internal_b60d10e1544deb26fb99b5476469a9dbfefb0b1163ab26be4b12c5350553bc1a->enter($__internal_b60d10e1544deb26fb99b5476469a9dbfefb0b1163ab26be4b12c5350553bc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b60d10e1544deb26fb99b5476469a9dbfefb0b1163ab26be4b12c5350553bc1a->leave($__internal_b60d10e1544deb26fb99b5476469a9dbfefb0b1163ab26be4b12c5350553bc1a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a384792a4b773403e61d5207b911459ae41194c204775a892f76813f2bf0c0f = $this->env->getExtension("native_profiler");
        $__internal_3a384792a4b773403e61d5207b911459ae41194c204775a892f76813f2bf0c0f->enter($__internal_3a384792a4b773403e61d5207b911459ae41194c204775a892f76813f2bf0c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_3a384792a4b773403e61d5207b911459ae41194c204775a892f76813f2bf0c0f->leave($__internal_3a384792a4b773403e61d5207b911459ae41194c204775a892f76813f2bf0c0f_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
