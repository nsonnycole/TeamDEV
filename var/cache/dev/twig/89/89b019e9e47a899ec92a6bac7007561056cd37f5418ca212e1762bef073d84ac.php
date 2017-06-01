<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2a083f22c64d499468d671138e83c39a757b6186ed87b5733fdb82e228f01a94 extends Twig_Template
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
        $__internal_7e12ffd83c61900aee616b7fb83fd54cf03a73b6014b0226efde3c64f523b129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e12ffd83c61900aee616b7fb83fd54cf03a73b6014b0226efde3c64f523b129->enter($__internal_7e12ffd83c61900aee616b7fb83fd54cf03a73b6014b0226efde3c64f523b129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_77b7de73e0de465acf5f64fea07ae5a53eb432cbe4a97bfa543e832ed6bd7132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b7de73e0de465acf5f64fea07ae5a53eb432cbe4a97bfa543e832ed6bd7132->enter($__internal_77b7de73e0de465acf5f64fea07ae5a53eb432cbe4a97bfa543e832ed6bd7132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7e12ffd83c61900aee616b7fb83fd54cf03a73b6014b0226efde3c64f523b129->leave($__internal_7e12ffd83c61900aee616b7fb83fd54cf03a73b6014b0226efde3c64f523b129_prof);

        
        $__internal_77b7de73e0de465acf5f64fea07ae5a53eb432cbe4a97bfa543e832ed6bd7132->leave($__internal_77b7de73e0de465acf5f64fea07ae5a53eb432cbe4a97bfa543e832ed6bd7132_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
