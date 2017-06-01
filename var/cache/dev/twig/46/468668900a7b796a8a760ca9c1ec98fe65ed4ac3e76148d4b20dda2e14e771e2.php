<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f1765501d2e2f980632b2424a226b0048225622a5988483cb86b4bc656353a98 extends Twig_Template
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
        $__internal_0187d5455684e4185fcdd411cd6ae4a3d73baa04809f3f5e9f6fe2f1fe48fce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0187d5455684e4185fcdd411cd6ae4a3d73baa04809f3f5e9f6fe2f1fe48fce4->enter($__internal_0187d5455684e4185fcdd411cd6ae4a3d73baa04809f3f5e9f6fe2f1fe48fce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b15e722d86444d7fa9047f94431816d72461fdc60d6c29c355556bab886492ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15e722d86444d7fa9047f94431816d72461fdc60d6c29c355556bab886492ee->enter($__internal_b15e722d86444d7fa9047f94431816d72461fdc60d6c29c355556bab886492ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0187d5455684e4185fcdd411cd6ae4a3d73baa04809f3f5e9f6fe2f1fe48fce4->leave($__internal_0187d5455684e4185fcdd411cd6ae4a3d73baa04809f3f5e9f6fe2f1fe48fce4_prof);

        
        $__internal_b15e722d86444d7fa9047f94431816d72461fdc60d6c29c355556bab886492ee->leave($__internal_b15e722d86444d7fa9047f94431816d72461fdc60d6c29c355556bab886492ee_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
