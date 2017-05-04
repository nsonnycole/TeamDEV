<?php

/* projets/afficheProjet.html.twig */
class __TwigTemplate_955959bcd6abafb815fa2af6c1d9e39ec621f48278030b25f7a011ac0e5775ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets/afficheProjet.html.twig", 1);
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
        $__internal_2ac202c2987402fb664af388ea5b2be5f99b82fbf7116f91ead395665959bc87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac202c2987402fb664af388ea5b2be5f99b82fbf7116f91ead395665959bc87->enter($__internal_2ac202c2987402fb664af388ea5b2be5f99b82fbf7116f91ead395665959bc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $__internal_5e1e603ed7a1a23977f614b9d928a0150056dd4ef5806a548bef4baea8a6658e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1e603ed7a1a23977f614b9d928a0150056dd4ef5806a548bef4baea8a6658e->enter($__internal_5e1e603ed7a1a23977f614b9d928a0150056dd4ef5806a548bef4baea8a6658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ac202c2987402fb664af388ea5b2be5f99b82fbf7116f91ead395665959bc87->leave($__internal_2ac202c2987402fb664af388ea5b2be5f99b82fbf7116f91ead395665959bc87_prof);

        
        $__internal_5e1e603ed7a1a23977f614b9d928a0150056dd4ef5806a548bef4baea8a6658e->leave($__internal_5e1e603ed7a1a23977f614b9d928a0150056dd4ef5806a548bef4baea8a6658e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9d7492df7408d59242068dd2941adb1ec1e76ebd9e2636a17088d11fbfb5872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d7492df7408d59242068dd2941adb1ec1e76ebd9e2636a17088d11fbfb5872->enter($__internal_b9d7492df7408d59242068dd2941adb1ec1e76ebd9e2636a17088d11fbfb5872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_373655780b0c5c1af505446c133e87ae6092627b70fe4e3225decf906616cf78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373655780b0c5c1af505446c133e87ae6092627b70fe4e3225decf906616cf78->enter($__internal_373655780b0c5c1af505446c133e87ae6092627b70fe4e3225decf906616cf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
        echo "</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\">Projets</a></li>
  <li class=\"breadcrumb-item active\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
        echo "</li>
  <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>

";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "
    ";
            // line 25
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
<!-- CLIENT INFORMATION -->
<div id=\"lg\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-5 col-lg-offset-1 desc\">
      <h3 style=\"font-weight:bold\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
        echo "</h3>
      <br>
        <img style=\"width:455px;\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
        echo "\" >
        <br>  <br>
        <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "contenu", array()), "html", null, true);
        echo "</p>

    </div>

    <div class=\"col-lg-4 col-lg-offset-1 desc\">
      <h3 style=\"font-weight:bold\"> Infos supplémentaires</h3>
      <br>

      <h5><b>Auteur :</b> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
        echo "</h5>
      <h5><b>Date de début  :</b> ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo " </h5>
      <h5><b>Date de fin  :</b> ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateFin", array()), "d/m/Y"), "html", null, true);
        echo " </h5>
      <h5><b>Durée  :</b> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "duree", array()), "html", null, true);
        echo " </h5>
      <h5><b>Auteur :</b> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
        echo "</h5>
      <h5><b>Nombre de participants :</b> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbParticipants", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbPlaces", array()), "html", null, true);
        echo " </h5>
      <h5><b>Statut  :</b> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "statut", array()), "nom", array()), "html", null, true);
        echo " </h5>
      <h5><b>URL : </b><br><br><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
        echo "</a></h5>

      <h5><b>Langages : </b><br><br>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idTypeProjet", array()), "nom", array()), "html", null, true);
        echo "</h5>

      <h5><b>Description: </b><br>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "description", array()), "html", null, true);
        echo "</h5>

      <p><br><a  class=\"btn btn-green\"href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
        echo "\" lass=\"btn btn-green pull-left\">Participer !</a></p>
      <p><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desincProjet", array("id" => $this->getAttribute((isset($context["participe"]) ? $context["participe"] : $this->getContext($context, "participe")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Se désinscrire</a></p>
      <p><br><a  href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Supprimer</a>
      <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a></p>



    </div>
    <div class=\"col-sm-6 col-sm-offset-1\">
    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
      </thead>
      <tbody>
    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 76
            echo "      <tr>
        <td><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a></td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </tbody>
    </table>

  </div><!-- row -->

