<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_8194eb023ee06e906cf9d657379dedeec467872b46116fd05bf78c782d1e4caa extends Twig_Template
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
        $__internal_42badf2ce68b1a64d10bf45c3c47e74570c79d7d63708c721268bfab8b4c0338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42badf2ce68b1a64d10bf45c3c47e74570c79d7d63708c721268bfab8b4c0338->enter($__internal_42badf2ce68b1a64d10bf45c3c47e74570c79d7d63708c721268bfab8b4c0338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_8f55a11d7fff644dfa93f704266dc51c83ed5e1d976f5c08bd8726a88a28f3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f55a11d7fff644dfa93f704266dc51c83ed5e1d976f5c08bd8726a88a28f3c5->enter($__internal_8f55a11d7fff644dfa93f704266dc51c83ed5e1d976f5c08bd8726a88a28f3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_42badf2ce68b1a64d10bf45c3c47e74570c79d7d63708c721268bfab8b4c0338->leave($__internal_42badf2ce68b1a64d10bf45c3c47e74570c79d7d63708c721268bfab8b4c0338_prof);

        
        $__internal_8f55a11d7fff644dfa93f704266dc51c83ed5e1d976f5c08bd8726a88a28f3c5->leave($__internal_8f55a11d7fff644dfa93f704266dc51c83ed5e1d976f5c08bd8726a88a28f3c5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_datetimetz.html.twig");
    }
}
