<?php

/* reseaux/newReseaux.html.twig */
class __TwigTemplate_4d16738bfaa4944fd49658bfaa7bf81e4c317a243e4817d079681815b884ab76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reseaux/newReseaux.html.twig", 1);
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
        $__internal_70e281787eb3675ec6752e7f28ff79a3bfc40fbbf5acd8031f1f8ad3214231f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e281787eb3675ec6752e7f28ff79a3bfc40fbbf5acd8031f1f8ad3214231f6->enter($__internal_70e281787eb3675ec6752e7f28ff79a3bfc40fbbf5acd8031f1f8ad3214231f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reseaux/newReseaux.html.twig"));

        $__internal_63d53df0528c68df0421ccb9c57224faa28054ea1d96beef6d137fa047be3f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d53df0528c68df0421ccb9c57224faa28054ea1d96beef6d137fa047be3f0a->enter($__internal_63d53df0528c68df0421ccb9c57224faa28054ea1d96beef6d137fa047be3f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reseaux/newReseaux.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70e281787eb3675ec6752e7f28ff79a3bfc40fbbf5acd8031f1f8ad3214231f6->leave($__internal_70e281787eb3675ec6752e7f28ff79a3bfc40fbbf5acd8031f1f8ad3214231f6_prof);

        
        $__internal_63d53df0528c68df0421ccb9c57224faa28054ea1d96beef6d137fa047be3f0a->leave($__internal_63d53df0528c68df0421ccb9c57224faa28054ea1d96beef6d137fa047be3f0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6361cd097219ead78ea13a25b2cb1e841bf372854c4875a968199e3767513558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6361cd097219ead78ea13a25b2cb1e841bf372854c4875a968199e3767513558->enter($__internal_6361cd097219ead78ea13a25b2cb1e841bf372854c4875a968199e3767513558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5052afb016304f3b5450de4340a3cfcc06da0b489a5b94176177d437907288cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5052afb016304f3b5450de4340a3cfcc06da0b489a5b94176177d437907288cc->enter($__internal_5052afb016304f3b5450de4340a3cfcc06da0b489a5b94176177d437907288cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
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
        <h2>Nouveau réseau</h2>
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
            echo "\">Mes réseaux</a></li>
  <li class=\"breadcrumb-item active\">Nouveau réseau</li>
  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      ";
            // line 36
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
      ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idTypeReseau", array()), 'row');
            echo "
      ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'row');
            echo "

        <br>
      ";
            // line 41
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
            echo "
      <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesReseaux");
            echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    </div>
</div>
";
        } else {
            // line 47
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_5052afb016304f3b5450de4340a3cfcc06da0b489a5b94176177d437907288cc->leave($__internal_5052afb016304f3b5450de4340a3cfcc06da0b489a5b94176177d437907288cc_prof);

        
        $__internal_6361cd097219ead78ea13a25b2cb1e841bf372854c4875a968199e3767513558->leave($__internal_6361cd097219ead78ea13a25b2cb1e841bf372854c4875a968199e3767513558_prof);

    }

    public function getTemplateName()
    {
        return "reseaux/newReseaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  139 => 43,  135 => 42,  131 => 41,  125 => 38,  121 => 37,  117 => 36,  110 => 32,  105 => 30,  101 => 29,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
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
        <h2>Nouveau réseau</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Mes réseaux</a></li>
  <li class=\"breadcrumb-item active\">Nouveau réseau</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      {{ form_start(form) }}
      {{ form_row(form.idTypeReseau) }}
      {{ form_row(form.url) }}

        <br>
      {{ form_widget(form.save) }}
      <a href=\"{{path('mesReseaux')}}\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      {{ form_end(form) }}
    </div>
</div>
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "reseaux/newReseaux.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/reseaux/newReseaux.html.twig");
    }
}
