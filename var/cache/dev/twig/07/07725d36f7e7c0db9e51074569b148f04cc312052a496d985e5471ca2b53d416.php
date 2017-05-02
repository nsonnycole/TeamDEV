<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c3ef3cdb069075ca7a1bd60b86864b43bcb95f54bece9611da8e299dccccce16 extends Twig_Template
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
        $__internal_cc80b18dca616817893da9acd5ea1e5474c2effa56af9a036d9d3b959be74a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc80b18dca616817893da9acd5ea1e5474c2effa56af9a036d9d3b959be74a11->enter($__internal_cc80b18dca616817893da9acd5ea1e5474c2effa56af9a036d9d3b959be74a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_c4787f8ae29cffd16f426bc42c353ba17b8eaad73ca9c5fda18b5bf0602e4dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4787f8ae29cffd16f426bc42c353ba17b8eaad73ca9c5fda18b5bf0602e4dde->enter($__internal_c4787f8ae29cffd16f426bc42c353ba17b8eaad73ca9c5fda18b5bf0602e4dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_cc80b18dca616817893da9acd5ea1e5474c2effa56af9a036d9d3b959be74a11->leave($__internal_cc80b18dca616817893da9acd5ea1e5474c2effa56af9a036d9d3b959be74a11_prof);

        
        $__internal_c4787f8ae29cffd16f426bc42c353ba17b8eaad73ca9c5fda18b5bf0602e4dde->leave($__internal_c4787f8ae29cffd16f426bc42c353ba17b8eaad73ca9c5fda18b5bf0602e4dde_prof);

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
", "TwigBundle:Exception:error.xml.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
