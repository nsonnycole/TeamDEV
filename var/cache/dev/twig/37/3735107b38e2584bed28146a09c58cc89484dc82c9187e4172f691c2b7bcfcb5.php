<?php

/* :default:login.html.twig */
class __TwigTemplate_0fb1600badc79ecca6d3affd40951f27a3ed6a06fd036bb0901118ccd4b4854b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:login.html.twig", 1);
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
        $__internal_0ebbb1fe38525bfb2e6479343cf0b6910317a89727a2b572bbd9b5f5b2039f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ebbb1fe38525bfb2e6479343cf0b6910317a89727a2b572bbd9b5f5b2039f80->enter($__internal_0ebbb1fe38525bfb2e6479343cf0b6910317a89727a2b572bbd9b5f5b2039f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        $__internal_d224c7cc387052f051cbf7d1830c5cf8215edd11623671746ed340fd06092bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d224c7cc387052f051cbf7d1830c5cf8215edd11623671746ed340fd06092bdb->enter($__internal_d224c7cc387052f051cbf7d1830c5cf8215edd11623671746ed340fd06092bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ebbb1fe38525bfb2e6479343cf0b6910317a89727a2b572bbd9b5f5b2039f80->leave($__internal_0ebbb1fe38525bfb2e6479343cf0b6910317a89727a2b572bbd9b5f5b2039f80_prof);

        
        $__internal_d224c7cc387052f051cbf7d1830c5cf8215edd11623671746ed340fd06092bdb->leave($__internal_d224c7cc387052f051cbf7d1830c5cf8215edd11623671746ed340fd06092bdb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e959e66d0439cfaad80ae0d39ec4707129cf614007f74584c24cdbde6bac72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e959e66d0439cfaad80ae0d39ec4707129cf614007f74584c24cdbde6bac72b->enter($__internal_6e959e66d0439cfaad80ae0d39ec4707129cf614007f74584c24cdbde6bac72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8404e0c59ccf4eff9ffd2aa664d2353cec585e3f63406f4d8ece5218932f4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8404e0c59ccf4eff9ffd2aa664d2353cec585e3f63406f4d8ece5218932f4a1->enter($__internal_e8404e0c59ccf4eff9ffd2aa664d2353cec585e3f63406f4d8ece5218932f4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
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

                      <form id=\"loginform\" class=\"form-horizontal\" role=\"form\">

                          <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                      <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"username\" value=\"\" placeholder=\"Nom\">
                                  </div>

                          <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                      <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Mot de passe\">
                                  </div>


                                  <div class=\"col-sm-12 controls\">
                                    <a id=\"btn-login\" style=\"float:right\"href=\"#\" class=\"btn btn-success\">Connexion  </a>
                                    <!--<a id=\"btn-fblogin\" href=\"#\" class=\"btn btn-primary\">Login with Facebook</a>-->

                                  </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"col-md-12 control\">
                                      <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >
                                          Pas encore de compte?
                                      <a href=\"{path('register')}\">
                                        S'inscrire!
                                      </a>
                                      </div>
                                  </div>
                              </div>
                          </form>
                          </div>

            </div>

    </div>

  </div>
";
        
        $__internal_e8404e0c59ccf4eff9ffd2aa664d2353cec585e3f63406f4d8ece5218932f4a1->leave($__internal_e8404e0c59ccf4eff9ffd2aa664d2353cec585e3f63406f4d8ece5218932f4a1_prof);

        
        $__internal_6e959e66d0439cfaad80ae0d39ec4707129cf614007f74584c24cdbde6bac72b->leave($__internal_6e959e66d0439cfaad80ae0d39ec4707129cf614007f74584c24cdbde6bac72b_prof);

    }

    public function getTemplateName()
    {
        return ":default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
<!-- MAIN IMAGE SECTION -->
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

                      <form id=\"loginform\" class=\"form-horizontal\" role=\"form\">

                          <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                      <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"username\" value=\"\" placeholder=\"Nom\">
                                  </div>

                          <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                      <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Mot de passe\">
                                  </div>


                                  <div class=\"col-sm-12 controls\">
                                    <a id=\"btn-login\" style=\"float:right\"href=\"#\" class=\"btn btn-success\">Connexion  </a>
                                    <!--<a id=\"btn-fblogin\" href=\"#\" class=\"btn btn-primary\">Login with Facebook</a>-->

                                  </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"col-md-12 control\">
                                      <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >
                                          Pas encore de compte?
                                      <a href=\"{path('register')}\">
                                        S'inscrire!
                                      </a>
                                      </div>
                                  </div>
                              </div>
                          </form>
                          </div>

            </div>

    </div>

  </div>
{% endblock%}
", ":default:login.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/default/login.html.twig");
    }
}
