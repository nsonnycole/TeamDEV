<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a38873ee44f18913cb03b07e3d2f776da8568d991adc0a1a7fd706f67c172dc1 extends Twig_Template
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
        $__internal_621b2cbab44d497ca61d3ceda1b8a212f83775a5a1f0a542ab47a00d78e3883e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621b2cbab44d497ca61d3ceda1b8a212f83775a5a1f0a542ab47a00d78e3883e->enter($__internal_621b2cbab44d497ca61d3ceda1b8a212f83775a5a1f0a542ab47a00d78e3883e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_5a8465d3c0b90f0b4368153c2724863b5cb9da7076cd33c9f5d792d794d055d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8465d3c0b90f0b4368153c2724863b5cb9da7076cd33c9f5d792d794d055d9->enter($__internal_5a8465d3c0b90f0b4368153c2724863b5cb9da7076cd33c9f5d792d794d055d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_621b2cbab44d497ca61d3ceda1b8a212f83775a5a1f0a542ab47a00d78e3883e->leave($__internal_621b2cbab44d497ca61d3ceda1b8a212f83775a5a1f0a542ab47a00d78e3883e_prof);

        
        $__internal_5a8465d3c0b90f0b4368153c2724863b5cb9da7076cd33c9f5d792d794d055d9->leave($__internal_5a8465d3c0b90f0b4368153c2724863b5cb9da7076cd33c9f5d792d794d055d9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
