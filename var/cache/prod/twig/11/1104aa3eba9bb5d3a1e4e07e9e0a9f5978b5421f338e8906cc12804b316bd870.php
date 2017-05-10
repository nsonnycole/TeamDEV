<?php

/* projets/afficheProjet.html.twig */
class __TwigTemplate_750b970635a8b9c6db1bdcb2b526fb28de45f7517151652590b0c6df9c8bb44e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\" style=\"display:inline\">
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "nomProjet", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "nomProjet", array()), "html", null, true);
        echo "</li>
  <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>

";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute(($context["detailProjet"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Supprimer</a>
<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute(($context["detailProjet"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a></p>
  <div class=\"row\">
    <div class=\"col-lg-8 desc\">
      <h3 style=\"font-weight:bold\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "nomProjet", array()), "html", null, true);
        echo "</h3>
      <br>
        <img style=\"width:455px;\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
        echo "\" >
        <br>  <br>
        <h4><b>Description: <br>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "description", array()), "html", null, true);
        echo "</b></h4>

        <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "contenu", array()), "html", null, true);
        echo "</p>

        <h5><b>Type de projet : </b><br><br>";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["detailProjet"] ?? null), "idTypeProjet", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["detailProjet"] ?? null), "technologies", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["detailProjet"] ?? null), "idUtilisateur", array()), "username", array()), "html", null, true);
        echo "</h5>
      <h5><b>Date de début  :</b> ";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo " </h5>
      <h5><b>Date de fin  :</b> ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "dateFin", array()), "d/m/Y"), "html", null, true);
        echo " </h5>
      <h5><b>Durée  :</b> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "duree", array()), "html", null, true);
        echo " </h5>
      <h5><b>Auteur :</b> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["detailProjet"] ?? null), "idUtilisateur", array()), "username", array()), "html", null, true);
        echo "</h5>
      <h5><b>Nombre de participants :</b> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "nbParticipants", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "nbPlaces", array()), "html", null, true);
        echo " </h5>
      <h5><b>Statut  :</b> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["detailProjet"] ?? null), "statut", array()), "nom", array()), "html", null, true);
        echo " </h5>
      <h5><b>URL : </b><br><br><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "url", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailProjet"] ?? null), "url", array()), "html", null, true);
        echo "</a></h5>


      <p><br><a  class=\"btn btn-green\"href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute(($context["detailProjet"] ?? null), "id", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["participants"] ?? null));
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
        return array (  262 => 94,  252 => 90,  248 => 89,  241 => 87,  238 => 86,  234 => 85,  219 => 73,  211 => 70,  207 => 69,  201 => 68,  197 => 67,  193 => 66,  189 => 65,  185 => 64,  181 => 63,  161 => 55,  148 => 54,  143 => 52,  138 => 50,  133 => 48,  128 => 46,  122 => 43,  118 => 42,  112 => 38,  103 => 35,  100 => 34,  96 => 33,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  67 => 19,  59 => 13,  51 => 11,  45 => 8,  41 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "projets/afficheProjet.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/afficheProjet.html.twig");
    }
}
