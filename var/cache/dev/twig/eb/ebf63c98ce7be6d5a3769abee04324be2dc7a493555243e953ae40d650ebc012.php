<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_9bd46ac6f6ba5cf53f2878b72e7a6fee8637c427eac5e9a70e3dbec3d22b0ee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc7445c91224e28ea7a23b257da055379a82cdcba57ed30782d6a10381d48b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7445c91224e28ea7a23b257da055379a82cdcba57ed30782d6a10381d48b9b->enter($__internal_fc7445c91224e28ea7a23b257da055379a82cdcba57ed30782d6a10381d48b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_67edee0b19acb1d3086811bfb74095c68df5f66f2b241357fdb562884477c8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67edee0b19acb1d3086811bfb74095c68df5f66f2b241357fdb562884477c8ec->enter($__internal_67edee0b19acb1d3086811bfb74095c68df5f66f2b241357fdb562884477c8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Mon profil </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Mon profil</li>
</ol>
<div class=\"container\">
  <div class=\"col-lg-12\">
    <div class=\"col-lg-10 col-sm-offset-1\">
      <div align=\"center\">
      <a class=\"btn btn-primary \" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProfil");
        echo "\" >Modifier mon profil</a>
      <a class=\"btn btn-primary\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesProjets");
        echo "\">Mes projets</a>
      <a class=\"btn btn-primary\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesParticipations");
        echo "\">Mes participations</a>
      <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesCompetences");
        echo "\" class=\"btn btn-primary\">Mes compétences</a>
      <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesMessages");
        echo "\" class=\"btn btn-primary\">Mes messages</a>
      <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newProjet");
        echo "\" class=\"btn btn-primary\">Nouveau projet</a>

    </div>


      <br><br>

    <div class=\"col-lg-12 \">
      <h3 align=\"center\">Mes informations personnelles</h3>
      <hr>
      <div class=\"col-sm-6\">
      <p> Nom : ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
      <p> Prénom : ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
      <p> Date de naissance : ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaiss", array()), "d/m/Y"), "html", null, true);
        echo "</p>
      <p> Adresse : ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>

      <p> Pseudo : ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
      <p> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>

      </div>
      <div class=\"col-sm-6\">
      <p> <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), "url", array()))), "html", null, true);
        echo "\"></p>

      </div>

  </div>
</div>
";
        
        $__internal_fc7445c91224e28ea7a23b257da055379a82cdcba57ed30782d6a10381d48b9b->leave($__internal_fc7445c91224e28ea7a23b257da055379a82cdcba57ed30782d6a10381d48b9b_prof);

        
        $__internal_67edee0b19acb1d3086811bfb74095c68df5f66f2b241357fdb562884477c8ec->leave($__internal_67edee0b19acb1d3086811bfb74095c68df5f66f2b241357fdb562884477c8ec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  104 => 43,  100 => 42,  95 => 40,  91 => 39,  87 => 38,  83 => 37,  69 => 26,  65 => 25,  61 => 24,  57 => 23,  53 => 22,  49 => 21,  39 => 14,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Mon profil </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Mon profil</li>
</ol>
<div class=\"container\">
  <div class=\"col-lg-12\">
    <div class=\"col-lg-10 col-sm-offset-1\">
      <div align=\"center\">
      <a class=\"btn btn-primary \" href=\"{{path('editProfil')}}\" >Modifier mon profil</a>
      <a class=\"btn btn-primary\" href=\"{{path('mesProjets')}}\">Mes projets</a>
      <a class=\"btn btn-primary\" href=\"{{path('mesParticipations')}}\">Mes participations</a>
      <a href=\"{{path('mesCompetences')}}\" class=\"btn btn-primary\">Mes compétences</a>
      <a href=\"{{path('mesMessages')}}\" class=\"btn btn-primary\">Mes messages</a>
      <a href=\"{{path('newProjet')}}\" class=\"btn btn-primary\">Nouveau projet</a>

    </div>


      <br><br>

    <div class=\"col-lg-12 \">
      <h3 align=\"center\">Mes informations personnelles</h3>
      <hr>
      <div class=\"col-sm-6\">
      <p> Nom : {{ user.nom }}</p>
      <p> Prénom : {{ user.prenom }}</p>
      <p> Date de naissance : {{ user.dateNaiss|date(\"d/m/Y\") }}</p>
      <p> Adresse : {{ user.adresse }}</p>

      <p> Pseudo : {{ user.username }}</p>
      <p> {{ 'profile.show.email'|trans }} : {{ user.email }}</p>

      </div>
      <div class=\"col-sm-6\">
      <p> <img src=\"{{asset('img/avatar/'~user.avatar.url)}}\"></p>

      </div>

  </div>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
