<?php

/* projets/newProjet.html.twig */
class __TwigTemplate_1baaa910fbb5336771fd58f2c9b6be0f765832f60dee0d6d94d5274c29227c22 extends Twig_Template
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
        $__internal_b5e198474b7fc4ae4a9729f3cec3e2e59990d0ed0ab70108f7717aa8d68ab610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e198474b7fc4ae4a9729f3cec3e2e59990d0ed0ab70108f7717aa8d68ab610->enter($__internal_b5e198474b7fc4ae4a9729f3cec3e2e59990d0ed0ab70108f7717aa8d68ab610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjet.html.twig"));

        $__internal_99f24bb9cb65ff8926081846a6062bbd4527b018a59f5d71964628a403a57a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f24bb9cb65ff8926081846a6062bbd4527b018a59f5d71964628a403a57a4b->enter($__internal_99f24bb9cb65ff8926081846a6062bbd4527b018a59f5d71964628a403a57a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets/newProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5e198474b7fc4ae4a9729f3cec3e2e59990d0ed0ab70108f7717aa8d68ab610->leave($__internal_b5e198474b7fc4ae4a9729f3cec3e2e59990d0ed0ab70108f7717aa8d68ab610_prof);

        
        $__internal_99f24bb9cb65ff8926081846a6062bbd4527b018a59f5d71964628a403a57a4b->leave($__internal_99f24bb9cb65ff8926081846a6062bbd4527b018a59f5d71964628a403a57a4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39782c7af777ee72811e040a3e843a7114eff6ed349a163d8e0abf769d607e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39782c7af777ee72811e040a3e843a7114eff6ed349a163d8e0abf769d607e16->enter($__internal_39782c7af777ee72811e040a3e843a7114eff6ed349a163d8e0abf769d607e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e28cd28d2e4ac48fc04330fde8ea774800173011ce551dcc11c237d421b4a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e28cd28d2e4ac48fc04330fde8ea774800173011ce551dcc11c237d421b4a68->enter($__internal_9e28cd28d2e4ac48fc04330fde8ea774800173011ce551dcc11c237d421b4a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e28cd28d2e4ac48fc04330fde8ea774800173011ce551dcc11c237d421b4a68->leave($__internal_9e28cd28d2e4ac48fc04330fde8ea774800173011ce551dcc11c237d421b4a68_prof);

        
        $__internal_39782c7af777ee72811e040a3e843a7114eff6ed349a163d8e0abf769d607e16->leave($__internal_39782c7af777ee72811e040a3e843a7114eff6ed349a163d8e0abf769d607e16_prof);

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
        return array (  234 => 108,  229 => 106,  215 => 95,  192 => 75,  187 => 73,  176 => 65,  172 => 64,  168 => 63,  164 => 62,  160 => 61,  152 => 56,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  131 => 50,  110 => 32,  105 => 30,  101 => 29,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
