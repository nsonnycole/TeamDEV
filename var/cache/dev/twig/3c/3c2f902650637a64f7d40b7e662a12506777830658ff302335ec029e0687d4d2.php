<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6a2828444970c8a939243bf3bd8f2efbaa15e3c65ce0ab808b6b56cb9ea00f28 extends Twig_Template
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
        $__internal_b4267382d1d3137ad06ca4283b421be34fee60ed18201537582a28a1ffd7311d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4267382d1d3137ad06ca4283b421be34fee60ed18201537582a28a1ffd7311d->enter($__internal_b4267382d1d3137ad06ca4283b421be34fee60ed18201537582a28a1ffd7311d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_ef7105434c950d1ce65f72e50a5b7cfa6014787063bc814f13a21ad4965f0a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7105434c950d1ce65f72e50a5b7cfa6014787063bc814f13a21ad4965f0a62->enter($__internal_ef7105434c950d1ce65f72e50a5b7cfa6014787063bc814f13a21ad4965f0a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b4267382d1d3137ad06ca4283b421be34fee60ed18201537582a28a1ffd7311d->leave($__internal_b4267382d1d3137ad06ca4283b421be34fee60ed18201537582a28a1ffd7311d_prof);

        
        $__internal_ef7105434c950d1ce65f72e50a5b7cfa6014787063bc814f13a21ad4965f0a62->leave($__internal_ef7105434c950d1ce65f72e50a5b7cfa6014787063bc814f13a21ad4965f0a62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
