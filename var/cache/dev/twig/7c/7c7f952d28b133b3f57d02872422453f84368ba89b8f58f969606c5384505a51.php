<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_855a12784cdca96c687f5e418d43d37e4026a4f32a88ae56ed8f414ceef02529 extends Twig_Template
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
        $__internal_7fd4df82f996e9ffda840d95acd9a5dd7e07c55f940397c72433e66d281692a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd4df82f996e9ffda840d95acd9a5dd7e07c55f940397c72433e66d281692a5->enter($__internal_7fd4df82f996e9ffda840d95acd9a5dd7e07c55f940397c72433e66d281692a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e7096242132c6d24a53fe79620d0a5241602fc417cc22d743e9c391a2a8163f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7096242132c6d24a53fe79620d0a5241602fc417cc22d743e9c391a2a8163f1->enter($__internal_e7096242132c6d24a53fe79620d0a5241602fc417cc22d743e9c391a2a8163f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fd4df82f996e9ffda840d95acd9a5dd7e07c55f940397c72433e66d281692a5->leave($__internal_7fd4df82f996e9ffda840d95acd9a5dd7e07c55f940397c72433e66d281692a5_prof);

        
        $__internal_e7096242132c6d24a53fe79620d0a5241602fc417cc22d743e9c391a2a8163f1->leave($__internal_e7096242132c6d24a53fe79620d0a5241602fc417cc22d743e9c391a2a8163f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a491dcebadcbea5ecdf635282ec3a4516213533ddbd602a5b4e7ecea7538e383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a491dcebadcbea5ecdf635282ec3a4516213533ddbd602a5b4e7ecea7538e383->enter($__internal_a491dcebadcbea5ecdf635282ec3a4516213533ddbd602a5b4e7ecea7538e383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc8d97e056524d6ce835aafc83f5709f19af8bcf5d83e1e2762e9f26f16dcdda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8d97e056524d6ce835aafc83f5709f19af8bcf5d83e1e2762e9f26f16dcdda->enter($__internal_bc8d97e056524d6ce835aafc83f5709f19af8bcf5d83e1e2762e9f26f16dcdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bc8d97e056524d6ce835aafc83f5709f19af8bcf5d83e1e2762e9f26f16dcdda->leave($__internal_bc8d97e056524d6ce835aafc83f5709f19af8bcf5d83e1e2762e9f26f16dcdda_prof);

        
        $__internal_a491dcebadcbea5ecdf635282ec3a4516213533ddbd602a5b4e7ecea7538e383->leave($__internal_a491dcebadcbea5ecdf635282ec3a4516213533ddbd602a5b4e7ecea7538e383_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_14e9090241fe902c5d4fb04755e213dd971e476bdaba805f52c6bb67aa707699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e9090241fe902c5d4fb04755e213dd971e476bdaba805f52c6bb67aa707699->enter($__internal_14e9090241fe902c5d4fb04755e213dd971e476bdaba805f52c6bb67aa707699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b842508c64314431a5e7f50fb42e5028b9081f736cc8a69b3a772fa20f6f0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b842508c64314431a5e7f50fb42e5028b9081f736cc8a69b3a772fa20f6f0ae->enter($__internal_4b842508c64314431a5e7f50fb42e5028b9081f736cc8a69b3a772fa20f6f0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b842508c64314431a5e7f50fb42e5028b9081f736cc8a69b3a772fa20f6f0ae->leave($__internal_4b842508c64314431a5e7f50fb42e5028b9081f736cc8a69b3a772fa20f6f0ae_prof);

        
        $__internal_14e9090241fe902c5d4fb04755e213dd971e476bdaba805f52c6bb67aa707699->leave($__internal_14e9090241fe902c5d4fb04755e213dd971e476bdaba805f52c6bb67aa707699_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccb84ae942a03d68b21c0dfc50626de027d9b94167deb7b61ff221d7279c1e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb84ae942a03d68b21c0dfc50626de027d9b94167deb7b61ff221d7279c1e1a->enter($__internal_ccb84ae942a03d68b21c0dfc50626de027d9b94167deb7b61ff221d7279c1e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_639f134d8aa4cdfa686d9f14861ab0b8b66fe5932b7fc3129160a93a69f62287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639f134d8aa4cdfa686d9f14861ab0b8b66fe5932b7fc3129160a93a69f62287->enter($__internal_639f134d8aa4cdfa686d9f14861ab0b8b66fe5932b7fc3129160a93a69f62287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_639f134d8aa4cdfa686d9f14861ab0b8b66fe5932b7fc3129160a93a69f62287->leave($__internal_639f134d8aa4cdfa686d9f14861ab0b8b66fe5932b7fc3129160a93a69f62287_prof);

        
        $__internal_ccb84ae942a03d68b21c0dfc50626de027d9b94167deb7b61ff221d7279c1e1a->leave($__internal_ccb84ae942a03d68b21c0dfc50626de027d9b94167deb7b61ff221d7279c1e1a_prof);

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
