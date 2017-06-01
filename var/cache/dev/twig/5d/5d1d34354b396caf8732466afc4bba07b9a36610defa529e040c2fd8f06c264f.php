<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_dfb054f2bbef6a4ba25fa9273961a95846931fb011f1017040339bc1b65129e9 extends Twig_Template
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
        $__internal_3ed6de4580b4ea396d1050b04aafea1945deb4db4cd6e435f5a7dd9bb208c8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed6de4580b4ea396d1050b04aafea1945deb4db4cd6e435f5a7dd9bb208c8d5->enter($__internal_3ed6de4580b4ea396d1050b04aafea1945deb4db4cd6e435f5a7dd9bb208c8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_eac89fc503c2b8c275f8d6a61c04c125e8be5b517deb4372aada38015197e05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac89fc503c2b8c275f8d6a61c04c125e8be5b517deb4372aada38015197e05f->enter($__internal_eac89fc503c2b8c275f8d6a61c04c125e8be5b517deb4372aada38015197e05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        echo "
";
        
        $__internal_3ed6de4580b4ea396d1050b04aafea1945deb4db4cd6e435f5a7dd9bb208c8d5->leave($__internal_3ed6de4580b4ea396d1050b04aafea1945deb4db4cd6e435f5a7dd9bb208c8d5_prof);

        
        $__internal_eac89fc503c2b8c275f8d6a61c04c125e8be5b517deb4372aada38015197e05f->leave($__internal_eac89fc503c2b8c275f8d6a61c04c125e8be5b517deb4372aada38015197e05f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_raw.html.twig");
    }
}
