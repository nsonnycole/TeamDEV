<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_110ee5e68f8d3820a80060cbab060122c872d8f135c4a758be951d7bd617d5de extends Twig_Template
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
        $__internal_e35057ceb5c9120ce144aa7944d9ef5e0acfd4b81056f97ad41d20adda7ec89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35057ceb5c9120ce144aa7944d9ef5e0acfd4b81056f97ad41d20adda7ec89e->enter($__internal_e35057ceb5c9120ce144aa7944d9ef5e0acfd4b81056f97ad41d20adda7ec89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_accd4f80fbeb8187a7c0d0da423d512b01019f1d1102de0d3ebff64dada67bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accd4f80fbeb8187a7c0d0da423d512b01019f1d1102de0d3ebff64dada67bec->enter($__internal_accd4f80fbeb8187a7c0d0da423d512b01019f1d1102de0d3ebff64dada67bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_e35057ceb5c9120ce144aa7944d9ef5e0acfd4b81056f97ad41d20adda7ec89e->leave($__internal_e35057ceb5c9120ce144aa7944d9ef5e0acfd4b81056f97ad41d20adda7ec89e_prof);

        
        $__internal_accd4f80fbeb8187a7c0d0da423d512b01019f1d1102de0d3ebff64dada67bec->leave($__internal_accd4f80fbeb8187a7c0d0da423d512b01019f1d1102de0d3ebff64dada67bec_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_boolean.html.twig");
    }
}
