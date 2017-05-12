<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
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
        $__internal_e5e8f0afa402f56122d6fc018be8e4de27ae0edad703112b716d4b2a76659df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e8f0afa402f56122d6fc018be8e4de27ae0edad703112b716d4b2a76659df3->enter($__internal_e5e8f0afa402f56122d6fc018be8e4de27ae0edad703112b716d4b2a76659df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5415ac92b9243543a9dc07d5c0ae480cd43c93ef752187ad2195999744cd08a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5415ac92b9243543a9dc07d5c0ae480cd43c93ef752187ad2195999744cd08a2->enter($__internal_5415ac92b9243543a9dc07d5c0ae480cd43c93ef752187ad2195999744cd08a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e8f0afa402f56122d6fc018be8e4de27ae0edad703112b716d4b2a76659df3->leave($__internal_e5e8f0afa402f56122d6fc018be8e4de27ae0edad703112b716d4b2a76659df3_prof);

        
        $__internal_5415ac92b9243543a9dc07d5c0ae480cd43c93ef752187ad2195999744cd08a2->leave($__internal_5415ac92b9243543a9dc07d5c0ae480cd43c93ef752187ad2195999744cd08a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a15bf7b76d0b399e1a2336df7e8cfc77d39836d86fe76bdb67005ef3820186a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15bf7b76d0b399e1a2336df7e8cfc77d39836d86fe76bdb67005ef3820186a6->enter($__internal_a15bf7b76d0b399e1a2336df7e8cfc77d39836d86fe76bdb67005ef3820186a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfe13861025ad34eb419a66c21f92fc5394374da1e576854634ebdea9925d428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe13861025ad34eb419a66c21f92fc5394374da1e576854634ebdea9925d428->enter($__internal_cfe13861025ad34eb419a66c21f92fc5394374da1e576854634ebdea9925d428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cfe13861025ad34eb419a66c21f92fc5394374da1e576854634ebdea9925d428->leave($__internal_cfe13861025ad34eb419a66c21f92fc5394374da1e576854634ebdea9925d428_prof);

        
        $__internal_a15bf7b76d0b399e1a2336df7e8cfc77d39836d86fe76bdb67005ef3820186a6->leave($__internal_a15bf7b76d0b399e1a2336df7e8cfc77d39836d86fe76bdb67005ef3820186a6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_da30883b537447f487b5c67d5ea58a00acc5dfebeeca7351b942a30bc6d03b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da30883b537447f487b5c67d5ea58a00acc5dfebeeca7351b942a30bc6d03b04->enter($__internal_da30883b537447f487b5c67d5ea58a00acc5dfebeeca7351b942a30bc6d03b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4e5922e4e73d64fe9f58efd44381f1e8fabe4cac0736964ccf65cdb69b1f2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e5922e4e73d64fe9f58efd44381f1e8fabe4cac0736964ccf65cdb69b1f2fd->enter($__internal_c4e5922e4e73d64fe9f58efd44381f1e8fabe4cac0736964ccf65cdb69b1f2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4e5922e4e73d64fe9f58efd44381f1e8fabe4cac0736964ccf65cdb69b1f2fd->leave($__internal_c4e5922e4e73d64fe9f58efd44381f1e8fabe4cac0736964ccf65cdb69b1f2fd_prof);

        
        $__internal_da30883b537447f487b5c67d5ea58a00acc5dfebeeca7351b942a30bc6d03b04->leave($__internal_da30883b537447f487b5c67d5ea58a00acc5dfebeeca7351b942a30bc6d03b04_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e145ca2bb3a31f0b6174c793032cba36b0d1b4a6ff9043c6d271579cccf2c4b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e145ca2bb3a31f0b6174c793032cba36b0d1b4a6ff9043c6d271579cccf2c4b5->enter($__internal_e145ca2bb3a31f0b6174c793032cba36b0d1b4a6ff9043c6d271579cccf2c4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4ed88a6edbc185e786ddef219052329146730ee32e347a1c19ddfee141bbaca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ed88a6edbc185e786ddef219052329146730ee32e347a1c19ddfee141bbaca->enter($__internal_b4ed88a6edbc185e786ddef219052329146730ee32e347a1c19ddfee141bbaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b4ed88a6edbc185e786ddef219052329146730ee32e347a1c19ddfee141bbaca->leave($__internal_b4ed88a6edbc185e786ddef219052329146730ee32e347a1c19ddfee141bbaca_prof);

        
        $__internal_e145ca2bb3a31f0b6174c793032cba36b0d1b4a6ff9043c6d271579cccf2c4b5->leave($__internal_e145ca2bb3a31f0b6174c793032cba36b0d1b4a6ff9043c6d271579cccf2c4b5_prof);

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
