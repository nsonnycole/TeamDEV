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
        $__internal_d9107e28ee5c6b9e399613d21e801c64e696659087bca8c96a5ce0615f4b5219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9107e28ee5c6b9e399613d21e801c64e696659087bca8c96a5ce0615f4b5219->enter($__internal_d9107e28ee5c6b9e399613d21e801c64e696659087bca8c96a5ce0615f4b5219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_57db28f93222d6ada18d566d975a9527a8dc05393bf569738b13c9ea6e1b09df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57db28f93222d6ada18d566d975a9527a8dc05393bf569738b13c9ea6e1b09df->enter($__internal_57db28f93222d6ada18d566d975a9527a8dc05393bf569738b13c9ea6e1b09df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9107e28ee5c6b9e399613d21e801c64e696659087bca8c96a5ce0615f4b5219->leave($__internal_d9107e28ee5c6b9e399613d21e801c64e696659087bca8c96a5ce0615f4b5219_prof);

        
        $__internal_57db28f93222d6ada18d566d975a9527a8dc05393bf569738b13c9ea6e1b09df->leave($__internal_57db28f93222d6ada18d566d975a9527a8dc05393bf569738b13c9ea6e1b09df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52fdef5c2b9c236bc4223f2669efad9359f1346e2203ba35aeb218c403c4f56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fdef5c2b9c236bc4223f2669efad9359f1346e2203ba35aeb218c403c4f56d->enter($__internal_52fdef5c2b9c236bc4223f2669efad9359f1346e2203ba35aeb218c403c4f56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8214432361eeb244fa15e22002c32b53f525d343dfa85f0aead93cf7486eef08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8214432361eeb244fa15e22002c32b53f525d343dfa85f0aead93cf7486eef08->enter($__internal_8214432361eeb244fa15e22002c32b53f525d343dfa85f0aead93cf7486eef08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8214432361eeb244fa15e22002c32b53f525d343dfa85f0aead93cf7486eef08->leave($__internal_8214432361eeb244fa15e22002c32b53f525d343dfa85f0aead93cf7486eef08_prof);

        
        $__internal_52fdef5c2b9c236bc4223f2669efad9359f1346e2203ba35aeb218c403c4f56d->leave($__internal_52fdef5c2b9c236bc4223f2669efad9359f1346e2203ba35aeb218c403c4f56d_prof);

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
