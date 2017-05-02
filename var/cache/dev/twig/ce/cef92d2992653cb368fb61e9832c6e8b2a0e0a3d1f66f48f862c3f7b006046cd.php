<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0e67a9730cf177cef25030b2f3568ebf2567f6cc8791013cbb6ccc5c61890657 extends Twig_Template
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
        $__internal_a595e5d8a3f9d7119eb9d908d707ccdf6e27a66e385900d075aa126027953f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a595e5d8a3f9d7119eb9d908d707ccdf6e27a66e385900d075aa126027953f5c->enter($__internal_a595e5d8a3f9d7119eb9d908d707ccdf6e27a66e385900d075aa126027953f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_05282edc9675a63fbc4a20688ba7438aab1f29dd799da3a80668c701c175322d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05282edc9675a63fbc4a20688ba7438aab1f29dd799da3a80668c701c175322d->enter($__internal_05282edc9675a63fbc4a20688ba7438aab1f29dd799da3a80668c701c175322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a595e5d8a3f9d7119eb9d908d707ccdf6e27a66e385900d075aa126027953f5c->leave($__internal_a595e5d8a3f9d7119eb9d908d707ccdf6e27a66e385900d075aa126027953f5c_prof);

        
        $__internal_05282edc9675a63fbc4a20688ba7438aab1f29dd799da3a80668c701c175322d->leave($__internal_05282edc9675a63fbc4a20688ba7438aab1f29dd799da3a80668c701c175322d_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
