<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c4ece432f8222cf7928725e5a813a0d527ced5abbe1f378d2feeeb0e4942f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4ece432f8222cf7928725e5a813a0d527ced5abbe1f378d2feeeb0e4942f3d->enter($__internal_1c4ece432f8222cf7928725e5a813a0d527ced5abbe1f378d2feeeb0e4942f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e9783bd13289e863584250ded9959c05c6df737f5c38ae5a69f72fa13706be57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9783bd13289e863584250ded9959c05c6df737f5c38ae5a69f72fa13706be57->enter($__internal_e9783bd13289e863584250ded9959c05c6df737f5c38ae5a69f72fa13706be57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c4ece432f8222cf7928725e5a813a0d527ced5abbe1f378d2feeeb0e4942f3d->leave($__internal_1c4ece432f8222cf7928725e5a813a0d527ced5abbe1f378d2feeeb0e4942f3d_prof);

        
        $__internal_e9783bd13289e863584250ded9959c05c6df737f5c38ae5a69f72fa13706be57->leave($__internal_e9783bd13289e863584250ded9959c05c6df737f5c38ae5a69f72fa13706be57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa564e4c193a8a07ee6565bce915f364a15edc743e2dc3558d6dae9fcb78b4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa564e4c193a8a07ee6565bce915f364a15edc743e2dc3558d6dae9fcb78b4cf->enter($__internal_aa564e4c193a8a07ee6565bce915f364a15edc743e2dc3558d6dae9fcb78b4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c975896bd683146cc6a33d6ba754b0b59ab87e471c4919ac56cf58f8757a11a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c975896bd683146cc6a33d6ba754b0b59ab87e471c4919ac56cf58f8757a11a6->enter($__internal_c975896bd683146cc6a33d6ba754b0b59ab87e471c4919ac56cf58f8757a11a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c975896bd683146cc6a33d6ba754b0b59ab87e471c4919ac56cf58f8757a11a6->leave($__internal_c975896bd683146cc6a33d6ba754b0b59ab87e471c4919ac56cf58f8757a11a6_prof);

        
        $__internal_aa564e4c193a8a07ee6565bce915f364a15edc743e2dc3558d6dae9fcb78b4cf->leave($__internal_aa564e4c193a8a07ee6565bce915f364a15edc743e2dc3558d6dae9fcb78b4cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04a98b496753a01dd7567c9889de596cd0ae16e1cca9babc699e89caca1149c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a98b496753a01dd7567c9889de596cd0ae16e1cca9babc699e89caca1149c2->enter($__internal_04a98b496753a01dd7567c9889de596cd0ae16e1cca9babc699e89caca1149c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b0d99c189909d6cbc95f580272cab7d7cb927da670ba3f35655a340bb53be59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0d99c189909d6cbc95f580272cab7d7cb927da670ba3f35655a340bb53be59->enter($__internal_8b0d99c189909d6cbc95f580272cab7d7cb927da670ba3f35655a340bb53be59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b0d99c189909d6cbc95f580272cab7d7cb927da670ba3f35655a340bb53be59->leave($__internal_8b0d99c189909d6cbc95f580272cab7d7cb927da670ba3f35655a340bb53be59_prof);

        
        $__internal_04a98b496753a01dd7567c9889de596cd0ae16e1cca9babc699e89caca1149c2->leave($__internal_04a98b496753a01dd7567c9889de596cd0ae16e1cca9babc699e89caca1149c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbeb65347af4ce7c7cec15d0b17e2d2a1ba4e785211eeaaf2a9f397dd592951a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbeb65347af4ce7c7cec15d0b17e2d2a1ba4e785211eeaaf2a9f397dd592951a->enter($__internal_cbeb65347af4ce7c7cec15d0b17e2d2a1ba4e785211eeaaf2a9f397dd592951a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2fef7b17c2a70b6776a5a5176e5b305e229c9cae81f29a30f52f524be1b13fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fef7b17c2a70b6776a5a5176e5b305e229c9cae81f29a30f52f524be1b13fc->enter($__internal_d2fef7b17c2a70b6776a5a5176e5b305e229c9cae81f29a30f52f524be1b13fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2fef7b17c2a70b6776a5a5176e5b305e229c9cae81f29a30f52f524be1b13fc->leave($__internal_d2fef7b17c2a70b6776a5a5176e5b305e229c9cae81f29a30f52f524be1b13fc_prof);

        
        $__internal_cbeb65347af4ce7c7cec15d0b17e2d2a1ba4e785211eeaaf2a9f397dd592951a->leave($__internal_cbeb65347af4ce7c7cec15d0b17e2d2a1ba4e785211eeaaf2a9f397dd592951a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
