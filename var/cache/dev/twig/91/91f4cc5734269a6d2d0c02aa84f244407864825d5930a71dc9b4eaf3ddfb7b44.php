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
        $__internal_4b8e842c6dfd7ab3576b616cb97ec0d1c05b0db0ec2c5118c734c200a8327858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8e842c6dfd7ab3576b616cb97ec0d1c05b0db0ec2c5118c734c200a8327858->enter($__internal_4b8e842c6dfd7ab3576b616cb97ec0d1c05b0db0ec2c5118c734c200a8327858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_38924acda4c23a493cb62f11f6ed83254b9602807ef24d2b486a8fa31759d731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38924acda4c23a493cb62f11f6ed83254b9602807ef24d2b486a8fa31759d731->enter($__internal_38924acda4c23a493cb62f11f6ed83254b9602807ef24d2b486a8fa31759d731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b8e842c6dfd7ab3576b616cb97ec0d1c05b0db0ec2c5118c734c200a8327858->leave($__internal_4b8e842c6dfd7ab3576b616cb97ec0d1c05b0db0ec2c5118c734c200a8327858_prof);

        
        $__internal_38924acda4c23a493cb62f11f6ed83254b9602807ef24d2b486a8fa31759d731->leave($__internal_38924acda4c23a493cb62f11f6ed83254b9602807ef24d2b486a8fa31759d731_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0132613ab33468db4ba61eefa1e410a7886554dda11e3d6d02c6415590cda3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0132613ab33468db4ba61eefa1e410a7886554dda11e3d6d02c6415590cda3aa->enter($__internal_0132613ab33468db4ba61eefa1e410a7886554dda11e3d6d02c6415590cda3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f83a1d4cba5e1eafd786eca8d930cd14a5aab40e35119773422567e9ae11975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f83a1d4cba5e1eafd786eca8d930cd14a5aab40e35119773422567e9ae11975->enter($__internal_6f83a1d4cba5e1eafd786eca8d930cd14a5aab40e35119773422567e9ae11975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6f83a1d4cba5e1eafd786eca8d930cd14a5aab40e35119773422567e9ae11975->leave($__internal_6f83a1d4cba5e1eafd786eca8d930cd14a5aab40e35119773422567e9ae11975_prof);

        
        $__internal_0132613ab33468db4ba61eefa1e410a7886554dda11e3d6d02c6415590cda3aa->leave($__internal_0132613ab33468db4ba61eefa1e410a7886554dda11e3d6d02c6415590cda3aa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1d8f053d8f3c685c640891b51e223cacc47d9fede456e6c44e6645a085f1156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d8f053d8f3c685c640891b51e223cacc47d9fede456e6c44e6645a085f1156->enter($__internal_e1d8f053d8f3c685c640891b51e223cacc47d9fede456e6c44e6645a085f1156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_988e77cd583e15361e4a8ba14a9a67710dd9d3e067a23d778525289d62a42b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988e77cd583e15361e4a8ba14a9a67710dd9d3e067a23d778525289d62a42b9d->enter($__internal_988e77cd583e15361e4a8ba14a9a67710dd9d3e067a23d778525289d62a42b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_988e77cd583e15361e4a8ba14a9a67710dd9d3e067a23d778525289d62a42b9d->leave($__internal_988e77cd583e15361e4a8ba14a9a67710dd9d3e067a23d778525289d62a42b9d_prof);

        
        $__internal_e1d8f053d8f3c685c640891b51e223cacc47d9fede456e6c44e6645a085f1156->leave($__internal_e1d8f053d8f3c685c640891b51e223cacc47d9fede456e6c44e6645a085f1156_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f917b29bc9ffff06f02c996bc1bdec552946ba6c854c15994c8506b119960924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f917b29bc9ffff06f02c996bc1bdec552946ba6c854c15994c8506b119960924->enter($__internal_f917b29bc9ffff06f02c996bc1bdec552946ba6c854c15994c8506b119960924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f324942e8e47a3b6efffd6af0d51750fd962325d8753a67fc38733c7b7e0b370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f324942e8e47a3b6efffd6af0d51750fd962325d8753a67fc38733c7b7e0b370->enter($__internal_f324942e8e47a3b6efffd6af0d51750fd962325d8753a67fc38733c7b7e0b370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f324942e8e47a3b6efffd6af0d51750fd962325d8753a67fc38733c7b7e0b370->leave($__internal_f324942e8e47a3b6efffd6af0d51750fd962325d8753a67fc38733c7b7e0b370_prof);

        
        $__internal_f917b29bc9ffff06f02c996bc1bdec552946ba6c854c15994c8506b119960924->leave($__internal_f917b29bc9ffff06f02c996bc1bdec552946ba6c854c15994c8506b119960924_prof);

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
