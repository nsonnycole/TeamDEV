<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6b6357709dc61b8ad342a7c7e76124aaa2c06ae531c0a62518a5841461ab3dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_346ccef11ddc01f81580a4e77049c52c14c0056d4d4dd74ec8c237f2799e5e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346ccef11ddc01f81580a4e77049c52c14c0056d4d4dd74ec8c237f2799e5e2c->enter($__internal_346ccef11ddc01f81580a4e77049c52c14c0056d4d4dd74ec8c237f2799e5e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_e56e8f117249316b3b76a8eebbfafadf9d8af0d77c49b113ea9d8d11c2a0e04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56e8f117249316b3b76a8eebbfafadf9d8af0d77c49b113ea9d8d11c2a0e04a->enter($__internal_e56e8f117249316b3b76a8eebbfafadf9d8af0d77c49b113ea9d8d11c2a0e04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_346ccef11ddc01f81580a4e77049c52c14c0056d4d4dd74ec8c237f2799e5e2c->leave($__internal_346ccef11ddc01f81580a4e77049c52c14c0056d4d4dd74ec8c237f2799e5e2c_prof);

        
        $__internal_e56e8f117249316b3b76a8eebbfafadf9d8af0d77c49b113ea9d8d11c2a0e04a->leave($__internal_e56e8f117249316b3b76a8eebbfafadf9d8af0d77c49b113ea9d8d11c2a0e04a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
