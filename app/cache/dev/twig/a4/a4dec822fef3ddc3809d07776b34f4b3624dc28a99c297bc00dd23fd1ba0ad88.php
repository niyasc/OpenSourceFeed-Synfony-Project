<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_79bd52c883ccbddea9a69d3fc529e559cc206d14c154ebae0eabc541f21ffce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a679b910bb3f186eaab83aa466ed7809ba4aaa820b202b36ba3589a69247633 = $this->env->getExtension("native_profiler");
        $__internal_4a679b910bb3f186eaab83aa466ed7809ba4aaa820b202b36ba3589a69247633->enter($__internal_4a679b910bb3f186eaab83aa466ed7809ba4aaa820b202b36ba3589a69247633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a679b910bb3f186eaab83aa466ed7809ba4aaa820b202b36ba3589a69247633->leave($__internal_4a679b910bb3f186eaab83aa466ed7809ba4aaa820b202b36ba3589a69247633_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f6c77da10bbf1ee484135c7aafb11ecbfc41fa20bf651618bf562e2689489e8 = $this->env->getExtension("native_profiler");
        $__internal_5f6c77da10bbf1ee484135c7aafb11ecbfc41fa20bf651618bf562e2689489e8->enter($__internal_5f6c77da10bbf1ee484135c7aafb11ecbfc41fa20bf651618bf562e2689489e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5f6c77da10bbf1ee484135c7aafb11ecbfc41fa20bf651618bf562e2689489e8->leave($__internal_5f6c77da10bbf1ee484135c7aafb11ecbfc41fa20bf651618bf562e2689489e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e7ad5b30c60812d69cfb646356766c9eddef68ba6af9d9ae134cb8dfd363b77 = $this->env->getExtension("native_profiler");
        $__internal_1e7ad5b30c60812d69cfb646356766c9eddef68ba6af9d9ae134cb8dfd363b77->enter($__internal_1e7ad5b30c60812d69cfb646356766c9eddef68ba6af9d9ae134cb8dfd363b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1e7ad5b30c60812d69cfb646356766c9eddef68ba6af9d9ae134cb8dfd363b77->leave($__internal_1e7ad5b30c60812d69cfb646356766c9eddef68ba6af9d9ae134cb8dfd363b77_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
