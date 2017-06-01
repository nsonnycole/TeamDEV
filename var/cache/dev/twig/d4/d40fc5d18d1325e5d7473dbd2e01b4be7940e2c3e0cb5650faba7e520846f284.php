<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_3c0b3c3ec590cab234d6206050bb9a2c82a607c49eb8b6d7ed51f017754bb7d0 extends Twig_Template
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
        $__internal_5e7ce277e6b467027203f4690e44a9dab4dcaa07a99d543c48807cb67fd9049b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7ce277e6b467027203f4690e44a9dab4dcaa07a99d543c48807cb67fd9049b->enter($__internal_5e7ce277e6b467027203f4690e44a9dab4dcaa07a99d543c48807cb67fd9049b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_591baaeee4696260d6caa669c061c4524a9121c93276f1c5c978e62331836849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591baaeee4696260d6caa669c061c4524a9121c93276f1c5c978e62331836849->enter($__internal_591baaeee4696260d6caa669c061c4524a9121c93276f1c5c978e62331836849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_5e7ce277e6b467027203f4690e44a9dab4dcaa07a99d543c48807cb67fd9049b->leave($__internal_5e7ce277e6b467027203f4690e44a9dab4dcaa07a99d543c48807cb67fd9049b_prof);

        
        $__internal_591baaeee4696260d6caa669c061c4524a9121c93276f1c5c978e62331836849->leave($__internal_591baaeee4696260d6caa669c061c4524a9121c93276f1c5c978e62331836849_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
", "EasyAdminBundle:default:field_decimal.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_decimal.html.twig");
    }
}
