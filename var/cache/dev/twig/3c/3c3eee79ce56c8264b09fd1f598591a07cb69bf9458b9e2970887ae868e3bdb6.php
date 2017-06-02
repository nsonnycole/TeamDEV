<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_a9fd4c04f6e2f8f78260346d11a1532a7c0e14254ee61cb56e8af5739f14a0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14add10cad3005c582bcc2dc4f52e7cc40f377a6d48b1859fd1d78dd545fdcd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14add10cad3005c582bcc2dc4f52e7cc40f377a6d48b1859fd1d78dd545fdcd0->enter($__internal_14add10cad3005c582bcc2dc4f52e7cc40f377a6d48b1859fd1d78dd545fdcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        $__internal_a75b8a9f27ab1f58ffdc220e45746c51e4f7965a793669269ee6d3ba8782b238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75b8a9f27ab1f58ffdc220e45746c51e4f7965a793669269ee6d3ba8782b238->enter($__internal_a75b8a9f27ab1f58ffdc220e45746c51e4f7965a793669269ee6d3ba8782b238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_14add10cad3005c582bcc2dc4f52e7cc40f377a6d48b1859fd1d78dd545fdcd0->leave($__internal_14add10cad3005c582bcc2dc4f52e7cc40f377a6d48b1859fd1d78dd545fdcd0_prof);

        
        $__internal_a75b8a9f27ab1f58ffdc220e45746c51e4f7965a793669269ee6d3ba8782b238->leave($__internal_a75b8a9f27ab1f58ffdc220e45746c51e4f7965a793669269ee6d3ba8782b238_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_date.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_date.html.twig");
    }
}
