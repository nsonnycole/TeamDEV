<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b31d61fbc66a07f32933300494549b2c83f18386e97a70509cef00e62ff26b60 extends Twig_Template
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
        $__internal_2a78a8d91eccc6ef6dd0ab8aef962b324dfd970e0fc63b59647a4323bda839b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a78a8d91eccc6ef6dd0ab8aef962b324dfd970e0fc63b59647a4323bda839b0->enter($__internal_2a78a8d91eccc6ef6dd0ab8aef962b324dfd970e0fc63b59647a4323bda839b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_ebe8f577ede1e3347a807d19c12558eaa33097d65bda88ba02cc9ebe37379037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe8f577ede1e3347a807d19c12558eaa33097d65bda88ba02cc9ebe37379037->enter($__internal_ebe8f577ede1e3347a807d19c12558eaa33097d65bda88ba02cc9ebe37379037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a78a8d91eccc6ef6dd0ab8aef962b324dfd970e0fc63b59647a4323bda839b0->leave($__internal_2a78a8d91eccc6ef6dd0ab8aef962b324dfd970e0fc63b59647a4323bda839b0_prof);

        
        $__internal_ebe8f577ede1e3347a807d19c12558eaa33097d65bda88ba02cc9ebe37379037->leave($__internal_ebe8f577ede1e3347a807d19c12558eaa33097d65bda88ba02cc9ebe37379037_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21185c0ec5b71bb94a1ac82c2e13e88500512d48c761a23bb6ed58378f575a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21185c0ec5b71bb94a1ac82c2e13e88500512d48c761a23bb6ed58378f575a0a->enter($__internal_21185c0ec5b71bb94a1ac82c2e13e88500512d48c761a23bb6ed58378f575a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6ffdf3716714317ea63f9df7ebba67589a8e5562a1b3f4aa74d2cefc9eed924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ffdf3716714317ea63f9df7ebba67589a8e5562a1b3f4aa74d2cefc9eed924->enter($__internal_d6ffdf3716714317ea63f9df7ebba67589a8e5562a1b3f4aa74d2cefc9eed924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d6ffdf3716714317ea63f9df7ebba67589a8e5562a1b3f4aa74d2cefc9eed924->leave($__internal_d6ffdf3716714317ea63f9df7ebba67589a8e5562a1b3f4aa74d2cefc9eed924_prof);

        
        $__internal_21185c0ec5b71bb94a1ac82c2e13e88500512d48c761a23bb6ed58378f575a0a->leave($__internal_21185c0ec5b71bb94a1ac82c2e13e88500512d48c761a23bb6ed58378f575a0a_prof);

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
