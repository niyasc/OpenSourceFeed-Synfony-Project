<?php

/* OpenSourceFeedBundle:NewsLetter:index.html.twig */
class __TwigTemplate_840d6f2ad702b7dec4b2196f3db3f824b3a1fc514639357b5222b96b83a089ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:NewsLetter:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_897ec3f1351aaa0e57cc4213d9f47c613fea94a690c89a6c7a6e2e1779e13e06 = $this->env->getExtension("native_profiler");
        $__internal_897ec3f1351aaa0e57cc4213d9f47c613fea94a690c89a6c7a6e2e1779e13e06->enter($__internal_897ec3f1351aaa0e57cc4213d9f47c613fea94a690c89a6c7a6e2e1779e13e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:NewsLetter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897ec3f1351aaa0e57cc4213d9f47c613fea94a690c89a6c7a6e2e1779e13e06->leave($__internal_897ec3f1351aaa0e57cc4213d9f47c613fea94a690c89a6c7a6e2e1779e13e06_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e5feb89ca5049aac58329c103984a6047528593299ffc52242115bfd7e34834 = $this->env->getExtension("native_profiler");
        $__internal_8e5feb89ca5049aac58329c103984a6047528593299ffc52242115bfd7e34834->enter($__internal_8e5feb89ca5049aac58329c103984a6047528593299ffc52242115bfd7e34834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>NewsLetter list</h2>
<ul>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "<li>
  <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
  </a>
</li>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>


<ul>
  <li>
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("newsletter_new");
        echo "\">
      Create a new entry
    </a>
  </li>
</ul>
";
        
        $__internal_8e5feb89ca5049aac58329c103984a6047528593299ffc52242115bfd7e34834->leave($__internal_8e5feb89ca5049aac58329c103984a6047528593299ffc52242115bfd7e34834_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:NewsLetter:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  69 => 15,  55 => 9,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <h2>NewsLetter list</h2>*/
/* <ul>*/
/* {% for entity in entities %}*/
/* <li>*/
/*   <a href="{{entity.link}}" target="_blank">*/
/*     {{entity.name}} <a href="{{ path('newsletter_edit', { 'id': entity.id }) }}">edit</a>*/
/*   </a>*/
/* </li>*/
/* */
/* */
/* {% endfor %}*/
/* </ul>*/
/* */
/* */
/* <ul>*/
/*   <li>*/
/*     <a href="{{ path('newsletter_new') }}">*/
/*       Create a new entry*/
/*     </a>*/
/*   </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
