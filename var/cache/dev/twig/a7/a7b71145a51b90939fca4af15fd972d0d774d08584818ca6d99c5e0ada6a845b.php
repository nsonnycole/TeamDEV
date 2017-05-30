<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_65a3fe95d02e673f36238fefeb73b963cb369dff14abcdc2a171fed15fcca401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f959a92895b22e1a5b83fe8541e6074576260ad5eae9d10aa48d96d67c330d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f959a92895b22e1a5b83fe8541e6074576260ad5eae9d10aa48d96d67c330d2d->enter($__internal_f959a92895b22e1a5b83fe8541e6074576260ad5eae9d10aa48d96d67c330d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_a9febb9968ee04892a474a8dba05dd5053f7f6ac22c1253137228a05d97d4554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9febb9968ee04892a474a8dba05dd5053f7f6ac22c1253137228a05d97d4554->enter($__internal_a9febb9968ee04892a474a8dba05dd5053f7f6ac22c1253137228a05d97d4554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f959a92895b22e1a5b83fe8541e6074576260ad5eae9d10aa48d96d67c330d2d->leave($__internal_f959a92895b22e1a5b83fe8541e6074576260ad5eae9d10aa48d96d67c330d2d_prof);

        
        $__internal_a9febb9968ee04892a474a8dba05dd5053f7f6ac22c1253137228a05d97d4554->leave($__internal_a9febb9968ee04892a474a8dba05dd5053f7f6ac22c1253137228a05d97d4554_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da4fff3f57ebeacb1c956634a573ec2acb30c9bea87a0ed9eca2aeb237791524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4fff3f57ebeacb1c956634a573ec2acb30c9bea87a0ed9eca2aeb237791524->enter($__internal_da4fff3f57ebeacb1c956634a573ec2acb30c9bea87a0ed9eca2aeb237791524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_68948632cf2f3ee809a3c8252ad114ce4e0b1e48a07770ccb2cb00f76c61d45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68948632cf2f3ee809a3c8252ad114ce4e0b1e48a07770ccb2cb00f76c61d45c->enter($__internal_68948632cf2f3ee809a3c8252ad114ce4e0b1e48a07770ccb2cb00f76c61d45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_68948632cf2f3ee809a3c8252ad114ce4e0b1e48a07770ccb2cb00f76c61d45c->leave($__internal_68948632cf2f3ee809a3c8252ad114ce4e0b1e48a07770ccb2cb00f76c61d45c_prof);

        
        $__internal_da4fff3f57ebeacb1c956634a573ec2acb30c9bea87a0ed9eca2aeb237791524->leave($__internal_da4fff3f57ebeacb1c956634a573ec2acb30c9bea87a0ed9eca2aeb237791524_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
