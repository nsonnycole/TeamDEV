<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_bb8a6a26c05a7e42e91fb06516f3afcbea4c4584ce38137eb7d7c139a4497e77 extends Twig_Template
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
        $__internal_1d4e8c31c27fdcb47751191fcae3f43d75e18ed8f6f0fcf7bdd930072c0acf0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4e8c31c27fdcb47751191fcae3f43d75e18ed8f6f0fcf7bdd930072c0acf0f->enter($__internal_1d4e8c31c27fdcb47751191fcae3f43d75e18ed8f6f0fcf7bdd930072c0acf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_fb4ac4e90d53e459840a7a2c07c86015d291a03e0d1ffbaa8a4ec071d330eb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4ac4e90d53e459840a7a2c07c86015d291a03e0d1ffbaa8a4ec071d330eb61->enter($__internal_fb4ac4e90d53e459840a7a2c07c86015d291a03e0d1ffbaa8a4ec071d330eb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_1d4e8c31c27fdcb47751191fcae3f43d75e18ed8f6f0fcf7bdd930072c0acf0f->leave($__internal_1d4e8c31c27fdcb47751191fcae3f43d75e18ed8f6f0fcf7bdd930072c0acf0f_prof);

        
        $__internal_fb4ac4e90d53e459840a7a2c07c86015d291a03e0d1ffbaa8a4ec071d330eb61->leave($__internal_fb4ac4e90d53e459840a7a2c07c86015d291a03e0d1ffbaa8a4ec071d330eb61_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_id.html.twig");
    }
}
