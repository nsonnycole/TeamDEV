<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5acb608be11794af59317050d7533086297fdf3a53ea0d742091639fb65f94a3 extends Twig_Template
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
        $__internal_684816a4ecab3c778b92987439cb8f9ec99c12721abd722d1ce434cb3a28e4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684816a4ecab3c778b92987439cb8f9ec99c12721abd722d1ce434cb3a28e4bb->enter($__internal_684816a4ecab3c778b92987439cb8f9ec99c12721abd722d1ce434cb3a28e4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_cb345185205dc3e4b9f5de17c92e1e0692757d8de2e8734951083fb8fd7176a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb345185205dc3e4b9f5de17c92e1e0692757d8de2e8734951083fb8fd7176a5->enter($__internal_cb345185205dc3e4b9f5de17c92e1e0692757d8de2e8734951083fb8fd7176a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_684816a4ecab3c778b92987439cb8f9ec99c12721abd722d1ce434cb3a28e4bb->leave($__internal_684816a4ecab3c778b92987439cb8f9ec99c12721abd722d1ce434cb3a28e4bb_prof);

        
        $__internal_cb345185205dc3e4b9f5de17c92e1e0692757d8de2e8734951083fb8fd7176a5->leave($__internal_cb345185205dc3e4b9f5de17c92e1e0692757d8de2e8734951083fb8fd7176a5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6bc04fe763695f2b6fa0abd323a52bd201b9ad178831dd80a0a4d8c3854592ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc04fe763695f2b6fa0abd323a52bd201b9ad178831dd80a0a4d8c3854592ed->enter($__internal_6bc04fe763695f2b6fa0abd323a52bd201b9ad178831dd80a0a4d8c3854592ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_db6fe6bef3e7768a42082c48af1f3956b940c55c7838c76035f96f58683af270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6fe6bef3e7768a42082c48af1f3956b940c55c7838c76035f96f58683af270->enter($__internal_db6fe6bef3e7768a42082c48af1f3956b940c55c7838c76035f96f58683af270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_db6fe6bef3e7768a42082c48af1f3956b940c55c7838c76035f96f58683af270->leave($__internal_db6fe6bef3e7768a42082c48af1f3956b940c55c7838c76035f96f58683af270_prof);

        
        $__internal_6bc04fe763695f2b6fa0abd323a52bd201b9ad178831dd80a0a4d8c3854592ed->leave($__internal_6bc04fe763695f2b6fa0abd323a52bd201b9ad178831dd80a0a4d8c3854592ed_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b51a6fe5ab90bdb99845d814a3709de1bdeac70b7c8c5c482dc8652a467f6fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51a6fe5ab90bdb99845d814a3709de1bdeac70b7c8c5c482dc8652a467f6fbe->enter($__internal_b51a6fe5ab90bdb99845d814a3709de1bdeac70b7c8c5c482dc8652a467f6fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_006137e5217eaee71ec7d3b2aff3d358f48ddf85572de214915738c147904348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006137e5217eaee71ec7d3b2aff3d358f48ddf85572de214915738c147904348->enter($__internal_006137e5217eaee71ec7d3b2aff3d358f48ddf85572de214915738c147904348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_006137e5217eaee71ec7d3b2aff3d358f48ddf85572de214915738c147904348->leave($__internal_006137e5217eaee71ec7d3b2aff3d358f48ddf85572de214915738c147904348_prof);

        
        $__internal_b51a6fe5ab90bdb99845d814a3709de1bdeac70b7c8c5c482dc8652a467f6fbe->leave($__internal_b51a6fe5ab90bdb99845d814a3709de1bdeac70b7c8c5c482dc8652a467f6fbe_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8fe2b2bfa5a59bb161d6abef2ff4283a433798f58df14ee054042faac090974c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe2b2bfa5a59bb161d6abef2ff4283a433798f58df14ee054042faac090974c->enter($__internal_8fe2b2bfa5a59bb161d6abef2ff4283a433798f58df14ee054042faac090974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_16daca8f5fde66db302392d589dd0334c33dd9549623ed81d017b6c83148b75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16daca8f5fde66db302392d589dd0334c33dd9549623ed81d017b6c83148b75a->enter($__internal_16daca8f5fde66db302392d589dd0334c33dd9549623ed81d017b6c83148b75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_16daca8f5fde66db302392d589dd0334c33dd9549623ed81d017b6c83148b75a->leave($__internal_16daca8f5fde66db302392d589dd0334c33dd9549623ed81d017b6c83148b75a_prof);

        
        $__internal_8fe2b2bfa5a59bb161d6abef2ff4283a433798f58df14ee054042faac090974c->leave($__internal_8fe2b2bfa5a59bb161d6abef2ff4283a433798f58df14ee054042faac090974c_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
