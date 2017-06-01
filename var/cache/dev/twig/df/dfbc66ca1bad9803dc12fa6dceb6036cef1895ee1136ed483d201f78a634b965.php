<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4c274ff6c1c5f1f232e1fbe202d02c063d52836fa6aa69b47d5b3823acc9bc65 extends Twig_Template
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
        $__internal_1df09ae185fb7675f654f6919e6557ad6f481ee4fbea23f1ce833e23035f3bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df09ae185fb7675f654f6919e6557ad6f481ee4fbea23f1ce833e23035f3bd7->enter($__internal_1df09ae185fb7675f654f6919e6557ad6f481ee4fbea23f1ce833e23035f3bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b768d424f205289576127b63d16409797761c4e5ebb3afa9ad0d2c108a85894a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b768d424f205289576127b63d16409797761c4e5ebb3afa9ad0d2c108a85894a->enter($__internal_b768d424f205289576127b63d16409797761c4e5ebb3afa9ad0d2c108a85894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1df09ae185fb7675f654f6919e6557ad6f481ee4fbea23f1ce833e23035f3bd7->leave($__internal_1df09ae185fb7675f654f6919e6557ad6f481ee4fbea23f1ce833e23035f3bd7_prof);

        
        $__internal_b768d424f205289576127b63d16409797761c4e5ebb3afa9ad0d2c108a85894a->leave($__internal_b768d424f205289576127b63d16409797761c4e5ebb3afa9ad0d2c108a85894a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
