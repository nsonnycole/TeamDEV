<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_e136c913d009c4648cf8a3e058fd6c9dfad241541092eb74ac1f8e271be90b8c extends Twig_Template
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
        $__internal_b53f7814f19a668c6f6b4148758556b670be8c052704ae9af3bcbe9e749e397e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53f7814f19a668c6f6b4148758556b670be8c052704ae9af3bcbe9e749e397e->enter($__internal_b53f7814f19a668c6f6b4148758556b670be8c052704ae9af3bcbe9e749e397e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_7564eb719fcf8fc8c01ad823023f10ca1152229187a17eebef825c4111d98561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7564eb719fcf8fc8c01ad823023f10ca1152229187a17eebef825c4111d98561->enter($__internal_7564eb719fcf8fc8c01ad823023f10ca1152229187a17eebef825c4111d98561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_b53f7814f19a668c6f6b4148758556b670be8c052704ae9af3bcbe9e749e397e->leave($__internal_b53f7814f19a668c6f6b4148758556b670be8c052704ae9af3bcbe9e749e397e_prof);

        
        $__internal_7564eb719fcf8fc8c01ad823023f10ca1152229187a17eebef825c4111d98561->leave($__internal_7564eb719fcf8fc8c01ad823023f10ca1152229187a17eebef825c4111d98561_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_smallint.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_smallint.html.twig");
    }
}
