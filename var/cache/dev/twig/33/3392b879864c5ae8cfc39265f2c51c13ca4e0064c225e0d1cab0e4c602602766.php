<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_066cd2c716675baead4e2486e9c99140fc73a3471f8cd54a8b87ed3bc23ba3ff extends Twig_Template
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
        $__internal_21c762314028c5cf43398fca787fafd28b9c307d547b135d8108998f1f3aace7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c762314028c5cf43398fca787fafd28b9c307d547b135d8108998f1f3aace7->enter($__internal_21c762314028c5cf43398fca787fafd28b9c307d547b135d8108998f1f3aace7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d5af7ecc21894e783e91d52c62808405aebc07cfefb392a5e7246e136541e5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5af7ecc21894e783e91d52c62808405aebc07cfefb392a5e7246e136541e5b8->enter($__internal_d5af7ecc21894e783e91d52c62808405aebc07cfefb392a5e7246e136541e5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_21c762314028c5cf43398fca787fafd28b9c307d547b135d8108998f1f3aace7->leave($__internal_21c762314028c5cf43398fca787fafd28b9c307d547b135d8108998f1f3aace7_prof);

        
        $__internal_d5af7ecc21894e783e91d52c62808405aebc07cfefb392a5e7246e136541e5b8->leave($__internal_d5af7ecc21894e783e91d52c62808405aebc07cfefb392a5e7246e136541e5b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
