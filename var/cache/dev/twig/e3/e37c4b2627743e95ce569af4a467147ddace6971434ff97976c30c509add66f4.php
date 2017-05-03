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
        $__internal_5df84623b8512518079d941176c889362b17ca60654177c69aa3d78a7363e9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df84623b8512518079d941176c889362b17ca60654177c69aa3d78a7363e9b4->enter($__internal_5df84623b8512518079d941176c889362b17ca60654177c69aa3d78a7363e9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_6e0212766b831578af9ee1143dccc2735a1c1de8749da2b34d47bd2df7d0605b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0212766b831578af9ee1143dccc2735a1c1de8749da2b34d47bd2df7d0605b->enter($__internal_6e0212766b831578af9ee1143dccc2735a1c1de8749da2b34d47bd2df7d0605b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
      <a class=\"btn btn-primary\" href=\"#mesParticipations\">Mes participations</a>
      <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newProjet");
        echo "\" class=\"btn btn-primary\">Nouveau projet</a>
    </div>


      <br><br>

    <div class=\"col-lg-12 \">
      <h3 align=\"center\">Mes informations personnelles</h3>
      <hr>
      <div class=\"col-sm-6 col-sm-offset-4\">
      <p> Nom : ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
      <p> Prénom : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
      <p> Date de naissance : ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaiss", array()), "d/m/Y"), "html", null, true);
        echo "</p>
      <p> Adresse : ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>

      <p> Pseudo : ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
      <p> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>


      </div>

      </div>


    </div>
  </div>
</div>
";
        
        $__internal_5df84623b8512518079d941176c889362b17ca60654177c69aa3d78a7363e9b4->leave($__internal_5df84623b8512518079d941176c889362b17ca60654177c69aa3d78a7363e9b4_prof);

        
        $__internal_6e0212766b831578af9ee1143dccc2735a1c1de8749da2b34d47bd2df7d0605b->leave($__internal_6e0212766b831578af9ee1143dccc2735a1c1de8749da2b34d47bd2df7d0605b_prof);

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
        return array (  92 => 40,  88 => 39,  83 => 37,  79 => 36,  75 => 35,  71 => 34,  58 => 24,  53 => 22,  49 => 21,  39 => 14,  25 => 2,);
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
      <a class=\"btn btn-primary\" href=\"#mesParticipations\">Mes participations</a>
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
  </div>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
