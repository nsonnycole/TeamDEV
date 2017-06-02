<?php

/* default/index.html.twig */
class __TwigTemplate_06fc4a05e9853a7c0124d7414c2f19031af94ea68cae07909c002ecaf3e9f8ed extends Twig_Template
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
        $__internal_b668a20ec483b3acf1b7e7d159ccddc328caf1d67cce4423a0c36d7f0f8f6880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b668a20ec483b3acf1b7e7d159ccddc328caf1d67cce4423a0c36d7f0f8f6880->enter($__internal_b668a20ec483b3acf1b7e7d159ccddc328caf1d67cce4423a0c36d7f0f8f6880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_64c44348bb64b5bd9c743a549763260e56f8a22f8eb6beb998af46d1c8ef951a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c44348bb64b5bd9c743a549763260e56f8a22f8eb6beb998af46d1c8ef951a->enter($__internal_64c44348bb64b5bd9c743a549763260e56f8a22f8eb6beb998af46d1c8ef951a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b668a20ec483b3acf1b7e7d159ccddc328caf1d67cce4423a0c36d7f0f8f6880->leave($__internal_b668a20ec483b3acf1b7e7d159ccddc328caf1d67cce4423a0c36d7f0f8f6880_prof);

        
        $__internal_64c44348bb64b5bd9c743a549763260e56f8a22f8eb6beb998af46d1c8ef951a->leave($__internal_64c44348bb64b5bd9c743a549763260e56f8a22f8eb6beb998af46d1c8ef951a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57082b77389a3c6d1cfd7a2916d706990fd37cf8833c9e453ad00360911e58f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57082b77389a3c6d1cfd7a2916d706990fd37cf8833c9e453ad00360911e58f0->enter($__internal_57082b77389a3c6d1cfd7a2916d706990fd37cf8833c9e453ad00360911e58f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_177910e69930d9a5dfed0ac6aa4a0441ecb2f657a196f52c51dc98de98188a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177910e69930d9a5dfed0ac6aa4a0441ecb2f657a196f52c51dc98de98188a38->enter($__internal_177910e69930d9a5dfed0ac6aa4a0441ecb2f657a196f52c51dc98de98188a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "      <div class=\"col-sm-8 projet\" style=\"display:block\">
      <center>
        <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showProjet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\"><h3>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
                echo "</h3>
        <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "file", array()), "html", null, true);
                echo "\" width=\"350px\" height=\"300px\"></a>
        <p>";
                // line 51
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["projet"], "description", array())), 0, 40), "html", null, true);
                echo " [...]</p>
        <p class=\"infos\">Début : ";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "  |  Places : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nbPlaces", array()), "html", null, true);
                echo "  <br>statut : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statut", array()), "nom", array()), "html", null, true);
                echo "
        <br>Auteur : <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateur", array()), "username", array()), "html", null, true);
                echo "</a></p>
        </center>
      </div>

  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
  </div>
</div><!-- container -->
  ";
        } else {
            // line 62
            echo "  <h3 align=\"center\">Connectez vous pour accedez aux projets <br><br>
    <a class=\"btn btn-primary\"href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></h3>
  ";
        }
        
        $__internal_177910e69930d9a5dfed0ac6aa4a0441ecb2f657a196f52c51dc98de98188a38->leave($__internal_177910e69930d9a5dfed0ac6aa4a0441ecb2f657a196f52c51dc98de98188a38_prof);

        
        $__internal_57082b77389a3c6d1cfd7a2916d706990fd37cf8833c9e453ad00360911e58f0->leave($__internal_57082b77389a3c6d1cfd7a2916d706990fd37cf8833c9e453ad00360911e58f0_prof);

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
        return array (  175 => 63,  172 => 62,  166 => 58,  153 => 53,  145 => 52,  141 => 51,  137 => 50,  131 => 49,  127 => 47,  123 => 46,  116 => 42,  105 => 33,  103 => 32,  83 => 14,  75 => 12,  69 => 9,  65 => 8,  61 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
      <div class=\"col-sm-8 projet\" style=\"display:block\">
      <center>
        <a href=\"{{ path('showProjet', {'id': projet.id}) }}\"><h3>{{projet.nomProjet}}</h3>
        <img src=\"{{projet.file}}\" width=\"350px\" height=\"300px\"></a>
        <p>{{projet.description | striptags | slice(0, 40) }} [...]</p>
        <p class=\"infos\">Début : {{projet.dateDebut|date('d/m/Y')}}  |  Places : {{projet.nbPlaces}}  <br>statut : {{projet.statut.nom}}
        <br>Auteur : <a href=\"{{ path('profilDe', {'username': projet.idUtilisateur.username}) }}\">{{projet.idUtilisateur.username}}</a></p>
        </center>
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
