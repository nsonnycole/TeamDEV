<?php

/* administration/indexAdmin.html.twig */
class __TwigTemplate_9d61dba119e396f9bff1a821c4b2289691c3cfa0f76e25e8a95321a47706257f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administration/indexAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4ae15e7522335300ab19f28e740ef7ad79287e3b200b2a1160b57895a3cc47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ae15e7522335300ab19f28e740ef7ad79287e3b200b2a1160b57895a3cc47c->enter($__internal_a4ae15e7522335300ab19f28e740ef7ad79287e3b200b2a1160b57895a3cc47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/indexAdmin.html.twig"));

        $__internal_d45b37107560e73439d92af0fcbd9bcafa5f631e76133de288dae265e4068b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45b37107560e73439d92af0fcbd9bcafa5f631e76133de288dae265e4068b8a->enter($__internal_d45b37107560e73439d92af0fcbd9bcafa5f631e76133de288dae265e4068b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ae15e7522335300ab19f28e740ef7ad79287e3b200b2a1160b57895a3cc47c->leave($__internal_a4ae15e7522335300ab19f28e740ef7ad79287e3b200b2a1160b57895a3cc47c_prof);

        
        $__internal_d45b37107560e73439d92af0fcbd9bcafa5f631e76133de288dae265e4068b8a->leave($__internal_d45b37107560e73439d92af0fcbd9bcafa5f631e76133de288dae265e4068b8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_239d2f1c2a9b0a021444143093fa94c051271f2ba8936f9d0f64fb9e0e09d64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239d2f1c2a9b0a021444143093fa94c051271f2ba8936f9d0f64fb9e0e09d64d->enter($__internal_239d2f1c2a9b0a021444143093fa94c051271f2ba8936f9d0f64fb9e0e09d64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca23a577d048a2c878aa070ee7836c59a201e1d2e0d8fb70624ea4bd78832666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca23a577d048a2c878aa070ee7836c59a201e1d2e0d8fb70624ea4bd78832666->enter($__internal_ca23a577d048a2c878aa070ee7836c59a201e1d2e0d8fb70624ea4bd78832666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\" style=\"display:inline\">
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 11
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 13
        echo "</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Administration</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<!-- MAC IMAGE -->
<div class=\"container\">

</div>
";
        
        $__internal_ca23a577d048a2c878aa070ee7836c59a201e1d2e0d8fb70624ea4bd78832666->leave($__internal_ca23a577d048a2c878aa070ee7836c59a201e1d2e0d8fb70624ea4bd78832666_prof);

        
        $__internal_239d2f1c2a9b0a021444143093fa94c051271f2ba8936f9d0f64fb9e0e09d64d->leave($__internal_239d2f1c2a9b0a021444143093fa94c051271f2ba8936f9d0f64fb9e0e09d64d_prof);

    }

    public function getTemplateName()
    {
        return "administration/indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\" style=\"display:inline\">
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
        <a href=\"{{ path('fos_user_security_logout') }}\">
            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
    {% else %}
        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Administration</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<!-- MAC IMAGE -->
<div class=\"container\">

</div>
{% endblock %}
", "administration/indexAdmin.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/administration/indexAdmin.html.twig");
    }
}
