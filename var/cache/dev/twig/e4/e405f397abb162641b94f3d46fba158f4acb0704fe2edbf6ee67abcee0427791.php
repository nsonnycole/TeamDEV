<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_434c06eb4a382cb7c37745c89ec76f72019e237c42b1b97c48e4650502f816bb extends Twig_Template
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
        $__internal_cc7a5616c68d862c80dd9ecb43c54ddd362685dbbec48505cf4c38e629ee5ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7a5616c68d862c80dd9ecb43c54ddd362685dbbec48505cf4c38e629ee5ac8->enter($__internal_cc7a5616c68d862c80dd9ecb43c54ddd362685dbbec48505cf4c38e629ee5ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_3cac5fdbcfeee0c218d70df9b61e69652f68bea3fb004fa35d8d16b3513f46e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cac5fdbcfeee0c218d70df9b61e69652f68bea3fb004fa35d8d16b3513f46e6->enter($__internal_3cac5fdbcfeee0c218d70df9b61e69652f68bea3fb004fa35d8d16b3513f46e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_cc7a5616c68d862c80dd9ecb43c54ddd362685dbbec48505cf4c38e629ee5ac8->leave($__internal_cc7a5616c68d862c80dd9ecb43c54ddd362685dbbec48505cf4c38e629ee5ac8_prof);

        
        $__internal_3cac5fdbcfeee0c218d70df9b61e69652f68bea3fb004fa35d8d16b3513f46e6->leave($__internal_3cac5fdbcfeee0c218d70df9b61e69652f68bea3fb004fa35d8d16b3513f46e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
