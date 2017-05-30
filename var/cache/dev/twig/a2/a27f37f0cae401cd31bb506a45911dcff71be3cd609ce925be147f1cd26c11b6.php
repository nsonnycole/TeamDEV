<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_85fc24af5cf3152218c906656d23275582e34535935507c054dcad624e1a0e90 extends Twig_Template
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
        $__internal_297f277791247f7be023ba7588ba4bed2d68e8e52c043a6df642c58a4e93890a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297f277791247f7be023ba7588ba4bed2d68e8e52c043a6df642c58a4e93890a->enter($__internal_297f277791247f7be023ba7588ba4bed2d68e8e52c043a6df642c58a4e93890a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_193b10752569dd6f57a7422e10c5e98b7a727728063dae74dc5164378dbc96fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193b10752569dd6f57a7422e10c5e98b7a727728063dae74dc5164378dbc96fe->enter($__internal_193b10752569dd6f57a7422e10c5e98b7a727728063dae74dc5164378dbc96fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_297f277791247f7be023ba7588ba4bed2d68e8e52c043a6df642c58a4e93890a->leave($__internal_297f277791247f7be023ba7588ba4bed2d68e8e52c043a6df642c58a4e93890a_prof);

        
        $__internal_193b10752569dd6f57a7422e10c5e98b7a727728063dae74dc5164378dbc96fe->leave($__internal_193b10752569dd6f57a7422e10c5e98b7a727728063dae74dc5164378dbc96fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
