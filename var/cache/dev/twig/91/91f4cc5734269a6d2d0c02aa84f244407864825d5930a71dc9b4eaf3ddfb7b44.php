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
        $__internal_d4ed397148c114fc8e6402c8983425f6e5d10dbf60ace0f0e106bf9790a824bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ed397148c114fc8e6402c8983425f6e5d10dbf60ace0f0e106bf9790a824bf->enter($__internal_d4ed397148c114fc8e6402c8983425f6e5d10dbf60ace0f0e106bf9790a824bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d79db42783a79a8efb6ad8d23bc053a1fa93d8475f63bc261bb9d0db3880c762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79db42783a79a8efb6ad8d23bc053a1fa93d8475f63bc261bb9d0db3880c762->enter($__internal_d79db42783a79a8efb6ad8d23bc053a1fa93d8475f63bc261bb9d0db3880c762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ed397148c114fc8e6402c8983425f6e5d10dbf60ace0f0e106bf9790a824bf->leave($__internal_d4ed397148c114fc8e6402c8983425f6e5d10dbf60ace0f0e106bf9790a824bf_prof);

        
        $__internal_d79db42783a79a8efb6ad8d23bc053a1fa93d8475f63bc261bb9d0db3880c762->leave($__internal_d79db42783a79a8efb6ad8d23bc053a1fa93d8475f63bc261bb9d0db3880c762_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f465f42205e6523b4d882ed5d0a68d3fa5e0cd3a0fabc07c365d3b717b67174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f465f42205e6523b4d882ed5d0a68d3fa5e0cd3a0fabc07c365d3b717b67174->enter($__internal_5f465f42205e6523b4d882ed5d0a68d3fa5e0cd3a0fabc07c365d3b717b67174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6958931d0c18e09a7bb40abeeae9121c898a3e570f34908d7b6c7743a5f02af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6958931d0c18e09a7bb40abeeae9121c898a3e570f34908d7b6c7743a5f02af->enter($__internal_e6958931d0c18e09a7bb40abeeae9121c898a3e570f34908d7b6c7743a5f02af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e6958931d0c18e09a7bb40abeeae9121c898a3e570f34908d7b6c7743a5f02af->leave($__internal_e6958931d0c18e09a7bb40abeeae9121c898a3e570f34908d7b6c7743a5f02af_prof);

        
        $__internal_5f465f42205e6523b4d882ed5d0a68d3fa5e0cd3a0fabc07c365d3b717b67174->leave($__internal_5f465f42205e6523b4d882ed5d0a68d3fa5e0cd3a0fabc07c365d3b717b67174_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02c03a32a2aeec3de64a4a670b343102c6d128e1df47eebdc70456d9d5192696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c03a32a2aeec3de64a4a670b343102c6d128e1df47eebdc70456d9d5192696->enter($__internal_02c03a32a2aeec3de64a4a670b343102c6d128e1df47eebdc70456d9d5192696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a032d8d4a150b608a6883f0f239557b4dbeb25ab264a46eab34545cb808d6785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a032d8d4a150b608a6883f0f239557b4dbeb25ab264a46eab34545cb808d6785->enter($__internal_a032d8d4a150b608a6883f0f239557b4dbeb25ab264a46eab34545cb808d6785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a032d8d4a150b608a6883f0f239557b4dbeb25ab264a46eab34545cb808d6785->leave($__internal_a032d8d4a150b608a6883f0f239557b4dbeb25ab264a46eab34545cb808d6785_prof);

        
        $__internal_02c03a32a2aeec3de64a4a670b343102c6d128e1df47eebdc70456d9d5192696->leave($__internal_02c03a32a2aeec3de64a4a670b343102c6d128e1df47eebdc70456d9d5192696_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d68a4278e9287ed03cdb8b63ae0607f29bf020777c7704056d17c6790b9c3248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68a4278e9287ed03cdb8b63ae0607f29bf020777c7704056d17c6790b9c3248->enter($__internal_d68a4278e9287ed03cdb8b63ae0607f29bf020777c7704056d17c6790b9c3248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0f17f8ed9c36847a573ea86163c6dee788af9b00c342cbedd16b10fd0831e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f17f8ed9c36847a573ea86163c6dee788af9b00c342cbedd16b10fd0831e9a->enter($__internal_b0f17f8ed9c36847a573ea86163c6dee788af9b00c342cbedd16b10fd0831e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b0f17f8ed9c36847a573ea86163c6dee788af9b00c342cbedd16b10fd0831e9a->leave($__internal_b0f17f8ed9c36847a573ea86163c6dee788af9b00c342cbedd16b10fd0831e9a_prof);

        
        $__internal_d68a4278e9287ed03cdb8b63ae0607f29bf020777c7704056d17c6790b9c3248->leave($__internal_d68a4278e9287ed03cdb8b63ae0607f29bf020777c7704056d17c6790b9c3248_prof);

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
