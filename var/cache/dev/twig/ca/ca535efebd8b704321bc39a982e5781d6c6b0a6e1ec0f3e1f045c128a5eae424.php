<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a9bd7ad7ff1517b4e5f81cf6e5b6ad55508da5872776a6b725c16535f4045dd2 extends Twig_Template
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
        $__internal_af9477549a9bb3b864126102a9dcd719c7efe965363d89c4ef9870fd0e12c619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9477549a9bb3b864126102a9dcd719c7efe965363d89c4ef9870fd0e12c619->enter($__internal_af9477549a9bb3b864126102a9dcd719c7efe965363d89c4ef9870fd0e12c619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f7aa0a5ecc5ec49e967df50c0760e4466d98bf3beb9dd0854db80816d0942af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7aa0a5ecc5ec49e967df50c0760e4466d98bf3beb9dd0854db80816d0942af0->enter($__internal_f7aa0a5ecc5ec49e967df50c0760e4466d98bf3beb9dd0854db80816d0942af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_af9477549a9bb3b864126102a9dcd719c7efe965363d89c4ef9870fd0e12c619->leave($__internal_af9477549a9bb3b864126102a9dcd719c7efe965363d89c4ef9870fd0e12c619_prof);

        
        $__internal_f7aa0a5ecc5ec49e967df50c0760e4466d98bf3beb9dd0854db80816d0942af0->leave($__internal_f7aa0a5ecc5ec49e967df50c0760e4466d98bf3beb9dd0854db80816d0942af0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
