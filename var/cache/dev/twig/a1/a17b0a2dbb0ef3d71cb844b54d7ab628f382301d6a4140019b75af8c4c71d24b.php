<?php

/* EasyAdminBundle:default:field_url.html.twig */
class __TwigTemplate_e908b026d9c29004dd03de9fc3bb5d10a304c11dc75b7d3cf401aca3a723c356 extends Twig_Template
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
        $__internal_d65051e8db07ed8278d5cef586e15854596a173b4aab288437a78c242ab8b63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65051e8db07ed8278d5cef586e15854596a173b4aab288437a78c242ab8b63f->enter($__internal_d65051e8db07ed8278d5cef586e15854596a173b4aab288437a78c242ab8b63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        $__internal_a24e935ef2073275dc0d61a3641c472205966ff62b547b5ebc0f0faa81c8ff37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24e935ef2073275dc0d61a3641c472205966ff62b547b5ebc0f0faa81c8ff37->enter($__internal_a24e935ef2073275dc0d61a3641c472205966ff62b547b5ebc0f0faa81c8ff37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_replace_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_d65051e8db07ed8278d5cef586e15854596a173b4aab288437a78c242ab8b63f->leave($__internal_d65051e8db07ed8278d5cef586e15854596a173b4aab288437a78c242ab8b63f_prof);

        
        $__internal_a24e935ef2073275dc0d61a3641c472205966ff62b547b5ebc0f0faa81c8ff37->leave($__internal_a24e935ef2073275dc0d61a3641c472205966ff62b547b5ebc0f0faa81c8ff37_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
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
    <a target=\"_blank\" href=\"{{ value }}\">{{ value }}</a>
{% else %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_url.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_url.html.twig");
    }
}
