<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d9c6c9e6713a67ddf5f03c6f94393240017a44f86fecfe9b31577ebb6a15e61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_75e40606949bb622e2c733b57bce9e05872354e1102a3d9a88a0909458082ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e40606949bb622e2c733b57bce9e05872354e1102a3d9a88a0909458082ced->enter($__internal_75e40606949bb622e2c733b57bce9e05872354e1102a3d9a88a0909458082ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_e5063751a041cf47b5e91973a489e19c6734baa270a3af0743d4d0f8ddf217bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5063751a041cf47b5e91973a489e19c6734baa270a3af0743d4d0f8ddf217bf->enter($__internal_e5063751a041cf47b5e91973a489e19c6734baa270a3af0743d4d0f8ddf217bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75e40606949bb622e2c733b57bce9e05872354e1102a3d9a88a0909458082ced->leave($__internal_75e40606949bb622e2c733b57bce9e05872354e1102a3d9a88a0909458082ced_prof);

        
        $__internal_e5063751a041cf47b5e91973a489e19c6734baa270a3af0743d4d0f8ddf217bf->leave($__internal_e5063751a041cf47b5e91973a489e19c6734baa270a3af0743d4d0f8ddf217bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c19006ad0171d82360be3d2e3f56c82246ab5f582cba6ab310ac45f0b722b9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19006ad0171d82360be3d2e3f56c82246ab5f582cba6ab310ac45f0b722b9f6->enter($__internal_c19006ad0171d82360be3d2e3f56c82246ab5f582cba6ab310ac45f0b722b9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a47573f365a576ffc4a293ad7da282110a407be8caec6e784a65dbc5ec650076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47573f365a576ffc4a293ad7da282110a407be8caec6e784a65dbc5ec650076->enter($__internal_a47573f365a576ffc4a293ad7da282110a407be8caec6e784a65dbc5ec650076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a47573f365a576ffc4a293ad7da282110a407be8caec6e784a65dbc5ec650076->leave($__internal_a47573f365a576ffc4a293ad7da282110a407be8caec6e784a65dbc5ec650076_prof);

        
        $__internal_c19006ad0171d82360be3d2e3f56c82246ab5f582cba6ab310ac45f0b722b9f6->leave($__internal_c19006ad0171d82360be3d2e3f56c82246ab5f582cba6ab310ac45f0b722b9f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
