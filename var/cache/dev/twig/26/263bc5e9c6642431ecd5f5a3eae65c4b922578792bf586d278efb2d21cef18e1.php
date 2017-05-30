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
        $__internal_b3384e91b2b7de15ac4ef2ad6fc7ac867915a75290b595c4100b4b308afa7259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3384e91b2b7de15ac4ef2ad6fc7ac867915a75290b595c4100b4b308afa7259->enter($__internal_b3384e91b2b7de15ac4ef2ad6fc7ac867915a75290b595c4100b4b308afa7259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_db8c016cf636bd4b64777a6cb3b565b1735ed64a3b780a78f141b9cbbb24ac17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8c016cf636bd4b64777a6cb3b565b1735ed64a3b780a78f141b9cbbb24ac17->enter($__internal_db8c016cf636bd4b64777a6cb3b565b1735ed64a3b780a78f141b9cbbb24ac17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3384e91b2b7de15ac4ef2ad6fc7ac867915a75290b595c4100b4b308afa7259->leave($__internal_b3384e91b2b7de15ac4ef2ad6fc7ac867915a75290b595c4100b4b308afa7259_prof);

        
        $__internal_db8c016cf636bd4b64777a6cb3b565b1735ed64a3b780a78f141b9cbbb24ac17->leave($__internal_db8c016cf636bd4b64777a6cb3b565b1735ed64a3b780a78f141b9cbbb24ac17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b149ae5ed12528c34e54e587d0e78e42deacb10b884ad311ae462b3fbbe6d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b149ae5ed12528c34e54e587d0e78e42deacb10b884ad311ae462b3fbbe6d09->enter($__internal_9b149ae5ed12528c34e54e587d0e78e42deacb10b884ad311ae462b3fbbe6d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5ff715807e06820e3a395736e7a957d1a9a367e62a19dc00e33e183a4203d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ff715807e06820e3a395736e7a957d1a9a367e62a19dc00e33e183a4203d86->enter($__internal_b5ff715807e06820e3a395736e7a957d1a9a367e62a19dc00e33e183a4203d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b5ff715807e06820e3a395736e7a957d1a9a367e62a19dc00e33e183a4203d86->leave($__internal_b5ff715807e06820e3a395736e7a957d1a9a367e62a19dc00e33e183a4203d86_prof);

        
        $__internal_9b149ae5ed12528c34e54e587d0e78e42deacb10b884ad311ae462b3fbbe6d09->leave($__internal_9b149ae5ed12528c34e54e587d0e78e42deacb10b884ad311ae462b3fbbe6d09_prof);

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
