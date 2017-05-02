<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_835661141d4b2701b1c87bb696e3304c528ce7dccefd76e0f214bd88cac30024 extends Twig_Template
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
        $__internal_9255b12e038ec8411d6d263833f92de82d839318abcdc4f62b0ed9ccecbe6fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9255b12e038ec8411d6d263833f92de82d839318abcdc4f62b0ed9ccecbe6fdb->enter($__internal_9255b12e038ec8411d6d263833f92de82d839318abcdc4f62b0ed9ccecbe6fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e69804398b0f04513cb800b98075100cb54a4b7c3191dc776661b16fa301899b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69804398b0f04513cb800b98075100cb54a4b7c3191dc776661b16fa301899b->enter($__internal_e69804398b0f04513cb800b98075100cb54a4b7c3191dc776661b16fa301899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9255b12e038ec8411d6d263833f92de82d839318abcdc4f62b0ed9ccecbe6fdb->leave($__internal_9255b12e038ec8411d6d263833f92de82d839318abcdc4f62b0ed9ccecbe6fdb_prof);

        
        $__internal_e69804398b0f04513cb800b98075100cb54a4b7c3191dc776661b16fa301899b->leave($__internal_e69804398b0f04513cb800b98075100cb54a4b7c3191dc776661b16fa301899b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
