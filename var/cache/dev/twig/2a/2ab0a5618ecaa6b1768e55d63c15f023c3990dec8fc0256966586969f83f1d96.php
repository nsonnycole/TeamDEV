<?php

/* EasyAdminBundle:default:field_toggle.html.twig */
class __TwigTemplate_fd82512227cd3dbd8959beebfed959e1297438f36802c07b9d48b5cca5ba7276 extends Twig_Template
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
        $__internal_efacdb5914ce0d47837b593182927745daef5154cdada6bcbf72f0eedbbf900f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efacdb5914ce0d47837b593182927745daef5154cdada6bcbf72f0eedbbf900f->enter($__internal_efacdb5914ce0d47837b593182927745daef5154cdada6bcbf72f0eedbbf900f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        $__internal_6b737247854d68855a78391fdc041dc18ddde07e4c70ad5087f7e3ef6475f295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b737247854d68855a78391fdc041dc18ddde07e4c70ad5087f7e3ef6475f295->enter($__internal_6b737247854d68855a78391fdc041dc18ddde07e4c70ad5087f7e3ef6475f295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 4
            echo "    ";
            if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_efacdb5914ce0d47837b593182927745daef5154cdada6bcbf72f0eedbbf900f->leave($__internal_efacdb5914ce0d47837b593182927745daef5154cdada6bcbf72f0eedbbf900f_prof);

        
        $__internal_6b737247854d68855a78391fdc041dc18ddde07e4c70ad5087f7e3ef6475f295->leave($__internal_6b737247854d68855a78391fdc041dc18ddde07e4c70ad5087f7e3ef6475f295_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' %}
    {% if value == true %}
        <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <input type=\"checkbox\" {{ value == true ? 'checked' : '' }}
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"{{ 'label.true'|trans }}\" data-off=\"{{ 'label.false'|trans }}\">
{% endif %}
", "EasyAdminBundle:default:field_toggle.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_toggle.html.twig");
    }
}
