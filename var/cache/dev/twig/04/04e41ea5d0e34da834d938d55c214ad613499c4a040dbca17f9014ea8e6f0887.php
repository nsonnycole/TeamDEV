<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_b776685ed02eea5775ab4d0e259e5888dbead32b3beb81189bf3fa1b98a536b1 extends Twig_Template
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
        $__internal_0b18a8e94bccb8eba8976d0329e0fa4f5f3aaaf96c3bac8abda6f20a8ec00807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b18a8e94bccb8eba8976d0329e0fa4f5f3aaaf96c3bac8abda6f20a8ec00807->enter($__internal_0b18a8e94bccb8eba8976d0329e0fa4f5f3aaaf96c3bac8abda6f20a8ec00807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_2dffb5723b21087ecb61e167a61b52152ed5f18f2e777ad9d18dfd813a2807a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dffb5723b21087ecb61e167a61b52152ed5f18f2e777ad9d18dfd813a2807a9->enter($__internal_2dffb5723b21087ecb61e167a61b52152ed5f18f2e777ad9d18dfd813a2807a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_0b18a8e94bccb8eba8976d0329e0fa4f5f3aaaf96c3bac8abda6f20a8ec00807->leave($__internal_0b18a8e94bccb8eba8976d0329e0fa4f5f3aaaf96c3bac8abda6f20a8ec00807_prof);

        
        $__internal_2dffb5723b21087ecb61e167a61b52152ed5f18f2e777ad9d18dfd813a2807a9->leave($__internal_2dffb5723b21087ecb61e167a61b52152ed5f18f2e777ad9d18dfd813a2807a9_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_date.html.twig");
    }
}
