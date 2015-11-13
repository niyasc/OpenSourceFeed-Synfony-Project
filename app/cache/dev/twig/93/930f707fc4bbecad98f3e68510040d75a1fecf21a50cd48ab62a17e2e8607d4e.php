<?php

/* security/login.html.twig */
class __TwigTemplate_78885aa46ce45fe9784647794fee34957bd3b0ba97ca7dd911a1e447a9a3b624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d48a0eb8d28cf9521e86820400f922a32c7c59894bbc444fe9464c3c246b2f8b = $this->env->getExtension("native_profiler");
        $__internal_d48a0eb8d28cf9521e86820400f922a32c7c59894bbc444fe9464c3c246b2f8b->enter($__internal_d48a0eb8d28cf9521e86820400f922a32c7c59894bbc444fe9464c3c246b2f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48a0eb8d28cf9521e86820400f922a32c7c59894bbc444fe9464c3c246b2f8b->leave($__internal_d48a0eb8d28cf9521e86820400f922a32c7c59894bbc444fe9464c3c246b2f8b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_837b4cc9992a4d5c0674aa0ed732476aa50554cb95e945779dcd9e786415e431 = $this->env->getExtension("native_profiler");
        $__internal_837b4cc9992a4d5c0674aa0ed732476aa50554cb95e945779dcd9e786415e431->enter($__internal_837b4cc9992a4d5c0674aa0ed732476aa50554cb95e945779dcd9e786415e431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_837b4cc9992a4d5c0674aa0ed732476aa50554cb95e945779dcd9e786415e431->leave($__internal_837b4cc9992a4d5c0674aa0ed732476aa50554cb95e945779dcd9e786415e431_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
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
/* {% block content %}*/
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
