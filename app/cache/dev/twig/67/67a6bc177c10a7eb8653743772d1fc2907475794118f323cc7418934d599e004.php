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
        $__internal_5c95eda6335cadf0a49128ed136089bb157c9d026819485b8c6292b987bdd430 = $this->env->getExtension("native_profiler");
        $__internal_5c95eda6335cadf0a49128ed136089bb157c9d026819485b8c6292b987bdd430->enter($__internal_5c95eda6335cadf0a49128ed136089bb157c9d026819485b8c6292b987bdd430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c95eda6335cadf0a49128ed136089bb157c9d026819485b8c6292b987bdd430->leave($__internal_5c95eda6335cadf0a49128ed136089bb157c9d026819485b8c6292b987bdd430_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1751602222d6756ea67de7e8f03a0348cd68b8584ec7a5d1cb6671f90b8f86d3 = $this->env->getExtension("native_profiler");
        $__internal_1751602222d6756ea67de7e8f03a0348cd68b8584ec7a5d1cb6671f90b8f86d3->enter($__internal_1751602222d6756ea67de7e8f03a0348cd68b8584ec7a5d1cb6671f90b8f86d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo " | OpenSourceFeed - Stories of Free/Open Source Technologies";
        
        $__internal_1751602222d6756ea67de7e8f03a0348cd68b8584ec7a5d1cb6671f90b8f86d3->leave($__internal_1751602222d6756ea67de7e8f03a0348cd68b8584ec7a5d1cb6671f90b8f86d3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad46375587226782a481953f75366292642692bdc7ef4a1e399cdad746d3fbf1 = $this->env->getExtension("native_profiler");
        $__internal_ad46375587226782a481953f75366292642692bdc7ef4a1e399cdad746d3fbf1->enter($__internal_ad46375587226782a481953f75366292642692bdc7ef4a1e399cdad746d3fbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
  ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form_end');
        echo "
  ";
        // line 36
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comments", array())) > 0)) {
            // line 37
            echo "  <hr>
  <h3>Comments</h3>

  <div class=\"comment-area\">
    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comments", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 42
                echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div>
          <span class=\"glyphicon glyphicon-user\"></span>
          <strong>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
                echo "</strong>
          <span class=\"text-muted\"> commented on </span>
          ";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "Y-m-d"), "html", null, true);
                echo "
        </div>
        <div class=\"comment-message\">
          ";
                // line 51
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
            // line 56
            echo "  </div>
  ";
        }
        // line 58
        echo "
  <ul class=\"record_actions\">
    <li>
      <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">
        Back to the list
      </a>
    </li>
    <li>
      <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
        Edit
      </a>
    </li>
    <li>";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
  </ul>
</div>
";
        
        $__internal_ad46375587226782a481953f75366292642692bdc7ef4a1e399cdad746d3fbf1->leave($__internal_ad46375587226782a481953f75366292642692bdc7ef4a1e399cdad746d3fbf1_prof);

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
        return array (  191 => 70,  184 => 66,  176 => 61,  171 => 58,  167 => 56,  156 => 51,  150 => 48,  145 => 46,  139 => 42,  135 => 41,  129 => 37,  127 => 36,  123 => 35,  118 => 33,  114 => 32,  109 => 30,  100 => 24,  94 => 21,  88 => 18,  82 => 15,  75 => 11,  71 => 10,  67 => 9,  61 => 6,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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
