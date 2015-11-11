<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ded3e16a32fbf1a32ee752dff34c38de040d09b7694ccf5245918e51daae608c extends Twig_Template
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
        $__internal_132e5525388fe99165708d7a497995397df6a63da099bd1ecfd29e226003e419 = $this->env->getExtension("native_profiler");
        $__internal_132e5525388fe99165708d7a497995397df6a63da099bd1ecfd29e226003e419->enter($__internal_132e5525388fe99165708d7a497995397df6a63da099bd1ecfd29e226003e419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132e5525388fe99165708d7a497995397df6a63da099bd1ecfd29e226003e419->leave($__internal_132e5525388fe99165708d7a497995397df6a63da099bd1ecfd29e226003e419_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d40bc7892dc33fe4e8e659a8a5d729124721bf34671ab4dfb4bf0195390fd8c = $this->env->getExtension("native_profiler");
        $__internal_2d40bc7892dc33fe4e8e659a8a5d729124721bf34671ab4dfb4bf0195390fd8c->enter($__internal_2d40bc7892dc33fe4e8e659a8a5d729124721bf34671ab4dfb4bf0195390fd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d40bc7892dc33fe4e8e659a8a5d729124721bf34671ab4dfb4bf0195390fd8c->leave($__internal_2d40bc7892dc33fe4e8e659a8a5d729124721bf34671ab4dfb4bf0195390fd8c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a159f023a15bb1f2bb7d3367f8e123e508e989e58f2b72be3ea9ceb112327f5d = $this->env->getExtension("native_profiler");
        $__internal_a159f023a15bb1f2bb7d3367f8e123e508e989e58f2b72be3ea9ceb112327f5d->enter($__internal_a159f023a15bb1f2bb7d3367f8e123e508e989e58f2b72be3ea9ceb112327f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a159f023a15bb1f2bb7d3367f8e123e508e989e58f2b72be3ea9ceb112327f5d->leave($__internal_a159f023a15bb1f2bb7d3367f8e123e508e989e58f2b72be3ea9ceb112327f5d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_35b9d70137004e7294846e7c27e8bed0523e0941767fe46baff8b8eb54340b2f = $this->env->getExtension("native_profiler");
        $__internal_35b9d70137004e7294846e7c27e8bed0523e0941767fe46baff8b8eb54340b2f->enter($__internal_35b9d70137004e7294846e7c27e8bed0523e0941767fe46baff8b8eb54340b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_35b9d70137004e7294846e7c27e8bed0523e0941767fe46baff8b8eb54340b2f->leave($__internal_35b9d70137004e7294846e7c27e8bed0523e0941767fe46baff8b8eb54340b2f_prof);

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
