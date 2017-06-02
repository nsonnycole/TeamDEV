<?php

/* projets/newProjet.html.twig */
class __TwigTemplate_d3016e5475e3d2ffcb0b29dbd5dba389504cf10d0a9864956b41fc479ef2e8b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets/newProjet.html.twig", 1);
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
        $__internal_a40091658c105f1e5231ec520a8e221acf259c1d6a109a4d05ffd81ef243d118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40091658c105f1e5231ec520a8e221acf259c1d6a109a4d05ffd81ef243d118->enter($__internal_a40091658c105f1e5231ec520a8e221acf259c1d6a109a4d05ffd81ef243d118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjet.html.twig"));

        $__internal_ae53b94d7cdbf838abd97c9f44a638c0128a9457a73903dc24b86217663b508d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae53b94d7cdbf838abd97c9f44a638c0128a9457a73903dc24b86217663b508d->enter($__internal_ae53b94d7cdbf838abd97c9f44a638c0128a9457a73903dc24b86217663b508d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a40091658c105f1e5231ec520a8e221acf259c1d6a109a4d05ffd81ef243d118->leave($__internal_a40091658c105f1e5231ec520a8e221acf259c1d6a109a4d05ffd81ef243d118_prof);

        
        $__internal_ae53b94d7cdbf838abd97c9f44a638c0128a9457a73903dc24b86217663b508d->leave($__internal_ae53b94d7cdbf838abd97c9f44a638c0128a9457a73903dc24b86217663b508d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ddb0f5bc6da6c18065eb34ffad9c5786bac1c490ebec90bc9fe2feb2d375f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddb0f5bc6da6c18065eb34ffad9c5786bac1c490ebec90bc9fe2feb2d375f24->enter($__internal_5ddb0f5bc6da6c18065eb34ffad9c5786bac1c490ebec90bc9fe2feb2d375f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_299d9df7ce8671c21b4ba1bb5d80c38efdd4b17929ee1bf05438c427f3b42ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299d9df7ce8671c21b4ba1bb5d80c38efdd4b17929ee1bf05438c427f3b42ec0->enter($__internal_299d9df7ce8671c21b4ba1bb5d80c38efdd4b17929ee1bf05438c427f3b42ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Nouveau projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\">Projets</a></li>
  <li class=\"breadcrumb-item active\">Nouveau projet</li>
  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
<!-- Button trigger modal -->

";
            // line 37
            echo $this->env->getExtension('Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension')->tinymceInit();
            echo "
<div class=\"container\">
<br/>
<div class=\"panel\">

\t\t\t<div class=\"panel-heading\"><h4>Nouveau projet</h4>
      <button  type=\"button\" class=\"btn btn-primary btn-sm pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">
        Ajouter/Modifier un fichier
      </button>
      </div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"panel \">
\t\t\t\t\t\t<div class=\"panel-body\">
            ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
            <div class=\"col-md-6\">
              ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'row');
            echo "
              ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
            echo "
              ";
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'row');
            echo "
              ";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'row');
            echo "
              ";
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'row');
            echo "


            </div>
            <div class=\"col-md-6\">
              ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'row');
            echo "
              ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'row');
            echo "
              ";
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPlaces", array()), 'row');
            echo "
              ";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idTypeProjet", array()), 'row');
            echo "
              ";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "technologies", array()), 'row');
            echo "

            </div>
            <hr>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
          <br>
            <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\" class=\"btn btn-warning pull-right\"/>
           Annuler </a>
           ";
            // line 75
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
            echo "

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
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
            echo "

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
            // line 106
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
";
        } else {
            // line 108
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_299d9df7ce8671c21b4ba1bb5d80c38efdd4b17929ee1bf05438c427f3b42ec0->leave($__internal_299d9df7ce8671c21b4ba1bb5d80c38efdd4b17929ee1bf05438c427f3b42ec0_prof);

        
        $__internal_5ddb0f5bc6da6c18065eb34ffad9c5786bac1c490ebec90bc9fe2feb2d375f24->leave($__internal_5ddb0f5bc6da6c18065eb34ffad9c5786bac1c490ebec90bc9fe2feb2d375f24_prof);

    }

    public function getTemplateName()
    {
        return "projets/newProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 108,  232 => 106,  218 => 95,  195 => 75,  190 => 73,  179 => 65,  175 => 64,  171 => 63,  167 => 62,  163 => 61,  155 => 56,  151 => 55,  147 => 54,  143 => 53,  139 => 52,  134 => 50,  118 => 37,  110 => 32,  105 => 30,  101 => 29,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Nouveau projet</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('projets')}}\">Projets</a></li>
  <li class=\"breadcrumb-item active\">Nouveau projet</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">
<!-- Button trigger modal -->

{{ tinymce_init() }}
<div class=\"container\">
<br/>
<div class=\"panel\">

\t\t\t<div class=\"panel-heading\"><h4>Nouveau projet</h4>
      <button  type=\"button\" class=\"btn btn-primary btn-sm pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">
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
              {{ form_row(form.statut) }}


            </div>
            <div class=\"col-md-6\">
              {{ form_row(form.dateDebut) }}
              {{ form_row(form.dateFin) }}
              {{ form_row(form.nbPlaces) }}
              {{ form_row(form.idTypeProjet) }}
              {{ form_row(form.technologies) }}

            </div>
            <hr>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
          <br>
            <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{path('projets')}}\" class=\"btn btn-warning pull-right\"/>
           Annuler </a>
           {{ form_row(form.save) }}

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
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "projets/newProjet.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/projets/newProjet.html.twig");
    }
}
