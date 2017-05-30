<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_1836612a0bba521a19216f834883a0ef7123a684e7589b853b2fa628dca27053 extends Twig_Template
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
        $__internal_8161c40e5e01ac1d2706a32796fb4e6187cb0deca66bab2bbf33b4d21da8ea96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8161c40e5e01ac1d2706a32796fb4e6187cb0deca66bab2bbf33b4d21da8ea96->enter($__internal_8161c40e5e01ac1d2706a32796fb4e6187cb0deca66bab2bbf33b4d21da8ea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_d73c444a48912441872d7affbf53aa4df55dffd997a92b1836c2870378a933e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73c444a48912441872d7affbf53aa4df55dffd997a92b1836c2870378a933e1->enter($__internal_d73c444a48912441872d7affbf53aa4df55dffd997a92b1836c2870378a933e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_8161c40e5e01ac1d2706a32796fb4e6187cb0deca66bab2bbf33b4d21da8ea96->leave($__internal_8161c40e5e01ac1d2706a32796fb4e6187cb0deca66bab2bbf33b4d21da8ea96_prof);

        
        $__internal_d73c444a48912441872d7affbf53aa4df55dffd997a92b1836c2870378a933e1->leave($__internal_d73c444a48912441872d7affbf53aa4df55dffd997a92b1836c2870378a933e1_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
