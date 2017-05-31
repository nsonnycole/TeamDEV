<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c4d74ec547d65d6347025be5330ed5a3dad7a0a141d98ea40e8b6835d1e5487 extends Twig_Template
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
        $__internal_36608222a3a6d1ea83f751d26abba4c73bdc3ffb8529dddc116496e0abd13531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36608222a3a6d1ea83f751d26abba4c73bdc3ffb8529dddc116496e0abd13531->enter($__internal_36608222a3a6d1ea83f751d26abba4c73bdc3ffb8529dddc116496e0abd13531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_26b51b88f487ad4867786a4d843857d7e9078c3de835e048c227760786e02f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b51b88f487ad4867786a4d843857d7e9078c3de835e048c227760786e02f68->enter($__internal_26b51b88f487ad4867786a4d843857d7e9078c3de835e048c227760786e02f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36608222a3a6d1ea83f751d26abba4c73bdc3ffb8529dddc116496e0abd13531->leave($__internal_36608222a3a6d1ea83f751d26abba4c73bdc3ffb8529dddc116496e0abd13531_prof);

        
        $__internal_26b51b88f487ad4867786a4d843857d7e9078c3de835e048c227760786e02f68->leave($__internal_26b51b88f487ad4867786a4d843857d7e9078c3de835e048c227760786e02f68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eeb71f7c00a85c595384a47fed02767b0ebe09c3ff0ec9fa8e8f4b169e0a00e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb71f7c00a85c595384a47fed02767b0ebe09c3ff0ec9fa8e8f4b169e0a00e2->enter($__internal_eeb71f7c00a85c595384a47fed02767b0ebe09c3ff0ec9fa8e8f4b169e0a00e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_73370120a72e673f10902928e6c3d9663001fa505cf3b3c665327fa4d7f9b601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73370120a72e673f10902928e6c3d9663001fa505cf3b3c665327fa4d7f9b601->enter($__internal_73370120a72e673f10902928e6c3d9663001fa505cf3b3c665327fa4d7f9b601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73370120a72e673f10902928e6c3d9663001fa505cf3b3c665327fa4d7f9b601->leave($__internal_73370120a72e673f10902928e6c3d9663001fa505cf3b3c665327fa4d7f9b601_prof);

        
        $__internal_eeb71f7c00a85c595384a47fed02767b0ebe09c3ff0ec9fa8e8f4b169e0a00e2->leave($__internal_eeb71f7c00a85c595384a47fed02767b0ebe09c3ff0ec9fa8e8f4b169e0a00e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c3c8c68d5c0f9aeb48fbfcd637a87ee34ab9af3cc73479da5833c6c3aeb947a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3c8c68d5c0f9aeb48fbfcd637a87ee34ab9af3cc73479da5833c6c3aeb947a->enter($__internal_7c3c8c68d5c0f9aeb48fbfcd637a87ee34ab9af3cc73479da5833c6c3aeb947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c03af81e3388efe5909c4ab8473fd9a1549ca7f7ffd68f9104952ba9e4491c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03af81e3388efe5909c4ab8473fd9a1549ca7f7ffd68f9104952ba9e4491c9b->enter($__internal_c03af81e3388efe5909c4ab8473fd9a1549ca7f7ffd68f9104952ba9e4491c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c03af81e3388efe5909c4ab8473fd9a1549ca7f7ffd68f9104952ba9e4491c9b->leave($__internal_c03af81e3388efe5909c4ab8473fd9a1549ca7f7ffd68f9104952ba9e4491c9b_prof);

        
        $__internal_7c3c8c68d5c0f9aeb48fbfcd637a87ee34ab9af3cc73479da5833c6c3aeb947a->leave($__internal_7c3c8c68d5c0f9aeb48fbfcd637a87ee34ab9af3cc73479da5833c6c3aeb947a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2788d696ed4005b3bbe0f6f07ae899270495e5ad0ad4607f7fdd16bb3ca10b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2788d696ed4005b3bbe0f6f07ae899270495e5ad0ad4607f7fdd16bb3ca10b38->enter($__internal_2788d696ed4005b3bbe0f6f07ae899270495e5ad0ad4607f7fdd16bb3ca10b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b1420280cb4e0867db940ef2ca6fdd294247f8833efacbd45ec215163affd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1420280cb4e0867db940ef2ca6fdd294247f8833efacbd45ec215163affd2f->enter($__internal_8b1420280cb4e0867db940ef2ca6fdd294247f8833efacbd45ec215163affd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b1420280cb4e0867db940ef2ca6fdd294247f8833efacbd45ec215163affd2f->leave($__internal_8b1420280cb4e0867db940ef2ca6fdd294247f8833efacbd45ec215163affd2f_prof);

        
        $__internal_2788d696ed4005b3bbe0f6f07ae899270495e5ad0ad4607f7fdd16bb3ca10b38->leave($__internal_2788d696ed4005b3bbe0f6f07ae899270495e5ad0ad4607f7fdd16bb3ca10b38_prof);

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
