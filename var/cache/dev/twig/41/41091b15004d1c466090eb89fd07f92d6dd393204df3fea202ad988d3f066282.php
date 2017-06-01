<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f0813b11c01d456873822a9a07020a6a5797f456d0d886876796185a195ffed5 extends Twig_Template
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
        $__internal_bc637ae3dcc03dac2d3ea9b4149a2048b4e7a0d5b3946be86f7d73024a06a99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc637ae3dcc03dac2d3ea9b4149a2048b4e7a0d5b3946be86f7d73024a06a99e->enter($__internal_bc637ae3dcc03dac2d3ea9b4149a2048b4e7a0d5b3946be86f7d73024a06a99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5ad06108b03ff13996522f67142fdb4c037500f1ee9f2f196df7026b2d03cdc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad06108b03ff13996522f67142fdb4c037500f1ee9f2f196df7026b2d03cdc6->enter($__internal_5ad06108b03ff13996522f67142fdb4c037500f1ee9f2f196df7026b2d03cdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bc637ae3dcc03dac2d3ea9b4149a2048b4e7a0d5b3946be86f7d73024a06a99e->leave($__internal_bc637ae3dcc03dac2d3ea9b4149a2048b4e7a0d5b3946be86f7d73024a06a99e_prof);

        
        $__internal_5ad06108b03ff13996522f67142fdb4c037500f1ee9f2f196df7026b2d03cdc6->leave($__internal_5ad06108b03ff13996522f67142fdb4c037500f1ee9f2f196df7026b2d03cdc6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
