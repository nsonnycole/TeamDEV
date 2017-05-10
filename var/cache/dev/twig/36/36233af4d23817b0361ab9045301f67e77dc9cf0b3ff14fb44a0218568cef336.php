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
        $__internal_bf48a046c09c000289ed5cd4e464cb320295b51b21da2039c3f5474af56e6263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf48a046c09c000289ed5cd4e464cb320295b51b21da2039c3f5474af56e6263->enter($__internal_bf48a046c09c000289ed5cd4e464cb320295b51b21da2039c3f5474af56e6263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_e7501459a26dd71f736253afcbe694e963d12b6d4c4143b0721fc473b937a559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7501459a26dd71f736253afcbe694e963d12b6d4c4143b0721fc473b937a559->enter($__internal_e7501459a26dd71f736253afcbe694e963d12b6d4c4143b0721fc473b937a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf48a046c09c000289ed5cd4e464cb320295b51b21da2039c3f5474af56e6263->leave($__internal_bf48a046c09c000289ed5cd4e464cb320295b51b21da2039c3f5474af56e6263_prof);

        
        $__internal_e7501459a26dd71f736253afcbe694e963d12b6d4c4143b0721fc473b937a559->leave($__internal_e7501459a26dd71f736253afcbe694e963d12b6d4c4143b0721fc473b937a559_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f13c409c1051f56ee958c396d3157354ae780deeddb9ef340293808c63ff375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f13c409c1051f56ee958c396d3157354ae780deeddb9ef340293808c63ff375->enter($__internal_4f13c409c1051f56ee958c396d3157354ae780deeddb9ef340293808c63ff375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7ed7b0110e26f7980ce9e13d77b0f8d5f99db2fadfc9520c7b459ae34a09bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ed7b0110e26f7980ce9e13d77b0f8d5f99db2fadfc9520c7b459ae34a09bcc->enter($__internal_c7ed7b0110e26f7980ce9e13d77b0f8d5f99db2fadfc9520c7b459ae34a09bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c7ed7b0110e26f7980ce9e13d77b0f8d5f99db2fadfc9520c7b459ae34a09bcc->leave($__internal_c7ed7b0110e26f7980ce9e13d77b0f8d5f99db2fadfc9520c7b459ae34a09bcc_prof);

        
        $__internal_4f13c409c1051f56ee958c396d3157354ae780deeddb9ef340293808c63ff375->leave($__internal_4f13c409c1051f56ee958c396d3157354ae780deeddb9ef340293808c63ff375_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fb01d9b267eb9c30d02565df64b1130a10a5c4b8636ad08bae9d59e756583ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb01d9b267eb9c30d02565df64b1130a10a5c4b8636ad08bae9d59e756583ef->enter($__internal_9fb01d9b267eb9c30d02565df64b1130a10a5c4b8636ad08bae9d59e756583ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5408b063951f55039cae72c69a768103fbc3da62eef0d7aad2c82aaa87bed688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5408b063951f55039cae72c69a768103fbc3da62eef0d7aad2c82aaa87bed688->enter($__internal_5408b063951f55039cae72c69a768103fbc3da62eef0d7aad2c82aaa87bed688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_5408b063951f55039cae72c69a768103fbc3da62eef0d7aad2c82aaa87bed688->leave($__internal_5408b063951f55039cae72c69a768103fbc3da62eef0d7aad2c82aaa87bed688_prof);

        
        $__internal_9fb01d9b267eb9c30d02565df64b1130a10a5c4b8636ad08bae9d59e756583ef->leave($__internal_9fb01d9b267eb9c30d02565df64b1130a10a5c4b8636ad08bae9d59e756583ef_prof);

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
