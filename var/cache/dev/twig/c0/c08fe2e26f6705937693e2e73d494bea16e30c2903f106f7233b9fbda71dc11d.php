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
        $__internal_a86362a05c9d577c0901a80743715e9a196770c5abdf2cb108d95a9ef62627da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86362a05c9d577c0901a80743715e9a196770c5abdf2cb108d95a9ef62627da->enter($__internal_a86362a05c9d577c0901a80743715e9a196770c5abdf2cb108d95a9ef62627da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $__internal_5a338ac4ce57c76455c15025acffb85392cff33d971ee6dc75e9a3ea2f60fb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a338ac4ce57c76455c15025acffb85392cff33d971ee6dc75e9a3ea2f60fb2b->enter($__internal_5a338ac4ce57c76455c15025acffb85392cff33d971ee6dc75e9a3ea2f60fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a86362a05c9d577c0901a80743715e9a196770c5abdf2cb108d95a9ef62627da->leave($__internal_a86362a05c9d577c0901a80743715e9a196770c5abdf2cb108d95a9ef62627da_prof);

        
        $__internal_5a338ac4ce57c76455c15025acffb85392cff33d971ee6dc75e9a3ea2f60fb2b->leave($__internal_5a338ac4ce57c76455c15025acffb85392cff33d971ee6dc75e9a3ea2f60fb2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cb00790325195e3fe04f40e2967db5e9ee058efc5cf18fc85914b7cd8bb0cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb00790325195e3fe04f40e2967db5e9ee058efc5cf18fc85914b7cd8bb0cd0->enter($__internal_0cb00790325195e3fe04f40e2967db5e9ee058efc5cf18fc85914b7cd8bb0cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8612ca0d8cb62f7c403625cfb64bbe71ac8e50c781a7c7b03c2449add0dbd15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8612ca0d8cb62f7c403625cfb64bbe71ac8e50c781a7c7b03c2449add0dbd15e->enter($__internal_8612ca0d8cb62f7c403625cfb64bbe71ac8e50c781a7c7b03c2449add0dbd15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
        echo "</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\">Projets</a></li>
  <li class=\"breadcrumb-item active\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
        echo "</li>
  <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>

";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 34
            echo "
    ";
            // line 35
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
<!-- CLIENT INFORMATION -->
<div id=\"lg\">
<div class=\"container\">
<p><br><a  href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Supprimer</a>
<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a></p>
  <div class=\"row\">
    <div class=\"col-lg-8 desc\">
      <h3 style=\"font-weight:bold\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
        echo "</h3>
      <br>
        <img style=\"width:455px;\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
        echo "\" >
        <br>  <br>
        <h4><b>Description: <br>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "description", array()), "html", null, true);
        echo "</b></h4>

        <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "contenu", array()), "html", null, true);
        echo "</p>

        <h5><b>Type de projet : </b><br><br>";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idTypeProjet", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["typeProjet"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeProjet"], "getNom", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeProjet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h5>
        <h5><b>Technologie : </b><br><br>";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "technologies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["techno"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["techno"], "getNom", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['techno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h5>

    </div>

    <div class=\"col-lg-4 desc\">
      <h3 style=\"font-weight:bold\"> Infos supplémentaires</h3>
      <br>

      <h5><b>Auteur :</b> ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
        echo "</h5>
      <h5><b>Date de début  :</b> ";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo " </h5>
      <h5><b>Date de fin  :</b> ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateFin", array()), "d/m/Y"), "html", null, true);
        echo " </h5>
      <h5><b>Durée  :</b> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "duree", array()), "html", null, true);
        echo " </h5>
      <h5><b>Auteur :</b> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
        echo "</h5>
      <h5><b>Nombre de participants :</b> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbParticipants", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbPlaces", array()), "html", null, true);
        echo " </h5>
      <h5><b>Statut  :</b> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "statut", array()), "nom", array()), "html", null, true);
        echo " </h5>
      <h5><b>URL : </b><br><br><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
        echo "</a></h5>


      <p><br><a  class=\"btn btn-green\"href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
        echo "\" lass=\"btn btn-green pull-left\">Participer !</a></p>



    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
        <td>Action </td>
      </thead>
      <tbody>
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 86
            echo "      <tr>
        <td><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a></td>
        <td>
        <a class=\"btn btn-success\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accepter", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span></a>
        <a class=\"btn btn-danger\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("refuser", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    </tbody>
    </table>

  </div><!-- row -->

</div><!-- container -->

</div><!-- dg -->

";
        
        $__internal_8612ca0d8cb62f7c403625cfb64bbe71ac8e50c781a7c7b03c2449add0dbd15e->leave($__internal_8612ca0d8cb62f7c403625cfb64bbe71ac8e50c781a7c7b03c2449add0dbd15e_prof);

        
        $__internal_0cb00790325195e3fe04f40e2967db5e9ee058efc5cf18fc85914b7cd8bb0cd0->leave($__internal_0cb00790325195e3fe04f40e2967db5e9ee058efc5cf18fc85914b7cd8bb0cd0_prof);

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
        return array (  280 => 94,  270 => 90,  266 => 89,  259 => 87,  256 => 86,  252 => 85,  237 => 73,  229 => 70,  225 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  179 => 55,  166 => 54,  161 => 52,  156 => 50,  151 => 48,  146 => 46,  140 => 43,  136 => 42,  130 => 38,  121 => 35,  118 => 34,  114 => 33,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  85 => 19,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<p><br><a  href=\"{{ path('deleteProjet', {'id': detailProjet.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
<a href=\"{{ path('editProjet', {'id': detailProjet.id}) }}\" class=\"btn btn-warning\">Modifier</a></p>
  <div class=\"row\">
    <div class=\"col-lg-8 desc\">
      <h3 style=\"font-weight:bold\">{{detailProjet.nomProjet}}</h3>
      <br>
        <img style=\"width:455px;\" src=\"{{asset(\"img/about-bg.jpg\")}}\" >
        <br>  <br>
        <h4><b>Description: <br>{{detailProjet.description}}</b></h4>

        <p>{{detailProjet.contenu}}</p>

        <h5><b>Type de projet : </b><br><br>{% for typeProjet in detailProjet.idTypeProjet %} {{typeProjet.getNom}}, {% endfor %}</h5>
        <h5><b>Technologie : </b><br><br>{% for techno in detailProjet.technologies %} {{techno.getNom}}, {% endfor %}</h5>

    </div>

    <div class=\"col-lg-4 desc\">
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


      <p><br><a  class=\"btn btn-green\"href=\"{{ path('newInsc', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Participer !</a></p>



    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
        <td>Action </td>
      </thead>
      <tbody>
    {% for participant in participants %}
      <tr>
        <td><a href=\"{{ path('profilDe', {'username': participant.idUtilisateur.username}) }}\">{{participant.idUtilisateur.username}}</a></td>
        <td>
        <a class=\"btn btn-success\" href=\"{{ path('accepter', {'id': participant.id}) }}\"><span class=\"glyphicon glyphicon-ok\"></span></a>
        <a class=\"btn btn-danger\" href=\"{{ path('refuser', {'id': participant.id})  }}\"><span class=\"glyphicon glyphicon-remove\"></span></a>
        </td>
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
