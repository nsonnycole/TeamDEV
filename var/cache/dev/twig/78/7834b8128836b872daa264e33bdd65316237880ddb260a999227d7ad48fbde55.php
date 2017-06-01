<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fa5ba57ac5f33a7be453056e8bda97d0217db0e06b5324d614e643a673281081 extends Twig_Template
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
        $__internal_9e185cb422c0efba025065b9a914ee1c5ef3037af5bd25ae6b319318cbfbdd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e185cb422c0efba025065b9a914ee1c5ef3037af5bd25ae6b319318cbfbdd8d->enter($__internal_9e185cb422c0efba025065b9a914ee1c5ef3037af5bd25ae6b319318cbfbdd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c0555cb696ab56bce0af42c23c24384abc98e93194d0c6d63e41d3022ad20489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0555cb696ab56bce0af42c23c24384abc98e93194d0c6d63e41d3022ad20489->enter($__internal_c0555cb696ab56bce0af42c23c24384abc98e93194d0c6d63e41d3022ad20489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e185cb422c0efba025065b9a914ee1c5ef3037af5bd25ae6b319318cbfbdd8d->leave($__internal_9e185cb422c0efba025065b9a914ee1c5ef3037af5bd25ae6b319318cbfbdd8d_prof);

        
        $__internal_c0555cb696ab56bce0af42c23c24384abc98e93194d0c6d63e41d3022ad20489->leave($__internal_c0555cb696ab56bce0af42c23c24384abc98e93194d0c6d63e41d3022ad20489_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c130c86ca1afd749001d8ad911a1cde859f951d0fea34a12f5a8f94a0786304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c130c86ca1afd749001d8ad911a1cde859f951d0fea34a12f5a8f94a0786304->enter($__internal_1c130c86ca1afd749001d8ad911a1cde859f951d0fea34a12f5a8f94a0786304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f848ffbb05bb7ca913c8c1309803fdd75fa4fa52b84f7527e7d755da8074a17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f848ffbb05bb7ca913c8c1309803fdd75fa4fa52b84f7527e7d755da8074a17f->enter($__internal_f848ffbb05bb7ca913c8c1309803fdd75fa4fa52b84f7527e7d755da8074a17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f848ffbb05bb7ca913c8c1309803fdd75fa4fa52b84f7527e7d755da8074a17f->leave($__internal_f848ffbb05bb7ca913c8c1309803fdd75fa4fa52b84f7527e7d755da8074a17f_prof);

        
        $__internal_1c130c86ca1afd749001d8ad911a1cde859f951d0fea34a12f5a8f94a0786304->leave($__internal_1c130c86ca1afd749001d8ad911a1cde859f951d0fea34a12f5a8f94a0786304_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9890bbc731abeacf025b9aa18e86f527e0138327a8a8155a0c08f04458f799b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9890bbc731abeacf025b9aa18e86f527e0138327a8a8155a0c08f04458f799b3->enter($__internal_9890bbc731abeacf025b9aa18e86f527e0138327a8a8155a0c08f04458f799b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_89e06c43918298c7756c8fa0432447af371a68a0d5cb5213e8f2f8d22d2bdd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e06c43918298c7756c8fa0432447af371a68a0d5cb5213e8f2f8d22d2bdd98->enter($__internal_89e06c43918298c7756c8fa0432447af371a68a0d5cb5213e8f2f8d22d2bdd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89e06c43918298c7756c8fa0432447af371a68a0d5cb5213e8f2f8d22d2bdd98->leave($__internal_89e06c43918298c7756c8fa0432447af371a68a0d5cb5213e8f2f8d22d2bdd98_prof);

        
        $__internal_9890bbc731abeacf025b9aa18e86f527e0138327a8a8155a0c08f04458f799b3->leave($__internal_9890bbc731abeacf025b9aa18e86f527e0138327a8a8155a0c08f04458f799b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_990c02cd6928df4c6815bf152b08a2d07bf139855e1e7a251545a8640aa1c395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990c02cd6928df4c6815bf152b08a2d07bf139855e1e7a251545a8640aa1c395->enter($__internal_990c02cd6928df4c6815bf152b08a2d07bf139855e1e7a251545a8640aa1c395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7587f176e9d9bef58311daabcb212a19c7643fd40d27f4a27294b2f76db5a3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7587f176e9d9bef58311daabcb212a19c7643fd40d27f4a27294b2f76db5a3fa->enter($__internal_7587f176e9d9bef58311daabcb212a19c7643fd40d27f4a27294b2f76db5a3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7587f176e9d9bef58311daabcb212a19c7643fd40d27f4a27294b2f76db5a3fa->leave($__internal_7587f176e9d9bef58311daabcb212a19c7643fd40d27f4a27294b2f76db5a3fa_prof);

        
        $__internal_990c02cd6928df4c6815bf152b08a2d07bf139855e1e7a251545a8640aa1c395->leave($__internal_990c02cd6928df4c6815bf152b08a2d07bf139855e1e7a251545a8640aa1c395_prof);

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
