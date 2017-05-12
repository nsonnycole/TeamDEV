<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7f6cf7cf6084033c205d6f2cf169d61a2d5840241930bb7df75097ff0f44f49d extends Twig_Template
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
        $__internal_ea7c1bd1ac505c4737daac4604ae6113f64f8a6e15cc5deb25d7aec9ba8056a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7c1bd1ac505c4737daac4604ae6113f64f8a6e15cc5deb25d7aec9ba8056a2->enter($__internal_ea7c1bd1ac505c4737daac4604ae6113f64f8a6e15cc5deb25d7aec9ba8056a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f9eac2f2dd8cc0d4dddf9bab278c8d24327dec291eedb395f91b282dcb1e267f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9eac2f2dd8cc0d4dddf9bab278c8d24327dec291eedb395f91b282dcb1e267f->enter($__internal_f9eac2f2dd8cc0d4dddf9bab278c8d24327dec291eedb395f91b282dcb1e267f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea7c1bd1ac505c4737daac4604ae6113f64f8a6e15cc5deb25d7aec9ba8056a2->leave($__internal_ea7c1bd1ac505c4737daac4604ae6113f64f8a6e15cc5deb25d7aec9ba8056a2_prof);

        
        $__internal_f9eac2f2dd8cc0d4dddf9bab278c8d24327dec291eedb395f91b282dcb1e267f->leave($__internal_f9eac2f2dd8cc0d4dddf9bab278c8d24327dec291eedb395f91b282dcb1e267f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5714833702f93c4182b5beeaf8b24b8244ba3f7ee5e74b661e375b45d68e65ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5714833702f93c4182b5beeaf8b24b8244ba3f7ee5e74b661e375b45d68e65ed->enter($__internal_5714833702f93c4182b5beeaf8b24b8244ba3f7ee5e74b661e375b45d68e65ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_547b96f98e181c8e6a529968502c58cc76eef37add2ba952e9330ce612885deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547b96f98e181c8e6a529968502c58cc76eef37add2ba952e9330ce612885deb->enter($__internal_547b96f98e181c8e6a529968502c58cc76eef37add2ba952e9330ce612885deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_547b96f98e181c8e6a529968502c58cc76eef37add2ba952e9330ce612885deb->leave($__internal_547b96f98e181c8e6a529968502c58cc76eef37add2ba952e9330ce612885deb_prof);

        
        $__internal_5714833702f93c4182b5beeaf8b24b8244ba3f7ee5e74b661e375b45d68e65ed->leave($__internal_5714833702f93c4182b5beeaf8b24b8244ba3f7ee5e74b661e375b45d68e65ed_prof);

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
