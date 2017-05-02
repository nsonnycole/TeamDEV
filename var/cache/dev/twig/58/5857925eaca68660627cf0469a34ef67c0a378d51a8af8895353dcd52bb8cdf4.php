<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ef16f0062d80481c8c292f116597cedbe18193977f777013dac0a72f29c2b83e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a8280099a6a2c8054e9415e648a37a6b838eccaba788759433315cab212fc50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8280099a6a2c8054e9415e648a37a6b838eccaba788759433315cab212fc50->enter($__internal_3a8280099a6a2c8054e9415e648a37a6b838eccaba788759433315cab212fc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8887cd708638472babdce6c129bbbbf00617ec919a35ca99e3c011218aea86aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8887cd708638472babdce6c129bbbbf00617ec919a35ca99e3c011218aea86aa->enter($__internal_8887cd708638472babdce6c129bbbbf00617ec919a35ca99e3c011218aea86aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a8280099a6a2c8054e9415e648a37a6b838eccaba788759433315cab212fc50->leave($__internal_3a8280099a6a2c8054e9415e648a37a6b838eccaba788759433315cab212fc50_prof);

        
        $__internal_8887cd708638472babdce6c129bbbbf00617ec919a35ca99e3c011218aea86aa->leave($__internal_8887cd708638472babdce6c129bbbbf00617ec919a35ca99e3c011218aea86aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1388ab5d8cd3d0b5bd542f8f4ba6a5f84e2b4e699d891a1b59b27369855d6d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1388ab5d8cd3d0b5bd542f8f4ba6a5f84e2b4e699d891a1b59b27369855d6d95->enter($__internal_1388ab5d8cd3d0b5bd542f8f4ba6a5f84e2b4e699d891a1b59b27369855d6d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_50d13cfeec0c5c55be4a05c0428389b2dcec2e86ce4262be0a14d890980400be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d13cfeec0c5c55be4a05c0428389b2dcec2e86ce4262be0a14d890980400be->enter($__internal_50d13cfeec0c5c55be4a05c0428389b2dcec2e86ce4262be0a14d890980400be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_50d13cfeec0c5c55be4a05c0428389b2dcec2e86ce4262be0a14d890980400be->leave($__internal_50d13cfeec0c5c55be4a05c0428389b2dcec2e86ce4262be0a14d890980400be_prof);

        
        $__internal_1388ab5d8cd3d0b5bd542f8f4ba6a5f84e2b4e699d891a1b59b27369855d6d95->leave($__internal_1388ab5d8cd3d0b5bd542f8f4ba6a5f84e2b4e699d891a1b59b27369855d6d95_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
