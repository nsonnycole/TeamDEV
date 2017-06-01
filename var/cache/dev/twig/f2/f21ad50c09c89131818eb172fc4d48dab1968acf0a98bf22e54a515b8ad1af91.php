<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a30d776b52dbf1ec83a3296b0287111267cc32b0db17c01743bbabd4c1e06800 extends Twig_Template
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
        $__internal_58f1e6825fdbef904c6fb850dec1c4eab0c18a81cc214196c8d88f70bf6c15a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f1e6825fdbef904c6fb850dec1c4eab0c18a81cc214196c8d88f70bf6c15a6->enter($__internal_58f1e6825fdbef904c6fb850dec1c4eab0c18a81cc214196c8d88f70bf6c15a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bac4c29a9bcd6fb2a534750e333cde5bdd14840ef5de10247323aa272f6b20fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac4c29a9bcd6fb2a534750e333cde5bdd14840ef5de10247323aa272f6b20fd->enter($__internal_bac4c29a9bcd6fb2a534750e333cde5bdd14840ef5de10247323aa272f6b20fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_58f1e6825fdbef904c6fb850dec1c4eab0c18a81cc214196c8d88f70bf6c15a6->leave($__internal_58f1e6825fdbef904c6fb850dec1c4eab0c18a81cc214196c8d88f70bf6c15a6_prof);

        
        $__internal_bac4c29a9bcd6fb2a534750e333cde5bdd14840ef5de10247323aa272f6b20fd->leave($__internal_bac4c29a9bcd6fb2a534750e333cde5bdd14840ef5de10247323aa272f6b20fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
