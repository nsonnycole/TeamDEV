<?php

/* Inscription/newInsc.html.twig */
class __TwigTemplate_a4310b049457c2ab58e3388253a6aa7b1a56b117f42ac4baabe488c5ded8869f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Inscription/newInsc.html.twig", 1);
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
        $__internal_b33877cdc012628fd54c1caadd7d3ebac9ce043217550b87009390c75c429775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33877cdc012628fd54c1caadd7d3ebac9ce043217550b87009390c75c429775->enter($__internal_b33877cdc012628fd54c1caadd7d3ebac9ce043217550b87009390c75c429775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Inscription/newInsc.html.twig"));

        $__internal_90203cbccf2a73d6113349d285079e8a8e8c0909ef4703128446a8acb652c0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90203cbccf2a73d6113349d285079e8a8e8c0909ef4703128446a8acb652c0bc->enter($__internal_90203cbccf2a73d6113349d285079e8a8e8c0909ef4703128446a8acb652c0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Inscription/newInsc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33877cdc012628fd54c1caadd7d3ebac9ce043217550b87009390c75c429775->leave($__internal_b33877cdc012628fd54c1caadd7d3ebac9ce043217550b87009390c75c429775_prof);

        
        $__internal_90203cbccf2a73d6113349d285079e8a8e8c0909ef4703128446a8acb652c0bc->leave($__internal_90203cbccf2a73d6113349d285079e8a8e8c0909ef4703128446a8acb652c0bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e063915734e31793a43b1f5c266d535ea044cc507d066e24d63db515c9e166a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e063915734e31793a43b1f5c266d535ea044cc507d066e24d63db515c9e166a7->enter($__internal_e063915734e31793a43b1f5c266d535ea044cc507d066e24d63db515c9e166a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be6a518ee20d2251ea347c4253189ac89862686a94e4018471974c2340500d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6a518ee20d2251ea347c4253189ac89862686a94e4018471974c2340500d04->enter($__internal_be6a518ee20d2251ea347c4253189ac89862686a94e4018471974c2340500d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "idUtilisateur", array()), "username", array())))) {
            // line 5
            echo "<div class=\"container\" style=\"display:inline\">
    ";
            // line 6
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 7
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
                echo "\"><img  width=\"50px;\"src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "url", array()))), "html", null, true);
                echo "\"></a>
        ";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |
        <a href=\"";
                // line 9
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
            ";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
        </a>
    ";
            } else {
                // line 13
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
    ";
            }
            // line 15
            echo "</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Inscription au projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
            echo "</a></li>
  <li class=\"breadcrumb-item active\">Inscription au projet</li>
  <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      ";
            // line 37
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
      ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
            // line 40
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    </div>
</div>
";
        } else {
            // line 44
            echo "  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:index"));
            echo "
";
        }
        
        $__internal_be6a518ee20d2251ea347c4253189ac89862686a94e4018471974c2340500d04->leave($__internal_be6a518ee20d2251ea347c4253189ac89862686a94e4018471974c2340500d04_prof);

        
        $__internal_e063915734e31793a43b1f5c266d535ea044cc507d066e24d63db515c9e166a7->leave($__internal_e063915734e31793a43b1f5c266d535ea044cc507d066e24d63db515c9e166a7_prof);

    }

    public function getTemplateName()
    {
        return "Inscription/newInsc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  135 => 40,  131 => 39,  127 => 38,  123 => 37,  116 => 33,  109 => 31,  105 => 30,  101 => 29,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if app.user and app.user.username != projet.idUtilisateur.username %}
<div class=\"container\" style=\"display:inline\">
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <a href=\"{{path('fos_user_profile_show')}}\"><img  width=\"50px;\"src=\"{{asset('img/avatar/'~app.user.avatar.url)}}\"></a>
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
        <h2>Inscription au projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{ path('showProjet', {'id': projet.id}) }}\">{{projet.nomProjet}}</a></li>
  <li class=\"breadcrumb-item active\">Inscription au projet</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      {{ form_start(form) }}
      {{ form_widget(form) }}
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{path('projets')}}\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      {{ form_end(form) }}
    </div>
</div>
{% else %}
  {{ render(controller('AppBundle:Default:index')) }}
{% endif %}
{% endblock %}
", "Inscription/newInsc.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/Inscription/newInsc.html.twig");
    }
}
