<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2a6dd41018eb6e431072277ba5f3866ed19148e0a3987b0e8a6f8a6d220cb35f extends Twig_Template
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
        $__internal_588157a937adc795a3d12afe24500b482511e8e2fa156abe27e14d474802febc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588157a937adc795a3d12afe24500b482511e8e2fa156abe27e14d474802febc->enter($__internal_588157a937adc795a3d12afe24500b482511e8e2fa156abe27e14d474802febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_39966c4640a8b7303e674815ddca2fecca8d4f43dacbbbd2b6ceaa409c5f477a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39966c4640a8b7303e674815ddca2fecca8d4f43dacbbbd2b6ceaa409c5f477a->enter($__internal_39966c4640a8b7303e674815ddca2fecca8d4f43dacbbbd2b6ceaa409c5f477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_588157a937adc795a3d12afe24500b482511e8e2fa156abe27e14d474802febc->leave($__internal_588157a937adc795a3d12afe24500b482511e8e2fa156abe27e14d474802febc_prof);

        
        $__internal_39966c4640a8b7303e674815ddca2fecca8d4f43dacbbbd2b6ceaa409c5f477a->leave($__internal_39966c4640a8b7303e674815ddca2fecca8d4f43dacbbbd2b6ceaa409c5f477a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
