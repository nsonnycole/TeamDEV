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
        $__internal_a52cba1269a4cb9e0ff8607aed5b7897f387b931aa664f960104c9266b0574c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52cba1269a4cb9e0ff8607aed5b7897f387b931aa664f960104c9266b0574c1->enter($__internal_a52cba1269a4cb9e0ff8607aed5b7897f387b931aa664f960104c9266b0574c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_1a6307a1861c790d5d2a4dabf5618820844809a8063fb5a264dcb68b63826c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6307a1861c790d5d2a4dabf5618820844809a8063fb5a264dcb68b63826c7c->enter($__internal_1a6307a1861c790d5d2a4dabf5618820844809a8063fb5a264dcb68b63826c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52cba1269a4cb9e0ff8607aed5b7897f387b931aa664f960104c9266b0574c1->leave($__internal_a52cba1269a4cb9e0ff8607aed5b7897f387b931aa664f960104c9266b0574c1_prof);

        
        $__internal_1a6307a1861c790d5d2a4dabf5618820844809a8063fb5a264dcb68b63826c7c->leave($__internal_1a6307a1861c790d5d2a4dabf5618820844809a8063fb5a264dcb68b63826c7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52997aec3a105a4a18816f79a775dddcb966eefc4aab5a5b934c21f7841bdbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52997aec3a105a4a18816f79a775dddcb966eefc4aab5a5b934c21f7841bdbe0->enter($__internal_52997aec3a105a4a18816f79a775dddcb966eefc4aab5a5b934c21f7841bdbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b495f9f5346e0e20f55d4310d0bac8d7d5c2bf23b1ddee8687817b6255ea830c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b495f9f5346e0e20f55d4310d0bac8d7d5c2bf23b1ddee8687817b6255ea830c->enter($__internal_b495f9f5346e0e20f55d4310d0bac8d7d5c2bf23b1ddee8687817b6255ea830c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b495f9f5346e0e20f55d4310d0bac8d7d5c2bf23b1ddee8687817b6255ea830c->leave($__internal_b495f9f5346e0e20f55d4310d0bac8d7d5c2bf23b1ddee8687817b6255ea830c_prof);

        
        $__internal_52997aec3a105a4a18816f79a775dddcb966eefc4aab5a5b934c21f7841bdbe0->leave($__internal_52997aec3a105a4a18816f79a775dddcb966eefc4aab5a5b934c21f7841bdbe0_prof);

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
