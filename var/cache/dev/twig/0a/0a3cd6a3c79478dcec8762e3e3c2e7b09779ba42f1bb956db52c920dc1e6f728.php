<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_82cbf3008da86827a35be38b57a66d43d679fb51beaee4fae4bf1e2c5233efad extends Twig_Template
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
        $__internal_7887c08b766c2ee20fc28011584ecaa240a941a4b82887a469cd348a0b9eaae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7887c08b766c2ee20fc28011584ecaa240a941a4b82887a469cd348a0b9eaae9->enter($__internal_7887c08b766c2ee20fc28011584ecaa240a941a4b82887a469cd348a0b9eaae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e54a8ca94eeffd330158eb3c01e66ec6204e415941d311cff66730ce7db5bc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54a8ca94eeffd330158eb3c01e66ec6204e415941d311cff66730ce7db5bc0c->enter($__internal_e54a8ca94eeffd330158eb3c01e66ec6204e415941d311cff66730ce7db5bc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7887c08b766c2ee20fc28011584ecaa240a941a4b82887a469cd348a0b9eaae9->leave($__internal_7887c08b766c2ee20fc28011584ecaa240a941a4b82887a469cd348a0b9eaae9_prof);

        
        $__internal_e54a8ca94eeffd330158eb3c01e66ec6204e415941d311cff66730ce7db5bc0c->leave($__internal_e54a8ca94eeffd330158eb3c01e66ec6204e415941d311cff66730ce7db5bc0c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_84825408d3cc42965c75359f90228408fd201580c9deb43f82b3d82fb663aaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84825408d3cc42965c75359f90228408fd201580c9deb43f82b3d82fb663aaa8->enter($__internal_84825408d3cc42965c75359f90228408fd201580c9deb43f82b3d82fb663aaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d975e30820ccb8f4cb352d9e608e32a74308daf3557f1f87813a4552915d089a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d975e30820ccb8f4cb352d9e608e32a74308daf3557f1f87813a4552915d089a->enter($__internal_d975e30820ccb8f4cb352d9e608e32a74308daf3557f1f87813a4552915d089a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d975e30820ccb8f4cb352d9e608e32a74308daf3557f1f87813a4552915d089a->leave($__internal_d975e30820ccb8f4cb352d9e608e32a74308daf3557f1f87813a4552915d089a_prof);

        
        $__internal_84825408d3cc42965c75359f90228408fd201580c9deb43f82b3d82fb663aaa8->leave($__internal_84825408d3cc42965c75359f90228408fd201580c9deb43f82b3d82fb663aaa8_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
