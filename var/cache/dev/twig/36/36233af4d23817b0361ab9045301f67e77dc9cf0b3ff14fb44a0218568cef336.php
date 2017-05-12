<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d3f00c4b177c6b1cb44816f4e8bc93481e0c8335a805a068559a6c5cb578c499 extends Twig_Template
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
        $__internal_3c0276db6861b90d7732763cb826cce220e3904196cc2b9651b0cbe4d4897fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0276db6861b90d7732763cb826cce220e3904196cc2b9651b0cbe4d4897fd8->enter($__internal_3c0276db6861b90d7732763cb826cce220e3904196cc2b9651b0cbe4d4897fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_cf1253a7b85d1c6221404e957d7f49c75c8712e1b805b5d7d4a342b611af1d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1253a7b85d1c6221404e957d7f49c75c8712e1b805b5d7d4a342b611af1d7f->enter($__internal_cf1253a7b85d1c6221404e957d7f49c75c8712e1b805b5d7d4a342b611af1d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c0276db6861b90d7732763cb826cce220e3904196cc2b9651b0cbe4d4897fd8->leave($__internal_3c0276db6861b90d7732763cb826cce220e3904196cc2b9651b0cbe4d4897fd8_prof);

        
        $__internal_cf1253a7b85d1c6221404e957d7f49c75c8712e1b805b5d7d4a342b611af1d7f->leave($__internal_cf1253a7b85d1c6221404e957d7f49c75c8712e1b805b5d7d4a342b611af1d7f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb141dc2ce244031239e3d36ab0897cdba56d53fb48d49a37cae1b7f7980be52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb141dc2ce244031239e3d36ab0897cdba56d53fb48d49a37cae1b7f7980be52->enter($__internal_eb141dc2ce244031239e3d36ab0897cdba56d53fb48d49a37cae1b7f7980be52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4673cd41777f8ac22a7d177f9b68c2f7d6248d4ab3eabb01e4aab017cf672cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4673cd41777f8ac22a7d177f9b68c2f7d6248d4ab3eabb01e4aab017cf672cde->enter($__internal_4673cd41777f8ac22a7d177f9b68c2f7d6248d4ab3eabb01e4aab017cf672cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\" style=\"display:inline\">
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        ";
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
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 13
        echo "</div>
        <!-- WELCOME SECTION -->
        <div>
            ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "
        </div>


";
        
        $__internal_4673cd41777f8ac22a7d177f9b68c2f7d6248d4ab3eabb01e4aab017cf672cde->leave($__internal_4673cd41777f8ac22a7d177f9b68c2f7d6248d4ab3eabb01e4aab017cf672cde_prof);

        
        $__internal_eb141dc2ce244031239e3d36ab0897cdba56d53fb48d49a37cae1b7f7980be52->leave($__internal_eb141dc2ce244031239e3d36ab0897cdba56d53fb48d49a37cae1b7f7980be52_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_293b72e6d1870112a4bd70ad49f5df4c8ed917d6336b7defd91e3f9e4a9ff8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293b72e6d1870112a4bd70ad49f5df4c8ed917d6336b7defd91e3f9e4a9ff8c6->enter($__internal_293b72e6d1870112a4bd70ad49f5df4c8ed917d6336b7defd91e3f9e4a9ff8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41beb5eca90ea29672755352844251a21817f823c9f95c6d9e0a3070f883e15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41beb5eca90ea29672755352844251a21817f823c9f95c6d9e0a3070f883e15d->enter($__internal_41beb5eca90ea29672755352844251a21817f823c9f95c6d9e0a3070f883e15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 18
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "               ";
                if (($context["type"] == "error")) {
                    // line 20
                    echo "                       ";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
               ";
                }
                // line 22
                echo "               ";
                // line 25
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            ";
        
        $__internal_41beb5eca90ea29672755352844251a21817f823c9f95c6d9e0a3070f883e15d->leave($__internal_41beb5eca90ea29672755352844251a21817f823c9f95c6d9e0a3070f883e15d_prof);

        
        $__internal_293b72e6d1870112a4bd70ad49f5df4c8ed917d6336b7defd91e3f9e4a9ff8c6->leave($__internal_293b72e6d1870112a4bd70ad49f5df4c8ed917d6336b7defd91e3f9e4a9ff8c6_prof);

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
        return array (  142 => 27,  136 => 26,  130 => 25,  128 => 22,  122 => 20,  119 => 19,  114 => 18,  109 => 17,  100 => 16,  86 => 28,  84 => 16,  79 => 13,  71 => 11,  65 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
