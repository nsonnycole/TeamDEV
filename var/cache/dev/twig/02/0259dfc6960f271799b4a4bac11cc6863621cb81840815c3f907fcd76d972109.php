<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_52d3587c9714c0cc89a08494411f571d4d4f1aed25cee5ed448109dc9acc7a8d extends Twig_Template
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
        $__internal_5ce6d26db72b16c31bb8fa5261115a53be7c02dc93eca72f32bb712ed25f6e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce6d26db72b16c31bb8fa5261115a53be7c02dc93eca72f32bb712ed25f6e91->enter($__internal_5ce6d26db72b16c31bb8fa5261115a53be7c02dc93eca72f32bb712ed25f6e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_42acae00ed05ede90c75220393b271af7feb93e2ed7778d1d48376c823991b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42acae00ed05ede90c75220393b271af7feb93e2ed7778d1d48376c823991b67->enter($__internal_42acae00ed05ede90c75220393b271af7feb93e2ed7778d1d48376c823991b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5ce6d26db72b16c31bb8fa5261115a53be7c02dc93eca72f32bb712ed25f6e91->leave($__internal_5ce6d26db72b16c31bb8fa5261115a53be7c02dc93eca72f32bb712ed25f6e91_prof);

        
        $__internal_42acae00ed05ede90c75220393b271af7feb93e2ed7778d1d48376c823991b67->leave($__internal_42acae00ed05ede90c75220393b271af7feb93e2ed7778d1d48376c823991b67_prof);

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
