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
        $__internal_c59dd54d124b7f23673da3252966a7b2b175bdf1c7b088f6bc4d5802f8b59ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59dd54d124b7f23673da3252966a7b2b175bdf1c7b088f6bc4d5802f8b59ddd->enter($__internal_c59dd54d124b7f23673da3252966a7b2b175bdf1c7b088f6bc4d5802f8b59ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8a8997097653dbcb343b2770c089bef888039496d76cecddc7490f39705e4ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8997097653dbcb343b2770c089bef888039496d76cecddc7490f39705e4ebc->enter($__internal_8a8997097653dbcb343b2770c089bef888039496d76cecddc7490f39705e4ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c59dd54d124b7f23673da3252966a7b2b175bdf1c7b088f6bc4d5802f8b59ddd->leave($__internal_c59dd54d124b7f23673da3252966a7b2b175bdf1c7b088f6bc4d5802f8b59ddd_prof);

        
        $__internal_8a8997097653dbcb343b2770c089bef888039496d76cecddc7490f39705e4ebc->leave($__internal_8a8997097653dbcb343b2770c089bef888039496d76cecddc7490f39705e4ebc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c9b8eb04385694ec8567c3b74d65da9e104ddaee2bfaaf02e3affe5ee0c2233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9b8eb04385694ec8567c3b74d65da9e104ddaee2bfaaf02e3affe5ee0c2233->enter($__internal_8c9b8eb04385694ec8567c3b74d65da9e104ddaee2bfaaf02e3affe5ee0c2233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4e464dc7e8bb8f27c215114b46111896d45d7b66fc2fcd4b886ec42b5106ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e464dc7e8bb8f27c215114b46111896d45d7b66fc2fcd4b886ec42b5106ba1->enter($__internal_f4e464dc7e8bb8f27c215114b46111896d45d7b66fc2fcd4b886ec42b5106ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f4e464dc7e8bb8f27c215114b46111896d45d7b66fc2fcd4b886ec42b5106ba1->leave($__internal_f4e464dc7e8bb8f27c215114b46111896d45d7b66fc2fcd4b886ec42b5106ba1_prof);

        
        $__internal_8c9b8eb04385694ec8567c3b74d65da9e104ddaee2bfaaf02e3affe5ee0c2233->leave($__internal_8c9b8eb04385694ec8567c3b74d65da9e104ddaee2bfaaf02e3affe5ee0c2233_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35057f6df880330781a0678be7d5006168f784b8d2af2cfe9099f35f3a14987c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35057f6df880330781a0678be7d5006168f784b8d2af2cfe9099f35f3a14987c->enter($__internal_35057f6df880330781a0678be7d5006168f784b8d2af2cfe9099f35f3a14987c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_884931594583c237c438872094126e6f57e5cc116f5a3602ac80edaf5f989ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884931594583c237c438872094126e6f57e5cc116f5a3602ac80edaf5f989ec6->enter($__internal_884931594583c237c438872094126e6f57e5cc116f5a3602ac80edaf5f989ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_884931594583c237c438872094126e6f57e5cc116f5a3602ac80edaf5f989ec6->leave($__internal_884931594583c237c438872094126e6f57e5cc116f5a3602ac80edaf5f989ec6_prof);

        
        $__internal_35057f6df880330781a0678be7d5006168f784b8d2af2cfe9099f35f3a14987c->leave($__internal_35057f6df880330781a0678be7d5006168f784b8d2af2cfe9099f35f3a14987c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0d95d86ca8ba3eee59c5e314671c6e7074087b7b575f69a3dc988611d5b2a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d95d86ca8ba3eee59c5e314671c6e7074087b7b575f69a3dc988611d5b2a82->enter($__internal_f0d95d86ca8ba3eee59c5e314671c6e7074087b7b575f69a3dc988611d5b2a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_293f5fd4bf2e7cff9c981dde03c082ced0db6b746b7f5d21e2b8f04a88a86ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293f5fd4bf2e7cff9c981dde03c082ced0db6b746b7f5d21e2b8f04a88a86ca6->enter($__internal_293f5fd4bf2e7cff9c981dde03c082ced0db6b746b7f5d21e2b8f04a88a86ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_293f5fd4bf2e7cff9c981dde03c082ced0db6b746b7f5d21e2b8f04a88a86ca6->leave($__internal_293f5fd4bf2e7cff9c981dde03c082ced0db6b746b7f5d21e2b8f04a88a86ca6_prof);

        
        $__internal_f0d95d86ca8ba3eee59c5e314671c6e7074087b7b575f69a3dc988611d5b2a82->leave($__internal_f0d95d86ca8ba3eee59c5e314671c6e7074087b7b575f69a3dc988611d5b2a82_prof);

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
