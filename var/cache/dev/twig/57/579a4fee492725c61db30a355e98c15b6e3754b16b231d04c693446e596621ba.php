<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d832041065f75cc5ea1bb013552e5119653b8379a6debfa24bbabf212482c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d832041065f75cc5ea1bb013552e5119653b8379a6debfa24bbabf212482c74->enter($__internal_5d832041065f75cc5ea1bb013552e5119653b8379a6debfa24bbabf212482c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2a47df3e03c64ea8fad05242d69dd2edc2deaa36e96cb54f51c746d070a5b5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a47df3e03c64ea8fad05242d69dd2edc2deaa36e96cb54f51c746d070a5b5a5->enter($__internal_2a47df3e03c64ea8fad05242d69dd2edc2deaa36e96cb54f51c746d070a5b5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d832041065f75cc5ea1bb013552e5119653b8379a6debfa24bbabf212482c74->leave($__internal_5d832041065f75cc5ea1bb013552e5119653b8379a6debfa24bbabf212482c74_prof);

        
        $__internal_2a47df3e03c64ea8fad05242d69dd2edc2deaa36e96cb54f51c746d070a5b5a5->leave($__internal_2a47df3e03c64ea8fad05242d69dd2edc2deaa36e96cb54f51c746d070a5b5a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c7329fca5d2dce021448128494fb73133d7c0009dfbb0809c3b22af8240885f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7329fca5d2dce021448128494fb73133d7c0009dfbb0809c3b22af8240885f->enter($__internal_6c7329fca5d2dce021448128494fb73133d7c0009dfbb0809c3b22af8240885f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5d0f65960ee49172ed5b6220f1a71aaed26180e9c3bc5143e62edfed63a250cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0f65960ee49172ed5b6220f1a71aaed26180e9c3bc5143e62edfed63a250cb->enter($__internal_5d0f65960ee49172ed5b6220f1a71aaed26180e9c3bc5143e62edfed63a250cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d0f65960ee49172ed5b6220f1a71aaed26180e9c3bc5143e62edfed63a250cb->leave($__internal_5d0f65960ee49172ed5b6220f1a71aaed26180e9c3bc5143e62edfed63a250cb_prof);

        
        $__internal_6c7329fca5d2dce021448128494fb73133d7c0009dfbb0809c3b22af8240885f->leave($__internal_6c7329fca5d2dce021448128494fb73133d7c0009dfbb0809c3b22af8240885f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2d0a8a5a54de909f4f378b7c395950d9add526376f13c4e238cc39d84adf71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d0a8a5a54de909f4f378b7c395950d9add526376f13c4e238cc39d84adf71f->enter($__internal_d2d0a8a5a54de909f4f378b7c395950d9add526376f13c4e238cc39d84adf71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2aa31dced9fb66e9baddbcfa1eb1ee40652bcbcd19e1aae62713f0890fcf6a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa31dced9fb66e9baddbcfa1eb1ee40652bcbcd19e1aae62713f0890fcf6a27->enter($__internal_2aa31dced9fb66e9baddbcfa1eb1ee40652bcbcd19e1aae62713f0890fcf6a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2aa31dced9fb66e9baddbcfa1eb1ee40652bcbcd19e1aae62713f0890fcf6a27->leave($__internal_2aa31dced9fb66e9baddbcfa1eb1ee40652bcbcd19e1aae62713f0890fcf6a27_prof);

        
        $__internal_d2d0a8a5a54de909f4f378b7c395950d9add526376f13c4e238cc39d84adf71f->leave($__internal_d2d0a8a5a54de909f4f378b7c395950d9add526376f13c4e238cc39d84adf71f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2c2ba688217737830e96d44e52a064a9ab951b449ccad339ea811267d41cc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c2ba688217737830e96d44e52a064a9ab951b449ccad339ea811267d41cc0d->enter($__internal_a2c2ba688217737830e96d44e52a064a9ab951b449ccad339ea811267d41cc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33577c0094664257a5e2901a8b881f8d64d856091ba360decd64b3a0bb7e08f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33577c0094664257a5e2901a8b881f8d64d856091ba360decd64b3a0bb7e08f8->enter($__internal_33577c0094664257a5e2901a8b881f8d64d856091ba360decd64b3a0bb7e08f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33577c0094664257a5e2901a8b881f8d64d856091ba360decd64b3a0bb7e08f8->leave($__internal_33577c0094664257a5e2901a8b881f8d64d856091ba360decd64b3a0bb7e08f8_prof);

        
        $__internal_a2c2ba688217737830e96d44e52a064a9ab951b449ccad339ea811267d41cc0d->leave($__internal_a2c2ba688217737830e96d44e52a064a9ab951b449ccad339ea811267d41cc0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
