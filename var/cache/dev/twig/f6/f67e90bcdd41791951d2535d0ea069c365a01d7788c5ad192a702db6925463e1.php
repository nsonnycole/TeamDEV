<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1c4122c91df9e1e57064f2fbaf9eb0a2cb645b74d003b6a471498370b1a7b48f extends Twig_Template
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
        $__internal_2001208e06fa3ecbbe98c4a75bac7fe43ba29cc7814f851c6111e0b77431d5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2001208e06fa3ecbbe98c4a75bac7fe43ba29cc7814f851c6111e0b77431d5f0->enter($__internal_2001208e06fa3ecbbe98c4a75bac7fe43ba29cc7814f851c6111e0b77431d5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_aa6aea0c68da864ea3626aa741d090c893322e85c459de1ad4052ecf4ecfd6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6aea0c68da864ea3626aa741d090c893322e85c459de1ad4052ecf4ecfd6f7->enter($__internal_aa6aea0c68da864ea3626aa741d090c893322e85c459de1ad4052ecf4ecfd6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2001208e06fa3ecbbe98c4a75bac7fe43ba29cc7814f851c6111e0b77431d5f0->leave($__internal_2001208e06fa3ecbbe98c4a75bac7fe43ba29cc7814f851c6111e0b77431d5f0_prof);

        
        $__internal_aa6aea0c68da864ea3626aa741d090c893322e85c459de1ad4052ecf4ecfd6f7->leave($__internal_aa6aea0c68da864ea3626aa741d090c893322e85c459de1ad4052ecf4ecfd6f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
