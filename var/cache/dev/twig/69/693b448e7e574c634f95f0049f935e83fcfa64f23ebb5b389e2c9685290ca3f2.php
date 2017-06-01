<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e85331c66475e1c0578250a1d43cb99d35f1f8c9d39523589f520262bb95cd42 extends Twig_Template
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
        $__internal_ce536097830415bb4834a3b624f1398c7498f8816263edacd0d52f6ec5c10272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce536097830415bb4834a3b624f1398c7498f8816263edacd0d52f6ec5c10272->enter($__internal_ce536097830415bb4834a3b624f1398c7498f8816263edacd0d52f6ec5c10272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8238dbfbd1ed56d46928e8f1de09bbf92c018fad7ac60c5c10c623aea58ffe06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8238dbfbd1ed56d46928e8f1de09bbf92c018fad7ac60c5c10c623aea58ffe06->enter($__internal_8238dbfbd1ed56d46928e8f1de09bbf92c018fad7ac60c5c10c623aea58ffe06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ce536097830415bb4834a3b624f1398c7498f8816263edacd0d52f6ec5c10272->leave($__internal_ce536097830415bb4834a3b624f1398c7498f8816263edacd0d52f6ec5c10272_prof);

        
        $__internal_8238dbfbd1ed56d46928e8f1de09bbf92c018fad7ac60c5c10c623aea58ffe06->leave($__internal_8238dbfbd1ed56d46928e8f1de09bbf92c018fad7ac60c5c10c623aea58ffe06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
