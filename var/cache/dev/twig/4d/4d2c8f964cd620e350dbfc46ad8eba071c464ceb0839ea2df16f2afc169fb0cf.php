<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_439261daef0aba0810070b44d1bed2a5ef4c3182169f083f94481242b6c4735c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ab5f684d6196cdf6880e61f85abb2175998c873cc5077cf664fd7fcf2d2a5216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5f684d6196cdf6880e61f85abb2175998c873cc5077cf664fd7fcf2d2a5216->enter($__internal_ab5f684d6196cdf6880e61f85abb2175998c873cc5077cf664fd7fcf2d2a5216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_578534d15f7c782fb326e5b04aeba1c65cbbfe39ef58dcb40b0acfc3779548b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578534d15f7c782fb326e5b04aeba1c65cbbfe39ef58dcb40b0acfc3779548b8->enter($__internal_578534d15f7c782fb326e5b04aeba1c65cbbfe39ef58dcb40b0acfc3779548b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab5f684d6196cdf6880e61f85abb2175998c873cc5077cf664fd7fcf2d2a5216->leave($__internal_ab5f684d6196cdf6880e61f85abb2175998c873cc5077cf664fd7fcf2d2a5216_prof);

        
        $__internal_578534d15f7c782fb326e5b04aeba1c65cbbfe39ef58dcb40b0acfc3779548b8->leave($__internal_578534d15f7c782fb326e5b04aeba1c65cbbfe39ef58dcb40b0acfc3779548b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b3641b8cb08f7f9d1d962d615e1473181e27c0f1527c9d4acad17a95355537d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3641b8cb08f7f9d1d962d615e1473181e27c0f1527c9d4acad17a95355537d->enter($__internal_7b3641b8cb08f7f9d1d962d615e1473181e27c0f1527c9d4acad17a95355537d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97dfe346a25e330a49074684d0e552e5775f1b6bc7910dafbccea53aa97dda78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97dfe346a25e330a49074684d0e552e5775f1b6bc7910dafbccea53aa97dda78->enter($__internal_97dfe346a25e330a49074684d0e552e5775f1b6bc7910dafbccea53aa97dda78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_97dfe346a25e330a49074684d0e552e5775f1b6bc7910dafbccea53aa97dda78->leave($__internal_97dfe346a25e330a49074684d0e552e5775f1b6bc7910dafbccea53aa97dda78_prof);

        
        $__internal_7b3641b8cb08f7f9d1d962d615e1473181e27c0f1527c9d4acad17a95355537d->leave($__internal_7b3641b8cb08f7f9d1d962d615e1473181e27c0f1527c9d4acad17a95355537d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
