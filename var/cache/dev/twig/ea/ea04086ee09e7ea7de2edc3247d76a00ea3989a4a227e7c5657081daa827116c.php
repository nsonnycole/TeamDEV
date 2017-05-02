<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b5ccc299d20092684d23213aa0a0b6de22e41afeafeaa988a4219e5dab6666bd extends Twig_Template
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
        $__internal_019f153183dcd9d661d03c8014572bae172daacfa52a21b839e0cd6cb34b5579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019f153183dcd9d661d03c8014572bae172daacfa52a21b839e0cd6cb34b5579->enter($__internal_019f153183dcd9d661d03c8014572bae172daacfa52a21b839e0cd6cb34b5579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f8027e5c7b03844e0f75b8a67d2c38b842fe91dd98b66d20e29f112b2e611558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8027e5c7b03844e0f75b8a67d2c38b842fe91dd98b66d20e29f112b2e611558->enter($__internal_f8027e5c7b03844e0f75b8a67d2c38b842fe91dd98b66d20e29f112b2e611558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_019f153183dcd9d661d03c8014572bae172daacfa52a21b839e0cd6cb34b5579->leave($__internal_019f153183dcd9d661d03c8014572bae172daacfa52a21b839e0cd6cb34b5579_prof);

        
        $__internal_f8027e5c7b03844e0f75b8a67d2c38b842fe91dd98b66d20e29f112b2e611558->leave($__internal_f8027e5c7b03844e0f75b8a67d2c38b842fe91dd98b66d20e29f112b2e611558_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9adc5b2518722812f9a169a9262d079c01d707ec5a9354bc9e3e231f402f87f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9adc5b2518722812f9a169a9262d079c01d707ec5a9354bc9e3e231f402f87f3->enter($__internal_9adc5b2518722812f9a169a9262d079c01d707ec5a9354bc9e3e231f402f87f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e76ea9a077b833960d5f84f3c4c59fb736804cc9714e0a0b63275a7ee569621e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76ea9a077b833960d5f84f3c4c59fb736804cc9714e0a0b63275a7ee569621e->enter($__internal_e76ea9a077b833960d5f84f3c4c59fb736804cc9714e0a0b63275a7ee569621e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e76ea9a077b833960d5f84f3c4c59fb736804cc9714e0a0b63275a7ee569621e->leave($__internal_e76ea9a077b833960d5f84f3c4c59fb736804cc9714e0a0b63275a7ee569621e_prof);

        
        $__internal_9adc5b2518722812f9a169a9262d079c01d707ec5a9354bc9e3e231f402f87f3->leave($__internal_9adc5b2518722812f9a169a9262d079c01d707ec5a9354bc9e3e231f402f87f3_prof);

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
", "@FOSUser/Security/login.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
