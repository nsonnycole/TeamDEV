<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_20babe1c51a66bc601d9c7de254df66e819897b762ca07cb6d76dc8a3a222f94 extends Twig_Template
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
        $__internal_13ed8e404ca4637f8f6612bc9cf7a12c89ffb9c713b2ab5adc3e2f75fc203835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ed8e404ca4637f8f6612bc9cf7a12c89ffb9c713b2ab5adc3e2f75fc203835->enter($__internal_13ed8e404ca4637f8f6612bc9cf7a12c89ffb9c713b2ab5adc3e2f75fc203835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_44a82cb638e60bfa3e0a3c3c5a7a7fdafc9d28576fa9e848a91f9e1a72c5dac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a82cb638e60bfa3e0a3c3c5a7a7fdafc9d28576fa9e848a91f9e1a72c5dac6->enter($__internal_44a82cb638e60bfa3e0a3c3c5a7a7fdafc9d28576fa9e848a91f9e1a72c5dac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ed8e404ca4637f8f6612bc9cf7a12c89ffb9c713b2ab5adc3e2f75fc203835->leave($__internal_13ed8e404ca4637f8f6612bc9cf7a12c89ffb9c713b2ab5adc3e2f75fc203835_prof);

        
        $__internal_44a82cb638e60bfa3e0a3c3c5a7a7fdafc9d28576fa9e848a91f9e1a72c5dac6->leave($__internal_44a82cb638e60bfa3e0a3c3c5a7a7fdafc9d28576fa9e848a91f9e1a72c5dac6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec89d841558539224799be1af837dd41120ba63a60f6e38c38d6774331471bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec89d841558539224799be1af837dd41120ba63a60f6e38c38d6774331471bc4->enter($__internal_ec89d841558539224799be1af837dd41120ba63a60f6e38c38d6774331471bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5f157b1bc44af0406f7d7f61a0b33ea46ec09d5d59260bfd480484f3b6e4ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f157b1bc44af0406f7d7f61a0b33ea46ec09d5d59260bfd480484f3b6e4ef7->enter($__internal_a5f157b1bc44af0406f7d7f61a0b33ea46ec09d5d59260bfd480484f3b6e4ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a5f157b1bc44af0406f7d7f61a0b33ea46ec09d5d59260bfd480484f3b6e4ef7->leave($__internal_a5f157b1bc44af0406f7d7f61a0b33ea46ec09d5d59260bfd480484f3b6e4ef7_prof);

        
        $__internal_ec89d841558539224799be1af837dd41120ba63a60f6e38c38d6774331471bc4->leave($__internal_ec89d841558539224799be1af837dd41120ba63a60f6e38c38d6774331471bc4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_52a48b8612f5bcab46ddf7f895e473889153f1798afc678ee6e3d52835e31aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a48b8612f5bcab46ddf7f895e473889153f1798afc678ee6e3d52835e31aa5->enter($__internal_52a48b8612f5bcab46ddf7f895e473889153f1798afc678ee6e3d52835e31aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01a5cab0344ae2d2d7e79db2e9288492aac793b474bb9f861399be79e3701b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a5cab0344ae2d2d7e79db2e9288492aac793b474bb9f861399be79e3701b82->enter($__internal_01a5cab0344ae2d2d7e79db2e9288492aac793b474bb9f861399be79e3701b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_01a5cab0344ae2d2d7e79db2e9288492aac793b474bb9f861399be79e3701b82->leave($__internal_01a5cab0344ae2d2d7e79db2e9288492aac793b474bb9f861399be79e3701b82_prof);

        
        $__internal_52a48b8612f5bcab46ddf7f895e473889153f1798afc678ee6e3d52835e31aa5->leave($__internal_52a48b8612f5bcab46ddf7f895e473889153f1798afc678ee6e3d52835e31aa5_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
