<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9d9ce989a35ce45f1eef7f67ee9263a133b3123363827c8b1f5273bb3c2114fb extends Twig_Template
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
        $__internal_3e725c431eaa3b1b34136f1ecbc22d7c838e215a199c34b45973a42f8314684e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e725c431eaa3b1b34136f1ecbc22d7c838e215a199c34b45973a42f8314684e->enter($__internal_3e725c431eaa3b1b34136f1ecbc22d7c838e215a199c34b45973a42f8314684e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eac90dcab535025f3fce8a70380bf0e3be8e6efbce7d947bfa266014b1176766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac90dcab535025f3fce8a70380bf0e3be8e6efbce7d947bfa266014b1176766->enter($__internal_eac90dcab535025f3fce8a70380bf0e3be8e6efbce7d947bfa266014b1176766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e725c431eaa3b1b34136f1ecbc22d7c838e215a199c34b45973a42f8314684e->leave($__internal_3e725c431eaa3b1b34136f1ecbc22d7c838e215a199c34b45973a42f8314684e_prof);

        
        $__internal_eac90dcab535025f3fce8a70380bf0e3be8e6efbce7d947bfa266014b1176766->leave($__internal_eac90dcab535025f3fce8a70380bf0e3be8e6efbce7d947bfa266014b1176766_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63b25db4b25b943feb7e93a56694860ca1d3ca81854a66136a5f373298df2a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b25db4b25b943feb7e93a56694860ca1d3ca81854a66136a5f373298df2a6c->enter($__internal_63b25db4b25b943feb7e93a56694860ca1d3ca81854a66136a5f373298df2a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d698a389d8099b3fd42c2ceafa0c1016761024332401a42d2541136d31aa923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d698a389d8099b3fd42c2ceafa0c1016761024332401a42d2541136d31aa923->enter($__internal_0d698a389d8099b3fd42c2ceafa0c1016761024332401a42d2541136d31aa923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0d698a389d8099b3fd42c2ceafa0c1016761024332401a42d2541136d31aa923->leave($__internal_0d698a389d8099b3fd42c2ceafa0c1016761024332401a42d2541136d31aa923_prof);

        
        $__internal_63b25db4b25b943feb7e93a56694860ca1d3ca81854a66136a5f373298df2a6c->leave($__internal_63b25db4b25b943feb7e93a56694860ca1d3ca81854a66136a5f373298df2a6c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f5505cbdb4db4fe73bba6978c450f01039ce66b93b51150ceff6a0e15d59762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5505cbdb4db4fe73bba6978c450f01039ce66b93b51150ceff6a0e15d59762->enter($__internal_3f5505cbdb4db4fe73bba6978c450f01039ce66b93b51150ceff6a0e15d59762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_015a9e81690e183a21920d6cf6e93c2a7aba8b1b871fd265d4b3efe2bea02b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015a9e81690e183a21920d6cf6e93c2a7aba8b1b871fd265d4b3efe2bea02b31->enter($__internal_015a9e81690e183a21920d6cf6e93c2a7aba8b1b871fd265d4b3efe2bea02b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_015a9e81690e183a21920d6cf6e93c2a7aba8b1b871fd265d4b3efe2bea02b31->leave($__internal_015a9e81690e183a21920d6cf6e93c2a7aba8b1b871fd265d4b3efe2bea02b31_prof);

        
        $__internal_3f5505cbdb4db4fe73bba6978c450f01039ce66b93b51150ceff6a0e15d59762->leave($__internal_3f5505cbdb4db4fe73bba6978c450f01039ce66b93b51150ceff6a0e15d59762_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fa4550f0433b5a20d774eda673ce1d236b80c91c455d48c5733f89cfe73e279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa4550f0433b5a20d774eda673ce1d236b80c91c455d48c5733f89cfe73e279->enter($__internal_7fa4550f0433b5a20d774eda673ce1d236b80c91c455d48c5733f89cfe73e279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96f8a8c93cc9b2b936ba446289eca9be411ad2395abd1261d16003dfcc0e0b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f8a8c93cc9b2b936ba446289eca9be411ad2395abd1261d16003dfcc0e0b03->enter($__internal_96f8a8c93cc9b2b936ba446289eca9be411ad2395abd1261d16003dfcc0e0b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_96f8a8c93cc9b2b936ba446289eca9be411ad2395abd1261d16003dfcc0e0b03->leave($__internal_96f8a8c93cc9b2b936ba446289eca9be411ad2395abd1261d16003dfcc0e0b03_prof);

        
        $__internal_7fa4550f0433b5a20d774eda673ce1d236b80c91c455d48c5733f89cfe73e279->leave($__internal_7fa4550f0433b5a20d774eda673ce1d236b80c91c455d48c5733f89cfe73e279_prof);

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
