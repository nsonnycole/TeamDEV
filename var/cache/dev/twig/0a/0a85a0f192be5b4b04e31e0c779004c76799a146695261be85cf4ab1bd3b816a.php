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
        $__internal_71417a83b7cc37334605bac4eb8a42613fb6b567e0849c0d968b307dc8cc1d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71417a83b7cc37334605bac4eb8a42613fb6b567e0849c0d968b307dc8cc1d37->enter($__internal_71417a83b7cc37334605bac4eb8a42613fb6b567e0849c0d968b307dc8cc1d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bfffc861a23d630312e9a536ca26139bad6de002ee8f8c12c5a5f0f91d3efa27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfffc861a23d630312e9a536ca26139bad6de002ee8f8c12c5a5f0f91d3efa27->enter($__internal_bfffc861a23d630312e9a536ca26139bad6de002ee8f8c12c5a5f0f91d3efa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71417a83b7cc37334605bac4eb8a42613fb6b567e0849c0d968b307dc8cc1d37->leave($__internal_71417a83b7cc37334605bac4eb8a42613fb6b567e0849c0d968b307dc8cc1d37_prof);

        
        $__internal_bfffc861a23d630312e9a536ca26139bad6de002ee8f8c12c5a5f0f91d3efa27->leave($__internal_bfffc861a23d630312e9a536ca26139bad6de002ee8f8c12c5a5f0f91d3efa27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1154a5565e6ee780abf260948e35ca8cae97caa4143dd1087fa864c6b0c1ede1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1154a5565e6ee780abf260948e35ca8cae97caa4143dd1087fa864c6b0c1ede1->enter($__internal_1154a5565e6ee780abf260948e35ca8cae97caa4143dd1087fa864c6b0c1ede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47478ae4551c30e21ece9213f99054869b06e3ca727196f90eeb64dca96f1426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47478ae4551c30e21ece9213f99054869b06e3ca727196f90eeb64dca96f1426->enter($__internal_47478ae4551c30e21ece9213f99054869b06e3ca727196f90eeb64dca96f1426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_47478ae4551c30e21ece9213f99054869b06e3ca727196f90eeb64dca96f1426->leave($__internal_47478ae4551c30e21ece9213f99054869b06e3ca727196f90eeb64dca96f1426_prof);

        
        $__internal_1154a5565e6ee780abf260948e35ca8cae97caa4143dd1087fa864c6b0c1ede1->leave($__internal_1154a5565e6ee780abf260948e35ca8cae97caa4143dd1087fa864c6b0c1ede1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6809d33fece96f97ecfa855fa79a8f87fb29cfc0bb60b5a340691e5a91f416c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6809d33fece96f97ecfa855fa79a8f87fb29cfc0bb60b5a340691e5a91f416c->enter($__internal_e6809d33fece96f97ecfa855fa79a8f87fb29cfc0bb60b5a340691e5a91f416c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7470b893d144473ef710c63d016cc102f80da66560a461651c8704cdb73c4e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7470b893d144473ef710c63d016cc102f80da66560a461651c8704cdb73c4e8e->enter($__internal_7470b893d144473ef710c63d016cc102f80da66560a461651c8704cdb73c4e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7470b893d144473ef710c63d016cc102f80da66560a461651c8704cdb73c4e8e->leave($__internal_7470b893d144473ef710c63d016cc102f80da66560a461651c8704cdb73c4e8e_prof);

        
        $__internal_e6809d33fece96f97ecfa855fa79a8f87fb29cfc0bb60b5a340691e5a91f416c->leave($__internal_e6809d33fece96f97ecfa855fa79a8f87fb29cfc0bb60b5a340691e5a91f416c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_be17a9699f8ede2c4be87ec56bbee760439599c04972bd8837c59482a7498559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be17a9699f8ede2c4be87ec56bbee760439599c04972bd8837c59482a7498559->enter($__internal_be17a9699f8ede2c4be87ec56bbee760439599c04972bd8837c59482a7498559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72cfe1fdd23c7c2058b72049713a6ccf515ec27147e1b199c2d344562e903b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cfe1fdd23c7c2058b72049713a6ccf515ec27147e1b199c2d344562e903b8e->enter($__internal_72cfe1fdd23c7c2058b72049713a6ccf515ec27147e1b199c2d344562e903b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_72cfe1fdd23c7c2058b72049713a6ccf515ec27147e1b199c2d344562e903b8e->leave($__internal_72cfe1fdd23c7c2058b72049713a6ccf515ec27147e1b199c2d344562e903b8e_prof);

        
        $__internal_be17a9699f8ede2c4be87ec56bbee760439599c04972bd8837c59482a7498559->leave($__internal_be17a9699f8ede2c4be87ec56bbee760439599c04972bd8837c59482a7498559_prof);

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
