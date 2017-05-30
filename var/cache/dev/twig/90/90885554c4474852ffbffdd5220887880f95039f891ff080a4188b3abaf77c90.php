<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_57931331b04f06ed759dbabb0a918f76ce78c31cb74bd93e36ec32c7b7a46c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_1a5444ad9f0fd9804c00b264456565a2712abdc3229b4763a805871922599483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5444ad9f0fd9804c00b264456565a2712abdc3229b4763a805871922599483->enter($__internal_1a5444ad9f0fd9804c00b264456565a2712abdc3229b4763a805871922599483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_73d2688c625fa57faebee50b8d1bc4e3f9f902310d77cda624a1b11060e38767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d2688c625fa57faebee50b8d1bc4e3f9f902310d77cda624a1b11060e38767->enter($__internal_73d2688c625fa57faebee50b8d1bc4e3f9f902310d77cda624a1b11060e38767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a5444ad9f0fd9804c00b264456565a2712abdc3229b4763a805871922599483->leave($__internal_1a5444ad9f0fd9804c00b264456565a2712abdc3229b4763a805871922599483_prof);

        
        $__internal_73d2688c625fa57faebee50b8d1bc4e3f9f902310d77cda624a1b11060e38767->leave($__internal_73d2688c625fa57faebee50b8d1bc4e3f9f902310d77cda624a1b11060e38767_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43c1af2d367f75bed90924b0979c33919d77210b3ab5e62b90a78b871460179a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c1af2d367f75bed90924b0979c33919d77210b3ab5e62b90a78b871460179a->enter($__internal_43c1af2d367f75bed90924b0979c33919d77210b3ab5e62b90a78b871460179a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5dcac1f5095e21d82ddf319efc6a61a8681a2d37e9ace4db4cc052a4d21faaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcac1f5095e21d82ddf319efc6a61a8681a2d37e9ace4db4cc052a4d21faaef->enter($__internal_5dcac1f5095e21d82ddf319efc6a61a8681a2d37e9ace4db4cc052a4d21faaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5dcac1f5095e21d82ddf319efc6a61a8681a2d37e9ace4db4cc052a4d21faaef->leave($__internal_5dcac1f5095e21d82ddf319efc6a61a8681a2d37e9ace4db4cc052a4d21faaef_prof);

        
        $__internal_43c1af2d367f75bed90924b0979c33919d77210b3ab5e62b90a78b871460179a->leave($__internal_43c1af2d367f75bed90924b0979c33919d77210b3ab5e62b90a78b871460179a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
