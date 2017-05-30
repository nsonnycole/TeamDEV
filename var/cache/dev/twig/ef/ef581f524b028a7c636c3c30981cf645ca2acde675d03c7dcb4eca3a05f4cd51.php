<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2eff544ccf817e726e5d29d9d78d9ce3b3cea1355772dc5e0929c778b0f020a8 extends Twig_Template
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
        $__internal_3b69042f6248e5d9aa898167d706a7b03d79325c51cc2ff6948e64eb720e891e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b69042f6248e5d9aa898167d706a7b03d79325c51cc2ff6948e64eb720e891e->enter($__internal_3b69042f6248e5d9aa898167d706a7b03d79325c51cc2ff6948e64eb720e891e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a85198e912982abeb35f2f6050886974dcdf71cce3703756993e70af568ac584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85198e912982abeb35f2f6050886974dcdf71cce3703756993e70af568ac584->enter($__internal_a85198e912982abeb35f2f6050886974dcdf71cce3703756993e70af568ac584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3b69042f6248e5d9aa898167d706a7b03d79325c51cc2ff6948e64eb720e891e->leave($__internal_3b69042f6248e5d9aa898167d706a7b03d79325c51cc2ff6948e64eb720e891e_prof);

        
        $__internal_a85198e912982abeb35f2f6050886974dcdf71cce3703756993e70af568ac584->leave($__internal_a85198e912982abeb35f2f6050886974dcdf71cce3703756993e70af568ac584_prof);

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
