<?php

/* utilisateur/profilDe.html.twig */
class __TwigTemplate_b4c9d054c5f608240fc941cccc607341bf7f1df3d2f230a94c0f1bb04e911da1 extends Twig_Template
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
        $__internal_324c4e04a33f59e8c6d53ece3be400b80a4acdf1fab65f5429e5705ce08a4445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324c4e04a33f59e8c6d53ece3be400b80a4acdf1fab65f5429e5705ce08a4445->enter($__internal_324c4e04a33f59e8c6d53ece3be400b80a4acdf1fab65f5429e5705ce08a4445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $__internal_96ecb7199e506d70c9886b6462c9fd2c9f449a7ddead0d89cfa52c3793d86743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ecb7199e506d70c9886b6462c9fd2c9f449a7ddead0d89cfa52c3793d86743->enter($__internal_96ecb7199e506d70c9886b6462c9fd2c9f449a7ddead0d89cfa52c3793d86743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/profilDe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_324c4e04a33f59e8c6d53ece3be400b80a4acdf1fab65f5429e5705ce08a4445->leave($__internal_324c4e04a33f59e8c6d53ece3be400b80a4acdf1fab65f5429e5705ce08a4445_prof);

        
        $__internal_96ecb7199e506d70c9886b6462c9fd2c9f449a7ddead0d89cfa52c3793d86743->leave($__internal_96ecb7199e506d70c9886b6462c9fd2c9f449a7ddead0d89cfa52c3793d86743_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f05db38d2343b415eb1abcf28d071eef8d0df9ace499e7621bb97f9b8b047381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05db38d2343b415eb1abcf28d071eef8d0df9ace499e7621bb97f9b8b047381->enter($__internal_f05db38d2343b415eb1abcf28d071eef8d0df9ace499e7621bb97f9b8b047381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_830f8c0253b2ab516ee382ac57a9b3e92fc24036cd823e625c725612d796302f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830f8c0253b2ab516ee382ac57a9b3e92fc24036cd823e625c725612d796302f->enter($__internal_830f8c0253b2ab516ee382ac57a9b3e92fc24036cd823e625c725612d796302f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "

      </h3>
      <hr>
      <div class=\"col-sm-6\">
      <p> Nom : ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "</p>
      <p> Prénom : ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
            echo "</p>
      <p> Date de naissance : ";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaiss", array()), "d/m/Y"), "html", null, true);
            echo "</p>
      <p> Adresse : ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
            echo "</p>

      <p> Pseudo : ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</p>
      <p> Email : ";
            // line 48
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
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trophee", array()), "html", null, true);
            echo "</span>

      <p>Ses projets : <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projetDe", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nbProjets"]) ? $context["nbProjets"] : $this->getContext($context, "nbProjets")), "html", null, true);
            echo "</a>
      <br>Ses participations : <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participationDe", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nbParticipations"]) ? $context["nbParticipations"] : $this->getContext($context, "nbParticipations")), "html", null, true);
            echo " </a></p>
      </div>
      </div>
      ";
            // line 68
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())))) {
                // line 69
                echo "              <a class=\"btn btn-primary\"  id=\"newMessage\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newMessage", array("IdDestinataire" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\" data-toggle=\"modal\"><span class=\"glyphicon glyphicon-envelope\"></span> Envoyez un message</a>
      ";
            }
            // line 71
            echo "      </div>



      <div class=\"container\">
      <h3 >Ses compétences</h3>
      <hr>

      <ul class=\"competence\">
      ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 81
                echo "        <li>
        <!-- Skill Bars -->

              <div class=\"progress skill-bar\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
                echo "\"
                    <span class=\"sr-only\"> </span>
                </div>
                <span class=\"progress-type skill\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "nom", array()), "html", null, true);
                echo "</span>
                <span class=\"progress-completed \">";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "pourcentage", array()), "html", null, true);
                echo "%</span>
            </div>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
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
            // line 123
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_830f8c0253b2ab516ee382ac57a9b3e92fc24036cd823e625c725612d796302f->leave($__internal_830f8c0253b2ab516ee382ac57a9b3e92fc24036cd823e625c725612d796302f_prof);

        
        $__internal_f05db38d2343b415eb1abcf28d071eef8d0df9ace499e7621bb97f9b8b047381->leave($__internal_f05db38d2343b415eb1abcf28d071eef8d0df9ace499e7621bb97f9b8b047381_prof);

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
        return array (  274 => 123,  242 => 93,  232 => 89,  228 => 88,  220 => 85,  214 => 81,  210 => 80,  199 => 71,  191 => 69,  189 => 68,  181 => 65,  175 => 64,  170 => 62,  153 => 48,  149 => 47,  144 => 45,  140 => 44,  136 => 43,  132 => 42,  124 => 37,  120 => 36,  111 => 30,  107 => 29,  103 => 28,  93 => 21,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        Informations sur {{ user.username }}

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
