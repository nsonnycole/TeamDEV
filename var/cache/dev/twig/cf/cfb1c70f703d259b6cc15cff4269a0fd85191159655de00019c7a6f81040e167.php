<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_3b09bfbdc721b88b788e623302bda51b6605dc45dc8b07f1564a2fc0fa7a33b5 extends Twig_Template
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
        $__internal_362ebc17d78bd5b16b0016202eca290ed957797e900b63958fdf3d9db149a5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362ebc17d78bd5b16b0016202eca290ed957797e900b63958fdf3d9db149a5c8->enter($__internal_362ebc17d78bd5b16b0016202eca290ed957797e900b63958fdf3d9db149a5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_4ee4b975cca18dad7ae77f40bb8fa02439e91fd589dac878db255f82913b5b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee4b975cca18dad7ae77f40bb8fa02439e91fd589dac878db255f82913b5b42->enter($__internal_4ee4b975cca18dad7ae77f40bb8fa02439e91fd589dac878db255f82913b5b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_362ebc17d78bd5b16b0016202eca290ed957797e900b63958fdf3d9db149a5c8->leave($__internal_362ebc17d78bd5b16b0016202eca290ed957797e900b63958fdf3d9db149a5c8_prof);

        
        $__internal_4ee4b975cca18dad7ae77f40bb8fa02439e91fd589dac878db255f82913b5b42->leave($__internal_4ee4b975cca18dad7ae77f40bb8fa02439e91fd589dac878db255f82913b5b42_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/label_null.html.twig");
    }
}
