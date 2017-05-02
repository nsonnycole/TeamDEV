<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4609f85a8d342efd2327219f28dcdde403280359575d660bfc2a7c34a5ee18d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d1aeab99bade54547580f0d05eb6e4bf5b9e9b2916d86e510047aab744b1b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1aeab99bade54547580f0d05eb6e4bf5b9e9b2916d86e510047aab744b1b3f->enter($__internal_7d1aeab99bade54547580f0d05eb6e4bf5b9e9b2916d86e510047aab744b1b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e9f55d1e625856c2cd3f7e6cca3862ee3868b5c7852db688ed9a1c2bd37112e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f55d1e625856c2cd3f7e6cca3862ee3868b5c7852db688ed9a1c2bd37112e9->enter($__internal_e9f55d1e625856c2cd3f7e6cca3862ee3868b5c7852db688ed9a1c2bd37112e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7d1aeab99bade54547580f0d05eb6e4bf5b9e9b2916d86e510047aab744b1b3f->leave($__internal_7d1aeab99bade54547580f0d05eb6e4bf5b9e9b2916d86e510047aab744b1b3f_prof);

        
        $__internal_e9f55d1e625856c2cd3f7e6cca3862ee3868b5c7852db688ed9a1c2bd37112e9->leave($__internal_e9f55d1e625856c2cd3f7e6cca3862ee3868b5c7852db688ed9a1c2bd37112e9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6ff0f2a70c0346a5699397b8c02cd763e0b6dc0dbf6767ae5d00993b4d947929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff0f2a70c0346a5699397b8c02cd763e0b6dc0dbf6767ae5d00993b4d947929->enter($__internal_6ff0f2a70c0346a5699397b8c02cd763e0b6dc0dbf6767ae5d00993b4d947929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d3d21295923e341ef2b8c12ea845d37af8b3bb62645d896ddf428bd13d7f6850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d21295923e341ef2b8c12ea845d37af8b3bb62645d896ddf428bd13d7f6850->enter($__internal_d3d21295923e341ef2b8c12ea845d37af8b3bb62645d896ddf428bd13d7f6850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d3d21295923e341ef2b8c12ea845d37af8b3bb62645d896ddf428bd13d7f6850->leave($__internal_d3d21295923e341ef2b8c12ea845d37af8b3bb62645d896ddf428bd13d7f6850_prof);

        
        $__internal_6ff0f2a70c0346a5699397b8c02cd763e0b6dc0dbf6767ae5d00993b4d947929->leave($__internal_6ff0f2a70c0346a5699397b8c02cd763e0b6dc0dbf6767ae5d00993b4d947929_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2333ecc192eb1e21977fd7ccd65013bb170b0f0bfb630a6df021f3e5b978a576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2333ecc192eb1e21977fd7ccd65013bb170b0f0bfb630a6df021f3e5b978a576->enter($__internal_2333ecc192eb1e21977fd7ccd65013bb170b0f0bfb630a6df021f3e5b978a576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f7f7ae44dea0367ab97ebfbff56d67839ab64c9396dd823716a58af4a15935d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f7ae44dea0367ab97ebfbff56d67839ab64c9396dd823716a58af4a15935d7->enter($__internal_f7f7ae44dea0367ab97ebfbff56d67839ab64c9396dd823716a58af4a15935d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f7f7ae44dea0367ab97ebfbff56d67839ab64c9396dd823716a58af4a15935d7->leave($__internal_f7f7ae44dea0367ab97ebfbff56d67839ab64c9396dd823716a58af4a15935d7_prof);

        
        $__internal_2333ecc192eb1e21977fd7ccd65013bb170b0f0bfb630a6df021f3e5b978a576->leave($__internal_2333ecc192eb1e21977fd7ccd65013bb170b0f0bfb630a6df021f3e5b978a576_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_47bb37402d7dfa6211385c8ab82a9df2b73b53e4c4e0ed4f19fa41da261c7093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bb37402d7dfa6211385c8ab82a9df2b73b53e4c4e0ed4f19fa41da261c7093->enter($__internal_47bb37402d7dfa6211385c8ab82a9df2b73b53e4c4e0ed4f19fa41da261c7093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_15a63b63862aab451f65b720468f31e5403f2e2de1e1b958deb22234db6431c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a63b63862aab451f65b720468f31e5403f2e2de1e1b958deb22234db6431c7->enter($__internal_15a63b63862aab451f65b720468f31e5403f2e2de1e1b958deb22234db6431c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_15a63b63862aab451f65b720468f31e5403f2e2de1e1b958deb22234db6431c7->leave($__internal_15a63b63862aab451f65b720468f31e5403f2e2de1e1b958deb22234db6431c7_prof);

        
        $__internal_47bb37402d7dfa6211385c8ab82a9df2b73b53e4c4e0ed4f19fa41da261c7093->leave($__internal_47bb37402d7dfa6211385c8ab82a9df2b73b53e4c4e0ed4f19fa41da261c7093_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
