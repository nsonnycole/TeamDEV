<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7e08034856465ba3a54647775b17648b52bc6f34fc698a0ece96e09d0c9fbadd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d4e27484782933447d2acc565278cb28d4e854f52126481e96e58aefe0aef828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e27484782933447d2acc565278cb28d4e854f52126481e96e58aefe0aef828->enter($__internal_d4e27484782933447d2acc565278cb28d4e854f52126481e96e58aefe0aef828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3f2c4156b59fb3fa1df5926397404dbdf81c92be6ceb6af3fd7cdd1003cd1fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2c4156b59fb3fa1df5926397404dbdf81c92be6ceb6af3fd7cdd1003cd1fb0->enter($__internal_3f2c4156b59fb3fa1df5926397404dbdf81c92be6ceb6af3fd7cdd1003cd1fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e27484782933447d2acc565278cb28d4e854f52126481e96e58aefe0aef828->leave($__internal_d4e27484782933447d2acc565278cb28d4e854f52126481e96e58aefe0aef828_prof);

        
        $__internal_3f2c4156b59fb3fa1df5926397404dbdf81c92be6ceb6af3fd7cdd1003cd1fb0->leave($__internal_3f2c4156b59fb3fa1df5926397404dbdf81c92be6ceb6af3fd7cdd1003cd1fb0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb9deea4397d504be1adc5cb5f96ac078c42658db6caedfbdf1bc1ab314fa0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9deea4397d504be1adc5cb5f96ac078c42658db6caedfbdf1bc1ab314fa0a7->enter($__internal_fb9deea4397d504be1adc5cb5f96ac078c42658db6caedfbdf1bc1ab314fa0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce853293eb0390528fa3bf87f1f4659e8960095d802f225215d420ad8ce2e79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce853293eb0390528fa3bf87f1f4659e8960095d802f225215d420ad8ce2e79b->enter($__internal_ce853293eb0390528fa3bf87f1f4659e8960095d802f225215d420ad8ce2e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ce853293eb0390528fa3bf87f1f4659e8960095d802f225215d420ad8ce2e79b->leave($__internal_ce853293eb0390528fa3bf87f1f4659e8960095d802f225215d420ad8ce2e79b_prof);

        
        $__internal_fb9deea4397d504be1adc5cb5f96ac078c42658db6caedfbdf1bc1ab314fa0a7->leave($__internal_fb9deea4397d504be1adc5cb5f96ac078c42658db6caedfbdf1bc1ab314fa0a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
