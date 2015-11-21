<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_83d504c3ac4c3ed641a98a4a02ed44f67c452a8220518616129e41699a41a0e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1f847dbb0296a7f0f23b4b696f369f424936d38f2fe14a6aa2466ed51d5f05d = $this->env->getExtension("native_profiler");
        $__internal_e1f847dbb0296a7f0f23b4b696f369f424936d38f2fe14a6aa2466ed51d5f05d->enter($__internal_e1f847dbb0296a7f0f23b4b696f369f424936d38f2fe14a6aa2466ed51d5f05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_e1f847dbb0296a7f0f23b4b696f369f424936d38f2fe14a6aa2466ed51d5f05d->leave($__internal_e1f847dbb0296a7f0f23b4b696f369f424936d38f2fe14a6aa2466ed51d5f05d_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <a{% for attr, value in options %} {{ attr }}="{{ value }}"{% endfor %}>{{ title }}</a>*/
/* */
