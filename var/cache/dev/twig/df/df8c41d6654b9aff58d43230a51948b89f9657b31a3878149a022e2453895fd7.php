<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f99cb19b7eefb600764eea3b66153269a19870a1febd568aac1e673239ceb16f extends Twig_Template
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
        $__internal_f9c2cb3a11f10d2d21b6d32d4dd2d140eb05dc8ec39127c08081add3aaf0c6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c2cb3a11f10d2d21b6d32d4dd2d140eb05dc8ec39127c08081add3aaf0c6b9->enter($__internal_f9c2cb3a11f10d2d21b6d32d4dd2d140eb05dc8ec39127c08081add3aaf0c6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_db8c3f33fd3c43a867b5995d546e8eb3715ad8a86af8122445584ddb4aef0ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8c3f33fd3c43a867b5995d546e8eb3715ad8a86af8122445584ddb4aef0ab5->enter($__internal_db8c3f33fd3c43a867b5995d546e8eb3715ad8a86af8122445584ddb4aef0ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9c2cb3a11f10d2d21b6d32d4dd2d140eb05dc8ec39127c08081add3aaf0c6b9->leave($__internal_f9c2cb3a11f10d2d21b6d32d4dd2d140eb05dc8ec39127c08081add3aaf0c6b9_prof);

        
        $__internal_db8c3f33fd3c43a867b5995d546e8eb3715ad8a86af8122445584ddb4aef0ab5->leave($__internal_db8c3f33fd3c43a867b5995d546e8eb3715ad8a86af8122445584ddb4aef0ab5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d250571675b3a670dd5a04db2e2c97e39d0bae565eae19ad40bc9b25f00e3d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d250571675b3a670dd5a04db2e2c97e39d0bae565eae19ad40bc9b25f00e3d2f->enter($__internal_d250571675b3a670dd5a04db2e2c97e39d0bae565eae19ad40bc9b25f00e3d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_87d85977c90e2defb8291cf81cb1b77fa2a28c345f1e2a6dffaf41dddb9f83c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d85977c90e2defb8291cf81cb1b77fa2a28c345f1e2a6dffaf41dddb9f83c8->enter($__internal_87d85977c90e2defb8291cf81cb1b77fa2a28c345f1e2a6dffaf41dddb9f83c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_87d85977c90e2defb8291cf81cb1b77fa2a28c345f1e2a6dffaf41dddb9f83c8->leave($__internal_87d85977c90e2defb8291cf81cb1b77fa2a28c345f1e2a6dffaf41dddb9f83c8_prof);

        
        $__internal_d250571675b3a670dd5a04db2e2c97e39d0bae565eae19ad40bc9b25f00e3d2f->leave($__internal_d250571675b3a670dd5a04db2e2c97e39d0bae565eae19ad40bc9b25f00e3d2f_prof);

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
