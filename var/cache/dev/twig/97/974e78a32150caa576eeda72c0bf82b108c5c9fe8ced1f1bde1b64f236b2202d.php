<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7f6cf7cf6084033c205d6f2cf169d61a2d5840241930bb7df75097ff0f44f49d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_027aff97daec882410e1a76b80a84ef98477c8d4d0900d876155a35942289c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027aff97daec882410e1a76b80a84ef98477c8d4d0900d876155a35942289c18->enter($__internal_027aff97daec882410e1a76b80a84ef98477c8d4d0900d876155a35942289c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a45422af4430e198c796cc14baa6c11732fd91ba22a6d760e885bf6f543fb944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45422af4430e198c796cc14baa6c11732fd91ba22a6d760e885bf6f543fb944->enter($__internal_a45422af4430e198c796cc14baa6c11732fd91ba22a6d760e885bf6f543fb944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027aff97daec882410e1a76b80a84ef98477c8d4d0900d876155a35942289c18->leave($__internal_027aff97daec882410e1a76b80a84ef98477c8d4d0900d876155a35942289c18_prof);

        
        $__internal_a45422af4430e198c796cc14baa6c11732fd91ba22a6d760e885bf6f543fb944->leave($__internal_a45422af4430e198c796cc14baa6c11732fd91ba22a6d760e885bf6f543fb944_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bf08a18c87b76c48a71bb51e9be487c500674ca43564edfa2431b97dda0aa24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf08a18c87b76c48a71bb51e9be487c500674ca43564edfa2431b97dda0aa24->enter($__internal_7bf08a18c87b76c48a71bb51e9be487c500674ca43564edfa2431b97dda0aa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7142f9c518efbc599135cd5a31adde463e663b2fe22504b42afdfe898df7e97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7142f9c518efbc599135cd5a31adde463e663b2fe22504b42afdfe898df7e97b->enter($__internal_7142f9c518efbc599135cd5a31adde463e663b2fe22504b42afdfe898df7e97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7142f9c518efbc599135cd5a31adde463e663b2fe22504b42afdfe898df7e97b->leave($__internal_7142f9c518efbc599135cd5a31adde463e663b2fe22504b42afdfe898df7e97b_prof);

        
        $__internal_7bf08a18c87b76c48a71bb51e9be487c500674ca43564edfa2431b97dda0aa24->leave($__internal_7bf08a18c87b76c48a71bb51e9be487c500674ca43564edfa2431b97dda0aa24_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
