<?php

/* default/index.html.twig */
class __TwigTemplate_2131c216df2e1fa44d93a4022976a929227a81f29136a582063930fc2c160bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_f0999799be818ba56ee9bcd57f4c69de9b188ed48e0a4bff9d313cb67ae63083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0999799be818ba56ee9bcd57f4c69de9b188ed48e0a4bff9d313cb67ae63083->enter($__internal_f0999799be818ba56ee9bcd57f4c69de9b188ed48e0a4bff9d313cb67ae63083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_72f8677b9497db99433968493643a822421ab4fc4ef3e99f53037484bd86f309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f8677b9497db99433968493643a822421ab4fc4ef3e99f53037484bd86f309->enter($__internal_72f8677b9497db99433968493643a822421ab4fc4ef3e99f53037484bd86f309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0999799be818ba56ee9bcd57f4c69de9b188ed48e0a4bff9d313cb67ae63083->leave($__internal_f0999799be818ba56ee9bcd57f4c69de9b188ed48e0a4bff9d313cb67ae63083_prof);

        
        $__internal_72f8677b9497db99433968493643a822421ab4fc4ef3e99f53037484bd86f309->leave($__internal_72f8677b9497db99433968493643a822421ab4fc4ef3e99f53037484bd86f309_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8ea919339da392315e954d9dd51c7ec5662798f756eaf8f84cca2601db37370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ea919339da392315e954d9dd51c7ec5662798f756eaf8f84cca2601db37370->enter($__internal_b8ea919339da392315e954d9dd51c7ec5662798f756eaf8f84cca2601db37370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_400a9de64aa5ce3a1988b6945ee716249ac4ebcfdf96d6c17b54cb5489b1e87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400a9de64aa5ce3a1988b6945ee716249ac4ebcfdf96d6c17b54cb5489b1e87e->enter($__internal_400a9de64aa5ce3a1988b6945ee716249ac4ebcfdf96d6c17b54cb5489b1e87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<div id=\"headerwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h1>TeamDEV</h1>
        <h2>Travaillez à plusieurs pour un meilleur résultat</h2>
        <div class=\"spacer\"></div>
        <i class=\"fa fa-angle-down\"></i>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- WELCOME SECTION -->

<!-- BLOG POSTS -->
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <h1>Les derniers projets</h1>
    </div><!-- col-lg-12 -->
    <div class=\"col-lg-8\">
      <p>Découvrez les dernieres propositions de projets.</p>
    </div><!-- col-lg-8-->
    <div class=\"col-lg-4 goright\">
      <p><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\"><i class=\"fa fa-angle-right\"></i> Voir tous les projets</a></p>
    </div>
    </div>
  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 44
            echo "      <div class=\"col-sm-4 projet\">
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\"><h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo "</h4>
        <img style=\"width: 350px;\"src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
            echo "\" ></a>
        <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
            echo " [...]</p>
        <p class=\"infos\">Début : ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "  |  Places : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
            echo "  <br>statut : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
            echo "
        <br>Auteur : <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a></p>

      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
  </div>
</div><!-- container -->

";
        
        $__internal_400a9de64aa5ce3a1988b6945ee716249ac4ebcfdf96d6c17b54cb5489b1e87e->leave($__internal_400a9de64aa5ce3a1988b6945ee716249ac4ebcfdf96d6c17b54cb5489b1e87e_prof);

        
        $__internal_b8ea919339da392315e954d9dd51c7ec5662798f756eaf8f84cca2601db37370->leave($__internal_b8ea919339da392315e954d9dd51c7ec5662798f756eaf8f84cca2601db37370_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  141 => 49,  133 => 48,  129 => 47,  125 => 46,  119 => 45,  116 => 44,  112 => 43,  106 => 40,  77 => 13,  69 => 11,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<div id=\"headerwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h1>TeamDEV</h1>
        <h2>Travaillez à plusieurs pour un meilleur résultat</h2>
        <div class=\"spacer\"></div>
        <i class=\"fa fa-angle-down\"></i>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- WELCOME SECTION -->

<!-- BLOG POSTS -->
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <h1>Les derniers projets</h1>
    </div><!-- col-lg-12 -->
    <div class=\"col-lg-8\">
      <p>Découvrez les dernieres propositions de projets.</p>
    </div><!-- col-lg-8-->
    <div class=\"col-lg-4 goright\">
      <p><a href=\"{{path('projets')}}\"><i class=\"fa fa-angle-right\"></i> Voir tous les projets</a></p>
    </div>
    </div>
  {% for projet in projets %}
      <div class=\"col-sm-4 projet\">
        <a href=\"{{ path('showProjet', {'id': projet.id}) }}\"><h4>{{projet.nomProjet}}</h4>
        <img style=\"width: 350px;\"src=\"{{asset(\"img/about-bg.jpg\")}}\" ></a>
        <p>{{projet.description | striptags | slice(0, 40) }} [...]</p>
        <p class=\"infos\">Début : {{projet.dateDebut|date('d/m/Y')}}  |  Places : {{projet.nbPlaces}}  <br>statut : {{projet.statut.nom}}
        <br>Auteur : <a href=\"{{ path('profilDe', {'username': projet.idUtilisateur.username}) }}\">{{projet.idUtilisateur.username}}</a></p>

      </div>
  {% endfor %}

  </div>
</div><!-- container -->

{% endblock %}
", "default/index.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/default/index.html.twig");
    }
}
