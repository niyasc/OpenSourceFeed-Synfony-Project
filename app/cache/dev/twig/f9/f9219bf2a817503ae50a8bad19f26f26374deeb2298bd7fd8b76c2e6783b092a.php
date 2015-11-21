<?php

/* OpenSourceFeedBundle:Comment:index.html.twig */
class __TwigTemplate_738a9e20d32d817968f7befc133b9c4851ce5191ec9a2cd2008f0913b43b264f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Comment:index.html.twig", 1);
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
        $__internal_fa764e129e6ea7d05b07766cb80bfa94f214ddf84df91cd07267ee2c0cd0c8e8 = $this->env->getExtension("native_profiler");
        $__internal_fa764e129e6ea7d05b07766cb80bfa94f214ddf84df91cd07267ee2c0cd0c8e8->enter($__internal_fa764e129e6ea7d05b07766cb80bfa94f214ddf84df91cd07267ee2c0cd0c8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Comment:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa764e129e6ea7d05b07766cb80bfa94f214ddf84df91cd07267ee2c0cd0c8e8->leave($__internal_fa764e129e6ea7d05b07766cb80bfa94f214ddf84df91cd07267ee2c0cd0c8e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_128e1d3d67c7a4fd58fedc7ce8fed2c1433a7b4002bcf044919594bfeb86f102 = $this->env->getExtension("native_profiler");
        $__internal_128e1d3d67c7a4fd58fedc7ce8fed2c1433a7b4002bcf044919594bfeb86f102->enter($__internal_128e1d3d67c7a4fd58fedc7ce8fed2c1433a7b4002bcf044919594bfeb86f102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Comment list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Reference</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "message", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("comment_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_128e1d3d67c7a4fd58fedc7ce8fed2c1433a7b4002bcf044919594bfeb86f102->leave($__internal_128e1d3d67c7a4fd58fedc7ce8fed2c1433a7b4002bcf044919594bfeb86f102_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Comment list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Reference</th>*/
/*                 <th>Message</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('comment_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.name }}</td>*/
/*                 <td>{{ entity.reference }}</td>*/
/*                 <td>{{ entity.message }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('comment_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('comment_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('comment_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
