<?php

/* OpenSourceFeedBundle:Subcategory:index.html.twig */
class __TwigTemplate_f82472c4a11983e87ce148ba8796dc0ffde4b0021e5dde070a044bd66f5e7e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Subcategory:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OpenSourceFeedBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7e0dfe69d24558a653ac9a481b9d4d199154fe9ce64ea430bf82750cd7df3cb = $this->env->getExtension("native_profiler");
        $__internal_d7e0dfe69d24558a653ac9a481b9d4d199154fe9ce64ea430bf82750cd7df3cb->enter($__internal_d7e0dfe69d24558a653ac9a481b9d4d199154fe9ce64ea430bf82750cd7df3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Subcategory:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7e0dfe69d24558a653ac9a481b9d4d199154fe9ce64ea430bf82750cd7df3cb->leave($__internal_d7e0dfe69d24558a653ac9a481b9d4d199154fe9ce64ea430bf82750cd7df3cb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_abc96b0fe7326f94cb0aee77d5a1a1e460236b59b275c833887ff25e28080674 = $this->env->getExtension("native_profiler");
        $__internal_abc96b0fe7326f94cb0aee77d5a1a1e460236b59b275c833887ff25e28080674->enter($__internal_abc96b0fe7326f94cb0aee77d5a1a1e460236b59b275c833887ff25e28080674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory_show", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory_show", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subcategory_edit", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
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
        // line 31
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("subcategory_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_abc96b0fe7326f94cb0aee77d5a1a1e460236b59b275c833887ff25e28080674->leave($__internal_abc96b0fe7326f94cb0aee77d5a1a1e460236b59b275c833887ff25e28080674_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Subcategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  93 => 31,  81 => 25,  75 => 22,  68 => 18,  62 => 17,  59 => 16,  55 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
