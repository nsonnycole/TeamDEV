<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b13b0fccfcf15b2ef04c635580a353ea5c6ec2d9577cb0ff668c8a5952c4f8e5 extends Twig_Template
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
        $__internal_7b44c75c33409be9dd66f7e0759268dd71f6f94d0f38362b295a325b84c4e457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b44c75c33409be9dd66f7e0759268dd71f6f94d0f38362b295a325b84c4e457->enter($__internal_7b44c75c33409be9dd66f7e0759268dd71f6f94d0f38362b295a325b84c4e457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a75aa0fc80ade8fe1cea262bba2fcffc18e3f165651e09f3a636dfd14edd52f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75aa0fc80ade8fe1cea262bba2fcffc18e3f165651e09f3a636dfd14edd52f1->enter($__internal_a75aa0fc80ade8fe1cea262bba2fcffc18e3f165651e09f3a636dfd14edd52f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b44c75c33409be9dd66f7e0759268dd71f6f94d0f38362b295a325b84c4e457->leave($__internal_7b44c75c33409be9dd66f7e0759268dd71f6f94d0f38362b295a325b84c4e457_prof);

        
        $__internal_a75aa0fc80ade8fe1cea262bba2fcffc18e3f165651e09f3a636dfd14edd52f1->leave($__internal_a75aa0fc80ade8fe1cea262bba2fcffc18e3f165651e09f3a636dfd14edd52f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c417cd6d899058da5753f2ff12d92d2c9f0d8da046665198cb8fd217263106d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c417cd6d899058da5753f2ff12d92d2c9f0d8da046665198cb8fd217263106d->enter($__internal_7c417cd6d899058da5753f2ff12d92d2c9f0d8da046665198cb8fd217263106d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9a2b2174889e0d61d37f8e4f5b4a36425267eca24c0b578d295ed5f19379a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a2b2174889e0d61d37f8e4f5b4a36425267eca24c0b578d295ed5f19379a0c->enter($__internal_e9a2b2174889e0d61d37f8e4f5b4a36425267eca24c0b578d295ed5f19379a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e9a2b2174889e0d61d37f8e4f5b4a36425267eca24c0b578d295ed5f19379a0c->leave($__internal_e9a2b2174889e0d61d37f8e4f5b4a36425267eca24c0b578d295ed5f19379a0c_prof);

        
        $__internal_7c417cd6d899058da5753f2ff12d92d2c9f0d8da046665198cb8fd217263106d->leave($__internal_7c417cd6d899058da5753f2ff12d92d2c9f0d8da046665198cb8fd217263106d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fcbd503425881af7e469e7ebb379c594890e217d8ce650fb8d75af86d31b9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcbd503425881af7e469e7ebb379c594890e217d8ce650fb8d75af86d31b9c4->enter($__internal_8fcbd503425881af7e469e7ebb379c594890e217d8ce650fb8d75af86d31b9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_887e7b2cedd43eadf439039ccbdd146fda75f3c4a9967b15d7d905aea91f4566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887e7b2cedd43eadf439039ccbdd146fda75f3c4a9967b15d7d905aea91f4566->enter($__internal_887e7b2cedd43eadf439039ccbdd146fda75f3c4a9967b15d7d905aea91f4566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_887e7b2cedd43eadf439039ccbdd146fda75f3c4a9967b15d7d905aea91f4566->leave($__internal_887e7b2cedd43eadf439039ccbdd146fda75f3c4a9967b15d7d905aea91f4566_prof);

        
        $__internal_8fcbd503425881af7e469e7ebb379c594890e217d8ce650fb8d75af86d31b9c4->leave($__internal_8fcbd503425881af7e469e7ebb379c594890e217d8ce650fb8d75af86d31b9c4_prof);

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
