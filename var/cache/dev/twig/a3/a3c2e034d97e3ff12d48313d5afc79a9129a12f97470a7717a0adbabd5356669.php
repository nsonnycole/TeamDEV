<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5033bf60db2461a3a9a88eeb9abee67ffdc9ece6007f388d2c8da863c3506458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_3bb3f19f5af8b15679cb1eb7103a3d8aadcede84db4f103ad46fc704c9115f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb3f19f5af8b15679cb1eb7103a3d8aadcede84db4f103ad46fc704c9115f6d->enter($__internal_3bb3f19f5af8b15679cb1eb7103a3d8aadcede84db4f103ad46fc704c9115f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_cdcfa1dcbf3e0a1582d55ba30934d2de228a97838edc194836e27efd4e98ce33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcfa1dcbf3e0a1582d55ba30934d2de228a97838edc194836e27efd4e98ce33->enter($__internal_cdcfa1dcbf3e0a1582d55ba30934d2de228a97838edc194836e27efd4e98ce33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb3f19f5af8b15679cb1eb7103a3d8aadcede84db4f103ad46fc704c9115f6d->leave($__internal_3bb3f19f5af8b15679cb1eb7103a3d8aadcede84db4f103ad46fc704c9115f6d_prof);

        
        $__internal_cdcfa1dcbf3e0a1582d55ba30934d2de228a97838edc194836e27efd4e98ce33->leave($__internal_cdcfa1dcbf3e0a1582d55ba30934d2de228a97838edc194836e27efd4e98ce33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a9636824f3781068855593c277f8a69b415812142bd4dab3a5a66a7a3325977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9636824f3781068855593c277f8a69b415812142bd4dab3a5a66a7a3325977->enter($__internal_3a9636824f3781068855593c277f8a69b415812142bd4dab3a5a66a7a3325977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_086345cac8d6b65d6dc5f2c8ee76217feb272fdb4df1ab22c2edeed1554e7c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086345cac8d6b65d6dc5f2c8ee76217feb272fdb4df1ab22c2edeed1554e7c0a->enter($__internal_086345cac8d6b65d6dc5f2c8ee76217feb272fdb4df1ab22c2edeed1554e7c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_086345cac8d6b65d6dc5f2c8ee76217feb272fdb4df1ab22c2edeed1554e7c0a->leave($__internal_086345cac8d6b65d6dc5f2c8ee76217feb272fdb4df1ab22c2edeed1554e7c0a_prof);

        
        $__internal_3a9636824f3781068855593c277f8a69b415812142bd4dab3a5a66a7a3325977->leave($__internal_3a9636824f3781068855593c277f8a69b415812142bd4dab3a5a66a7a3325977_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
