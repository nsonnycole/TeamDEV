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
        $__internal_268fa6388c69de35ef0114498a8d63a6ede689114ec832bec6ce3bedfb523b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268fa6388c69de35ef0114498a8d63a6ede689114ec832bec6ce3bedfb523b1b->enter($__internal_268fa6388c69de35ef0114498a8d63a6ede689114ec832bec6ce3bedfb523b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f981f9bf69592abba882c4c2c4cf13a383df4eac0c1ce3cd84d08edd9056b934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f981f9bf69592abba882c4c2c4cf13a383df4eac0c1ce3cd84d08edd9056b934->enter($__internal_f981f9bf69592abba882c4c2c4cf13a383df4eac0c1ce3cd84d08edd9056b934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268fa6388c69de35ef0114498a8d63a6ede689114ec832bec6ce3bedfb523b1b->leave($__internal_268fa6388c69de35ef0114498a8d63a6ede689114ec832bec6ce3bedfb523b1b_prof);

        
        $__internal_f981f9bf69592abba882c4c2c4cf13a383df4eac0c1ce3cd84d08edd9056b934->leave($__internal_f981f9bf69592abba882c4c2c4cf13a383df4eac0c1ce3cd84d08edd9056b934_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07f6cc74804bc0e7a31af2b49fdd0143bf386b848be16a1d98186557587b30cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f6cc74804bc0e7a31af2b49fdd0143bf386b848be16a1d98186557587b30cf->enter($__internal_07f6cc74804bc0e7a31af2b49fdd0143bf386b848be16a1d98186557587b30cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_154fa7c3f41fb2a4b5bd6e34df580744e128526c1fb24b231287623ecf940a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154fa7c3f41fb2a4b5bd6e34df580744e128526c1fb24b231287623ecf940a5d->enter($__internal_154fa7c3f41fb2a4b5bd6e34df580744e128526c1fb24b231287623ecf940a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_154fa7c3f41fb2a4b5bd6e34df580744e128526c1fb24b231287623ecf940a5d->leave($__internal_154fa7c3f41fb2a4b5bd6e34df580744e128526c1fb24b231287623ecf940a5d_prof);

        
        $__internal_07f6cc74804bc0e7a31af2b49fdd0143bf386b848be16a1d98186557587b30cf->leave($__internal_07f6cc74804bc0e7a31af2b49fdd0143bf386b848be16a1d98186557587b30cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_911cb66cbad5941c4ebc76862f3f12ac6a5663ac78e4a508c9e3f832d07c931f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911cb66cbad5941c4ebc76862f3f12ac6a5663ac78e4a508c9e3f832d07c931f->enter($__internal_911cb66cbad5941c4ebc76862f3f12ac6a5663ac78e4a508c9e3f832d07c931f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_61c6d5ff35a689ffa63de59476a38df0e432cc53e3073095edda5282f37aea6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c6d5ff35a689ffa63de59476a38df0e432cc53e3073095edda5282f37aea6b->enter($__internal_61c6d5ff35a689ffa63de59476a38df0e432cc53e3073095edda5282f37aea6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61c6d5ff35a689ffa63de59476a38df0e432cc53e3073095edda5282f37aea6b->leave($__internal_61c6d5ff35a689ffa63de59476a38df0e432cc53e3073095edda5282f37aea6b_prof);

        
        $__internal_911cb66cbad5941c4ebc76862f3f12ac6a5663ac78e4a508c9e3f832d07c931f->leave($__internal_911cb66cbad5941c4ebc76862f3f12ac6a5663ac78e4a508c9e3f832d07c931f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd29d9726237a171ccc3041a3a15a914097ef05616ea9e4ac2e97075f479795e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd29d9726237a171ccc3041a3a15a914097ef05616ea9e4ac2e97075f479795e->enter($__internal_fd29d9726237a171ccc3041a3a15a914097ef05616ea9e4ac2e97075f479795e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d809a8a6e8826b1c5af99a9244dc8dbd8b7f1bc97b1be15870c8e86ec163a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d809a8a6e8826b1c5af99a9244dc8dbd8b7f1bc97b1be15870c8e86ec163a36->enter($__internal_4d809a8a6e8826b1c5af99a9244dc8dbd8b7f1bc97b1be15870c8e86ec163a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4d809a8a6e8826b1c5af99a9244dc8dbd8b7f1bc97b1be15870c8e86ec163a36->leave($__internal_4d809a8a6e8826b1c5af99a9244dc8dbd8b7f1bc97b1be15870c8e86ec163a36_prof);

        
        $__internal_fd29d9726237a171ccc3041a3a15a914097ef05616ea9e4ac2e97075f479795e->leave($__internal_fd29d9726237a171ccc3041a3a15a914097ef05616ea9e4ac2e97075f479795e_prof);

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
