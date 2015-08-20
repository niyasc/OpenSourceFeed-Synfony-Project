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
        $__internal_c1cb5d5815de9f13dcea1b434282bbda6fc30b4bdbc85c9eb9b4ee36343ca1ed = $this->env->getExtension("native_profiler");
        $__internal_c1cb5d5815de9f13dcea1b434282bbda6fc30b4bdbc85c9eb9b4ee36343ca1ed->enter($__internal_c1cb5d5815de9f13dcea1b434282bbda6fc30b4bdbc85c9eb9b4ee36343ca1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Subcategory:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1cb5d5815de9f13dcea1b434282bbda6fc30b4bdbc85c9eb9b4ee36343ca1ed->leave($__internal_c1cb5d5815de9f13dcea1b434282bbda6fc30b4bdbc85c9eb9b4ee36343ca1ed_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0177877f8c24e33fe6224e182694a51512633c1117342b9996ea9601af8f290d = $this->env->getExtension("native_profiler");
        $__internal_0177877f8c24e33fe6224e182694a51512633c1117342b9996ea9601af8f290d->enter($__internal_0177877f8c24e33fe6224e182694a51512633c1117342b9996ea9601af8f290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('routing')->getPath("subcategory");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_0177877f8c24e33fe6224e182694a51512633c1117342b9996ea9601af8f290d->leave($__internal_0177877f8c24e33fe6224e182694a51512633c1117342b9996ea9601af8f290d_prof);

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
