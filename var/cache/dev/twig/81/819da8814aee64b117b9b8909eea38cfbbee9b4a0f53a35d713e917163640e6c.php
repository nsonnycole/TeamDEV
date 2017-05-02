<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bd2743da326049436bbf6b6a130424ef01126b915cc83ad66119b7cadd17ddab extends Twig_Template
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
        $__internal_70c8629fb119a8d4b1e6cb26b1f121a8657c20dc10a0376eb1db56cf63517984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c8629fb119a8d4b1e6cb26b1f121a8657c20dc10a0376eb1db56cf63517984->enter($__internal_70c8629fb119a8d4b1e6cb26b1f121a8657c20dc10a0376eb1db56cf63517984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5c0ea642c56b03ca8754186609e0544bb4c4d4ed790b0171d6f4beec3c13bb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0ea642c56b03ca8754186609e0544bb4c4d4ed790b0171d6f4beec3c13bb39->enter($__internal_5c0ea642c56b03ca8754186609e0544bb4c4d4ed790b0171d6f4beec3c13bb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_70c8629fb119a8d4b1e6cb26b1f121a8657c20dc10a0376eb1db56cf63517984->leave($__internal_70c8629fb119a8d4b1e6cb26b1f121a8657c20dc10a0376eb1db56cf63517984_prof);

        
        $__internal_5c0ea642c56b03ca8754186609e0544bb4c4d4ed790b0171d6f4beec3c13bb39->leave($__internal_5c0ea642c56b03ca8754186609e0544bb4c4d4ed790b0171d6f4beec3c13bb39_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
