<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_78ea1ca209167197aa98088a002fcd4f72b021c4fa777dacd0a0f67222a5b67b extends Twig_Template
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
        $__internal_13ff71f381dca81b9db6eb6d730dfcf9bdc0a641f3d88ae2c55753a024c376c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ff71f381dca81b9db6eb6d730dfcf9bdc0a641f3d88ae2c55753a024c376c3->enter($__internal_13ff71f381dca81b9db6eb6d730dfcf9bdc0a641f3d88ae2c55753a024c376c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f3aa3cb676a8f299b0af408f2e1e995c4fc83018ca8e78fa89ce09b7d0762fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3aa3cb676a8f299b0af408f2e1e995c4fc83018ca8e78fa89ce09b7d0762fb3->enter($__internal_f3aa3cb676a8f299b0af408f2e1e995c4fc83018ca8e78fa89ce09b7d0762fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ff71f381dca81b9db6eb6d730dfcf9bdc0a641f3d88ae2c55753a024c376c3->leave($__internal_13ff71f381dca81b9db6eb6d730dfcf9bdc0a641f3d88ae2c55753a024c376c3_prof);

        
        $__internal_f3aa3cb676a8f299b0af408f2e1e995c4fc83018ca8e78fa89ce09b7d0762fb3->leave($__internal_f3aa3cb676a8f299b0af408f2e1e995c4fc83018ca8e78fa89ce09b7d0762fb3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f6eb5ac759539014aaeceae8b272586b3267d366206fc2977aff5fad77d4bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6eb5ac759539014aaeceae8b272586b3267d366206fc2977aff5fad77d4bde->enter($__internal_3f6eb5ac759539014aaeceae8b272586b3267d366206fc2977aff5fad77d4bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1705b9077cc75a04ca57a32f138dc8c43e53407b38c31c71b31ab0f9b6a68aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1705b9077cc75a04ca57a32f138dc8c43e53407b38c31c71b31ab0f9b6a68aaf->enter($__internal_1705b9077cc75a04ca57a32f138dc8c43e53407b38c31c71b31ab0f9b6a68aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1705b9077cc75a04ca57a32f138dc8c43e53407b38c31c71b31ab0f9b6a68aaf->leave($__internal_1705b9077cc75a04ca57a32f138dc8c43e53407b38c31c71b31ab0f9b6a68aaf_prof);

        
        $__internal_3f6eb5ac759539014aaeceae8b272586b3267d366206fc2977aff5fad77d4bde->leave($__internal_3f6eb5ac759539014aaeceae8b272586b3267d366206fc2977aff5fad77d4bde_prof);

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
