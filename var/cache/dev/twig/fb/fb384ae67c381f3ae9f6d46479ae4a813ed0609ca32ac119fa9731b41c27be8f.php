<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0d36f95f26105df0c7babebb0766bea5e6c2693e0e9e875288e1acaa3a476ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc82930e4f7b2f23af78a6842bff06f1a10453093ceead74e6474ebe663621dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc82930e4f7b2f23af78a6842bff06f1a10453093ceead74e6474ebe663621dd->enter($__internal_dc82930e4f7b2f23af78a6842bff06f1a10453093ceead74e6474ebe663621dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fc6a2e3c087a0e31fc3461e9ea768c3abdd1211b2f16d16ae9c6c7c6d932df73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6a2e3c087a0e31fc3461e9ea768c3abdd1211b2f16d16ae9c6c7c6d932df73->enter($__internal_fc6a2e3c087a0e31fc3461e9ea768c3abdd1211b2f16d16ae9c6c7c6d932df73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc82930e4f7b2f23af78a6842bff06f1a10453093ceead74e6474ebe663621dd->leave($__internal_dc82930e4f7b2f23af78a6842bff06f1a10453093ceead74e6474ebe663621dd_prof);

        
        $__internal_fc6a2e3c087a0e31fc3461e9ea768c3abdd1211b2f16d16ae9c6c7c6d932df73->leave($__internal_fc6a2e3c087a0e31fc3461e9ea768c3abdd1211b2f16d16ae9c6c7c6d932df73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fece20cfe35806a748353d94a1e64057e3bb7b258eb95f1e248df14ce0de597f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fece20cfe35806a748353d94a1e64057e3bb7b258eb95f1e248df14ce0de597f->enter($__internal_fece20cfe35806a748353d94a1e64057e3bb7b258eb95f1e248df14ce0de597f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9daca13ac2307c347578aae21ace5cb39cf6627bcbe642d8d05d44aa25ba9dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9daca13ac2307c347578aae21ace5cb39cf6627bcbe642d8d05d44aa25ba9dae->enter($__internal_9daca13ac2307c347578aae21ace5cb39cf6627bcbe642d8d05d44aa25ba9dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9daca13ac2307c347578aae21ace5cb39cf6627bcbe642d8d05d44aa25ba9dae->leave($__internal_9daca13ac2307c347578aae21ace5cb39cf6627bcbe642d8d05d44aa25ba9dae_prof);

        
        $__internal_fece20cfe35806a748353d94a1e64057e3bb7b258eb95f1e248df14ce0de597f->leave($__internal_fece20cfe35806a748353d94a1e64057e3bb7b258eb95f1e248df14ce0de597f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_de400e233cb06aaa331a49b39323e1bff58eaa9f09664c29a9a000458b752f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de400e233cb06aaa331a49b39323e1bff58eaa9f09664c29a9a000458b752f89->enter($__internal_de400e233cb06aaa331a49b39323e1bff58eaa9f09664c29a9a000458b752f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5706e8bf809dc4feeaa948a4154fd4d3a736236d55619fa1391478d1fb402bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5706e8bf809dc4feeaa948a4154fd4d3a736236d55619fa1391478d1fb402bc->enter($__internal_c5706e8bf809dc4feeaa948a4154fd4d3a736236d55619fa1391478d1fb402bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5706e8bf809dc4feeaa948a4154fd4d3a736236d55619fa1391478d1fb402bc->leave($__internal_c5706e8bf809dc4feeaa948a4154fd4d3a736236d55619fa1391478d1fb402bc_prof);

        
        $__internal_de400e233cb06aaa331a49b39323e1bff58eaa9f09664c29a9a000458b752f89->leave($__internal_de400e233cb06aaa331a49b39323e1bff58eaa9f09664c29a9a000458b752f89_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd12a3ea3cd304d5cd90a014d027461d8a534a38b086d253ca9656297b4119f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd12a3ea3cd304d5cd90a014d027461d8a534a38b086d253ca9656297b4119f6->enter($__internal_bd12a3ea3cd304d5cd90a014d027461d8a534a38b086d253ca9656297b4119f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dc5b27fbe4353e9413849d90271755f06192b8aece042df05d6cc69c4ebc836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc5b27fbe4353e9413849d90271755f06192b8aece042df05d6cc69c4ebc836->enter($__internal_4dc5b27fbe4353e9413849d90271755f06192b8aece042df05d6cc69c4ebc836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4dc5b27fbe4353e9413849d90271755f06192b8aece042df05d6cc69c4ebc836->leave($__internal_4dc5b27fbe4353e9413849d90271755f06192b8aece042df05d6cc69c4ebc836_prof);

        
        $__internal_bd12a3ea3cd304d5cd90a014d027461d8a534a38b086d253ca9656297b4119f6->leave($__internal_bd12a3ea3cd304d5cd90a014d027461d8a534a38b086d253ca9656297b4119f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
