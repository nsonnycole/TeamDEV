<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_52f64b7a7188a5a994921764f52d6341e682f810b04037df162aa94e8b3c276d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_670d1598ccdb0cdf5398d6084b92d32de382b6c0fc265640089d960d408ab5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670d1598ccdb0cdf5398d6084b92d32de382b6c0fc265640089d960d408ab5c9->enter($__internal_670d1598ccdb0cdf5398d6084b92d32de382b6c0fc265640089d960d408ab5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1ba2056c3dc7d49c26eb020bdd6bc34f4e5d06721e7440fe824ebab44759f87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba2056c3dc7d49c26eb020bdd6bc34f4e5d06721e7440fe824ebab44759f87f->enter($__internal_1ba2056c3dc7d49c26eb020bdd6bc34f4e5d06721e7440fe824ebab44759f87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670d1598ccdb0cdf5398d6084b92d32de382b6c0fc265640089d960d408ab5c9->leave($__internal_670d1598ccdb0cdf5398d6084b92d32de382b6c0fc265640089d960d408ab5c9_prof);

        
        $__internal_1ba2056c3dc7d49c26eb020bdd6bc34f4e5d06721e7440fe824ebab44759f87f->leave($__internal_1ba2056c3dc7d49c26eb020bdd6bc34f4e5d06721e7440fe824ebab44759f87f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02196be820acc650f8bce4a3d46669ca5efab2b662356cc3fb871c8201312c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02196be820acc650f8bce4a3d46669ca5efab2b662356cc3fb871c8201312c7f->enter($__internal_02196be820acc650f8bce4a3d46669ca5efab2b662356cc3fb871c8201312c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ad4f2ce7bae4a4d74efcf46a61a1395515702ce06328c3d4c58e79b66bec203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad4f2ce7bae4a4d74efcf46a61a1395515702ce06328c3d4c58e79b66bec203->enter($__internal_0ad4f2ce7bae4a4d74efcf46a61a1395515702ce06328c3d4c58e79b66bec203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0ad4f2ce7bae4a4d74efcf46a61a1395515702ce06328c3d4c58e79b66bec203->leave($__internal_0ad4f2ce7bae4a4d74efcf46a61a1395515702ce06328c3d4c58e79b66bec203_prof);

        
        $__internal_02196be820acc650f8bce4a3d46669ca5efab2b662356cc3fb871c8201312c7f->leave($__internal_02196be820acc650f8bce4a3d46669ca5efab2b662356cc3fb871c8201312c7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
