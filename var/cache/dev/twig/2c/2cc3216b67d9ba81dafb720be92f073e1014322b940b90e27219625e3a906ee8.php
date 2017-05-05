<?php

/* utilisateur/mesParticipations.html.twig */
class __TwigTemplate_ca2b5703f23b4c306dc33ef2bd3f5d2d5a154b845f0619293a27ac9478677b29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/mesParticipations.html.twig", 1);
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
        $__internal_fe831fc4835f3f9171a73c0aa9a4bc7966b9bff757a02194f8a99e2103920411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe831fc4835f3f9171a73c0aa9a4bc7966b9bff757a02194f8a99e2103920411->enter($__internal_fe831fc4835f3f9171a73c0aa9a4bc7966b9bff757a02194f8a99e2103920411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesParticipations.html.twig"));

        $__internal_e0fb06522f9d909262fd925adf5b4af1ae74a225f66285ce562c13781d859b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fb06522f9d909262fd925adf5b4af1ae74a225f66285ce562c13781d859b20->enter($__internal_e0fb06522f9d909262fd925adf5b4af1ae74a225f66285ce562c13781d859b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesParticipations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe831fc4835f3f9171a73c0aa9a4bc7966b9bff757a02194f8a99e2103920411->leave($__internal_fe831fc4835f3f9171a73c0aa9a4bc7966b9bff757a02194f8a99e2103920411_prof);

        
        $__internal_e0fb06522f9d909262fd925adf5b4af1ae74a225f66285ce562c13781d859b20->leave($__internal_e0fb06522f9d909262fd925adf5b4af1ae74a225f66285ce562c13781d859b20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc1086c5f8d35b52e5f37d9fcb6381d465e41748d2418d948cd969d6c056480e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1086c5f8d35b52e5f37d9fcb6381d465e41748d2418d948cd969d6c056480e->enter($__internal_bc1086c5f8d35b52e5f37d9fcb6381d465e41748d2418d948cd969d6c056480e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3334899778af839bbec0b2eeb03bdfc38603c2ae86154823e71befb787a8fde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3334899778af839bbec0b2eeb03bdfc38603c2ae86154823e71befb787a8fde9->enter($__internal_3334899778af839bbec0b2eeb03bdfc38603c2ae86154823e71befb787a8fde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes participations </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes participations</li>
  <a href=\"";
        // line 29
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")));
        foreach ($context['_seq'] as $context["_key"] => $context["mesParticipation"]) {
            // line 50
            echo "  <tr>
    <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "nomProjet", array()), "html", null, true);
            echo "</a></td>
    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "description", array())), 0, 60), "html", null, true);
            echo " [...] </td>
    <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "idUtilisateur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a></td>
    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mesParticipation"], "statut", array()), "nom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo " </td>
    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["mesParticipation"], "idProjet", array()), "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</td>
    <td><a href=\"\" class=\"btn btn-danger\">Se désinscrire</a>";
            // line 57
            echo "</td>
  ";
            // line 62
            echo "  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesParticipation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        
        $__internal_3334899778af839bbec0b2eeb03bdfc38603c2ae86154823e71befb787a8fde9->leave($__internal_3334899778af839bbec0b2eeb03bdfc38603c2ae86154823e71befb787a8fde9_prof);

        
        $__internal_bc1086c5f8d35b52e5f37d9fcb6381d465e41748d2418d948cd969d6c056480e->leave($__internal_bc1086c5f8d35b52e5f37d9fcb6381d465e41748d2418d948cd969d6c056480e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/mesParticipations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 64,  162 => 62,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  141 => 53,  137 => 52,  131 => 51,  128 => 50,  124 => 49,  101 => 29,  96 => 27,  92 => 26,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <td>{{mesParticipation.statut.nom}}</td>
    <td>{{mesParticipation.idProjet.dateDebut|date('d/m/Y')}} </td>
    <td>{{mesParticipation.idProjet.dateFin|date('d/m/Y')}}</td>
    <td><a href=\"\" class=\"btn btn-danger\">Se désinscrire</a>{#<a href=\"{{ path('desincProjet', {'id': participe.id}) }}\" class=\"btn btn-danger\">Se désinscrire</a>#}</td>
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
{% endblock %}
", "utilisateur/mesParticipations.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/utilisateur/mesParticipations.html.twig");
    }
}
