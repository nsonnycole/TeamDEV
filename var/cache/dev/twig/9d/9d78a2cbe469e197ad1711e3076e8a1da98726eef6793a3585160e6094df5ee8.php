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
        $__internal_b1d307df9f99cd8f08941cb7af2d1f3e0df9aea201f82d18b14be4d87fa7e1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d307df9f99cd8f08941cb7af2d1f3e0df9aea201f82d18b14be4d87fa7e1bf->enter($__internal_b1d307df9f99cd8f08941cb7af2d1f3e0df9aea201f82d18b14be4d87fa7e1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $__internal_1e3014dca86912a68e36654b5a8696580e6e0fbec0105b77324cf5c3b5bc346a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3014dca86912a68e36654b5a8696580e6e0fbec0105b77324cf5c3b5bc346a->enter($__internal_1e3014dca86912a68e36654b5a8696580e6e0fbec0105b77324cf5c3b5bc346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d307df9f99cd8f08941cb7af2d1f3e0df9aea201f82d18b14be4d87fa7e1bf->leave($__internal_b1d307df9f99cd8f08941cb7af2d1f3e0df9aea201f82d18b14be4d87fa7e1bf_prof);

        
        $__internal_1e3014dca86912a68e36654b5a8696580e6e0fbec0105b77324cf5c3b5bc346a->leave($__internal_1e3014dca86912a68e36654b5a8696580e6e0fbec0105b77324cf5c3b5bc346a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_298c6eaa57d92f2ce5876178d29d76da471ba42708f301c14e0c01e61a7fd568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298c6eaa57d92f2ce5876178d29d76da471ba42708f301c14e0c01e61a7fd568->enter($__internal_298c6eaa57d92f2ce5876178d29d76da471ba42708f301c14e0c01e61a7fd568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fa2840ec28c048e64c91ae33d7d748b5faa83db8da37d829d724883728e7572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa2840ec28c048e64c91ae33d7d748b5faa83db8da37d829d724883728e7572->enter($__internal_3fa2840ec28c048e64c91ae33d7d748b5faa83db8da37d829d724883728e7572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Profil de ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Profil de ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</li>
  <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
  <div class=\"col-lg-12\">
      <h3 align=\"center\">Informations sur ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
      <hr>
      <div class=\"col-sm-6\">
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
      <p> Email : ";
        // line 41
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
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trophee", array()), "html", null, true);
        echo "</span>

      <p>Ses projets : 0
      <br>Ses participations : 0</p>
      </div>
      </div>
      </div>
      <div class=\"container\">
      <h3 >Ses compétences</h3>
      <hr>

      <ul class=\"competence\">
      ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 68
            echo "        <li>
        <!-- Skill Bars -->

              <div class=\"progress skill-bar\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
            echo "\"
                    <span class=\"sr-only\"> </span>
                </div>
                <span class=\"progress-type skill\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "nom", array()), "html", null, true);
            echo "</span>
                <span class=\"progress-completed \">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
            echo "%</span>
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "      </ul>
      </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_3fa2840ec28c048e64c91ae33d7d748b5faa83db8da37d829d724883728e7572->leave($__internal_3fa2840ec28c048e64c91ae33d7d748b5faa83db8da37d829d724883728e7572_prof);

        
        $__internal_298c6eaa57d92f2ce5876178d29d76da471ba42708f301c14e0c01e61a7fd568->leave($__internal_298c6eaa57d92f2ce5876178d29d76da471ba42708f301c14e0c01e61a7fd568_prof);

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
        return array (  201 => 80,  191 => 76,  187 => 75,  179 => 72,  173 => 68,  169 => 67,  154 => 55,  137 => 41,  133 => 40,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  110 => 32,  103 => 28,  99 => 27,  95 => 26,  85 => 19,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

      <p>Ses projets : 0
      <br>Ses participations : 0</p>
      </div>
      </div>
      </div>
      <div class=\"container\">
      <h3 >Ses compétences</h3>
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
