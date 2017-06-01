<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_23683886eda432a8c1237374b00ccd18e2ebd554717309e237c96a184efd97c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_7edb79ca0f5dcdfb1e3ca337c34f3894ca9500b820026c02a3cb504c314a947e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edb79ca0f5dcdfb1e3ca337c34f3894ca9500b820026c02a3cb504c314a947e->enter($__internal_7edb79ca0f5dcdfb1e3ca337c34f3894ca9500b820026c02a3cb504c314a947e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_0cdd106d9a9e72a0d8aba1f6e966197207dccd82a6857eb28c65e72251ff3e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdd106d9a9e72a0d8aba1f6e966197207dccd82a6857eb28c65e72251ff3e05->enter($__internal_0cdd106d9a9e72a0d8aba1f6e966197207dccd82a6857eb28c65e72251ff3e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7edb79ca0f5dcdfb1e3ca337c34f3894ca9500b820026c02a3cb504c314a947e->leave($__internal_7edb79ca0f5dcdfb1e3ca337c34f3894ca9500b820026c02a3cb504c314a947e_prof);

        
        $__internal_0cdd106d9a9e72a0d8aba1f6e966197207dccd82a6857eb28c65e72251ff3e05->leave($__internal_0cdd106d9a9e72a0d8aba1f6e966197207dccd82a6857eb28c65e72251ff3e05_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d63e8536f3e91a30725538615f4d56cb388018f00e6fc8aa6993429208d3d845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63e8536f3e91a30725538615f4d56cb388018f00e6fc8aa6993429208d3d845->enter($__internal_d63e8536f3e91a30725538615f4d56cb388018f00e6fc8aa6993429208d3d845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0fae9c823f45ab9510eccab7a5605c89c72b1d6af329340a1a1d2f688a14d9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fae9c823f45ab9510eccab7a5605c89c72b1d6af329340a1a1d2f688a14d9dd->enter($__internal_0fae9c823f45ab9510eccab7a5605c89c72b1d6af329340a1a1d2f688a14d9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\" style=\"color:white\">
        <h2>Inscription réussi!</h2>
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
        ";
        // line 13
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 14
            echo "        <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 16
        echo "      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<div class=\"container\">
<br>
  <a id=\"btn-fblogin\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-primary col-sm-offset-6\">Accueil</a>
  ";
        // line 24
        echo "</div>
";
        
        $__internal_0fae9c823f45ab9510eccab7a5605c89c72b1d6af329340a1a1d2f688a14d9dd->leave($__internal_0fae9c823f45ab9510eccab7a5605c89c72b1d6af329340a1a1d2f688a14d9dd_prof);

        
        $__internal_d63e8536f3e91a30725538615f4d56cb388018f00e6fc8aa6993429208d3d845->leave($__internal_d63e8536f3e91a30725538615f4d56cb388018f00e6fc8aa6993429208d3d845_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  79 => 22,  71 => 16,  63 => 14,  61 => 13,  57 => 12,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\" style=\"color:white\">
        <h2>Inscription réussi!</h2>
        <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
        {% if targetUrl %}
        <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
        {% endif %}
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<div class=\"container\">
<br>
  <a id=\"btn-fblogin\" href=\"{{path('homepage')}}\" class=\"btn btn-primary col-sm-offset-6\">Accueil</a>
  {#<img style=\"width:600px\"src=\"{{asset(\"img/happy.jpeg\")}}\">#}
</div>
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
