<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_369231aa5baff8f1ad00ad1e424dae5b909a8b5d65124175ca3bfd9b94ad30da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e625a14ba2a2db6e2dc7516652a27b4cf5d69f986a205178c0ad5babc57bb678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e625a14ba2a2db6e2dc7516652a27b4cf5d69f986a205178c0ad5babc57bb678->enter($__internal_e625a14ba2a2db6e2dc7516652a27b4cf5d69f986a205178c0ad5babc57bb678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_4905bb70b57597e69b49d2bcf31cf66ced2112c860a0817cfff09d5484f75db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4905bb70b57597e69b49d2bcf31cf66ced2112c860a0817cfff09d5484f75db6->enter($__internal_4905bb70b57597e69b49d2bcf31cf66ced2112c860a0817cfff09d5484f75db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e625a14ba2a2db6e2dc7516652a27b4cf5d69f986a205178c0ad5babc57bb678->leave($__internal_e625a14ba2a2db6e2dc7516652a27b4cf5d69f986a205178c0ad5babc57bb678_prof);

        
        $__internal_4905bb70b57597e69b49d2bcf31cf66ced2112c860a0817cfff09d5484f75db6->leave($__internal_4905bb70b57597e69b49d2bcf31cf66ced2112c860a0817cfff09d5484f75db6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77555af3ac948a0a042ed721c79bbfe6c03fca4bb1f08a7f3b50e4fc3c956423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77555af3ac948a0a042ed721c79bbfe6c03fca4bb1f08a7f3b50e4fc3c956423->enter($__internal_77555af3ac948a0a042ed721c79bbfe6c03fca4bb1f08a7f3b50e4fc3c956423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c24dbd4090495977f0b5b6460ea1140962bf2ba15826eb40da37d97e1e2bf274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24dbd4090495977f0b5b6460ea1140962bf2ba15826eb40da37d97e1e2bf274->enter($__internal_c24dbd4090495977f0b5b6460ea1140962bf2ba15826eb40da37d97e1e2bf274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c24dbd4090495977f0b5b6460ea1140962bf2ba15826eb40da37d97e1e2bf274->leave($__internal_c24dbd4090495977f0b5b6460ea1140962bf2ba15826eb40da37d97e1e2bf274_prof);

        
        $__internal_77555af3ac948a0a042ed721c79bbfe6c03fca4bb1f08a7f3b50e4fc3c956423->leave($__internal_77555af3ac948a0a042ed721c79bbfe6c03fca4bb1f08a7f3b50e4fc3c956423_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
