<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_26a93cc247527f79bee9d39b85cbd041f3f38a5c2a02eca18162bbf7a9cce434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6465d9a87e5fa1e970ff0e7ad8df4a89e00a2dbe72e635af02fc4ebdaa1cdb5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6465d9a87e5fa1e970ff0e7ad8df4a89e00a2dbe72e635af02fc4ebdaa1cdb5d->enter($__internal_6465d9a87e5fa1e970ff0e7ad8df4a89e00a2dbe72e635af02fc4ebdaa1cdb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_a15a266e739fee47a0079e90a0af3ae98e208de6b68385cde9b291cb0e1811d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15a266e739fee47a0079e90a0af3ae98e208de6b68385cde9b291cb0e1811d0->enter($__internal_a15a266e739fee47a0079e90a0af3ae98e208de6b68385cde9b291cb0e1811d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6465d9a87e5fa1e970ff0e7ad8df4a89e00a2dbe72e635af02fc4ebdaa1cdb5d->leave($__internal_6465d9a87e5fa1e970ff0e7ad8df4a89e00a2dbe72e635af02fc4ebdaa1cdb5d_prof);

        
        $__internal_a15a266e739fee47a0079e90a0af3ae98e208de6b68385cde9b291cb0e1811d0->leave($__internal_a15a266e739fee47a0079e90a0af3ae98e208de6b68385cde9b291cb0e1811d0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e7caff33563e568d0df55d2d95cd1ae36e2c0539f477fa1f41c532c7197b0a3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7caff33563e568d0df55d2d95cd1ae36e2c0539f477fa1f41c532c7197b0a3a->enter($__internal_e7caff33563e568d0df55d2d95cd1ae36e2c0539f477fa1f41c532c7197b0a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_adaf07e70ede74cdce578066f48f910bb8762381a4c168b0b4bcdc868743c47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adaf07e70ede74cdce578066f48f910bb8762381a4c168b0b4bcdc868743c47c->enter($__internal_adaf07e70ede74cdce578066f48f910bb8762381a4c168b0b4bcdc868743c47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_adaf07e70ede74cdce578066f48f910bb8762381a4c168b0b4bcdc868743c47c->leave($__internal_adaf07e70ede74cdce578066f48f910bb8762381a4c168b0b4bcdc868743c47c_prof);

        
        $__internal_e7caff33563e568d0df55d2d95cd1ae36e2c0539f477fa1f41c532c7197b0a3a->leave($__internal_e7caff33563e568d0df55d2d95cd1ae36e2c0539f477fa1f41c532c7197b0a3a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0ddb93dc9b5dd5d78f0a6c07c4041420638d44b63c5a3d5eabf0e2d745b17932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddb93dc9b5dd5d78f0a6c07c4041420638d44b63c5a3d5eabf0e2d745b17932->enter($__internal_0ddb93dc9b5dd5d78f0a6c07c4041420638d44b63c5a3d5eabf0e2d745b17932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_436ff410f418de13a42e53ec76bf8204014f09a4b49f5b3ec614596225210789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436ff410f418de13a42e53ec76bf8204014f09a4b49f5b3ec614596225210789->enter($__internal_436ff410f418de13a42e53ec76bf8204014f09a4b49f5b3ec614596225210789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_436ff410f418de13a42e53ec76bf8204014f09a4b49f5b3ec614596225210789->leave($__internal_436ff410f418de13a42e53ec76bf8204014f09a4b49f5b3ec614596225210789_prof);

        
        $__internal_0ddb93dc9b5dd5d78f0a6c07c4041420638d44b63c5a3d5eabf0e2d745b17932->leave($__internal_0ddb93dc9b5dd5d78f0a6c07c4041420638d44b63c5a3d5eabf0e2d745b17932_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6c5112036aaf90b84c835f93ee782f6890ec7f0c29a605982e982c7a0d08dada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5112036aaf90b84c835f93ee782f6890ec7f0c29a605982e982c7a0d08dada->enter($__internal_6c5112036aaf90b84c835f93ee782f6890ec7f0c29a605982e982c7a0d08dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7109f65340ee55f97b2d847ef407cfab1dbd9552760523175a0b485e1f67d615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7109f65340ee55f97b2d847ef407cfab1dbd9552760523175a0b485e1f67d615->enter($__internal_7109f65340ee55f97b2d847ef407cfab1dbd9552760523175a0b485e1f67d615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7109f65340ee55f97b2d847ef407cfab1dbd9552760523175a0b485e1f67d615->leave($__internal_7109f65340ee55f97b2d847ef407cfab1dbd9552760523175a0b485e1f67d615_prof);

        
        $__internal_6c5112036aaf90b84c835f93ee782f6890ec7f0c29a605982e982c7a0d08dada->leave($__internal_6c5112036aaf90b84c835f93ee782f6890ec7f0c29a605982e982c7a0d08dada_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
