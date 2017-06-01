<?php

/* :administration:indexAdmin.html.twig */
class __TwigTemplate_847cad421cc918da8129c9fd013ce4a83b7ca037ecbf10eda0eefcf474ef7eec extends Twig_Template
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
        $__internal_3edac2f2c8a03a3b05173673d115f35cd2dad08432e120c14e6e463905f9e2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edac2f2c8a03a3b05173673d115f35cd2dad08432e120c14e6e463905f9e2f3->enter($__internal_3edac2f2c8a03a3b05173673d115f35cd2dad08432e120c14e6e463905f9e2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administration:indexAdmin.html.twig"));

        $__internal_dfd26ea57cdd00008cd9af76254e7331cd71e11e106fb0c2cc379be605a54ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd26ea57cdd00008cd9af76254e7331cd71e11e106fb0c2cc379be605a54ae4->enter($__internal_dfd26ea57cdd00008cd9af76254e7331cd71e11e106fb0c2cc379be605a54ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administration:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3edac2f2c8a03a3b05173673d115f35cd2dad08432e120c14e6e463905f9e2f3->leave($__internal_3edac2f2c8a03a3b05173673d115f35cd2dad08432e120c14e6e463905f9e2f3_prof);

        
        $__internal_dfd26ea57cdd00008cd9af76254e7331cd71e11e106fb0c2cc379be605a54ae4->leave($__internal_dfd26ea57cdd00008cd9af76254e7331cd71e11e106fb0c2cc379be605a54ae4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_827757225f63990a851aeaa4520ee3c9ff5ada16576da57e0ac2ff2291e0e32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827757225f63990a851aeaa4520ee3c9ff5ada16576da57e0ac2ff2291e0e32a->enter($__internal_827757225f63990a851aeaa4520ee3c9ff5ada16576da57e0ac2ff2291e0e32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5dca9da0bda6dc13fabc96509a87ca376bc73383f09bd7215fe67064826e1768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dca9da0bda6dc13fabc96509a87ca376bc73383f09bd7215fe67064826e1768->enter($__internal_5dca9da0bda6dc13fabc96509a87ca376bc73383f09bd7215fe67064826e1768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5dca9da0bda6dc13fabc96509a87ca376bc73383f09bd7215fe67064826e1768->leave($__internal_5dca9da0bda6dc13fabc96509a87ca376bc73383f09bd7215fe67064826e1768_prof);

        
        $__internal_827757225f63990a851aeaa4520ee3c9ff5ada16576da57e0ac2ff2291e0e32a->leave($__internal_827757225f63990a851aeaa4520ee3c9ff5ada16576da57e0ac2ff2291e0e32a_prof);

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
