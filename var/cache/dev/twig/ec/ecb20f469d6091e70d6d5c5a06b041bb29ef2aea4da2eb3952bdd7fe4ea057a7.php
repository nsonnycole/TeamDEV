<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bb1e9c798b7bb1f841c8f39de04a74b71f853f0c788c2291fbcb53b187ac6993 extends Twig_Template
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
        $__internal_5425d7f3304181e8725faa133a135a18ef515a0b9576a31b168138b8247791fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5425d7f3304181e8725faa133a135a18ef515a0b9576a31b168138b8247791fd->enter($__internal_5425d7f3304181e8725faa133a135a18ef515a0b9576a31b168138b8247791fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_28cbd04bfe5030fd5b53e55b9a553279f1b05a7d73e4a6bd8959204d06b97f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cbd04bfe5030fd5b53e55b9a553279f1b05a7d73e4a6bd8959204d06b97f80->enter($__internal_28cbd04bfe5030fd5b53e55b9a553279f1b05a7d73e4a6bd8959204d06b97f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5425d7f3304181e8725faa133a135a18ef515a0b9576a31b168138b8247791fd->leave($__internal_5425d7f3304181e8725faa133a135a18ef515a0b9576a31b168138b8247791fd_prof);

        
        $__internal_28cbd04bfe5030fd5b53e55b9a553279f1b05a7d73e4a6bd8959204d06b97f80->leave($__internal_28cbd04bfe5030fd5b53e55b9a553279f1b05a7d73e4a6bd8959204d06b97f80_prof);

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
