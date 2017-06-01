<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d47435472ba1db4cd355711ed9769523c41213b189fa9883aa1ac81c5696836a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f245a90020128055198b9f5fe35e4deea02755427eded469e1512ea9e5fa3347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f245a90020128055198b9f5fe35e4deea02755427eded469e1512ea9e5fa3347->enter($__internal_f245a90020128055198b9f5fe35e4deea02755427eded469e1512ea9e5fa3347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_e4b5b41be631690d4ad47f5d6218e53be78548a6115f08e7ef2b803a6fbf23c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b5b41be631690d4ad47f5d6218e53be78548a6115f08e7ef2b803a6fbf23c5->enter($__internal_e4b5b41be631690d4ad47f5d6218e53be78548a6115f08e7ef2b803a6fbf23c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f245a90020128055198b9f5fe35e4deea02755427eded469e1512ea9e5fa3347->leave($__internal_f245a90020128055198b9f5fe35e4deea02755427eded469e1512ea9e5fa3347_prof);

        
        $__internal_e4b5b41be631690d4ad47f5d6218e53be78548a6115f08e7ef2b803a6fbf23c5->leave($__internal_e4b5b41be631690d4ad47f5d6218e53be78548a6115f08e7ef2b803a6fbf23c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f657ba5bda7d50a3c735193335b1521111b6feb282f8e913f4868b7c90367f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f657ba5bda7d50a3c735193335b1521111b6feb282f8e913f4868b7c90367f6->enter($__internal_9f657ba5bda7d50a3c735193335b1521111b6feb282f8e913f4868b7c90367f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6d24083f2dbf2523d19117538361eb35eb646dd80e528b392633d18f021c35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d24083f2dbf2523d19117538361eb35eb646dd80e528b392633d18f021c35b->enter($__internal_d6d24083f2dbf2523d19117538361eb35eb646dd80e528b392633d18f021c35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d6d24083f2dbf2523d19117538361eb35eb646dd80e528b392633d18f021c35b->leave($__internal_d6d24083f2dbf2523d19117538361eb35eb646dd80e528b392633d18f021c35b_prof);

        
        $__internal_9f657ba5bda7d50a3c735193335b1521111b6feb282f8e913f4868b7c90367f6->leave($__internal_9f657ba5bda7d50a3c735193335b1521111b6feb282f8e913f4868b7c90367f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
