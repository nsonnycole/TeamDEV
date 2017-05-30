<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c36bf098b45bbae56e3e3da29c311d9d2b0b635553813922a45959d6329aefd9 extends Twig_Template
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
        $__internal_d4867dbc82b0e4826f13de9881b074e9799ef1550a185d40d491772f119774ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4867dbc82b0e4826f13de9881b074e9799ef1550a185d40d491772f119774ba->enter($__internal_d4867dbc82b0e4826f13de9881b074e9799ef1550a185d40d491772f119774ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_8b937fb993740387e55d4b7c125ba8752068e720677dabed8df44d0dcad19cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b937fb993740387e55d4b7c125ba8752068e720677dabed8df44d0dcad19cbe->enter($__internal_8b937fb993740387e55d4b7c125ba8752068e720677dabed8df44d0dcad19cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d4867dbc82b0e4826f13de9881b074e9799ef1550a185d40d491772f119774ba->leave($__internal_d4867dbc82b0e4826f13de9881b074e9799ef1550a185d40d491772f119774ba_prof);

        
        $__internal_8b937fb993740387e55d4b7c125ba8752068e720677dabed8df44d0dcad19cbe->leave($__internal_8b937fb993740387e55d4b7c125ba8752068e720677dabed8df44d0dcad19cbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
