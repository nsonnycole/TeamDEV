<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b97731d559802610bf6f6cb9824bd603427add78143ee48518fd8ede0974a879 extends Twig_Template
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
        $__internal_889ce1ceb68d6312a399a93baef2794ddf9a38a1a588edd97797929399ba982e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889ce1ceb68d6312a399a93baef2794ddf9a38a1a588edd97797929399ba982e->enter($__internal_889ce1ceb68d6312a399a93baef2794ddf9a38a1a588edd97797929399ba982e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_57cc43667c864041aacaa3b228ca377aeef2f456c392b312343342a72bc61137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cc43667c864041aacaa3b228ca377aeef2f456c392b312343342a72bc61137->enter($__internal_57cc43667c864041aacaa3b228ca377aeef2f456c392b312343342a72bc61137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889ce1ceb68d6312a399a93baef2794ddf9a38a1a588edd97797929399ba982e->leave($__internal_889ce1ceb68d6312a399a93baef2794ddf9a38a1a588edd97797929399ba982e_prof);

        
        $__internal_57cc43667c864041aacaa3b228ca377aeef2f456c392b312343342a72bc61137->leave($__internal_57cc43667c864041aacaa3b228ca377aeef2f456c392b312343342a72bc61137_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7eab5bcca4352b17b898e673b3fb84a9eea73700d752ca6eaafdc3d3f15f458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7eab5bcca4352b17b898e673b3fb84a9eea73700d752ca6eaafdc3d3f15f458->enter($__internal_e7eab5bcca4352b17b898e673b3fb84a9eea73700d752ca6eaafdc3d3f15f458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3c067e57c21f029b7c32500f63940ba5fb6be1e59b3293d4a765661b44401b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c067e57c21f029b7c32500f63940ba5fb6be1e59b3293d4a765661b44401b4->enter($__internal_f3c067e57c21f029b7c32500f63940ba5fb6be1e59b3293d4a765661b44401b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f3c067e57c21f029b7c32500f63940ba5fb6be1e59b3293d4a765661b44401b4->leave($__internal_f3c067e57c21f029b7c32500f63940ba5fb6be1e59b3293d4a765661b44401b4_prof);

        
        $__internal_e7eab5bcca4352b17b898e673b3fb84a9eea73700d752ca6eaafdc3d3f15f458->leave($__internal_e7eab5bcca4352b17b898e673b3fb84a9eea73700d752ca6eaafdc3d3f15f458_prof);

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
