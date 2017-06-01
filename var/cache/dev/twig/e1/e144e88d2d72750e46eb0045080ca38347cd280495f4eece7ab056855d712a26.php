<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_113494e1e202afcc28affecde62df6a72928b911a44d604b57ef68a7b7363e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3aac4e51be06cdd857482941e4fc7366a3edb156fcbb4d47ed3eb62f7a293fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aac4e51be06cdd857482941e4fc7366a3edb156fcbb4d47ed3eb62f7a293fe4->enter($__internal_3aac4e51be06cdd857482941e4fc7366a3edb156fcbb4d47ed3eb62f7a293fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d5e2e61515dbe58ae6c8ec33a1113adba654863c421e8861d6cadfb135464cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e2e61515dbe58ae6c8ec33a1113adba654863c421e8861d6cadfb135464cba->enter($__internal_d5e2e61515dbe58ae6c8ec33a1113adba654863c421e8861d6cadfb135464cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aac4e51be06cdd857482941e4fc7366a3edb156fcbb4d47ed3eb62f7a293fe4->leave($__internal_3aac4e51be06cdd857482941e4fc7366a3edb156fcbb4d47ed3eb62f7a293fe4_prof);

        
        $__internal_d5e2e61515dbe58ae6c8ec33a1113adba654863c421e8861d6cadfb135464cba->leave($__internal_d5e2e61515dbe58ae6c8ec33a1113adba654863c421e8861d6cadfb135464cba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1feae6689c912b42c0d3abe38652f0eae53509ed4846833960f71ca0911205c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1feae6689c912b42c0d3abe38652f0eae53509ed4846833960f71ca0911205c8->enter($__internal_1feae6689c912b42c0d3abe38652f0eae53509ed4846833960f71ca0911205c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_52494b97e7c934482c4e19046e2fa51f9775fef26c81310d44d18a622593ec1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52494b97e7c934482c4e19046e2fa51f9775fef26c81310d44d18a622593ec1d->enter($__internal_52494b97e7c934482c4e19046e2fa51f9775fef26c81310d44d18a622593ec1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_52494b97e7c934482c4e19046e2fa51f9775fef26c81310d44d18a622593ec1d->leave($__internal_52494b97e7c934482c4e19046e2fa51f9775fef26c81310d44d18a622593ec1d_prof);

        
        $__internal_1feae6689c912b42c0d3abe38652f0eae53509ed4846833960f71ca0911205c8->leave($__internal_1feae6689c912b42c0d3abe38652f0eae53509ed4846833960f71ca0911205c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
