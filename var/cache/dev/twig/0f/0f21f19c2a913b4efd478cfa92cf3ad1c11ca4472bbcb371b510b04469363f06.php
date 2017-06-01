<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6908751338070e587e711005fb071cdd8df18411fde7f6039ea657ff170722d0 extends Twig_Template
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
        $__internal_f631602c9650bf3851e11d164eeeaf1dcf5f1f5c03cacaf5277540658acb7dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f631602c9650bf3851e11d164eeeaf1dcf5f1f5c03cacaf5277540658acb7dd3->enter($__internal_f631602c9650bf3851e11d164eeeaf1dcf5f1f5c03cacaf5277540658acb7dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7b83560e68b72cfa811032526b77d4e5af10b591fe69c829ce6bfb4dd4ef6fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b83560e68b72cfa811032526b77d4e5af10b591fe69c829ce6bfb4dd4ef6fbc->enter($__internal_7b83560e68b72cfa811032526b77d4e5af10b591fe69c829ce6bfb4dd4ef6fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f631602c9650bf3851e11d164eeeaf1dcf5f1f5c03cacaf5277540658acb7dd3->leave($__internal_f631602c9650bf3851e11d164eeeaf1dcf5f1f5c03cacaf5277540658acb7dd3_prof);

        
        $__internal_7b83560e68b72cfa811032526b77d4e5af10b591fe69c829ce6bfb4dd4ef6fbc->leave($__internal_7b83560e68b72cfa811032526b77d4e5af10b591fe69c829ce6bfb4dd4ef6fbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27a20383121bfb12d0da2973e923a6b8cd6fe54e77a835b7da4faa0791550bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a20383121bfb12d0da2973e923a6b8cd6fe54e77a835b7da4faa0791550bca->enter($__internal_27a20383121bfb12d0da2973e923a6b8cd6fe54e77a835b7da4faa0791550bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1fa892cf88c338425dc66a2d874d7fc6fd2909ec388a1099a29171abbcd35a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa892cf88c338425dc66a2d874d7fc6fd2909ec388a1099a29171abbcd35a09->enter($__internal_1fa892cf88c338425dc66a2d874d7fc6fd2909ec388a1099a29171abbcd35a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1fa892cf88c338425dc66a2d874d7fc6fd2909ec388a1099a29171abbcd35a09->leave($__internal_1fa892cf88c338425dc66a2d874d7fc6fd2909ec388a1099a29171abbcd35a09_prof);

        
        $__internal_27a20383121bfb12d0da2973e923a6b8cd6fe54e77a835b7da4faa0791550bca->leave($__internal_27a20383121bfb12d0da2973e923a6b8cd6fe54e77a835b7da4faa0791550bca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8fef1d27cd8d727a3f9c22cd919ac6c471077c64bb9ce9d23ef8afb363084c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fef1d27cd8d727a3f9c22cd919ac6c471077c64bb9ce9d23ef8afb363084c8d->enter($__internal_8fef1d27cd8d727a3f9c22cd919ac6c471077c64bb9ce9d23ef8afb363084c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec145a4b1acc26535e40e77d2a4cf943b2eedaaf5d86b89c6a5fab6f5f7d0054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec145a4b1acc26535e40e77d2a4cf943b2eedaaf5d86b89c6a5fab6f5f7d0054->enter($__internal_ec145a4b1acc26535e40e77d2a4cf943b2eedaaf5d86b89c6a5fab6f5f7d0054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ec145a4b1acc26535e40e77d2a4cf943b2eedaaf5d86b89c6a5fab6f5f7d0054->leave($__internal_ec145a4b1acc26535e40e77d2a4cf943b2eedaaf5d86b89c6a5fab6f5f7d0054_prof);

        
        $__internal_8fef1d27cd8d727a3f9c22cd919ac6c471077c64bb9ce9d23ef8afb363084c8d->leave($__internal_8fef1d27cd8d727a3f9c22cd919ac6c471077c64bb9ce9d23ef8afb363084c8d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ae88a409fe4af8b3bb467b8a2c88bb2327835104c0408e8aa7e35b2d7066b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae88a409fe4af8b3bb467b8a2c88bb2327835104c0408e8aa7e35b2d7066b9a->enter($__internal_1ae88a409fe4af8b3bb467b8a2c88bb2327835104c0408e8aa7e35b2d7066b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_270476a2e5a8ae232de798928961db699cd774cf5870f371b5c2618fe3bc933c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270476a2e5a8ae232de798928961db699cd774cf5870f371b5c2618fe3bc933c->enter($__internal_270476a2e5a8ae232de798928961db699cd774cf5870f371b5c2618fe3bc933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_270476a2e5a8ae232de798928961db699cd774cf5870f371b5c2618fe3bc933c->leave($__internal_270476a2e5a8ae232de798928961db699cd774cf5870f371b5c2618fe3bc933c_prof);

        
        $__internal_1ae88a409fe4af8b3bb467b8a2c88bb2327835104c0408e8aa7e35b2d7066b9a->leave($__internal_1ae88a409fe4af8b3bb467b8a2c88bb2327835104c0408e8aa7e35b2d7066b9a_prof);

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
