<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6514387528e7c296743a4a9f48eb08aa6f94605ca5bc90cb047196e7ea3352b7 extends Twig_Template
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
        $__internal_158293c717182c506ceb5bfd702c59e6522cea2ac6ce23a962092a06c7f0bf3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158293c717182c506ceb5bfd702c59e6522cea2ac6ce23a962092a06c7f0bf3c->enter($__internal_158293c717182c506ceb5bfd702c59e6522cea2ac6ce23a962092a06c7f0bf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_aa36af10b1b59614d2eadde253769c588b4e62648baa00d2e2a2e9a3c8849a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa36af10b1b59614d2eadde253769c588b4e62648baa00d2e2a2e9a3c8849a51->enter($__internal_aa36af10b1b59614d2eadde253769c588b4e62648baa00d2e2a2e9a3c8849a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158293c717182c506ceb5bfd702c59e6522cea2ac6ce23a962092a06c7f0bf3c->leave($__internal_158293c717182c506ceb5bfd702c59e6522cea2ac6ce23a962092a06c7f0bf3c_prof);

        
        $__internal_aa36af10b1b59614d2eadde253769c588b4e62648baa00d2e2a2e9a3c8849a51->leave($__internal_aa36af10b1b59614d2eadde253769c588b4e62648baa00d2e2a2e9a3c8849a51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d974866f7b4ca6b691b7608ad1ce8d3493aa5187d11b4181057c10932bedeb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d974866f7b4ca6b691b7608ad1ce8d3493aa5187d11b4181057c10932bedeb2->enter($__internal_6d974866f7b4ca6b691b7608ad1ce8d3493aa5187d11b4181057c10932bedeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6fc65da750348af10805e8f8effc7d399c4bd1daf45d2873fcc0c99459b71a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc65da750348af10805e8f8effc7d399c4bd1daf45d2873fcc0c99459b71a7d->enter($__internal_6fc65da750348af10805e8f8effc7d399c4bd1daf45d2873fcc0c99459b71a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6fc65da750348af10805e8f8effc7d399c4bd1daf45d2873fcc0c99459b71a7d->leave($__internal_6fc65da750348af10805e8f8effc7d399c4bd1daf45d2873fcc0c99459b71a7d_prof);

        
        $__internal_6d974866f7b4ca6b691b7608ad1ce8d3493aa5187d11b4181057c10932bedeb2->leave($__internal_6d974866f7b4ca6b691b7608ad1ce8d3493aa5187d11b4181057c10932bedeb2_prof);

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
