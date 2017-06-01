<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_671e51c1c5e84833f9c52820a779ae3c9d8b3e240c2798e00d6fa4ee55ff297c extends Twig_Template
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
        $__internal_2d2e5d1e7d93aec446e1ad8efa35e9f92ce8143b7779367e3a1ed7bb141939c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2e5d1e7d93aec446e1ad8efa35e9f92ce8143b7779367e3a1ed7bb141939c4->enter($__internal_2d2e5d1e7d93aec446e1ad8efa35e9f92ce8143b7779367e3a1ed7bb141939c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_dde08535a6234ac09f9f306bd59747dd1aa311d225d7f22c6501a59afe9af299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde08535a6234ac09f9f306bd59747dd1aa311d225d7f22c6501a59afe9af299->enter($__internal_dde08535a6234ac09f9f306bd59747dd1aa311d225d7f22c6501a59afe9af299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_2d2e5d1e7d93aec446e1ad8efa35e9f92ce8143b7779367e3a1ed7bb141939c4->leave($__internal_2d2e5d1e7d93aec446e1ad8efa35e9f92ce8143b7779367e3a1ed7bb141939c4_prof);

        
        $__internal_dde08535a6234ac09f9f306bd59747dd1aa311d225d7f22c6501a59afe9af299->leave($__internal_dde08535a6234ac09f9f306bd59747dd1aa311d225d7f22c6501a59afe9af299_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_float.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_float.html.twig");
    }
}
