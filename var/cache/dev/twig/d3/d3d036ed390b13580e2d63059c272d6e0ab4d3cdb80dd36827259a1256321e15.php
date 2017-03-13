<?php

/* default/signup.html.twig */
class __TwigTemplate_c3555a357a153e6935a15f88b7afd505ac663de60df3bf2764b5d820fce9a3f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/signup.html.twig", 1);
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
        $__internal_2fc9a1ce5240e009fccd182aca3b2a3f16103ff4e15008e2b03df107e1aa41b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc9a1ce5240e009fccd182aca3b2a3f16103ff4e15008e2b03df107e1aa41b1->enter($__internal_2fc9a1ce5240e009fccd182aca3b2a3f16103ff4e15008e2b03df107e1aa41b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/signup.html.twig"));

        $__internal_6b2f686f504ea4c4b22fb24bdf8a455fc7fbb916ab8b5fadfac52d2ead443387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2f686f504ea4c4b22fb24bdf8a455fc7fbb916ab8b5fadfac52d2ead443387->enter($__internal_6b2f686f504ea4c4b22fb24bdf8a455fc7fbb916ab8b5fadfac52d2ead443387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fc9a1ce5240e009fccd182aca3b2a3f16103ff4e15008e2b03df107e1aa41b1->leave($__internal_2fc9a1ce5240e009fccd182aca3b2a3f16103ff4e15008e2b03df107e1aa41b1_prof);

        
        $__internal_6b2f686f504ea4c4b22fb24bdf8a455fc7fbb916ab8b5fadfac52d2ead443387->leave($__internal_6b2f686f504ea4c4b22fb24bdf8a455fc7fbb916ab8b5fadfac52d2ead443387_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89495343e8e7f40a4d704fef2671bc89374d95fd21edee4cacacc190dfdc3406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89495343e8e7f40a4d704fef2671bc89374d95fd21edee4cacacc190dfdc3406->enter($__internal_89495343e8e7f40a4d704fef2671bc89374d95fd21edee4cacacc190dfdc3406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a07c23087b4c0efbbbb07c73f6afc70c9178a1751c5a6bad7a0f1f562cb8349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a07c23087b4c0efbbbb07c73f6afc70c9178a1751c5a6bad7a0f1f562cb8349->enter($__internal_6a07c23087b4c0efbbbb07c73f6afc70c9178a1751c5a6bad7a0f1f562cb8349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                          Pas encore de compte?
                                      <a href=\"#\">
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
        
        $__internal_6a07c23087b4c0efbbbb07c73f6afc70c9178a1751c5a6bad7a0f1f562cb8349->leave($__internal_6a07c23087b4c0efbbbb07c73f6afc70c9178a1751c5a6bad7a0f1f562cb8349_prof);

        
        $__internal_89495343e8e7f40a4d704fef2671bc89374d95fd21edee4cacacc190dfdc3406->leave($__internal_89495343e8e7f40a4d704fef2671bc89374d95fd21edee4cacacc190dfdc3406_prof);

    }

    public function getTemplateName()
    {
        return "default/signup.html.twig";
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
                                          Pas encore de compte?
                                      <a href=\"#\">
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
", "default/signup.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/default/signup.html.twig");
    }
}
