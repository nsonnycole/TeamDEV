<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5f9234c056ab01a0a72b269cd7486163c8e3c79a4365a47d687f3143f641bc21 extends Twig_Template
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
        $__internal_e9b905b7af8f5ba8e12bc4f7e933afe97023a2b52a92a4648a9cff865eef1ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b905b7af8f5ba8e12bc4f7e933afe97023a2b52a92a4648a9cff865eef1ec1->enter($__internal_e9b905b7af8f5ba8e12bc4f7e933afe97023a2b52a92a4648a9cff865eef1ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_39cd8e5fe06bb98c66c672c33e80ddcfa0cd57ec759c708f414b95fa02963d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cd8e5fe06bb98c66c672c33e80ddcfa0cd57ec759c708f414b95fa02963d3f->enter($__internal_39cd8e5fe06bb98c66c672c33e80ddcfa0cd57ec759c708f414b95fa02963d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b905b7af8f5ba8e12bc4f7e933afe97023a2b52a92a4648a9cff865eef1ec1->leave($__internal_e9b905b7af8f5ba8e12bc4f7e933afe97023a2b52a92a4648a9cff865eef1ec1_prof);

        
        $__internal_39cd8e5fe06bb98c66c672c33e80ddcfa0cd57ec759c708f414b95fa02963d3f->leave($__internal_39cd8e5fe06bb98c66c672c33e80ddcfa0cd57ec759c708f414b95fa02963d3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d0c0671625b2101c586f3bbf597c94638a3190c1f1e4e511ed4ca90f8854ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0c0671625b2101c586f3bbf597c94638a3190c1f1e4e511ed4ca90f8854ea2->enter($__internal_1d0c0671625b2101c586f3bbf597c94638a3190c1f1e4e511ed4ca90f8854ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55d7289af954ac4183cc5a9dc0641a5cd3b8c7e408e749832101e16e53e6453f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d7289af954ac4183cc5a9dc0641a5cd3b8c7e408e749832101e16e53e6453f->enter($__internal_55d7289af954ac4183cc5a9dc0641a5cd3b8c7e408e749832101e16e53e6453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55d7289af954ac4183cc5a9dc0641a5cd3b8c7e408e749832101e16e53e6453f->leave($__internal_55d7289af954ac4183cc5a9dc0641a5cd3b8c7e408e749832101e16e53e6453f_prof);

        
        $__internal_1d0c0671625b2101c586f3bbf597c94638a3190c1f1e4e511ed4ca90f8854ea2->leave($__internal_1d0c0671625b2101c586f3bbf597c94638a3190c1f1e4e511ed4ca90f8854ea2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae0a74056ef605af99dc5c3bb8d399930f79a1cd33fee1976ace3069e92048b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0a74056ef605af99dc5c3bb8d399930f79a1cd33fee1976ace3069e92048b9->enter($__internal_ae0a74056ef605af99dc5c3bb8d399930f79a1cd33fee1976ace3069e92048b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60054b6ce278d62471c1ac767c8b3de341bc1f0968585d349549e40c081dd349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60054b6ce278d62471c1ac767c8b3de341bc1f0968585d349549e40c081dd349->enter($__internal_60054b6ce278d62471c1ac767c8b3de341bc1f0968585d349549e40c081dd349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60054b6ce278d62471c1ac767c8b3de341bc1f0968585d349549e40c081dd349->leave($__internal_60054b6ce278d62471c1ac767c8b3de341bc1f0968585d349549e40c081dd349_prof);

        
        $__internal_ae0a74056ef605af99dc5c3bb8d399930f79a1cd33fee1976ace3069e92048b9->leave($__internal_ae0a74056ef605af99dc5c3bb8d399930f79a1cd33fee1976ace3069e92048b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba3be516249189265154a552e637f2f3d838b7c0c38e44b270e4151eb6f48369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3be516249189265154a552e637f2f3d838b7c0c38e44b270e4151eb6f48369->enter($__internal_ba3be516249189265154a552e637f2f3d838b7c0c38e44b270e4151eb6f48369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b3a1d00f7902572528122768f9743cf275afa88760ccb0da8518785f8a6d4d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a1d00f7902572528122768f9743cf275afa88760ccb0da8518785f8a6d4d3f->enter($__internal_b3a1d00f7902572528122768f9743cf275afa88760ccb0da8518785f8a6d4d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3a1d00f7902572528122768f9743cf275afa88760ccb0da8518785f8a6d4d3f->leave($__internal_b3a1d00f7902572528122768f9743cf275afa88760ccb0da8518785f8a6d4d3f_prof);

        
        $__internal_ba3be516249189265154a552e637f2f3d838b7c0c38e44b270e4151eb6f48369->leave($__internal_ba3be516249189265154a552e637f2f3d838b7c0c38e44b270e4151eb6f48369_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
