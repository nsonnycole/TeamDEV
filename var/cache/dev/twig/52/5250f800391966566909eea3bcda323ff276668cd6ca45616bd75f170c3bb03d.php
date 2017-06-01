<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_83229c19eb07f26860da2a92699bb55469c57c597fe2cb10e92a09af290b7b5c extends Twig_Template
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
        $__internal_89f524ef702b73cc2fb223ef993a8f76a3f3b51d041b7d62557e51d1c216dadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f524ef702b73cc2fb223ef993a8f76a3f3b51d041b7d62557e51d1c216dadf->enter($__internal_89f524ef702b73cc2fb223ef993a8f76a3f3b51d041b7d62557e51d1c216dadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_48f461abf4b302f0e78b767aab5c48a1b28f392bb224fc8067524a9a20136f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f461abf4b302f0e78b767aab5c48a1b28f392bb224fc8067524a9a20136f84->enter($__internal_48f461abf4b302f0e78b767aab5c48a1b28f392bb224fc8067524a9a20136f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_89f524ef702b73cc2fb223ef993a8f76a3f3b51d041b7d62557e51d1c216dadf->leave($__internal_89f524ef702b73cc2fb223ef993a8f76a3f3b51d041b7d62557e51d1c216dadf_prof);

        
        $__internal_48f461abf4b302f0e78b767aab5c48a1b28f392bb224fc8067524a9a20136f84->leave($__internal_48f461abf4b302f0e78b767aab5c48a1b28f392bb224fc8067524a9a20136f84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
