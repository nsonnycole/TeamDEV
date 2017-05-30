<?php

/* utilisateur/mesNotifications.html.twig */
class __TwigTemplate_46e4589ac1d750e40dd8c785a24a599fd9771512ff04a8421b38a81c841998ea extends Twig_Template
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
        $__internal_d1838a058258dd52ff1dff8dd45ab127f001543e75f66c573337112086d464eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1838a058258dd52ff1dff8dd45ab127f001543e75f66c573337112086d464eb->enter($__internal_d1838a058258dd52ff1dff8dd45ab127f001543e75f66c573337112086d464eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesNotifications.html.twig"));

        $__internal_e8dd7feb31ab5ab77c79eab53b87275a04c32a65e5473c97ff45556930d4030c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8dd7feb31ab5ab77c79eab53b87275a04c32a65e5473c97ff45556930d4030c->enter($__internal_e8dd7feb31ab5ab77c79eab53b87275a04c32a65e5473c97ff45556930d4030c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesNotifications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1838a058258dd52ff1dff8dd45ab127f001543e75f66c573337112086d464eb->leave($__internal_d1838a058258dd52ff1dff8dd45ab127f001543e75f66c573337112086d464eb_prof);

        
        $__internal_e8dd7feb31ab5ab77c79eab53b87275a04c32a65e5473c97ff45556930d4030c->leave($__internal_e8dd7feb31ab5ab77c79eab53b87275a04c32a65e5473c97ff45556930d4030c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1db46cd6a568edb9f00db2a7d5f07e6b2a348ba0f9a41b4b278bbde957aa856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1db46cd6a568edb9f00db2a7d5f07e6b2a348ba0f9a41b4b278bbde957aa856->enter($__internal_c1db46cd6a568edb9f00db2a7d5f07e6b2a348ba0f9a41b4b278bbde957aa856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a5a3cfa748a60f00fbfed0f0eac9badceb56719ce3108e7c7db0fd66fd8ffbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5a3cfa748a60f00fbfed0f0eac9badceb56719ce3108e7c7db0fd66fd8ffbc->enter($__internal_1a5a3cfa748a60f00fbfed0f0eac9badceb56719ce3108e7c7db0fd66fd8ffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <ul class=\"notification-list\">
      ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 40
                echo "        <li>
            <div class=\"media\">
                <div class=\"media-body\">
                    <p class=\"media-heading\"><a href=\"";
                // line 43
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
                // line 44
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
            // line 49
            echo "    </ul>
</div>
";
        } else {
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_1a5a3cfa748a60f00fbfed0f0eac9badceb56719ce3108e7c7db0fd66fd8ffbc->leave($__internal_1a5a3cfa748a60f00fbfed0f0eac9badceb56719ce3108e7c7db0fd66fd8ffbc_prof);

        
        $__internal_c1db46cd6a568edb9f00db2a7d5f07e6b2a348ba0f9a41b4b278bbde957aa856->leave($__internal_c1db46cd6a568edb9f00db2a7d5f07e6b2a348ba0f9a41b4b278bbde957aa856_prof);

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
        return array (  157 => 52,  152 => 49,  141 => 44,  129 => 43,  124 => 40,  120 => 39,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
