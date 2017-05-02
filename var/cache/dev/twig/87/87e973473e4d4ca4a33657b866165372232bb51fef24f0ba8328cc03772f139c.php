<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_5a7dc080e0847bc76e84b3a7f1176664d6f6d180422398f25f91d4302ab3b0f6 extends Twig_Template
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
        $__internal_a050a42ddf376a316be8689c7b751a6e9b2ea5a767869e1b7e699bb1f91516a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a050a42ddf376a316be8689c7b751a6e9b2ea5a767869e1b7e699bb1f91516a4->enter($__internal_a050a42ddf376a316be8689c7b751a6e9b2ea5a767869e1b7e699bb1f91516a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_ae6d197df55d1888c0b6a0542c41287d07faa9adcf7e41c847f334f4d8684ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6d197df55d1888c0b6a0542c41287d07faa9adcf7e41c847f334f4d8684ce6->enter($__internal_ae6d197df55d1888c0b6a0542c41287d07faa9adcf7e41c847f334f4d8684ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a050a42ddf376a316be8689c7b751a6e9b2ea5a767869e1b7e699bb1f91516a4->leave($__internal_a050a42ddf376a316be8689c7b751a6e9b2ea5a767869e1b7e699bb1f91516a4_prof);

        
        $__internal_ae6d197df55d1888c0b6a0542c41287d07faa9adcf7e41c847f334f4d8684ce6->leave($__internal_ae6d197df55d1888c0b6a0542c41287d07faa9adcf7e41c847f334f4d8684ce6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2ed600a33b6476e6e303cb15d4ba4cdf5f074e93985cdb29d0bdcc103b08abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ed600a33b6476e6e303cb15d4ba4cdf5f074e93985cdb29d0bdcc103b08abd->enter($__internal_a2ed600a33b6476e6e303cb15d4ba4cdf5f074e93985cdb29d0bdcc103b08abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8670514ce6e9968d9aed99af9cc78fd8190b3337c1049c45d7d7101ef70d9134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8670514ce6e9968d9aed99af9cc78fd8190b3337c1049c45d7d7101ef70d9134->enter($__internal_8670514ce6e9968d9aed99af9cc78fd8190b3337c1049c45d7d7101ef70d9134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8670514ce6e9968d9aed99af9cc78fd8190b3337c1049c45d7d7101ef70d9134->leave($__internal_8670514ce6e9968d9aed99af9cc78fd8190b3337c1049c45d7d7101ef70d9134_prof);

        
        $__internal_a2ed600a33b6476e6e303cb15d4ba4cdf5f074e93985cdb29d0bdcc103b08abd->leave($__internal_a2ed600a33b6476e6e303cb15d4ba4cdf5f074e93985cdb29d0bdcc103b08abd_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
