<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_be97a72dbc6bba9c650ab60d12667160d49afc6ab4f6f29c1e6c87d81e95ef21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_7a5b802768cc55a6ccf614a00339fead08c7c652bda441b73704b8ac3b3edfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5b802768cc55a6ccf614a00339fead08c7c652bda441b73704b8ac3b3edfb1->enter($__internal_7a5b802768cc55a6ccf614a00339fead08c7c652bda441b73704b8ac3b3edfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f7c11d3e2f807e4221125bc2fa019ff8c054b357fd2be82f0f0c258deafe15b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c11d3e2f807e4221125bc2fa019ff8c054b357fd2be82f0f0c258deafe15b7->enter($__internal_f7c11d3e2f807e4221125bc2fa019ff8c054b357fd2be82f0f0c258deafe15b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a5b802768cc55a6ccf614a00339fead08c7c652bda441b73704b8ac3b3edfb1->leave($__internal_7a5b802768cc55a6ccf614a00339fead08c7c652bda441b73704b8ac3b3edfb1_prof);

        
        $__internal_f7c11d3e2f807e4221125bc2fa019ff8c054b357fd2be82f0f0c258deafe15b7->leave($__internal_f7c11d3e2f807e4221125bc2fa019ff8c054b357fd2be82f0f0c258deafe15b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fc825821b182d40404a355e0b37af4efe224811cce80de42d809a4613e03df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc825821b182d40404a355e0b37af4efe224811cce80de42d809a4613e03df3->enter($__internal_6fc825821b182d40404a355e0b37af4efe224811cce80de42d809a4613e03df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d853989e6bb1ee7ba34d2d2357f372930a26cc5e17359bbdae6e24b52645aa58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d853989e6bb1ee7ba34d2d2357f372930a26cc5e17359bbdae6e24b52645aa58->enter($__internal_d853989e6bb1ee7ba34d2d2357f372930a26cc5e17359bbdae6e24b52645aa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d853989e6bb1ee7ba34d2d2357f372930a26cc5e17359bbdae6e24b52645aa58->leave($__internal_d853989e6bb1ee7ba34d2d2357f372930a26cc5e17359bbdae6e24b52645aa58_prof);

        
        $__internal_6fc825821b182d40404a355e0b37af4efe224811cce80de42d809a4613e03df3->leave($__internal_6fc825821b182d40404a355e0b37af4efe224811cce80de42d809a4613e03df3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
