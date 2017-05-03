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
        $__internal_ea8cf4587b490adbeb932511784960d450572e60c9cbbcf2f26cc30123912159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8cf4587b490adbeb932511784960d450572e60c9cbbcf2f26cc30123912159->enter($__internal_ea8cf4587b490adbeb932511784960d450572e60c9cbbcf2f26cc30123912159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_493688769b05376394f146648b364a78820b74749138026657cba27786157328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493688769b05376394f146648b364a78820b74749138026657cba27786157328->enter($__internal_493688769b05376394f146648b364a78820b74749138026657cba27786157328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea8cf4587b490adbeb932511784960d450572e60c9cbbcf2f26cc30123912159->leave($__internal_ea8cf4587b490adbeb932511784960d450572e60c9cbbcf2f26cc30123912159_prof);

        
        $__internal_493688769b05376394f146648b364a78820b74749138026657cba27786157328->leave($__internal_493688769b05376394f146648b364a78820b74749138026657cba27786157328_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_250fb5affb4c729d6f356cc029890d8729e363a6804532eb6e61ae263ea664d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250fb5affb4c729d6f356cc029890d8729e363a6804532eb6e61ae263ea664d8->enter($__internal_250fb5affb4c729d6f356cc029890d8729e363a6804532eb6e61ae263ea664d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74452653f6cb9cf63b4f739391541aae54cbebcdd14b1466e39995f98af6e8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74452653f6cb9cf63b4f739391541aae54cbebcdd14b1466e39995f98af6e8e6->enter($__internal_74452653f6cb9cf63b4f739391541aae54cbebcdd14b1466e39995f98af6e8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74452653f6cb9cf63b4f739391541aae54cbebcdd14b1466e39995f98af6e8e6->leave($__internal_74452653f6cb9cf63b4f739391541aae54cbebcdd14b1466e39995f98af6e8e6_prof);

        
        $__internal_250fb5affb4c729d6f356cc029890d8729e363a6804532eb6e61ae263ea664d8->leave($__internal_250fb5affb4c729d6f356cc029890d8729e363a6804532eb6e61ae263ea664d8_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8874e5980fd5fb39a170c05cb0ec55c914b31f4285bf814fc8bde0dc5b344aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8874e5980fd5fb39a170c05cb0ec55c914b31f4285bf814fc8bde0dc5b344aec->enter($__internal_8874e5980fd5fb39a170c05cb0ec55c914b31f4285bf814fc8bde0dc5b344aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0aac0c5312a752fbd05439dd3124a7ba26faf8a1a8c144dc4f63cf02d565601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0aac0c5312a752fbd05439dd3124a7ba26faf8a1a8c144dc4f63cf02d565601->enter($__internal_d0aac0c5312a752fbd05439dd3124a7ba26faf8a1a8c144dc4f63cf02d565601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 29
        echo "            ";
        
        $__internal_d0aac0c5312a752fbd05439dd3124a7ba26faf8a1a8c144dc4f63cf02d565601->leave($__internal_d0aac0c5312a752fbd05439dd3124a7ba26faf8a1a8c144dc4f63cf02d565601_prof);

        
        $__internal_8874e5980fd5fb39a170c05cb0ec55c914b31f4285bf814fc8bde0dc5b344aec->leave($__internal_8874e5980fd5fb39a170c05cb0ec55c914b31f4285bf814fc8bde0dc5b344aec_prof);

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
