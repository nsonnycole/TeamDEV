<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_d370a36b68e33df639e9b2fe65d1b960f2d0a8380c98154c8e5d388c53d5a0df extends Twig_Template
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
        $__internal_9251df678d86e709cc6ef35ae0c5a612ad0372ff936587d69ef381c9d4bfa3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9251df678d86e709cc6ef35ae0c5a612ad0372ff936587d69ef381c9d4bfa3d1->enter($__internal_9251df678d86e709cc6ef35ae0c5a612ad0372ff936587d69ef381c9d4bfa3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_1fa562767f5b82c536270afbcabade9f673dba88613e251d1047d472282d1afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa562767f5b82c536270afbcabade9f673dba88613e251d1047d472282d1afc->enter($__internal_1fa562767f5b82c536270afbcabade9f673dba88613e251d1047d472282d1afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_9251df678d86e709cc6ef35ae0c5a612ad0372ff936587d69ef381c9d4bfa3d1->leave($__internal_9251df678d86e709cc6ef35ae0c5a612ad0372ff936587d69ef381c9d4bfa3d1_prof);

        
        $__internal_1fa562767f5b82c536270afbcabade9f673dba88613e251d1047d472282d1afc->leave($__internal_1fa562767f5b82c536270afbcabade9f673dba88613e251d1047d472282d1afc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_guid.html.twig");
    }
}
