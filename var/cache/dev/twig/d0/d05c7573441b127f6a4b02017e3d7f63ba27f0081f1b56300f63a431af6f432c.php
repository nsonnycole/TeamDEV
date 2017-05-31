<?php

/* default/index.html.twig */
class __TwigTemplate_08908dff7fac6011df8a11c60adad526265c04f166414f15d9d251982ad355f6 extends Twig_Template
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
        $__internal_6212f2e91a0176ee7865324d25c9fb40d83badec8cb446fc8aeb0caf17bfcfb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6212f2e91a0176ee7865324d25c9fb40d83badec8cb446fc8aeb0caf17bfcfb9->enter($__internal_6212f2e91a0176ee7865324d25c9fb40d83badec8cb446fc8aeb0caf17bfcfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1fbdbfe57cba2f4161b44be666e66a1a3730895fb91e3412be92df014d8ffce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbdbfe57cba2f4161b44be666e66a1a3730895fb91e3412be92df014d8ffce2->enter($__internal_1fbdbfe57cba2f4161b44be666e66a1a3730895fb91e3412be92df014d8ffce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6212f2e91a0176ee7865324d25c9fb40d83badec8cb446fc8aeb0caf17bfcfb9->leave($__internal_6212f2e91a0176ee7865324d25c9fb40d83badec8cb446fc8aeb0caf17bfcfb9_prof);

        
        $__internal_1fbdbfe57cba2f4161b44be666e66a1a3730895fb91e3412be92df014d8ffce2->leave($__internal_1fbdbfe57cba2f4161b44be666e66a1a3730895fb91e3412be92df014d8ffce2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce8301b5fd976018cab60cda968425469e12ed92aa2340efaf27bc919a5ebd84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8301b5fd976018cab60cda968425469e12ed92aa2340efaf27bc919a5ebd84->enter($__internal_ce8301b5fd976018cab60cda968425469e12ed92aa2340efaf27bc919a5ebd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef12d0f11b557a352ba37d34707d5f27217a4a34e7a292801c7104b035d8e360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef12d0f11b557a352ba37d34707d5f27217a4a34e7a292801c7104b035d8e360->enter($__internal_ef12d0f11b557a352ba37d34707d5f27217a4a34e7a292801c7104b035d8e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\" style=\"display:inline\">
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><img  width=\"50px;\"src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "url", array()))), "html", null, true);
            echo "\"></a>
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 12
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 14
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
";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <h1>Les derniers projets</h1>
    </div><!-- col-lg-12 -->
    <div class=\"col-lg-8\">
      <p>Découvrez les dernieres propositions de projets.</p>
    </div><!-- col-lg-8-->
    <div class=\"col-lg-4 goright\">
      <p><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\"><i class=\"fa fa-angle-right\"></i> Voir tous les projets</a></p>
    </div>
    </div>

  ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
            foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                // line 47
                echo "      <div class=\"col-sm-4 projet\">
        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\"><h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
                echo "</h4>
        <img style=\"width: 350px;\"src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/about-bg.jpg"), "html", null, true);
                echo "\" ></a>
        <p>";
                // line 50
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
                echo " [...]</p>
        <p class=\"infos\">Début : ";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "  |  Places : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
                echo "  <br>statut : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
                echo "
        <br>Auteur : <a href=\"";
                // line 52
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
            // line 55
            echo "
  </div>
</div><!-- container -->
  ";
        } else {
            // line 59
            echo "  <h3 align=\"center\">Connectez vous pour accedez aux projets <br><br>
    <a class=\"btn btn-primary\"href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></h3>
  ";
        }
        
        $__internal_ef12d0f11b557a352ba37d34707d5f27217a4a34e7a292801c7104b035d8e360->leave($__internal_ef12d0f11b557a352ba37d34707d5f27217a4a34e7a292801c7104b035d8e360_prof);

        
        $__internal_ce8301b5fd976018cab60cda968425469e12ed92aa2340efaf27bc919a5ebd84->leave($__internal_ce8301b5fd976018cab60cda968425469e12ed92aa2340efaf27bc919a5ebd84_prof);

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
        return array (  172 => 60,  169 => 59,  163 => 55,  152 => 52,  144 => 51,  140 => 50,  136 => 49,  130 => 48,  127 => 47,  123 => 46,  116 => 42,  105 => 33,  103 => 32,  83 => 14,  75 => 12,  69 => 9,  65 => 8,  61 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
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
  {% else %}
  <h3 align=\"center\">Connectez vous pour accedez aux projets <br><br>
    <a class=\"btn btn-primary\"href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></h3>
  {% endif %}
{% endblock %}
", "default/index.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/default/index.html.twig");
    }
}
