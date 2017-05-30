<?php

/* messages/showMessage.html.twig */
class __TwigTemplate_be3e144a193af9638f6e9cee495b2f034c644b0cb9df5c1a22b86c1947788756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "messages/showMessage.html.twig", 1);
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
        $__internal_6bc3f9e703f67800fd4f4cd16c665a6eecca29fe8ad918ee80238447cc6c0d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc3f9e703f67800fd4f4cd16c665a6eecca29fe8ad918ee80238447cc6c0d56->enter($__internal_6bc3f9e703f67800fd4f4cd16c665a6eecca29fe8ad918ee80238447cc6c0d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "messages/showMessage.html.twig"));

        $__internal_0d834c86ba7bbaf8b49364258a0f9d9a5832a9864127a630a31dc6df1690c1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d834c86ba7bbaf8b49364258a0f9d9a5832a9864127a630a31dc6df1690c1a3->enter($__internal_0d834c86ba7bbaf8b49364258a0f9d9a5832a9864127a630a31dc6df1690c1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "messages/showMessage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc3f9e703f67800fd4f4cd16c665a6eecca29fe8ad918ee80238447cc6c0d56->leave($__internal_6bc3f9e703f67800fd4f4cd16c665a6eecca29fe8ad918ee80238447cc6c0d56_prof);

        
        $__internal_0d834c86ba7bbaf8b49364258a0f9d9a5832a9864127a630a31dc6df1690c1a3->leave($__internal_0d834c86ba7bbaf8b49364258a0f9d9a5832a9864127a630a31dc6df1690c1a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e4cef4a3f1900604a0693d5013c4b91600c23c5b1cf1ad426dc51ac05aa836f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4cef4a3f1900604a0693d5013c4b91600c23c5b1cf1ad426dc51ac05aa836f->enter($__internal_3e4cef4a3f1900604a0693d5013c4b91600c23c5b1cf1ad426dc51ac05aa836f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25d462914a40dd5144d6fae4e4f7fe7d6a8d995ddac8ae2cc0573104868f7def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d462914a40dd5144d6fae4e4f7fe7d6a8d995ddac8ae2cc0573104868f7def->enter($__internal_25d462914a40dd5144d6fae4e4f7fe7d6a8d995ddac8ae2cc0573104868f7def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>consultation message</h2>
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesMessages");
            echo "\">Mes messages</a></li>
  <li class=\"breadcrumb-item active\">Nouveau message</li>
  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">

<div class=\"msg-wrap col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\" id=\"message_1\" >
  <h4>Message</h4>
  <hr>
  <div class=\"media msg \" style=\"background-color:rgba(0, 150, 136, 0.06)\">
      <a class=\"pull-left\" href=\"#\">
          <img class=\"media-object\" data-src=\"holder.js/64x64\" alt=\"64x64\" style=\"width: 70px; height: 70px;\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "ancienMessage", array()), "expediteur", array()), "avatar", array()), "url", array()))), "html", null, true);
            echo "\">
      </a>
      <div class=\" success\">
          <small class=\"pull-right time\"><i class=\"fa fa-clock-o\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "ancienMessage", array()), "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small>
          <h4 class=\"media-heading\"><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "ancienMessage", array()), "expediteur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "ancienMessage", array()), "expediteur", array()), "username", array()), "html", null, true);
            echo "</a></h4>
          <p class=\"col-lg-8\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "ancienMessage", array()), "message", array()), "html", null, true);
            echo "</p>
      </div>
  </div>
       <div class=\"media msg \">
           <a class=\"pull-left\" href=\"#\">
               <img class=\"media-object\" data-src=\"holder.js/64x64\" alt=\"64x64\" style=\"width: 70px; height: 70px;\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "expediteur", array()), "avatar", array()), "url", array()))), "html", null, true);
            echo "\">
           </a>
           <div class=\" success\">
               <small class=\"pull-right time\"><i class=\"fa fa-clock-o\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small>
               <h4 class=\"media-heading\"><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "expediteur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "expediteur", array()), "username", array()), "html", null, true);
            echo "</a></h4>
               <p class=\"col-lg-8\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "message", array()), "html", null, true);
            echo "</p>
           </div>
       </div>
  <hr>
  </div>

    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      <h4>Répondre à <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilDe", array("username" => $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "expediteur", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "expediteur", array()), "username", array()), "html", null, true);
            echo "</a></h4>
      <hr>
      ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
      ";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
            echo "
      ";
            // line 67
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
            echo "
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      ";
            // line 69
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    </div>

