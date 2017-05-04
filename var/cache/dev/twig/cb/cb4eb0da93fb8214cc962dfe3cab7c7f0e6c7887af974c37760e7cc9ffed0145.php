<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8801941498fd38d5c3a43c9d20b1394ce34d80eff4e99ad7cc0943a1b760e0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b306eefb741ca31ae2ff42fda472192173f35b6be18edf481ff9ee722fcc8d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b306eefb741ca31ae2ff42fda472192173f35b6be18edf481ff9ee722fcc8d7e->enter($__internal_b306eefb741ca31ae2ff42fda472192173f35b6be18edf481ff9ee722fcc8d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_49066b8fa751cf8259cd66333f8c0be5795e3045536ff4c5078302fdc3f09458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49066b8fa751cf8259cd66333f8c0be5795e3045536ff4c5078302fdc3f09458->enter($__internal_49066b8fa751cf8259cd66333f8c0be5795e3045536ff4c5078302fdc3f09458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b306eefb741ca31ae2ff42fda472192173f35b6be18edf481ff9ee722fcc8d7e->leave($__internal_b306eefb741ca31ae2ff42fda472192173f35b6be18edf481ff9ee722fcc8d7e_prof);

        
        $__internal_49066b8fa751cf8259cd66333f8c0be5795e3045536ff4c5078302fdc3f09458->leave($__internal_49066b8fa751cf8259cd66333f8c0be5795e3045536ff4c5078302fdc3f09458_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_14f168828707a73bd28270cdbbae2052356a1ec4feb0af51d85b008cd2232be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f168828707a73bd28270cdbbae2052356a1ec4feb0af51d85b008cd2232be0->enter($__internal_14f168828707a73bd28270cdbbae2052356a1ec4feb0af51d85b008cd2232be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_184987fa93cd1ca2b892df00483856a45a45e90084a5dc463849cc06157a38e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184987fa93cd1ca2b892df00483856a45a45e90084a5dc463849cc06157a38e6->enter($__internal_184987fa93cd1ca2b892df00483856a45a45e90084a5dc463849cc06157a38e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
        <div class=\"container\" style=\"display:inline\">
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>




        <!-- WELCOME SECTION -->
        <div>
            ";
        // line 20
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "
        </div>


";
        
        $__internal_184987fa93cd1ca2b892df00483856a45a45e90084a5dc463849cc06157a38e6->leave($__internal_184987fa93cd1ca2b892df00483856a45a45e90084a5dc463849cc06157a38e6_prof);

        
        $__internal_14f168828707a73bd28270cdbbae2052356a1ec4feb0af51d85b008cd2232be0->leave($__internal_14f168828707a73bd28270cdbbae2052356a1ec4feb0af51d85b008cd2232be0_prof);

    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1151026c5042042acf7d50035f5b11201ba911454454d644061641738105da18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1151026c5042042acf7d50035f5b11201ba911454454d644061641738105da18->enter($__internal_1151026c5042042acf7d50035f5b11201ba911454454d644061641738105da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f907a425fca6ff4eb3a4aa3f0389de92dc9e8c50de0e8c16997517edb1ed6a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f907a425fca6ff4eb3a4aa3f0389de92dc9e8c50de0e8c16997517edb1ed6a70->enter($__internal_f907a425fca6ff4eb3a4aa3f0389de92dc9e8c50de0e8c16997517edb1ed6a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 21
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 22
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "               ";
                if (($context["type"] == "error")) {
                    // line 24
                    echo "                       ";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
               ";
                }
                // line 26
                echo "               ";
                // line 29
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            ";
        
        $__internal_f907a425fca6ff4eb3a4aa3f0389de92dc9e8c50de0e8c16997517edb1ed6a70->leave($__internal_f907a425fca6ff4eb3a4aa3f0389de92dc9e8c50de0e8c16997517edb1ed6a70_prof);

        
        $__internal_1151026c5042042acf7d50035f5b11201ba911454454d644061641738105da18->leave($__internal_1151026c5042042acf7d50035f5b11201ba911454454d644061641738105da18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 31,  140 => 30,  134 => 29,  132 => 26,  126 => 24,  123 => 23,  118 => 22,  113 => 21,  104 => 20,  90 => 32,  88 => 20,  79 => 13,  71 => 11,  65 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

        <div class=\"container\" style=\"display:inline\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>




        <!-- WELCOME SECTION -->
        <div>
            {% block fos_user_content %}
            {% for type, messages in app.session.flashbag.all() %}
               {% for message in messages %}
               {% if type == 'error' %}
                       {{ message }}
               {% endif %}
               {# Or even with css class rendering:
                 <div class=\"flash-{{type}}\">{{message}}</div>
                #}
               {% endfor %}
             {% endfor %}
            {% endblock fos_user_content %}

        </div>


{% endblock  %}
", "@FOSUser/layout.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
