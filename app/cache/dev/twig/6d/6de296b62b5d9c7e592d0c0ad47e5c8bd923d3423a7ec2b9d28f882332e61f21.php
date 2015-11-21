<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_be7b121635d8f2614b5c5833ff56b5044bcf049a23f7eeeec9d26c2439029b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d3f3d54ca18f1142f77a5d22a9c3a5ecf11a7be1dd853088eea98d8a21ff0e7b = $this->env->getExtension("native_profiler");
        $__internal_d3f3d54ca18f1142f77a5d22a9c3a5ecf11a7be1dd853088eea98d8a21ff0e7b->enter($__internal_d3f3d54ca18f1142f77a5d22a9c3a5ecf11a7be1dd853088eea98d8a21ff0e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3f3d54ca18f1142f77a5d22a9c3a5ecf11a7be1dd853088eea98d8a21ff0e7b->leave($__internal_d3f3d54ca18f1142f77a5d22a9c3a5ecf11a7be1dd853088eea98d8a21ff0e7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31eb9580b9b91ec70aaf7aac0cabcd92adbb2f1eb02bf71785bd2ef004fdaf7e = $this->env->getExtension("native_profiler");
        $__internal_31eb9580b9b91ec70aaf7aac0cabcd92adbb2f1eb02bf71785bd2ef004fdaf7e->enter($__internal_31eb9580b9b91ec70aaf7aac0cabcd92adbb2f1eb02bf71785bd2ef004fdaf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_31eb9580b9b91ec70aaf7aac0cabcd92adbb2f1eb02bf71785bd2ef004fdaf7e->leave($__internal_31eb9580b9b91ec70aaf7aac0cabcd92adbb2f1eb02bf71785bd2ef004fdaf7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54ba6127f3e1ff7a63fc10e6a8166105c3b710bf93f5cc18520ca30bb36d407f = $this->env->getExtension("native_profiler");
        $__internal_54ba6127f3e1ff7a63fc10e6a8166105c3b710bf93f5cc18520ca30bb36d407f->enter($__internal_54ba6127f3e1ff7a63fc10e6a8166105c3b710bf93f5cc18520ca30bb36d407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_54ba6127f3e1ff7a63fc10e6a8166105c3b710bf93f5cc18520ca30bb36d407f->leave($__internal_54ba6127f3e1ff7a63fc10e6a8166105c3b710bf93f5cc18520ca30bb36d407f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a57f5e1bcc140452330c6ddf7570493b16f56395df79b860a78c57cd01880d8a = $this->env->getExtension("native_profiler");
        $__internal_a57f5e1bcc140452330c6ddf7570493b16f56395df79b860a78c57cd01880d8a->enter($__internal_a57f5e1bcc140452330c6ddf7570493b16f56395df79b860a78c57cd01880d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a57f5e1bcc140452330c6ddf7570493b16f56395df79b860a78c57cd01880d8a->leave($__internal_a57f5e1bcc140452330c6ddf7570493b16f56395df79b860a78c57cd01880d8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
