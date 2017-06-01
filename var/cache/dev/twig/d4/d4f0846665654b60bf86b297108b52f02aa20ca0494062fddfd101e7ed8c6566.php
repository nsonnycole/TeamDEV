<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_1de918160f31dbf9e196d2bcb40fb3d1ddecfa2f9dca6667128724c438981588 extends Twig_Template
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
        $__internal_741327a591e35874e5a94845470af43094f1a5b74f757923e6288ce75f32607e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741327a591e35874e5a94845470af43094f1a5b74f757923e6288ce75f32607e->enter($__internal_741327a591e35874e5a94845470af43094f1a5b74f757923e6288ce75f32607e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_b48b0557e191ff043e5d84c72bf92ca0bda7d5f1743cc51754781047db71ef82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48b0557e191ff043e5d84c72bf92ca0bda7d5f1743cc51754781047db71ef82->enter($__internal_b48b0557e191ff043e5d84c72bf92ca0bda7d5f1743cc51754781047db71ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_741327a591e35874e5a94845470af43094f1a5b74f757923e6288ce75f32607e->leave($__internal_741327a591e35874e5a94845470af43094f1a5b74f757923e6288ce75f32607e_prof);

        
        $__internal_b48b0557e191ff043e5d84c72bf92ca0bda7d5f1743cc51754781047db71ef82->leave($__internal_b48b0557e191ff043e5d84c72bf92ca0bda7d5f1743cc51754781047db71ef82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31d1bbad57935f2c2675f61ea87fd7a23687296a64edaf8f3c7fe1b3525e0a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d1bbad57935f2c2675f61ea87fd7a23687296a64edaf8f3c7fe1b3525e0a26->enter($__internal_31d1bbad57935f2c2675f61ea87fd7a23687296a64edaf8f3c7fe1b3525e0a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4461b55c739687f230939c74b4f66188961f2284df51ce77fa932189348fdfd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4461b55c739687f230939c74b4f66188961f2284df51ce77fa932189348fdfd1->enter($__internal_4461b55c739687f230939c74b4f66188961f2284df51ce77fa932189348fdfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_4461b55c739687f230939c74b4f66188961f2284df51ce77fa932189348fdfd1->leave($__internal_4461b55c739687f230939c74b4f66188961f2284df51ce77fa932189348fdfd1_prof);

        
        $__internal_31d1bbad57935f2c2675f61ea87fd7a23687296a64edaf8f3c7fe1b3525e0a26->leave($__internal_31d1bbad57935f2c2675f61ea87fd7a23687296a64edaf8f3c7fe1b3525e0a26_prof);

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
