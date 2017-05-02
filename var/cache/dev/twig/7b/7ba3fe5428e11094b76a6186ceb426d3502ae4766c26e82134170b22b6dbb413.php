<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_ed75a41522e288eaf427201b84d0699ac569bd82c54c789ca4e617ffb891b10a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_5d5f483498ff9fe112635717d679e93a102e919e9455f63ee801ae408391025b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5f483498ff9fe112635717d679e93a102e919e9455f63ee801ae408391025b->enter($__internal_5d5f483498ff9fe112635717d679e93a102e919e9455f63ee801ae408391025b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_e29648c5897b56ab719dc4ff32415f931c8e581e0a2360145d5b7a912a0ea958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29648c5897b56ab719dc4ff32415f931c8e581e0a2360145d5b7a912a0ea958->enter($__internal_e29648c5897b56ab719dc4ff32415f931c8e581e0a2360145d5b7a912a0ea958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5f483498ff9fe112635717d679e93a102e919e9455f63ee801ae408391025b->leave($__internal_5d5f483498ff9fe112635717d679e93a102e919e9455f63ee801ae408391025b_prof);

        
        $__internal_e29648c5897b56ab719dc4ff32415f931c8e581e0a2360145d5b7a912a0ea958->leave($__internal_e29648c5897b56ab719dc4ff32415f931c8e581e0a2360145d5b7a912a0ea958_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c0f61b325e607cf729eee3e318782eb4a7b42e2f5deff2a7d1ce27c3c7b0909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0f61b325e607cf729eee3e318782eb4a7b42e2f5deff2a7d1ce27c3c7b0909->enter($__internal_5c0f61b325e607cf729eee3e318782eb4a7b42e2f5deff2a7d1ce27c3c7b0909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8121062ec879243715c3238f045d20b605e98c3931549d34ef7e5df374989104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8121062ec879243715c3238f045d20b605e98c3931549d34ef7e5df374989104->enter($__internal_8121062ec879243715c3238f045d20b605e98c3931549d34ef7e5df374989104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_8121062ec879243715c3238f045d20b605e98c3931549d34ef7e5df374989104->leave($__internal_8121062ec879243715c3238f045d20b605e98c3931549d34ef7e5df374989104_prof);

        
        $__internal_5c0f61b325e607cf729eee3e318782eb4a7b42e2f5deff2a7d1ce27c3c7b0909->leave($__internal_5c0f61b325e607cf729eee3e318782eb4a7b42e2f5deff2a7d1ce27c3c7b0909_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
