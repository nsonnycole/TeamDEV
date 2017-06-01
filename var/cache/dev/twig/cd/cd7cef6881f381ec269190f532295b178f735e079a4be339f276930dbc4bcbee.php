<?php

/* utilisateur/mesProjets.html.twig */
class __TwigTemplate_a659138310edc36b666bd435f7a18c6e9bc244c7bcc8d7025dd44c0cd2c94ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/mesProjets.html.twig", 1);
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
        $__internal_b901290f12591ff6fde6e372a74bccfe7e47cd02e3b7ae53677e2ff2b2ae49fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b901290f12591ff6fde6e372a74bccfe7e47cd02e3b7ae53677e2ff2b2ae49fd->enter($__internal_b901290f12591ff6fde6e372a74bccfe7e47cd02e3b7ae53677e2ff2b2ae49fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesProjets.html.twig"));

        $__internal_620469a332162577cc45c7d78207c7788a8947b3a74e33024da3eb021e18ec73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620469a332162577cc45c7d78207c7788a8947b3a74e33024da3eb021e18ec73->enter($__internal_620469a332162577cc45c7d78207c7788a8947b3a74e33024da3eb021e18ec73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesProjets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b901290f12591ff6fde6e372a74bccfe7e47cd02e3b7ae53677e2ff2b2ae49fd->leave($__internal_b901290f12591ff6fde6e372a74bccfe7e47cd02e3b7ae53677e2ff2b2ae49fd_prof);

        
        $__internal_620469a332162577cc45c7d78207c7788a8947b3a74e33024da3eb021e18ec73->leave($__internal_620469a332162577cc45c7d78207c7788a8947b3a74e33024da3eb021e18ec73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcf9b62f1ce3928eaf95b7b989991297d820b0f9f859abd67ada0f98d87a603c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf9b62f1ce3928eaf95b7b989991297d820b0f9f859abd67ada0f98d87a603c->enter($__internal_dcf9b62f1ce3928eaf95b7b989991297d820b0f9f859abd67ada0f98d87a603c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bab947b6d357af248261a2daffe9bb951039cbd676b40d91bc2f5dfbe246bae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab947b6d357af248261a2daffe9bb951039cbd676b40d91bc2f5dfbe246bae2->enter($__internal_bab947b6d357af248261a2daffe9bb951039cbd676b40d91bc2f5dfbe246bae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes projets </h2>
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
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes projets</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">

";
            // line 38
            if (((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")) == null)) {
                // line 39
                echo "<h3>Vous n'avez pas de projets.</h3>
<p class=\"pull-right\"><br><a href=\"";
                // line 40
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newProjet");
                echo "\" class=\"btn btn-primary\">Nouveau</a></p>
";
            } else {
                // line 42
                echo "
<h3>Listes de mes projets</h3>
<p class=\"pull-right\"><br><a href=\"";
                // line 44
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newProjet");
                echo "\" class=\"btn btn-primary pull-right\">Nouveau</a></p>
<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom du projet</td>
    <td>Description </td>
    <td>Statut </td>
    <td>Action</td>
  </thead>
  <tbody>
";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
                foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                    // line 56
                    echo "  <tr>
    <td><a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
                    echo "</a></td>
    <td width=\"30%\">";
                    // line 58
                    echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
                    echo " [...] </td>
    <td>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
                    echo "</td>
    <td>
      ";
                    // line 62
                    echo "      ";
                    if (($this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()) == "Fermé")) {
                        // line 63
                        echo "      <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tropheeProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-info\"><i class=\"fa fa-trophy\"></i></a>
      <a href=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      ";
                    } else {
                        // line 66
                        echo "      <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"";
                        // line 67
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      ";
                    }
                    // line 69
                    echo "


    </td>
  </tr>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "</tbody>
</table>
";
            }
            // line 78
            echo "</div><!-- row -->
</div>
";
        } else {
            // line 81
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_bab947b6d357af248261a2daffe9bb951039cbd676b40d91bc2f5dfbe246bae2->leave($__internal_bab947b6d357af248261a2daffe9bb951039cbd676b40d91bc2f5dfbe246bae2_prof);

        
        $__internal_dcf9b62f1ce3928eaf95b7b989991297d820b0f9f859abd67ada0f98d87a603c->leave($__internal_dcf9b62f1ce3928eaf95b7b989991297d820b0f9f859abd67ada0f98d87a603c_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/mesProjets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 81,  208 => 78,  203 => 75,  192 => 69,  187 => 67,  182 => 66,  177 => 64,  172 => 63,  169 => 62,  164 => 59,  160 => 58,  154 => 57,  151 => 56,  147 => 55,  133 => 44,  129 => 42,  124 => 40,  121 => 39,  119 => 38,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Mes projets </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('fos_user_profile_show')}}\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes projets</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">

{% if projets == null %}
<h3>Vous n'avez pas de projets.</h3>
<p class=\"pull-right\"><br><a href=\"{{path('newProjet')}}\" class=\"btn btn-primary\">Nouveau</a></p>
{% else %}

<h3>Listes de mes projets</h3>
<p class=\"pull-right\"><br><a href=\"{{path('newProjet')}}\" class=\"btn btn-primary pull-right\">Nouveau</a></p>
<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom du projet</td>
    <td>Description </td>
    <td>Statut </td>
    <td>Action</td>
  </thead>
  <tbody>
{% for projet in projets %}
  <tr>
    <td><a href=\"{{ path('showProjet', {'id': projet.id}) }}\">{{projet.nomProjet}}</a></td>
    <td width=\"30%\">{{projet.description | striptags | slice(0, 40) }} [...] </td>
    <td>{{projet.statut.nom }}</td>
    <td>
      {#<a href=\"{{ path('desincProjet', {'id': participe.id}) }}\" class=\"btn btn-danger\">Se désinscrire</a>#}
      {% if projet.statut.nom == \"Fermé\" %}
      <a href=\"{{ path('tropheeProjet', {'id': projet.id}) }}\" class=\"btn btn-info\"><i class=\"fa fa-trophy\"></i></a>
      <a href=\"{{ path('deleteProjet', {'id': projet.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      {% else %}
      <a href=\"{{ path('editProjet', {'id': projet.id}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
      <a href=\"{{ path('deleteProjet', {'id': projet.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      {% endif %}



    </td>
  </tr>
{% endfor %}
</tbody>
</table>
{% endif %}
</div><!-- row -->
</div>
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "utilisateur/mesProjets.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/mesProjets.html.twig");
    }
}
