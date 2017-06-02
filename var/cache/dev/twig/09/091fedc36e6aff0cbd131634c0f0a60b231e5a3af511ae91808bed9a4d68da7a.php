<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f0c2bdac6998bc926dc204b24bfc895ac7987f428d4481e3de69170daa883edd extends Twig_Template
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
        $__internal_5a761d7d08d770baf20b81a4fd294bdd952ae02ba46a42d148bc40c5992d3332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a761d7d08d770baf20b81a4fd294bdd952ae02ba46a42d148bc40c5992d3332->enter($__internal_5a761d7d08d770baf20b81a4fd294bdd952ae02ba46a42d148bc40c5992d3332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f4590f98426c9cc1b5d48ed6a7d2743eb6ba1970f703ef3e55a649e1332e6c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4590f98426c9cc1b5d48ed6a7d2743eb6ba1970f703ef3e55a649e1332e6c6d->enter($__internal_f4590f98426c9cc1b5d48ed6a7d2743eb6ba1970f703ef3e55a649e1332e6c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_5a761d7d08d770baf20b81a4fd294bdd952ae02ba46a42d148bc40c5992d3332->leave($__internal_5a761d7d08d770baf20b81a4fd294bdd952ae02ba46a42d148bc40c5992d3332_prof);

        
        $__internal_f4590f98426c9cc1b5d48ed6a7d2743eb6ba1970f703ef3e55a649e1332e6c6d->leave($__internal_f4590f98426c9cc1b5d48ed6a7d2743eb6ba1970f703ef3e55a649e1332e6c6d_prof);

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
