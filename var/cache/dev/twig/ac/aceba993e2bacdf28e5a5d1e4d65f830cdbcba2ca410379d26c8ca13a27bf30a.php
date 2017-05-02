<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3c71606572b11f6a6194b0f1ab11c1902064ae5faae109579a24ba53e8a70d3d extends Twig_Template
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
        $__internal_30af4ad1e2cef41a36920f3fbc5be5e87bae8a4dcba863eeef728642245d9e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30af4ad1e2cef41a36920f3fbc5be5e87bae8a4dcba863eeef728642245d9e32->enter($__internal_30af4ad1e2cef41a36920f3fbc5be5e87bae8a4dcba863eeef728642245d9e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_df32a5ad05049fc8a3aecb1ccb2531fdddf810b105112446eb129f0edb8c982b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df32a5ad05049fc8a3aecb1ccb2531fdddf810b105112446eb129f0edb8c982b->enter($__internal_df32a5ad05049fc8a3aecb1ccb2531fdddf810b105112446eb129f0edb8c982b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_30af4ad1e2cef41a36920f3fbc5be5e87bae8a4dcba863eeef728642245d9e32->leave($__internal_30af4ad1e2cef41a36920f3fbc5be5e87bae8a4dcba863eeef728642245d9e32_prof);

        
        $__internal_df32a5ad05049fc8a3aecb1ccb2531fdddf810b105112446eb129f0edb8c982b->leave($__internal_df32a5ad05049fc8a3aecb1ccb2531fdddf810b105112446eb129f0edb8c982b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
