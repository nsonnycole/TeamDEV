<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f31da4d5959b0ef1b5c3d65376487c4bacf754bf29250c384161a9896df59f97 extends Twig_Template
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
        $__internal_96b40689f6117b92461bfa154475a276bfa178e1b35e110094ebf72770b2bd33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b40689f6117b92461bfa154475a276bfa178e1b35e110094ebf72770b2bd33->enter($__internal_96b40689f6117b92461bfa154475a276bfa178e1b35e110094ebf72770b2bd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_dee7f008ae5847a2d5bd00c49404af4e53d4f9242267b79772c7da14982db7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee7f008ae5847a2d5bd00c49404af4e53d4f9242267b79772c7da14982db7a9->enter($__internal_dee7f008ae5847a2d5bd00c49404af4e53d4f9242267b79772c7da14982db7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_96b40689f6117b92461bfa154475a276bfa178e1b35e110094ebf72770b2bd33->leave($__internal_96b40689f6117b92461bfa154475a276bfa178e1b35e110094ebf72770b2bd33_prof);

        
        $__internal_dee7f008ae5847a2d5bd00c49404af4e53d4f9242267b79772c7da14982db7a9->leave($__internal_dee7f008ae5847a2d5bd00c49404af4e53d4f9242267b79772c7da14982db7a9_prof);

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
", "@Twig/Exception/traces.txt.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
