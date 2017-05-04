<?php

/* utilisateur/profilDe.html.twig */
class __TwigTemplate_5c2807f0c2d57dc9640f2d50f16914931ed70d5eaddba4fb6a6d1b5798e3a3c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/profilDe.html.twig", 1);
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
        $__internal_1a8ba231fcc9120336492ef90c66f6c5625903bdf5989435798ca4489ac38a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8ba231fcc9120336492ef90c66f6c5625903bdf5989435798ca4489ac38a4a->enter($__internal_1a8ba231fcc9120336492ef90c66f6c5625903bdf5989435798ca4489ac38a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $__internal_e3835639049fdb218f5453dceedee8f0c9a0fccb74065d677c0cc36e83c609f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3835639049fdb218f5453dceedee8f0c9a0fccb74065d677c0cc36e83c609f7->enter($__internal_e3835639049fdb218f5453dceedee8f0c9a0fccb74065d677c0cc36e83c609f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a8ba231fcc9120336492ef90c66f6c5625903bdf5989435798ca4489ac38a4a->leave($__internal_1a8ba231fcc9120336492ef90c66f6c5625903bdf5989435798ca4489ac38a4a_prof);

        
        $__internal_e3835639049fdb218f5453dceedee8f0c9a0fccb74065d677c0cc36e83c609f7->leave($__internal_e3835639049fdb218f5453dceedee8f0c9a0fccb74065d677c0cc36e83c609f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5dc041800b380ff97ed2d09d88ae38c6e55ccd4f4b3ba874c5d4d1e6916c1129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc041800b380ff97ed2d09d88ae38c6e55ccd4f4b3ba874c5d4d1e6916c1129->enter($__internal_5dc041800b380ff97ed2d09d88ae38c6e55ccd4f4b3ba874c5d4d1e6916c1129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aefa6ffbfac6056009768b9bb1c8d1ed699f971fa7bd4507286e218dccde209b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefa6ffbfac6056009768b9bb1c8d1ed699f971fa7bd4507286e218dccde209b->enter($__internal_aefa6ffbfac6056009768b9bb1c8d1ed699f971fa7bd4507286e218dccde209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Profil de ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Profil de ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</li>
  <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
  <div class=\"col-lg-12\">
      <h3 align=\"center\">Informations sur ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
      <hr>
      <div class=\"col-sm-6\">
      <p> Nom : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
      <p> Prénom : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
      <p> Date de naissance : ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaiss", array()), "d/m/Y"), "html", null, true);
        echo "</p>
      <p> Adresse : ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>

      <p> Pseudo : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
      <p> Email : ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
      <div class=\"col-md-12\">
                  <ul class=\"social-network social-circle\">
                      <li><a href=\"#\" class=\"icoRss\" title=\"Rss\"><i class=\"fa fa-rss\"></i></a></li>
                      <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                      <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                      <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                      <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                  </ul>
      </div>


      </div>
      <div class=\"col-sm-6 trophee\">
      <span class=\"pointTrophee\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trophee", array()), "html", null, true);
        echo "</span>

      <p>Ces projets : 0
      <br>Ces participations : 0</p>
      </div>
      </div>
      </div>
      <div class=\"container\">
      <h3 >Ces compétences</h3>
      <hr>

      <ul class=\"competence\">
      ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 58
            echo "        <li>
        <!-- Skill Bars -->

              <div class=\"progress skill-bar\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
            echo "\"
                    <span class=\"sr-only\"> </span>
                </div>
                <span class=\"progress-type skill\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "nom", array()), "html", null, true);
            echo "</span>
                <span class=\"progress-completed \">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
            echo "%</span>
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "      </ul>
      </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_aefa6ffbfac6056009768b9bb1c8d1ed699f971fa7bd4507286e218dccde209b->leave($__internal_aefa6ffbfac6056009768b9bb1c8d1ed699f971fa7bd4507286e218dccde209b_prof);

        
        $__internal_5dc041800b380ff97ed2d09d88ae38c6e55ccd4f4b3ba874c5d4d1e6916c1129->leave($__internal_5dc041800b380ff97ed2d09d88ae38c6e55ccd4f4b3ba874c5d4d1e6916c1129_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/profilDe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 70,  162 => 66,  158 => 65,  150 => 62,  144 => 58,  140 => 57,  125 => 45,  108 => 31,  104 => 30,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  81 => 22,  74 => 18,  70 => 17,  66 => 16,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Profil de {{ user.username }} </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Profil de {{user.username}}</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
  <div class=\"col-lg-12\">
      <h3 align=\"center\">Informations sur {{ user.username }}</h3>
      <hr>
      <div class=\"col-sm-6\">
      <p> Nom : {{ user.nom }}</p>
      <p> Prénom : {{ user.prenom }}</p>
      <p> Date de naissance : {{ user.dateNaiss|date(\"d/m/Y\") }}</p>
      <p> Adresse : {{ user.adresse }}</p>

      <p> Pseudo : {{ user.username }}</p>
      <p> Email : {{ user.email }}</p>
      <div class=\"col-md-12\">
                  <ul class=\"social-network social-circle\">
                      <li><a href=\"#\" class=\"icoRss\" title=\"Rss\"><i class=\"fa fa-rss\"></i></a></li>
                      <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                      <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                      <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                      <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                  </ul>
      </div>


      </div>
      <div class=\"col-sm-6 trophee\">
      <span class=\"pointTrophee\"> {{ user.trophee }}</span>

      <p>Ces projets : 0
      <br>Ces participations : 0</p>
      </div>
      </div>
      </div>
      <div class=\"container\">
      <h3 >Ces compétences</h3>
      <hr>

      <ul class=\"competence\">
      {% for competence in competences %}
        <li>
        <!-- Skill Bars -->

              <div class=\"progress skill-bar\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"{{competence.pourcentage}}\" aria-valuemin=\"0\" aria-valuemax=\"{{competence.pourcentage}}\"
                    <span class=\"sr-only\"> </span>
                </div>
                <span class=\"progress-type skill\">{{competence.nom}}</span>
                <span class=\"progress-completed \">{{competence.pourcentage}}%</span>
            </div>
        </li>
        {% endfor %}
      </ul>
      </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "utilisateur/profilDe.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/utilisateur/profilDe.html.twig");
    }
}
