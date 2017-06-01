<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7710ce480f0e94e11bc50f51e4e4fa3b872ae3d35cbea943ee3cec2eb03691d9 extends Twig_Template
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
        $__internal_dbb86e381f228189880c074d26c2cfe57372da726bea1750dffb2eaf39f525c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb86e381f228189880c074d26c2cfe57372da726bea1750dffb2eaf39f525c4->enter($__internal_dbb86e381f228189880c074d26c2cfe57372da726bea1750dffb2eaf39f525c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ffde09677f8819a85e9ba4971b9c8e38ab06fe4346393f00cf451ba90cc4b9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffde09677f8819a85e9ba4971b9c8e38ab06fe4346393f00cf451ba90cc4b9e2->enter($__internal_ffde09677f8819a85e9ba4971b9c8e38ab06fe4346393f00cf451ba90cc4b9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dbb86e381f228189880c074d26c2cfe57372da726bea1750dffb2eaf39f525c4->leave($__internal_dbb86e381f228189880c074d26c2cfe57372da726bea1750dffb2eaf39f525c4_prof);

        
        $__internal_ffde09677f8819a85e9ba4971b9c8e38ab06fe4346393f00cf451ba90cc4b9e2->leave($__internal_ffde09677f8819a85e9ba4971b9c8e38ab06fe4346393f00cf451ba90cc4b9e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
