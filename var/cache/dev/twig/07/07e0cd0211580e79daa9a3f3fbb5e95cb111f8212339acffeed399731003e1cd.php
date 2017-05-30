<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3be2048eedc56ffa44862edaa6324fb9c0d440f212a8caef551b56568ae97948 extends Twig_Template
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
        $__internal_4bca701a6023676c053cea1afb9fe103feb152bc7c82cbb7778289f7bfaec6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bca701a6023676c053cea1afb9fe103feb152bc7c82cbb7778289f7bfaec6ef->enter($__internal_4bca701a6023676c053cea1afb9fe103feb152bc7c82cbb7778289f7bfaec6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_eca3a13a57e65b8df23bd7fc8330c82a1d792782e17425d1b6976ac677b96581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca3a13a57e65b8df23bd7fc8330c82a1d792782e17425d1b6976ac677b96581->enter($__internal_eca3a13a57e65b8df23bd7fc8330c82a1d792782e17425d1b6976ac677b96581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4bca701a6023676c053cea1afb9fe103feb152bc7c82cbb7778289f7bfaec6ef->leave($__internal_4bca701a6023676c053cea1afb9fe103feb152bc7c82cbb7778289f7bfaec6ef_prof);

        
        $__internal_eca3a13a57e65b8df23bd7fc8330c82a1d792782e17425d1b6976ac677b96581->leave($__internal_eca3a13a57e65b8df23bd7fc8330c82a1d792782e17425d1b6976ac677b96581_prof);

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
