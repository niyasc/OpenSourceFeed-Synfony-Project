<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_59a928090325efdec64bd02628171c3104069869a124365b11aa0ecb3b631af9 extends Twig_Template
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
        $__internal_24eebf0a9fea06aaa93aabcea39b5770c0b22f918b814e952e3e11d57e8f1e3c = $this->env->getExtension("native_profiler");
        $__internal_24eebf0a9fea06aaa93aabcea39b5770c0b22f918b814e952e3e11d57e8f1e3c->enter($__internal_24eebf0a9fea06aaa93aabcea39b5770c0b22f918b814e952e3e11d57e8f1e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24eebf0a9fea06aaa93aabcea39b5770c0b22f918b814e952e3e11d57e8f1e3c->leave($__internal_24eebf0a9fea06aaa93aabcea39b5770c0b22f918b814e952e3e11d57e8f1e3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a797a00003b9c4bfbea237fd3cec16a5f6bd1cb9d8f2299dca583dfb98697577 = $this->env->getExtension("native_profiler");
        $__internal_a797a00003b9c4bfbea237fd3cec16a5f6bd1cb9d8f2299dca583dfb98697577->enter($__internal_a797a00003b9c4bfbea237fd3cec16a5f6bd1cb9d8f2299dca583dfb98697577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a797a00003b9c4bfbea237fd3cec16a5f6bd1cb9d8f2299dca583dfb98697577->leave($__internal_a797a00003b9c4bfbea237fd3cec16a5f6bd1cb9d8f2299dca583dfb98697577_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2a1a6797e7e3982911b97a354711933379a7aea7aac57c1993d9a860b4d7486 = $this->env->getExtension("native_profiler");
        $__internal_a2a1a6797e7e3982911b97a354711933379a7aea7aac57c1993d9a860b4d7486->enter($__internal_a2a1a6797e7e3982911b97a354711933379a7aea7aac57c1993d9a860b4d7486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2a1a6797e7e3982911b97a354711933379a7aea7aac57c1993d9a860b4d7486->leave($__internal_a2a1a6797e7e3982911b97a354711933379a7aea7aac57c1993d9a860b4d7486_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce8b2f2888ea0d94adee9789ca44b3c5a7f89fd5ae2df760ac6cd43ce0a8e42a = $this->env->getExtension("native_profiler");
        $__internal_ce8b2f2888ea0d94adee9789ca44b3c5a7f89fd5ae2df760ac6cd43ce0a8e42a->enter($__internal_ce8b2f2888ea0d94adee9789ca44b3c5a7f89fd5ae2df760ac6cd43ce0a8e42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ce8b2f2888ea0d94adee9789ca44b3c5a7f89fd5ae2df760ac6cd43ce0a8e42a->leave($__internal_ce8b2f2888ea0d94adee9789ca44b3c5a7f89fd5ae2df760ac6cd43ce0a8e42a_prof);

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