</div><!-- container -->

</div><!-- dg -->

";
        
        $__internal_373655780b0c5c1af505446c133e87ae6092627b70fe4e3225decf906616cf78->leave($__internal_373655780b0c5c1af505446c133e87ae6092627b70fe4e3225decf906616cf78_prof);

        
        $__internal_b9d7492df7408d59242068dd2941adb1ec1e76ebd9e2636a17088d11fbfb5872->leave($__internal_b9d7492df7408d59242068dd2941adb1ec1e76ebd9e2636a17088d11fbfb5872_prof);

    }

    public function getTemplateName()
    {
        return "projets/afficheProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 80,  212 => 77,  209 => 76,  205 => 75,  189 => 62,  185 => 61,  181 => 60,  177 => 59,  172 => 57,  167 => 55,  160 => 53,  156 => 52,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  119 => 38,  114 => 36,  109 => 34,  101 => 28,  92 => 25,  89 => 24,  85 => 23,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>{{detailProjet.nomProjet}}</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Projets</a></li>
  <li class=\"breadcrumb-item active\">{{detailProjet.nomProjet}}</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>

{% for flashMessage in app.session.flashbag.get('error') %}

    {{ flashMessage }}

{% endfor %}

<!-- CLIENT INFORMATION -->
<div id=\"lg\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-5 col-lg-offset-1 desc\">
      <h3 style=\"font-weight:bold\">{{detailProjet.nomProjet}}</h3>
      <br>
        <img style=\"width:455px;\" src=\"{{asset(\"img/about-bg.jpg\")}}\" >
        <br>  <br>
        <p>{{detailProjet.contenu}}</p>

    </div>

    <div class=\"col-lg-4 col-lg-offset-1 desc\">
      <h3 style=\"font-weight:bold\"> Infos supplémentaires</h3>
      <br>

      <h5><b>Auteur :</b> {{detailProjet.idUtilisateur.username}}</h5>
      <h5><b>Date de début  :</b> {{detailProjet.dateDebut|date('d/m/Y')}} </h5>
      <h5><b>Date de fin  :</b> {{detailProjet.dateFin|date('d/m/Y')}} </h5>
      <h5><b>Durée  :</b> {{detailProjet.duree}} </h5>
      <h5><b>Auteur :</b> {{detailProjet.idUtilisateur.username}}</h5>
      <h5><b>Nombre de participants :</b> {{detailProjet.nbParticipants}} / {{detailProjet.nbPlaces}} </h5>
      <h5><b>Statut  :</b> {{detailProjet.statut.nom}} </h5>
      <h5><b>URL : </b><br><br><a href=\"{{detailProjet.url}}\">{{detailProjet.url}}</a></h5>

      <h5><b>Langages : </b><br><br>{{detailProjet.idTypeProjet.nom}}</h5>

      <h5><b>Description: </b><br>{{detailProjet.description}}</h5>

      <p><br><a  class=\"btn btn-green\"href=\"{{ path('newInsc', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Participer !</a></p>
      <p><a href=\"{{ path('desincProjet', {'id': participe.id}) }}\" class=\"btn btn-danger\">Se désinscrire</a></p>
      <p><br><a  href=\"{{ path('deleteProjet', {'id': detailProjet.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
      <a href=\"{{ path('editProjet', {'id': detailProjet.id}) }}\" class=\"btn btn-warning\">Modifier</a></p>



    </div>
    <div class=\"col-sm-6 col-sm-offset-1\">
    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
      </thead>
      <tbody>
    {% for participant in participants %}
      <tr>
        <td><a href=\"{{ path('profilDe', {'username': participant.idUtilisateur.username}) }}\">{{participant.idUtilisateur.username}}</a></td>
      </tr>
    {% endfor %}
    </tbody>
    </table>

  </div><!-- row -->

</div><!-- container -->

</div><!-- dg -->

{% endblock%}
", "projets/afficheProjet.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/projets/afficheProjet.html.twig");
    }
}
