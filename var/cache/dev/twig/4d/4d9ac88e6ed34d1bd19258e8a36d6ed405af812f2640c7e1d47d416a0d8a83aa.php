<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c30706eddce6ba27138b1cb82bb403cac5bceeddc10b9644776d8c6909f3a2b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_2ce095b609d11d77a59226e75a40a76c2a25da4e81da64295ce9b1d4905663b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce095b609d11d77a59226e75a40a76c2a25da4e81da64295ce9b1d4905663b6->enter($__internal_2ce095b609d11d77a59226e75a40a76c2a25da4e81da64295ce9b1d4905663b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_815acc692e6331a4c5c3b0cf19af482b978a17cd0ff348fd46e4ed7847cf4b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815acc692e6331a4c5c3b0cf19af482b978a17cd0ff348fd46e4ed7847cf4b2e->enter($__internal_815acc692e6331a4c5c3b0cf19af482b978a17cd0ff348fd46e4ed7847cf4b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce095b609d11d77a59226e75a40a76c2a25da4e81da64295ce9b1d4905663b6->leave($__internal_2ce095b609d11d77a59226e75a40a76c2a25da4e81da64295ce9b1d4905663b6_prof);

        
        $__internal_815acc692e6331a4c5c3b0cf19af482b978a17cd0ff348fd46e4ed7847cf4b2e->leave($__internal_815acc692e6331a4c5c3b0cf19af482b978a17cd0ff348fd46e4ed7847cf4b2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31d7e4e52ee6168f69e4e9367fb34979d9c02a5ae58da290fb351b5165fa1086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d7e4e52ee6168f69e4e9367fb34979d9c02a5ae58da290fb351b5165fa1086->enter($__internal_31d7e4e52ee6168f69e4e9367fb34979d9c02a5ae58da290fb351b5165fa1086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9b0a35d3e22adcf8828f7383d1b9eab558ee3fe166b6575201a51b007ec11bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b0a35d3e22adcf8828f7383d1b9eab558ee3fe166b6575201a51b007ec11bb->enter($__internal_e9b0a35d3e22adcf8828f7383d1b9eab558ee3fe166b6575201a51b007ec11bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e9b0a35d3e22adcf8828f7383d1b9eab558ee3fe166b6575201a51b007ec11bb->leave($__internal_e9b0a35d3e22adcf8828f7383d1b9eab558ee3fe166b6575201a51b007ec11bb_prof);

        
        $__internal_31d7e4e52ee6168f69e4e9367fb34979d9c02a5ae58da290fb351b5165fa1086->leave($__internal_31d7e4e52ee6168f69e4e9367fb34979d9c02a5ae58da290fb351b5165fa1086_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
