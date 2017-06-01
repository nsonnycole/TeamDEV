<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_0cc6386fbd8509083c1cb8548ec570b11161f6852ba357d2151d80e29aa135c7 extends Twig_Template
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
        $__internal_99a9377ca9c48f73c277888a332f419f05688c24dd514b298b4232a22b4687b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a9377ca9c48f73c277888a332f419f05688c24dd514b298b4232a22b4687b7->enter($__internal_99a9377ca9c48f73c277888a332f419f05688c24dd514b298b4232a22b4687b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4805da40788a2d387c48bf115091c188293ee8fd1835e76980d1d96c2b8c23f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4805da40788a2d387c48bf115091c188293ee8fd1835e76980d1d96c2b8c23f2->enter($__internal_4805da40788a2d387c48bf115091c188293ee8fd1835e76980d1d96c2b8c23f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_99a9377ca9c48f73c277888a332f419f05688c24dd514b298b4232a22b4687b7->leave($__internal_99a9377ca9c48f73c277888a332f419f05688c24dd514b298b4232a22b4687b7_prof);

        
        $__internal_4805da40788a2d387c48bf115091c188293ee8fd1835e76980d1d96c2b8c23f2->leave($__internal_4805da40788a2d387c48bf115091c188293ee8fd1835e76980d1d96c2b8c23f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
