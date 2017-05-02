<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1f3036c7e148403daa940913d3431d86eecd7af27f507889771b567cb07a384d extends Twig_Template
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
        $__internal_5d009fa8a6a387cf2cb7bd26b3da58cc216860104d0c145e99d1077d0bc1c266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d009fa8a6a387cf2cb7bd26b3da58cc216860104d0c145e99d1077d0bc1c266->enter($__internal_5d009fa8a6a387cf2cb7bd26b3da58cc216860104d0c145e99d1077d0bc1c266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3693ed75107412446c0b2e7a68868abb19b9459a9e5dc81d3f958e3ebc08d856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3693ed75107412446c0b2e7a68868abb19b9459a9e5dc81d3f958e3ebc08d856->enter($__internal_3693ed75107412446c0b2e7a68868abb19b9459a9e5dc81d3f958e3ebc08d856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5d009fa8a6a387cf2cb7bd26b3da58cc216860104d0c145e99d1077d0bc1c266->leave($__internal_5d009fa8a6a387cf2cb7bd26b3da58cc216860104d0c145e99d1077d0bc1c266_prof);

        
        $__internal_3693ed75107412446c0b2e7a68868abb19b9459a9e5dc81d3f958e3ebc08d856->leave($__internal_3693ed75107412446c0b2e7a68868abb19b9459a9e5dc81d3f958e3ebc08d856_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
