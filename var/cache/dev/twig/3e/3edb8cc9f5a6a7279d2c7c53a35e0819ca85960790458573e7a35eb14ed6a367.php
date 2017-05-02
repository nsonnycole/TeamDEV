<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_25e86942c688dad15802e3a383740fe9031bf2d6e4df0e19b3719a97b1c17351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04035ee15371914627e899759a196284352506dc8242e13e7c470c35d3f97e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04035ee15371914627e899759a196284352506dc8242e13e7c470c35d3f97e15->enter($__internal_04035ee15371914627e899759a196284352506dc8242e13e7c470c35d3f97e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_19213cd5115e0005f23f1689aef5c596b9caf31421cc8374ceb2d716b99e935e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19213cd5115e0005f23f1689aef5c596b9caf31421cc8374ceb2d716b99e935e->enter($__internal_19213cd5115e0005f23f1689aef5c596b9caf31421cc8374ceb2d716b99e935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04035ee15371914627e899759a196284352506dc8242e13e7c470c35d3f97e15->leave($__internal_04035ee15371914627e899759a196284352506dc8242e13e7c470c35d3f97e15_prof);

        
        $__internal_19213cd5115e0005f23f1689aef5c596b9caf31421cc8374ceb2d716b99e935e->leave($__internal_19213cd5115e0005f23f1689aef5c596b9caf31421cc8374ceb2d716b99e935e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8cc74a1b1e0061c8903103fc5ea198166db6751d5c5a7253c682f2d3d0f9112f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc74a1b1e0061c8903103fc5ea198166db6751d5c5a7253c682f2d3d0f9112f->enter($__internal_8cc74a1b1e0061c8903103fc5ea198166db6751d5c5a7253c682f2d3d0f9112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a14b0b225e441f46599d089229e6ab54206efa8e8f49a76a114bca413b272c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14b0b225e441f46599d089229e6ab54206efa8e8f49a76a114bca413b272c76->enter($__internal_a14b0b225e441f46599d089229e6ab54206efa8e8f49a76a114bca413b272c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a14b0b225e441f46599d089229e6ab54206efa8e8f49a76a114bca413b272c76->leave($__internal_a14b0b225e441f46599d089229e6ab54206efa8e8f49a76a114bca413b272c76_prof);

        
        $__internal_8cc74a1b1e0061c8903103fc5ea198166db6751d5c5a7253c682f2d3d0f9112f->leave($__internal_8cc74a1b1e0061c8903103fc5ea198166db6751d5c5a7253c682f2d3d0f9112f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a14669b532afc9b215c6ab7274c4601cbac97b229435084d13cc58291aeca35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a14669b532afc9b215c6ab7274c4601cbac97b229435084d13cc58291aeca35->enter($__internal_0a14669b532afc9b215c6ab7274c4601cbac97b229435084d13cc58291aeca35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba743bf333f7658d27c5cb4d5a0f234215c52dd457f144918a2bcb9d7d97481c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba743bf333f7658d27c5cb4d5a0f234215c52dd457f144918a2bcb9d7d97481c->enter($__internal_ba743bf333f7658d27c5cb4d5a0f234215c52dd457f144918a2bcb9d7d97481c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ba743bf333f7658d27c5cb4d5a0f234215c52dd457f144918a2bcb9d7d97481c->leave($__internal_ba743bf333f7658d27c5cb4d5a0f234215c52dd457f144918a2bcb9d7d97481c_prof);

        
        $__internal_0a14669b532afc9b215c6ab7274c4601cbac97b229435084d13cc58291aeca35->leave($__internal_0a14669b532afc9b215c6ab7274c4601cbac97b229435084d13cc58291aeca35_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
