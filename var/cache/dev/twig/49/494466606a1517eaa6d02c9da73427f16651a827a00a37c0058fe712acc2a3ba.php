<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_5446de857a497df11b4b5a80fc67e186e00d48e57d8c0295bec24bcdcd71a4b3 extends Twig_Template
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
        $__internal_9f3012f17bef73597185719d29c367e086d63a543b7b11c537a4cbc8ccff120b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3012f17bef73597185719d29c367e086d63a543b7b11c537a4cbc8ccff120b->enter($__internal_9f3012f17bef73597185719d29c367e086d63a543b7b11c537a4cbc8ccff120b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_97492999656caf718c7054154785f2e801097f9278f683b33820793a24cc714e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97492999656caf718c7054154785f2e801097f9278f683b33820793a24cc714e->enter($__internal_97492999656caf718c7054154785f2e801097f9278f683b33820793a24cc714e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_9f3012f17bef73597185719d29c367e086d63a543b7b11c537a4cbc8ccff120b->leave($__internal_9f3012f17bef73597185719d29c367e086d63a543b7b11c537a4cbc8ccff120b_prof);

        
        $__internal_97492999656caf718c7054154785f2e801097f9278f683b33820793a24cc714e->leave($__internal_97492999656caf718c7054154785f2e801097f9278f683b33820793a24cc714e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_string.html.twig");
    }
}
