<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_e571e2ab8639931199ffeb132b80f5da86d8b669676ae757d02eb7b4172f075e extends Twig_Template
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
        $__internal_3ae03e4d130eac4ff0a9e90f22e0c577368c71faec11840120709f5d03de9c37 = $this->env->getExtension("native_profiler");
        $__internal_3ae03e4d130eac4ff0a9e90f22e0c577368c71faec11840120709f5d03de9c37->enter($__internal_3ae03e4d130eac4ff0a9e90f22e0c577368c71faec11840120709f5d03de9c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae03e4d130eac4ff0a9e90f22e0c577368c71faec11840120709f5d03de9c37->leave($__internal_3ae03e4d130eac4ff0a9e90f22e0c577368c71faec11840120709f5d03de9c37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3fa9179c03c151866f102e5ac5cb573efbc465f679d5e528d307010482406bb = $this->env->getExtension("native_profiler");
        $__internal_e3fa9179c03c151866f102e5ac5cb573efbc465f679d5e528d307010482406bb->enter($__internal_e3fa9179c03c151866f102e5ac5cb573efbc465f679d5e528d307010482406bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e3fa9179c03c151866f102e5ac5cb573efbc465f679d5e528d307010482406bb->leave($__internal_e3fa9179c03c151866f102e5ac5cb573efbc465f679d5e528d307010482406bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f0fcdc0257578468e0829d49c4dcd368b51d07b94eec43e3c15ce3e64929093 = $this->env->getExtension("native_profiler");
        $__internal_6f0fcdc0257578468e0829d49c4dcd368b51d07b94eec43e3c15ce3e64929093->enter($__internal_6f0fcdc0257578468e0829d49c4dcd368b51d07b94eec43e3c15ce3e64929093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6f0fcdc0257578468e0829d49c4dcd368b51d07b94eec43e3c15ce3e64929093->leave($__internal_6f0fcdc0257578468e0829d49c4dcd368b51d07b94eec43e3c15ce3e64929093_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa3ca16ef29c86e1b81a794729b4404cf2cff51866663329fa3ef7cfaccfa29c = $this->env->getExtension("native_profiler");
        $__internal_aa3ca16ef29c86e1b81a794729b4404cf2cff51866663329fa3ef7cfaccfa29c->enter($__internal_aa3ca16ef29c86e1b81a794729b4404cf2cff51866663329fa3ef7cfaccfa29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa3ca16ef29c86e1b81a794729b4404cf2cff51866663329fa3ef7cfaccfa29c->leave($__internal_aa3ca16ef29c86e1b81a794729b4404cf2cff51866663329fa3ef7cfaccfa29c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_88c0eada31cdcc01b8fb5b52f177af2c9f6a05012d1fa5de66739852b0834fdb = $this->env->getExtension("native_profiler");
        $__internal_88c0eada31cdcc01b8fb5b52f177af2c9f6a05012d1fa5de66739852b0834fdb->enter($__internal_88c0eada31cdcc01b8fb5b52f177af2c9f6a05012d1fa5de66739852b0834fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_88c0eada31cdcc01b8fb5b52f177af2c9f6a05012d1fa5de66739852b0834fdb->leave($__internal_88c0eada31cdcc01b8fb5b52f177af2c9f6a05012d1fa5de66739852b0834fdb_prof);

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
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
