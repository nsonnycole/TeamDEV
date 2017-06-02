<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_012880f273c91c31058e7b1b81354c07754fd2fd0d888252fe92b0a5584c2d16 extends Twig_Template
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
        $__internal_946353ce0371ddcf7141108d8bf37a854d482c2147952361cd7c9f31930e3d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946353ce0371ddcf7141108d8bf37a854d482c2147952361cd7c9f31930e3d68->enter($__internal_946353ce0371ddcf7141108d8bf37a854d482c2147952361cd7c9f31930e3d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_038f8bc5f7d3cd5045e40e8384ed375073e0156748ee05789826f3e1f0ee8964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038f8bc5f7d3cd5045e40e8384ed375073e0156748ee05789826f3e1f0ee8964->enter($__internal_038f8bc5f7d3cd5045e40e8384ed375073e0156748ee05789826f3e1f0ee8964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_946353ce0371ddcf7141108d8bf37a854d482c2147952361cd7c9f31930e3d68->leave($__internal_946353ce0371ddcf7141108d8bf37a854d482c2147952361cd7c9f31930e3d68_prof);

        
        $__internal_038f8bc5f7d3cd5045e40e8384ed375073e0156748ee05789826f3e1f0ee8964->leave($__internal_038f8bc5f7d3cd5045e40e8384ed375073e0156748ee05789826f3e1f0ee8964_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_id.html.twig");
    }
}
