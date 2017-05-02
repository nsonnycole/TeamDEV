<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4070d8b2c14b553e7630902266fe39d28239512ccef097fea0c5db563dcdd82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_a81d347b7b7115e47f292641fd1a5fb958d8071304280e510e402ed93bbe6a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81d347b7b7115e47f292641fd1a5fb958d8071304280e510e402ed93bbe6a68->enter($__internal_a81d347b7b7115e47f292641fd1a5fb958d8071304280e510e402ed93bbe6a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_c2ee02a63bfbb7e9a3f2a04c4b6bef8f367de5f7ad663bed0bc855990275e175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ee02a63bfbb7e9a3f2a04c4b6bef8f367de5f7ad663bed0bc855990275e175->enter($__internal_c2ee02a63bfbb7e9a3f2a04c4b6bef8f367de5f7ad663bed0bc855990275e175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a81d347b7b7115e47f292641fd1a5fb958d8071304280e510e402ed93bbe6a68->leave($__internal_a81d347b7b7115e47f292641fd1a5fb958d8071304280e510e402ed93bbe6a68_prof);

        
        $__internal_c2ee02a63bfbb7e9a3f2a04c4b6bef8f367de5f7ad663bed0bc855990275e175->leave($__internal_c2ee02a63bfbb7e9a3f2a04c4b6bef8f367de5f7ad663bed0bc855990275e175_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15fdd948a44d58222fd6e25118b4f82129116657101dab39151a9c44856bc9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15fdd948a44d58222fd6e25118b4f82129116657101dab39151a9c44856bc9f2->enter($__internal_15fdd948a44d58222fd6e25118b4f82129116657101dab39151a9c44856bc9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91854760d50cb032b88c56a87557a08d9f7fc73be1022a2d11fb54e7720c0464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91854760d50cb032b88c56a87557a08d9f7fc73be1022a2d11fb54e7720c0464->enter($__internal_91854760d50cb032b88c56a87557a08d9f7fc73be1022a2d11fb54e7720c0464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_91854760d50cb032b88c56a87557a08d9f7fc73be1022a2d11fb54e7720c0464->leave($__internal_91854760d50cb032b88c56a87557a08d9f7fc73be1022a2d11fb54e7720c0464_prof);

        
        $__internal_15fdd948a44d58222fd6e25118b4f82129116657101dab39151a9c44856bc9f2->leave($__internal_15fdd948a44d58222fd6e25118b4f82129116657101dab39151a9c44856bc9f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
