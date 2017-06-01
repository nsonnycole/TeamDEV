<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e75b4c18cbfa23972277e464913617c8d149699244fdf258b8166b5e6841292f extends Twig_Template
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
        $__internal_22c0a0ff9cb6960728977146c6e860f1c96c2b084fec55336e60d7571e178484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c0a0ff9cb6960728977146c6e860f1c96c2b084fec55336e60d7571e178484->enter($__internal_22c0a0ff9cb6960728977146c6e860f1c96c2b084fec55336e60d7571e178484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_95d6c1efeaa2aa45d3b7035be9150492429c058dc106bf3c352f35a5c08c9c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d6c1efeaa2aa45d3b7035be9150492429c058dc106bf3c352f35a5c08c9c61->enter($__internal_95d6c1efeaa2aa45d3b7035be9150492429c058dc106bf3c352f35a5c08c9c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_22c0a0ff9cb6960728977146c6e860f1c96c2b084fec55336e60d7571e178484->leave($__internal_22c0a0ff9cb6960728977146c6e860f1c96c2b084fec55336e60d7571e178484_prof);

        
        $__internal_95d6c1efeaa2aa45d3b7035be9150492429c058dc106bf3c352f35a5c08c9c61->leave($__internal_95d6c1efeaa2aa45d3b7035be9150492429c058dc106bf3c352f35a5c08c9c61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
