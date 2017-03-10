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
        $__internal_f28cda12d032ce63cf4a21d4c0160581af3be0afa2e2900c6404be9dcd5b4168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28cda12d032ce63cf4a21d4c0160581af3be0afa2e2900c6404be9dcd5b4168->enter($__internal_f28cda12d032ce63cf4a21d4c0160581af3be0afa2e2900c6404be9dcd5b4168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d5860ab651e5d6d8360712133a9f9cfc9907822d7650ab4541b13cfe2b2cdb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5860ab651e5d6d8360712133a9f9cfc9907822d7650ab4541b13cfe2b2cdb0a->enter($__internal_d5860ab651e5d6d8360712133a9f9cfc9907822d7650ab4541b13cfe2b2cdb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f28cda12d032ce63cf4a21d4c0160581af3be0afa2e2900c6404be9dcd5b4168->leave($__internal_f28cda12d032ce63cf4a21d4c0160581af3be0afa2e2900c6404be9dcd5b4168_prof);

        
        $__internal_d5860ab651e5d6d8360712133a9f9cfc9907822d7650ab4541b13cfe2b2cdb0a->leave($__internal_d5860ab651e5d6d8360712133a9f9cfc9907822d7650ab4541b13cfe2b2cdb0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb442414bc96d3137bafa03d6f51d37758c0f452e34d1c55627fe6b5859e09ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb442414bc96d3137bafa03d6f51d37758c0f452e34d1c55627fe6b5859e09ad->enter($__internal_fb442414bc96d3137bafa03d6f51d37758c0f452e34d1c55627fe6b5859e09ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ce288ec4a52a4adeb72169941af8adeeb451509dc6a5df6f0c3db1be11284870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce288ec4a52a4adeb72169941af8adeeb451509dc6a5df6f0c3db1be11284870->enter($__internal_ce288ec4a52a4adeb72169941af8adeeb451509dc6a5df6f0c3db1be11284870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ce288ec4a52a4adeb72169941af8adeeb451509dc6a5df6f0c3db1be11284870->leave($__internal_ce288ec4a52a4adeb72169941af8adeeb451509dc6a5df6f0c3db1be11284870_prof);

        
        $__internal_fb442414bc96d3137bafa03d6f51d37758c0f452e34d1c55627fe6b5859e09ad->leave($__internal_fb442414bc96d3137bafa03d6f51d37758c0f452e34d1c55627fe6b5859e09ad_prof);

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
