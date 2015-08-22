<?php

/* OpenSourceFeedBundle:Category:show.html.twig */
class __TwigTemplate_6aa7019b9411efeef0c6ca3fb52070629d900cef1b3c4896761ae206ba21aa68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Category:show.html.twig", 1);
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
        $__internal_f8899be49e4d8eda8a5dd2474960a607a4c2483d349907672daac030adf72e94 = $this->env->getExtension("native_profiler");
        $__internal_f8899be49e4d8eda8a5dd2474960a607a4c2483d349907672daac030adf72e94->enter($__internal_f8899be49e4d8eda8a5dd2474960a607a4c2483d349907672daac030adf72e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8899be49e4d8eda8a5dd2474960a607a4c2483d349907672daac030adf72e94->leave($__internal_f8899be49e4d8eda8a5dd2474960a607a4c2483d349907672daac030adf72e94_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9808efabab3d3176edc0481ed8e3f9292c07425204e4c1e24b66d301119aedb = $this->env->getExtension("native_profiler");
        $__internal_d9808efabab3d3176edc0481ed8e3f9292c07425204e4c1e24b66d301119aedb->enter($__internal_d9808efabab3d3176edc0481ed8e3f9292c07425204e4c1e24b66d301119aedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("name" => twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()))), "html", null, true);
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
        
        $__internal_d9808efabab3d3176edc0481ed8e3f9292c07425204e4c1e24b66d301119aedb->leave($__internal_d9808efabab3d3176edc0481ed8e3f9292c07425204e4c1e24b66d301119aedb_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Category:show.html.twig";
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
