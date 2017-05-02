<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4da490eb272fc30f968f2d08669e0212fffa625097befe2a232221545427d02e extends Twig_Template
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
        $__internal_87f69ba65fa92ea4c56ec73397aea541bf1ba7eaf0d874b045b6a521789499a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f69ba65fa92ea4c56ec73397aea541bf1ba7eaf0d874b045b6a521789499a8->enter($__internal_87f69ba65fa92ea4c56ec73397aea541bf1ba7eaf0d874b045b6a521789499a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4f184f0bfd6d91e81aafc1ee81b85009e7f489d7cfeeb4eb01700db1292ec5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f184f0bfd6d91e81aafc1ee81b85009e7f489d7cfeeb4eb01700db1292ec5fa->enter($__internal_4f184f0bfd6d91e81aafc1ee81b85009e7f489d7cfeeb4eb01700db1292ec5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_87f69ba65fa92ea4c56ec73397aea541bf1ba7eaf0d874b045b6a521789499a8->leave($__internal_87f69ba65fa92ea4c56ec73397aea541bf1ba7eaf0d874b045b6a521789499a8_prof);

        
        $__internal_4f184f0bfd6d91e81aafc1ee81b85009e7f489d7cfeeb4eb01700db1292ec5fa->leave($__internal_4f184f0bfd6d91e81aafc1ee81b85009e7f489d7cfeeb4eb01700db1292ec5fa_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
