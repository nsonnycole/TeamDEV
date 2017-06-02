<?php

/* utilisateur/profilDe.html.twig */
class __TwigTemplate_ef221f4cc6932a3482bab0c73af921852accd8ed30a18d295db01850b4ec9eb2 extends Twig_Template
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
        $__internal_364dcc464032fc71636cc83ba3e9d519cc222849204e32c27702130233d4af39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364dcc464032fc71636cc83ba3e9d519cc222849204e32c27702130233d4af39->enter($__internal_364dcc464032fc71636cc83ba3e9d519cc222849204e32c27702130233d4af39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $__internal_5155e4f14a1ed16d75aff2d021d9cf2603ba13ce289594c2bc67541ba82f9327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5155e4f14a1ed16d75aff2d021d9cf2603ba13ce289594c2bc67541ba82f9327->enter($__internal_5155e4f14a1ed16d75aff2d021d9cf2603ba13ce289594c2bc67541ba82f9327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364dcc464032fc71636cc83ba3e9d519cc222849204e32c27702130233d4af39->leave($__internal_364dcc464032fc71636cc83ba3e9d519cc222849204e32c27702130233d4af39_prof);

        
        $__internal_5155e4f14a1ed16d75aff2d021d9cf2603ba13ce289594c2bc67541ba82f9327->leave($__internal_5155e4f14a1ed16d75aff2d021d9cf2603ba13ce289594c2bc67541ba82f9327_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b452c478d6c88f0a83d47c08fc981193957e3109f1bf2cff7cbfa506be029672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b452c478d6c88f0a83d47c08fc981193957e3109f1bf2cff7cbfa506be029672->enter($__internal_b452c478d6c88f0a83d47c08fc981193957e3109f1bf2cff7cbfa506be029672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_463380c7291289dd19b9c2c293765480bb630182bae3b06fdc453ba7e94d794c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463380c7291289dd19b9c2c293765480bb630182bae3b06fdc453ba7e94d794c->enter($__internal_463380c7291289dd19b9c2c293765480bb630182bae3b06fdc453ba7e94d794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Profil de ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo " </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item active\">Profil de ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</li>
  <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
  <div class=\"col-lg-12\">

      <h3 align=\"center\">
        <img width=\"100px;\"src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), "url", array()))), "html", null, true);
            echo "\">
        Informations sur ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "<br>
         <center><p> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "presentation", array()), "html", null, true);
            echo "</p></center>

      </h3>
      <hr>
      <div class=\"col-sm-6\">
      <p> Nom : ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "</p>
      <p> Prénom : ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
            echo "</p>
      <p> Date de naissance : ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaiss", array()), "d/m/Y"), "html", null, true);
            echo "</p>
      <p> Adresse : ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
            echo "</p>

      <p> Pseudo : ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</p>
      <p> Email : ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo "</p>



      <div class=\"col-md-12\">
                  <ul class=\"social-network social-circle\">
                  ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reseaux"]) ? $context["reseaux"] : $this->getContext($context, "reseaux")));
            foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                // line 56
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($context["reseau"], "idTypeReseau", array()), "nom", array()) == "LinkedIn")) {
                    // line 57
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reseau"], "url", array()), "html", null, true);
                    echo "\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                    ";
                }
                // line 59
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($context["reseau"], "idTypeReseau", array()), "nom", array()) == "Facebook")) {
                    // line 60
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reseau"], "url", array()), "html", null, true);
                    echo "\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                    ";
                }
                // line 62
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($context["reseau"], "idTypeReseau", array()), "nom", array()) == "Twitter")) {
                    // line 63
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reseau"], "url", array()), "html", null, true);
                    echo "\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                    ";
                }
                // line 65
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                  </ul>

      </div>


      </div>
      <div class=\"col-sm-6 trophee\">
      <span class=\"pointTrophee\"> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trophee", array()), "html", null, true);
            echo "</span>

      <p>Ses projets : <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projetDe", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nbProjets"]) ? $context["nbProjets"] : $this->getContext($context, "nbProjets")), "html", null, true);
            echo "</a>
      <br>Ses participations : <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participationDe", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nbParticipations"]) ? $context["nbParticipations"] : $this->getContext($context, "nbParticipations")), "html", null, true);
            echo " </a></p>
      </div>
      </div>
      ";
            // line 79
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())))) {
                // line 80
                echo "              <a class=\"btn btn-primary\"  id=\"newMessage\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newMessage", array("IdDestinataire" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\" data-toggle=\"modal\"><span class=\"glyphicon glyphicon-envelope\"></span> Envoyez un message</a>
      ";
            }
            // line 82
            echo "      </div>



      <div class=\"container\">
      <h3 >Ses compétences</h3>
      <hr>

      <ul class=\"competence\">
      ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 92
                echo "        <li>
        <!-- Skill Bars -->

              <div class=\"progress skill-bar\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
                echo "\"
                    <span class=\"sr-only\"> </span>
                </div>
                <span class=\"progress-type skill\">";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "nom", array()), "html", null, true);
                echo "</span>
                <span class=\"progress-completed \">";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
                echo "%</span>
            </div>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "      </ul>
      </div>
      </div>
    </div>
  </div>
