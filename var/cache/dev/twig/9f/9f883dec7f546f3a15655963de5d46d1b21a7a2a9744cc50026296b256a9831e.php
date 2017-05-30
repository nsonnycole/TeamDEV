<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a2962e0bc332439165087d82d424f9ab89a831a96d185b1da56608ada1667f7a extends Twig_Template
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
        $__internal_613b72949208a9488736b07dfaac56a4447e23eda3497096c6e425fe80b3e712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613b72949208a9488736b07dfaac56a4447e23eda3497096c6e425fe80b3e712->enter($__internal_613b72949208a9488736b07dfaac56a4447e23eda3497096c6e425fe80b3e712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b5a1b65f404b846b1b23f7ffa15ded45c899d6380b344a1d212fe06676eadb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a1b65f404b846b1b23f7ffa15ded45c899d6380b344a1d212fe06676eadb87->enter($__internal_b5a1b65f404b846b1b23f7ffa15ded45c899d6380b344a1d212fe06676eadb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_613b72949208a9488736b07dfaac56a4447e23eda3497096c6e425fe80b3e712->leave($__internal_613b72949208a9488736b07dfaac56a4447e23eda3497096c6e425fe80b3e712_prof);

        
        $__internal_b5a1b65f404b846b1b23f7ffa15ded45c899d6380b344a1d212fe06676eadb87->leave($__internal_b5a1b65f404b846b1b23f7ffa15ded45c899d6380b344a1d212fe06676eadb87_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
