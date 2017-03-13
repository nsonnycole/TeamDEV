<?php

/* default/profil.html.twig */
class __TwigTemplate_e802b6fcd10ddf48426ea4cf6766f014fe80d8b56d90e0c158a1510de0f91dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/profil.html.twig", 1);
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
        $__internal_6f5d5ecd2d53cbb77e8f02489b3de1bfd77921ebf0f1be47a30b471a7297ada2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5d5ecd2d53cbb77e8f02489b3de1bfd77921ebf0f1be47a30b471a7297ada2->enter($__internal_6f5d5ecd2d53cbb77e8f02489b3de1bfd77921ebf0f1be47a30b471a7297ada2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/profil.html.twig"));

        $__internal_52fcd25a066e01e7a73b5a9378bdd8ace145a0ebc6c2558276a366973e1c1fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fcd25a066e01e7a73b5a9378bdd8ace145a0ebc6c2558276a366973e1c1fe0->enter($__internal_52fcd25a066e01e7a73b5a9378bdd8ace145a0ebc6c2558276a366973e1c1fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5d5ecd2d53cbb77e8f02489b3de1bfd77921ebf0f1be47a30b471a7297ada2->leave($__internal_6f5d5ecd2d53cbb77e8f02489b3de1bfd77921ebf0f1be47a30b471a7297ada2_prof);

        
        $__internal_52fcd25a066e01e7a73b5a9378bdd8ace145a0ebc6c2558276a366973e1c1fe0->leave($__internal_52fcd25a066e01e7a73b5a9378bdd8ace145a0ebc6c2558276a366973e1c1fe0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fca9e9bb07cac9dbf4237c488af3517e868b885ec9d32a31b9e31be4e6352119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca9e9bb07cac9dbf4237c488af3517e868b885ec9d32a31b9e31be4e6352119->enter($__internal_fca9e9bb07cac9dbf4237c488af3517e868b885ec9d32a31b9e31be4e6352119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57f7fc730722dca43a9fdc84815b11be8e4176f87c546c6f0d977202f9e2e8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f7fc730722dca43a9fdc84815b11be8e4176f87c546c6f0d977202f9e2e8d2->enter($__internal_57f7fc730722dca43a9fdc84815b11be8e4176f87c546c6f0d977202f9e2e8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- MAIN IMAGE SECTION -->
<div id=\"portwrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
        <h2>Mon profil</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<div class=\"container\">
  <div class=\"col-lg-12\">
    <div class=\"col-lg-4\">
      <p>Mes actions</p>
      <hr>
      <p>Modifier mon profil</p>
      <p>Mes projets</p>
      <p>Mes projets</p>
    </div>
    <div class=\"col-lg-8\">
        <p>Modification de mon profil</p>
        <hr>
    </div>
  </div>
</div>
";
        
        $__internal_57f7fc730722dca43a9fdc84815b11be8e4176f87c546c6f0d977202f9e2e8d2->leave($__internal_57f7fc730722dca43a9fdc84815b11be8e4176f87c546c6f0d977202f9e2e8d2_prof);

        
        $__internal_fca9e9bb07cac9dbf4237c488af3517e868b885ec9d32a31b9e31be4e6352119->leave($__internal_fca9e9bb07cac9dbf4237c488af3517e868b885ec9d32a31b9e31be4e6352119_prof);

    }

    public function getTemplateName()
    {
        return "default/profil.html.twig";
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
        <h2>Mon profil</h2>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->
<br>
<div class=\"container\">
  <div class=\"col-lg-12\">
    <div class=\"col-lg-4\">
      <p>Mes actions</p>
      <hr>
      <p>Modifier mon profil</p>
      <p>Mes projets</p>
      <p>Mes projets</p>
    </div>
    <div class=\"col-lg-8\">
        <p>Modification de mon profil</p>
        <hr>
    </div>
  </div>
</div>
{% endblock %}
", "default/profil.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/default/profil.html.twig");
    }
}
