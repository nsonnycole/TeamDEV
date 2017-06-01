<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d9604187c11d43d1d97658223c0cdf9754a2e8d79926963620661c9e4d750ec0 extends Twig_Template
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
        $__internal_a6b4cf3b75c4b52c653231c8a7a2b4c0802c25c817d209b52b8f9f8dc59a15a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b4cf3b75c4b52c653231c8a7a2b4c0802c25c817d209b52b8f9f8dc59a15a7->enter($__internal_a6b4cf3b75c4b52c653231c8a7a2b4c0802c25c817d209b52b8f9f8dc59a15a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_08c0f74f8786f8ae1626f9537b376a201c8ee894e1de275bab83327ccf15ee7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c0f74f8786f8ae1626f9537b376a201c8ee894e1de275bab83327ccf15ee7a->enter($__internal_08c0f74f8786f8ae1626f9537b376a201c8ee894e1de275bab83327ccf15ee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b4cf3b75c4b52c653231c8a7a2b4c0802c25c817d209b52b8f9f8dc59a15a7->leave($__internal_a6b4cf3b75c4b52c653231c8a7a2b4c0802c25c817d209b52b8f9f8dc59a15a7_prof);

        
        $__internal_08c0f74f8786f8ae1626f9537b376a201c8ee894e1de275bab83327ccf15ee7a->leave($__internal_08c0f74f8786f8ae1626f9537b376a201c8ee894e1de275bab83327ccf15ee7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdbd4dbda123fa25a1a13d8f20ad92c81ef498b8b92ce3bd232debc4b09cec2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbd4dbda123fa25a1a13d8f20ad92c81ef498b8b92ce3bd232debc4b09cec2d->enter($__internal_fdbd4dbda123fa25a1a13d8f20ad92c81ef498b8b92ce3bd232debc4b09cec2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c995b298d7764fd285237bcc1d11cdb27050e4780c19a03f061c98a8cf4b2584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c995b298d7764fd285237bcc1d11cdb27050e4780c19a03f061c98a8cf4b2584->enter($__internal_c995b298d7764fd285237bcc1d11cdb27050e4780c19a03f061c98a8cf4b2584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c995b298d7764fd285237bcc1d11cdb27050e4780c19a03f061c98a8cf4b2584->leave($__internal_c995b298d7764fd285237bcc1d11cdb27050e4780c19a03f061c98a8cf4b2584_prof);

        
        $__internal_fdbd4dbda123fa25a1a13d8f20ad92c81ef498b8b92ce3bd232debc4b09cec2d->leave($__internal_fdbd4dbda123fa25a1a13d8f20ad92c81ef498b8b92ce3bd232debc4b09cec2d_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
