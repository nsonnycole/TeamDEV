<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_696c31423c5ab39ba23c1e357ee5dd982527e869522f19986482eb140d12da6b extends Twig_Template
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
        $__internal_10b57938792c79dee0ef59c6c7f8f4363cdd39121003e164ef6890725fb80690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b57938792c79dee0ef59c6c7f8f4363cdd39121003e164ef6890725fb80690->enter($__internal_10b57938792c79dee0ef59c6c7f8f4363cdd39121003e164ef6890725fb80690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        $__internal_074c9036c4b7bfb2af306bbec9ff4e10fb37ba134135a1cd6407060cacdd2703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074c9036c4b7bfb2af306bbec9ff4e10fb37ba134135a1cd6407060cacdd2703->enter($__internal_074c9036c4b7bfb2af306bbec9ff4e10fb37ba134135a1cd6407060cacdd2703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_10b57938792c79dee0ef59c6c7f8f4363cdd39121003e164ef6890725fb80690->leave($__internal_10b57938792c79dee0ef59c6c7f8f4363cdd39121003e164ef6890725fb80690_prof);

        
        $__internal_074c9036c4b7bfb2af306bbec9ff4e10fb37ba134135a1cd6407060cacdd2703->leave($__internal_074c9036c4b7bfb2af306bbec9ff4e10fb37ba134135a1cd6407060cacdd2703_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(value) }}\">
</a>

<div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
    <img src=\"{{ asset(value) }}\">
</div>
", "EasyAdminBundle:default:field_image.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_image.html.twig");
    }
}
