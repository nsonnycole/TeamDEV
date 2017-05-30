<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_0d6167fe0d59da066c2d31abd434fdc74888814916494ba796fcc06520a4fb60 extends Twig_Template
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
        $__internal_007504d0477563d65f3324e36fd7d6621c3bd5b37ff0e121951459fe84bdad9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007504d0477563d65f3324e36fd7d6621c3bd5b37ff0e121951459fe84bdad9b->enter($__internal_007504d0477563d65f3324e36fd7d6621c3bd5b37ff0e121951459fe84bdad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_2d5d007db207537ef410cd13e76bce45c135a1d336d7f3b2671f74fa90157d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5d007db207537ef410cd13e76bce45c135a1d336d7f3b2671f74fa90157d11->enter($__internal_2d5d007db207537ef410cd13e76bce45c135a1d336d7f3b2671f74fa90157d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_007504d0477563d65f3324e36fd7d6621c3bd5b37ff0e121951459fe84bdad9b->leave($__internal_007504d0477563d65f3324e36fd7d6621c3bd5b37ff0e121951459fe84bdad9b_prof);

        
        $__internal_2d5d007db207537ef410cd13e76bce45c135a1d336d7f3b2671f74fa90157d11->leave($__internal_2d5d007db207537ef410cd13e76bce45c135a1d336d7f3b2671f74fa90157d11_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
