<?php

/* OpenSourceFeedBundle:Category:index.html.twig */
class __TwigTemplate_90db7e88dcb8621136ae6ffe175b83635f884911367abf484a1b93c9165f5b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OpenSourceFeedBundle::base.html.twig", "OpenSourceFeedBundle:Category:index.html.twig", 1);
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
        $__internal_0fe9ca2ce3149271bba51c9f455611ef40562e29ad07140bfdec84e85e70c0b3 = $this->env->getExtension("native_profiler");
        $__internal_0fe9ca2ce3149271bba51c9f455611ef40562e29ad07140bfdec84e85e70c0b3->enter($__internal_0fe9ca2ce3149271bba51c9f455611ef40562e29ad07140bfdec84e85e70c0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe9ca2ce3149271bba51c9f455611ef40562e29ad07140bfdec84e85e70c0b3->leave($__internal_0fe9ca2ce3149271bba51c9f455611ef40562e29ad07140bfdec84e85e70c0b3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0fe2147f347692dd1c302d7d6474b1fbc81f9074c2870815c633cb2099f9b1c6 = $this->env->getExtension("native_profiler");
        $__internal_0fe2147f347692dd1c302d7d6474b1fbc81f9074c2870815c633cb2099f9b1c6->enter($__internal_0fe2147f347692dd1c302d7d6474b1fbc81f9074c2870815c633cb2099f9b1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Category list</h1>

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("category_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_0fe2147f347692dd1c302d7d6474b1fbc81f9074c2870815c633cb2099f9b1c6->leave($__internal_0fe2147f347692dd1c302d7d6474b1fbc81f9074c2870815c633cb2099f9b1c6_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
