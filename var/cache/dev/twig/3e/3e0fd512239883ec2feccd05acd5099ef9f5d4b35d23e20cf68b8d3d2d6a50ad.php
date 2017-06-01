<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2e5d10612c5d377c5db12736fc6d1822e3c5072daa285d39b74b0c2712a5dbc5 extends Twig_Template
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
        $__internal_466898f9575bcdfd5eb428422d340ac59f2b42f4616c5962b9ff9ed94b08d36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466898f9575bcdfd5eb428422d340ac59f2b42f4616c5962b9ff9ed94b08d36d->enter($__internal_466898f9575bcdfd5eb428422d340ac59f2b42f4616c5962b9ff9ed94b08d36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b890dd3b65074906dd73250e3079a03d73894f29825e0d3a26b6f2f12e86f9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b890dd3b65074906dd73250e3079a03d73894f29825e0d3a26b6f2f12e86f9ea->enter($__internal_b890dd3b65074906dd73250e3079a03d73894f29825e0d3a26b6f2f12e86f9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_466898f9575bcdfd5eb428422d340ac59f2b42f4616c5962b9ff9ed94b08d36d->leave($__internal_466898f9575bcdfd5eb428422d340ac59f2b42f4616c5962b9ff9ed94b08d36d_prof);

        
        $__internal_b890dd3b65074906dd73250e3079a03d73894f29825e0d3a26b6f2f12e86f9ea->leave($__internal_b890dd3b65074906dd73250e3079a03d73894f29825e0d3a26b6f2f12e86f9ea_prof);

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
