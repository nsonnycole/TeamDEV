<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d9fad801b0ea5b69b472ccdc3c0890c596ab2e2553cec0a9378e1a9c00740e7e extends Twig_Template
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
        $__internal_b733a874e4780d7b2e13135e365db4303d062d8ba78466ec7b7ed61ed4d9cae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b733a874e4780d7b2e13135e365db4303d062d8ba78466ec7b7ed61ed4d9cae8->enter($__internal_b733a874e4780d7b2e13135e365db4303d062d8ba78466ec7b7ed61ed4d9cae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_de4a5cf8c960baea257112489ea551f7dde1a5a7583e038c70c897be0f5ae958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4a5cf8c960baea257112489ea551f7dde1a5a7583e038c70c897be0f5ae958->enter($__internal_de4a5cf8c960baea257112489ea551f7dde1a5a7583e038c70c897be0f5ae958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b733a874e4780d7b2e13135e365db4303d062d8ba78466ec7b7ed61ed4d9cae8->leave($__internal_b733a874e4780d7b2e13135e365db4303d062d8ba78466ec7b7ed61ed4d9cae8_prof);

        
        $__internal_de4a5cf8c960baea257112489ea551f7dde1a5a7583e038c70c897be0f5ae958->leave($__internal_de4a5cf8c960baea257112489ea551f7dde1a5a7583e038c70c897be0f5ae958_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