</div>

<div class=\"container\">
\t<div class=\"row\">
      <!-- Modal -->
            <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Nouveau message</h4>
                  </div>
                  <div class=\"modal-body\">

                  </div>
                  <div class=\"modal-footer\">

                  </div>
                </div>
              </div>
            </div>
\t    </div>
</div>

";
        } else {
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_463380c7291289dd19b9c2c293765480bb630182bae3b06fdc453ba7e94d794c->leave($__internal_463380c7291289dd19b9c2c293765480bb630182bae3b06fdc453ba7e94d794c_prof);

        
        $__internal_b452c478d6c88f0a83d47c08fc981193957e3109f1bf2cff7cbfa506be029672->leave($__internal_b452c478d6c88f0a83d47c08fc981193957e3109f1bf2cff7cbfa506be029672_prof);

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
        return array (  316 => 134,  284 => 104,  274 => 100,  270 => 99,  262 => 96,  256 => 92,  252 => 91,  241 => 82,  233 => 80,  231 => 79,  223 => 76,  217 => 75,  212 => 73,  203 => 66,  197 => 65,  191 => 63,  188 => 62,  182 => 60,  179 => 59,  173 => 57,  170 => 56,  166 => 55,  157 => 49,  153 => 48,  148 => 46,  144 => 45,  140 => 44,  136 => 43,  128 => 38,  124 => 37,  120 => 36,  111 => 30,  107 => 29,  103 => 28,  93 => 21,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

      <h3 align=\"center\">
        <img width=\"100px;\"src=\"{{asset('img/avatar/'~user.avatar.url)}}\">
        Informations sur {{ user.username }}<br>
         <center><p> {{ user.presentation }}</p></center>

      </h3>
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
                  {% for reseau in reseaux %}
                    {% if reseau.idTypeReseau.nom == \"LinkedIn\" %}
                        <li><a href=\"{{reseau.url}}\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                    {% endif %}
                    {% if reseau.idTypeReseau.nom == \"Facebook\" %}
                        <li><a href=\"{{reseau.url}}\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                    {% endif %}
                    {% if reseau.idTypeReseau.nom == \"Twitter\" %}
                        <li><a href=\"{{reseau.url}}\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                    {% endif %}
                  {% endfor %}
                  </ul>

      </div>


      </div>
      <div class=\"col-sm-6 trophee\">
      <span class=\"pointTrophee\"> {{ user.trophee }}</span>

      <p>Ses projets : <a href=\"{{ path('projetDe', {'username': user.username}) }}\">{{ nbProjets }}</a>
      <br>Ses participations : <a href=\"{{ path('participationDe', {'username': user.username}) }}\">{{ nbParticipations}} </a></p>
      </div>
      </div>
      {% if app.user and app.user.username != user.username %}
              <a class=\"btn btn-primary\"  id=\"newMessage\" href=\"{{ path('newMessage', {'IdDestinataire': user.id}) }}\" data-id=\"{{ user.id }}\" data-toggle=\"modal\"><span class=\"glyphicon glyphicon-envelope\"></span> Envoyez un message</a>
      {% endif %}
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

<div class=\"container\">
\t<div class=\"row\">
      <!-- Modal -->
            <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Nouveau message</h4>
                  </div>
                  <div class=\"modal-body\">

                  </div>
                  <div class=\"modal-footer\">

                  </div>
                </div>
              </div>
            </div>
\t    </div>
</div>

{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "utilisateur/profilDe.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/profilDe.html.twig");
    }
}
