<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ca37be74686b22f27af5625228e2a92522e0cb259d2edd3132145c0802a38e39 extends Twig_Template
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
        $__internal_0138cf20b5fc0cabe1d9436fbca52600c8674b5a4f3f10076c967c9be233e822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0138cf20b5fc0cabe1d9436fbca52600c8674b5a4f3f10076c967c9be233e822->enter($__internal_0138cf20b5fc0cabe1d9436fbca52600c8674b5a4f3f10076c967c9be233e822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b073b6ba3c7f280e1f5b08329f6cd29b340342cfab05fdd676619381ff9f85c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b073b6ba3c7f280e1f5b08329f6cd29b340342cfab05fdd676619381ff9f85c8->enter($__internal_b073b6ba3c7f280e1f5b08329f6cd29b340342cfab05fdd676619381ff9f85c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0138cf20b5fc0cabe1d9436fbca52600c8674b5a4f3f10076c967c9be233e822->leave($__internal_0138cf20b5fc0cabe1d9436fbca52600c8674b5a4f3f10076c967c9be233e822_prof);

        
        $__internal_b073b6ba3c7f280e1f5b08329f6cd29b340342cfab05fdd676619381ff9f85c8->leave($__internal_b073b6ba3c7f280e1f5b08329f6cd29b340342cfab05fdd676619381ff9f85c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
