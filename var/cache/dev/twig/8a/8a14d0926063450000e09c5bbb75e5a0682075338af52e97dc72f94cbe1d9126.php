<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_6764ecd06d6e55f7923b62ea5cb5ba1dc844b606d5756480c26d79e147dd4829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ec96f8ec301e897766689f64a7d57da80fdead5995489f546511b3e251e7518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec96f8ec301e897766689f64a7d57da80fdead5995489f546511b3e251e7518->enter($__internal_4ec96f8ec301e897766689f64a7d57da80fdead5995489f546511b3e251e7518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_da31b5b919fbd04dacaf8115e352a126697f1d4193c072e05bcfdf9823711c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da31b5b919fbd04dacaf8115e352a126697f1d4193c072e05bcfdf9823711c6b->enter($__internal_da31b5b919fbd04dacaf8115e352a126697f1d4193c072e05bcfdf9823711c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_4ec96f8ec301e897766689f64a7d57da80fdead5995489f546511b3e251e7518->leave($__internal_4ec96f8ec301e897766689f64a7d57da80fdead5995489f546511b3e251e7518_prof);

        
        $__internal_da31b5b919fbd04dacaf8115e352a126697f1d4193c072e05bcfdf9823711c6b->leave($__internal_da31b5b919fbd04dacaf8115e352a126697f1d4193c072e05bcfdf9823711c6b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_object.html.twig");
    }
}
