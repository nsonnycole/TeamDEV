<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_cae3b04d7644e36c104cf0b94ad3f26774b547c171f9952813504445bdeeb472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62110f1c0ba9181e1a6939c5c2c28356432284a4a8e96c40e583d545a344cffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62110f1c0ba9181e1a6939c5c2c28356432284a4a8e96c40e583d545a344cffb->enter($__internal_62110f1c0ba9181e1a6939c5c2c28356432284a4a8e96c40e583d545a344cffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_fb0f00987d0441e184fecea6cb7b90e3cbbabadec21f02a289cd9eab42be2446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0f00987d0441e184fecea6cb7b90e3cbbabadec21f02a289cd9eab42be2446->enter($__internal_fb0f00987d0441e184fecea6cb7b90e3cbbabadec21f02a289cd9eab42be2446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Mon profil </h2>
        <div style=\"color:white\">
            <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>

<div class=\"container\">
  <div class=\"col-lg-12\">
    <div class=\"col-lg-10 col-sm-offset-1\">
      <h3 align=\"center\">Mes actions</h3>
      <hr>
      <div align=\"center\">
      <button class=\"btn btn-primary \" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" >Modifier mon profil</button>
      <button class=\"btn btn-primary\">Mes projets</a></button>
      <button class=\"btn btn-primary\">Mes participations</button>
      </div>
    </div>
      <br>
      
    <div class=\"col-lg-10 col-sm-offset-1\">
      <h3 align=\"center\">Mes informations personnelles</h3>
      <hr>
      <div class=\"col-sm-6 col-sm-offset-1\">
      <p> Nom : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
      <p> Prénom : ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
      <p> Date de naissance : ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaiss", array()), "d/m/Y"), "html", null, true);
        echo "</p>
      <p> Adresse : ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>
      <p> Pseudo : ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
      <p> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
      </div>

      <div class=\"col-sm-5\">
      <p> Mes projets : 0</p>
      <p> Mes participations : 0</p>

      </div>


    </div>
  </div>
</div>
";
        
        $__internal_62110f1c0ba9181e1a6939c5c2c28356432284a4a8e96c40e583d545a344cffb->leave($__internal_62110f1c0ba9181e1a6939c5c2c28356432284a4a8e96c40e583d545a344cffb_prof);

        
        $__internal_fb0f00987d0441e184fecea6cb7b90e3cbbabadec21f02a289cd9eab42be2446->leave($__internal_fb0f00987d0441e184fecea6cb7b90e3cbbabadec21f02a289cd9eab42be2446_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  89 => 39,  85 => 38,  81 => 37,  77 => 36,  73 => 35,  59 => 24,  40 => 10,  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Mon profil </h2>
        <div style=\"color:white\">
            <p>{{ 'profile.show.username'|trans }} : {{ user.username }}</p>
            <p>{{ 'profile.show.email'|trans }} : {{ user.email }}</p>
        </div>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>

<div class=\"container\">
  <div class=\"col-lg-12\">
    <div class=\"col-lg-10 col-sm-offset-1\">
      <h3 align=\"center\">Mes actions</h3>
      <hr>
      <div align=\"center\">
      <button class=\"btn btn-primary \" href=\"{{path('fos_user_profile_edit')}}\" >Modifier mon profil</button>
      <button class=\"btn btn-primary\">Mes projets</a></button>
      <button class=\"btn btn-primary\">Mes participations</button>
      </div>
    </div>
      <br>
      
    <div class=\"col-lg-10 col-sm-offset-1\">
      <h3 align=\"center\">Mes informations personnelles</h3>
      <hr>
      <div class=\"col-sm-6 col-sm-offset-1\">
      <p> Nom : {{ user.nom }}</p>
      <p> Prénom : {{ user.prenom }}</p>
      <p> Date de naissance : {{ user.dateNaiss|date(\"d/m/Y\") }}</p>
      <p> Adresse : {{ user.adresse }}</p>
      <p> Pseudo : {{ user.username }}</p>
      <p> {{ 'profile.show.email'|trans }} : {{ user.email }}</p>
      </div>

      <div class=\"col-sm-5\">
      <p> Mes projets : 0</p>
      <p> Mes participations : 0</p>

      </div>


    </div>
  </div>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
