<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_03c74a678bc9471df59b5b5c36ced6270aa09687cd7ea60650f42fe0e258c615 extends Twig_Template
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
        $__internal_4e15dcce994c8b4187976446bb85af0904ad64cdd9e22cce58eb72b2bb4e8e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e15dcce994c8b4187976446bb85af0904ad64cdd9e22cce58eb72b2bb4e8e4f->enter($__internal_4e15dcce994c8b4187976446bb85af0904ad64cdd9e22cce58eb72b2bb4e8e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c907c6e7f5dfa44faec170674d1b8b74aac32407fe0227ed2127b4716ad8c547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c907c6e7f5dfa44faec170674d1b8b74aac32407fe0227ed2127b4716ad8c547->enter($__internal_c907c6e7f5dfa44faec170674d1b8b74aac32407fe0227ed2127b4716ad8c547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_4e15dcce994c8b4187976446bb85af0904ad64cdd9e22cce58eb72b2bb4e8e4f->leave($__internal_4e15dcce994c8b4187976446bb85af0904ad64cdd9e22cce58eb72b2bb4e8e4f_prof);

        
        $__internal_c907c6e7f5dfa44faec170674d1b8b74aac32407fe0227ed2127b4716ad8c547->leave($__internal_c907c6e7f5dfa44faec170674d1b8b74aac32407fe0227ed2127b4716ad8c547_prof);

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
", "TwigBundle:Exception:error.txt.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
