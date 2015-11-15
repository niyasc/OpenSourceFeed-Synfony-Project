<?php

/* OpenSourceFeedBundle:Post:index.html.twig */
class __TwigTemplate_53127e3860a5dbf4aec7c6fbc1f3c6ec39b142196631923a40c75b5441f231eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Post:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ea8001516b4e13338c975a6208cb204e326526ff2877411d82d350c8264164c = $this->env->getExtension("native_profiler");
        $__internal_0ea8001516b4e13338c975a6208cb204e326526ff2877411d82d350c8264164c->enter($__internal_0ea8001516b4e13338c975a6208cb204e326526ff2877411d82d350c8264164c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ea8001516b4e13338c975a6208cb204e326526ff2877411d82d350c8264164c->leave($__internal_0ea8001516b4e13338c975a6208cb204e326526ff2877411d82d350c8264164c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c854df97d4857246450192bdfe0621861db0e83c8c5ac9dfda99b0ed31ca2c2 = $this->env->getExtension("native_profiler");
        $__internal_9c854df97d4857246450192bdfe0621861db0e83c8c5ac9dfda99b0ed31ca2c2->enter($__internal_9c854df97d4857246450192bdfe0621861db0e83c8c5ac9dfda99b0ed31ca2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Date</th>
                <th>Pretext</th>
                <th>Summary</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "slug" => $this->getAttribute($context["entity"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "preText", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "summary", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "link", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "slug" => $this->getAttribute($context["entity"], "slug", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_9c854df97d4857246450192bdfe0621861db0e83c8c5ac9dfda99b0ed31ca2c2->leave($__internal_9c854df97d4857246450192bdfe0621861db0e83c8c5ac9dfda99b0ed31ca2c2_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  88 => 26,  84 => 25,  80 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Post list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Date</th>*/
/*                 <th>Pretext</th>*/
/*                 <th>Summary</th>*/
/*                 <th>Link</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('post_show', { 'id': entity.id, 'slug': entity.slug }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.title }}</td>*/
/*                 <td>{% if entity.date %}{{ entity.date|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ entity.preText }}</td>*/
/*                 <td>{{ entity.summary }}</td>*/
/*                 <td>{{ entity.link }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('post_show', { 'id': entity.id, 'slug': entity.slug }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('post_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
