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
        $__internal_720c199258e39d7e661d1413b3058d1a0e2fbf68055a06fbf5a8371f8a3adfeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720c199258e39d7e661d1413b3058d1a0e2fbf68055a06fbf5a8371f8a3adfeb->enter($__internal_720c199258e39d7e661d1413b3058d1a0e2fbf68055a06fbf5a8371f8a3adfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cf9998fadbc2f241228013acf36ae46a3df3542611d3a76e1fc725959855f7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9998fadbc2f241228013acf36ae46a3df3542611d3a76e1fc725959855f7be->enter($__internal_cf9998fadbc2f241228013acf36ae46a3df3542611d3a76e1fc725959855f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_720c199258e39d7e661d1413b3058d1a0e2fbf68055a06fbf5a8371f8a3adfeb->leave($__internal_720c199258e39d7e661d1413b3058d1a0e2fbf68055a06fbf5a8371f8a3adfeb_prof);

        
        $__internal_cf9998fadbc2f241228013acf36ae46a3df3542611d3a76e1fc725959855f7be->leave($__internal_cf9998fadbc2f241228013acf36ae46a3df3542611d3a76e1fc725959855f7be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ff1a5e59dc1145133284aeda02af5dc49f90037681eb2f1767d6d4865f8f134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff1a5e59dc1145133284aeda02af5dc49f90037681eb2f1767d6d4865f8f134->enter($__internal_9ff1a5e59dc1145133284aeda02af5dc49f90037681eb2f1767d6d4865f8f134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d031b9d0389ebdb3f1a32e98f312ae7c8c38edf2465e95cdb599b063f4a16a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d031b9d0389ebdb3f1a32e98f312ae7c8c38edf2465e95cdb599b063f4a16a55->enter($__internal_d031b9d0389ebdb3f1a32e98f312ae7c8c38edf2465e95cdb599b063f4a16a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d031b9d0389ebdb3f1a32e98f312ae7c8c38edf2465e95cdb599b063f4a16a55->leave($__internal_d031b9d0389ebdb3f1a32e98f312ae7c8c38edf2465e95cdb599b063f4a16a55_prof);

        
        $__internal_9ff1a5e59dc1145133284aeda02af5dc49f90037681eb2f1767d6d4865f8f134->leave($__internal_9ff1a5e59dc1145133284aeda02af5dc49f90037681eb2f1767d6d4865f8f134_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f4190c25502def117bbd3a518bf9996438283ce53c894a9fe478b897c8b3d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4190c25502def117bbd3a518bf9996438283ce53c894a9fe478b897c8b3d5b->enter($__internal_1f4190c25502def117bbd3a518bf9996438283ce53c894a9fe478b897c8b3d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7393f4ff3e50e1a2c1646f8426ec6d8436d933331f57a28564e40c6d188cf5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7393f4ff3e50e1a2c1646f8426ec6d8436d933331f57a28564e40c6d188cf5a8->enter($__internal_7393f4ff3e50e1a2c1646f8426ec6d8436d933331f57a28564e40c6d188cf5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7393f4ff3e50e1a2c1646f8426ec6d8436d933331f57a28564e40c6d188cf5a8->leave($__internal_7393f4ff3e50e1a2c1646f8426ec6d8436d933331f57a28564e40c6d188cf5a8_prof);

        
        $__internal_1f4190c25502def117bbd3a518bf9996438283ce53c894a9fe478b897c8b3d5b->leave($__internal_1f4190c25502def117bbd3a518bf9996438283ce53c894a9fe478b897c8b3d5b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb7a28b2ce7c4641ad44395b462a197cb341259994871be3592aba5daab4bc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7a28b2ce7c4641ad44395b462a197cb341259994871be3592aba5daab4bc4c->enter($__internal_bb7a28b2ce7c4641ad44395b462a197cb341259994871be3592aba5daab4bc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1339ba12221f8b989b337f9544968d78cb97180bd185e18bf8508767ad3f0be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1339ba12221f8b989b337f9544968d78cb97180bd185e18bf8508767ad3f0be9->enter($__internal_1339ba12221f8b989b337f9544968d78cb97180bd185e18bf8508767ad3f0be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1339ba12221f8b989b337f9544968d78cb97180bd185e18bf8508767ad3f0be9->leave($__internal_1339ba12221f8b989b337f9544968d78cb97180bd185e18bf8508767ad3f0be9_prof);

        
        $__internal_bb7a28b2ce7c4641ad44395b462a197cb341259994871be3592aba5daab4bc4c->leave($__internal_bb7a28b2ce7c4641ad44395b462a197cb341259994871be3592aba5daab4bc4c_prof);

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
