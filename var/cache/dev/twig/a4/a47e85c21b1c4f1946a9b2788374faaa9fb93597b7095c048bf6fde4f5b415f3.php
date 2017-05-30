<?php

/* projets/editProjet.html.twig */
class __TwigTemplate_13f3ce13c59b4648aaf4dcb5d5f607f646fb69569ec3d1353c820c02e05554eb extends Twig_Template
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
        $__internal_d4a828daf532528666fd3a8627e0f2fa15f30db0223f01fb634136dae9b5f05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a828daf532528666fd3a8627e0f2fa15f30db0223f01fb634136dae9b5f05a->enter($__internal_d4a828daf532528666fd3a8627e0f2fa15f30db0223f01fb634136dae9b5f05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/editProjet.html.twig"));

        $__internal_33e65b4d7eb128df40a3c1f71a1108e2fbd288d9ca7eaaac1e81e260d6316c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e65b4d7eb128df40a3c1f71a1108e2fbd288d9ca7eaaac1e81e260d6316c2a->enter($__internal_33e65b4d7eb128df40a3c1f71a1108e2fbd288d9ca7eaaac1e81e260d6316c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/editProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a828daf532528666fd3a8627e0f2fa15f30db0223f01fb634136dae9b5f05a->leave($__internal_d4a828daf532528666fd3a8627e0f2fa15f30db0223f01fb634136dae9b5f05a_prof);

        
        $__internal_33e65b4d7eb128df40a3c1f71a1108e2fbd288d9ca7eaaac1e81e260d6316c2a->leave($__internal_33e65b4d7eb128df40a3c1f71a1108e2fbd288d9ca7eaaac1e81e260d6316c2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97f44e7487149d5a723cb6f587da9bc42518346ae59ef560b367046ba8846932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f44e7487149d5a723cb6f587da9bc42518346ae59ef560b367046ba8846932->enter($__internal_97f44e7487149d5a723cb6f587da9bc42518346ae59ef560b367046ba8846932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc346d774b17fb34affe65b85c7a6d2fd7af8294f4d0316bac39d0d7cf00a078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc346d774b17fb34affe65b85c7a6d2fd7af8294f4d0316bac39d0d7cf00a078->enter($__internal_dc346d774b17fb34affe65b85c7a6d2fd7af8294f4d0316bac39d0d7cf00a078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "<div class=\"panel panel-default\">

\t\t\t<div class=\"panel-heading\">Modification ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
            echo "
      <button onclick=\"showForm('";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newProjetImage", array("idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
            echo "')\" type=\"button\" class=\"btn btn-primary btn-sm pull-right imageProjet\" data-toggle=\"modal\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "html", null, true);
            echo "\" data-target=\"#myModal\">
        Ajouter/Modifier un fichier
      </button>
      </div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"panel panel-default\">
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
            ";
            // line 76
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
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

                  </div>
                  <div class=\"modal-footer\">

                  </div>
                </div>
              </div>
            </div>
\t</div>
</div>
";
        } else {
            // line 108
            echo "  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:index"));
            echo "
";
        }
        // line 110
        echo "
";
        
        $__internal_dc346d774b17fb34affe65b85c7a6d2fd7af8294f4d0316bac39d0d7cf00a078->leave($__internal_dc346d774b17fb34affe65b85c7a6d2fd7af8294f4d0316bac39d0d7cf00a078_prof);

        
        $__internal_97f44e7487149d5a723cb6f587da9bc42518346ae59ef560b367046ba8846932->leave($__internal_97f44e7487149d5a723cb6f587da9bc42518346ae59ef560b367046ba8846932_prof);

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
        return array (  265 => 110,  259 => 108,  224 => 76,  219 => 74,  215 => 73,  208 => 69,  204 => 68,  200 => 67,  196 => 66,  192 => 65,  188 => 64,  181 => 60,  177 => 59,  173 => 58,  169 => 57,  164 => 55,  150 => 48,  146 => 47,  142 => 45,  133 => 42,  130 => 41,  126 => 40,  118 => 35,  111 => 33,  107 => 32,  103 => 31,  87 => 17,  79 => 15,  73 => 12,  69 => 11,  65 => 10,  58 => 9,  56 => 8,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"panel panel-default\">

\t\t\t<div class=\"panel-heading\">Modification {{projet.nomProjet}}
      <button onclick=\"showForm('{{ projet.id }}', '{{ path('newProjetImage', {'idProjet': projet.id}) }}')\" type=\"button\" class=\"btn btn-primary btn-sm pull-right imageProjet\" data-toggle=\"modal\" data-id=\"{{projet.id}}\" data-target=\"#myModal\">
        Ajouter/Modifier un fichier
      </button>
      </div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"panel panel-default\">
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
            {{ form_end(form) }}
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

                  </div>
                  <div class=\"modal-footer\">

                  </div>
                </div>
              </div>
            </div>
\t</div>
</div>
{% else %}
  {{ render(controller('AppBundle:Default:index')) }}
{% endif %}

{% endblock %}
", "projets/editProjet.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/editProjet.html.twig");
    }
}
