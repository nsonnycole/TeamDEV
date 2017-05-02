<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_48c9ff21b870607c42bc11d1aa8262897c0daa1b9f574b77c85835d0ee1a6284 extends Twig_Template
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
        $__internal_bda8f0e80d9c8ac3a80adbe7a2e6990d11ca1c628ddb153067ac5e09cda05387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda8f0e80d9c8ac3a80adbe7a2e6990d11ca1c628ddb153067ac5e09cda05387->enter($__internal_bda8f0e80d9c8ac3a80adbe7a2e6990d11ca1c628ddb153067ac5e09cda05387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_179fb5e154d2b0518b01d2dbfec68c88688a38350506a91573f8e06f435dba58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179fb5e154d2b0518b01d2dbfec68c88688a38350506a91573f8e06f435dba58->enter($__internal_179fb5e154d2b0518b01d2dbfec68c88688a38350506a91573f8e06f435dba58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_bda8f0e80d9c8ac3a80adbe7a2e6990d11ca1c628ddb153067ac5e09cda05387->leave($__internal_bda8f0e80d9c8ac3a80adbe7a2e6990d11ca1c628ddb153067ac5e09cda05387_prof);

        
        $__internal_179fb5e154d2b0518b01d2dbfec68c88688a38350506a91573f8e06f435dba58->leave($__internal_179fb5e154d2b0518b01d2dbfec68c88688a38350506a91573f8e06f435dba58_prof);

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
", "TwigBundle:Exception:error.css.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
