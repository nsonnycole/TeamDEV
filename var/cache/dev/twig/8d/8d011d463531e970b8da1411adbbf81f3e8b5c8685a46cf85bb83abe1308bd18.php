<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_e07486e0c50b06f2dbb534994c5499b5f34a1ec0a6708809b603562fb99a8dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_190c9c54ea97bd0b07c9d13989b5bd28d640b8432113f9b9d9258efb903f468e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190c9c54ea97bd0b07c9d13989b5bd28d640b8432113f9b9d9258efb903f468e->enter($__internal_190c9c54ea97bd0b07c9d13989b5bd28d640b8432113f9b9d9258efb903f468e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_8c57ef0b107b8bf6e844c11b794a0966df78dca0f2986809172f8aa5b4d19771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c57ef0b107b8bf6e844c11b794a0966df78dca0f2986809172f8aa5b4d19771->enter($__internal_8c57ef0b107b8bf6e844c11b794a0966df78dca0f2986809172f8aa5b4d19771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_190c9c54ea97bd0b07c9d13989b5bd28d640b8432113f9b9d9258efb903f468e->leave($__internal_190c9c54ea97bd0b07c9d13989b5bd28d640b8432113f9b9d9258efb903f468e_prof);

        
        $__internal_8c57ef0b107b8bf6e844c11b794a0966df78dca0f2986809172f8aa5b4d19771->leave($__internal_8c57ef0b107b8bf6e844c11b794a0966df78dca0f2986809172f8aa5b4d19771_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a0db00defe84a3d2d90bf55fbc93412a9612ad489bcd39c5c58de923ccf50d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0db00defe84a3d2d90bf55fbc93412a9612ad489bcd39c5c58de923ccf50d8->enter($__internal_3a0db00defe84a3d2d90bf55fbc93412a9612ad489bcd39c5c58de923ccf50d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2296ea483d30cef434a2829dd74bad9ec95f3fa4e3e27a8ee343b8dcdc56c996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2296ea483d30cef434a2829dd74bad9ec95f3fa4e3e27a8ee343b8dcdc56c996->enter($__internal_2296ea483d30cef434a2829dd74bad9ec95f3fa4e3e27a8ee343b8dcdc56c996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_2296ea483d30cef434a2829dd74bad9ec95f3fa4e3e27a8ee343b8dcdc56c996->leave($__internal_2296ea483d30cef434a2829dd74bad9ec95f3fa4e3e27a8ee343b8dcdc56c996_prof);

        
        $__internal_3a0db00defe84a3d2d90bf55fbc93412a9612ad489bcd39c5c58de923ccf50d8->leave($__internal_3a0db00defe84a3d2d90bf55fbc93412a9612ad489bcd39c5c58de923ccf50d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
