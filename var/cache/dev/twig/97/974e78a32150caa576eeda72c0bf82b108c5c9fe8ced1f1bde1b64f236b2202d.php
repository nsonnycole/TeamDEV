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
        $__internal_86846065750875f949d4cd0bfe9d4ca3ec7964d33209275c96a732c276964f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86846065750875f949d4cd0bfe9d4ca3ec7964d33209275c96a732c276964f8e->enter($__internal_86846065750875f949d4cd0bfe9d4ca3ec7964d33209275c96a732c276964f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_2d9f1672e33be90d9e0bc194cbebf1c090e056890652147cab168e2349d7c2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9f1672e33be90d9e0bc194cbebf1c090e056890652147cab168e2349d7c2f0->enter($__internal_2d9f1672e33be90d9e0bc194cbebf1c090e056890652147cab168e2349d7c2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86846065750875f949d4cd0bfe9d4ca3ec7964d33209275c96a732c276964f8e->leave($__internal_86846065750875f949d4cd0bfe9d4ca3ec7964d33209275c96a732c276964f8e_prof);

        
        $__internal_2d9f1672e33be90d9e0bc194cbebf1c090e056890652147cab168e2349d7c2f0->leave($__internal_2d9f1672e33be90d9e0bc194cbebf1c090e056890652147cab168e2349d7c2f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b22afffb1ddcf7918eae899bc44a0f626b83cdb53e90f6fb171a66d3a5011108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22afffb1ddcf7918eae899bc44a0f626b83cdb53e90f6fb171a66d3a5011108->enter($__internal_b22afffb1ddcf7918eae899bc44a0f626b83cdb53e90f6fb171a66d3a5011108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7147211375618b7f4613394ad4d233008e1eded33d03cc49ac1bad7cc30fe3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7147211375618b7f4613394ad4d233008e1eded33d03cc49ac1bad7cc30fe3fe->enter($__internal_7147211375618b7f4613394ad4d233008e1eded33d03cc49ac1bad7cc30fe3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7147211375618b7f4613394ad4d233008e1eded33d03cc49ac1bad7cc30fe3fe->leave($__internal_7147211375618b7f4613394ad4d233008e1eded33d03cc49ac1bad7cc30fe3fe_prof);

        
        $__internal_b22afffb1ddcf7918eae899bc44a0f626b83cdb53e90f6fb171a66d3a5011108->leave($__internal_b22afffb1ddcf7918eae899bc44a0f626b83cdb53e90f6fb171a66d3a5011108_prof);

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
