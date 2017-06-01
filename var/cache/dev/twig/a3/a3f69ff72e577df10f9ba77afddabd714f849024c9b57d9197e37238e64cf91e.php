<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_674e2f1dab51875dc8bb3c95eaa130245a2586780a68382d34c2b94361a68668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_3ecb94e8e693e5948b55db2957f73187978aee72c14dec8f1d2c3dc096f20ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecb94e8e693e5948b55db2957f73187978aee72c14dec8f1d2c3dc096f20ddd->enter($__internal_3ecb94e8e693e5948b55db2957f73187978aee72c14dec8f1d2c3dc096f20ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_48a266db810602f244cb789eedf2b393cafafb424c7b3cde3a060bfe418d8715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a266db810602f244cb789eedf2b393cafafb424c7b3cde3a060bfe418d8715->enter($__internal_48a266db810602f244cb789eedf2b393cafafb424c7b3cde3a060bfe418d8715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ecb94e8e693e5948b55db2957f73187978aee72c14dec8f1d2c3dc096f20ddd->leave($__internal_3ecb94e8e693e5948b55db2957f73187978aee72c14dec8f1d2c3dc096f20ddd_prof);

        
        $__internal_48a266db810602f244cb789eedf2b393cafafb424c7b3cde3a060bfe418d8715->leave($__internal_48a266db810602f244cb789eedf2b393cafafb424c7b3cde3a060bfe418d8715_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19f0f4e8221e04b2d68e391da69a3e18a1c001908de2d73e7faced652c60a99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f0f4e8221e04b2d68e391da69a3e18a1c001908de2d73e7faced652c60a99f->enter($__internal_19f0f4e8221e04b2d68e391da69a3e18a1c001908de2d73e7faced652c60a99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6955f36dbb6abe0b1177cb7af9da9056532d61861a9812138f8c906639b97588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6955f36dbb6abe0b1177cb7af9da9056532d61861a9812138f8c906639b97588->enter($__internal_6955f36dbb6abe0b1177cb7af9da9056532d61861a9812138f8c906639b97588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_6955f36dbb6abe0b1177cb7af9da9056532d61861a9812138f8c906639b97588->leave($__internal_6955f36dbb6abe0b1177cb7af9da9056532d61861a9812138f8c906639b97588_prof);

        
        $__internal_19f0f4e8221e04b2d68e391da69a3e18a1c001908de2d73e7faced652c60a99f->leave($__internal_19f0f4e8221e04b2d68e391da69a3e18a1c001908de2d73e7faced652c60a99f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
