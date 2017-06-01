<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_40c5f991da10cd4f57660f76ce655c961c2d078474bc49653ee6b204243d1689 extends Twig_Template
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
        $__internal_3f8f9e9c7da7aa2798ba865b2b330119a1e28388d7afba954720ef0348cbf250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8f9e9c7da7aa2798ba865b2b330119a1e28388d7afba954720ef0348cbf250->enter($__internal_3f8f9e9c7da7aa2798ba865b2b330119a1e28388d7afba954720ef0348cbf250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f240159c0946bd951d814adce996c29aa61584fc74b402bca9daf8d6dba45df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f240159c0946bd951d814adce996c29aa61584fc74b402bca9daf8d6dba45df3->enter($__internal_f240159c0946bd951d814adce996c29aa61584fc74b402bca9daf8d6dba45df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_3f8f9e9c7da7aa2798ba865b2b330119a1e28388d7afba954720ef0348cbf250->leave($__internal_3f8f9e9c7da7aa2798ba865b2b330119a1e28388d7afba954720ef0348cbf250_prof);

        
        $__internal_f240159c0946bd951d814adce996c29aa61584fc74b402bca9daf8d6dba45df3->leave($__internal_f240159c0946bd951d814adce996c29aa61584fc74b402bca9daf8d6dba45df3_prof);

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
