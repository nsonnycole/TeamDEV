<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fa71d8c33189c0d29b10cdd138664cefb8d468008f9e5371a9e342279364fa36 extends Twig_Template
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
        $__internal_b0779ceb5283c752292d0171ffd03525f61c3de22b495827d3292848d763622b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0779ceb5283c752292d0171ffd03525f61c3de22b495827d3292848d763622b->enter($__internal_b0779ceb5283c752292d0171ffd03525f61c3de22b495827d3292848d763622b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c95ca86d1cbb684f5c2d2d77df9d9de98ea681aaf25a69794a622ea13902fb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95ca86d1cbb684f5c2d2d77df9d9de98ea681aaf25a69794a622ea13902fb44->enter($__internal_c95ca86d1cbb684f5c2d2d77df9d9de98ea681aaf25a69794a622ea13902fb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b0779ceb5283c752292d0171ffd03525f61c3de22b495827d3292848d763622b->leave($__internal_b0779ceb5283c752292d0171ffd03525f61c3de22b495827d3292848d763622b_prof);

        
        $__internal_c95ca86d1cbb684f5c2d2d77df9d9de98ea681aaf25a69794a622ea13902fb44->leave($__internal_c95ca86d1cbb684f5c2d2d77df9d9de98ea681aaf25a69794a622ea13902fb44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
