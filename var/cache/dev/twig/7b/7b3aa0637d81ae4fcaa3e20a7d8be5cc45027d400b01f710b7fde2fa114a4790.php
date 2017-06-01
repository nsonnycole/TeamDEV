<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a447075c114c893cdb6f1f19221a455bb4d491c344ccceaedec79c3b2553235a extends Twig_Template
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
        $__internal_23f459ae1d33239199eecab439aac46e03eb200f447191080d572a4fbad86a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f459ae1d33239199eecab439aac46e03eb200f447191080d572a4fbad86a53->enter($__internal_23f459ae1d33239199eecab439aac46e03eb200f447191080d572a4fbad86a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_e408b9a7263b43819eeab54710dae0216cb95b0d0b1f31a6c6cca336b01e3d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e408b9a7263b43819eeab54710dae0216cb95b0d0b1f31a6c6cca336b01e3d4d->enter($__internal_e408b9a7263b43819eeab54710dae0216cb95b0d0b1f31a6c6cca336b01e3d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_23f459ae1d33239199eecab439aac46e03eb200f447191080d572a4fbad86a53->leave($__internal_23f459ae1d33239199eecab439aac46e03eb200f447191080d572a4fbad86a53_prof);

        
        $__internal_e408b9a7263b43819eeab54710dae0216cb95b0d0b1f31a6c6cca336b01e3d4d->leave($__internal_e408b9a7263b43819eeab54710dae0216cb95b0d0b1f31a6c6cca336b01e3d4d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cbed1c552b50b3385a05b45e354e932c3c0c279c3004cef1a6b90b7b968ba586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbed1c552b50b3385a05b45e354e932c3c0c279c3004cef1a6b90b7b968ba586->enter($__internal_cbed1c552b50b3385a05b45e354e932c3c0c279c3004cef1a6b90b7b968ba586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_fb6ce948a7cbaaea039cc51356775021f8809ea4abbfa947635aa1144e431d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6ce948a7cbaaea039cc51356775021f8809ea4abbfa947635aa1144e431d79->enter($__internal_fb6ce948a7cbaaea039cc51356775021f8809ea4abbfa947635aa1144e431d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_fb6ce948a7cbaaea039cc51356775021f8809ea4abbfa947635aa1144e431d79->leave($__internal_fb6ce948a7cbaaea039cc51356775021f8809ea4abbfa947635aa1144e431d79_prof);

        
        $__internal_cbed1c552b50b3385a05b45e354e932c3c0c279c3004cef1a6b90b7b968ba586->leave($__internal_cbed1c552b50b3385a05b45e354e932c3c0c279c3004cef1a6b90b7b968ba586_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f975f9531f51a25cbd10a7dcc9c3d38845abb354abe19e3480241a0d1d45a1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f975f9531f51a25cbd10a7dcc9c3d38845abb354abe19e3480241a0d1d45a1d1->enter($__internal_f975f9531f51a25cbd10a7dcc9c3d38845abb354abe19e3480241a0d1d45a1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4f882685a8f197016c260a696e3e3a4dd48fa5dd6d1b968b7f397a717fffc78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f882685a8f197016c260a696e3e3a4dd48fa5dd6d1b968b7f397a717fffc78e->enter($__internal_4f882685a8f197016c260a696e3e3a4dd48fa5dd6d1b968b7f397a717fffc78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f882685a8f197016c260a696e3e3a4dd48fa5dd6d1b968b7f397a717fffc78e->leave($__internal_4f882685a8f197016c260a696e3e3a4dd48fa5dd6d1b968b7f397a717fffc78e_prof);

        
        $__internal_f975f9531f51a25cbd10a7dcc9c3d38845abb354abe19e3480241a0d1d45a1d1->leave($__internal_f975f9531f51a25cbd10a7dcc9c3d38845abb354abe19e3480241a0d1d45a1d1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cda5d9741f18c54b39040699ca906320476690b652c7520c184791518f03df32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda5d9741f18c54b39040699ca906320476690b652c7520c184791518f03df32->enter($__internal_cda5d9741f18c54b39040699ca906320476690b652c7520c184791518f03df32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5d7d55142aead05f18adea6e91fbb6d95fb5d632f576c0ef856db0f8ae3ad087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7d55142aead05f18adea6e91fbb6d95fb5d632f576c0ef856db0f8ae3ad087->enter($__internal_5d7d55142aead05f18adea6e91fbb6d95fb5d632f576c0ef856db0f8ae3ad087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5d7d55142aead05f18adea6e91fbb6d95fb5d632f576c0ef856db0f8ae3ad087->leave($__internal_5d7d55142aead05f18adea6e91fbb6d95fb5d632f576c0ef856db0f8ae3ad087_prof);

        
        $__internal_cda5d9741f18c54b39040699ca906320476690b652c7520c184791518f03df32->leave($__internal_cda5d9741f18c54b39040699ca906320476690b652c7520c184791518f03df32_prof);

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
