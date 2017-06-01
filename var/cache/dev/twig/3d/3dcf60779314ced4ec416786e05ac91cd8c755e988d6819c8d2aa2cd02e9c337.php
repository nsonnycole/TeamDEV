<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5297807d46217bbd20d28f5bff286dadf7e3e1e59cef352216b7c3bf8bd33ab1 extends Twig_Template
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
        $__internal_310e43160ffbba13002258f5580522836a6e19a61bf5985fe4e213dbf29df8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310e43160ffbba13002258f5580522836a6e19a61bf5985fe4e213dbf29df8af->enter($__internal_310e43160ffbba13002258f5580522836a6e19a61bf5985fe4e213dbf29df8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b49263eae8333c570cea1a75cd2d97d6e2c798139465e12d60735eaf1e6f3984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49263eae8333c570cea1a75cd2d97d6e2c798139465e12d60735eaf1e6f3984->enter($__internal_b49263eae8333c570cea1a75cd2d97d6e2c798139465e12d60735eaf1e6f3984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_310e43160ffbba13002258f5580522836a6e19a61bf5985fe4e213dbf29df8af->leave($__internal_310e43160ffbba13002258f5580522836a6e19a61bf5985fe4e213dbf29df8af_prof);

        
        $__internal_b49263eae8333c570cea1a75cd2d97d6e2c798139465e12d60735eaf1e6f3984->leave($__internal_b49263eae8333c570cea1a75cd2d97d6e2c798139465e12d60735eaf1e6f3984_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
