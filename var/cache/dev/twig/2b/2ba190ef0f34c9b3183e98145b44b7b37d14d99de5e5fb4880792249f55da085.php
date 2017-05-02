<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3bf1f5154e27167549df93dca5fccd2c243b5ea4615051bda956a02081d0c24a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fc64862854329ae570efed32a3c0cb335a009f13370914a409a984a40a21d6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc64862854329ae570efed32a3c0cb335a009f13370914a409a984a40a21d6d4->enter($__internal_fc64862854329ae570efed32a3c0cb335a009f13370914a409a984a40a21d6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_cb0fbf0587d5906f21ba0a38dad0cb91ca79f76de635c4bc13f892bc6cff482e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0fbf0587d5906f21ba0a38dad0cb91ca79f76de635c4bc13f892bc6cff482e->enter($__internal_cb0fbf0587d5906f21ba0a38dad0cb91ca79f76de635c4bc13f892bc6cff482e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc64862854329ae570efed32a3c0cb335a009f13370914a409a984a40a21d6d4->leave($__internal_fc64862854329ae570efed32a3c0cb335a009f13370914a409a984a40a21d6d4_prof);

        
        $__internal_cb0fbf0587d5906f21ba0a38dad0cb91ca79f76de635c4bc13f892bc6cff482e->leave($__internal_cb0fbf0587d5906f21ba0a38dad0cb91ca79f76de635c4bc13f892bc6cff482e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_062a5dda6321c032f9806a79c576a18090d6ec2edc7fdd31f2f8efbd11e27811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062a5dda6321c032f9806a79c576a18090d6ec2edc7fdd31f2f8efbd11e27811->enter($__internal_062a5dda6321c032f9806a79c576a18090d6ec2edc7fdd31f2f8efbd11e27811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a963e9d0b5eab1dda8dc33accaa51667b2d21835b9a8915a8935191016190fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a963e9d0b5eab1dda8dc33accaa51667b2d21835b9a8915a8935191016190fec->enter($__internal_a963e9d0b5eab1dda8dc33accaa51667b2d21835b9a8915a8935191016190fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a963e9d0b5eab1dda8dc33accaa51667b2d21835b9a8915a8935191016190fec->leave($__internal_a963e9d0b5eab1dda8dc33accaa51667b2d21835b9a8915a8935191016190fec_prof);

        
        $__internal_062a5dda6321c032f9806a79c576a18090d6ec2edc7fdd31f2f8efbd11e27811->leave($__internal_062a5dda6321c032f9806a79c576a18090d6ec2edc7fdd31f2f8efbd11e27811_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
