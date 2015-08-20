<?php

/* base.html.twig */
class __TwigTemplate_9d5b7cea4861eee390a1b268b5f824e6a719220f7d809c0adde7de6934a0f1d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8f5a524c35ee2dc31d868fb7c9b3420bff30849365799bbc839dcadc9a9264b = $this->env->getExtension("native_profiler");
        $__internal_d8f5a524c35ee2dc31d868fb7c9b3420bff30849365799bbc839dcadc9a9264b->enter($__internal_d8f5a524c35ee2dc31d868fb7c9b3420bff30849365799bbc839dcadc9a9264b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d8f5a524c35ee2dc31d868fb7c9b3420bff30849365799bbc839dcadc9a9264b->leave($__internal_d8f5a524c35ee2dc31d868fb7c9b3420bff30849365799bbc839dcadc9a9264b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d627781ef21b5a64343491f8b880ae912fb2c6c5a712ef66611966cb7b149652 = $this->env->getExtension("native_profiler");
        $__internal_d627781ef21b5a64343491f8b880ae912fb2c6c5a712ef66611966cb7b149652->enter($__internal_d627781ef21b5a64343491f8b880ae912fb2c6c5a712ef66611966cb7b149652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d627781ef21b5a64343491f8b880ae912fb2c6c5a712ef66611966cb7b149652->leave($__internal_d627781ef21b5a64343491f8b880ae912fb2c6c5a712ef66611966cb7b149652_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_082109dc9db821cb23869ef211e4ca797312b3e3875aff41e853ab25d176ea62 = $this->env->getExtension("native_profiler");
        $__internal_082109dc9db821cb23869ef211e4ca797312b3e3875aff41e853ab25d176ea62->enter($__internal_082109dc9db821cb23869ef211e4ca797312b3e3875aff41e853ab25d176ea62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_082109dc9db821cb23869ef211e4ca797312b3e3875aff41e853ab25d176ea62->leave($__internal_082109dc9db821cb23869ef211e4ca797312b3e3875aff41e853ab25d176ea62_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_286b1f1c82793dea91f3cfa0e1f3df49290bcbbbef0b06e4a54ca91c1725d626 = $this->env->getExtension("native_profiler");
        $__internal_286b1f1c82793dea91f3cfa0e1f3df49290bcbbbef0b06e4a54ca91c1725d626->enter($__internal_286b1f1c82793dea91f3cfa0e1f3df49290bcbbbef0b06e4a54ca91c1725d626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_286b1f1c82793dea91f3cfa0e1f3df49290bcbbbef0b06e4a54ca91c1725d626->leave($__internal_286b1f1c82793dea91f3cfa0e1f3df49290bcbbbef0b06e4a54ca91c1725d626_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8f644726f1bc878aea9362331f7a5f9e55709cae543675811640c89187afe7d = $this->env->getExtension("native_profiler");
        $__internal_f8f644726f1bc878aea9362331f7a5f9e55709cae543675811640c89187afe7d->enter($__internal_f8f644726f1bc878aea9362331f7a5f9e55709cae543675811640c89187afe7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f8f644726f1bc878aea9362331f7a5f9e55709cae543675811640c89187afe7d->leave($__internal_f8f644726f1bc878aea9362331f7a5f9e55709cae543675811640c89187afe7d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
