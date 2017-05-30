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
        $__internal_2242859d5c7d72f55e4a7651d8b97d4bf5644f6727dda7929b4e49a3efc6e23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2242859d5c7d72f55e4a7651d8b97d4bf5644f6727dda7929b4e49a3efc6e23f->enter($__internal_2242859d5c7d72f55e4a7651d8b97d4bf5644f6727dda7929b4e49a3efc6e23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_86ff08c0694f57719913033dc8e355037ae5f463082091ef9bcb0c6a5cb085b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ff08c0694f57719913033dc8e355037ae5f463082091ef9bcb0c6a5cb085b3->enter($__internal_86ff08c0694f57719913033dc8e355037ae5f463082091ef9bcb0c6a5cb085b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2242859d5c7d72f55e4a7651d8b97d4bf5644f6727dda7929b4e49a3efc6e23f->leave($__internal_2242859d5c7d72f55e4a7651d8b97d4bf5644f6727dda7929b4e49a3efc6e23f_prof);

        
        $__internal_86ff08c0694f57719913033dc8e355037ae5f463082091ef9bcb0c6a5cb085b3->leave($__internal_86ff08c0694f57719913033dc8e355037ae5f463082091ef9bcb0c6a5cb085b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd6e83cf605538c60019f5fa1c262e48db4d5f09f39dc1fa4f0888fe61b52276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6e83cf605538c60019f5fa1c262e48db4d5f09f39dc1fa4f0888fe61b52276->enter($__internal_cd6e83cf605538c60019f5fa1c262e48db4d5f09f39dc1fa4f0888fe61b52276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c2e6b9925df8b4cfabac4663b00c312d0665b25288dbd2b881b612bf23b98c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e6b9925df8b4cfabac4663b00c312d0665b25288dbd2b881b612bf23b98c51->enter($__internal_c2e6b9925df8b4cfabac4663b00c312d0665b25288dbd2b881b612bf23b98c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c2e6b9925df8b4cfabac4663b00c312d0665b25288dbd2b881b612bf23b98c51->leave($__internal_c2e6b9925df8b4cfabac4663b00c312d0665b25288dbd2b881b612bf23b98c51_prof);

        
        $__internal_cd6e83cf605538c60019f5fa1c262e48db4d5f09f39dc1fa4f0888fe61b52276->leave($__internal_cd6e83cf605538c60019f5fa1c262e48db4d5f09f39dc1fa4f0888fe61b52276_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1be58083885a0450b5f79a53c070b5d4dc3cc85893405da2aafc66bbebb1f9c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be58083885a0450b5f79a53c070b5d4dc3cc85893405da2aafc66bbebb1f9c1->enter($__internal_1be58083885a0450b5f79a53c070b5d4dc3cc85893405da2aafc66bbebb1f9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_50d22dfd5fc858c26c4e6e76620be529a0e9cc82d6c46f925d09b645f70c2bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d22dfd5fc858c26c4e6e76620be529a0e9cc82d6c46f925d09b645f70c2bbf->enter($__internal_50d22dfd5fc858c26c4e6e76620be529a0e9cc82d6c46f925d09b645f70c2bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50d22dfd5fc858c26c4e6e76620be529a0e9cc82d6c46f925d09b645f70c2bbf->leave($__internal_50d22dfd5fc858c26c4e6e76620be529a0e9cc82d6c46f925d09b645f70c2bbf_prof);

        
        $__internal_1be58083885a0450b5f79a53c070b5d4dc3cc85893405da2aafc66bbebb1f9c1->leave($__internal_1be58083885a0450b5f79a53c070b5d4dc3cc85893405da2aafc66bbebb1f9c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8774f1a2e8d005232db48c522ef7c744cefb4eacb92057798aa153c18f5d94dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8774f1a2e8d005232db48c522ef7c744cefb4eacb92057798aa153c18f5d94dd->enter($__internal_8774f1a2e8d005232db48c522ef7c744cefb4eacb92057798aa153c18f5d94dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb072dc87cfe79a685dec1d47a26e4ccd69f4bfe810956d175be025e77fbc188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb072dc87cfe79a685dec1d47a26e4ccd69f4bfe810956d175be025e77fbc188->enter($__internal_bb072dc87cfe79a685dec1d47a26e4ccd69f4bfe810956d175be025e77fbc188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb072dc87cfe79a685dec1d47a26e4ccd69f4bfe810956d175be025e77fbc188->leave($__internal_bb072dc87cfe79a685dec1d47a26e4ccd69f4bfe810956d175be025e77fbc188_prof);

        
        $__internal_8774f1a2e8d005232db48c522ef7c744cefb4eacb92057798aa153c18f5d94dd->leave($__internal_8774f1a2e8d005232db48c522ef7c744cefb4eacb92057798aa153c18f5d94dd_prof);

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
