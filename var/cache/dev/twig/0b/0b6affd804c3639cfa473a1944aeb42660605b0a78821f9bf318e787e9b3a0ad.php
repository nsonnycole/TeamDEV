<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_1ab3e531dc243dcc2de0da2712f8063534dfffb835953ebe642b460337d4a4c2 extends Twig_Template
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
        $__internal_cc07d5db9a2a52f57bc0df022bf99c9c8e0124468e1e53b73a876abbc1efc88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc07d5db9a2a52f57bc0df022bf99c9c8e0124468e1e53b73a876abbc1efc88b->enter($__internal_cc07d5db9a2a52f57bc0df022bf99c9c8e0124468e1e53b73a876abbc1efc88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_82d524cfdcf27a66292841f0dae26b920b0cf8e39885ec92f0ec4b7c32131043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d524cfdcf27a66292841f0dae26b920b0cf8e39885ec92f0ec4b7c32131043->enter($__internal_82d524cfdcf27a66292841f0dae26b920b0cf8e39885ec92f0ec4b7c32131043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_cc07d5db9a2a52f57bc0df022bf99c9c8e0124468e1e53b73a876abbc1efc88b->leave($__internal_cc07d5db9a2a52f57bc0df022bf99c9c8e0124468e1e53b73a876abbc1efc88b_prof);

        
        $__internal_82d524cfdcf27a66292841f0dae26b920b0cf8e39885ec92f0ec4b7c32131043->leave($__internal_82d524cfdcf27a66292841f0dae26b920b0cf8e39885ec92f0ec4b7c32131043_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/label_empty.html.twig");
    }
}
