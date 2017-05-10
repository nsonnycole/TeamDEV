<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_879a086427bf5f7dc15b14014bf9c9f1c1a6dbda64f0768c8ef29c1363ed342d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879a086427bf5f7dc15b14014bf9c9f1c1a6dbda64f0768c8ef29c1363ed342d->enter($__internal_879a086427bf5f7dc15b14014bf9c9f1c1a6dbda64f0768c8ef29c1363ed342d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6358ce88870d0c9200a346f58eb882fbd073c48465396e989df79aec713ea8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6358ce88870d0c9200a346f58eb882fbd073c48465396e989df79aec713ea8f4->enter($__internal_6358ce88870d0c9200a346f58eb882fbd073c48465396e989df79aec713ea8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879a086427bf5f7dc15b14014bf9c9f1c1a6dbda64f0768c8ef29c1363ed342d->leave($__internal_879a086427bf5f7dc15b14014bf9c9f1c1a6dbda64f0768c8ef29c1363ed342d_prof);

        
        $__internal_6358ce88870d0c9200a346f58eb882fbd073c48465396e989df79aec713ea8f4->leave($__internal_6358ce88870d0c9200a346f58eb882fbd073c48465396e989df79aec713ea8f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ccf318c63a5ddfb16c6bb3c9471876c1d2646f6db7769c0383b9b12fcc01a48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf318c63a5ddfb16c6bb3c9471876c1d2646f6db7769c0383b9b12fcc01a48e->enter($__internal_ccf318c63a5ddfb16c6bb3c9471876c1d2646f6db7769c0383b9b12fcc01a48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d4b41d11d743e774b5f841b03a5bb4e07bb913a74228d53e61723bda2a76959c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b41d11d743e774b5f841b03a5bb4e07bb913a74228d53e61723bda2a76959c->enter($__internal_d4b41d11d743e774b5f841b03a5bb4e07bb913a74228d53e61723bda2a76959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d4b41d11d743e774b5f841b03a5bb4e07bb913a74228d53e61723bda2a76959c->leave($__internal_d4b41d11d743e774b5f841b03a5bb4e07bb913a74228d53e61723bda2a76959c_prof);

        
        $__internal_ccf318c63a5ddfb16c6bb3c9471876c1d2646f6db7769c0383b9b12fcc01a48e->leave($__internal_ccf318c63a5ddfb16c6bb3c9471876c1d2646f6db7769c0383b9b12fcc01a48e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_735e59d7e18026a48d97f8a4e5f08a309fab00efaf5bd2c14c84ec297559f703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735e59d7e18026a48d97f8a4e5f08a309fab00efaf5bd2c14c84ec297559f703->enter($__internal_735e59d7e18026a48d97f8a4e5f08a309fab00efaf5bd2c14c84ec297559f703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_189ad956b1689ace9f4e0888ce4927402a3f5d6b2498b9aa990e887f569380ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189ad956b1689ace9f4e0888ce4927402a3f5d6b2498b9aa990e887f569380ac->enter($__internal_189ad956b1689ace9f4e0888ce4927402a3f5d6b2498b9aa990e887f569380ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_189ad956b1689ace9f4e0888ce4927402a3f5d6b2498b9aa990e887f569380ac->leave($__internal_189ad956b1689ace9f4e0888ce4927402a3f5d6b2498b9aa990e887f569380ac_prof);

        
        $__internal_735e59d7e18026a48d97f8a4e5f08a309fab00efaf5bd2c14c84ec297559f703->leave($__internal_735e59d7e18026a48d97f8a4e5f08a309fab00efaf5bd2c14c84ec297559f703_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7c75144688609811335b42b8d504d1079b6595e8fa9c87a9222423cfa82a281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c75144688609811335b42b8d504d1079b6595e8fa9c87a9222423cfa82a281->enter($__internal_d7c75144688609811335b42b8d504d1079b6595e8fa9c87a9222423cfa82a281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f28ca3ffb57d9e936b8393f2400d65069cdc57ee34f403b31218c73b7c6a02a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28ca3ffb57d9e936b8393f2400d65069cdc57ee34f403b31218c73b7c6a02a6->enter($__internal_f28ca3ffb57d9e936b8393f2400d65069cdc57ee34f403b31218c73b7c6a02a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f28ca3ffb57d9e936b8393f2400d65069cdc57ee34f403b31218c73b7c6a02a6->leave($__internal_f28ca3ffb57d9e936b8393f2400d65069cdc57ee34f403b31218c73b7c6a02a6_prof);

        
        $__internal_d7c75144688609811335b42b8d504d1079b6595e8fa9c87a9222423cfa82a281->leave($__internal_d7c75144688609811335b42b8d504d1079b6595e8fa9c87a9222423cfa82a281_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
