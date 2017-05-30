<?php

/* :administration:indexAdmin.html.twig */
class __TwigTemplate_9d61dba119e396f9bff1a821c4b2289691c3cfa0f76e25e8a95321a47706257f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":administration:indexAdmin.html.twig", 1);
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
        $__internal_e0bd6e40b98d9797d1dea79e9f0354f8d0b228a661298caf244b5b76ff6ab2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0bd6e40b98d9797d1dea79e9f0354f8d0b228a661298caf244b5b76ff6ab2c6->enter($__internal_e0bd6e40b98d9797d1dea79e9f0354f8d0b228a661298caf244b5b76ff6ab2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administration:indexAdmin.html.twig"));

        $__internal_57655912d3b98c0fad956b9e5d1f27e05109af24cc30054787f27853c80a2e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57655912d3b98c0fad956b9e5d1f27e05109af24cc30054787f27853c80a2e31->enter($__internal_57655912d3b98c0fad956b9e5d1f27e05109af24cc30054787f27853c80a2e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administration:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0bd6e40b98d9797d1dea79e9f0354f8d0b228a661298caf244b5b76ff6ab2c6->leave($__internal_e0bd6e40b98d9797d1dea79e9f0354f8d0b228a661298caf244b5b76ff6ab2c6_prof);

        
        $__internal_57655912d3b98c0fad956b9e5d1f27e05109af24cc30054787f27853c80a2e31->leave($__internal_57655912d3b98c0fad956b9e5d1f27e05109af24cc30054787f27853c80a2e31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a2005015fc0f455c6bc27d40b1330f43149ece02b1b8df232063a462903c5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2005015fc0f455c6bc27d40b1330f43149ece02b1b8df232063a462903c5d8->enter($__internal_6a2005015fc0f455c6bc27d40b1330f43149ece02b1b8df232063a462903c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9555bbaa2fc0094325d6eb9c5abcba601b7bfdba393fd1a7cb7b37641d014001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9555bbaa2fc0094325d6eb9c5abcba601b7bfdba393fd1a7cb7b37641d014001->enter($__internal_9555bbaa2fc0094325d6eb9c5abcba601b7bfdba393fd1a7cb7b37641d014001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9555bbaa2fc0094325d6eb9c5abcba601b7bfdba393fd1a7cb7b37641d014001->leave($__internal_9555bbaa2fc0094325d6eb9c5abcba601b7bfdba393fd1a7cb7b37641d014001_prof);

        
        $__internal_6a2005015fc0f455c6bc27d40b1330f43149ece02b1b8df232063a462903c5d8->leave($__internal_6a2005015fc0f455c6bc27d40b1330f43149ece02b1b8df232063a462903c5d8_prof);

    }

    public function getTemplateName()
    {
        return ":administration:indexAdmin.html.twig";
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
", ":administration:indexAdmin.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/administration/indexAdmin.html.twig");
    }
}
