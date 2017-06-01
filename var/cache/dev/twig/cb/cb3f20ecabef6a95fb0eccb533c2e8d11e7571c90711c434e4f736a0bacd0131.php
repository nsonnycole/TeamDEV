<?php

/* utilisateur/mesReseaux.html.twig */
class __TwigTemplate_866ebe4416758b4f49853be7e18ddc7cfbafa0463b0049ddada6c3c6e4f89877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/mesReseaux.html.twig", 1);
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
        $__internal_9edef8f8da8cd55e8f2cf395af6b6db5785979d19cda7c208c479da8d52b02dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9edef8f8da8cd55e8f2cf395af6b6db5785979d19cda7c208c479da8d52b02dc->enter($__internal_9edef8f8da8cd55e8f2cf395af6b6db5785979d19cda7c208c479da8d52b02dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesReseaux.html.twig"));

        $__internal_20ce918ddd5662ece273d1481a7c64dc02a2e63680cafd6e31035f85a4280b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ce918ddd5662ece273d1481a7c64dc02a2e63680cafd6e31035f85a4280b1c->enter($__internal_20ce918ddd5662ece273d1481a7c64dc02a2e63680cafd6e31035f85a4280b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/mesReseaux.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9edef8f8da8cd55e8f2cf395af6b6db5785979d19cda7c208c479da8d52b02dc->leave($__internal_9edef8f8da8cd55e8f2cf395af6b6db5785979d19cda7c208c479da8d52b02dc_prof);

        
        $__internal_20ce918ddd5662ece273d1481a7c64dc02a2e63680cafd6e31035f85a4280b1c->leave($__internal_20ce918ddd5662ece273d1481a7c64dc02a2e63680cafd6e31035f85a4280b1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77f569bf959b4cdd294bc636b0da97e88594e2b413ffd2e26605ff105d437a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f569bf959b4cdd294bc636b0da97e88594e2b413ffd2e26605ff105d437a1a->enter($__internal_77f569bf959b4cdd294bc636b0da97e88594e2b413ffd2e26605ff105d437a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e49d750eea17f34cf4a502922078913ab3d3dcc74e330a5ba4233286d4a96e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e49d750eea17f34cf4a502922078913ab3d3dcc74e330a5ba4233286d4a96e0->enter($__internal_4e49d750eea17f34cf4a502922078913ab3d3dcc74e330a5ba4233286d4a96e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h2>Mes réseaux </h2>
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
  <li class=\"breadcrumb-item active\">Mes réseaux</li>
  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes réseaux <a class=\"pull-right btn btn-primary\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newReseaux");
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau</a></h3>

<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom</td>
    <td>URL </td>
    <td>Action </td>
  </thead>
  <tbody>
";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reseaux"]) ? $context["reseaux"] : $this->getContext($context, "reseaux")));
            foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                // line 49
                echo "  <tr>
    <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["reseau"], "nom", array()), "html", null, true);
                echo "</td>
    <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["reseau"], "pourcentage", array()), "html", null, true);
                echo "%</td>
   <td>
      <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editReseaux", array("id" => $this->getAttribute($context["reseau"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
    </td>
  </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "</tbody>
</table>

</div><!-- row -->
</div>
";
        } else {
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login"));
            echo "
";
        }
        
        $__internal_4e49d750eea17f34cf4a502922078913ab3d3dcc74e330a5ba4233286d4a96e0->leave($__internal_4e49d750eea17f34cf4a502922078913ab3d3dcc74e330a5ba4233286d4a96e0_prof);

        
        $__internal_77f569bf959b4cdd294bc636b0da97e88594e2b413ffd2e26605ff105d437a1a->leave($__internal_77f569bf959b4cdd294bc636b0da97e88594e2b413ffd2e26605ff105d437a1a_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/mesReseaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 63,  158 => 57,  148 => 53,  143 => 51,  139 => 50,  136 => 49,  132 => 48,  118 => 37,  109 => 31,  104 => 29,  100 => 28,  85 => 15,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Mes réseaux </h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<ol class=\"breadcrumb\">
  <li class=\"breadcrumb-item\"><a href=\"{{path('homepage')}}\">Accueil</a></li>
  <li class=\"breadcrumb-item\"><a href=\"{{path('fos_user_profile_show')}}\">Mon profil</a></li>
  <li class=\"breadcrumb-item active\">Mes réseaux</li>
  <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-info pull-right\"><span class=\"glyphicon glyphicon-repeat\"></span> Retour</a>

</ol>

<div class=\"container\">
<div class=\"row col-sm-10 col-sm-offset-1\">
<h3>Listes de mes réseaux <a class=\"pull-right btn btn-primary\" href=\"{{ path('newReseaux') }}\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau</a></h3>

<hr>

<table class=\"table\" id=\"myTable\">
  <thead>
    <td>Nom</td>
    <td>URL </td>
    <td>Action </td>
  </thead>
  <tbody>
{% for reseau in reseaux %}
  <tr>
    <td>{{reseau.nom}}</td>
    <td>{{reseau.pourcentage}}%</td>
   <td>
      <a href=\"{{ path('editReseaux', {'id': reseau.id}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
    </td>
  </tr>
{% endfor %}
</tbody>
</table>

</div><!-- row -->
</div>
{% else %}
{{ render(path('fos_user_security_login')) }}
{% endif %}
{% endblock %}
", "utilisateur/mesReseaux.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/utilisateur/mesReseaux.html.twig");
    }
}
