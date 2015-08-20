<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ba5d4ac916d5b26764d0fb9efe29b820678c916136de870416723aa49a28dcbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_709e704d9cf17dc0fa9e95324f41f931b1e78b30bd14599e4008914adb52e72b = $this->env->getExtension("native_profiler");
        $__internal_709e704d9cf17dc0fa9e95324f41f931b1e78b30bd14599e4008914adb52e72b->enter($__internal_709e704d9cf17dc0fa9e95324f41f931b1e78b30bd14599e4008914adb52e72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_709e704d9cf17dc0fa9e95324f41f931b1e78b30bd14599e4008914adb52e72b->leave($__internal_709e704d9cf17dc0fa9e95324f41f931b1e78b30bd14599e4008914adb52e72b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43050567e6da50d39e91834a7594cd17d77dbf10330eb354e1e371a994e5902d = $this->env->getExtension("native_profiler");
        $__internal_43050567e6da50d39e91834a7594cd17d77dbf10330eb354e1e371a994e5902d->enter($__internal_43050567e6da50d39e91834a7594cd17d77dbf10330eb354e1e371a994e5902d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_43050567e6da50d39e91834a7594cd17d77dbf10330eb354e1e371a994e5902d->leave($__internal_43050567e6da50d39e91834a7594cd17d77dbf10330eb354e1e371a994e5902d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a2ccfcc98f73f9303ae73cfeb535e851f8452038dfb40a08fe4dc9a98856e18 = $this->env->getExtension("native_profiler");
        $__internal_8a2ccfcc98f73f9303ae73cfeb535e851f8452038dfb40a08fe4dc9a98856e18->enter($__internal_8a2ccfcc98f73f9303ae73cfeb535e851f8452038dfb40a08fe4dc9a98856e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_8a2ccfcc98f73f9303ae73cfeb535e851f8452038dfb40a08fe4dc9a98856e18->leave($__internal_8a2ccfcc98f73f9303ae73cfeb535e851f8452038dfb40a08fe4dc9a98856e18_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f9afa77d475d2379e24a78ad51d794727b2830c7cc43ac0499c6b46cd077bd3 = $this->env->getExtension("native_profiler");
        $__internal_3f9afa77d475d2379e24a78ad51d794727b2830c7cc43ac0499c6b46cd077bd3->enter($__internal_3f9afa77d475d2379e24a78ad51d794727b2830c7cc43ac0499c6b46cd077bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_3f9afa77d475d2379e24a78ad51d794727b2830c7cc43ac0499c6b46cd077bd3->leave($__internal_3f9afa77d475d2379e24a78ad51d794727b2830c7cc43ac0499c6b46cd077bd3_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_40e085f46d041c2427d6fa3fc8e79f9eaa3a925d540a4c3dbcfb7292433ff6c4 = $this->env->getExtension("native_profiler");
        $__internal_40e085f46d041c2427d6fa3fc8e79f9eaa3a925d540a4c3dbcfb7292433ff6c4->enter($__internal_40e085f46d041c2427d6fa3fc8e79f9eaa3a925d540a4c3dbcfb7292433ff6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_40e085f46d041c2427d6fa3fc8e79f9eaa3a925d540a4c3dbcfb7292433ff6c4->leave($__internal_40e085f46d041c2427d6fa3fc8e79f9eaa3a925d540a4c3dbcfb7292433ff6c4_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
