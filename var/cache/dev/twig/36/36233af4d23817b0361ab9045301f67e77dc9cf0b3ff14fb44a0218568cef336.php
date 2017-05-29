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
        $__internal_46984a2e39472aa51093f15fb0c0b335ce328a6eac289ad14d353af681659e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46984a2e39472aa51093f15fb0c0b335ce328a6eac289ad14d353af681659e3d->enter($__internal_46984a2e39472aa51093f15fb0c0b335ce328a6eac289ad14d353af681659e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_e65bcd3e9c4be5ecb35ae4bdc4b31c6387b82bd604f57ce97040d65c0042e125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65bcd3e9c4be5ecb35ae4bdc4b31c6387b82bd604f57ce97040d65c0042e125->enter($__internal_e65bcd3e9c4be5ecb35ae4bdc4b31c6387b82bd604f57ce97040d65c0042e125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46984a2e39472aa51093f15fb0c0b335ce328a6eac289ad14d353af681659e3d->leave($__internal_46984a2e39472aa51093f15fb0c0b335ce328a6eac289ad14d353af681659e3d_prof);

        
        $__internal_e65bcd3e9c4be5ecb35ae4bdc4b31c6387b82bd604f57ce97040d65c0042e125->leave($__internal_e65bcd3e9c4be5ecb35ae4bdc4b31c6387b82bd604f57ce97040d65c0042e125_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_66e73259a55448d98481ab2d3ffaaec8048fd124c95663a6d0e2b0b20e616822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e73259a55448d98481ab2d3ffaaec8048fd124c95663a6d0e2b0b20e616822->enter($__internal_66e73259a55448d98481ab2d3ffaaec8048fd124c95663a6d0e2b0b20e616822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43fc6761a90ef15406919f39d9384de68d2112c8080545452387213872aa7347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fc6761a90ef15406919f39d9384de68d2112c8080545452387213872aa7347->enter($__internal_43fc6761a90ef15406919f39d9384de68d2112c8080545452387213872aa7347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_43fc6761a90ef15406919f39d9384de68d2112c8080545452387213872aa7347->leave($__internal_43fc6761a90ef15406919f39d9384de68d2112c8080545452387213872aa7347_prof);

        
        $__internal_66e73259a55448d98481ab2d3ffaaec8048fd124c95663a6d0e2b0b20e616822->leave($__internal_66e73259a55448d98481ab2d3ffaaec8048fd124c95663a6d0e2b0b20e616822_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6407a800180ed7fe5d91500e1309e5498a414468bcbff5d28c60d83531c208df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6407a800180ed7fe5d91500e1309e5498a414468bcbff5d28c60d83531c208df->enter($__internal_6407a800180ed7fe5d91500e1309e5498a414468bcbff5d28c60d83531c208df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c876ff2eb82cf4370668cae7acc8c8f82c6ba574c7e4763a238990bc45f37e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c876ff2eb82cf4370668cae7acc8c8f82c6ba574c7e4763a238990bc45f37e26->enter($__internal_c876ff2eb82cf4370668cae7acc8c8f82c6ba574c7e4763a238990bc45f37e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c876ff2eb82cf4370668cae7acc8c8f82c6ba574c7e4763a238990bc45f37e26->leave($__internal_c876ff2eb82cf4370668cae7acc8c8f82c6ba574c7e4763a238990bc45f37e26_prof);

        
        $__internal_6407a800180ed7fe5d91500e1309e5498a414468bcbff5d28c60d83531c208df->leave($__internal_6407a800180ed7fe5d91500e1309e5498a414468bcbff5d28c60d83531c208df_prof);

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
