<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_48054fe69c41ba27c0b43fa21c4cb463b6e890a9d859349ac4cff881c033f7b6 extends Twig_Template
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
        $__internal_84229b9c4e6f49b2bb12e5cf6e83632fe567d2d0eda5997812239cfce50f62b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84229b9c4e6f49b2bb12e5cf6e83632fe567d2d0eda5997812239cfce50f62b5->enter($__internal_84229b9c4e6f49b2bb12e5cf6e83632fe567d2d0eda5997812239cfce50f62b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_437ce307bf60f4d1da136b9be94957fefc3d889a35525ab440e53c09ca3b4d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437ce307bf60f4d1da136b9be94957fefc3d889a35525ab440e53c09ca3b4d4d->enter($__internal_437ce307bf60f4d1da136b9be94957fefc3d889a35525ab440e53c09ca3b4d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84229b9c4e6f49b2bb12e5cf6e83632fe567d2d0eda5997812239cfce50f62b5->leave($__internal_84229b9c4e6f49b2bb12e5cf6e83632fe567d2d0eda5997812239cfce50f62b5_prof);

        
        $__internal_437ce307bf60f4d1da136b9be94957fefc3d889a35525ab440e53c09ca3b4d4d->leave($__internal_437ce307bf60f4d1da136b9be94957fefc3d889a35525ab440e53c09ca3b4d4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04fdb407e52edac912877e5e15b9be27538449a7bb6ac68786785a3d999d2434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04fdb407e52edac912877e5e15b9be27538449a7bb6ac68786785a3d999d2434->enter($__internal_04fdb407e52edac912877e5e15b9be27538449a7bb6ac68786785a3d999d2434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_424ad11d6ed291c1696b1b2bc9a0dbf23182616ac09fb987a56161830915aecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424ad11d6ed291c1696b1b2bc9a0dbf23182616ac09fb987a56161830915aecd->enter($__internal_424ad11d6ed291c1696b1b2bc9a0dbf23182616ac09fb987a56161830915aecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_424ad11d6ed291c1696b1b2bc9a0dbf23182616ac09fb987a56161830915aecd->leave($__internal_424ad11d6ed291c1696b1b2bc9a0dbf23182616ac09fb987a56161830915aecd_prof);

        
        $__internal_04fdb407e52edac912877e5e15b9be27538449a7bb6ac68786785a3d999d2434->leave($__internal_04fdb407e52edac912877e5e15b9be27538449a7bb6ac68786785a3d999d2434_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e369b6ba207ccfb876101c36f7c3fbdc7dd007908e70cfe5fcfb68dc8e4fb404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e369b6ba207ccfb876101c36f7c3fbdc7dd007908e70cfe5fcfb68dc8e4fb404->enter($__internal_e369b6ba207ccfb876101c36f7c3fbdc7dd007908e70cfe5fcfb68dc8e4fb404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3471ef2c0c89950792b05fca32e3cab501bf97f747f6f7fd87841469229a5443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3471ef2c0c89950792b05fca32e3cab501bf97f747f6f7fd87841469229a5443->enter($__internal_3471ef2c0c89950792b05fca32e3cab501bf97f747f6f7fd87841469229a5443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3471ef2c0c89950792b05fca32e3cab501bf97f747f6f7fd87841469229a5443->leave($__internal_3471ef2c0c89950792b05fca32e3cab501bf97f747f6f7fd87841469229a5443_prof);

        
        $__internal_e369b6ba207ccfb876101c36f7c3fbdc7dd007908e70cfe5fcfb68dc8e4fb404->leave($__internal_e369b6ba207ccfb876101c36f7c3fbdc7dd007908e70cfe5fcfb68dc8e4fb404_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_deb856d931905e16b579a84e667cbaaba309c21a4dd9814b50cc769867ee55d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb856d931905e16b579a84e667cbaaba309c21a4dd9814b50cc769867ee55d2->enter($__internal_deb856d931905e16b579a84e667cbaaba309c21a4dd9814b50cc769867ee55d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ce63848b60ae47a559cc4f4f7cad1660189872078446f349646638ec8d18b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce63848b60ae47a559cc4f4f7cad1660189872078446f349646638ec8d18b14->enter($__internal_6ce63848b60ae47a559cc4f4f7cad1660189872078446f349646638ec8d18b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ce63848b60ae47a559cc4f4f7cad1660189872078446f349646638ec8d18b14->leave($__internal_6ce63848b60ae47a559cc4f4f7cad1660189872078446f349646638ec8d18b14_prof);

        
        $__internal_deb856d931905e16b579a84e667cbaaba309c21a4dd9814b50cc769867ee55d2->leave($__internal_deb856d931905e16b579a84e667cbaaba309c21a4dd9814b50cc769867ee55d2_prof);

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
