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
        $__internal_1f563536ce4bf0cf8f8e9fbf66929eab0d95b8236523e6289eabcec865fdaa75 = $this->env->getExtension("native_profiler");
        $__internal_1f563536ce4bf0cf8f8e9fbf66929eab0d95b8236523e6289eabcec865fdaa75->enter($__internal_1f563536ce4bf0cf8f8e9fbf66929eab0d95b8236523e6289eabcec865fdaa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f563536ce4bf0cf8f8e9fbf66929eab0d95b8236523e6289eabcec865fdaa75->leave($__internal_1f563536ce4bf0cf8f8e9fbf66929eab0d95b8236523e6289eabcec865fdaa75_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee18fac24f0bb31d55cbba6fa504d9715e3c422355008f0b4d1fc76df8380a1f = $this->env->getExtension("native_profiler");
        $__internal_ee18fac24f0bb31d55cbba6fa504d9715e3c422355008f0b4d1fc76df8380a1f->enter($__internal_ee18fac24f0bb31d55cbba6fa504d9715e3c422355008f0b4d1fc76df8380a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo " | OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_ee18fac24f0bb31d55cbba6fa504d9715e3c422355008f0b4d1fc76df8380a1f->leave($__internal_ee18fac24f0bb31d55cbba6fa504d9715e3c422355008f0b4d1fc76df8380a1f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7170873dd311aacf051b4c504fcb3af69283de9e17034e3d8a4b2f3e293eeb8e = $this->env->getExtension("native_profiler");
        $__internal_7170873dd311aacf051b4c504fcb3af69283de9e17034e3d8a4b2f3e293eeb8e->enter($__internal_7170873dd311aacf051b4c504fcb3af69283de9e17034e3d8a4b2f3e293eeb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form');
        echo "
  ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comments", array())) > 0)) {
            // line 31
            echo "  <hr>
  <h3>Comments</h3>

  <div class=\"comment-area\">
    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comments", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 36
                echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div>
          <span class=\"glyphicon glyphicon-user\"></span>
          <strong>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
                echo "</strong>
          <span class=\"text-muted\"> commented on </span>
          ";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "Y-m-d"), "html", null, true);
                echo "
        </div>
        <div class=\"comment-message\">
          ";
                // line 45
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
            // line 50
            echo "  </div>
  ";
        }
        // line 52
        echo "
  <ul class=\"record_actions\">
    <li>
      <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">
        Back to the list
      </a>
    </li>
    <li>
      <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
        Edit
      </a>
    </li>
    <li>";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
  </ul>
</div>
";
        
        $__internal_7170873dd311aacf051b4c504fcb3af69283de9e17034e3d8a4b2f3e293eeb8e->leave($__internal_7170873dd311aacf051b4c504fcb3af69283de9e17034e3d8a4b2f3e293eeb8e_prof);

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
        return array (  176 => 64,  169 => 60,  161 => 55,  156 => 52,  152 => 50,  141 => 45,  135 => 42,  130 => 40,  124 => 36,  120 => 35,  114 => 31,  112 => 30,  108 => 29,  100 => 24,  94 => 21,  88 => 18,  82 => 15,  75 => 11,  71 => 10,  67 => 9,  61 => 6,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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
/*   {{form(comment_form)}}*/
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
