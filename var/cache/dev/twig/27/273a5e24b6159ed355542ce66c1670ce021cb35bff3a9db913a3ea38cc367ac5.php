<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_babf9804dcf1bd522687e8a03364aa0004c422eba98353e27f5ed4f0153b7f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3e1ef6ff65a86148c9bd667331af4003997f1b6913da9580a359fbdaea53d68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1ef6ff65a86148c9bd667331af4003997f1b6913da9580a359fbdaea53d68c->enter($__internal_3e1ef6ff65a86148c9bd667331af4003997f1b6913da9580a359fbdaea53d68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_4df7da8ba0d34e9e9e86e21bf8d7e1f6a55e24072bc193a42df9839bc35c8ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df7da8ba0d34e9e9e86e21bf8d7e1f6a55e24072bc193a42df9839bc35c8ff0->enter($__internal_4df7da8ba0d34e9e9e86e21bf8d7e1f6a55e24072bc193a42df9839bc35c8ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e1ef6ff65a86148c9bd667331af4003997f1b6913da9580a359fbdaea53d68c->leave($__internal_3e1ef6ff65a86148c9bd667331af4003997f1b6913da9580a359fbdaea53d68c_prof);

        
        $__internal_4df7da8ba0d34e9e9e86e21bf8d7e1f6a55e24072bc193a42df9839bc35c8ff0->leave($__internal_4df7da8ba0d34e9e9e86e21bf8d7e1f6a55e24072bc193a42df9839bc35c8ff0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edca3ea6f57933c23e0a00dea9ea97e3191ba4b8de90989c4d41c839ea0017d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edca3ea6f57933c23e0a00dea9ea97e3191ba4b8de90989c4d41c839ea0017d1->enter($__internal_edca3ea6f57933c23e0a00dea9ea97e3191ba4b8de90989c4d41c839ea0017d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6cfbadbb7aa93dd338c8eaece85489e8b9d4f2b31b42e66ca36ed9c3e6bd234f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfbadbb7aa93dd338c8eaece85489e8b9d4f2b31b42e66ca36ed9c3e6bd234f->enter($__internal_6cfbadbb7aa93dd338c8eaece85489e8b9d4f2b31b42e66ca36ed9c3e6bd234f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6cfbadbb7aa93dd338c8eaece85489e8b9d4f2b31b42e66ca36ed9c3e6bd234f->leave($__internal_6cfbadbb7aa93dd338c8eaece85489e8b9d4f2b31b42e66ca36ed9c3e6bd234f_prof);

        
        $__internal_edca3ea6f57933c23e0a00dea9ea97e3191ba4b8de90989c4d41c839ea0017d1->leave($__internal_edca3ea6f57933c23e0a00dea9ea97e3191ba4b8de90989c4d41c839ea0017d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
