<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3b8e5ea8f0df3df64d804e48e51811ea72d2b484cdb093abf9f68a713a5713e3 extends Twig_Template
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
        $__internal_f05948d374018c21c38077f48e915878432fcee91e1ed4f16b717fd4b2ec31bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05948d374018c21c38077f48e915878432fcee91e1ed4f16b717fd4b2ec31bd->enter($__internal_f05948d374018c21c38077f48e915878432fcee91e1ed4f16b717fd4b2ec31bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_431e8825ee46329dbff35748f30189a2c888671c4fb880017cd484207f8bce0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431e8825ee46329dbff35748f30189a2c888671c4fb880017cd484207f8bce0b->enter($__internal_431e8825ee46329dbff35748f30189a2c888671c4fb880017cd484207f8bce0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f05948d374018c21c38077f48e915878432fcee91e1ed4f16b717fd4b2ec31bd->leave($__internal_f05948d374018c21c38077f48e915878432fcee91e1ed4f16b717fd4b2ec31bd_prof);

        
        $__internal_431e8825ee46329dbff35748f30189a2c888671c4fb880017cd484207f8bce0b->leave($__internal_431e8825ee46329dbff35748f30189a2c888671c4fb880017cd484207f8bce0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a2734752361c15eb0e2aa159d21ce77fa341717a87dbda404d6bd12af055bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2734752361c15eb0e2aa159d21ce77fa341717a87dbda404d6bd12af055bcd->enter($__internal_8a2734752361c15eb0e2aa159d21ce77fa341717a87dbda404d6bd12af055bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f9d307e1dadad07570c4d7d2bc7ccc4bb2139e9261fe32a086af6506d3a260c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9d307e1dadad07570c4d7d2bc7ccc4bb2139e9261fe32a086af6506d3a260c->enter($__internal_5f9d307e1dadad07570c4d7d2bc7ccc4bb2139e9261fe32a086af6506d3a260c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5f9d307e1dadad07570c4d7d2bc7ccc4bb2139e9261fe32a086af6506d3a260c->leave($__internal_5f9d307e1dadad07570c4d7d2bc7ccc4bb2139e9261fe32a086af6506d3a260c_prof);

        
        $__internal_8a2734752361c15eb0e2aa159d21ce77fa341717a87dbda404d6bd12af055bcd->leave($__internal_8a2734752361c15eb0e2aa159d21ce77fa341717a87dbda404d6bd12af055bcd_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
