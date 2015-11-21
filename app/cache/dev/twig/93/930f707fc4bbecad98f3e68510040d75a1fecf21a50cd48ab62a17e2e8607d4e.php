<?php

/* :security:login.html.twig */
class __TwigTemplate_78885aa46ce45fe9784647794fee34957bd3b0ba97ca7dd911a1e447a9a3b624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":security:login.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5cb77970ec21a509fa70b32f9c1bca543ddd9dc411e49f0b1f641d33f891eed = $this->env->getExtension("native_profiler");
        $__internal_a5cb77970ec21a509fa70b32f9c1bca543ddd9dc411e49f0b1f641d33f891eed->enter($__internal_a5cb77970ec21a509fa70b32f9c1bca543ddd9dc411e49f0b1f641d33f891eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5cb77970ec21a509fa70b32f9c1bca543ddd9dc411e49f0b1f641d33f891eed->leave($__internal_a5cb77970ec21a509fa70b32f9c1bca543ddd9dc411e49f0b1f641d33f891eed_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d26add1ab63d3f63951a9fade689ac10645b417ba9c2cbf1252428cc0cf1a7c6 = $this->env->getExtension("native_profiler");
        $__internal_d26add1ab63d3f63951a9fade689ac10645b417ba9c2cbf1252428cc0cf1a7c6->enter($__internal_d26add1ab63d3f63951a9fade689ac10645b417ba9c2cbf1252428cc0cf1a7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "<div class=\"alert alert-danger\" role=\"alert\">
";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
  <div class=\"form-group\">
    <label for=\"username\">User Name</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" autocomplete=\"off\" autofocus=\"\"/>
  </div>
  <div class=\"form-group\">

    <label for=\"password\">Password</label>
    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
  </div>

  ";
        // line 27
        echo "  <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary btn-sm custom-btn\">LOGIN</button>
  </div>
</form>

";
        
        $__internal_d26add1ab63d3f63951a9fade689ac10645b417ba9c2cbf1252428cc0cf1a7c6->leave($__internal_d26add1ab63d3f63951a9fade689ac10645b417ba9c2cbf1252428cc0cf1a7c6_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  63 => 14,  57 => 11,  54 => 10,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% if error %}*/
/* <div class="alert alert-danger" role="alert">*/
/* {{ error.messageKey|trans(error.messageData, 'security') }}*/
/* </div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/*   <div class="form-group">*/
/*     <label for="username">User Name</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" autocomplete="off" autofocus=""/>*/
/*   </div>*/
/*   <div class="form-group">*/
/* */
/*     <label for="password">Password</label>*/
/*     <input type="password" id="password" name="_password" class="form-control"/>*/
/*   </div>*/
/* */
/*   {#*/
/*   If you want to control the URL the user*/
/*   is redirected to on success (more details below)*/
/*   <input type="hidden" name="_target_path" value="/account" />*/
/*   #}*/
/*   <div class="form-group">*/
/*     <button type="submit" class="btn btn-primary btn-sm custom-btn">LOGIN</button>*/
/*   </div>*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
