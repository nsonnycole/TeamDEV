<?php

/* projets/afficheProjet.html.twig */
class __TwigTemplate_11abf83fcb6bd793d1f82f8acfdf1a02a80118ed3d47a77ba225f32ae019fe4a extends Twig_Template
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
        $__internal_8fc4ec9b225beea4efe7b6ebac14cff860f2af1fcf530ebad6f4455b0a21b496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fc4ec9b225beea4efe7b6ebac14cff860f2af1fcf530ebad6f4455b0a21b496->enter($__internal_8fc4ec9b225beea4efe7b6ebac14cff860f2af1fcf530ebad6f4455b0a21b496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $__internal_df2a25a5bb0f6ae5c8740ac44d23d8b984b690d721cb9fea712d1fa8a235bf46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2a25a5bb0f6ae5c8740ac44d23d8b984b690d721cb9fea712d1fa8a235bf46->enter($__internal_df2a25a5bb0f6ae5c8740ac44d23d8b984b690d721cb9fea712d1fa8a235bf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fc4ec9b225beea4efe7b6ebac14cff860f2af1fcf530ebad6f4455b0a21b496->leave($__internal_8fc4ec9b225beea4efe7b6ebac14cff860f2af1fcf530ebad6f4455b0a21b496_prof);

        
        $__internal_df2a25a5bb0f6ae5c8740ac44d23d8b984b690d721cb9fea712d1fa8a235bf46->leave($__internal_df2a25a5bb0f6ae5c8740ac44d23d8b984b690d721cb9fea712d1fa8a235bf46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d028dd6abe47fe1be19fc38c8148361ca2292d46cc096fc4ba45617ea25524f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d028dd6abe47fe1be19fc38c8148361ca2292d46cc096fc4ba45617ea25524f5->enter($__internal_d028dd6abe47fe1be19fc38c8148361ca2292d46cc096fc4ba45617ea25524f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7fb3ce307e7fe33a0b9965c5df3a0b4daa8f827b7ee5defac6c787aa259b4344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb3ce307e7fe33a0b9965c5df3a0b4daa8f827b7ee5defac6c787aa259b4344->enter($__internal_7fb3ce307e7fe33a0b9965c5df3a0b4daa8f827b7ee5defac6c787aa259b4344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "<div class=\"container\" style=\"display:inline\">
    ";
            // line 6
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |
        <a href=\"";
                // line 8
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
            ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
        </a>
    ";
            } else {
                // line 12
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
    ";
            }
            // line 14
            echo "</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
            echo "</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\">Projets</a></li>
  <li class=\"breadcrumb-item active\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
            echo "</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>

";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 35
                echo "
    ";
                // line 36
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
<!-- CLIENT INFORMATION -->
<div id=\"lg\">
<div class=\"container\">
";
            // line 43
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                // line 44
                echo "<p><br><a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a>
<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\">Modifier</a></p>
";
            }
            // line 47
            echo "  <div class=\"row\">
    <div class=\"col-lg-8 desc\">
      <h3 style=\"font-weight:bold\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
            echo "</h3>
      <br>
        <img style=\"width:455px;\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
            echo "\" >
        <br>  <br>
        <h4><b>Description: <br>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "description", array()), "html", null, true);
            echo "</b></h4>

        <p>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "contenu", array()), "html", null, true);
            echo "</p>

        <h5><b>Type de projet : </b><br><br>";
            // line 57
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
            // line 58
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

      <h5><b>Auteur :</b> <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a></h5>
      <h5><b>Date de début  :</b> ";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo " </h5>
      <h5><b>Date de fin  :</b> ";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateFin", array()), "d/m/Y"), "html", null, true);
            echo " </h5>
      <h5><b>Durée  :</b> ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "duree", array()), "html", null, true);
            echo " </h5>
      <h5><b>Auteur :</b> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</h5>
      <h5><b>Nombre de participants :</b> ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbParticipants", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbPlaces", array()), "html", null, true);
            echo " </h5>
      <h5><b>Statut  :</b> ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "statut", array()), "nom", array()), "html", null, true);
            echo " </h5>
      <h5><b>URL : </b><br><br><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
            echo "</a></h5>

      ";
            // line 75
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                // line 76
                echo "      <p><br><a  class=\"btn btn-green\"href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                echo "\" lass=\"btn btn-green pull-left\">Participer !</a></p>
      ";
            }
            // line 78
            echo "

    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
        <td>Statut </td>
        ";
            // line 86
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                // line 87
                echo "        <td>Action </td>
        ";
            }
            // line 89
            echo "      </thead>
      <tbody>
    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 92
                echo "      <tr>
        <td><a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()), "html", null, true);
                echo "</a></td>
        <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["participant"], "statut", array()), "html", null, true);
                echo "</td>
        ";
                // line 95
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                    // line 96
                    echo "          ";
                    if (($this->getAttribute($context["participant"], "statut", array()) == "Accepter")) {
                        // line 97
                        echo "          <td>
          <a class=\"btn btn-danger\" href=\"";
                        // line 98
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("refuser", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>
          </td>
          ";
                    } else {
                        // line 101
                        echo "          <td>
          <a class=\"btn btn-success\" href=\"";
                        // line 102
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accepter", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-ok\"></span></a>
          <a class=\"btn btn-danger\" href=\"";
                        // line 103
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("refuser", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>
          </td>
          ";
                    }
                    // line 106
                    echo "        ";
                }
                // line 107
                echo "      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "    </tbody>
    </table>

  </div><!-- row -->

</div><!-- container -->

</div><!-- dg -->
";
        } else {
            // line 118
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_7fb3ce307e7fe33a0b9965c5df3a0b4daa8f827b7ee5defac6c787aa259b4344->leave($__internal_7fb3ce307e7fe33a0b9965c5df3a0b4daa8f827b7ee5defac6c787aa259b4344_prof);

        
        $__internal_d028dd6abe47fe1be19fc38c8148361ca2292d46cc096fc4ba45617ea25524f5->leave($__internal_d028dd6abe47fe1be19fc38c8148361ca2292d46cc096fc4ba45617ea25524f5_prof);

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
        return array (  339 => 118,  328 => 109,  321 => 107,  318 => 106,  312 => 103,  308 => 102,  305 => 101,  299 => 98,  296 => 97,  293 => 96,  291 => 95,  287 => 94,  281 => 93,  278 => 92,  274 => 91,  270 => 89,  266 => 87,  264 => 86,  254 => 78,  248 => 76,  246 => 75,  239 => 73,  235 => 72,  229 => 71,  225 => 70,  221 => 69,  217 => 68,  213 => 67,  207 => 66,  187 => 58,  174 => 57,  169 => 55,  164 => 53,  159 => 51,  154 => 49,  150 => 47,  145 => 45,  140 => 44,  138 => 43,  132 => 39,  123 => 36,  120 => 35,  116 => 34,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  87 => 20,  79 => 14,  71 => 12,  65 => 9,  61 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if app.user and app.user.username == detailProjet.idUtilisateur.username %}
<p><br><a  href=\"{{ path('deleteProjet', {'id': detailProjet.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
<a href=\"{{ path('editProjet', {'id': detailProjet.id}) }}\" class=\"btn btn-warning\">Modifier</a></p>
{% endif %}
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

      <h5><b>Auteur :</b> <a href=\"{{ path('profilDe', {'username': detailProjet.idUtilisateur.username}) }}\">{{detailProjet.idUtilisateur.username}}</a></h5>
      <h5><b>Date de début  :</b> {{detailProjet.dateDebut|date('d/m/Y')}} </h5>
      <h5><b>Date de fin  :</b> {{detailProjet.dateFin|date('d/m/Y')}} </h5>
      <h5><b>Durée  :</b> {{detailProjet.duree}} </h5>
      <h5><b>Auteur :</b> {{detailProjet.idUtilisateur.username}}</h5>
      <h5><b>Nombre de participants :</b> {{detailProjet.nbParticipants}} / {{detailProjet.nbPlaces}} </h5>
      <h5><b>Statut  :</b> {{detailProjet.statut.nom}} </h5>
      <h5><b>URL : </b><br><br><a href=\"{{detailProjet.url}}\">{{detailProjet.url}}</a></h5>

      {% if app.user and app.user.username != detailProjet.idUtilisateur.username %}
      <p><br><a  class=\"btn btn-green\"href=\"{{ path('newInsc', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Participer !</a></p>
      {% endif %}


    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
        <td>Statut </td>
        {% if app.user and app.user.username == detailProjet.idUtilisateur.username %}
        <td>Action </td>
        {% endif %}
      </thead>
      <tbody>
    {% for participant in participants %}
      <tr>
        <td><a href=\"{{ path('profilDe', {'username': participant.idUtilisateur.username}) }}\">{{participant.idUtilisateur.username}}</a></td>
        <td>{{participant.statut}}</td>
        {% if app.user and app.user.username == detailProjet.idUtilisateur.username %}
          {% if participant.statut == \"Accepter\"%}
          <td>
          <a class=\"btn btn-danger\" href=\"{{ path('refuser', {'id': participant.id})  }}\"><span class=\"glyphicon glyphicon-remove\"></span></a>
          </td>
          {% else %}
          <td>
          <a class=\"btn btn-success\" href=\"{{ path('accepter', {'id': participant.id}) }}\"><span class=\"glyphicon glyphicon-ok\"></span></a>
          <a class=\"btn btn-danger\" href=\"{{ path('refuser', {'id': participant.id})  }}\"><span class=\"glyphicon glyphicon-remove\"></span></a>
          </td>
          {% endif %}
        {% endif %}
      </tr>
    {% endfor %}
    </tbody>
    </table>

  </div><!-- row -->

</div><!-- container -->

</div><!-- dg -->
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock%}
", "projets/afficheProjet.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/afficheProjet.html.twig");
    }
}
