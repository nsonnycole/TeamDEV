<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e8b005ed051d62a92b6f9bb39fd193cae43453ea64d54cdedfbc94867f84d8e1 extends Twig_Template
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
        $__internal_271b4fddc3f46be80cdf85b0ea80510173280a1d7fb566bd24d15e7011e119a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271b4fddc3f46be80cdf85b0ea80510173280a1d7fb566bd24d15e7011e119a7->enter($__internal_271b4fddc3f46be80cdf85b0ea80510173280a1d7fb566bd24d15e7011e119a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e3907b6194df9c08e22e6c2f6733f453fa327bb2dcbdfaa2c27707f94dba81e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3907b6194df9c08e22e6c2f6733f453fa327bb2dcbdfaa2c27707f94dba81e4->enter($__internal_e3907b6194df9c08e22e6c2f6733f453fa327bb2dcbdfaa2c27707f94dba81e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_271b4fddc3f46be80cdf85b0ea80510173280a1d7fb566bd24d15e7011e119a7->leave($__internal_271b4fddc3f46be80cdf85b0ea80510173280a1d7fb566bd24d15e7011e119a7_prof);

        
        $__internal_e3907b6194df9c08e22e6c2f6733f453fa327bb2dcbdfaa2c27707f94dba81e4->leave($__internal_e3907b6194df9c08e22e6c2f6733f453fa327bb2dcbdfaa2c27707f94dba81e4_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
