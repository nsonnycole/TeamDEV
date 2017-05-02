<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e5b91b5b6efc665ce76f0cbb31a5289e00705c225b681276b1642dbf523d8b24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fac04222a83e341fe56f1ab00fadd6ba7fe737d6ed1c31b943bfd583ede68002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac04222a83e341fe56f1ab00fadd6ba7fe737d6ed1c31b943bfd583ede68002->enter($__internal_fac04222a83e341fe56f1ab00fadd6ba7fe737d6ed1c31b943bfd583ede68002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fe2858dd045175ceadb05400a44d1fd1489df7c5aea8d9b7e5138d85d19fbed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2858dd045175ceadb05400a44d1fd1489df7c5aea8d9b7e5138d85d19fbed2->enter($__internal_fe2858dd045175ceadb05400a44d1fd1489df7c5aea8d9b7e5138d85d19fbed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fac04222a83e341fe56f1ab00fadd6ba7fe737d6ed1c31b943bfd583ede68002->leave($__internal_fac04222a83e341fe56f1ab00fadd6ba7fe737d6ed1c31b943bfd583ede68002_prof);

        
        $__internal_fe2858dd045175ceadb05400a44d1fd1489df7c5aea8d9b7e5138d85d19fbed2->leave($__internal_fe2858dd045175ceadb05400a44d1fd1489df7c5aea8d9b7e5138d85d19fbed2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a3eae5f1fddfbeab52641bb0d4462e5d8df8f1bb9030e9294a8cffc4b4fab80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3eae5f1fddfbeab52641bb0d4462e5d8df8f1bb9030e9294a8cffc4b4fab80->enter($__internal_7a3eae5f1fddfbeab52641bb0d4462e5d8df8f1bb9030e9294a8cffc4b4fab80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f9e60c5d0043b8d5f1d766c25c9445631bfcf7ae3d95f3340b0c93cc17f8688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9e60c5d0043b8d5f1d766c25c9445631bfcf7ae3d95f3340b0c93cc17f8688->enter($__internal_6f9e60c5d0043b8d5f1d766c25c9445631bfcf7ae3d95f3340b0c93cc17f8688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6f9e60c5d0043b8d5f1d766c25c9445631bfcf7ae3d95f3340b0c93cc17f8688->leave($__internal_6f9e60c5d0043b8d5f1d766c25c9445631bfcf7ae3d95f3340b0c93cc17f8688_prof);

        
        $__internal_7a3eae5f1fddfbeab52641bb0d4462e5d8df8f1bb9030e9294a8cffc4b4fab80->leave($__internal_7a3eae5f1fddfbeab52641bb0d4462e5d8df8f1bb9030e9294a8cffc4b4fab80_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
