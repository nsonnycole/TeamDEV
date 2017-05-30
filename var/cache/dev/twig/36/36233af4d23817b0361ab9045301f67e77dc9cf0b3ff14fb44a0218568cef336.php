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
        $__internal_c525e9dc9e9b757f6adf0294f0849dda64232ebd1ce9c9c299b218a55e1c047f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c525e9dc9e9b757f6adf0294f0849dda64232ebd1ce9c9c299b218a55e1c047f->enter($__internal_c525e9dc9e9b757f6adf0294f0849dda64232ebd1ce9c9c299b218a55e1c047f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_6fe1cb5b91dab40781e692785b1773ab2a58a5aec3d030de81549c96b0d3cb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe1cb5b91dab40781e692785b1773ab2a58a5aec3d030de81549c96b0d3cb15->enter($__internal_6fe1cb5b91dab40781e692785b1773ab2a58a5aec3d030de81549c96b0d3cb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c525e9dc9e9b757f6adf0294f0849dda64232ebd1ce9c9c299b218a55e1c047f->leave($__internal_c525e9dc9e9b757f6adf0294f0849dda64232ebd1ce9c9c299b218a55e1c047f_prof);

        
        $__internal_6fe1cb5b91dab40781e692785b1773ab2a58a5aec3d030de81549c96b0d3cb15->leave($__internal_6fe1cb5b91dab40781e692785b1773ab2a58a5aec3d030de81549c96b0d3cb15_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac335ad79a4939124b48618a766250f108a528c94c06a78696ca63ddf092a2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac335ad79a4939124b48618a766250f108a528c94c06a78696ca63ddf092a2b5->enter($__internal_ac335ad79a4939124b48618a766250f108a528c94c06a78696ca63ddf092a2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3b74d573c3aeb6a31c04ff7f9de836d6e93688e9315fccc5b015632c8a35145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b74d573c3aeb6a31c04ff7f9de836d6e93688e9315fccc5b015632c8a35145->enter($__internal_b3b74d573c3aeb6a31c04ff7f9de836d6e93688e9315fccc5b015632c8a35145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3b74d573c3aeb6a31c04ff7f9de836d6e93688e9315fccc5b015632c8a35145->leave($__internal_b3b74d573c3aeb6a31c04ff7f9de836d6e93688e9315fccc5b015632c8a35145_prof);

        
        $__internal_ac335ad79a4939124b48618a766250f108a528c94c06a78696ca63ddf092a2b5->leave($__internal_ac335ad79a4939124b48618a766250f108a528c94c06a78696ca63ddf092a2b5_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a70ad2dcae3029c27764875f9963fa7e843f5216b9f1728114ca55f69d6c359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a70ad2dcae3029c27764875f9963fa7e843f5216b9f1728114ca55f69d6c359->enter($__internal_9a70ad2dcae3029c27764875f9963fa7e843f5216b9f1728114ca55f69d6c359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7b4f9f61f4eef58320f34542400367149dacd304e486fdc2f0c5f0dac3ab4513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4f9f61f4eef58320f34542400367149dacd304e486fdc2f0c5f0dac3ab4513->enter($__internal_7b4f9f61f4eef58320f34542400367149dacd304e486fdc2f0c5f0dac3ab4513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7b4f9f61f4eef58320f34542400367149dacd304e486fdc2f0c5f0dac3ab4513->leave($__internal_7b4f9f61f4eef58320f34542400367149dacd304e486fdc2f0c5f0dac3ab4513_prof);

        
        $__internal_9a70ad2dcae3029c27764875f9963fa7e843f5216b9f1728114ca55f69d6c359->leave($__internal_9a70ad2dcae3029c27764875f9963fa7e843f5216b9f1728114ca55f69d6c359_prof);

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
