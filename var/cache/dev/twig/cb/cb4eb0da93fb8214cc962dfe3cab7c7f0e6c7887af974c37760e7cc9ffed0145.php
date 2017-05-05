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
        $__internal_9957af485978e1b5a7f6e54c80e435a83146e6aaadee3654d52af9a3ace55159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9957af485978e1b5a7f6e54c80e435a83146e6aaadee3654d52af9a3ace55159->enter($__internal_9957af485978e1b5a7f6e54c80e435a83146e6aaadee3654d52af9a3ace55159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_9655e2a8146df438b3c6c2347f3f25f3e25308bf4371d8bc79c2b05a6a414c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9655e2a8146df438b3c6c2347f3f25f3e25308bf4371d8bc79c2b05a6a414c5e->enter($__internal_9655e2a8146df438b3c6c2347f3f25f3e25308bf4371d8bc79c2b05a6a414c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9957af485978e1b5a7f6e54c80e435a83146e6aaadee3654d52af9a3ace55159->leave($__internal_9957af485978e1b5a7f6e54c80e435a83146e6aaadee3654d52af9a3ace55159_prof);

        
        $__internal_9655e2a8146df438b3c6c2347f3f25f3e25308bf4371d8bc79c2b05a6a414c5e->leave($__internal_9655e2a8146df438b3c6c2347f3f25f3e25308bf4371d8bc79c2b05a6a414c5e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed90783504a074ccd603f1b960b4c1dc795ac8597939a25bae706332655b54a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed90783504a074ccd603f1b960b4c1dc795ac8597939a25bae706332655b54a6->enter($__internal_ed90783504a074ccd603f1b960b4c1dc795ac8597939a25bae706332655b54a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_315520dce983a65389cb8ee7dbba4dce4aee9fec0bbcf2d237cd17c4fe963935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315520dce983a65389cb8ee7dbba4dce4aee9fec0bbcf2d237cd17c4fe963935->enter($__internal_315520dce983a65389cb8ee7dbba4dce4aee9fec0bbcf2d237cd17c4fe963935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_315520dce983a65389cb8ee7dbba4dce4aee9fec0bbcf2d237cd17c4fe963935->leave($__internal_315520dce983a65389cb8ee7dbba4dce4aee9fec0bbcf2d237cd17c4fe963935_prof);

        
        $__internal_ed90783504a074ccd603f1b960b4c1dc795ac8597939a25bae706332655b54a6->leave($__internal_ed90783504a074ccd603f1b960b4c1dc795ac8597939a25bae706332655b54a6_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3833d457f5a4443680a62ef0f7a7578dcb420ca596aa4f41e1eca9a4f8928c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3833d457f5a4443680a62ef0f7a7578dcb420ca596aa4f41e1eca9a4f8928c73->enter($__internal_3833d457f5a4443680a62ef0f7a7578dcb420ca596aa4f41e1eca9a4f8928c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e49fde7029581195413f46bf5ea487fab1c723ff0a6c8b6473a47a85e485eb30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49fde7029581195413f46bf5ea487fab1c723ff0a6c8b6473a47a85e485eb30->enter($__internal_e49fde7029581195413f46bf5ea487fab1c723ff0a6c8b6473a47a85e485eb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e49fde7029581195413f46bf5ea487fab1c723ff0a6c8b6473a47a85e485eb30->leave($__internal_e49fde7029581195413f46bf5ea487fab1c723ff0a6c8b6473a47a85e485eb30_prof);

        
        $__internal_3833d457f5a4443680a62ef0f7a7578dcb420ca596aa4f41e1eca9a4f8928c73->leave($__internal_3833d457f5a4443680a62ef0f7a7578dcb420ca596aa4f41e1eca9a4f8928c73_prof);

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
", "@FOSUser/layout.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
