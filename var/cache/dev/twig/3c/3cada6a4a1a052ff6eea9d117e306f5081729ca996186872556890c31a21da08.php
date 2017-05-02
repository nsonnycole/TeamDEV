<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a5b500ca2818b2f806aeff47e4b56173eb4aa5dfe7acb3625d78734e155122e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4f864c64cdfacf5fe446144a55fab09ebd232cefd1f2fd8f35a16148979a5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f864c64cdfacf5fe446144a55fab09ebd232cefd1f2fd8f35a16148979a5b5->enter($__internal_f4f864c64cdfacf5fe446144a55fab09ebd232cefd1f2fd8f35a16148979a5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_138cf218193228305330bfdd5626b1402f0680782db6f8573861b4a6b173bb9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138cf218193228305330bfdd5626b1402f0680782db6f8573861b4a6b173bb9f->enter($__internal_138cf218193228305330bfdd5626b1402f0680782db6f8573861b4a6b173bb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f864c64cdfacf5fe446144a55fab09ebd232cefd1f2fd8f35a16148979a5b5->leave($__internal_f4f864c64cdfacf5fe446144a55fab09ebd232cefd1f2fd8f35a16148979a5b5_prof);

        
        $__internal_138cf218193228305330bfdd5626b1402f0680782db6f8573861b4a6b173bb9f->leave($__internal_138cf218193228305330bfdd5626b1402f0680782db6f8573861b4a6b173bb9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44697a5aabc9aa74db931152ae35ab6116e861763b099abdae442562f09596fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44697a5aabc9aa74db931152ae35ab6116e861763b099abdae442562f09596fb->enter($__internal_44697a5aabc9aa74db931152ae35ab6116e861763b099abdae442562f09596fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7c93fadf37f2f986bf86c6f5767f338a54737baded73501186436dff35bba26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c93fadf37f2f986bf86c6f5767f338a54737baded73501186436dff35bba26->enter($__internal_c7c93fadf37f2f986bf86c6f5767f338a54737baded73501186436dff35bba26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c7c93fadf37f2f986bf86c6f5767f338a54737baded73501186436dff35bba26->leave($__internal_c7c93fadf37f2f986bf86c6f5767f338a54737baded73501186436dff35bba26_prof);

        
        $__internal_44697a5aabc9aa74db931152ae35ab6116e861763b099abdae442562f09596fb->leave($__internal_44697a5aabc9aa74db931152ae35ab6116e861763b099abdae442562f09596fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
