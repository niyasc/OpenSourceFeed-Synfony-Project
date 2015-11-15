<?php

/* OpenSourceFeedBundle:Post:show.html.twig */
class __TwigTemplate_2d8a81dfe476df75eabb0a4391ebb1caead3d104c09ade26eac2fe79db7c60fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Post:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ab5b323d034e1ec1ba0d8be5285c1a30b0e8989519b9b3821a14a0c3887b9d9 = $this->env->getExtension("native_profiler");
        $__internal_3ab5b323d034e1ec1ba0d8be5285c1a30b0e8989519b9b3821a14a0c3887b9d9->enter($__internal_3ab5b323d034e1ec1ba0d8be5285c1a30b0e8989519b9b3821a14a0c3887b9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ab5b323d034e1ec1ba0d8be5285c1a30b0e8989519b9b3821a14a0c3887b9d9->leave($__internal_3ab5b323d034e1ec1ba0d8be5285c1a30b0e8989519b9b3821a14a0c3887b9d9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecabbed9e0a77d33e7f0d54d4a226b6ee5b8dabb986b06bef461b84e3d9d4519 = $this->env->getExtension("native_profiler");
        $__internal_ecabbed9e0a77d33e7f0d54d4a226b6ee5b8dabb986b06bef461b84e3d9d4519->enter($__internal_ecabbed9e0a77d33e7f0d54d4a226b6ee5b8dabb986b06bef461b84e3d9d4519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo " | OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_ecabbed9e0a77d33e7f0d54d4a226b6ee5b8dabb986b06bef461b84e3d9d4519->leave($__internal_ecabbed9e0a77d33e7f0d54d4a226b6ee5b8dabb986b06bef461b84e3d9d4519_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5abd98f179ca24aa739715f83e4e1897372de24647299a2d63f1ca27b14c016d = $this->env->getExtension("native_profiler");
        $__internal_5abd98f179ca24aa739715f83e4e1897372de24647299a2d63f1ca27b14c016d->enter($__internal_5abd98f179ca24aa739715f83e4e1897372de24647299a2d63f1ca27b14c016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"post-entry\">
  <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</h2>
  <div class=\"post-info\">
    <span class=\"glyphicon glyphicon-folder-open\"> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "html", null, true);
        echo "</span>&nbsp;&nbsp;
    <span class=\"glyphicon glyphicon-time\"> ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d"), "html", null, true);
        echo " </span>&nbsp;&nbsp;
    <span class=\"glyphicon glyphicon-comment\"> ";
        // line 9
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comments", array())), "html", null, true);
        echo " Comments</span>&nbsp;&nbsp;
  </div>
  <div class=\"post-content\">
    <p>
      ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "preText", array()), "html", null, true);
        echo "
    </p>
    <blockquote>
      ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "summary", array()), "html", null, true);
        echo "
    </blockquote>
    <p>
      Read complete article <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "link", array()), "html", null, true);
        echo "\" target=\"_blank\">here</a>
    </p>
    <div>
      ";
        // line 22
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "postText", array());
        echo "
    </div>
  </div>



  <ul class=\"record_actions\">
    <li>
      <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">
        Back to the list
      </a>
    </li>
    <li>
      <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
        Edit
      </a>
    </li>
    <li>";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
  </ul>
</div>
";
        
        $__internal_5abd98f179ca24aa739715f83e4e1897372de24647299a2d63f1ca27b14c016d->leave($__internal_5abd98f179ca24aa739715f83e4e1897372de24647299a2d63f1ca27b14c016d_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  114 => 35,  106 => 30,  95 => 22,  89 => 19,  83 => 16,  77 => 13,  70 => 9,  66 => 8,  62 => 7,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}{{entity.title}} | OpenSourceFeed - Stories of Free/Open Source Technologies{% endblock %}*/
/* {% block content -%}*/
/* <div class="post-entry">*/
/*   <h2>{{entity.title}}</h2>*/
/*   <div class="post-info">*/
/*     <span class="glyphicon glyphicon-folder-open"> {{entity.category }}</span>&nbsp;&nbsp;*/
/*     <span class="glyphicon glyphicon-time"> {{entity.date|date('Y-m-d') }} </span>&nbsp;&nbsp;*/
/*     <span class="glyphicon glyphicon-comment"> {{entity.comments | length}} Comments</span>&nbsp;&nbsp;*/
/*   </div>*/
/*   <div class="post-content">*/
/*     <p>*/
/*       {{ entity.preText }}*/
/*     </p>*/
/*     <blockquote>*/
/*       {{ entity.summary }}*/
/*     </blockquote>*/
/*     <p>*/
/*       Read complete article <a href="{{ entity.link}}" target="_blank">here</a>*/
/*     </p>*/
/*     <div>*/
/*       {{ entity.postText | raw }}*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* */
/*   <ul class="record_actions">*/
/*     <li>*/
/*       <a href="{{ path('post') }}">*/
/*         Back to the list*/
/*       </a>*/
/*     </li>*/
/*     <li>*/
/*       <a href="{{ path('post_edit', { 'id': entity.id }) }}">*/
/*         Edit*/
/*       </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/*   </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
