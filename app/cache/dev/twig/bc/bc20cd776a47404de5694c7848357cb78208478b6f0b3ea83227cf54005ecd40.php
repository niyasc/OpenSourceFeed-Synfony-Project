<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6d246714a03dc8a91ce6e50059cbffaabc485b7a2066a53751cb5a7a549dffdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14b6341c75d956249b0dcc28c0bc0daf42367a5cdefc0ff1fabad7d02f1d7a98 = $this->env->getExtension("native_profiler");
        $__internal_14b6341c75d956249b0dcc28c0bc0daf42367a5cdefc0ff1fabad7d02f1d7a98->enter($__internal_14b6341c75d956249b0dcc28c0bc0daf42367a5cdefc0ff1fabad7d02f1d7a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_14b6341c75d956249b0dcc28c0bc0daf42367a5cdefc0ff1fabad7d02f1d7a98->leave($__internal_14b6341c75d956249b0dcc28c0bc0daf42367a5cdefc0ff1fabad7d02f1d7a98_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8600456de33d6005f8027e6dbebffef7d161b4836a3aa00f9e504f0037fdb3d = $this->env->getExtension("native_profiler");
        $__internal_e8600456de33d6005f8027e6dbebffef7d161b4836a3aa00f9e504f0037fdb3d->enter($__internal_e8600456de33d6005f8027e6dbebffef7d161b4836a3aa00f9e504f0037fdb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e8600456de33d6005f8027e6dbebffef7d161b4836a3aa00f9e504f0037fdb3d->leave($__internal_e8600456de33d6005f8027e6dbebffef7d161b4836a3aa00f9e504f0037fdb3d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
