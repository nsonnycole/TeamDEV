<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7aeb3349c7bb64cf9b5e7410a5d6b09c61f341cb2df4dc469a337120901dd99b extends Twig_Template
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
        $__internal_d0081d7d3295b55a8d600cac210dc3b72f215685f87784987b3797ac99649b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0081d7d3295b55a8d600cac210dc3b72f215685f87784987b3797ac99649b71->enter($__internal_d0081d7d3295b55a8d600cac210dc3b72f215685f87784987b3797ac99649b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4218a6325ff0757a79e5867bf7b0c399b42fa35ef34c626fb9507db454a9dd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4218a6325ff0757a79e5867bf7b0c399b42fa35ef34c626fb9507db454a9dd49->enter($__internal_4218a6325ff0757a79e5867bf7b0c399b42fa35ef34c626fb9507db454a9dd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0081d7d3295b55a8d600cac210dc3b72f215685f87784987b3797ac99649b71->leave($__internal_d0081d7d3295b55a8d600cac210dc3b72f215685f87784987b3797ac99649b71_prof);

        
        $__internal_4218a6325ff0757a79e5867bf7b0c399b42fa35ef34c626fb9507db454a9dd49->leave($__internal_4218a6325ff0757a79e5867bf7b0c399b42fa35ef34c626fb9507db454a9dd49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab468658cb4f0fcda0e332b1d1bcbf318471dd3f4bf29c3dea620c95c4866d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab468658cb4f0fcda0e332b1d1bcbf318471dd3f4bf29c3dea620c95c4866d10->enter($__internal_ab468658cb4f0fcda0e332b1d1bcbf318471dd3f4bf29c3dea620c95c4866d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_76416e69d055bb21e3c1a5879b1c33a994ade2171ce0f1d06f986f08b147ebd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76416e69d055bb21e3c1a5879b1c33a994ade2171ce0f1d06f986f08b147ebd0->enter($__internal_76416e69d055bb21e3c1a5879b1c33a994ade2171ce0f1d06f986f08b147ebd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_76416e69d055bb21e3c1a5879b1c33a994ade2171ce0f1d06f986f08b147ebd0->leave($__internal_76416e69d055bb21e3c1a5879b1c33a994ade2171ce0f1d06f986f08b147ebd0_prof);

        
        $__internal_ab468658cb4f0fcda0e332b1d1bcbf318471dd3f4bf29c3dea620c95c4866d10->leave($__internal_ab468658cb4f0fcda0e332b1d1bcbf318471dd3f4bf29c3dea620c95c4866d10_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69202a55e0b64dd36c97d589280369a4d7cabecf844875238aa8133eeaa53f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69202a55e0b64dd36c97d589280369a4d7cabecf844875238aa8133eeaa53f8e->enter($__internal_69202a55e0b64dd36c97d589280369a4d7cabecf844875238aa8133eeaa53f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c8a14e9262f77670806fd80cebec8c897a4cf2840662c0ec0fdfcc023fc0904c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a14e9262f77670806fd80cebec8c897a4cf2840662c0ec0fdfcc023fc0904c->enter($__internal_c8a14e9262f77670806fd80cebec8c897a4cf2840662c0ec0fdfcc023fc0904c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c8a14e9262f77670806fd80cebec8c897a4cf2840662c0ec0fdfcc023fc0904c->leave($__internal_c8a14e9262f77670806fd80cebec8c897a4cf2840662c0ec0fdfcc023fc0904c_prof);

        
        $__internal_69202a55e0b64dd36c97d589280369a4d7cabecf844875238aa8133eeaa53f8e->leave($__internal_69202a55e0b64dd36c97d589280369a4d7cabecf844875238aa8133eeaa53f8e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5457a72cf114fb3b02a875bed6deaad03aababc9a3e8b8c2e21f44c098399868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5457a72cf114fb3b02a875bed6deaad03aababc9a3e8b8c2e21f44c098399868->enter($__internal_5457a72cf114fb3b02a875bed6deaad03aababc9a3e8b8c2e21f44c098399868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca014436a681fc39515c077d4f35a8f715cec1a668a10fff2d7862d82354794f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca014436a681fc39515c077d4f35a8f715cec1a668a10fff2d7862d82354794f->enter($__internal_ca014436a681fc39515c077d4f35a8f715cec1a668a10fff2d7862d82354794f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ca014436a681fc39515c077d4f35a8f715cec1a668a10fff2d7862d82354794f->leave($__internal_ca014436a681fc39515c077d4f35a8f715cec1a668a10fff2d7862d82354794f_prof);

        
        $__internal_5457a72cf114fb3b02a875bed6deaad03aababc9a3e8b8c2e21f44c098399868->leave($__internal_5457a72cf114fb3b02a875bed6deaad03aababc9a3e8b8c2e21f44c098399868_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
