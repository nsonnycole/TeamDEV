<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70e8bda61888d1bde6a79e3e0243dd2eb99393348b83101b511f0b7ed8c21031 extends Twig_Template
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
        $__internal_b337b9dfa2ff8b1ad50ec80e0d015ea54d28e4389c38f3124b6cef791b3f0df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b337b9dfa2ff8b1ad50ec80e0d015ea54d28e4389c38f3124b6cef791b3f0df1->enter($__internal_b337b9dfa2ff8b1ad50ec80e0d015ea54d28e4389c38f3124b6cef791b3f0df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_05baff7708d642c2994282e9cc87712592d95349c07feeea96e6b1961cb7bcd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05baff7708d642c2994282e9cc87712592d95349c07feeea96e6b1961cb7bcd6->enter($__internal_05baff7708d642c2994282e9cc87712592d95349c07feeea96e6b1961cb7bcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b337b9dfa2ff8b1ad50ec80e0d015ea54d28e4389c38f3124b6cef791b3f0df1->leave($__internal_b337b9dfa2ff8b1ad50ec80e0d015ea54d28e4389c38f3124b6cef791b3f0df1_prof);

        
        $__internal_05baff7708d642c2994282e9cc87712592d95349c07feeea96e6b1961cb7bcd6->leave($__internal_05baff7708d642c2994282e9cc87712592d95349c07feeea96e6b1961cb7bcd6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72d32582f18c7ce55df133da0c6bbda4561e595e098e5afc5debab9d229c8cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d32582f18c7ce55df133da0c6bbda4561e595e098e5afc5debab9d229c8cb4->enter($__internal_72d32582f18c7ce55df133da0c6bbda4561e595e098e5afc5debab9d229c8cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dbd3673abf9d9c8c8a679792fbe6480f4be8b35d6177ddd872cf2cc741c59331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd3673abf9d9c8c8a679792fbe6480f4be8b35d6177ddd872cf2cc741c59331->enter($__internal_dbd3673abf9d9c8c8a679792fbe6480f4be8b35d6177ddd872cf2cc741c59331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dbd3673abf9d9c8c8a679792fbe6480f4be8b35d6177ddd872cf2cc741c59331->leave($__internal_dbd3673abf9d9c8c8a679792fbe6480f4be8b35d6177ddd872cf2cc741c59331_prof);

        
        $__internal_72d32582f18c7ce55df133da0c6bbda4561e595e098e5afc5debab9d229c8cb4->leave($__internal_72d32582f18c7ce55df133da0c6bbda4561e595e098e5afc5debab9d229c8cb4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e16f89b4ecb04b0b2e061bf21f3413ffd34ea85c66952617061e5ea7f176b6f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16f89b4ecb04b0b2e061bf21f3413ffd34ea85c66952617061e5ea7f176b6f3->enter($__internal_e16f89b4ecb04b0b2e061bf21f3413ffd34ea85c66952617061e5ea7f176b6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcecc53eca00b16ec728d10095b051772c7aa168b4eeddc00cfeaf95b8c9ae0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcecc53eca00b16ec728d10095b051772c7aa168b4eeddc00cfeaf95b8c9ae0d->enter($__internal_dcecc53eca00b16ec728d10095b051772c7aa168b4eeddc00cfeaf95b8c9ae0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dcecc53eca00b16ec728d10095b051772c7aa168b4eeddc00cfeaf95b8c9ae0d->leave($__internal_dcecc53eca00b16ec728d10095b051772c7aa168b4eeddc00cfeaf95b8c9ae0d_prof);

        
        $__internal_e16f89b4ecb04b0b2e061bf21f3413ffd34ea85c66952617061e5ea7f176b6f3->leave($__internal_e16f89b4ecb04b0b2e061bf21f3413ffd34ea85c66952617061e5ea7f176b6f3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cff58bc97751c27188af45d375e98cb6c7b4fa6e3f437f61949c1cdec12a09ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff58bc97751c27188af45d375e98cb6c7b4fa6e3f437f61949c1cdec12a09ab->enter($__internal_cff58bc97751c27188af45d375e98cb6c7b4fa6e3f437f61949c1cdec12a09ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15c3cfc9d3281ed34222d75c17ebf1e4063d9cc6cf347216062bc54488bfc960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c3cfc9d3281ed34222d75c17ebf1e4063d9cc6cf347216062bc54488bfc960->enter($__internal_15c3cfc9d3281ed34222d75c17ebf1e4063d9cc6cf347216062bc54488bfc960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_15c3cfc9d3281ed34222d75c17ebf1e4063d9cc6cf347216062bc54488bfc960->leave($__internal_15c3cfc9d3281ed34222d75c17ebf1e4063d9cc6cf347216062bc54488bfc960_prof);

        
        $__internal_cff58bc97751c27188af45d375e98cb6c7b4fa6e3f437f61949c1cdec12a09ab->leave($__internal_cff58bc97751c27188af45d375e98cb6c7b4fa6e3f437f61949c1cdec12a09ab_prof);

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
