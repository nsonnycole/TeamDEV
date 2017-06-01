<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_dcd9924e4193503ba5cb367b77204b3ee95e990ba441b91ac72432350e17e17d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_6323ebd6024f63377c0d7788ad4a57b31834fe421056e30829fb6a23fca29cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6323ebd6024f63377c0d7788ad4a57b31834fe421056e30829fb6a23fca29cf3->enter($__internal_6323ebd6024f63377c0d7788ad4a57b31834fe421056e30829fb6a23fca29cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_87dbaf3be2df03c019b6aa5c3cb8ebd9a98a71355163306d16592a832c787fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dbaf3be2df03c019b6aa5c3cb8ebd9a98a71355163306d16592a832c787fe0->enter($__internal_87dbaf3be2df03c019b6aa5c3cb8ebd9a98a71355163306d16592a832c787fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6323ebd6024f63377c0d7788ad4a57b31834fe421056e30829fb6a23fca29cf3->leave($__internal_6323ebd6024f63377c0d7788ad4a57b31834fe421056e30829fb6a23fca29cf3_prof);

        
        $__internal_87dbaf3be2df03c019b6aa5c3cb8ebd9a98a71355163306d16592a832c787fe0->leave($__internal_87dbaf3be2df03c019b6aa5c3cb8ebd9a98a71355163306d16592a832c787fe0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92729e1dd52f03534630d725df63512e78bb7a5c95c45919b53496502cf32319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92729e1dd52f03534630d725df63512e78bb7a5c95c45919b53496502cf32319->enter($__internal_92729e1dd52f03534630d725df63512e78bb7a5c95c45919b53496502cf32319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1543287ee99cffa36e82f2d96abb2916045ba3c990e3d54f6463fcb4a9c6152e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1543287ee99cffa36e82f2d96abb2916045ba3c990e3d54f6463fcb4a9c6152e->enter($__internal_1543287ee99cffa36e82f2d96abb2916045ba3c990e3d54f6463fcb4a9c6152e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1543287ee99cffa36e82f2d96abb2916045ba3c990e3d54f6463fcb4a9c6152e->leave($__internal_1543287ee99cffa36e82f2d96abb2916045ba3c990e3d54f6463fcb4a9c6152e_prof);

        
        $__internal_92729e1dd52f03534630d725df63512e78bb7a5c95c45919b53496502cf32319->leave($__internal_92729e1dd52f03534630d725df63512e78bb7a5c95c45919b53496502cf32319_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
