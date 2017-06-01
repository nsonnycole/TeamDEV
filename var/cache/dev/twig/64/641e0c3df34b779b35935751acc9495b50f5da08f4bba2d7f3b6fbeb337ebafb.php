<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_f20c62109e6146b2e4ac6dcd1bd2057dd4f782dbc204873513cf4ec0ff682cd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f0fd6f8872f75aee5fb481c204a7a91815a8cdf1f259d151296896134b0407d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0fd6f8872f75aee5fb481c204a7a91815a8cdf1f259d151296896134b0407d->enter($__internal_5f0fd6f8872f75aee5fb481c204a7a91815a8cdf1f259d151296896134b0407d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_09382791a08f964f2852af8662f66b071b7ed3179a11bdc056daf076b6d66930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09382791a08f964f2852af8662f66b071b7ed3179a11bdc056daf076b6d66930->enter($__internal_09382791a08f964f2852af8662f66b071b7ed3179a11bdc056daf076b6d66930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756"]) ? $context["__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756"] : $this->getContext($context, "__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756"]) ? $context["__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756"] : $this->getContext($context, "__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f0fd6f8872f75aee5fb481c204a7a91815a8cdf1f259d151296896134b0407d->leave($__internal_5f0fd6f8872f75aee5fb481c204a7a91815a8cdf1f259d151296896134b0407d_prof);

        
        $__internal_09382791a08f964f2852af8662f66b071b7ed3179a11bdc056daf076b6d66930->leave($__internal_09382791a08f964f2852af8662f66b071b7ed3179a11bdc056daf076b6d66930_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8a81bfbd8048087f6fe0a413cac99ffb4538aa3105e3ef70ba465706b55e4b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a81bfbd8048087f6fe0a413cac99ffb4538aa3105e3ef70ba465706b55e4b47->enter($__internal_8a81bfbd8048087f6fe0a413cac99ffb4538aa3105e3ef70ba465706b55e4b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_62ec77ac5d7778970314318730e6f3c4cbae6f33d97acba572d81c239e9122b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ec77ac5d7778970314318730e6f3c4cbae6f33d97acba572d81c239e9122b3->enter($__internal_62ec77ac5d7778970314318730e6f3c4cbae6f33d97acba572d81c239e9122b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_62ec77ac5d7778970314318730e6f3c4cbae6f33d97acba572d81c239e9122b3->leave($__internal_62ec77ac5d7778970314318730e6f3c4cbae6f33d97acba572d81c239e9122b3_prof);

        
        $__internal_8a81bfbd8048087f6fe0a413cac99ffb4538aa3105e3ef70ba465706b55e4b47->leave($__internal_8a81bfbd8048087f6fe0a413cac99ffb4538aa3105e3ef70ba465706b55e4b47_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_06e562b0c79810829140618df37acf5f086f3c90d311d9def3368e600995ef5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e562b0c79810829140618df37acf5f086f3c90d311d9def3368e600995ef5f->enter($__internal_06e562b0c79810829140618df37acf5f086f3c90d311d9def3368e600995ef5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_1b64b5876d89c0cba1e530c313f750378d9c2ab54a60502b90d332d2098b7bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b64b5876d89c0cba1e530c313f750378d9c2ab54a60502b90d332d2098b7bf6->enter($__internal_1b64b5876d89c0cba1e530c313f750378d9c2ab54a60502b90d332d2098b7bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_1b64b5876d89c0cba1e530c313f750378d9c2ab54a60502b90d332d2098b7bf6->leave($__internal_1b64b5876d89c0cba1e530c313f750378d9c2ab54a60502b90d332d2098b7bf6_prof);

        
        $__internal_06e562b0c79810829140618df37acf5f086f3c90d311d9def3368e600995ef5f->leave($__internal_06e562b0c79810829140618df37acf5f086f3c90d311d9def3368e600995ef5f_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ea7ca1deca1e0cff60441a92284c147b8f058ad4ee0781fd4ddd6dda827ad93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7ca1deca1e0cff60441a92284c147b8f058ad4ee0781fd4ddd6dda827ad93f->enter($__internal_ea7ca1deca1e0cff60441a92284c147b8f058ad4ee0781fd4ddd6dda827ad93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_b3086f3c87f93deeb89d077ff6097be94f8af1a18500d035b752c4c48ed52030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3086f3c87f93deeb89d077ff6097be94f8af1a18500d035b752c4c48ed52030->enter($__internal_b3086f3c87f93deeb89d077ff6097be94f8af1a18500d035b752c4c48ed52030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756"]) ? $context["__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756"] : $this->getContext($context, "__internal_cf41aa7c0a2ec5c0a5be135e44b6a25dedfcc71ff7484eba65a85a6601d37756")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b3086f3c87f93deeb89d077ff6097be94f8af1a18500d035b752c4c48ed52030->leave($__internal_b3086f3c87f93deeb89d077ff6097be94f8af1a18500d035b752c4c48ed52030_prof);

        
        $__internal_ea7ca1deca1e0cff60441a92284c147b8f058ad4ee0781fd4ddd6dda827ad93f->leave($__internal_ea7ca1deca1e0cff60441a92284c147b8f058ad4ee0781fd4ddd6dda827ad93f_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_43d3dddf8dd3041ba230a2bd94dec7e72d65508e8c0fce2b6200aa1514ea7445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d3dddf8dd3041ba230a2bd94dec7e72d65508e8c0fce2b6200aa1514ea7445->enter($__internal_43d3dddf8dd3041ba230a2bd94dec7e72d65508e8c0fce2b6200aa1514ea7445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4f72f33fdb4e693b861ef092a4c77d8caa03ae16937d5eb145e1ae50c00b9e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f72f33fdb4e693b861ef092a4c77d8caa03ae16937d5eb145e1ae50c00b9e30->enter($__internal_4f72f33fdb4e693b861ef092a4c77d8caa03ae16937d5eb145e1ae50c00b9e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_4f72f33fdb4e693b861ef092a4c77d8caa03ae16937d5eb145e1ae50c00b9e30->leave($__internal_4f72f33fdb4e693b861ef092a4c77d8caa03ae16937d5eb145e1ae50c00b9e30_prof);

        
        $__internal_43d3dddf8dd3041ba230a2bd94dec7e72d65508e8c0fce2b6200aa1514ea7445->leave($__internal_43d3dddf8dd3041ba230a2bd94dec7e72d65508e8c0fce2b6200aa1514ea7445_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_f29f7bbc6398884c6874a48e2c64bd574f88bbd7734a8cc6bd816ceab966a7f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29f7bbc6398884c6874a48e2c64bd574f88bbd7734a8cc6bd816ceab966a7f7->enter($__internal_f29f7bbc6398884c6874a48e2c64bd574f88bbd7734a8cc6bd816ceab966a7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_a6a9ca72930ee0ab1bd9a5cde114302aac9ba0e8c13f631e1e1403d7abf1aad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a9ca72930ee0ab1bd9a5cde114302aac9ba0e8c13f631e1e1403d7abf1aad3->enter($__internal_a6a9ca72930ee0ab1bd9a5cde114302aac9ba0e8c13f631e1e1403d7abf1aad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_a6a9ca72930ee0ab1bd9a5cde114302aac9ba0e8c13f631e1e1403d7abf1aad3->leave($__internal_a6a9ca72930ee0ab1bd9a5cde114302aac9ba0e8c13f631e1e1403d7abf1aad3_prof);

        
        $__internal_f29f7bbc6398884c6874a48e2c64bd574f88bbd7734a8cc6bd816ceab966a7f7->leave($__internal_f29f7bbc6398884c6874a48e2c64bd574f88bbd7734a8cc6bd816ceab966a7f7_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_9bd3d66e6b1b9ce06361a33ef93eeab75aadb39df3b16f87575b503d12a5b648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd3d66e6b1b9ce06361a33ef93eeab75aadb39df3b16f87575b503d12a5b648->enter($__internal_9bd3d66e6b1b9ce06361a33ef93eeab75aadb39df3b16f87575b503d12a5b648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_66ba02945eda21a43e32e64724ff6af51d9612c5b776d83c30199a7e025a1a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ba02945eda21a43e32e64724ff6af51d9612c5b776d83c30199a7e025a1a73->enter($__internal_66ba02945eda21a43e32e64724ff6af51d9612c5b776d83c30199a7e025a1a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_66ba02945eda21a43e32e64724ff6af51d9612c5b776d83c30199a7e025a1a73->leave($__internal_66ba02945eda21a43e32e64724ff6af51d9612c5b776d83c30199a7e025a1a73_prof);

        
        $__internal_9bd3d66e6b1b9ce06361a33ef93eeab75aadb39df3b16f87575b503d12a5b648->leave($__internal_9bd3d66e6b1b9ce06361a33ef93eeab75aadb39df3b16f87575b503d12a5b648_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:new.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/new.html.twig");
    }
}
