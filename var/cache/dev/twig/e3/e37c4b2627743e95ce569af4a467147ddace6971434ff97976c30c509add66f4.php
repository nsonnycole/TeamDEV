<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_cae3b04d7644e36c104cf0b94ad3f26774b547c171f9952813504445bdeeb472 extends Twig_Template
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
        $__internal_47e1426f8db1d5fe0e2c2f0bd864d30fe70f439f95feae052f1b119e22a04058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e1426f8db1d5fe0e2c2f0bd864d30fe70f439f95feae052f1b119e22a04058->enter($__internal_47e1426f8db1d5fe0e2c2f0bd864d30fe70f439f95feae052f1b119e22a04058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_7fa456aa599162abcfd8909c1666de8f930f4697ae4e7daec9c521bdc9d6b72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa456aa599162abcfd8909c1666de8f930f4697ae4e7daec9c521bdc9d6b72d->enter($__internal_7fa456aa599162abcfd8909c1666de8f930f4697ae4e7daec9c521bdc9d6b72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newProjet");
        echo "\" class=\"btn btn-primary\">Nouveau projet</a>
    </div>


      <br><br>

    <div class=\"col-lg-12 \">
      <h3 align=\"center\">Mes informations personnelles</h3>
      <hr>
      <div class=\"col-sm-6 col-sm-offset-4\">
      <p> Nom : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
      <p> Prénom : ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
      <p> Date de naissance : ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaiss", array()), "d/m/Y"), "html", null, true);
        echo "</p>
      <p> Adresse : ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>

      <p> Pseudo : ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
      <p> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>


      </div>


  </div>
</div>
";
        
        $__internal_47e1426f8db1d5fe0e2c2f0bd864d30fe70f439f95feae052f1b119e22a04058->leave($__internal_47e1426f8db1d5fe0e2c2f0bd864d30fe70f439f95feae052f1b119e22a04058_prof);

        
        $__internal_7fa456aa599162abcfd8909c1666de8f930f4697ae4e7daec9c521bdc9d6b72d->leave($__internal_7fa456aa599162abcfd8909c1666de8f930f4697ae4e7daec9c521bdc9d6b72d_prof);

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
        return array (  99 => 41,  95 => 40,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  65 => 25,  61 => 24,  57 => 23,  53 => 22,  49 => 21,  39 => 14,  25 => 2,);
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
      <a class=\"btn btn-primary \" href=\"{{path('fos_user_profile_edit')}}\" >Modifier mon profil</a>
      <a class=\"btn btn-primary\" href=\"{{path('mesProjets')}}\">Mes projets</a>
      <a class=\"btn btn-primary\" href=\"{{path('mesParticipations')}}\">Mes participations</a>
      <a href=\"{{path('mesCompetences')}}\" class=\"btn btn-primary\">Mes compétences</a>
      <a href=\"{{path('newProjet')}}\" class=\"btn btn-primary\">Nouveau projet</a>
    </div>


      <br><br>

    <div class=\"col-lg-12 \">
      <h3 align=\"center\">Mes informations personnelles</h3>
      <hr>
      <div class=\"col-sm-6 col-sm-offset-4\">
      <p> Nom : {{ user.nom }}</p>
      <p> Prénom : {{ user.prenom }}</p>
      <p> Date de naissance : {{ user.dateNaiss|date(\"d/m/Y\") }}</p>
      <p> Adresse : {{ user.adresse }}</p>

      <p> Pseudo : {{ user.username }}</p>
      <p> {{ 'profile.show.email'|trans }} : {{ user.email }}</p>


      </div>


  </div>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
