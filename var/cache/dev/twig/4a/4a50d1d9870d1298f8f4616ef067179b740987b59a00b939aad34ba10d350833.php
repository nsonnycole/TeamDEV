<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a69c70032d473e030389783e7b5f531ad1f3781ff5a20952913df65c50955237 extends Twig_Template
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
        $__internal_93233a43cf06dc69888225fc95bc16f3ef6dbcc87d642116bda135b0b8087deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93233a43cf06dc69888225fc95bc16f3ef6dbcc87d642116bda135b0b8087deb->enter($__internal_93233a43cf06dc69888225fc95bc16f3ef6dbcc87d642116bda135b0b8087deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_4bac88b25ad73ba8060be1d68005bfa200ad611d7607b10d6844689fc0889681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bac88b25ad73ba8060be1d68005bfa200ad611d7607b10d6844689fc0889681->enter($__internal_4bac88b25ad73ba8060be1d68005bfa200ad611d7607b10d6844689fc0889681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_93233a43cf06dc69888225fc95bc16f3ef6dbcc87d642116bda135b0b8087deb->leave($__internal_93233a43cf06dc69888225fc95bc16f3ef6dbcc87d642116bda135b0b8087deb_prof);

        
        $__internal_4bac88b25ad73ba8060be1d68005bfa200ad611d7607b10d6844689fc0889681->leave($__internal_4bac88b25ad73ba8060be1d68005bfa200ad611d7607b10d6844689fc0889681_prof);

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
