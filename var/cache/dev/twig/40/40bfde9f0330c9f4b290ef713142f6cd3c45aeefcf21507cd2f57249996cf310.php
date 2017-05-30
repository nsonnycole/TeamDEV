<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3e5e1a781825ca5e0f69fd0e9e9978e55bde34e58df75ce20b9837536167278a extends Twig_Template
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
        $__internal_43d8fa40bd8dab76614190d595c39e0bb4c24a8d88cc12be0cf8e3ce851b5ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d8fa40bd8dab76614190d595c39e0bb4c24a8d88cc12be0cf8e3ce851b5ed0->enter($__internal_43d8fa40bd8dab76614190d595c39e0bb4c24a8d88cc12be0cf8e3ce851b5ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_594afae4a402e611cd9dec44ba2d53816d1575ad16be47e5c40b68749e5606df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594afae4a402e611cd9dec44ba2d53816d1575ad16be47e5c40b68749e5606df->enter($__internal_594afae4a402e611cd9dec44ba2d53816d1575ad16be47e5c40b68749e5606df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_43d8fa40bd8dab76614190d595c39e0bb4c24a8d88cc12be0cf8e3ce851b5ed0->leave($__internal_43d8fa40bd8dab76614190d595c39e0bb4c24a8d88cc12be0cf8e3ce851b5ed0_prof);

        
        $__internal_594afae4a402e611cd9dec44ba2d53816d1575ad16be47e5c40b68749e5606df->leave($__internal_594afae4a402e611cd9dec44ba2d53816d1575ad16be47e5c40b68749e5606df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
