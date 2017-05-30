<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_f3e70de22195b20d66d51ebd82d8aa60f93abcce4cf14a27480bc6b903fbce44 extends Twig_Template
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
        $__internal_732308357a2a5390b8698e24087b4e848511cac3531ac8cd99db38f9df908034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732308357a2a5390b8698e24087b4e848511cac3531ac8cd99db38f9df908034->enter($__internal_732308357a2a5390b8698e24087b4e848511cac3531ac8cd99db38f9df908034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_9b78f2cd27fbff11441910c57f419a951012d36178da20ca997d8537e34f2c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b78f2cd27fbff11441910c57f419a951012d36178da20ca997d8537e34f2c69->enter($__internal_9b78f2cd27fbff11441910c57f419a951012d36178da20ca997d8537e34f2c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<!-- MAIN IMAGE SECTION -->
";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "<h3 align=\"center\"> Vous êtes déja connecté <br>
<a class=\"btn btn-primary\" href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Accueil</a></h3>
";
        } else {
            // line 7
            echo "<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Connexion</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >

                <div style=\"float:right; font-size: 80%; position: relative; top:-10px\"><a href=\"#\">Mot de passe oublier ?</a></div>
                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      <form action=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\" id=\"loginform\" class=\"form-horizontal\" role=\"form\">
                          ";
            // line 28
            if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
                // line 29
                echo "                              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\" />
                          ";
            }
            // line 31
            echo "
                          <label for=\"username\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                          <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\" />

                          <label for=\"password\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                          <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
                          <br>
                          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                          <label for=\"remember_me\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                          <hr>
                          <input type=\"submit\" id=\"_submit\" class=\"btn btn-success pull-right\" name=\"_submit\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" />

                          <div class=\"form-group\">
                              <div class=\"col-md-12 control\">

                                      Pas encore de compte?
                                  <a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">
                                    S'inscrire!
                                  </a>

                              </div>
                      </form>
                </div>

            </div>

    </div>

  </div>
";
        }
        
        $__internal_732308357a2a5390b8698e24087b4e848511cac3531ac8cd99db38f9df908034->leave($__internal_732308357a2a5390b8698e24087b4e848511cac3531ac8cd99db38f9df908034_prof);

        
        $__internal_9b78f2cd27fbff11441910c57f419a951012d36178da20ca997d8537e34f2c69->leave($__internal_9b78f2cd27fbff11441910c57f419a951012d36178da20ca997d8537e34f2c69_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  96 => 41,  91 => 39,  84 => 35,  79 => 33,  75 => 32,  72 => 31,  66 => 29,  64 => 28,  60 => 27,  38 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
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
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
<h3 align=\"center\"> Vous êtes déja connecté <br>
<a class=\"btn btn-primary\" href=\"{{path('homepage')}}\">Accueil</a></h3>
{% else %}
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Connexion</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >

                <div style=\"float:right; font-size: 80%; position: relative; top:-10px\"><a href=\"#\">Mot de passe oublier ?</a></div>
                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" id=\"loginform\" class=\"form-horizontal\" role=\"form\">
                          {% if csrf_token %}
                              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                          {% endif %}

                          <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                          <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

                          <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                          <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
                          <br>
                          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                          <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                          <hr>
                          <input type=\"submit\" id=\"_submit\" class=\"btn btn-success pull-right\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />

                          <div class=\"form-group\">
                              <div class=\"col-md-12 control\">

                                      Pas encore de compte?
                                  <a href=\"{{path('fos_user_registration_register')}}\">
                                    S'inscrire!
                                  </a>

                              </div>
                      </form>
                </div>

            </div>

    </div>

  </div>
{% endif %}
", "@FOSUser/Security/login_content.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
