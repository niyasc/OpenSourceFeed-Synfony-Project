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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df657cdb7a337d4a6f9617c750b0a6fdda6f97f4e31f36620c3b110f2882e27e = $this->env->getExtension("native_profiler");
        $__internal_df657cdb7a337d4a6f9617c750b0a6fdda6f97f4e31f36620c3b110f2882e27e->enter($__internal_df657cdb7a337d4a6f9617c750b0a6fdda6f97f4e31f36620c3b110f2882e27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df657cdb7a337d4a6f9617c750b0a6fdda6f97f4e31f36620c3b110f2882e27e->leave($__internal_df657cdb7a337d4a6f9617c750b0a6fdda6f97f4e31f36620c3b110f2882e27e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6ee5669ca9e52f09891364317b57559e3de40ada7ac8f16d86d8b508fa24137 = $this->env->getExtension("native_profiler");
        $__internal_e6ee5669ca9e52f09891364317b57559e3de40ada7ac8f16d86d8b508fa24137->enter($__internal_e6ee5669ca9e52f09891364317b57559e3de40ada7ac8f16d86d8b508fa24137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>NewsLetter</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "link", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_e6ee5669ca9e52f09891364317b57559e3de40ada7ac8f16d86d8b508fa24137->leave($__internal_e6ee5669ca9e52f09891364317b57559e3de40ada7ac8f16d86d8b508fa24137_prof);

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
        return array (  87 => 34,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>NewsLetter</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ entity.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Link</th>*/
/*                 <td>{{ entity.link }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('newsletter') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('newsletter_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
