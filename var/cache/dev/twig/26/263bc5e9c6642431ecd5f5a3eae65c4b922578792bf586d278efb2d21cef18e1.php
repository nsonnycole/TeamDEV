<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3426591c39ef1a3eb1648b07be1c44322ee58d8ead5cffcc457135ffa0738c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d9af77a9e16ca87726aee319a5ce0363e5e8e2e2935567f0d5f2f939d5682cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9af77a9e16ca87726aee319a5ce0363e5e8e2e2935567f0d5f2f939d5682cce->enter($__internal_d9af77a9e16ca87726aee319a5ce0363e5e8e2e2935567f0d5f2f939d5682cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_752fb86cfdcd3508eb864e93ada43318002ec4051aa5ad5ad184360be50c6c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752fb86cfdcd3508eb864e93ada43318002ec4051aa5ad5ad184360be50c6c68->enter($__internal_752fb86cfdcd3508eb864e93ada43318002ec4051aa5ad5ad184360be50c6c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9af77a9e16ca87726aee319a5ce0363e5e8e2e2935567f0d5f2f939d5682cce->leave($__internal_d9af77a9e16ca87726aee319a5ce0363e5e8e2e2935567f0d5f2f939d5682cce_prof);

        
        $__internal_752fb86cfdcd3508eb864e93ada43318002ec4051aa5ad5ad184360be50c6c68->leave($__internal_752fb86cfdcd3508eb864e93ada43318002ec4051aa5ad5ad184360be50c6c68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94deaa8e259297c6e1caea15e18e14166053d571cb7014feb2ec195f86a26ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94deaa8e259297c6e1caea15e18e14166053d571cb7014feb2ec195f86a26ad0->enter($__internal_94deaa8e259297c6e1caea15e18e14166053d571cb7014feb2ec195f86a26ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e5f8c4f2e689404e2d5eb4d3a3b8f58490e61dc82b284db0ea4a168e194b6729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f8c4f2e689404e2d5eb4d3a3b8f58490e61dc82b284db0ea4a168e194b6729->enter($__internal_e5f8c4f2e689404e2d5eb4d3a3b8f58490e61dc82b284db0ea4a168e194b6729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e5f8c4f2e689404e2d5eb4d3a3b8f58490e61dc82b284db0ea4a168e194b6729->leave($__internal_e5f8c4f2e689404e2d5eb4d3a3b8f58490e61dc82b284db0ea4a168e194b6729_prof);

        
        $__internal_94deaa8e259297c6e1caea15e18e14166053d571cb7014feb2ec195f86a26ad0->leave($__internal_94deaa8e259297c6e1caea15e18e14166053d571cb7014feb2ec195f86a26ad0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
