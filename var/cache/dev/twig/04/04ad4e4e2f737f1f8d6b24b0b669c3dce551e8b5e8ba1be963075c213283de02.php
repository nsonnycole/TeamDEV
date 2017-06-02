<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bd5479c199a0af4f8c0efa26253bb638c0b10b2babe4f20c0ea80f0dfc3122b7 extends Twig_Template
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
        $__internal_eaae1b4c39141fad1a93290cafc0d776483a012fd3774f2441d034a775bf54ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaae1b4c39141fad1a93290cafc0d776483a012fd3774f2441d034a775bf54ff->enter($__internal_eaae1b4c39141fad1a93290cafc0d776483a012fd3774f2441d034a775bf54ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2240459ab9c237d0c59e49ee78b437dfcac46d40d59541b8e0693fece552bcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2240459ab9c237d0c59e49ee78b437dfcac46d40d59541b8e0693fece552bcca->enter($__internal_2240459ab9c237d0c59e49ee78b437dfcac46d40d59541b8e0693fece552bcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaae1b4c39141fad1a93290cafc0d776483a012fd3774f2441d034a775bf54ff->leave($__internal_eaae1b4c39141fad1a93290cafc0d776483a012fd3774f2441d034a775bf54ff_prof);

        
        $__internal_2240459ab9c237d0c59e49ee78b437dfcac46d40d59541b8e0693fece552bcca->leave($__internal_2240459ab9c237d0c59e49ee78b437dfcac46d40d59541b8e0693fece552bcca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2dc350784c0e62fab1cdb0a00d0da5c29b957206b48efb7fbb0b4c6e4d88261b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc350784c0e62fab1cdb0a00d0da5c29b957206b48efb7fbb0b4c6e4d88261b->enter($__internal_2dc350784c0e62fab1cdb0a00d0da5c29b957206b48efb7fbb0b4c6e4d88261b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9c9b6ff0485d402ed5fac38cc29801f60a4fefbd4f3069d8b9069e6005e4f939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9b6ff0485d402ed5fac38cc29801f60a4fefbd4f3069d8b9069e6005e4f939->enter($__internal_9c9b6ff0485d402ed5fac38cc29801f60a4fefbd4f3069d8b9069e6005e4f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9c9b6ff0485d402ed5fac38cc29801f60a4fefbd4f3069d8b9069e6005e4f939->leave($__internal_9c9b6ff0485d402ed5fac38cc29801f60a4fefbd4f3069d8b9069e6005e4f939_prof);

        
        $__internal_2dc350784c0e62fab1cdb0a00d0da5c29b957206b48efb7fbb0b4c6e4d88261b->leave($__internal_2dc350784c0e62fab1cdb0a00d0da5c29b957206b48efb7fbb0b4c6e4d88261b_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
