<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_ab15711b793f756c77a447b354a2cbd516ef76bba03eeb4ee4407a298209365b extends Twig_Template
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
        $__internal_b5eeae1c085b336d3fb915a078efd4144d2575efc1c9d349a102e7bb641cd87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5eeae1c085b336d3fb915a078efd4144d2575efc1c9d349a102e7bb641cd87a->enter($__internal_b5eeae1c085b336d3fb915a078efd4144d2575efc1c9d349a102e7bb641cd87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_87dcdfa40c23c58a9ba4cc1b01014085c459502bece4fd873fbdbc5549ac95af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dcdfa40c23c58a9ba4cc1b01014085c459502bece4fd873fbdbc5549ac95af->enter($__internal_87dcdfa40c23c58a9ba4cc1b01014085c459502bece4fd873fbdbc5549ac95af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_b5eeae1c085b336d3fb915a078efd4144d2575efc1c9d349a102e7bb641cd87a->leave($__internal_b5eeae1c085b336d3fb915a078efd4144d2575efc1c9d349a102e7bb641cd87a_prof);

        
        $__internal_87dcdfa40c23c58a9ba4cc1b01014085c459502bece4fd873fbdbc5549ac95af->leave($__internal_87dcdfa40c23c58a9ba4cc1b01014085c459502bece4fd873fbdbc5549ac95af_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/label_null.html.twig");
    }
}
