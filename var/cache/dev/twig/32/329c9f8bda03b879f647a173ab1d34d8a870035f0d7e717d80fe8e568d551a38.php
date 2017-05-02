<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4651dc4cb367554b12aab61bced5d5796cfef2eb053b3bb0054151a9f67686ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5df0b3a002c00efecb101f22581346b353172ce792c4746cdfea78b88b9fc351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df0b3a002c00efecb101f22581346b353172ce792c4746cdfea78b88b9fc351->enter($__internal_5df0b3a002c00efecb101f22581346b353172ce792c4746cdfea78b88b9fc351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_911750659798ce1c99f73a5ba7ad7437e34014cf6ab8266a3cc268e8fbe6bb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911750659798ce1c99f73a5ba7ad7437e34014cf6ab8266a3cc268e8fbe6bb97->enter($__internal_911750659798ce1c99f73a5ba7ad7437e34014cf6ab8266a3cc268e8fbe6bb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5df0b3a002c00efecb101f22581346b353172ce792c4746cdfea78b88b9fc351->leave($__internal_5df0b3a002c00efecb101f22581346b353172ce792c4746cdfea78b88b9fc351_prof);

        
        $__internal_911750659798ce1c99f73a5ba7ad7437e34014cf6ab8266a3cc268e8fbe6bb97->leave($__internal_911750659798ce1c99f73a5ba7ad7437e34014cf6ab8266a3cc268e8fbe6bb97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc3b45074336dcb7bc6b3a32690b45196b0b5915d0b31edda8760326a99e9ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3b45074336dcb7bc6b3a32690b45196b0b5915d0b31edda8760326a99e9ece->enter($__internal_fc3b45074336dcb7bc6b3a32690b45196b0b5915d0b31edda8760326a99e9ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8361e866a3a4366fbfe73adfa6dcaebac85071eade14c0a7cddd5f2d1624389b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8361e866a3a4366fbfe73adfa6dcaebac85071eade14c0a7cddd5f2d1624389b->enter($__internal_8361e866a3a4366fbfe73adfa6dcaebac85071eade14c0a7cddd5f2d1624389b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8361e866a3a4366fbfe73adfa6dcaebac85071eade14c0a7cddd5f2d1624389b->leave($__internal_8361e866a3a4366fbfe73adfa6dcaebac85071eade14c0a7cddd5f2d1624389b_prof);

        
        $__internal_fc3b45074336dcb7bc6b3a32690b45196b0b5915d0b31edda8760326a99e9ece->leave($__internal_fc3b45074336dcb7bc6b3a32690b45196b0b5915d0b31edda8760326a99e9ece_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f095f585fbfc9f063605dac1b9507811d764c3d06608315e84e650248004c083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f095f585fbfc9f063605dac1b9507811d764c3d06608315e84e650248004c083->enter($__internal_f095f585fbfc9f063605dac1b9507811d764c3d06608315e84e650248004c083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9303d9d13dc69ab4d7a2fa92d2c6f3390b6375ac3282d019aaec3a8a0ee9f54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9303d9d13dc69ab4d7a2fa92d2c6f3390b6375ac3282d019aaec3a8a0ee9f54d->enter($__internal_9303d9d13dc69ab4d7a2fa92d2c6f3390b6375ac3282d019aaec3a8a0ee9f54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9303d9d13dc69ab4d7a2fa92d2c6f3390b6375ac3282d019aaec3a8a0ee9f54d->leave($__internal_9303d9d13dc69ab4d7a2fa92d2c6f3390b6375ac3282d019aaec3a8a0ee9f54d_prof);

        
        $__internal_f095f585fbfc9f063605dac1b9507811d764c3d06608315e84e650248004c083->leave($__internal_f095f585fbfc9f063605dac1b9507811d764c3d06608315e84e650248004c083_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
