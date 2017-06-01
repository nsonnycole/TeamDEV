<?php

/* EasyAdminBundle:default:field_simple_array.html.twig */
class __TwigTemplate_cc37e9a2b1d295cd9fccfb142af77d185ea70a1c20f5657ee7f86a4f4573fa11 extends Twig_Template
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
        $__internal_666f7aba43e6148b94d9101ec150e64a666cb2801aa3727558a8c8278f911268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666f7aba43e6148b94d9101ec150e64a666cb2801aa3727558a8c8278f911268->enter($__internal_666f7aba43e6148b94d9101ec150e64a666cb2801aa3727558a8c8278f911268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_simple_array.html.twig"));

        $__internal_07883feadb1249226948b03bbe9b86a7b9d073604fb5b675e957af0e47561673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07883feadb1249226948b03bbe9b86a7b9d073604fb5b675e957af0e47561673->enter($__internal_07883feadb1249226948b03bbe9b86a7b9d073604fb5b675e957af0e47561673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_simple_array.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 0)) {
                // line 3
                echo "        <ul>
            ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 5
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        </ul>
    ";
            } else {
                // line 9
                echo "        <div class=\"empty collection-empty\">
            ";
                // line 10
                echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "templates", array()), "label_empty", array()));
                echo "
        </div>
    ";
            }
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ", ")), "html", null, true);
            echo "
";
        }
        
        $__internal_666f7aba43e6148b94d9101ec150e64a666cb2801aa3727558a8c8278f911268->leave($__internal_666f7aba43e6148b94d9101ec150e64a666cb2801aa3727558a8c8278f911268_prof);

        
        $__internal_07883feadb1249226948b03bbe9b86a7b9d073604fb5b675e957af0e47561673->leave($__internal_07883feadb1249226948b03bbe9b86a7b9d073604fb5b675e957af0e47561673_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_simple_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 10,  50 => 9,  46 => 7,  37 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
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
    {% if value|length > 0 %}
        <ul>
            {% for element in value %}
                <li>{{ element }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div class=\"empty collection-empty\">
            {{ include(entity_config.templates.label_empty) }}
        </div>
    {% endif %}
{% else %}
    {{ value|join(', ')|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_simple_array.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_simple_array.html.twig");
    }
}
