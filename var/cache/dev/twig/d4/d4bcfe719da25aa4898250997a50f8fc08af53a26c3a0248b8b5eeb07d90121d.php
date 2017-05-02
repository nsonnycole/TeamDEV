<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_10cee70795986aa37defc7b924ea19df763d0677fc64d42e414d879816651ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_4592bc03703d84d52cfe57260f4cbaabea16d039b6c92ee879646eb840ee951a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4592bc03703d84d52cfe57260f4cbaabea16d039b6c92ee879646eb840ee951a->enter($__internal_4592bc03703d84d52cfe57260f4cbaabea16d039b6c92ee879646eb840ee951a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_7deda5a106cdcbb29edc7e1021339a45748eac4f6c75404b8d3dcb3093d57279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7deda5a106cdcbb29edc7e1021339a45748eac4f6c75404b8d3dcb3093d57279->enter($__internal_7deda5a106cdcbb29edc7e1021339a45748eac4f6c75404b8d3dcb3093d57279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4592bc03703d84d52cfe57260f4cbaabea16d039b6c92ee879646eb840ee951a->leave($__internal_4592bc03703d84d52cfe57260f4cbaabea16d039b6c92ee879646eb840ee951a_prof);

        
        $__internal_7deda5a106cdcbb29edc7e1021339a45748eac4f6c75404b8d3dcb3093d57279->leave($__internal_7deda5a106cdcbb29edc7e1021339a45748eac4f6c75404b8d3dcb3093d57279_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7631229e7fe5f923fe5039267edbb10305aea6438595057cdd8126c705335624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7631229e7fe5f923fe5039267edbb10305aea6438595057cdd8126c705335624->enter($__internal_7631229e7fe5f923fe5039267edbb10305aea6438595057cdd8126c705335624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_65253f4a31270ddb4f4425d6b19337829c8aba383dc345b1464efe9c190e8c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65253f4a31270ddb4f4425d6b19337829c8aba383dc345b1464efe9c190e8c75->enter($__internal_65253f4a31270ddb4f4425d6b19337829c8aba383dc345b1464efe9c190e8c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_65253f4a31270ddb4f4425d6b19337829c8aba383dc345b1464efe9c190e8c75->leave($__internal_65253f4a31270ddb4f4425d6b19337829c8aba383dc345b1464efe9c190e8c75_prof);

        
        $__internal_7631229e7fe5f923fe5039267edbb10305aea6438595057cdd8126c705335624->leave($__internal_7631229e7fe5f923fe5039267edbb10305aea6438595057cdd8126c705335624_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
