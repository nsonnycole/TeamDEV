<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7311a1c067dc79fc2d6f43084b739c62e2867a6413b709bbc2817b9ab3aac759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_17f9468ed60da9f3137dffd77ed32d06a76f4c4c97afb87d41ec6cedae7b6c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f9468ed60da9f3137dffd77ed32d06a76f4c4c97afb87d41ec6cedae7b6c4e->enter($__internal_17f9468ed60da9f3137dffd77ed32d06a76f4c4c97afb87d41ec6cedae7b6c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e19cdaf697a0879687c23dcb2a33b95d2c4b75dc2fe9e96863250c844b86f4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19cdaf697a0879687c23dcb2a33b95d2c4b75dc2fe9e96863250c844b86f4e4->enter($__internal_e19cdaf697a0879687c23dcb2a33b95d2c4b75dc2fe9e96863250c844b86f4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17f9468ed60da9f3137dffd77ed32d06a76f4c4c97afb87d41ec6cedae7b6c4e->leave($__internal_17f9468ed60da9f3137dffd77ed32d06a76f4c4c97afb87d41ec6cedae7b6c4e_prof);

        
        $__internal_e19cdaf697a0879687c23dcb2a33b95d2c4b75dc2fe9e96863250c844b86f4e4->leave($__internal_e19cdaf697a0879687c23dcb2a33b95d2c4b75dc2fe9e96863250c844b86f4e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c271775675871416eabc88fb8006fb0209e2e96388b89471a2e306cb76d30e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c271775675871416eabc88fb8006fb0209e2e96388b89471a2e306cb76d30e2->enter($__internal_5c271775675871416eabc88fb8006fb0209e2e96388b89471a2e306cb76d30e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be996c77e1c3b6e39fe55aa2a005b090b4150357b242b15cb9367801fc24619a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be996c77e1c3b6e39fe55aa2a005b090b4150357b242b15cb9367801fc24619a->enter($__internal_be996c77e1c3b6e39fe55aa2a005b090b4150357b242b15cb9367801fc24619a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_be996c77e1c3b6e39fe55aa2a005b090b4150357b242b15cb9367801fc24619a->leave($__internal_be996c77e1c3b6e39fe55aa2a005b090b4150357b242b15cb9367801fc24619a_prof);

        
        $__internal_5c271775675871416eabc88fb8006fb0209e2e96388b89471a2e306cb76d30e2->leave($__internal_5c271775675871416eabc88fb8006fb0209e2e96388b89471a2e306cb76d30e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
