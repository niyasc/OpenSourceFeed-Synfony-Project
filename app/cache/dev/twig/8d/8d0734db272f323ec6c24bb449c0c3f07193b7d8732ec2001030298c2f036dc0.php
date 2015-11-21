<?php

/* OpenSourceFeedBundle:NewsLetter:show.html.twig */
class __TwigTemplate_95bfdc9ba9359a77fddfeeaa615070112f20168093712195bfea822fb22cbd59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:NewsLetter:show.html.twig", 1);
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
        $__internal_bcb61aa0f829520f583772b7b5f061fa68f8dba768aa1f924a8706be90f4346a = $this->env->getExtension("native_profiler");
        $__internal_bcb61aa0f829520f583772b7b5f061fa68f8dba768aa1f924a8706be90f4346a->enter($__internal_bcb61aa0f829520f583772b7b5f061fa68f8dba768aa1f924a8706be90f4346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb61aa0f829520f583772b7b5f061fa68f8dba768aa1f924a8706be90f4346a->leave($__internal_bcb61aa0f829520f583772b7b5f061fa68f8dba768aa1f924a8706be90f4346a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_018bf34bfa3e0b7e60b1d6d2414cfc6109c524f6de16721b952083192f3db16e = $this->env->getExtension("native_profiler");
        $__internal_018bf34bfa3e0b7e60b1d6d2414cfc6109c524f6de16721b952083192f3db16e->enter($__internal_018bf34bfa3e0b7e60b1d6d2414cfc6109c524f6de16721b952083192f3db16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>NEWS LETTER DETAILS</h2>

<table class=\"table table-bordered table-custom table-striped\">

  <tr>
    <td>ID</td>
    <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>Name</td>
    <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>Link</td>
    <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "link", array()), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\" style=\"text-align: center\">
      <a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\">
        BACK
      </a>
      <a class=\"btn btn-primary btn-sm custom-btn\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
        EDIT
      </a>
      ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("style" => "display: inline", "onsubmit" => "return confirm(\"Are You Sure?\")")));
        echo "
      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-sm custom-btn")));
        echo "
      ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </td>
  </tr>

</table>


";
        
        $__internal_018bf34bfa3e0b7e60b1d6d2414cfc6109c524f6de16721b952083192f3db16e->leave($__internal_018bf34bfa3e0b7e60b1d6d2414cfc6109c524f6de16721b952083192f3db16e_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:NewsLetter:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  85 => 29,  81 => 28,  75 => 25,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/* <h2>NEWS LETTER DETAILS</h2>*/
/* */
/* <table class="table table-bordered table-custom table-striped">*/
/* */
/*   <tr>*/
/*     <td>ID</td>*/
/*     <td>{{ entity.id }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>Name</td>*/
/*     <td>{{ entity.name }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>Link</td>*/
/*     <td>{{ entity.link }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td colspan="2" style="text-align: center">*/
/*       <a class="btn btn-primary btn-sm custom-btn" href="{{ path('newsletter') }}">*/
/*         BACK*/
/*       </a>*/
/*       <a class="btn btn-primary btn-sm custom-btn" href="{{ path('newsletter_edit', { 'id': entity.id }) }}">*/
/*         EDIT*/
/*       </a>*/
/*       {{form_start(delete_form, {attr: {'style': 'display: inline', 'onsubmit': 'return confirm("Are You Sure?")'}})}}*/
/*       {{form_widget(delete_form.submit, {attr: {'class': 'btn btn-primary btn-sm custom-btn'}})}}*/
/*       {{form_end(delete_form)}}*/
/*     </td>*/
/*   </tr>*/
/* */
/* </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
