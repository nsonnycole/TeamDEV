<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_fefb943398bdf81eab3ef2784f0582cd63c0d8ca868ca072702cc4cfaf629d26 extends Twig_Template
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
        $__internal_96bb4fd115ef7a9c384ce213d8c8c6a8ad63e1823f9140436b20fe6c8fd24286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bb4fd115ef7a9c384ce213d8c8c6a8ad63e1823f9140436b20fe6c8fd24286->enter($__internal_96bb4fd115ef7a9c384ce213d8c8c6a8ad63e1823f9140436b20fe6c8fd24286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_366d5bd7d820baf57b61967caafa8e3f68dd391706907690131d849b32e722b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366d5bd7d820baf57b61967caafa8e3f68dd391706907690131d849b32e722b8->enter($__internal_366d5bd7d820baf57b61967caafa8e3f68dd391706907690131d849b32e722b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_96bb4fd115ef7a9c384ce213d8c8c6a8ad63e1823f9140436b20fe6c8fd24286->leave($__internal_96bb4fd115ef7a9c384ce213d8c8c6a8ad63e1823f9140436b20fe6c8fd24286_prof);

        
        $__internal_366d5bd7d820baf57b61967caafa8e3f68dd391706907690131d849b32e722b8->leave($__internal_366d5bd7d820baf57b61967caafa8e3f68dd391706907690131d849b32e722b8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_datetime.html.twig");
    }
}
