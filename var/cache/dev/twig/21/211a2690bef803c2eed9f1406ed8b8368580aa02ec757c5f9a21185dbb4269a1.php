<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ef8228c07c77a7fb3878d54e901fbd26bcad3f063c094e610008f24d616a0029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_6d8c2742c33aa8704262ff3e6d4387b2e7861dd77f3540d98e31d83e331f198a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8c2742c33aa8704262ff3e6d4387b2e7861dd77f3540d98e31d83e331f198a->enter($__internal_6d8c2742c33aa8704262ff3e6d4387b2e7861dd77f3540d98e31d83e331f198a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6550751ef43d92f7c02a2b812e506cf795b0702e8f4e102ba9212c7515ece1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6550751ef43d92f7c02a2b812e506cf795b0702e8f4e102ba9212c7515ece1dc->enter($__internal_6550751ef43d92f7c02a2b812e506cf795b0702e8f4e102ba9212c7515ece1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d8c2742c33aa8704262ff3e6d4387b2e7861dd77f3540d98e31d83e331f198a->leave($__internal_6d8c2742c33aa8704262ff3e6d4387b2e7861dd77f3540d98e31d83e331f198a_prof);

        
        $__internal_6550751ef43d92f7c02a2b812e506cf795b0702e8f4e102ba9212c7515ece1dc->leave($__internal_6550751ef43d92f7c02a2b812e506cf795b0702e8f4e102ba9212c7515ece1dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_552f322411ed41e3c62ce3f5f4f6a124428518fcf714c1c0dcf7e796d67136d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552f322411ed41e3c62ce3f5f4f6a124428518fcf714c1c0dcf7e796d67136d3->enter($__internal_552f322411ed41e3c62ce3f5f4f6a124428518fcf714c1c0dcf7e796d67136d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0e43eac8e3f7c84460dcbe4b8fe234835864ac100666f114bbca94c14a01fd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e43eac8e3f7c84460dcbe4b8fe234835864ac100666f114bbca94c14a01fd5d->enter($__internal_0e43eac8e3f7c84460dcbe4b8fe234835864ac100666f114bbca94c14a01fd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0e43eac8e3f7c84460dcbe4b8fe234835864ac100666f114bbca94c14a01fd5d->leave($__internal_0e43eac8e3f7c84460dcbe4b8fe234835864ac100666f114bbca94c14a01fd5d_prof);

        
        $__internal_552f322411ed41e3c62ce3f5f4f6a124428518fcf714c1c0dcf7e796d67136d3->leave($__internal_552f322411ed41e3c62ce3f5f4f6a124428518fcf714c1c0dcf7e796d67136d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
