<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9b3d75d9857ca5d728ae6d599c01aa3590042d29e32328d63ad27fd0088645ae extends Twig_Template
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
        $__internal_ecfba8e892e34d4003f4678038f94286fb6f8da15d77c007e8992b39d6600f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfba8e892e34d4003f4678038f94286fb6f8da15d77c007e8992b39d6600f23->enter($__internal_ecfba8e892e34d4003f4678038f94286fb6f8da15d77c007e8992b39d6600f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1f92547b3854fa7d2d9c0fd98e70ec26b9586468cfb60271a35bbb06901e8bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f92547b3854fa7d2d9c0fd98e70ec26b9586468cfb60271a35bbb06901e8bf8->enter($__internal_1f92547b3854fa7d2d9c0fd98e70ec26b9586468cfb60271a35bbb06901e8bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecfba8e892e34d4003f4678038f94286fb6f8da15d77c007e8992b39d6600f23->leave($__internal_ecfba8e892e34d4003f4678038f94286fb6f8da15d77c007e8992b39d6600f23_prof);

        
        $__internal_1f92547b3854fa7d2d9c0fd98e70ec26b9586468cfb60271a35bbb06901e8bf8->leave($__internal_1f92547b3854fa7d2d9c0fd98e70ec26b9586468cfb60271a35bbb06901e8bf8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb607d648413d2df98ce29435c43e0d434923ab093452da291d94184e5838099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb607d648413d2df98ce29435c43e0d434923ab093452da291d94184e5838099->enter($__internal_bb607d648413d2df98ce29435c43e0d434923ab093452da291d94184e5838099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae45a47b6bbe650e97fc96e1d4debcacb2eebcdd7a1551884aece3be0bcd9eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae45a47b6bbe650e97fc96e1d4debcacb2eebcdd7a1551884aece3be0bcd9eab->enter($__internal_ae45a47b6bbe650e97fc96e1d4debcacb2eebcdd7a1551884aece3be0bcd9eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ae45a47b6bbe650e97fc96e1d4debcacb2eebcdd7a1551884aece3be0bcd9eab->leave($__internal_ae45a47b6bbe650e97fc96e1d4debcacb2eebcdd7a1551884aece3be0bcd9eab_prof);

        
        $__internal_bb607d648413d2df98ce29435c43e0d434923ab093452da291d94184e5838099->leave($__internal_bb607d648413d2df98ce29435c43e0d434923ab093452da291d94184e5838099_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7536bcc857e002fb01fc57020f510b1baa9ae2a14d64cbfbace6b1a9a9af642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7536bcc857e002fb01fc57020f510b1baa9ae2a14d64cbfbace6b1a9a9af642->enter($__internal_b7536bcc857e002fb01fc57020f510b1baa9ae2a14d64cbfbace6b1a9a9af642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c62db2800a29db14a0e01c0d8bfd2ce17624768c8ce9bb921f5b7cbe28b71f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62db2800a29db14a0e01c0d8bfd2ce17624768c8ce9bb921f5b7cbe28b71f07->enter($__internal_c62db2800a29db14a0e01c0d8bfd2ce17624768c8ce9bb921f5b7cbe28b71f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c62db2800a29db14a0e01c0d8bfd2ce17624768c8ce9bb921f5b7cbe28b71f07->leave($__internal_c62db2800a29db14a0e01c0d8bfd2ce17624768c8ce9bb921f5b7cbe28b71f07_prof);

        
        $__internal_b7536bcc857e002fb01fc57020f510b1baa9ae2a14d64cbfbace6b1a9a9af642->leave($__internal_b7536bcc857e002fb01fc57020f510b1baa9ae2a14d64cbfbace6b1a9a9af642_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
