<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_fa653ca9cc2c749ca2aba66cf0054674a3cb1e7a1305e423e1f2a7b3a2caa8f9 extends Twig_Template
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
        $__internal_83c57459147d34ff22b67b22f407c9cfa7cfde3a20f7e6bdab76c09e5e9a9a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c57459147d34ff22b67b22f407c9cfa7cfde3a20f7e6bdab76c09e5e9a9a3b->enter($__internal_83c57459147d34ff22b67b22f407c9cfa7cfde3a20f7e6bdab76c09e5e9a9a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_01d81937abb46aaeea915f2c7b93440e4cd5504a615b32b420c4969aa5d7a193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d81937abb46aaeea915f2c7b93440e4cd5504a615b32b420c4969aa5d7a193->enter($__internal_01d81937abb46aaeea915f2c7b93440e4cd5504a615b32b420c4969aa5d7a193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_83c57459147d34ff22b67b22f407c9cfa7cfde3a20f7e6bdab76c09e5e9a9a3b->leave($__internal_83c57459147d34ff22b67b22f407c9cfa7cfde3a20f7e6bdab76c09e5e9a9a3b_prof);

        
        $__internal_01d81937abb46aaeea915f2c7b93440e4cd5504a615b32b420c4969aa5d7a193->leave($__internal_01d81937abb46aaeea915f2c7b93440e4cd5504a615b32b420c4969aa5d7a193_prof);

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
