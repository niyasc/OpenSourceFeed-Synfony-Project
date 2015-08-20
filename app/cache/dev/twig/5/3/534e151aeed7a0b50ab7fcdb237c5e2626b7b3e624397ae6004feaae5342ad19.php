<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_534e151aeed7a0b50ab7fcdb237c5e2626b7b3e624397ae6004feaae5342ad19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a299b3408282f2106a2ff25596d02c44614bcb3e631e0628b1c8e4652e89a5 = $this->env->getExtension("native_profiler");
        $__internal_f6a299b3408282f2106a2ff25596d02c44614bcb3e631e0628b1c8e4652e89a5->enter($__internal_f6a299b3408282f2106a2ff25596d02c44614bcb3e631e0628b1c8e4652e89a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a299b3408282f2106a2ff25596d02c44614bcb3e631e0628b1c8e4652e89a5->leave($__internal_f6a299b3408282f2106a2ff25596d02c44614bcb3e631e0628b1c8e4652e89a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfe962bed723143c9aa8a0f6f9cbe5d56e6feb6a02a51a7cab0679cad12c82f5 = $this->env->getExtension("native_profiler");
        $__internal_bfe962bed723143c9aa8a0f6f9cbe5d56e6feb6a02a51a7cab0679cad12c82f5->enter($__internal_bfe962bed723143c9aa8a0f6f9cbe5d56e6feb6a02a51a7cab0679cad12c82f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure database";
        
        $__internal_bfe962bed723143c9aa8a0f6f9cbe5d56e6feb6a02a51a7cab0679cad12c82f5->leave($__internal_bfe962bed723143c9aa8a0f6f9cbe5d56e6feb6a02a51a7cab0679cad12c82f5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e2774342498dc6f8ac770ed61897557f88d6cd5c86defcbcbcec2978267dfe11 = $this->env->getExtension("native_profiler");
        $__internal_e2774342498dc6f8ac770ed61897557f88d6cd5c86defcbcbcec2978267dfe11->enter($__internal_e2774342498dc6f8ac770ed61897557f88d6cd5c86defcbcbcec2978267dfe11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 9)->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_template_get_attributes($this, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
        
        $__internal_e2774342498dc6f8ac770ed61897557f88d6cd5c86defcbcbcec2978267dfe11->leave($__internal_e2774342498dc6f8ac770ed61897557f88d6cd5c86defcbcbcec2978267dfe11_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
