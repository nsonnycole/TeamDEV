<?php

/* utilisateur/mesNotifications.html.twig */
class __TwigTemplate_68973d5a37a70e09a950267f2bbefe469de1a5e404c7d07a4c1008b402267f56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/mesNotifications.html.twig", 1);
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
        $__internal_1a7c51cc7855a6cda2cabbb6caf5abb311e8afbd20a759be36abc05dc498c7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7c51cc7855a6cda2cabbb6caf5abb311e8afbd20a759be36abc05dc498c7f2->enter($__internal_1a7c51cc7855a6cda2cabbb6caf5abb311e8afbd20a759be36abc05dc498c7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesNotifications.html.twig"));

        $__internal_204b7f93a41a5106979c9df70ce999c6888c0451c6241bf22a354ed805d14be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204b7f93a41a5106979c9df70ce999c6888c0451c6241bf22a354ed805d14be5->enter($__internal_204b7f93a41a5106979c9df70ce999c6888c0451c6241bf22a354ed805d14be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesNotifications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7c51cc7855a6cda2cabbb6caf5abb311e8afbd20a759be36abc05dc498c7f2->leave($__internal_1a7c51cc7855a6cda2cabbb6caf5abb311e8afbd20a759be36abc05dc498c7f2_prof);

        
        $__internal_204b7f93a41a5106979c9df70ce999c6888c0451c6241bf22a354ed805d14be5->leave($__internal_204b7f93a41a5106979c9df70ce999c6888c0451c6241bf22a354ed805d14be5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c55313011e5f3e60f9e116fb501528e69bf133e0adfcbcbbc775b737ab900b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55313011e5f3e60f9e116fb501528e69bf133e0adfcbcbbc775b737ab900b16->enter($__internal_c55313011e5f3e60f9e116fb501528e69bf133e0adfcbcbbc775b737ab900b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7aa5e6eec461c623312d2da75fb188e60c0a756bec01c8ac7882eea76c7a0633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa5e6eec461c623312d2da75fb188e60c0a756bec01c8ac7882eea76c7a0633->enter($__internal_7aa5e6eec461c623312d2da75fb188e60c0a756bec01c8ac7882eea76c7a0633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes notifications </h2>
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
  <li class=\"breadcrumb-item active\">Mes Notifications</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>
<div class=\"page-header col-md-8 col-sm-offset-2\">
    <h4>Notifications</h4>
</div>



<div class=\"notifications col-md-8 col-sm-offset-2\">
";
            // line 41
            if (((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")) == null)) {
                // line 42
                echo "<h3>Vous n'avez pas de notification.</h3>
";
            }
            // line 44
            echo "    <ul class=\"notification-list\">

      ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 47
                echo "        <li>
            <div class=\"media\">
                <div class=\"media-body\">
                    <p class=\"media-heading\"><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["notification"], "expediteur", array()), "username", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["notification"], "expediteur", array()), "avatar", array()), "url", array()))), "html", null, true);
                echo "\" class=\"avatar rounded\" alt=\"...\"></a> <b><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($context["notification"], "expediteur", array()), "username", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["notification"], "expediteur", array()), "username", array()), "html", null, true);
                echo "</a></b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "message", array()), "html", null, true);
                echo "
                    <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteNotification", array("id" => $this->getAttribute($context["notification"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a></p>
                </div>
            </div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </ul>
</div>
";
        } else {
            // line 59
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_7aa5e6eec461c623312d2da75fb188e60c0a756bec01c8ac7882eea76c7a0633->leave($__internal_7aa5e6eec461c623312d2da75fb188e60c0a756bec01c8ac7882eea76c7a0633_prof);

        
        $__internal_c55313011e5f3e60f9e116fb501528e69bf133e0adfcbcbbc775b737ab900b16->leave($__internal_c55313011e5f3e60f9e116fb501528e69bf133e0adfcbcbbc775b737ab900b16_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/mesNotifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 59,  164 => 56,  153 => 51,  141 => 50,  136 => 47,  132 => 46,  128 => 44,  124 => 42,  122 => 41,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Mes notifications </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('fos_user_profile_show')}}\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes Notifications</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>
<div class=\"page-header col-md-8 col-sm-offset-2\">
    <h4>Notifications</h4>
</div>



<div class=\"notifications col-md-8 col-sm-offset-2\">
{% if notifications == null %}
<h3>Vous n'avez pas de notification.</h3>
{% endif %}
    <ul class=\"notification-list\">

      {% for notification in notifications %}
        <li>
            <div class=\"media\">
                <div class=\"media-body\">
                    <p class=\"media-heading\"><a href=\"{{ path('profilDe', {'username': notification.expediteur.username}) }}\"><img src=\"{{asset('img/avatar/'~ notification.expediteur.avatar.url)}}\" class=\"avatar rounded\" alt=\"...\"></a> <b><a href=\"{{ path('profilDe', {'username': notification.expediteur.username}) }}\">{{notification.expediteur.username}}</a></b> {{notification.message}}
                    <a href=\"{{ path('deleteNotification', {'id': notification.id}) }}\" class=\"btn btn-danger btn-xs pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a></p>
                </div>
            </div>
        </li>
      {% endfor %}
    </ul>
</div>
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock%}
", "utilisateur/mesNotifications.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/mesNotifications.html.twig");
    }
}
