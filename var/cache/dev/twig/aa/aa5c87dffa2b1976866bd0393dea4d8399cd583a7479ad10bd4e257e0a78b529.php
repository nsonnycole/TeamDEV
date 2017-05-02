<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_36567d2fc53a238baf54c4f44123e74ca5d2fdbe29b629a662f69c550d3d8cfc extends Twig_Template
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
        $__internal_df56c81f204747c476c074624bfe50185e36ec9a624f047210be755c541dbb49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df56c81f204747c476c074624bfe50185e36ec9a624f047210be755c541dbb49->enter($__internal_df56c81f204747c476c074624bfe50185e36ec9a624f047210be755c541dbb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_219de0b0dcc3cace91bd91378f6a080330a7caff8410e2ccf5ed3a3b8e044f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219de0b0dcc3cace91bd91378f6a080330a7caff8410e2ccf5ed3a3b8e044f31->enter($__internal_219de0b0dcc3cace91bd91378f6a080330a7caff8410e2ccf5ed3a3b8e044f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_df56c81f204747c476c074624bfe50185e36ec9a624f047210be755c541dbb49->leave($__internal_df56c81f204747c476c074624bfe50185e36ec9a624f047210be755c541dbb49_prof);

        
        $__internal_219de0b0dcc3cace91bd91378f6a080330a7caff8410e2ccf5ed3a3b8e044f31->leave($__internal_219de0b0dcc3cace91bd91378f6a080330a7caff8410e2ccf5ed3a3b8e044f31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
