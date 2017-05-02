<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bd883be29e2fb58beb47db10fb9536ce575d3a3939f1de6991358be99c3b71c5 extends Twig_Template
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
        $__internal_ce4efbe39996957d2ed57ad8f28d23f0499d11012a523f12c7fbd478e21570b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4efbe39996957d2ed57ad8f28d23f0499d11012a523f12c7fbd478e21570b2->enter($__internal_ce4efbe39996957d2ed57ad8f28d23f0499d11012a523f12c7fbd478e21570b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e246d4411957bc3cee937e328f301e626f9b56747bb800ac425262ae07393fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e246d4411957bc3cee937e328f301e626f9b56747bb800ac425262ae07393fbe->enter($__internal_e246d4411957bc3cee937e328f301e626f9b56747bb800ac425262ae07393fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce4efbe39996957d2ed57ad8f28d23f0499d11012a523f12c7fbd478e21570b2->leave($__internal_ce4efbe39996957d2ed57ad8f28d23f0499d11012a523f12c7fbd478e21570b2_prof);

        
        $__internal_e246d4411957bc3cee937e328f301e626f9b56747bb800ac425262ae07393fbe->leave($__internal_e246d4411957bc3cee937e328f301e626f9b56747bb800ac425262ae07393fbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2bd47b338238922ea2c2feb423a92faf04f630347fdc77bb2ec2c229731be6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2bd47b338238922ea2c2feb423a92faf04f630347fdc77bb2ec2c229731be6a->enter($__internal_a2bd47b338238922ea2c2feb423a92faf04f630347fdc77bb2ec2c229731be6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bcc7b2af99d6629201b2db519d78ceef25454e45561e6bbc559041b995ce8bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc7b2af99d6629201b2db519d78ceef25454e45561e6bbc559041b995ce8bb5->enter($__internal_bcc7b2af99d6629201b2db519d78ceef25454e45561e6bbc559041b995ce8bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bcc7b2af99d6629201b2db519d78ceef25454e45561e6bbc559041b995ce8bb5->leave($__internal_bcc7b2af99d6629201b2db519d78ceef25454e45561e6bbc559041b995ce8bb5_prof);

        
        $__internal_a2bd47b338238922ea2c2feb423a92faf04f630347fdc77bb2ec2c229731be6a->leave($__internal_a2bd47b338238922ea2c2feb423a92faf04f630347fdc77bb2ec2c229731be6a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_913b6cf561ccfb321c378edb97a08e084a7afc77cb15ebe984c279e17b9d531a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913b6cf561ccfb321c378edb97a08e084a7afc77cb15ebe984c279e17b9d531a->enter($__internal_913b6cf561ccfb321c378edb97a08e084a7afc77cb15ebe984c279e17b9d531a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de6429f0acb619675cd425ea57991625b1aa23d2629d2d2b709135f1eaed63fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6429f0acb619675cd425ea57991625b1aa23d2629d2d2b709135f1eaed63fa->enter($__internal_de6429f0acb619675cd425ea57991625b1aa23d2629d2d2b709135f1eaed63fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de6429f0acb619675cd425ea57991625b1aa23d2629d2d2b709135f1eaed63fa->leave($__internal_de6429f0acb619675cd425ea57991625b1aa23d2629d2d2b709135f1eaed63fa_prof);

        
        $__internal_913b6cf561ccfb321c378edb97a08e084a7afc77cb15ebe984c279e17b9d531a->leave($__internal_913b6cf561ccfb321c378edb97a08e084a7afc77cb15ebe984c279e17b9d531a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fae20115bd767db2fb6efac9a4c7d6fcb5d801fb5f7a9914014a260f050cab00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae20115bd767db2fb6efac9a4c7d6fcb5d801fb5f7a9914014a260f050cab00->enter($__internal_fae20115bd767db2fb6efac9a4c7d6fcb5d801fb5f7a9914014a260f050cab00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d862b53c23d0371841e0140e1ffc2a4cd62d0cc83a13b7b2578729beb60485a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d862b53c23d0371841e0140e1ffc2a4cd62d0cc83a13b7b2578729beb60485a->enter($__internal_1d862b53c23d0371841e0140e1ffc2a4cd62d0cc83a13b7b2578729beb60485a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1d862b53c23d0371841e0140e1ffc2a4cd62d0cc83a13b7b2578729beb60485a->leave($__internal_1d862b53c23d0371841e0140e1ffc2a4cd62d0cc83a13b7b2578729beb60485a_prof);

        
        $__internal_fae20115bd767db2fb6efac9a4c7d6fcb5d801fb5f7a9914014a260f050cab00->leave($__internal_fae20115bd767db2fb6efac9a4c7d6fcb5d801fb5f7a9914014a260f050cab00_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
