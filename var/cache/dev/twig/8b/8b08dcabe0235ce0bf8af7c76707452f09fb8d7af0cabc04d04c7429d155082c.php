<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_aa1cd6943fa9abe787c2a44e90ab83d820d0cb560028e7bdcc636d57e12bed77 extends Twig_Template
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
        $__internal_15d4dad391aca4f20c46f72e291235f153e299cad1fae207a079c403b91079a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d4dad391aca4f20c46f72e291235f153e299cad1fae207a079c403b91079a0->enter($__internal_15d4dad391aca4f20c46f72e291235f153e299cad1fae207a079c403b91079a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_8f25f018795454e65a59f68c9b6764ca91aac6be1140fde07835992b93be3f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f25f018795454e65a59f68c9b6764ca91aac6be1140fde07835992b93be3f9c->enter($__internal_8f25f018795454e65a59f68c9b6764ca91aac6be1140fde07835992b93be3f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_15d4dad391aca4f20c46f72e291235f153e299cad1fae207a079c403b91079a0->leave($__internal_15d4dad391aca4f20c46f72e291235f153e299cad1fae207a079c403b91079a0_prof);

        
        $__internal_8f25f018795454e65a59f68c9b6764ca91aac6be1140fde07835992b93be3f9c->leave($__internal_8f25f018795454e65a59f68c9b6764ca91aac6be1140fde07835992b93be3f9c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_776d6636acc637dd89a62a566dd7d1ca51e7efc64ba067d8eb12a6b11a928ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776d6636acc637dd89a62a566dd7d1ca51e7efc64ba067d8eb12a6b11a928ded->enter($__internal_776d6636acc637dd89a62a566dd7d1ca51e7efc64ba067d8eb12a6b11a928ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c60df787d263728910e1ca1bee9d754658385da78d4051347277779d1593a289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60df787d263728910e1ca1bee9d754658385da78d4051347277779d1593a289->enter($__internal_c60df787d263728910e1ca1bee9d754658385da78d4051347277779d1593a289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c60df787d263728910e1ca1bee9d754658385da78d4051347277779d1593a289->leave($__internal_c60df787d263728910e1ca1bee9d754658385da78d4051347277779d1593a289_prof);

        
        $__internal_776d6636acc637dd89a62a566dd7d1ca51e7efc64ba067d8eb12a6b11a928ded->leave($__internal_776d6636acc637dd89a62a566dd7d1ca51e7efc64ba067d8eb12a6b11a928ded_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_26c60175479e0dbfbc70ffe046a6373ac0ed5403eac6bba7f78c2979e6594c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c60175479e0dbfbc70ffe046a6373ac0ed5403eac6bba7f78c2979e6594c82->enter($__internal_26c60175479e0dbfbc70ffe046a6373ac0ed5403eac6bba7f78c2979e6594c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_832163cc542f9dac747e8f215dc851af305a54e1c47cc741da6fce726660355c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832163cc542f9dac747e8f215dc851af305a54e1c47cc741da6fce726660355c->enter($__internal_832163cc542f9dac747e8f215dc851af305a54e1c47cc741da6fce726660355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_832163cc542f9dac747e8f215dc851af305a54e1c47cc741da6fce726660355c->leave($__internal_832163cc542f9dac747e8f215dc851af305a54e1c47cc741da6fce726660355c_prof);

        
        $__internal_26c60175479e0dbfbc70ffe046a6373ac0ed5403eac6bba7f78c2979e6594c82->leave($__internal_26c60175479e0dbfbc70ffe046a6373ac0ed5403eac6bba7f78c2979e6594c82_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_25e0b82440df99f793d6fc94dc6914e40651506532c96cc1146338cf6a1edbb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e0b82440df99f793d6fc94dc6914e40651506532c96cc1146338cf6a1edbb2->enter($__internal_25e0b82440df99f793d6fc94dc6914e40651506532c96cc1146338cf6a1edbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_87994fe3fa59d8093543cca2c118962982c3e3cd1ff1f7a1d47faf7bc056cfe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87994fe3fa59d8093543cca2c118962982c3e3cd1ff1f7a1d47faf7bc056cfe5->enter($__internal_87994fe3fa59d8093543cca2c118962982c3e3cd1ff1f7a1d47faf7bc056cfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_87994fe3fa59d8093543cca2c118962982c3e3cd1ff1f7a1d47faf7bc056cfe5->leave($__internal_87994fe3fa59d8093543cca2c118962982c3e3cd1ff1f7a1d47faf7bc056cfe5_prof);

        
        $__internal_25e0b82440df99f793d6fc94dc6914e40651506532c96cc1146338cf6a1edbb2->leave($__internal_25e0b82440df99f793d6fc94dc6914e40651506532c96cc1146338cf6a1edbb2_prof);

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