";
        } else {
            // line 73
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_25d462914a40dd5144d6fae4e4f7fe7d6a8d995ddac8ae2cc0573104868f7def->leave($__internal_25d462914a40dd5144d6fae4e4f7fe7d6a8d995ddac8ae2cc0573104868f7def_prof);

        
        $__internal_3e4cef4a3f1900604a0693d5013c4b91600c23c5b1cf1ad426dc51ac05aa836f->leave($__internal_3e4cef4a3f1900604a0693d5013c4b91600c23c5b1cf1ad426dc51ac05aa836f_prof);

    }

    public function getTemplateName()
    {
        return "messages/showMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 73,  195 => 69,  191 => 68,  187 => 67,  183 => 66,  179 => 65,  172 => 63,  162 => 56,  156 => 55,  152 => 54,  146 => 51,  138 => 46,  132 => 45,  128 => 44,  122 => 41,  110 => 32,  105 => 30,  101 => 29,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>consultation message</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('mesMessages')}}\">Mes messages</a></li>
  <li class=\"breadcrumb-item active\">Nouveau message</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>
</ol>
<div class=\"container\">

<div class=\"msg-wrap col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\" id=\"message_1\" >
  <h4>Message</h4>
  <hr>
  <div class=\"media msg \" style=\"background-color:rgba(0, 150, 136, 0.06)\">
      <a class=\"pull-left\" href=\"#\">
          <img class=\"media-object\" data-src=\"holder.js/64x64\" alt=\"64x64\" style=\"width: 70px; height: 70px;\" src=\"{{asset('img/avatar/'~message.ancienMessage.expediteur.avatar.url)}}\">
      </a>
      <div class=\" success\">
          <small class=\"pull-right time\"><i class=\"fa fa-clock-o\"></i> {{message.ancienMessage.date|date('Y-m-d H:i:s') }}</small>
          <h4 class=\"media-heading\"><a href=\"{{ path('profilDe', {'username': message.ancienMessage.expediteur.username}) }}\">{{message.ancienMessage.expediteur.username}}</a></h4>
          <p class=\"col-lg-8\">{{message.ancienMessage.message}}</p>
      </div>
  </div>
       <div class=\"media msg \">
           <a class=\"pull-left\" href=\"#\">
               <img class=\"media-object\" data-src=\"holder.js/64x64\" alt=\"64x64\" style=\"width: 70px; height: 70px;\" src=\"{{asset('img/avatar/'~message.expediteur.avatar.url)}}\">
           </a>
           <div class=\" success\">
               <small class=\"pull-right time\"><i class=\"fa fa-clock-o\"></i> {{message.date|date('Y-m-d H:i:s') }}</small>
               <h4 class=\"media-heading\"><a href=\"{{ path('profilDe', {'username': message.expediteur.username}) }}\">{{message.expediteur.username}}</a></h4>
               <p class=\"col-lg-8\">{{message.message}}</p>
           </div>
       </div>
  <hr>
  </div>

    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
      <h4>Répondre à <a href=\"{{ path('profilDe', {'username': message.expediteur.username}) }}\">{{message.expediteur.username}}</a></h4>
      <hr>
      {{ form_start(form) }}
      {{ form_row(form) }}
      {{ form_widget(form.save) }}
      <a onclick=\"return(confirm('Attention vous êtes sur le point d'annuler votre action'));\" href=\"{{path('projets')}}\" class=\"btn btn-warning pull-right\"/> Annuler</a>
      {{ form_end(form) }}
    </div>

{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "messages/showMessage.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/messages/showMessage.html.twig");
    }
}
