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
        $__internal_bb42d4711188a3c8fc3decba0ef6d5b322b1cfcfc0e0f845a23eec37cf90a729 = $this->env->getExtension("native_profiler");
        $__internal_bb42d4711188a3c8fc3decba0ef6d5b322b1cfcfc0e0f845a23eec37cf90a729->enter($__internal_bb42d4711188a3c8fc3decba0ef6d5b322b1cfcfc0e0f845a23eec37cf90a729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb42d4711188a3c8fc3decba0ef6d5b322b1cfcfc0e0f845a23eec37cf90a729->leave($__internal_bb42d4711188a3c8fc3decba0ef6d5b322b1cfcfc0e0f845a23eec37cf90a729_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9e279b0131d4a4ca1eda0da90c51a8377c0a00f5869c576c57e432e34032de9 = $this->env->getExtension("native_profiler");
        $__internal_f9e279b0131d4a4ca1eda0da90c51a8377c0a00f5869c576c57e432e34032de9->enter($__internal_f9e279b0131d4a4ca1eda0da90c51a8377c0a00f5869c576c57e432e34032de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo " | OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_f9e279b0131d4a4ca1eda0da90c51a8377c0a00f5869c576c57e432e34032de9->leave($__internal_f9e279b0131d4a4ca1eda0da90c51a8377c0a00f5869c576c57e432e34032de9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c2764a5a0b25918e2901f57e53ef09097bb1fd3a91c4252086112016e29ac9de = $this->env->getExtension("native_profiler");
        $__internal_c2764a5a0b25918e2901f57e53ef09097bb1fd3a91c4252086112016e29ac9de->enter($__internal_c2764a5a0b25918e2901f57e53ef09097bb1fd3a91c4252086112016e29ac9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"post-entry\">
  <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "slug" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slug", array()))), "html", null, true);
        echo "\">
    <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</h2>
  </a>
  <div class=\"post-info\">
    <span class=\"glyphicon glyphicon-folder-open\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "html", null, true);
        echo "</span>&nbsp;&nbsp;
    <span class=\"glyphicon glyphicon-time\"> ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d"), "html", null, true);
        echo " </span>&nbsp;&nbsp;
    <span class=\"glyphicon glyphicon-comment\"> ";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comments", array())), "html", null, true);
        echo " Comments</span>&nbsp;&nbsp;
  </div>
  <div class=\"post-content\">
    <p>
      ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "preText", array()), "html", null, true);
        echo "
    </p>
    <blockquote>
      ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "summary", array()), "html", null, true);
        echo "
    </blockquote>
    <p>
      Read complete article <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "link", array()), "html", null, true);
        echo "\" target=\"_blank\">here</a>
    </p>
    <div>
      ";
        // line 24
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "postText", array());
        echo "
    </div>
  </div>
  <hr>
  <h3>Post A Comment</h3>

  ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form_start');
        echo "
    <div class=\"form-group\">
      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), "name", array()), 'label');
        echo "
      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), "name", array()), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), "reference", array()), 'label');
        echo "
      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), "reference", array()), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
      ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), "message", array()), 'label');
        echo "
      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), "message", array()), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
      ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-sm custom-btn"), "label" => "COMMENT"));
        echo "
    </div>

  ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form_end');
        echo "
  ";
        // line 48
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comments", array())) > 0)) {
            // line 49
            echo "  <hr>
  <h3>Comments</h3>

  <div class=\"comment-area\">
    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comments", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 54
                echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div>
          <span class=\"glyphicon glyphicon-user\"></span>
          <strong>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
                echo "</strong>
          <span class=\"text-muted\"> commented on </span>
          ";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "Y-m-d"), "html", null, true);
                echo "
        </div>
        <div class=\"comment-message\">
          ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "message", array()), "html", null, true);
                echo "
        </div>
      </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "  </div>
  ";
        }
        // line 70
        echo "
  <ul class=\"record_actions\">
    <li>
      <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">
        Back to the list
      </a>
    </li>
    <li>
      <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
        Edit
      </a>
    </li>
    <li>";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
  </ul>
</div>
";
        
        $__internal_c2764a5a0b25918e2901f57e53ef09097bb1fd3a91c4252086112016e29ac9de->leave($__internal_c2764a5a0b25918e2901f57e53ef09097bb1fd3a91c4252086112016e29ac9de_prof);

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
        return array (  218 => 82,  211 => 78,  203 => 73,  198 => 70,  194 => 68,  183 => 63,  177 => 60,  172 => 58,  166 => 54,  162 => 53,  156 => 49,  154 => 48,  150 => 47,  144 => 44,  138 => 41,  134 => 40,  128 => 37,  124 => 36,  118 => 33,  114 => 32,  109 => 30,  100 => 24,  94 => 21,  88 => 18,  82 => 15,  75 => 11,  71 => 10,  67 => 9,  61 => 6,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}{{entity.title}} | OpenSourceFeed - Stories of Free/Open Source Technologies{% endblock %}*/
/* {% block content -%}*/
/* <div class="post-entry">*/
/*   <a href="{{ path('post_show', { 'id': entity.id, 'slug': entity.slug }) }}">*/
/*     <h2>{{entity.title}}</h2>*/
/*   </a>*/
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
/*   <hr>*/
/*   <h3>Post A Comment</h3>*/
/* */
/*   {{form_start(comment_form)}}*/
/*     <div class="form-group">*/
/*       {{form_label(comment_form.name)}}*/
/*       {{form_widget(comment_form.name)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*       {{form_label(comment_form.reference)}}*/
/*       {{form_widget(comment_form.reference)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*       {{form_label(comment_form.message)}}*/
/*       {{form_widget(comment_form.message)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*       {{form_widget(comment_form.submit, {attr: {'class': 'btn btn-primary btn-sm custom-btn'}, label: 'COMMENT'})}}*/
/*     </div>*/
/* */
/*   {{form_end(comment_form)}}*/
/*   {% if entity.comments | length > 0 %}*/
/*   <hr>*/
/*   <h3>Comments</h3>*/
/* */
/*   <div class="comment-area">*/
/*     {% for comment in entity.comments | reverse %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-body">*/
/*         <div>*/
/*           <span class="glyphicon glyphicon-user"></span>*/
/*           <strong>{{comment.name}}</strong>*/
/*           <span class="text-muted"> commented on </span>*/
/*           {{comment.date|date('Y-m-d') }}*/
/*         </div>*/
/*         <div class="comment-message">*/
/*           {{comment.message}}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/*   {% endif %}*/
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
