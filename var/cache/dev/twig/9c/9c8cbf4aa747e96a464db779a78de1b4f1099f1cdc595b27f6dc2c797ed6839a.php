<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_5e242ee56e6f1f071fd0c8746d70d25f8f050ba74f12de3516b4fa29f61a2f9f extends Twig_Template
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
        $__internal_a0f93160ac14edcaf69d19cf52d9df043e497f8120303e963e13680d240b2625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f93160ac14edcaf69d19cf52d9df043e497f8120303e963e13680d240b2625->enter($__internal_a0f93160ac14edcaf69d19cf52d9df043e497f8120303e963e13680d240b2625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        $__internal_80fa6bdb627b8e9559cb80d510172434d25d4d016a443df9d803d73a66795133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fa6bdb627b8e9559cb80d510172434d25d4d016a443df9d803d73a66795133->enter($__internal_80fa6bdb627b8e9559cb80d510172434d25d4d016a443df9d803d73a66795133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

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
        
        $__internal_a0f93160ac14edcaf69d19cf52d9df043e497f8120303e963e13680d240b2625->leave($__internal_a0f93160ac14edcaf69d19cf52d9df043e497f8120303e963e13680d240b2625_prof);

        
        $__internal_80fa6bdb627b8e9559cb80d510172434d25d4d016a443df9d803d73a66795133->leave($__internal_80fa6bdb627b8e9559cb80d510172434d25d4d016a443df9d803d73a66795133_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
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
", "@EasyAdmin/default/field_integer.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_integer.html.twig");
    }
}
