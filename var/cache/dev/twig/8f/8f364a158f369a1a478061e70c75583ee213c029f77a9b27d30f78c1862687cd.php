<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_aad3223d74b149143599fdb0abfa92c5956a421b2538d9fa9be4acc7d9765b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d25e147f14f11d798e67ace37a0a4351af26011c54403f37bc0d1a35b60d780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d25e147f14f11d798e67ace37a0a4351af26011c54403f37bc0d1a35b60d780->enter($__internal_6d25e147f14f11d798e67ace37a0a4351af26011c54403f37bc0d1a35b60d780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_532c61328c9a4f3b8a67a8de4fac04fd3764458a7abd3baa4ff0db0036031bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532c61328c9a4f3b8a67a8de4fac04fd3764458a7abd3baa4ff0db0036031bd0->enter($__internal_532c61328c9a4f3b8a67a8de4fac04fd3764458a7abd3baa4ff0db0036031bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d25e147f14f11d798e67ace37a0a4351af26011c54403f37bc0d1a35b60d780->leave($__internal_6d25e147f14f11d798e67ace37a0a4351af26011c54403f37bc0d1a35b60d780_prof);

        
        $__internal_532c61328c9a4f3b8a67a8de4fac04fd3764458a7abd3baa4ff0db0036031bd0->leave($__internal_532c61328c9a4f3b8a67a8de4fac04fd3764458a7abd3baa4ff0db0036031bd0_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_89077a9385a34d8ed1d721f119896f2dd32158a9cfbdefe092af9efed41c9cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89077a9385a34d8ed1d721f119896f2dd32158a9cfbdefe092af9efed41c9cdf->enter($__internal_89077a9385a34d8ed1d721f119896f2dd32158a9cfbdefe092af9efed41c9cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_08e621209cbee3f1de6d279d29d8a686b81c827549c5ad9fe04a284a98616bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e621209cbee3f1de6d279d29d8a686b81c827549c5ad9fe04a284a98616bd3->enter($__internal_08e621209cbee3f1de6d279d29d8a686b81c827549c5ad9fe04a284a98616bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_08e621209cbee3f1de6d279d29d8a686b81c827549c5ad9fe04a284a98616bd3->leave($__internal_08e621209cbee3f1de6d279d29d8a686b81c827549c5ad9fe04a284a98616bd3_prof);

        
        $__internal_89077a9385a34d8ed1d721f119896f2dd32158a9cfbdefe092af9efed41c9cdf->leave($__internal_89077a9385a34d8ed1d721f119896f2dd32158a9cfbdefe092af9efed41c9cdf_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7bae5f9a23d6343061eff6b0df84aaafc752336ae17bce7b3a10bb564af30997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bae5f9a23d6343061eff6b0df84aaafc752336ae17bce7b3a10bb564af30997->enter($__internal_7bae5f9a23d6343061eff6b0df84aaafc752336ae17bce7b3a10bb564af30997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_315fc7d392031095b7462c39603afddf13926cee9975902baa79c1522e2685f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315fc7d392031095b7462c39603afddf13926cee9975902baa79c1522e2685f3->enter($__internal_315fc7d392031095b7462c39603afddf13926cee9975902baa79c1522e2685f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_315fc7d392031095b7462c39603afddf13926cee9975902baa79c1522e2685f3->leave($__internal_315fc7d392031095b7462c39603afddf13926cee9975902baa79c1522e2685f3_prof);

        
        $__internal_7bae5f9a23d6343061eff6b0df84aaafc752336ae17bce7b3a10bb564af30997->leave($__internal_7bae5f9a23d6343061eff6b0df84aaafc752336ae17bce7b3a10bb564af30997_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f28bdf1be25e6b8444bae6f1cc92468ea7d250aa2b08dbb57e00865e85b829b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28bdf1be25e6b8444bae6f1cc92468ea7d250aa2b08dbb57e00865e85b829b3->enter($__internal_f28bdf1be25e6b8444bae6f1cc92468ea7d250aa2b08dbb57e00865e85b829b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ac3090a6ebd6b185cf0e09ecb6db34c0e83be70109b8aaf12bf1038a98a4dbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3090a6ebd6b185cf0e09ecb6db34c0e83be70109b8aaf12bf1038a98a4dbf7->enter($__internal_ac3090a6ebd6b185cf0e09ecb6db34c0e83be70109b8aaf12bf1038a98a4dbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_ac3090a6ebd6b185cf0e09ecb6db34c0e83be70109b8aaf12bf1038a98a4dbf7->leave($__internal_ac3090a6ebd6b185cf0e09ecb6db34c0e83be70109b8aaf12bf1038a98a4dbf7_prof);

        
        $__internal_f28bdf1be25e6b8444bae6f1cc92468ea7d250aa2b08dbb57e00865e85b829b3->leave($__internal_f28bdf1be25e6b8444bae6f1cc92468ea7d250aa2b08dbb57e00865e85b829b3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/exception.html.twig");
    }
}
