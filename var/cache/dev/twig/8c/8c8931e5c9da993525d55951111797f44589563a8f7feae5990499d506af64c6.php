<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_0eeee6364a2f5f6ab4800e8c737bd58cfc8156d9c52a62422796c1b2aa5becc5 extends Twig_Template
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
        $__internal_d5200fad77554e4c47a8bd8fc7aa7850e44872be4bfda1db7e663d48c57e18b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5200fad77554e4c47a8bd8fc7aa7850e44872be4bfda1db7e663d48c57e18b2->enter($__internal_d5200fad77554e4c47a8bd8fc7aa7850e44872be4bfda1db7e663d48c57e18b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_448d10eacc9c38bacd3cb23f29aa1be537b56f61d224bbdd2693ec0a2e35b059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448d10eacc9c38bacd3cb23f29aa1be537b56f61d224bbdd2693ec0a2e35b059->enter($__internal_448d10eacc9c38bacd3cb23f29aa1be537b56f61d224bbdd2693ec0a2e35b059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_d5200fad77554e4c47a8bd8fc7aa7850e44872be4bfda1db7e663d48c57e18b2->leave($__internal_d5200fad77554e4c47a8bd8fc7aa7850e44872be4bfda1db7e663d48c57e18b2_prof);

        
        $__internal_448d10eacc9c38bacd3cb23f29aa1be537b56f61d224bbdd2693ec0a2e35b059->leave($__internal_448d10eacc9c38bacd3cb23f29aa1be537b56f61d224bbdd2693ec0a2e35b059_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_text.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_text.html.twig");
    }
}
