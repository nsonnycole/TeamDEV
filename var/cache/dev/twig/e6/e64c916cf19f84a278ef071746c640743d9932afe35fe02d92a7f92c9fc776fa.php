<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_620b6218c5bf4f26054fb7ffd522b895eb7792de0db92ddc9b1d59bebe735d84 extends Twig_Template
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
        $__internal_78da6e1bccdfd150050ec10e0df0ba0de8c7e9114bf32337463b776f43ddec65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78da6e1bccdfd150050ec10e0df0ba0de8c7e9114bf32337463b776f43ddec65->enter($__internal_78da6e1bccdfd150050ec10e0df0ba0de8c7e9114bf32337463b776f43ddec65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_da52f93dc6501ddc8c1495661ebae9dafa6f72fa16fe4f0e9ee4e5865da888fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da52f93dc6501ddc8c1495661ebae9dafa6f72fa16fe4f0e9ee4e5865da888fd->enter($__internal_da52f93dc6501ddc8c1495661ebae9dafa6f72fa16fe4f0e9ee4e5865da888fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_78da6e1bccdfd150050ec10e0df0ba0de8c7e9114bf32337463b776f43ddec65->leave($__internal_78da6e1bccdfd150050ec10e0df0ba0de8c7e9114bf32337463b776f43ddec65_prof);

        
        $__internal_da52f93dc6501ddc8c1495661ebae9dafa6f72fa16fe4f0e9ee4e5865da888fd->leave($__internal_da52f93dc6501ddc8c1495661ebae9dafa6f72fa16fe4f0e9ee4e5865da888fd_prof);

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
