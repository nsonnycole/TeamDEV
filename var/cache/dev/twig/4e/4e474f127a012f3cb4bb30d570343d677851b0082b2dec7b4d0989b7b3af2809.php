<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_263627a8bdc8476ef9634f0a74492527ba957da45f7e6deb89ac47a6b08dc398 extends Twig_Template
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
        $__internal_b01f9781ef1028b85692ed987d3fa3f71a2ceeee3747a79eaa407a876e2959a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01f9781ef1028b85692ed987d3fa3f71a2ceeee3747a79eaa407a876e2959a5->enter($__internal_b01f9781ef1028b85692ed987d3fa3f71a2ceeee3747a79eaa407a876e2959a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5f32355e1149236bb5247245045a59d3ebea8bd73d9819dfb27fb9dd6d0f7146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f32355e1149236bb5247245045a59d3ebea8bd73d9819dfb27fb9dd6d0f7146->enter($__internal_5f32355e1149236bb5247245045a59d3ebea8bd73d9819dfb27fb9dd6d0f7146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b01f9781ef1028b85692ed987d3fa3f71a2ceeee3747a79eaa407a876e2959a5->leave($__internal_b01f9781ef1028b85692ed987d3fa3f71a2ceeee3747a79eaa407a876e2959a5_prof);

        
        $__internal_5f32355e1149236bb5247245045a59d3ebea8bd73d9819dfb27fb9dd6d0f7146->leave($__internal_5f32355e1149236bb5247245045a59d3ebea8bd73d9819dfb27fb9dd6d0f7146_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
