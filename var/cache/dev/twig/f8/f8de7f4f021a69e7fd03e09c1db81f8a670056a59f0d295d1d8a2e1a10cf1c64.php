<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0d919e088fd22202c44b50e2b000f597d4df5e647bdd289d7dd82fcc09db264b extends Twig_Template
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
        $__internal_e4e7066fe505c4290714a46c612d4c0a48eeb544d8cc3c4befd4e0aa238e0850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e7066fe505c4290714a46c612d4c0a48eeb544d8cc3c4befd4e0aa238e0850->enter($__internal_e4e7066fe505c4290714a46c612d4c0a48eeb544d8cc3c4befd4e0aa238e0850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_bd4d631567035b80906f8c704bc9f6f365dc8af2bd7e43596f9929575a07aa6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4d631567035b80906f8c704bc9f6f365dc8af2bd7e43596f9929575a07aa6e->enter($__internal_bd4d631567035b80906f8c704bc9f6f365dc8af2bd7e43596f9929575a07aa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e4e7066fe505c4290714a46c612d4c0a48eeb544d8cc3c4befd4e0aa238e0850->leave($__internal_e4e7066fe505c4290714a46c612d4c0a48eeb544d8cc3c4befd4e0aa238e0850_prof);

        
        $__internal_bd4d631567035b80906f8c704bc9f6f365dc8af2bd7e43596f9929575a07aa6e->leave($__internal_bd4d631567035b80906f8c704bc9f6f365dc8af2bd7e43596f9929575a07aa6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
