<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_01bbd6617ac499b89c74ba0d469c879958c6fa7c4c06d9c409c1f29978d772a8 extends Twig_Template
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
        $__internal_474981b2c7a9ffd36192d821b3b3bcbc2a0f613b7d6c6577f29aee493bc660e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474981b2c7a9ffd36192d821b3b3bcbc2a0f613b7d6c6577f29aee493bc660e1->enter($__internal_474981b2c7a9ffd36192d821b3b3bcbc2a0f613b7d6c6577f29aee493bc660e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_d9f8d5e95d4dc4d4b9377d16938ec1506efde08922f22ce01a6d5a6badd4b28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f8d5e95d4dc4d4b9377d16938ec1506efde08922f22ce01a6d5a6badd4b28b->enter($__internal_d9f8d5e95d4dc4d4b9377d16938ec1506efde08922f22ce01a6d5a6badd4b28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_474981b2c7a9ffd36192d821b3b3bcbc2a0f613b7d6c6577f29aee493bc660e1->leave($__internal_474981b2c7a9ffd36192d821b3b3bcbc2a0f613b7d6c6577f29aee493bc660e1_prof);

        
        $__internal_d9f8d5e95d4dc4d4b9377d16938ec1506efde08922f22ce01a6d5a6badd4b28b->leave($__internal_d9f8d5e95d4dc4d4b9377d16938ec1506efde08922f22ce01a6d5a6badd4b28b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6f8a377d12e083cb64924ba47720ec8904f4155682b4df6b08509b9654eca54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8a377d12e083cb64924ba47720ec8904f4155682b4df6b08509b9654eca54f->enter($__internal_6f8a377d12e083cb64924ba47720ec8904f4155682b4df6b08509b9654eca54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_cb6de29678727b36b6d35d42d6023c2263738a508c7aa6702f1f8e33cb3a4299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6de29678727b36b6d35d42d6023c2263738a508c7aa6702f1f8e33cb3a4299->enter($__internal_cb6de29678727b36b6d35d42d6023c2263738a508c7aa6702f1f8e33cb3a4299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_cb6de29678727b36b6d35d42d6023c2263738a508c7aa6702f1f8e33cb3a4299->leave($__internal_cb6de29678727b36b6d35d42d6023c2263738a508c7aa6702f1f8e33cb3a4299_prof);

        
        $__internal_6f8a377d12e083cb64924ba47720ec8904f4155682b4df6b08509b9654eca54f->leave($__internal_6f8a377d12e083cb64924ba47720ec8904f4155682b4df6b08509b9654eca54f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6f086bdf1e1f1b411c23b097c5e9049fc601550f6fc5e7098209ea3a7736d5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f086bdf1e1f1b411c23b097c5e9049fc601550f6fc5e7098209ea3a7736d5b5->enter($__internal_6f086bdf1e1f1b411c23b097c5e9049fc601550f6fc5e7098209ea3a7736d5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bb40f5042b7152736b8b2a9242e4d7935036fbb25cd4dfd41eea77a490f68748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb40f5042b7152736b8b2a9242e4d7935036fbb25cd4dfd41eea77a490f68748->enter($__internal_bb40f5042b7152736b8b2a9242e4d7935036fbb25cd4dfd41eea77a490f68748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bb40f5042b7152736b8b2a9242e4d7935036fbb25cd4dfd41eea77a490f68748->leave($__internal_bb40f5042b7152736b8b2a9242e4d7935036fbb25cd4dfd41eea77a490f68748_prof);

        
        $__internal_6f086bdf1e1f1b411c23b097c5e9049fc601550f6fc5e7098209ea3a7736d5b5->leave($__internal_6f086bdf1e1f1b411c23b097c5e9049fc601550f6fc5e7098209ea3a7736d5b5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_072b4eb675918f19475120d192d56e7c6889fc3f47a2223b974831d777bfe017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072b4eb675918f19475120d192d56e7c6889fc3f47a2223b974831d777bfe017->enter($__internal_072b4eb675918f19475120d192d56e7c6889fc3f47a2223b974831d777bfe017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_59d0de133b083f2f7d7566fcabff181dd7a5ed2f5fb2cd6b3fd7768e63892b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d0de133b083f2f7d7566fcabff181dd7a5ed2f5fb2cd6b3fd7768e63892b8a->enter($__internal_59d0de133b083f2f7d7566fcabff181dd7a5ed2f5fb2cd6b3fd7768e63892b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_59d0de133b083f2f7d7566fcabff181dd7a5ed2f5fb2cd6b3fd7768e63892b8a->leave($__internal_59d0de133b083f2f7d7566fcabff181dd7a5ed2f5fb2cd6b3fd7768e63892b8a_prof);

        
        $__internal_072b4eb675918f19475120d192d56e7c6889fc3f47a2223b974831d777bfe017->leave($__internal_072b4eb675918f19475120d192d56e7c6889fc3f47a2223b974831d777bfe017_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
