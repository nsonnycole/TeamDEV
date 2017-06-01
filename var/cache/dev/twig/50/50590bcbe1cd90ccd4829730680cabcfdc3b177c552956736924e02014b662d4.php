<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_676ffbca5ac24418acfd1628ef13c76045d25c31c8a0a58b0671da68375539a6 extends Twig_Template
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
        $__internal_db8972f49c4300647bfa522c4ceba6c4ced99c50fb5b67dde7a8c39b8c43a846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8972f49c4300647bfa522c4ceba6c4ced99c50fb5b67dde7a8c39b8c43a846->enter($__internal_db8972f49c4300647bfa522c4ceba6c4ced99c50fb5b67dde7a8c39b8c43a846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_f50b04866f2bfe19b62b874d0f67ad11bf272c5b28a98586cd53909a9561c718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50b04866f2bfe19b62b874d0f67ad11bf272c5b28a98586cd53909a9561c718->enter($__internal_f50b04866f2bfe19b62b874d0f67ad11bf272c5b28a98586cd53909a9561c718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_db8972f49c4300647bfa522c4ceba6c4ced99c50fb5b67dde7a8c39b8c43a846->leave($__internal_db8972f49c4300647bfa522c4ceba6c4ced99c50fb5b67dde7a8c39b8c43a846_prof);

        
        $__internal_f50b04866f2bfe19b62b874d0f67ad11bf272c5b28a98586cd53909a9561c718->leave($__internal_f50b04866f2bfe19b62b874d0f67ad11bf272c5b28a98586cd53909a9561c718_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
", "EasyAdminBundle:default:field_time.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_time.html.twig");
    }
}
