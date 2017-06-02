<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_85abaf2cb07ea3bdce0929760135f0b6fe4d667a98349d6ea67879b5ac4d1ad1 extends Twig_Template
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
        $__internal_af11bac7a3f7f5d7fadafcb39030cbcd34c84f793afccbff569441a0285b4de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af11bac7a3f7f5d7fadafcb39030cbcd34c84f793afccbff569441a0285b4de3->enter($__internal_af11bac7a3f7f5d7fadafcb39030cbcd34c84f793afccbff569441a0285b4de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_bb685d229fbbb9ce7841293e39e54f5343dc18b7a97bde82d1640d6a3da9afc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb685d229fbbb9ce7841293e39e54f5343dc18b7a97bde82d1640d6a3da9afc0->enter($__internal_bb685d229fbbb9ce7841293e39e54f5343dc18b7a97bde82d1640d6a3da9afc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_af11bac7a3f7f5d7fadafcb39030cbcd34c84f793afccbff569441a0285b4de3->leave($__internal_af11bac7a3f7f5d7fadafcb39030cbcd34c84f793afccbff569441a0285b4de3_prof);

        
        $__internal_bb685d229fbbb9ce7841293e39e54f5343dc18b7a97bde82d1640d6a3da9afc0->leave($__internal_bb685d229fbbb9ce7841293e39e54f5343dc18b7a97bde82d1640d6a3da9afc0_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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
", "@EasyAdmin/default/field_string.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_string.html.twig");
    }
}
