<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_e2067775c91bb8ff60fcf89f770f6a8778a302ac9a0b6d5cf6e4477bc9b7b8ea extends Twig_Template
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
        $__internal_dd645b76d770cc4ebcfe4fbc991ad3bfe4a876a0bd82a84c122fc14c528aab33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd645b76d770cc4ebcfe4fbc991ad3bfe4a876a0bd82a84c122fc14c528aab33->enter($__internal_dd645b76d770cc4ebcfe4fbc991ad3bfe4a876a0bd82a84c122fc14c528aab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3d37e7fea2a1f8f02a9c5b642615d7df224bfbc9ea537f4328a88c7cbe0a9a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d37e7fea2a1f8f02a9c5b642615d7df224bfbc9ea537f4328a88c7cbe0a9a11->enter($__internal_3d37e7fea2a1f8f02a9c5b642615d7df224bfbc9ea537f4328a88c7cbe0a9a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd645b76d770cc4ebcfe4fbc991ad3bfe4a876a0bd82a84c122fc14c528aab33->leave($__internal_dd645b76d770cc4ebcfe4fbc991ad3bfe4a876a0bd82a84c122fc14c528aab33_prof);

        
        $__internal_3d37e7fea2a1f8f02a9c5b642615d7df224bfbc9ea537f4328a88c7cbe0a9a11->leave($__internal_3d37e7fea2a1f8f02a9c5b642615d7df224bfbc9ea537f4328a88c7cbe0a9a11_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_09040e60b67d0951882842c17bd5b960ae78f3985e85404a70317f57db4d80e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09040e60b67d0951882842c17bd5b960ae78f3985e85404a70317f57db4d80e2->enter($__internal_09040e60b67d0951882842c17bd5b960ae78f3985e85404a70317f57db4d80e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ee52d9ff3ce1c116123065a06e8d6e55b69c598e38cab9894915bd16fbc55a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee52d9ff3ce1c116123065a06e8d6e55b69c598e38cab9894915bd16fbc55a9e->enter($__internal_ee52d9ff3ce1c116123065a06e8d6e55b69c598e38cab9894915bd16fbc55a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ee52d9ff3ce1c116123065a06e8d6e55b69c598e38cab9894915bd16fbc55a9e->leave($__internal_ee52d9ff3ce1c116123065a06e8d6e55b69c598e38cab9894915bd16fbc55a9e_prof);

        
        $__internal_09040e60b67d0951882842c17bd5b960ae78f3985e85404a70317f57db4d80e2->leave($__internal_09040e60b67d0951882842c17bd5b960ae78f3985e85404a70317f57db4d80e2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0385ad0c5c60f046988c37651b357103aff4310e4bae94360b07b5560bc75722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0385ad0c5c60f046988c37651b357103aff4310e4bae94360b07b5560bc75722->enter($__internal_0385ad0c5c60f046988c37651b357103aff4310e4bae94360b07b5560bc75722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d09030176b51080fbb7a1b37a493e9c21a5b6bc2e7a9609f397c159a03b4d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d09030176b51080fbb7a1b37a493e9c21a5b6bc2e7a9609f397c159a03b4d18->enter($__internal_3d09030176b51080fbb7a1b37a493e9c21a5b6bc2e7a9609f397c159a03b4d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3d09030176b51080fbb7a1b37a493e9c21a5b6bc2e7a9609f397c159a03b4d18->leave($__internal_3d09030176b51080fbb7a1b37a493e9c21a5b6bc2e7a9609f397c159a03b4d18_prof);

        
        $__internal_0385ad0c5c60f046988c37651b357103aff4310e4bae94360b07b5560bc75722->leave($__internal_0385ad0c5c60f046988c37651b357103aff4310e4bae94360b07b5560bc75722_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
