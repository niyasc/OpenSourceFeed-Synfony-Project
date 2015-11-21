<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8b3113b6d2da40980c972dae1308d5caca007dff3094a26711cfeff812327af2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c701f9a8ee80ad7e61f363865ecc5cfeef66e801957144744b0eee911650d949 = $this->env->getExtension("native_profiler");
        $__internal_c701f9a8ee80ad7e61f363865ecc5cfeef66e801957144744b0eee911650d949->enter($__internal_c701f9a8ee80ad7e61f363865ecc5cfeef66e801957144744b0eee911650d949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c701f9a8ee80ad7e61f363865ecc5cfeef66e801957144744b0eee911650d949->leave($__internal_c701f9a8ee80ad7e61f363865ecc5cfeef66e801957144744b0eee911650d949_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
