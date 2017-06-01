<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_86a9092003a7b39752be11c48f0e66a3307efb3effd44cf35e3c728dae086c0e extends Twig_Template
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
        $__internal_965ea40547da13c5b6b9b279a719a28407fd08df53ed3c6b7d3268e21f16f660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965ea40547da13c5b6b9b279a719a28407fd08df53ed3c6b7d3268e21f16f660->enter($__internal_965ea40547da13c5b6b9b279a719a28407fd08df53ed3c6b7d3268e21f16f660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5a9947658de7de6085c6c773a6f57eb542516e298943e5454c3f873eb282fcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9947658de7de6085c6c773a6f57eb542516e298943e5454c3f873eb282fcac->enter($__internal_5a9947658de7de6085c6c773a6f57eb542516e298943e5454c3f873eb282fcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_965ea40547da13c5b6b9b279a719a28407fd08df53ed3c6b7d3268e21f16f660->leave($__internal_965ea40547da13c5b6b9b279a719a28407fd08df53ed3c6b7d3268e21f16f660_prof);

        
        $__internal_5a9947658de7de6085c6c773a6f57eb542516e298943e5454c3f873eb282fcac->leave($__internal_5a9947658de7de6085c6c773a6f57eb542516e298943e5454c3f873eb282fcac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
