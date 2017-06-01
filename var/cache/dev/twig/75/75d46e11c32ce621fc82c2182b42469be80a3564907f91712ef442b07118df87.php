<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_7c53e5abe31cfa0476bfdc27e5ef9a75157c859fbf0e22be1e7cf9ee1fd04d1f extends Twig_Template
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
        $__internal_f2b8e9e699294ba73567ec8f17f7efe9b17aae39cbdd51ab30a43cbf02598050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b8e9e699294ba73567ec8f17f7efe9b17aae39cbdd51ab30a43cbf02598050->enter($__internal_f2b8e9e699294ba73567ec8f17f7efe9b17aae39cbdd51ab30a43cbf02598050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_cd3fd3bfd1e4751e65ea11369e52ec8be0ed8cdc7c107e27fbfd75ba95a6dd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3fd3bfd1e4751e65ea11369e52ec8be0ed8cdc7c107e27fbfd75ba95a6dd52->enter($__internal_cd3fd3bfd1e4751e65ea11369e52ec8be0ed8cdc7c107e27fbfd75ba95a6dd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_f2b8e9e699294ba73567ec8f17f7efe9b17aae39cbdd51ab30a43cbf02598050->leave($__internal_f2b8e9e699294ba73567ec8f17f7efe9b17aae39cbdd51ab30a43cbf02598050_prof);

        
        $__internal_cd3fd3bfd1e4751e65ea11369e52ec8be0ed8cdc7c107e27fbfd75ba95a6dd52->leave($__internal_cd3fd3bfd1e4751e65ea11369e52ec8be0ed8cdc7c107e27fbfd75ba95a6dd52_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
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
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_email.html.twig");
    }
}
