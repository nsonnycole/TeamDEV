<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_aa9610f56b6d80e8d4f613e63298a9197c39b8c6483ce5d852c3575cf7ca1b0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_099ba446e62adf0369e8281cb0cdfe40c715c94e2c187d5aa3b6a86f89763785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099ba446e62adf0369e8281cb0cdfe40c715c94e2c187d5aa3b6a86f89763785->enter($__internal_099ba446e62adf0369e8281cb0cdfe40c715c94e2c187d5aa3b6a86f89763785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_30a8ab9a51a6993c5c90f51708c1b074393e4f144c92425622b8c3ffe402c0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a8ab9a51a6993c5c90f51708c1b074393e4f144c92425622b8c3ffe402c0c3->enter($__internal_30a8ab9a51a6993c5c90f51708c1b074393e4f144c92425622b8c3ffe402c0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099ba446e62adf0369e8281cb0cdfe40c715c94e2c187d5aa3b6a86f89763785->leave($__internal_099ba446e62adf0369e8281cb0cdfe40c715c94e2c187d5aa3b6a86f89763785_prof);

        
        $__internal_30a8ab9a51a6993c5c90f51708c1b074393e4f144c92425622b8c3ffe402c0c3->leave($__internal_30a8ab9a51a6993c5c90f51708c1b074393e4f144c92425622b8c3ffe402c0c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3456f4c9b2ebf20a52f0f0d66e67052308f493453162d6afab2b370b29e4e0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3456f4c9b2ebf20a52f0f0d66e67052308f493453162d6afab2b370b29e4e0f3->enter($__internal_3456f4c9b2ebf20a52f0f0d66e67052308f493453162d6afab2b370b29e4e0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_560c44284ec36f47a6ac75cfffcafc938f9ae347882102d412733175c576d063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560c44284ec36f47a6ac75cfffcafc938f9ae347882102d412733175c576d063->enter($__internal_560c44284ec36f47a6ac75cfffcafc938f9ae347882102d412733175c576d063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_560c44284ec36f47a6ac75cfffcafc938f9ae347882102d412733175c576d063->leave($__internal_560c44284ec36f47a6ac75cfffcafc938f9ae347882102d412733175c576d063_prof);

        
        $__internal_3456f4c9b2ebf20a52f0f0d66e67052308f493453162d6afab2b370b29e4e0f3->leave($__internal_3456f4c9b2ebf20a52f0f0d66e67052308f493453162d6afab2b370b29e4e0f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
