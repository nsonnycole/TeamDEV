<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_431740342403ceed8158ae4e1a5a013bd157e3eed8ecb53b507118877d985c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4f855d8c358bde401355e973d9b79b9da8b3dea6f0d2540636be97a7b444c3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f855d8c358bde401355e973d9b79b9da8b3dea6f0d2540636be97a7b444c3e2->enter($__internal_4f855d8c358bde401355e973d9b79b9da8b3dea6f0d2540636be97a7b444c3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_fd1b40c152aee0710e88dfbaa00c40009f176b25df7d8013d295fef882b2c344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1b40c152aee0710e88dfbaa00c40009f176b25df7d8013d295fef882b2c344->enter($__internal_fd1b40c152aee0710e88dfbaa00c40009f176b25df7d8013d295fef882b2c344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f855d8c358bde401355e973d9b79b9da8b3dea6f0d2540636be97a7b444c3e2->leave($__internal_4f855d8c358bde401355e973d9b79b9da8b3dea6f0d2540636be97a7b444c3e2_prof);

        
        $__internal_fd1b40c152aee0710e88dfbaa00c40009f176b25df7d8013d295fef882b2c344->leave($__internal_fd1b40c152aee0710e88dfbaa00c40009f176b25df7d8013d295fef882b2c344_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de8716b594b7b49060fbef649190a393dcd3d9a11a2f86657dc5611d04ec562b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8716b594b7b49060fbef649190a393dcd3d9a11a2f86657dc5611d04ec562b->enter($__internal_de8716b594b7b49060fbef649190a393dcd3d9a11a2f86657dc5611d04ec562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4ac15a2134c1447703b082771118381d5e457986066664fec01297454a4854ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac15a2134c1447703b082771118381d5e457986066664fec01297454a4854ad->enter($__internal_4ac15a2134c1447703b082771118381d5e457986066664fec01297454a4854ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4ac15a2134c1447703b082771118381d5e457986066664fec01297454a4854ad->leave($__internal_4ac15a2134c1447703b082771118381d5e457986066664fec01297454a4854ad_prof);

        
        $__internal_de8716b594b7b49060fbef649190a393dcd3d9a11a2f86657dc5611d04ec562b->leave($__internal_de8716b594b7b49060fbef649190a393dcd3d9a11a2f86657dc5611d04ec562b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
