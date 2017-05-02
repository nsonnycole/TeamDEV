<?php

/* :default:register.html.twig */
class __TwigTemplate_b4e76d09278152550a89886f369fe9ec22590cf60082183baa051fbcfc284950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:register.html.twig", 1);
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
        $__internal_8e35a73b280462b13df7b1a4fc063658ba3fddc4d2046b408ea54a3c52faabbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e35a73b280462b13df7b1a4fc063658ba3fddc4d2046b408ea54a3c52faabbf->enter($__internal_8e35a73b280462b13df7b1a4fc063658ba3fddc4d2046b408ea54a3c52faabbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:register.html.twig"));

        $__internal_358c82df1618efdd02ae1a0f83ccf34bee3e7a226ff86782d2a6d9652e58a6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358c82df1618efdd02ae1a0f83ccf34bee3e7a226ff86782d2a6d9652e58a6c5->enter($__internal_358c82df1618efdd02ae1a0f83ccf34bee3e7a226ff86782d2a6d9652e58a6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e35a73b280462b13df7b1a4fc063658ba3fddc4d2046b408ea54a3c52faabbf->leave($__internal_8e35a73b280462b13df7b1a4fc063658ba3fddc4d2046b408ea54a3c52faabbf_prof);

        
        $__internal_358c82df1618efdd02ae1a0f83ccf34bee3e7a226ff86782d2a6d9652e58a6c5->leave($__internal_358c82df1618efdd02ae1a0f83ccf34bee3e7a226ff86782d2a6d9652e58a6c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7224e35dba13f1110f3cef284c7929b36c5cd02bda8ebd5ae66ecd38d34bd0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7224e35dba13f1110f3cef284c7929b36c5cd02bda8ebd5ae66ecd38d34bd0e3->enter($__internal_7224e35dba13f1110f3cef284c7929b36c5cd02bda8ebd5ae66ecd38d34bd0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1430663f9330ae0984850fd6fe11168578ad6ee950b595cb1a3e2d9561a9c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1430663f9330ae0984850fd6fe11168578ad6ee950b595cb1a3e2d9561a9c7d->enter($__internal_e1430663f9330ae0984850fd6fe11168578ad6ee950b595cb1a3e2d9561a9c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Inscription</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >

                <div style=\"float:right; font-size: 80%; position: relative; top:-10px\"><a href=\"#\">Se connecter</a></div>
                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      <form id=\"loginform\" class=\"form-horizontal\" role=\"form\">
                                  <div class=\"col-sm-12 controls\">
                                    <a id=\"btn-login\" style=\"float:right\"href=\"#\" class=\"btn btn-success\">S'inscrire </a>

                                  </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"col-md-12 control\">
                                      <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >
                                          déja inscrit?
                                      <a href=\"{path('login')}\">
                                        Connectez-vous
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
        
        $__internal_e1430663f9330ae0984850fd6fe11168578ad6ee950b595cb1a3e2d9561a9c7d->leave($__internal_e1430663f9330ae0984850fd6fe11168578ad6ee950b595cb1a3e2d9561a9c7d_prof);

        
        $__internal_7224e35dba13f1110f3cef284c7929b36c5cd02bda8ebd5ae66ecd38d34bd0e3->leave($__internal_7224e35dba13f1110f3cef284c7929b36c5cd02bda8ebd5ae66ecd38d34bd0e3_prof);

    }

    public function getTemplateName()
    {
        return ":default:register.html.twig";
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
        <h2>Inscription</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
<div class=\"container\">
      <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
          <div class=\"panel panel-info\" >

                <div style=\"float:right; font-size: 80%; position: relative; top:-10px\"><a href=\"#\">Se connecter</a></div>
                  <div style=\"padding-top:30px\" class=\"panel-body\" >

                      <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                      <form id=\"loginform\" class=\"form-horizontal\" role=\"form\">
                                  <div class=\"col-sm-12 controls\">
                                    <a id=\"btn-login\" style=\"float:right\"href=\"#\" class=\"btn btn-success\">S'inscrire </a>

                                  </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"col-md-12 control\">
                                      <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >
                                          déja inscrit?
                                      <a href=\"{path('login')}\">
                                        Connectez-vous
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
", ":default:register.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/default/register.html.twig");
    }
}
