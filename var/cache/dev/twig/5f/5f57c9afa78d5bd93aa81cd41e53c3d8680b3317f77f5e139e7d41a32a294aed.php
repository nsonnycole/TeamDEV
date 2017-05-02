<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9a88660893e74deadba73e77fbe27353bc7300b8718b92ec8d172b4c273a8b38 extends Twig_Template
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
        $__internal_80b5841938f0eefdc40ac13076fdb49ac5e0053ee974932cf184e358b5518ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b5841938f0eefdc40ac13076fdb49ac5e0053ee974932cf184e358b5518ec4->enter($__internal_80b5841938f0eefdc40ac13076fdb49ac5e0053ee974932cf184e358b5518ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_37cff41099d9767612d3473f3a749915563088c101f1da5cab59a6306fbd675d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cff41099d9767612d3473f3a749915563088c101f1da5cab59a6306fbd675d->enter($__internal_37cff41099d9767612d3473f3a749915563088c101f1da5cab59a6306fbd675d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_80b5841938f0eefdc40ac13076fdb49ac5e0053ee974932cf184e358b5518ec4->leave($__internal_80b5841938f0eefdc40ac13076fdb49ac5e0053ee974932cf184e358b5518ec4_prof);

        
        $__internal_37cff41099d9767612d3473f3a749915563088c101f1da5cab59a6306fbd675d->leave($__internal_37cff41099d9767612d3473f3a749915563088c101f1da5cab59a6306fbd675d_prof);

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
", "TwigBundle:Exception:exception.json.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
