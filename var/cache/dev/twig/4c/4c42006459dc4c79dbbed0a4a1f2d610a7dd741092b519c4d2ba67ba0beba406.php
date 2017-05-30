<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_df43c2877f53bd57c6cf030199639aa7baaa09093f1bc036bbd014bb05f79d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_57d5a8091e962d2375bd160743524ed931cfd8c80bf09094fa3dc1668afee39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d5a8091e962d2375bd160743524ed931cfd8c80bf09094fa3dc1668afee39d->enter($__internal_57d5a8091e962d2375bd160743524ed931cfd8c80bf09094fa3dc1668afee39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5148935da36f1248b760ffe39abbfd3e68a6da0f2c7838c9222c71873d678ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5148935da36f1248b760ffe39abbfd3e68a6da0f2c7838c9222c71873d678ae9->enter($__internal_5148935da36f1248b760ffe39abbfd3e68a6da0f2c7838c9222c71873d678ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57d5a8091e962d2375bd160743524ed931cfd8c80bf09094fa3dc1668afee39d->leave($__internal_57d5a8091e962d2375bd160743524ed931cfd8c80bf09094fa3dc1668afee39d_prof);

        
        $__internal_5148935da36f1248b760ffe39abbfd3e68a6da0f2c7838c9222c71873d678ae9->leave($__internal_5148935da36f1248b760ffe39abbfd3e68a6da0f2c7838c9222c71873d678ae9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fc542b9da59a67079856c2cd70a961be19afc93b0bdd1516054e3dd039e6eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fc542b9da59a67079856c2cd70a961be19afc93b0bdd1516054e3dd039e6eaf->enter($__internal_8fc542b9da59a67079856c2cd70a961be19afc93b0bdd1516054e3dd039e6eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6c83219dbf42df532bb3442f77f93c226417318e3824593345aecac76e732d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c83219dbf42df532bb3442f77f93c226417318e3824593345aecac76e732d30->enter($__internal_6c83219dbf42df532bb3442f77f93c226417318e3824593345aecac76e732d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6c83219dbf42df532bb3442f77f93c226417318e3824593345aecac76e732d30->leave($__internal_6c83219dbf42df532bb3442f77f93c226417318e3824593345aecac76e732d30_prof);

        
        $__internal_8fc542b9da59a67079856c2cd70a961be19afc93b0bdd1516054e3dd039e6eaf->leave($__internal_8fc542b9da59a67079856c2cd70a961be19afc93b0bdd1516054e3dd039e6eaf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
