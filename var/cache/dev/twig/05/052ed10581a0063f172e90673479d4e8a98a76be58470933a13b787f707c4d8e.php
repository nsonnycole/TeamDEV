<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_f61eda18e879d5783ba73dafcd576036bbf91245b51183abc7d5b9a0fe167060 extends Twig_Template
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
        $__internal_6eff9ea5394b5f69318c6010321faa135fa9633d63251596373d9e0c26274a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eff9ea5394b5f69318c6010321faa135fa9633d63251596373d9e0c26274a73->enter($__internal_6eff9ea5394b5f69318c6010321faa135fa9633d63251596373d9e0c26274a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_96a51b279d82c71fc3a5fa97845232dfe4341bae4ebc5071eda470af203653bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a51b279d82c71fc3a5fa97845232dfe4341bae4ebc5071eda470af203653bc->enter($__internal_96a51b279d82c71fc3a5fa97845232dfe4341bae4ebc5071eda470af203653bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eff9ea5394b5f69318c6010321faa135fa9633d63251596373d9e0c26274a73->leave($__internal_6eff9ea5394b5f69318c6010321faa135fa9633d63251596373d9e0c26274a73_prof);

        
        $__internal_96a51b279d82c71fc3a5fa97845232dfe4341bae4ebc5071eda470af203653bc->leave($__internal_96a51b279d82c71fc3a5fa97845232dfe4341bae4ebc5071eda470af203653bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97f089939f13c41ccd0ad4dec1ca44b95af56f29ac11fa05ee4db7c73d30bb7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f089939f13c41ccd0ad4dec1ca44b95af56f29ac11fa05ee4db7c73d30bb7d->enter($__internal_97f089939f13c41ccd0ad4dec1ca44b95af56f29ac11fa05ee4db7c73d30bb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d5b0364fe9545b193fb25723f396fa2bbcb596660a93bc017640527863e5a8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b0364fe9545b193fb25723f396fa2bbcb596660a93bc017640527863e5a8ae->enter($__internal_d5b0364fe9545b193fb25723f396fa2bbcb596660a93bc017640527863e5a8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d5b0364fe9545b193fb25723f396fa2bbcb596660a93bc017640527863e5a8ae->leave($__internal_d5b0364fe9545b193fb25723f396fa2bbcb596660a93bc017640527863e5a8ae_prof);

        
        $__internal_97f089939f13c41ccd0ad4dec1ca44b95af56f29ac11fa05ee4db7c73d30bb7d->leave($__internal_97f089939f13c41ccd0ad4dec1ca44b95af56f29ac11fa05ee4db7c73d30bb7d_prof);

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
