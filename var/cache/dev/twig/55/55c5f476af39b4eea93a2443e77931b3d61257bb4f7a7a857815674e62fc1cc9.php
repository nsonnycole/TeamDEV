<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_d114fda5488505cf5c0bd23c5cbec729efb9b941ad759b28cbbc9b6442e44984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_8b99179e787de98ee7c083fecfb0e457df66e3369bfd55935dc1eb0603af75ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b99179e787de98ee7c083fecfb0e457df66e3369bfd55935dc1eb0603af75ee->enter($__internal_8b99179e787de98ee7c083fecfb0e457df66e3369bfd55935dc1eb0603af75ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e70f3a346951bb3cb03bf0d20c9f7e9795286fb71ba3f71e8c3ca809e065df5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70f3a346951bb3cb03bf0d20c9f7e9795286fb71ba3f71e8c3ca809e065df5f->enter($__internal_e70f3a346951bb3cb03bf0d20c9f7e9795286fb71ba3f71e8c3ca809e065df5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b99179e787de98ee7c083fecfb0e457df66e3369bfd55935dc1eb0603af75ee->leave($__internal_8b99179e787de98ee7c083fecfb0e457df66e3369bfd55935dc1eb0603af75ee_prof);

        
        $__internal_e70f3a346951bb3cb03bf0d20c9f7e9795286fb71ba3f71e8c3ca809e065df5f->leave($__internal_e70f3a346951bb3cb03bf0d20c9f7e9795286fb71ba3f71e8c3ca809e065df5f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2edf7b8125e80360850388e08005184f17dccc8348ee06aaa989e43563b898d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edf7b8125e80360850388e08005184f17dccc8348ee06aaa989e43563b898d2->enter($__internal_2edf7b8125e80360850388e08005184f17dccc8348ee06aaa989e43563b898d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ed60fc9c8ea55b032d47ca160ccfc86c82bf7c899a3bc53c6c7fd70c53285ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed60fc9c8ea55b032d47ca160ccfc86c82bf7c899a3bc53c6c7fd70c53285ab8->enter($__internal_ed60fc9c8ea55b032d47ca160ccfc86c82bf7c899a3bc53c6c7fd70c53285ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ed60fc9c8ea55b032d47ca160ccfc86c82bf7c899a3bc53c6c7fd70c53285ab8->leave($__internal_ed60fc9c8ea55b032d47ca160ccfc86c82bf7c899a3bc53c6c7fd70c53285ab8_prof);

        
        $__internal_2edf7b8125e80360850388e08005184f17dccc8348ee06aaa989e43563b898d2->leave($__internal_2edf7b8125e80360850388e08005184f17dccc8348ee06aaa989e43563b898d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
