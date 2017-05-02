<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_e68f48f4e9db75f70278f8866bc037906432f3d27ef561090b731626fdb4a5da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_c7333a767a05aeedf451d064a3bbdf0f24b650848f119b5376fa29991c4728b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7333a767a05aeedf451d064a3bbdf0f24b650848f119b5376fa29991c4728b4->enter($__internal_c7333a767a05aeedf451d064a3bbdf0f24b650848f119b5376fa29991c4728b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_e50f41d6de9ec7c270b20cda316283736dde4b5944e7b0db2e478f25fef9ffbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50f41d6de9ec7c270b20cda316283736dde4b5944e7b0db2e478f25fef9ffbd->enter($__internal_e50f41d6de9ec7c270b20cda316283736dde4b5944e7b0db2e478f25fef9ffbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7333a767a05aeedf451d064a3bbdf0f24b650848f119b5376fa29991c4728b4->leave($__internal_c7333a767a05aeedf451d064a3bbdf0f24b650848f119b5376fa29991c4728b4_prof);

        
        $__internal_e50f41d6de9ec7c270b20cda316283736dde4b5944e7b0db2e478f25fef9ffbd->leave($__internal_e50f41d6de9ec7c270b20cda316283736dde4b5944e7b0db2e478f25fef9ffbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ac93edd2bf4457e0923120e20c84fc84aea2a9775ee693e3f581a0a83b049fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac93edd2bf4457e0923120e20c84fc84aea2a9775ee693e3f581a0a83b049fc->enter($__internal_7ac93edd2bf4457e0923120e20c84fc84aea2a9775ee693e3f581a0a83b049fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5e3f5ea8fb220f262e5cf3be53808930aadf297cca1b64f13a2a8440f38d15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e3f5ea8fb220f262e5cf3be53808930aadf297cca1b64f13a2a8440f38d15f->enter($__internal_b5e3f5ea8fb220f262e5cf3be53808930aadf297cca1b64f13a2a8440f38d15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b5e3f5ea8fb220f262e5cf3be53808930aadf297cca1b64f13a2a8440f38d15f->leave($__internal_b5e3f5ea8fb220f262e5cf3be53808930aadf297cca1b64f13a2a8440f38d15f_prof);

        
        $__internal_7ac93edd2bf4457e0923120e20c84fc84aea2a9775ee693e3f581a0a83b049fc->leave($__internal_7ac93edd2bf4457e0923120e20c84fc84aea2a9775ee693e3f581a0a83b049fc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
