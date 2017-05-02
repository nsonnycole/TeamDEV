<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ad1584a5b631674dbb181e842e2344fce9a0f723779c87dda28703c1124fa544 extends Twig_Template
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
        $__internal_40558639155dc7f137de55142535d9dfa2c6172b73882e9e19c48b8d072252df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40558639155dc7f137de55142535d9dfa2c6172b73882e9e19c48b8d072252df->enter($__internal_40558639155dc7f137de55142535d9dfa2c6172b73882e9e19c48b8d072252df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e634c0b10a1cb7ee25215a76c2332ad23a2dbdada07d01bdd4796478ba61ab5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e634c0b10a1cb7ee25215a76c2332ad23a2dbdada07d01bdd4796478ba61ab5a->enter($__internal_e634c0b10a1cb7ee25215a76c2332ad23a2dbdada07d01bdd4796478ba61ab5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_40558639155dc7f137de55142535d9dfa2c6172b73882e9e19c48b8d072252df->leave($__internal_40558639155dc7f137de55142535d9dfa2c6172b73882e9e19c48b8d072252df_prof);

        
        $__internal_e634c0b10a1cb7ee25215a76c2332ad23a2dbdada07d01bdd4796478ba61ab5a->leave($__internal_e634c0b10a1cb7ee25215a76c2332ad23a2dbdada07d01bdd4796478ba61ab5a_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
