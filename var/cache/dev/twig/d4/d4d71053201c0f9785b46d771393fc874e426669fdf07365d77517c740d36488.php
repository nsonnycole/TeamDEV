<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e39f47f5e131a6b46be2f0cf44928865e02d721f2881e4ff12336d2d5e23217f extends Twig_Template
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
        $__internal_8a648886f9919faab7b6765d1e60908a11441525ff7d9abe1e8eb1ac4fca1b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a648886f9919faab7b6765d1e60908a11441525ff7d9abe1e8eb1ac4fca1b74->enter($__internal_8a648886f9919faab7b6765d1e60908a11441525ff7d9abe1e8eb1ac4fca1b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_376c37a2e2b49dbc386f779e98fa43983bfe451014d54127b1d5ed1edba2b715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376c37a2e2b49dbc386f779e98fa43983bfe451014d54127b1d5ed1edba2b715->enter($__internal_376c37a2e2b49dbc386f779e98fa43983bfe451014d54127b1d5ed1edba2b715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a648886f9919faab7b6765d1e60908a11441525ff7d9abe1e8eb1ac4fca1b74->leave($__internal_8a648886f9919faab7b6765d1e60908a11441525ff7d9abe1e8eb1ac4fca1b74_prof);

        
        $__internal_376c37a2e2b49dbc386f779e98fa43983bfe451014d54127b1d5ed1edba2b715->leave($__internal_376c37a2e2b49dbc386f779e98fa43983bfe451014d54127b1d5ed1edba2b715_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7a1184ea08367d2b28b25c96b0fde32e234d4ac801c208c313fe1b1bf0ca162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a1184ea08367d2b28b25c96b0fde32e234d4ac801c208c313fe1b1bf0ca162->enter($__internal_a7a1184ea08367d2b28b25c96b0fde32e234d4ac801c208c313fe1b1bf0ca162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a7bc466d548b2a9e5d8f319f8eb594cb2b811031c0d183620aac7f2b1c7842f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7bc466d548b2a9e5d8f319f8eb594cb2b811031c0d183620aac7f2b1c7842f->enter($__internal_8a7bc466d548b2a9e5d8f319f8eb594cb2b811031c0d183620aac7f2b1c7842f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8a7bc466d548b2a9e5d8f319f8eb594cb2b811031c0d183620aac7f2b1c7842f->leave($__internal_8a7bc466d548b2a9e5d8f319f8eb594cb2b811031c0d183620aac7f2b1c7842f_prof);

        
        $__internal_a7a1184ea08367d2b28b25c96b0fde32e234d4ac801c208c313fe1b1bf0ca162->leave($__internal_a7a1184ea08367d2b28b25c96b0fde32e234d4ac801c208c313fe1b1bf0ca162_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_925ef1538b136028ca2d28d107a152f2759a2bf447d01d0ceb74c7ac431c28e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925ef1538b136028ca2d28d107a152f2759a2bf447d01d0ceb74c7ac431c28e1->enter($__internal_925ef1538b136028ca2d28d107a152f2759a2bf447d01d0ceb74c7ac431c28e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2411efe92b5dd64e540bc765c4ef90fe39195b273012a8ace2bda4ba89a88567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2411efe92b5dd64e540bc765c4ef90fe39195b273012a8ace2bda4ba89a88567->enter($__internal_2411efe92b5dd64e540bc765c4ef90fe39195b273012a8ace2bda4ba89a88567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2411efe92b5dd64e540bc765c4ef90fe39195b273012a8ace2bda4ba89a88567->leave($__internal_2411efe92b5dd64e540bc765c4ef90fe39195b273012a8ace2bda4ba89a88567_prof);

        
        $__internal_925ef1538b136028ca2d28d107a152f2759a2bf447d01d0ceb74c7ac431c28e1->leave($__internal_925ef1538b136028ca2d28d107a152f2759a2bf447d01d0ceb74c7ac431c28e1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1153bc5cf362c82ec730ce4c7283160f62b9b6c776798c56354e6d52aae6a55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1153bc5cf362c82ec730ce4c7283160f62b9b6c776798c56354e6d52aae6a55a->enter($__internal_1153bc5cf362c82ec730ce4c7283160f62b9b6c776798c56354e6d52aae6a55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1422fcf1e892248b04348ca4672a94967c5adcf8619b440e98be30cc46c4484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1422fcf1e892248b04348ca4672a94967c5adcf8619b440e98be30cc46c4484->enter($__internal_d1422fcf1e892248b04348ca4672a94967c5adcf8619b440e98be30cc46c4484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d1422fcf1e892248b04348ca4672a94967c5adcf8619b440e98be30cc46c4484->leave($__internal_d1422fcf1e892248b04348ca4672a94967c5adcf8619b440e98be30cc46c4484_prof);

        
        $__internal_1153bc5cf362c82ec730ce4c7283160f62b9b6c776798c56354e6d52aae6a55a->leave($__internal_1153bc5cf362c82ec730ce4c7283160f62b9b6c776798c56354e6d52aae6a55a_prof);

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
