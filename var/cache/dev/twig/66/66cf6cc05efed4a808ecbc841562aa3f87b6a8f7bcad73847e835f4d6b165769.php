<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_ee4421060ddbee71c68195988269143fe5b4ad45582e2e9e8cd26dc4be08c111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e625740292471146c6bf75cabdfdc069311f2d29d977b7747c914d38bfd4da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e625740292471146c6bf75cabdfdc069311f2d29d977b7747c914d38bfd4da4->enter($__internal_6e625740292471146c6bf75cabdfdc069311f2d29d977b7747c914d38bfd4da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a4c1808176d214d4a64c4d38cab30443e43056296ea1d07de57f65beb12a8e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c1808176d214d4a64c4d38cab30443e43056296ea1d07de57f65beb12a8e35->enter($__internal_a4c1808176d214d4a64c4d38cab30443e43056296ea1d07de57f65beb12a8e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e625740292471146c6bf75cabdfdc069311f2d29d977b7747c914d38bfd4da4->leave($__internal_6e625740292471146c6bf75cabdfdc069311f2d29d977b7747c914d38bfd4da4_prof);

        
        $__internal_a4c1808176d214d4a64c4d38cab30443e43056296ea1d07de57f65beb12a8e35->leave($__internal_a4c1808176d214d4a64c4d38cab30443e43056296ea1d07de57f65beb12a8e35_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c372fbf14481ea12d1720e8c8aed66c260b979a2895ee0abdf318e0b9a83aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c372fbf14481ea12d1720e8c8aed66c260b979a2895ee0abdf318e0b9a83aaf->enter($__internal_9c372fbf14481ea12d1720e8c8aed66c260b979a2895ee0abdf318e0b9a83aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_63a7cb77a90fedfa9cacca78ff4cb62922fa9589b1451dcfabe4daab63cc1987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a7cb77a90fedfa9cacca78ff4cb62922fa9589b1451dcfabe4daab63cc1987->enter($__internal_63a7cb77a90fedfa9cacca78ff4cb62922fa9589b1451dcfabe4daab63cc1987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_63a7cb77a90fedfa9cacca78ff4cb62922fa9589b1451dcfabe4daab63cc1987->leave($__internal_63a7cb77a90fedfa9cacca78ff4cb62922fa9589b1451dcfabe4daab63cc1987_prof);

        
        $__internal_9c372fbf14481ea12d1720e8c8aed66c260b979a2895ee0abdf318e0b9a83aaf->leave($__internal_9c372fbf14481ea12d1720e8c8aed66c260b979a2895ee0abdf318e0b9a83aaf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
