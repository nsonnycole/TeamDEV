<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_bc07cac1854b36719c1974d7a4c0707d86ebbf703549c3052c0637060279620d extends Twig_Template
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
        $__internal_fb23fdbc0ba376ad58492669a1eddf888e544aa9341f7f4eb8525a03f966f17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb23fdbc0ba376ad58492669a1eddf888e544aa9341f7f4eb8525a03f966f17d->enter($__internal_fb23fdbc0ba376ad58492669a1eddf888e544aa9341f7f4eb8525a03f966f17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_847958f91ef9a0f06b2c5a5a9985b4c41fb5e0e47336fd7f7c598cc39106e257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847958f91ef9a0f06b2c5a5a9985b4c41fb5e0e47336fd7f7c598cc39106e257->enter($__internal_847958f91ef9a0f06b2c5a5a9985b4c41fb5e0e47336fd7f7c598cc39106e257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_fb23fdbc0ba376ad58492669a1eddf888e544aa9341f7f4eb8525a03f966f17d->leave($__internal_fb23fdbc0ba376ad58492669a1eddf888e544aa9341f7f4eb8525a03f966f17d_prof);

        
        $__internal_847958f91ef9a0f06b2c5a5a9985b4c41fb5e0e47336fd7f7c598cc39106e257->leave($__internal_847958f91ef9a0f06b2c5a5a9985b4c41fb5e0e47336fd7f7c598cc39106e257_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/label_inaccessible.html.twig");
    }
}
