<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bfd0733323f1af65e152d3957bc4ef9a15bd05e00697ba96af06b67c931d2c0a extends Twig_Template
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
        $__internal_5ccb5d8602553887bfea2c622d0b7f3adb4f27f7c97e025bfe0d6bf05188f676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ccb5d8602553887bfea2c622d0b7f3adb4f27f7c97e025bfe0d6bf05188f676->enter($__internal_5ccb5d8602553887bfea2c622d0b7f3adb4f27f7c97e025bfe0d6bf05188f676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2ab2e4f32d3fe9dc2945ce87a9b526d8f836d5a83f4f522e4726780061b3b85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab2e4f32d3fe9dc2945ce87a9b526d8f836d5a83f4f522e4726780061b3b85a->enter($__internal_2ab2e4f32d3fe9dc2945ce87a9b526d8f836d5a83f4f522e4726780061b3b85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5ccb5d8602553887bfea2c622d0b7f3adb4f27f7c97e025bfe0d6bf05188f676->leave($__internal_5ccb5d8602553887bfea2c622d0b7f3adb4f27f7c97e025bfe0d6bf05188f676_prof);

        
        $__internal_2ab2e4f32d3fe9dc2945ce87a9b526d8f836d5a83f4f522e4726780061b3b85a->leave($__internal_2ab2e4f32d3fe9dc2945ce87a9b526d8f836d5a83f4f522e4726780061b3b85a_prof);

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
", "TwigBundle:Exception:error.json.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
