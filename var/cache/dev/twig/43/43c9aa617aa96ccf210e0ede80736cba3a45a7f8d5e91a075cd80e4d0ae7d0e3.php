<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_bdaa2a6090074f47e555be341e090079b1974e4e3969f255d6e6d7fcf431ce9e extends Twig_Template
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
        $__internal_2a6010bf1cffae1bd492fc42338e18acd86906f09871be06e035656f02deb06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6010bf1cffae1bd492fc42338e18acd86906f09871be06e035656f02deb06e->enter($__internal_2a6010bf1cffae1bd492fc42338e18acd86906f09871be06e035656f02deb06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_aab281ef846052160d45576e682a9e56e7b5a2c85da7d795f06db8374813c072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab281ef846052160d45576e682a9e56e7b5a2c85da7d795f06db8374813c072->enter($__internal_aab281ef846052160d45576e682a9e56e7b5a2c85da7d795f06db8374813c072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_2a6010bf1cffae1bd492fc42338e18acd86906f09871be06e035656f02deb06e->leave($__internal_2a6010bf1cffae1bd492fc42338e18acd86906f09871be06e035656f02deb06e_prof);

        
        $__internal_aab281ef846052160d45576e682a9e56e7b5a2c85da7d795f06db8374813c072->leave($__internal_aab281ef846052160d45576e682a9e56e7b5a2c85da7d795f06db8374813c072_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
", "@EasyAdmin/default/field_datetime.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_datetime.html.twig");
    }
}
