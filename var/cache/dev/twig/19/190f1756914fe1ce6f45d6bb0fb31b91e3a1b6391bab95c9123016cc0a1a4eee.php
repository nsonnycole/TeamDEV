<?php

/* projets/editProjet.html.twig */
class __TwigTemplate_326c50848caf488895f6ae3eb7a9671920ba11a6e0e15c918ca06324c554c085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets/editProjet.html.twig", 1);
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
        $__internal_050a2e9b568b30a6ff06908370e4d024f67470d0c85080a1949f33e61cf37c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050a2e9b568b30a6ff06908370e4d024f67470d0c85080a1949f33e61cf37c45->enter($__internal_050a2e9b568b30a6ff06908370e4d024f67470d0c85080a1949f33e61cf37c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/editProjet.html.twig"));

        $__internal_c538a7d584c3fa2c6161cb2c0cd4fb74b62c7a72af1e5432f2fe4c5df763e93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c538a7d584c3fa2c6161cb2c0cd4fb74b62c7a72af1e5432f2fe4c5df763e93d->enter($__internal_c538a7d584c3fa2c6161cb2c0cd4fb74b62c7a72af1e5432f2fe4c5df763e93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/editProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_050a2e9b568b30a6ff06908370e4d024f67470d0c85080a1949f33e61cf37c45->leave($__internal_050a2e9b568b30a6ff06908370e4d024f67470d0c85080a1949f33e61cf37c45_prof);

        
        $__internal_c538a7d584c3fa2c6161cb2c0cd4fb74b62c7a72af1e5432f2fe4c5df763e93d->leave($__internal_c538a7d584c3fa2c6161cb2c0cd4fb74b62c7a72af1e5432f2fe4c5df763e93d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7420af25d41be9cf063e41423e252a65d9d7178a34d291afa84a592824e658b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7420af25d41be9cf063e41423e252a65d9d7178a34d291afa84a592824e658b->enter($__internal_f7420af25d41be9cf063e41423e252a65d9d7178a34d291afa84a592824e658b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c641a017bc6489dbc2d4dddbf7fef5db19031150aa3a3730d76bb13b5f34b08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c641a017bc6489dbc2d4dddbf7fef5db19031150aa3a3730d76bb13b5f34b08c->enter($__internal_c641a017bc6489dbc2d4dddbf7fef5db19031150aa3a3730d76bb13b5f34b08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "idUtilisateur", array()), "username", array())))) {
            // line 5
            echo "

<div class=\"container\" style=\"display:inline\">
    ";
            // line 8
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 9
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
                echo "\"><img  width=\"50px;\"src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "url", array()))), "html", null, true);
                echo "\"></a>
        ";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |
        <a href=\"";
                // line 11
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
            ";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
        </a>
    ";
            } else {
                // line 15
                echo "        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
    ";
            }
            // line 17
            echo "</div>
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Modification d'un projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
            echo "</a></li>
  <li class=\"breadcrumb-item active\">Modification projet</li>
  <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
<!-- Button trigger modal -->

";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 41
                echo "
    ";
                // line 42
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "<div class=\"panel \">
";
            // line 46
            echo $this->env->getExtension('Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension')->tinymceInit();
            echo "
\t\t\t<div class=\"panel-heading\">Modification ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
            echo "
      <button type=\"button\" class=\"btn btn-primary btn-sm pull-right imageProjet\" data-toggle=\"modal\" data-id=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "html", null, true);
            echo "\" data-target=\"#myModal\">
        Ajouter/Modifier un fichier
      </button>
      </div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"panel \">
\t\t\t\t\t\t<div class=\"panel-body\">
            ";
            // line 55
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
            <div class=\"col-md-6\">
              ";
            // line 57
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'row');
            echo "
              ";
            // line 58
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
            echo "
              ";
            // line 59
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'row');
            echo "
              ";
            // line 60
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'row');
            echo "

            </div>
            <div class=\"col-md-6\">
              ";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'row');
            echo "
              ";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'row');
            echo "
              ";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPlaces", array()), 'row');
            echo "
              ";
            // line 67
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'row');
            echo "
              ";
            // line 68
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idTypeProjet", array()), 'row');
            echo "
              ";
            // line 69
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "technologies", array()), 'row');
            echo "

            </div>
            <hr>
              ";
            // line 73
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
            echo "
              <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\" class=\"btn btn-warning pull-right\"/>
             Annuler </a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t<div class=\"clearfix\"></div>
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
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Ajout/Modification d'un fichier</h4>
                  </div>
                  <div class=\"modal-body\">
                  ";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
            echo "
                    <img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "file", array()), "html", null, true);
            echo "\" width=\"400px;\">
                  </div>
                  <div class=\"modal-footer\">
                  <button data-dismiss=\"modal\" class=\"btn btn-warning pull-right\"/> Enregistrer </button>
                  </div>
                </div>
              </div>
            </div>
