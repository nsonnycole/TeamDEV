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
        $__internal_03b2593ae76c80e294b7dc3e2d61019c8fed15137ecedb8e640caabfc2e75002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b2593ae76c80e294b7dc3e2d61019c8fed15137ecedb8e640caabfc2e75002->enter($__internal_03b2593ae76c80e294b7dc3e2d61019c8fed15137ecedb8e640caabfc2e75002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $__internal_18efd62f02ed9a8011086873b8ff9e5aa6ee9496777b14e48c81867834ff4838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18efd62f02ed9a8011086873b8ff9e5aa6ee9496777b14e48c81867834ff4838->enter($__internal_18efd62f02ed9a8011086873b8ff9e5aa6ee9496777b14e48c81867834ff4838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/afficheProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b2593ae76c80e294b7dc3e2d61019c8fed15137ecedb8e640caabfc2e75002->leave($__internal_03b2593ae76c80e294b7dc3e2d61019c8fed15137ecedb8e640caabfc2e75002_prof);

        
        $__internal_18efd62f02ed9a8011086873b8ff9e5aa6ee9496777b14e48c81867834ff4838->leave($__internal_18efd62f02ed9a8011086873b8ff9e5aa6ee9496777b14e48c81867834ff4838_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9130e6c076defc150dd8cb730fcbcf279263758adc69eea000df1d072c446a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9130e6c076defc150dd8cb730fcbcf279263758adc69eea000df1d072c446a7->enter($__internal_a9130e6c076defc150dd8cb730fcbcf279263758adc69eea000df1d072c446a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_325e19ed07bd2ca46b0d0f3dd9d76ec7fb40132a021c81dd8fd80fb023733255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325e19ed07bd2ca46b0d0f3dd9d76ec7fb40132a021c81dd8fd80fb023733255->enter($__internal_325e19ed07bd2ca46b0d0f3dd9d76ec7fb40132a021c81dd8fd80fb023733255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<!-- CLIENT INFORMATION -->
<div id=\"lg\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-5 col-lg-offset-1 desc\">
      <h3 style=\"font-weight:bold\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nomProjet", array()), "html", null, true);
        echo "</h3>
      <br>
        <img style=\"width:455px;\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
        echo "\" >
        <br>  <br>
        <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "contenu", array()), "html", null, true);
        echo "</p>

    </div>

    <div class=\"col-lg-4 col-lg-offset-1 desc\">
      <h3 style=\"font-weight:bold\"> Infos supplémentaires</h3>
      <br>
      <h5><b>Auteur :</b> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "idUtilisateur", array()), "username", array()), "html", null, true);
        echo "</h5>
      <h5><b>Nombre de places :</b> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbPlaces", array()), "html", null, true);
        echo " </h5>
      <h5><b>Nombre de participants :</b> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbParticipants", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "nbPlaces", array()), "html", null, true);
        echo " </h5>
      <h5><b>URL : </b><br><br>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "url", array()), "html", null, true);
        echo "</h5>
      <h5><b>Description: </b><br>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "description", array()), "html", null, true);
        echo "</h5>

      <p><br><a  href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newInsc", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
        echo "\" lass=\"btn btn-green pull-left\">Participer !</a></p>
      <p><br><a  href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Supprimer</a>
      <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute((isset($context["detailProjet"]) ? $context["detailProjet"] : $this->getContext($context, "detailProjet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a></p>
    </div>
    <div class=\"col-sm-8 col-sm-offset-1\">
    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
        <td>Action</td>
      </thead>
      <tbody>
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 58
            echo "      <tr>
        <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a></td>
        <td>
          <a href=\"\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </tbody>
    </table>

  </div><!-- row -->

</div><!-- container -->

</div><!-- dg -->

";
        
        $__internal_325e19ed07bd2ca46b0d0f3dd9d76ec7fb40132a021c81dd8fd80fb023733255->leave($__internal_325e19ed07bd2ca46b0d0f3dd9d76ec7fb40132a021c81dd8fd80fb023733255_prof);

        
        $__internal_a9130e6c076defc150dd8cb730fcbcf279263758adc69eea000df1d072c446a7->leave($__internal_a9130e6c076defc150dd8cb730fcbcf279263758adc69eea000df1d072c446a7_prof);

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
        return array (  175 => 65,  161 => 59,  158 => 58,  154 => 57,  140 => 46,  136 => 45,  132 => 44,  127 => 42,  123 => 41,  117 => 40,  113 => 39,  109 => 38,  99 => 31,  94 => 29,  89 => 27,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
      <h5><b>Nombre de places :</b> {{detailProjet.nbPlaces}} </h5>
      <h5><b>Nombre de participants :</b> {{detailProjet.nbParticipants}} / {{detailProjet.nbPlaces}} </h5>
      <h5><b>URL : </b><br><br>{{detailProjet.url}}</h5>
      <h5><b>Description: </b><br>{{detailProjet.description}}</h5>

      <p><br><a  href=\"{{ path('newInsc', {'id': detailProjet.id}) }}\" lass=\"btn btn-green pull-left\">Participer !</a></p>
      <p><br><a  href=\"{{ path('deleteProjet', {'id': detailProjet.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
      <a href=\"{{ path('editProjet', {'id': detailProjet.id}) }}\" class=\"btn btn-warning\">Modifier</a></p>
    </div>
    <div class=\"col-sm-8 col-sm-offset-1\">
    <h3>Participants</h3>
    <hr>
    <table class=\"table\" id=\"myTable\">
      <thead>
        <td>Nom </td>
        <td>Action</td>
      </thead>
      <tbody>
    {% for participant in participants %}
      <tr>
        <td><a href=\"{{ path('profilDe', {'username': participant.idUtilisateur.username}) }}\">{{participant.idUtilisateur.username}}</a></td>
        <td>
          <a href=\"\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
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
