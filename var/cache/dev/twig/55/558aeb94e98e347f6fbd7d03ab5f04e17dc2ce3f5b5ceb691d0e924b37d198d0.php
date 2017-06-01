<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_e8ab849244f34a34eb2971d0bd48ba855c6994fa8a68dcfd87a19cf123e2e14f extends Twig_Template
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
        $__internal_6fef93bce67acc4fd86af57dbf7e20d57614c0b0a572b1d86df7cb9337b3fd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fef93bce67acc4fd86af57dbf7e20d57614c0b0a572b1d86df7cb9337b3fd66->enter($__internal_6fef93bce67acc4fd86af57dbf7e20d57614c0b0a572b1d86df7cb9337b3fd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_40a347a716a559eb7ab926d9364bace974dd0a2e64b20555e56d125268ab0269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a347a716a559eb7ab926d9364bace974dd0a2e64b20555e56d125268ab0269->enter($__internal_40a347a716a559eb7ab926d9364bace974dd0a2e64b20555e56d125268ab0269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_6fef93bce67acc4fd86af57dbf7e20d57614c0b0a572b1d86df7cb9337b3fd66->leave($__internal_6fef93bce67acc4fd86af57dbf7e20d57614c0b0a572b1d86df7cb9337b3fd66_prof);

        
        $__internal_40a347a716a559eb7ab926d9364bace974dd0a2e64b20555e56d125268ab0269->leave($__internal_40a347a716a559eb7ab926d9364bace974dd0a2e64b20555e56d125268ab0269_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
", "EasyAdminBundle:default:field_bigint.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_bigint.html.twig");
    }
}
