<?php

/* :utilisateur:mesParticipations.html.twig */
class __TwigTemplate_3833b00d1e63c54f2279c4d3a8a4a4081e7cb57f7cf60b4865d9666cdb314de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":utilisateur:mesParticipations.html.twig", 1);
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
        $__internal_b1f659b521aaa801a102699885beb5ea30bff6998b562b885057149e903b1a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f659b521aaa801a102699885beb5ea30bff6998b562b885057149e903b1a98->enter($__internal_b1f659b521aaa801a102699885beb5ea30bff6998b562b885057149e903b1a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":utilisateur:mesParticipations.html.twig"));

        $__internal_2aa8be950bac20fc52c7acf7c2c627922be885109ee48fe557f325a54c7c9c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa8be950bac20fc52c7acf7c2c627922be885109ee48fe557f325a54c7c9c92->enter($__internal_2aa8be950bac20fc52c7acf7c2c627922be885109ee48fe557f325a54c7c9c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":utilisateur:mesParticipations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f659b521aaa801a102699885beb5ea30bff6998b562b885057149e903b1a98->leave($__internal_b1f659b521aaa801a102699885beb5ea30bff6998b562b885057149e903b1a98_prof);

        
        $__internal_2aa8be950bac20fc52c7acf7c2c627922be885109ee48fe557f325a54c7c9c92->leave($__internal_2aa8be950bac20fc52c7acf7c2c627922be885109ee48fe557f325a54c7c9c92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05e7a032aa6157ce4bcd7c0f5c2133663a7d2cf73cfefc8253610c0c487a05e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e7a032aa6157ce4bcd7c0f5c2133663a7d2cf73cfefc8253610c0c487a05e9->enter($__internal_05e7a032aa6157ce4bcd7c0f5c2133663a7d2cf73cfefc8253610c0c487a05e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5d0f30d2136244a9323c99e37e3ef8b9498ef002a5f9f67a33f2599f68735e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d0f30d2136244a9323c99e37e3ef8b9498ef002a5f9f67a33f2599f68735e3->enter($__internal_e5d0f30d2136244a9323c99e37e3ef8b9498ef002a5f9f67a33f2599f68735e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes participations </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes participations</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes particpations</h3>
<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom du projet</td>
    <td>Description </td>
    <td>Auteur </td>
    <td>Statut </td>
    <td>Date de début </td>
    <td>Date de fin </td>
    <td>Action </td>
  </thead>
  <tbody>

 
";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")));
            foreach ($context['_seq'] as $context["_key"] => $context["mesParticipation"]) {
                // line 54
                echo "  <tr>
    <td><a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "nomProjet", array()), "html", null, true);
                echo "</a></td>
    <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "description", array())), 0, 60), "html", null, true);
                echo " [...] </td>
    <td><a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "idUtilisateur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "idUtilisateur", array()), "username", array()), "html", null, true);
                echo "</a></td>
    <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["mesParticipation"], "statut", array()), "html", null, true);
                echo "</td>
    <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo " </td>
    <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "dateFin", array()), "d/m/Y"), "html", null, true);
                echo "</td>
    <td><a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desincProjet", array("id" => $this->getAttribute((isset($context["participe"]) ? $context["participe"] : $this->getContext($context, "participe")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Se désinscrire</a>";
                echo "</td>
  ";
                // line 66
                echo "  </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesParticipation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        } else {
            // line 74
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_e5d0f30d2136244a9323c99e37e3ef8b9498ef002a5f9f67a33f2599f68735e3->leave($__internal_e5d0f30d2136244a9323c99e37e3ef8b9498ef002a5f9f67a33f2599f68735e3_prof);

        
        $__internal_05e7a032aa6157ce4bcd7c0f5c2133663a7d2cf73cfefc8253610c0c487a05e9->leave($__internal_05e7a032aa6157ce4bcd7c0f5c2133663a7d2cf73cfefc8253610c0c487a05e9_prof);

    }

    public function getTemplateName()
    {
        return ":utilisateur:mesParticipations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 74,  181 => 68,  174 => 66,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  151 => 57,  147 => 56,  141 => 55,  138 => 54,  134 => 53,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Mes participations </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('fos_user_profile_show')}}\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes participations</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes particpations</h3>
<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom du projet</td>
    <td>Description </td>
    <td>Auteur </td>
    <td>Statut </td>
    <td>Date de début </td>
    <td>Date de fin </td>
    <td>Action </td>
  </thead>
  <tbody>

 
{% for mesParticipation in participation %}
  <tr>
    <td><a href=\"{{ path('showProjet', {'id': mesParticipation.idProjet.id}) }}\">{{mesParticipation.idProjet.nomProjet}}</a></td>
    <td>{{mesParticipation.idProjet.description | striptags | slice(0, 60) }} [...] </td>
    <td><a href=\"{{ path('profilDe', {'username': mesParticipation.idProjet.idUtilisateur.username}) }}\">{{mesParticipation.idProjet.idUtilisateur.username}}</a></td>
    <td>{{mesParticipation.statut}}</td>
    <td>{{mesParticipation.idProjet.dateDebut|date('d/m/Y')}} </td>
    <td>{{mesParticipation.idProjet.dateFin|date('d/m/Y')}}</td>
    <td><a href=\"{{ path('desincProjet', {'id': participe.id}) }}\" class=\"btn btn-danger\">Se désinscrire</a>{#<a href=\"{{ path('desincProjet', {'id': participe.id}) }}\" class=\"btn btn-danger\">Se désinscrire</a>#}</td>
  {#  <td>
      <a href=\"{{ path('editProjet', {'id': competence.id}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"{{ path('deleteProjet', {'id': competence.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </td>#}
  </tr>
{% endfor %}
</tbody>
</table>

</div><!-- row -->
</div>
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", ":utilisateur:mesParticipations.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/mesParticipations.html.twig");
    }
}
