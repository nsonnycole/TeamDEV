<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_752e12580389359ab288c3bb01409f640b2cac8e94969eb74320146c7cece9ea extends Twig_Template
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
        $__internal_e583d02196df65b62b24f39d3de2aef28cd705a0e311795486e1ce61cc911b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e583d02196df65b62b24f39d3de2aef28cd705a0e311795486e1ce61cc911b9d->enter($__internal_e583d02196df65b62b24f39d3de2aef28cd705a0e311795486e1ce61cc911b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_007a3ebb6647c60df815fba348c13a835b548d9170c35a2317e99091adaf9be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007a3ebb6647c60df815fba348c13a835b548d9170c35a2317e99091adaf9be8->enter($__internal_007a3ebb6647c60df815fba348c13a835b548d9170c35a2317e99091adaf9be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

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
        
        $__internal_e583d02196df65b62b24f39d3de2aef28cd705a0e311795486e1ce61cc911b9d->leave($__internal_e583d02196df65b62b24f39d3de2aef28cd705a0e311795486e1ce61cc911b9d_prof);

        
        $__internal_007a3ebb6647c60df815fba348c13a835b548d9170c35a2317e99091adaf9be8->leave($__internal_007a3ebb6647c60df815fba348c13a835b548d9170c35a2317e99091adaf9be8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
", "EasyAdminBundle:default:field_integer.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_integer.html.twig");
    }
}
