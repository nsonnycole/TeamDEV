<?php

/* projets/afficheProjet.html.twig */
class __TwigTemplate_573c3220754b7a780037a3aa0b0a7d84d35cb49fce51c8e287a5dc1cbd8ee0cd extends Twig_Template
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
        $__internal_153b44a39663332da9929398df7b4ad9c406a861b9b7028c429e7b54cfa9bb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153b44a39663332da9929398df7b4ad9c406a861b9b7028c429e7b54cfa9bb42->enter($__internal_153b44a39663332da9929398df7b4ad9c406a861b9b7028c429e7b54cfa9bb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $__internal_90eeb07644b493289f1b69898b24832fbb9f0551a5ea0d8085d4a2804fae0472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90eeb07644b493289f1b69898b24832fbb9f0551a5ea0d8085d4a2804fae0472->enter($__internal_90eeb07644b493289f1b69898b24832fbb9f0551a5ea0d8085d4a2804fae0472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_153b44a39663332da9929398df7b4ad9c406a861b9b7028c429e7b54cfa9bb42->leave($__internal_153b44a39663332da9929398df7b4ad9c406a861b9b7028c429e7b54cfa9bb42_prof);

        
        $__internal_90eeb07644b493289f1b69898b24832fbb9f0551a5ea0d8085d4a2804fae0472->leave($__internal_90eeb07644b493289f1b69898b24832fbb9f0551a5ea0d8085d4a2804fae0472_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87e6bf4c0520dc136531434e23847b34f6d8e8f77f9662073448b0cad6c4c466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e6bf4c0520dc136531434e23847b34f6d8e8f77f9662073448b0cad6c4c466->enter($__internal_87e6bf4c0520dc136531434e23847b34f6d8e8f77f9662073448b0cad6c4c466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cd76a4c986dfd0ac62b7a8bc4d6341b2f413a3113f1bc050f7ddad4d2e8c914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd76a4c986dfd0ac62b7a8bc4d6341b2f413a3113f1bc050f7ddad4d2e8c914->enter($__internal_3cd76a4c986dfd0ac62b7a8bc4d6341b2f413a3113f1bc050f7ddad4d2e8c914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
            echo "</h2>
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
  <li class=\"breadcrumb-item active\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
            echo "</li>
  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>

";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 36
                echo "
    ";
                // line 37
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
<!-- CLIENT INFORMATION -->
<div id=\"lg\">
<div class=\"container\">
";
            // line 44
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                // line 45
                echo "<p><br><a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a>
  ";
                // line 46
                if (($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "statut", array()) != "Fermé")) {
                    // line 47
                    echo "  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-warning\">Modifier</a></p>
  ";
                }
            }
            // line 50
            echo "  <div class=\"row\">
    <div class=\"col-lg-8 desc\">
      <h3 style=\"font-weight:bold\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
            echo "</h3>
      <br>
        <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "file", array()), "html", null, true);
            echo "\" width=\"640px;\">
        <br>  <br>
        <p><h4>Description</h4>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "description", array()), "html", null, true);
            echo "</p>

        <p>";
            // line 58
            echo $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "contenu", array());
            echo "</p>

        <h5><b>Type de projet : </b><br><br>";
            // line 60
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
            // line 61
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
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a></h5>
      <h5><b>Date de début  :</b> ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo " </h5>
      <h5><b>Date de fin  :</b> ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateFin", array()), "d/m/Y"), "html", null, true);
            echo " </h5>
      <h5><b>Durée  :</b> ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "duree", array()), "html", null, true);
            echo " </h5>
      <h5><b>Nombre de participants :</b> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbParticipants", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbPlaces", array()), "html", null, true);
            echo " </h5>
      <h5><b>Statut  :</b> ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "statut", array()), "nom", array()), "html", null, true);
            echo " </h5>
      <h5><b>URL : </b><br><br><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
            echo "</a></h5>

      ";
            // line 77
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                // line 78
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")));
                foreach ($context['_seq'] as $context["_key"] => $context["participe"]) {
                    // line 79
                    echo "        ";
                    if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute($context["participe"], "idUtilisateur", array()), "username", array())))) {
                        // line 80
                        echo "          ";
                        if ( !(null === $this->getAttribute($context["participe"], "statut", array()))) {
                            // line 81
                            echo "            <p><br><a  class=\"btn btn-danger\"href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desincProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                            echo "\" lass=\"btn btn-green pull-left\">Se désincrire</a></p>
            ";
                        } else {
                            // line 83
                            echo "          <p><br><a  class=\"btn btn-green\"href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                            echo "\" lass=\"btn btn-green pull-left\">Participer !</a></p>
        ";
                        }
                        // line 85
                        echo "
      ";
                    }
                    // line 87
                    echo "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participe'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "        ";
                if (($this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "statut", array()), "nom", array()) == "Fermé")) {
                    // line 90
                    echo "        <p><br><a  class=\"btn btn-danger disabled\"href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                    echo "\" lass=\"btn btn-green pull-left\">Fermer</a></p>
        ";
                } else {
                    // line 92
                    echo "        <p><br><a  class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                    echo "\" lass=\"btn btn-green pull-left\">Participer !</a></p>
        ";
                }
                // line 94
                echo "      ";
            }
            // line 95
            echo "    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
        <td>Statut </td>
        ";
            // line 101
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                // line 102
                echo "        <td>Action </td>
        ";
            }
            // line 104
            echo "      </thead>
      <tbody>
    ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 107
                echo "      <tr>
        <td><a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()), "html", null, true);
                echo "</a></td>
        <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["participant"], "statut", array()), "html", null, true);
                echo "</td>
        ";
                // line 110
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                    // line 111
                    echo "          ";
                    if (($this->getAttribute($context["participant"], "statut", array()) == "Accepter")) {
                        // line 112
                        echo "          <td>
          <a class=\"btn btn-danger\" href=\"";
                        // line 113
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("refuser", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>
          </td>
          ";
                    } else {
                        // line 116
                        echo "          <td>
          <a class=\"btn btn-success\" href=\"";
                        // line 117
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accepter", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-ok\"></span></a>
          <a class=\"btn btn-danger\" href=\"";
                        // line 118
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("refuser", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>
          </td>
          ";
                    }
                    // line 121
                    echo "        ";
                }
                // line 122
                echo "      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "    </tbody>
    </table>

  </div><!-- row -->

</div><!-- container -->

</div><!-- dg -->
";
        } else {
            // line 133
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_3cd76a4c986dfd0ac62b7a8bc4d6341b2f413a3113f1bc050f7ddad4d2e8c914->leave($__internal_3cd76a4c986dfd0ac62b7a8bc4d6341b2f413a3113f1bc050f7ddad4d2e8c914_prof);

        
        $__internal_87e6bf4c0520dc136531434e23847b34f6d8e8f77f9662073448b0cad6c4c466->leave($__internal_87e6bf4c0520dc136531434e23847b34f6d8e8f77f9662073448b0cad6c4c466_prof);

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
        return array (  389 => 133,  378 => 124,  371 => 122,  368 => 121,  362 => 118,  358 => 117,  355 => 116,  349 => 113,  346 => 112,  343 => 111,  341 => 110,  337 => 109,  331 => 108,  328 => 107,  324 => 106,  320 => 104,  316 => 102,  314 => 101,  306 => 95,  303 => 94,  297 => 92,  291 => 90,  288 => 89,  281 => 87,  277 => 85,  271 => 83,  265 => 81,  262 => 80,  259 => 79,  254 => 78,  252 => 77,  245 => 75,  241 => 74,  235 => 73,  231 => 72,  227 => 71,  223 => 70,  217 => 69,  197 => 61,  184 => 60,  179 => 58,  174 => 56,  169 => 54,  164 => 52,  160 => 50,  153 => 47,  151 => 46,  146 => 45,  144 => 44,  138 => 40,  129 => 37,  126 => 36,  122 => 35,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  93 => 21,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
  {% if detailProjet.statut != \"Fermé\" %}
  <a href=\"{{ path('editProjet', {'id': detailProjet.id}) }}\" class=\"btn btn-warning\">Modifier</a></p>
  {% endif %}
{% endif %}
  <div class=\"row\">
    <div class=\"col-lg-8 desc\">
      <h3 style=\"font-weight:bold\">{{detailProjet.nomProjet}}</h3>
      <br>
        <img src=\"{{detailProjet.file}}\" width=\"640px;\">
        <br>  <br>
        <p><h4>Description</h4>{{detailProjet.description}}</p>

        <p>{{detailProjet.contenu|raw}}</p>

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
      <h5><b>Nombre de participants :</b> {{detailProjet.nbParticipants}} / {{detailProjet.nbPlaces}} </h5>
      <h5><b>Statut  :</b> {{detailProjet.statut.nom}} </h5>
      <h5><b>URL : </b><br><br><a href=\"{{detailProjet.url}}\">{{detailProjet.url}}</a></h5>

      {% if app.user and app.user.username != detailProjet.idUtilisateur.username %}
      {% for participe in participants %}
        {% if app.user and app.user.username == participe.idUtilisateur.username %}
          {% if participe.statut is not null %}
            <p><br><a  class=\"btn btn-danger\"href=\"{{ path('desincProjet', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Se désincrire</a></p>
            {% else %}
          <p><br><a  class=\"btn btn-green\"href=\"{{ path('newInsc', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Participer !</a></p>
        {% endif %}

      {% endif %}

      {% endfor %}
        {% if detailProjet.statut.nom == \"Fermé\" %}
        <p><br><a  class=\"btn btn-danger disabled\"href=\"{{ path('newInsc', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Fermer</a></p>
        {% else %}
        <p><br><a  class=\"btn btn-primary\" href=\"{{ path('newInsc', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Participer !</a></p>
        {% endif %}
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
