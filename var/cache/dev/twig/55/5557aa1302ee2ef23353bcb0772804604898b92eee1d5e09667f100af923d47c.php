<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b97731d559802610bf6f6cb9824bd603427add78143ee48518fd8ede0974a879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_11bfb4572d87fa41250b1c467b3b6532bd554a5bbc7f1ba648ada71fb2973840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bfb4572d87fa41250b1c467b3b6532bd554a5bbc7f1ba648ada71fb2973840->enter($__internal_11bfb4572d87fa41250b1c467b3b6532bd554a5bbc7f1ba648ada71fb2973840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_058b21725c43574063d90780c7de80ab14d255dfb2e2e247bf250322b5984dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058b21725c43574063d90780c7de80ab14d255dfb2e2e247bf250322b5984dc7->enter($__internal_058b21725c43574063d90780c7de80ab14d255dfb2e2e247bf250322b5984dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11bfb4572d87fa41250b1c467b3b6532bd554a5bbc7f1ba648ada71fb2973840->leave($__internal_11bfb4572d87fa41250b1c467b3b6532bd554a5bbc7f1ba648ada71fb2973840_prof);

        
        $__internal_058b21725c43574063d90780c7de80ab14d255dfb2e2e247bf250322b5984dc7->leave($__internal_058b21725c43574063d90780c7de80ab14d255dfb2e2e247bf250322b5984dc7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb9f4ca70d50b349e1ec4d019ffd84ebb4c96697ce2fda1e4a4d91d4a5e6695e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9f4ca70d50b349e1ec4d019ffd84ebb4c96697ce2fda1e4a4d91d4a5e6695e->enter($__internal_eb9f4ca70d50b349e1ec4d019ffd84ebb4c96697ce2fda1e4a4d91d4a5e6695e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_101346698cea172af3fc00e496bb93238481e7f0cd16d2f40d51f413f807abe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101346698cea172af3fc00e496bb93238481e7f0cd16d2f40d51f413f807abe8->enter($__internal_101346698cea172af3fc00e496bb93238481e7f0cd16d2f40d51f413f807abe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_101346698cea172af3fc00e496bb93238481e7f0cd16d2f40d51f413f807abe8->leave($__internal_101346698cea172af3fc00e496bb93238481e7f0cd16d2f40d51f413f807abe8_prof);

        
        $__internal_eb9f4ca70d50b349e1ec4d019ffd84ebb4c96697ce2fda1e4a4d91d4a5e6695e->leave($__internal_eb9f4ca70d50b349e1ec4d019ffd84ebb4c96697ce2fda1e4a4d91d4a5e6695e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
