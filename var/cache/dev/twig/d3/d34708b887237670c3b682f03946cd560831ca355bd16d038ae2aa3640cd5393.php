<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_df7b937b0becc9e2b712abd85860304de2f833d13da4fb40536abe0623d55f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_788dd0f086dafa923a3d639b694f90eeaa5f52e2881298ed1aee8f76d9daec02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788dd0f086dafa923a3d639b694f90eeaa5f52e2881298ed1aee8f76d9daec02->enter($__internal_788dd0f086dafa923a3d639b694f90eeaa5f52e2881298ed1aee8f76d9daec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_04729c8e9205786d200da0ea6117669bc720aaba1c405fbaa99f91c173eeeddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04729c8e9205786d200da0ea6117669bc720aaba1c405fbaa99f91c173eeeddf->enter($__internal_04729c8e9205786d200da0ea6117669bc720aaba1c405fbaa99f91c173eeeddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_788dd0f086dafa923a3d639b694f90eeaa5f52e2881298ed1aee8f76d9daec02->leave($__internal_788dd0f086dafa923a3d639b694f90eeaa5f52e2881298ed1aee8f76d9daec02_prof);

        
        $__internal_04729c8e9205786d200da0ea6117669bc720aaba1c405fbaa99f91c173eeeddf->leave($__internal_04729c8e9205786d200da0ea6117669bc720aaba1c405fbaa99f91c173eeeddf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d017f76b79ae45911007e7e37141cbeecfcd2426e46c25b0cc7dd4cb6a02f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d017f76b79ae45911007e7e37141cbeecfcd2426e46c25b0cc7dd4cb6a02f88->enter($__internal_9d017f76b79ae45911007e7e37141cbeecfcd2426e46c25b0cc7dd4cb6a02f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc48ea2d7614a55a84b9894e694e6b2fb63a866df5aa374e4a1baac67f5f90af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc48ea2d7614a55a84b9894e694e6b2fb63a866df5aa374e4a1baac67f5f90af->enter($__internal_cc48ea2d7614a55a84b9894e694e6b2fb63a866df5aa374e4a1baac67f5f90af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_cc48ea2d7614a55a84b9894e694e6b2fb63a866df5aa374e4a1baac67f5f90af->leave($__internal_cc48ea2d7614a55a84b9894e694e6b2fb63a866df5aa374e4a1baac67f5f90af_prof);

        
        $__internal_9d017f76b79ae45911007e7e37141cbeecfcd2426e46c25b0cc7dd4cb6a02f88->leave($__internal_9d017f76b79ae45911007e7e37141cbeecfcd2426e46c25b0cc7dd4cb6a02f88_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
