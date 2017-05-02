<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b43fb60aa81fc2ce2747dacd385641d62cead9092746acfcfeff5d333fd9d2fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_9d5ef045167742b438c032fb9a37a1caafca9b74e80ce74f335fce26d04177f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5ef045167742b438c032fb9a37a1caafca9b74e80ce74f335fce26d04177f3->enter($__internal_9d5ef045167742b438c032fb9a37a1caafca9b74e80ce74f335fce26d04177f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_b3b22cdb3c7f446825d9197b968f3354b8555e4121d3bbb66a7eb298864de013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b22cdb3c7f446825d9197b968f3354b8555e4121d3bbb66a7eb298864de013->enter($__internal_b3b22cdb3c7f446825d9197b968f3354b8555e4121d3bbb66a7eb298864de013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d5ef045167742b438c032fb9a37a1caafca9b74e80ce74f335fce26d04177f3->leave($__internal_9d5ef045167742b438c032fb9a37a1caafca9b74e80ce74f335fce26d04177f3_prof);

        
        $__internal_b3b22cdb3c7f446825d9197b968f3354b8555e4121d3bbb66a7eb298864de013->leave($__internal_b3b22cdb3c7f446825d9197b968f3354b8555e4121d3bbb66a7eb298864de013_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f96d2768d216ddb9b20d69cf0cf00187462b395fce5f9079a5e474e4ed0d66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f96d2768d216ddb9b20d69cf0cf00187462b395fce5f9079a5e474e4ed0d66b->enter($__internal_6f96d2768d216ddb9b20d69cf0cf00187462b395fce5f9079a5e474e4ed0d66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_604cd971e5a3770db2759b618e26a6185703b59e5e38481901b3e96348190efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604cd971e5a3770db2759b618e26a6185703b59e5e38481901b3e96348190efd->enter($__internal_604cd971e5a3770db2759b618e26a6185703b59e5e38481901b3e96348190efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_604cd971e5a3770db2759b618e26a6185703b59e5e38481901b3e96348190efd->leave($__internal_604cd971e5a3770db2759b618e26a6185703b59e5e38481901b3e96348190efd_prof);

        
        $__internal_6f96d2768d216ddb9b20d69cf0cf00187462b395fce5f9079a5e474e4ed0d66b->leave($__internal_6f96d2768d216ddb9b20d69cf0cf00187462b395fce5f9079a5e474e4ed0d66b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
