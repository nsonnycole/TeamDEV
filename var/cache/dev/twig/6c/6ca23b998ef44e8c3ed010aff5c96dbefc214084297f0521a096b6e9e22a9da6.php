<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_125005c1c3366106ec7a343a875d634608d51553100930f90d149103a1acf3d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8af3c935c2f606d2af91828f7205a7fe994d01449d879d84c7bbe7c062c1f79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af3c935c2f606d2af91828f7205a7fe994d01449d879d84c7bbe7c062c1f79b->enter($__internal_8af3c935c2f606d2af91828f7205a7fe994d01449d879d84c7bbe7c062c1f79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1895acd654835e14f69cb74953517c5489ef4d50dab01495de5be9136d90a8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1895acd654835e14f69cb74953517c5489ef4d50dab01495de5be9136d90a8fd->enter($__internal_1895acd654835e14f69cb74953517c5489ef4d50dab01495de5be9136d90a8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8af3c935c2f606d2af91828f7205a7fe994d01449d879d84c7bbe7c062c1f79b->leave($__internal_8af3c935c2f606d2af91828f7205a7fe994d01449d879d84c7bbe7c062c1f79b_prof);

        
        $__internal_1895acd654835e14f69cb74953517c5489ef4d50dab01495de5be9136d90a8fd->leave($__internal_1895acd654835e14f69cb74953517c5489ef4d50dab01495de5be9136d90a8fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4dad4784c6973c4882d800a413995809b74fba977d30bafee6c5e32c6d7647da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dad4784c6973c4882d800a413995809b74fba977d30bafee6c5e32c6d7647da->enter($__internal_4dad4784c6973c4882d800a413995809b74fba977d30bafee6c5e32c6d7647da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_db8d7aa9e5943c3a68aa4b5c1b96f72ed7b6cb3eec844677f7c44925b1f7ad88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8d7aa9e5943c3a68aa4b5c1b96f72ed7b6cb3eec844677f7c44925b1f7ad88->enter($__internal_db8d7aa9e5943c3a68aa4b5c1b96f72ed7b6cb3eec844677f7c44925b1f7ad88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_db8d7aa9e5943c3a68aa4b5c1b96f72ed7b6cb3eec844677f7c44925b1f7ad88->leave($__internal_db8d7aa9e5943c3a68aa4b5c1b96f72ed7b6cb3eec844677f7c44925b1f7ad88_prof);

        
        $__internal_4dad4784c6973c4882d800a413995809b74fba977d30bafee6c5e32c6d7647da->leave($__internal_4dad4784c6973c4882d800a413995809b74fba977d30bafee6c5e32c6d7647da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
