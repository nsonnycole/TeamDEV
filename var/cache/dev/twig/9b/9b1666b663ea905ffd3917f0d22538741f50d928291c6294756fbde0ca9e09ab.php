<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9dddc9a9c2dd3ea60ce9122b3e6f720f652f9ebded25b76b2dfbd5366e8845ec extends Twig_Template
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
        $__internal_e13ca32fbc82177cc036007f1f420eeb2ede38df60da11989d4f216a0a78d495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13ca32fbc82177cc036007f1f420eeb2ede38df60da11989d4f216a0a78d495->enter($__internal_e13ca32fbc82177cc036007f1f420eeb2ede38df60da11989d4f216a0a78d495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c08103e9045a486f2feb01f31494afd4135dea697103cde4fe14a24cf2afebc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08103e9045a486f2feb01f31494afd4135dea697103cde4fe14a24cf2afebc9->enter($__internal_c08103e9045a486f2feb01f31494afd4135dea697103cde4fe14a24cf2afebc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e13ca32fbc82177cc036007f1f420eeb2ede38df60da11989d4f216a0a78d495->leave($__internal_e13ca32fbc82177cc036007f1f420eeb2ede38df60da11989d4f216a0a78d495_prof);

        
        $__internal_c08103e9045a486f2feb01f31494afd4135dea697103cde4fe14a24cf2afebc9->leave($__internal_c08103e9045a486f2feb01f31494afd4135dea697103cde4fe14a24cf2afebc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
