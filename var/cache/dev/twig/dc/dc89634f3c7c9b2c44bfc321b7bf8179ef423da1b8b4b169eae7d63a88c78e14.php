<?php

/* :default:profil.html.twig */
class __TwigTemplate_e802b6fcd10ddf48426ea4cf6766f014fe80d8b56d90e0c158a1510de0f91dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:profil.html.twig", 1);
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
        $__internal_954258ef223194c384c961987f45cf7fdf75d761538e885b1805cb520ba4392b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954258ef223194c384c961987f45cf7fdf75d761538e885b1805cb520ba4392b->enter($__internal_954258ef223194c384c961987f45cf7fdf75d761538e885b1805cb520ba4392b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:profil.html.twig"));

        $__internal_3dba0df2bbf4ecf726c2d2fcf64bf82c88fc8631b0ff10ab2441bfd999dbe0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dba0df2bbf4ecf726c2d2fcf64bf82c88fc8631b0ff10ab2441bfd999dbe0ec->enter($__internal_3dba0df2bbf4ecf726c2d2fcf64bf82c88fc8631b0ff10ab2441bfd999dbe0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_954258ef223194c384c961987f45cf7fdf75d761538e885b1805cb520ba4392b->leave($__internal_954258ef223194c384c961987f45cf7fdf75d761538e885b1805cb520ba4392b_prof);

        
        $__internal_3dba0df2bbf4ecf726c2d2fcf64bf82c88fc8631b0ff10ab2441bfd999dbe0ec->leave($__internal_3dba0df2bbf4ecf726c2d2fcf64bf82c88fc8631b0ff10ab2441bfd999dbe0ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf44940f78a7e2617ac46c4d554c9927632d1ecc899676a20180228031a4ce15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf44940f78a7e2617ac46c4d554c9927632d1ecc899676a20180228031a4ce15->enter($__internal_bf44940f78a7e2617ac46c4d554c9927632d1ecc899676a20180228031a4ce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2df4afdfeabb7e2b8c5e6c9154a8b7e21325f713c98c00996c42bcc20d55184e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df4afdfeabb7e2b8c5e6c9154a8b7e21325f713c98c00996c42bcc20d55184e->enter($__internal_2df4afdfeabb7e2b8c5e6c9154a8b7e21325f713c98c00996c42bcc20d55184e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2df4afdfeabb7e2b8c5e6c9154a8b7e21325f713c98c00996c42bcc20d55184e->leave($__internal_2df4afdfeabb7e2b8c5e6c9154a8b7e21325f713c98c00996c42bcc20d55184e_prof);

        
        $__internal_bf44940f78a7e2617ac46c4d554c9927632d1ecc899676a20180228031a4ce15->leave($__internal_bf44940f78a7e2617ac46c4d554c9927632d1ecc899676a20180228031a4ce15_prof);

    }

    public function getTemplateName()
    {
        return ":default:profil.html.twig";
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
", ":default:profil.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/default/profil.html.twig");
    }
}
