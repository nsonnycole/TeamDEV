<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_61b18110e9a848ed04cb5dacf6e7b1582373a0775a3872119e12a07c5d6a5dbf extends Twig_Template
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
        $__internal_980dd1d4a69bdb21afc0a3557fbe4d3104707b839c42f06bb778c9dc47ed21db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980dd1d4a69bdb21afc0a3557fbe4d3104707b839c42f06bb778c9dc47ed21db->enter($__internal_980dd1d4a69bdb21afc0a3557fbe4d3104707b839c42f06bb778c9dc47ed21db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_2cc0b5bdcbe8464395c37359bc7aec42eb53d2f6f70847d985199a86c244dcff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc0b5bdcbe8464395c37359bc7aec42eb53d2f6f70847d985199a86c244dcff->enter($__internal_2cc0b5bdcbe8464395c37359bc7aec42eb53d2f6f70847d985199a86c244dcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_980dd1d4a69bdb21afc0a3557fbe4d3104707b839c42f06bb778c9dc47ed21db->leave($__internal_980dd1d4a69bdb21afc0a3557fbe4d3104707b839c42f06bb778c9dc47ed21db_prof);

        
        $__internal_2cc0b5bdcbe8464395c37359bc7aec42eb53d2f6f70847d985199a86c244dcff->leave($__internal_2cc0b5bdcbe8464395c37359bc7aec42eb53d2f6f70847d985199a86c244dcff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_078f1c5e88755274c2b6358fff050f047102c39f9d08df8c8174d5993d8d8bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078f1c5e88755274c2b6358fff050f047102c39f9d08df8c8174d5993d8d8bde->enter($__internal_078f1c5e88755274c2b6358fff050f047102c39f9d08df8c8174d5993d8d8bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d924ecf11e17ac1fd2831c180f56514b8f629eb7980d73d9afb1d8603b0619c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d924ecf11e17ac1fd2831c180f56514b8f629eb7980d73d9afb1d8603b0619c->enter($__internal_4d924ecf11e17ac1fd2831c180f56514b8f629eb7980d73d9afb1d8603b0619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4d924ecf11e17ac1fd2831c180f56514b8f629eb7980d73d9afb1d8603b0619c->leave($__internal_4d924ecf11e17ac1fd2831c180f56514b8f629eb7980d73d9afb1d8603b0619c_prof);

        
        $__internal_078f1c5e88755274c2b6358fff050f047102c39f9d08df8c8174d5993d8d8bde->leave($__internal_078f1c5e88755274c2b6358fff050f047102c39f9d08df8c8174d5993d8d8bde_prof);

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
", "@FOSUser/Registration/register.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
