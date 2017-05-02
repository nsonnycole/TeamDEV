<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_5777b09085542326b4b4d52fc95d4e135120990e5aa26df34c465ac59fec15b3 extends Twig_Template
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
        $__internal_7ef7021cc037a652e2628845aa9ba9ddca79bdd8e7a178f2da06fb3e5bef73b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef7021cc037a652e2628845aa9ba9ddca79bdd8e7a178f2da06fb3e5bef73b2->enter($__internal_7ef7021cc037a652e2628845aa9ba9ddca79bdd8e7a178f2da06fb3e5bef73b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_6773121e7bf072e5f55fa717ad59b81188747203ef0fb1d84f011ea1fe7c60f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6773121e7bf072e5f55fa717ad59b81188747203ef0fb1d84f011ea1fe7c60f1->enter($__internal_6773121e7bf072e5f55fa717ad59b81188747203ef0fb1d84f011ea1fe7c60f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ef7021cc037a652e2628845aa9ba9ddca79bdd8e7a178f2da06fb3e5bef73b2->leave($__internal_7ef7021cc037a652e2628845aa9ba9ddca79bdd8e7a178f2da06fb3e5bef73b2_prof);

        
        $__internal_6773121e7bf072e5f55fa717ad59b81188747203ef0fb1d84f011ea1fe7c60f1->leave($__internal_6773121e7bf072e5f55fa717ad59b81188747203ef0fb1d84f011ea1fe7c60f1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fc1ef71b8b4783aeb3aa6f226325e6208ff7827e19b2decbe0f81abec1ba21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc1ef71b8b4783aeb3aa6f226325e6208ff7827e19b2decbe0f81abec1ba21e->enter($__internal_9fc1ef71b8b4783aeb3aa6f226325e6208ff7827e19b2decbe0f81abec1ba21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8097e777e2d1149cd40ce1cd4eb1c6392550dfb4f4b7eae1163b1857c5933ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8097e777e2d1149cd40ce1cd4eb1c6392550dfb4f4b7eae1163b1857c5933ccf->enter($__internal_8097e777e2d1149cd40ce1cd4eb1c6392550dfb4f4b7eae1163b1857c5933ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_8097e777e2d1149cd40ce1cd4eb1c6392550dfb4f4b7eae1163b1857c5933ccf->leave($__internal_8097e777e2d1149cd40ce1cd4eb1c6392550dfb4f4b7eae1163b1857c5933ccf_prof);

        
        $__internal_9fc1ef71b8b4783aeb3aa6f226325e6208ff7827e19b2decbe0f81abec1ba21e->leave($__internal_9fc1ef71b8b4783aeb3aa6f226325e6208ff7827e19b2decbe0f81abec1ba21e_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