\t</div>
</div>
    ";
            // line 107
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
";
        } else {
            // line 109
            echo "  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:index"));
            echo "
";
        }
        // line 111
        echo "
";
        
        $__internal_c641a017bc6489dbc2d4dddbf7fef5db19031150aa3a3730d76bb13b5f34b08c->leave($__internal_c641a017bc6489dbc2d4dddbf7fef5db19031150aa3a3730d76bb13b5f34b08c_prof);

        
        $__internal_f7420af25d41be9cf063e41423e252a65d9d7178a34d291afa84a592824e658b->leave($__internal_f7420af25d41be9cf063e41423e252a65d9d7178a34d291afa84a592824e658b_prof);

    }

    public function getTemplateName()
    {
        return "projets/editProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 111,  265 => 109,  260 => 107,  247 => 97,  243 => 96,  218 => 74,  214 => 73,  207 => 69,  203 => 68,  199 => 67,  195 => 66,  191 => 65,  187 => 64,  180 => 60,  176 => 59,  172 => 58,  168 => 57,  163 => 55,  153 => 48,  149 => 47,  145 => 46,  142 => 45,  133 => 42,  130 => 41,  126 => 40,  118 => 35,  111 => 33,  107 => 32,  103 => 31,  87 => 17,  79 => 15,  73 => 12,  69 => 11,  65 => 10,  58 => 9,  56 => 8,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if app.user and app.user.username == projet.idUtilisateur.username %}


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
        <h2>Modification d'un projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Projets</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{ path('showProjet', {'id': projet.id}) }}\">{{projet.nomProjet}}</a></li>
  <li class=\"breadcrumb-item active\">Modification projet</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
<!-- Button trigger modal -->

{% for flashMessage in app.session.flashbag.get('error') %}

    {{ flashMessage }}

{% endfor %}
<div class=\"panel \">
{{ tinymce_init() }}
\t\t\t<div class=\"panel-heading\">Modification {{projet.nomProjet}}
      <button type=\"button\" class=\"btn btn-primary btn-sm pull-right imageProjet\" data-toggle=\"modal\" data-id=\"{{projet.id}}\" data-target=\"#myModal\">
        Ajouter/Modifier un fichier
      </button>
      </div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"panel \">
\t\t\t\t\t\t<div class=\"panel-body\">
            {{ form_start(form) }}
            <div class=\"col-md-6\">
              {{ form_row(form.nomProjet) }}
              {{ form_row(form.description) }}
              {{ form_row(form.contenu) }}
              {{ form_row(form.url) }}

            </div>
            <div class=\"col-md-6\">
              {{ form_row(form.dateDebut) }}
              {{ form_row(form.dateFin) }}
              {{ form_row(form.nbPlaces) }}
              {{ form_row(form.statut) }}
              {{ form_row(form.idTypeProjet) }}
              {{ form_row(form.technologies) }}

            </div>
            <hr>
              {{ form_row(form.save) }}
              <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{path('projets')}}\" class=\"btn btn-warning pull-right\"/>
             Annuler </a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t<div class=\"clearfix\"></div>
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
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Ajout/Modification d'un fichier</h4>
                  </div>
                  <div class=\"modal-body\">
                  {{ form_row(form.file) }}
                    <img src=\"{{projet.file}}\" width=\"400px;\">
                  </div>
                  <div class=\"modal-footer\">
                  <button data-dismiss=\"modal\" class=\"btn btn-warning pull-right\"/> Enregistrer </button>
                  </div>
                </div>
              </div>
            </div>
\t</div>
</div>
    {{ form_end(form) }}
{% else %}
  {{ render(controller('AppBundle:Default:index')) }}
{% endif %}

{% endblock %}
", "projets/editProjet.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/editProjet.html.twig");
    }
}
