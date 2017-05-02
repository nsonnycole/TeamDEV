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
        $__internal_b512dd595e7beca3a20a3bf991608924acf15489d8d35f43dec6e57c0a847b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b512dd595e7beca3a20a3bf991608924acf15489d8d35f43dec6e57c0a847b06->enter($__internal_b512dd595e7beca3a20a3bf991608924acf15489d8d35f43dec6e57c0a847b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_462db658b43d9ec6207bd82c94ea6418a88882a0806adeb411346d4c87204530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462db658b43d9ec6207bd82c94ea6418a88882a0806adeb411346d4c87204530->enter($__internal_462db658b43d9ec6207bd82c94ea6418a88882a0806adeb411346d4c87204530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b512dd595e7beca3a20a3bf991608924acf15489d8d35f43dec6e57c0a847b06->leave($__internal_b512dd595e7beca3a20a3bf991608924acf15489d8d35f43dec6e57c0a847b06_prof);

        
        $__internal_462db658b43d9ec6207bd82c94ea6418a88882a0806adeb411346d4c87204530->leave($__internal_462db658b43d9ec6207bd82c94ea6418a88882a0806adeb411346d4c87204530_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b03175cf493d7764198cb0b637f553639bf42f202b9125cf165e8d6ad78949bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03175cf493d7764198cb0b637f553639bf42f202b9125cf165e8d6ad78949bb->enter($__internal_b03175cf493d7764198cb0b637f553639bf42f202b9125cf165e8d6ad78949bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_896c27c649b6edbb1a7523e21b094b6e316c4c80e84487790f28aa5502471971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896c27c649b6edbb1a7523e21b094b6e316c4c80e84487790f28aa5502471971->enter($__internal_896c27c649b6edbb1a7523e21b094b6e316c4c80e84487790f28aa5502471971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "

        <!-- WELCOME SECTION -->
        <div>
            ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "        </div>
";
        
        $__internal_896c27c649b6edbb1a7523e21b094b6e316c4c80e84487790f28aa5502471971->leave($__internal_896c27c649b6edbb1a7523e21b094b6e316c4c80e84487790f28aa5502471971_prof);

        
        $__internal_b03175cf493d7764198cb0b637f553639bf42f202b9125cf165e8d6ad78949bb->leave($__internal_b03175cf493d7764198cb0b637f553639bf42f202b9125cf165e8d6ad78949bb_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_171412a341b5c0cad747ae07c7d8d82d069edf3e4dd378cb170f5e9d676f3e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171412a341b5c0cad747ae07c7d8d82d069edf3e4dd378cb170f5e9d676f3e54->enter($__internal_171412a341b5c0cad747ae07c7d8d82d069edf3e4dd378cb170f5e9d676f3e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e6c908b27de7c394eec4ac94fb434a6c5c49826afab0cb8ac9f8a271463e7686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c908b27de7c394eec4ac94fb434a6c5c49826afab0cb8ac9f8a271463e7686->enter($__internal_e6c908b27de7c394eec4ac94fb434a6c5c49826afab0cb8ac9f8a271463e7686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 29
        echo "            ";
        
        $__internal_e6c908b27de7c394eec4ac94fb434a6c5c49826afab0cb8ac9f8a271463e7686->leave($__internal_e6c908b27de7c394eec4ac94fb434a6c5c49826afab0cb8ac9f8a271463e7686_prof);

        
        $__internal_171412a341b5c0cad747ae07c7d8d82d069edf3e4dd378cb170f5e9d676f3e54->leave($__internal_171412a341b5c0cad747ae07c7d8d82d069edf3e4dd378cb170f5e9d676f3e54_prof);

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
        return array (  146 => 29,  137 => 28,  126 => 30,  124 => 28,  118 => 24,  115 => 23,  109 => 22,  100 => 19,  95 => 18,  90 => 17,  85 => 16,  83 => 15,  79 => 13,  71 => 11,  65 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}


        <!-- WELCOME SECTION -->
        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock  %}
", "@FOSUser/layout.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
