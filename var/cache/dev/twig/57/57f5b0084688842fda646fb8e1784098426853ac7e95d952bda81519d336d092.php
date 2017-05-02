<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_fc5dd173ced9c3d2d4d7b4839991da6af0264623338527aa2dd98dd17cb7a93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c30e2923c2c334983a7ea2b6d62659600d029bd9b8fd62e74b6dfa1f94d78f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30e2923c2c334983a7ea2b6d62659600d029bd9b8fd62e74b6dfa1f94d78f59->enter($__internal_c30e2923c2c334983a7ea2b6d62659600d029bd9b8fd62e74b6dfa1f94d78f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7d29e88610e6186c63286e92ddf65c0cbc6eef4cbe4c8ac57599c2f56a50d7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d29e88610e6186c63286e92ddf65c0cbc6eef4cbe4c8ac57599c2f56a50d7a8->enter($__internal_7d29e88610e6186c63286e92ddf65c0cbc6eef4cbe4c8ac57599c2f56a50d7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c30e2923c2c334983a7ea2b6d62659600d029bd9b8fd62e74b6dfa1f94d78f59->leave($__internal_c30e2923c2c334983a7ea2b6d62659600d029bd9b8fd62e74b6dfa1f94d78f59_prof);

        
        $__internal_7d29e88610e6186c63286e92ddf65c0cbc6eef4cbe4c8ac57599c2f56a50d7a8->leave($__internal_7d29e88610e6186c63286e92ddf65c0cbc6eef4cbe4c8ac57599c2f56a50d7a8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8e191b76ccf69a7c7828f6f68885cc787e988f9f52367e7ec93aa939668c65e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e191b76ccf69a7c7828f6f68885cc787e988f9f52367e7ec93aa939668c65e1->enter($__internal_8e191b76ccf69a7c7828f6f68885cc787e988f9f52367e7ec93aa939668c65e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2107d092b721b56e3cdb2b32a363c78393f7c9071fd79cda3e06d248d0ac0b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2107d092b721b56e3cdb2b32a363c78393f7c9071fd79cda3e06d248d0ac0b05->enter($__internal_2107d092b721b56e3cdb2b32a363c78393f7c9071fd79cda3e06d248d0ac0b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_2107d092b721b56e3cdb2b32a363c78393f7c9071fd79cda3e06d248d0ac0b05->leave($__internal_2107d092b721b56e3cdb2b32a363c78393f7c9071fd79cda3e06d248d0ac0b05_prof);

        
        $__internal_8e191b76ccf69a7c7828f6f68885cc787e988f9f52367e7ec93aa939668c65e1->leave($__internal_8e191b76ccf69a7c7828f6f68885cc787e988f9f52367e7ec93aa939668c65e1_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25f9b7dea8d2324309fa82e70d02c12f3a274c58e7b928297d70da0bb2981c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f9b7dea8d2324309fa82e70d02c12f3a274c58e7b928297d70da0bb2981c7e->enter($__internal_25f9b7dea8d2324309fa82e70d02c12f3a274c58e7b928297d70da0bb2981c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45a21aaefe351f21c1ab7ad180ff4b834c40e69186c634270e8019793643fc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a21aaefe351f21c1ab7ad180ff4b834c40e69186c634270e8019793643fc25->enter($__internal_45a21aaefe351f21c1ab7ad180ff4b834c40e69186c634270e8019793643fc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_45a21aaefe351f21c1ab7ad180ff4b834c40e69186c634270e8019793643fc25->leave($__internal_45a21aaefe351f21c1ab7ad180ff4b834c40e69186c634270e8019793643fc25_prof);

        
        $__internal_25f9b7dea8d2324309fa82e70d02c12f3a274c58e7b928297d70da0bb2981c7e->leave($__internal_25f9b7dea8d2324309fa82e70d02c12f3a274c58e7b928297d70da0bb2981c7e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
