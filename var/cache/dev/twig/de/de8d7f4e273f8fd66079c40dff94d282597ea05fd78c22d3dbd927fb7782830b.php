<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0992200e561741c94855ec9c52355578c09f2c1fbf44ef79972620a1370059fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_227826d56828e056c72e81c516735e02be59213425fb047065ee5cfcb2fe47f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227826d56828e056c72e81c516735e02be59213425fb047065ee5cfcb2fe47f5->enter($__internal_227826d56828e056c72e81c516735e02be59213425fb047065ee5cfcb2fe47f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4dba2bf1304aca78a8d9944bf9ac650cf712b88b8ddf6158b704f8705804013c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dba2bf1304aca78a8d9944bf9ac650cf712b88b8ddf6158b704f8705804013c->enter($__internal_4dba2bf1304aca78a8d9944bf9ac650cf712b88b8ddf6158b704f8705804013c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_227826d56828e056c72e81c516735e02be59213425fb047065ee5cfcb2fe47f5->leave($__internal_227826d56828e056c72e81c516735e02be59213425fb047065ee5cfcb2fe47f5_prof);

        
        $__internal_4dba2bf1304aca78a8d9944bf9ac650cf712b88b8ddf6158b704f8705804013c->leave($__internal_4dba2bf1304aca78a8d9944bf9ac650cf712b88b8ddf6158b704f8705804013c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
