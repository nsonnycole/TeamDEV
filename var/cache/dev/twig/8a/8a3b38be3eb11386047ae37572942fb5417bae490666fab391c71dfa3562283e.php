<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_0d1578471139d9b384ea29797f586fa888c6644f66a4189129eeb44060a2adf1 extends Twig_Template
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
        $__internal_10982e5c4dfb1a9a63e2992ac781f833f090f0506beb4cc9c134e272b7b59648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10982e5c4dfb1a9a63e2992ac781f833f090f0506beb4cc9c134e272b7b59648->enter($__internal_10982e5c4dfb1a9a63e2992ac781f833f090f0506beb4cc9c134e272b7b59648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_323de57a8ce9f824b86a0a45c175c57408ac26e1c78073b88444bbf7c44709fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323de57a8ce9f824b86a0a45c175c57408ac26e1c78073b88444bbf7c44709fc->enter($__internal_323de57a8ce9f824b86a0a45c175c57408ac26e1c78073b88444bbf7c44709fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_10982e5c4dfb1a9a63e2992ac781f833f090f0506beb4cc9c134e272b7b59648->leave($__internal_10982e5c4dfb1a9a63e2992ac781f833f090f0506beb4cc9c134e272b7b59648_prof);

        
        $__internal_323de57a8ce9f824b86a0a45c175c57408ac26e1c78073b88444bbf7c44709fc->leave($__internal_323de57a8ce9f824b86a0a45c175c57408ac26e1c78073b88444bbf7c44709fc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_tel.html.twig");
    }
}
