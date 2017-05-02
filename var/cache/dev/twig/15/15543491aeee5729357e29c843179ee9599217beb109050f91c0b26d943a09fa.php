<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_7f6b78f0296f71ca2a3739f43f2e15928503458cf3544f6cfa8e74e4beb2aa87 extends Twig_Template
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
        $__internal_a7a89c2b00e3ba3278e3916006dd01b47c50dce6b90c81225030ca7f7a6d1f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a89c2b00e3ba3278e3916006dd01b47c50dce6b90c81225030ca7f7a6d1f98->enter($__internal_a7a89c2b00e3ba3278e3916006dd01b47c50dce6b90c81225030ca7f7a6d1f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c915f2cdb93c80f3a54e03d3a3b4da3951ad750549bdf7f073d32d6a38a16246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c915f2cdb93c80f3a54e03d3a3b4da3951ad750549bdf7f073d32d6a38a16246->enter($__internal_c915f2cdb93c80f3a54e03d3a3b4da3951ad750549bdf7f073d32d6a38a16246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a7a89c2b00e3ba3278e3916006dd01b47c50dce6b90c81225030ca7f7a6d1f98->leave($__internal_a7a89c2b00e3ba3278e3916006dd01b47c50dce6b90c81225030ca7f7a6d1f98_prof);

        
        $__internal_c915f2cdb93c80f3a54e03d3a3b4da3951ad750549bdf7f073d32d6a38a16246->leave($__internal_c915f2cdb93c80f3a54e03d3a3b4da3951ad750549bdf7f073d32d6a38a16246_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
