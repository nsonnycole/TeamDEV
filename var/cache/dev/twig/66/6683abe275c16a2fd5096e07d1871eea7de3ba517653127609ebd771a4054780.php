<?php

/* projets/afficheProjet.html.twig */
class __TwigTemplate_f27d1a84f0b6f6cbb5fab8ee311cfb82f3f37c6ed731ec29d8e6d4c520a64f05 extends Twig_Template
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
        $__internal_bdeca481a3671c1397f36bc23e50f07954427f84c49f47aa8aaee3633f62f3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdeca481a3671c1397f36bc23e50f07954427f84c49f47aa8aaee3633f62f3c0->enter($__internal_bdeca481a3671c1397f36bc23e50f07954427f84c49f47aa8aaee3633f62f3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $__internal_914ef19895f3b1c7b5500296de11a8a29cbe7c61d065e6186fc640b302cf263d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914ef19895f3b1c7b5500296de11a8a29cbe7c61d065e6186fc640b302cf263d->enter($__internal_914ef19895f3b1c7b5500296de11a8a29cbe7c61d065e6186fc640b302cf263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdeca481a3671c1397f36bc23e50f07954427f84c49f47aa8aaee3633f62f3c0->leave($__internal_bdeca481a3671c1397f36bc23e50f07954427f84c49f47aa8aaee3633f62f3c0_prof);

        
        $__internal_914ef19895f3b1c7b5500296de11a8a29cbe7c61d065e6186fc640b302cf263d->leave($__internal_914ef19895f3b1c7b5500296de11a8a29cbe7c61d065e6186fc640b302cf263d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c524d7b59d86f200c2708b297c4a7c8eba830acb99edcac19ccb9cb51c66b01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c524d7b59d86f200c2708b297c4a7c8eba830acb99edcac19ccb9cb51c66b01a->enter($__internal_c524d7b59d86f200c2708b297c4a7c8eba830acb99edcac19ccb9cb51c66b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5ab6c9953eb4815907cf9ee33bfff8a23f025c01bb7a88cd5c0ac8d75251a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ab6c9953eb4815907cf9ee33bfff8a23f025c01bb7a88cd5c0ac8d75251a04->enter($__internal_b5ab6c9953eb4815907cf9ee33bfff8a23f025c01bb7a88cd5c0ac8d75251a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\">Modifier</a></p>
";
            }
            // line 48
            echo "  <div class=\"row\">
    <div class=\"col-lg-8 desc\">
      <h3 style=\"font-weight:bold\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
            echo "</h3>
      <br>
        <img style=\"width:455px;\" src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
            echo "\" >
        <br>  <br>
        <h4><b>Description: <br>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "description", array()), "html", null, true);
            echo "</b></h4>

        <p>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "contenu", array()), "html", null, true);
            echo "</p>

        <h5><b>Type de projet : </b><br><br>";
            // line 58
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
            // line 59
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
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a></h5>
      <h5><b>Date de début  :</b> ";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo " </h5>
      <h5><b>Date de fin  :</b> ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "dateFin", array()), "d/m/Y"), "html", null, true);
            echo " </h5>
      <h5><b>Durée  :</b> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "duree", array()), "html", null, true);
            echo " </h5>
      <h5><b>Auteur :</b> ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</h5>
      <h5><b>Nombre de participants :</b> ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbParticipants", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbPlaces", array()), "html", null, true);
            echo " </h5>
      <h5><b>Statut  :</b> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "statut", array()), "nom", array()), "html", null, true);
            echo " </h5>
      <h5><b>URL : </b><br><br><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
            echo "</a></h5>

      ";
            // line 76
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                // line 77
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")));
                foreach ($context['_seq'] as $context["_key"] => $context["participe"]) {
                    // line 78
                    echo "        ";
                    if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute($context["participe"], "idUtilisateur", array()), "username", array())))) {
                        // line 79
                        echo "          ";
                        if ( !(null === $this->getAttribute($context["participe"], "statut", array()))) {
                            // line 80
                            echo "            <p><br><a  class=\"btn btn-danger\"href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desincProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                            echo "\" lass=\"btn btn-green pull-left\">Se désincrire</a></p>
            ";
                        } else {
                            // line 82
                            echo "          <p><br><a  class=\"btn btn-green\"href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                            echo "\" lass=\"btn btn-green pull-left\">Participer !</a></p>
        ";
                        }
                        // line 84
                        echo "
      ";
                    }
                    // line 86
                    echo "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participe'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "  <p><br><a  class=\"btn btn-green\"href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
                echo "\" lass=\"btn btn-green pull-left\">Participer !</a></p>

      ";
            }
            // line 91
            echo "    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
        <td>Statut </td>
        ";
            // line 97
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                // line 98
                echo "        <td>Action </td>
        ";
            }
            // line 100
            echo "      </thead>
      <tbody>
    ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 103
                echo "      <tr>
        <td><a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()), "html", null, true);
                echo "</a></td>
        <td>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["participant"], "statut", array()), "html", null, true);
                echo "</td>
        ";
                // line 106
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array())))) {
                    // line 107
                    echo "          ";
                    if (($this->getAttribute($context["participant"], "statut", array()) == "Accepter")) {
                        // line 108
                        echo "          <td>
          <a class=\"btn btn-danger\" href=\"";
                        // line 109
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("refuser", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>
          </td>
          ";
                    } else {
                        // line 112
                        echo "          <td>
          <a class=\"btn btn-success\" href=\"";
                        // line 113
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accepter", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-ok\"></span></a>
          <a class=\"btn btn-danger\" href=\"";
                        // line 114
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("refuser", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>
          </td>
          ";
                    }
                    // line 117
                    echo "        ";
                }
                // line 118
                echo "      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "    </tbody>
    </table>

  </div><!-- row -->

</div><!-- container -->

</div><!-- dg -->
";
        } else {
            // line 129
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_b5ab6c9953eb4815907cf9ee33bfff8a23f025c01bb7a88cd5c0ac8d75251a04->leave($__internal_b5ab6c9953eb4815907cf9ee33bfff8a23f025c01bb7a88cd5c0ac8d75251a04_prof);

        
        $__internal_c524d7b59d86f200c2708b297c4a7c8eba830acb99edcac19ccb9cb51c66b01a->leave($__internal_c524d7b59d86f200c2708b297c4a7c8eba830acb99edcac19ccb9cb51c66b01a_prof);

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
        return array (  378 => 129,  367 => 120,  360 => 118,  357 => 117,  351 => 114,  347 => 113,  344 => 112,  338 => 109,  335 => 108,  332 => 107,  330 => 106,  326 => 105,  320 => 104,  317 => 103,  313 => 102,  309 => 100,  305 => 98,  303 => 97,  295 => 91,  288 => 88,  281 => 86,  277 => 84,  271 => 82,  265 => 80,  262 => 79,  259 => 78,  254 => 77,  252 => 76,  245 => 74,  241 => 73,  235 => 72,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  213 => 67,  193 => 59,  180 => 58,  175 => 56,  170 => 54,  165 => 52,  160 => 50,  156 => 48,  151 => 46,  146 => 45,  144 => 44,  138 => 40,  129 => 37,  126 => 36,  122 => 35,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  93 => 21,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
      {% for participe in participants %}
        {% if app.user and app.user.username == participe.idUtilisateur.username %}
          {% if participe.statut is not null %}
            <p><br><a  class=\"btn btn-danger\"href=\"{{ path('desincProjet', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Se désincrire</a></p>
            {% else %}
          <p><br><a  class=\"btn btn-green\"href=\"{{ path('newInsc', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Participer !</a></p>
        {% endif %}

      {% endif %}

      {% endfor %}
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
