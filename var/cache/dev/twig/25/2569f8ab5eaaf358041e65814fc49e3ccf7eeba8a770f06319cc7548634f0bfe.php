<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_bb074e817472731b2f87ad5d39fccb04ca9f5fe7e572f5907a58b2b4cd030283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_a972533464fc550aba448c933dc985c1ef6a53253f0f0e24794f7df78d008008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a972533464fc550aba448c933dc985c1ef6a53253f0f0e24794f7df78d008008->enter($__internal_a972533464fc550aba448c933dc985c1ef6a53253f0f0e24794f7df78d008008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_68ec68af886a868b2d44345a793bd5ec92ffe3eddd103075b492e7797853fb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ec68af886a868b2d44345a793bd5ec92ffe3eddd103075b492e7797853fb7f->enter($__internal_68ec68af886a868b2d44345a793bd5ec92ffe3eddd103075b492e7797853fb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a972533464fc550aba448c933dc985c1ef6a53253f0f0e24794f7df78d008008->leave($__internal_a972533464fc550aba448c933dc985c1ef6a53253f0f0e24794f7df78d008008_prof);

        
        $__internal_68ec68af886a868b2d44345a793bd5ec92ffe3eddd103075b492e7797853fb7f->leave($__internal_68ec68af886a868b2d44345a793bd5ec92ffe3eddd103075b492e7797853fb7f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3263d461ae30fa571fdfc492eb3e5c807b0381439c6da61632a3c694494624bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3263d461ae30fa571fdfc492eb3e5c807b0381439c6da61632a3c694494624bf->enter($__internal_3263d461ae30fa571fdfc492eb3e5c807b0381439c6da61632a3c694494624bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b57c108d3b2654ce57440177327b717317ecc80875366d54645b52df4b717e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57c108d3b2654ce57440177327b717317ecc80875366d54645b52df4b717e9f->enter($__internal_b57c108d3b2654ce57440177327b717317ecc80875366d54645b52df4b717e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b57c108d3b2654ce57440177327b717317ecc80875366d54645b52df4b717e9f->leave($__internal_b57c108d3b2654ce57440177327b717317ecc80875366d54645b52df4b717e9f_prof);

        
        $__internal_3263d461ae30fa571fdfc492eb3e5c807b0381439c6da61632a3c694494624bf->leave($__internal_3263d461ae30fa571fdfc492eb3e5c807b0381439c6da61632a3c694494624bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
