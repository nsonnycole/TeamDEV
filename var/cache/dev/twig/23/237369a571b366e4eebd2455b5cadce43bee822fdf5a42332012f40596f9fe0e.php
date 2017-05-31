<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_505ceda1b2204d49cd550ac43d4f8c943f71234417aa2e246ee3253becbd29b0 extends Twig_Template
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
        $__internal_6518cf696926aede502e78e5ed76bc06c7b6314b5099f5462e34bb174bf0efb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6518cf696926aede502e78e5ed76bc06c7b6314b5099f5462e34bb174bf0efb3->enter($__internal_6518cf696926aede502e78e5ed76bc06c7b6314b5099f5462e34bb174bf0efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_2bffa89d787966392bb8ec50fdbd29ab8f6e753766a7a7bd73a32c42d3bf7b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bffa89d787966392bb8ec50fdbd29ab8f6e753766a7a7bd73a32c42d3bf7b2f->enter($__internal_2bffa89d787966392bb8ec50fdbd29ab8f6e753766a7a7bd73a32c42d3bf7b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6518cf696926aede502e78e5ed76bc06c7b6314b5099f5462e34bb174bf0efb3->leave($__internal_6518cf696926aede502e78e5ed76bc06c7b6314b5099f5462e34bb174bf0efb3_prof);

        
        $__internal_2bffa89d787966392bb8ec50fdbd29ab8f6e753766a7a7bd73a32c42d3bf7b2f->leave($__internal_2bffa89d787966392bb8ec50fdbd29ab8f6e753766a7a7bd73a32c42d3bf7b2f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4bf358031cc9f0dabb844fad76c50931cee991f643286faeb729c223aed995a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bf358031cc9f0dabb844fad76c50931cee991f643286faeb729c223aed995a->enter($__internal_e4bf358031cc9f0dabb844fad76c50931cee991f643286faeb729c223aed995a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23b1726740f2634c911112822255774cf7db954fda9b6bee0be799fa64b0af31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b1726740f2634c911112822255774cf7db954fda9b6bee0be799fa64b0af31->enter($__internal_23b1726740f2634c911112822255774cf7db954fda9b6bee0be799fa64b0af31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\" style=\"display:inline\">
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><img  width=\"50px;\"src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/avatar/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "url", array()))), "html", null, true);
            echo "\"></a>
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 12
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 14
        echo "</div>
        <!-- WELCOME SECTION -->
        <div>
            ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "
        </div>


";
        
        $__internal_23b1726740f2634c911112822255774cf7db954fda9b6bee0be799fa64b0af31->leave($__internal_23b1726740f2634c911112822255774cf7db954fda9b6bee0be799fa64b0af31_prof);

        
        $__internal_e4bf358031cc9f0dabb844fad76c50931cee991f643286faeb729c223aed995a->leave($__internal_e4bf358031cc9f0dabb844fad76c50931cee991f643286faeb729c223aed995a_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acd9a7fafae23a912ab7473492ca2d9306595ca368a94a72f430699d9476ac3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd9a7fafae23a912ab7473492ca2d9306595ca368a94a72f430699d9476ac3b->enter($__internal_acd9a7fafae23a912ab7473492ca2d9306595ca368a94a72f430699d9476ac3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d968f075f46bb010304c0bc62739847782be46457c36d481d194a61f79a68e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d968f075f46bb010304c0bc62739847782be46457c36d481d194a61f79a68e0b->enter($__internal_d968f075f46bb010304c0bc62739847782be46457c36d481d194a61f79a68e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "               ";
                if (($context["type"] == "error")) {
                    // line 21
                    echo "                       ";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
               ";
                }
                // line 23
                echo "               ";
                // line 26
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            ";
        
        $__internal_d968f075f46bb010304c0bc62739847782be46457c36d481d194a61f79a68e0b->leave($__internal_d968f075f46bb010304c0bc62739847782be46457c36d481d194a61f79a68e0b_prof);

        
        $__internal_acd9a7fafae23a912ab7473492ca2d9306595ca368a94a72f430699d9476ac3b->leave($__internal_acd9a7fafae23a912ab7473492ca2d9306595ca368a94a72f430699d9476ac3b_prof);

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
        return array (  148 => 28,  142 => 27,  136 => 26,  134 => 23,  128 => 21,  125 => 20,  120 => 19,  115 => 18,  106 => 17,  92 => 29,  90 => 17,  85 => 14,  77 => 12,  71 => 9,  67 => 8,  63 => 7,  56 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
        <a href=\"{{path('fos_user_profile_show')}}\"><img  width=\"50px;\"src=\"{{asset('img/avatar/'~app.user.avatar.url)}}\"></a>
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
