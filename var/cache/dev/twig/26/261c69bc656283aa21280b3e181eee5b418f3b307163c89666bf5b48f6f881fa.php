<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_891ed6247a7bf347fb010f1106fd4c949ce27e93e4d969d0cb64cb55f9ee88a7 extends Twig_Template
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
        $__internal_4963eec18353e9af3d941fac89d850c72db8904e46859c05004942567d88ca87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4963eec18353e9af3d941fac89d850c72db8904e46859c05004942567d88ca87->enter($__internal_4963eec18353e9af3d941fac89d850c72db8904e46859c05004942567d88ca87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bb1dccb88d473a6ce4fcd03c4330ee77644ee75ceb1caa1e5a30e6a4f25c7d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1dccb88d473a6ce4fcd03c4330ee77644ee75ceb1caa1e5a30e6a4f25c7d66->enter($__internal_bb1dccb88d473a6ce4fcd03c4330ee77644ee75ceb1caa1e5a30e6a4f25c7d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4963eec18353e9af3d941fac89d850c72db8904e46859c05004942567d88ca87->leave($__internal_4963eec18353e9af3d941fac89d850c72db8904e46859c05004942567d88ca87_prof);

        
        $__internal_bb1dccb88d473a6ce4fcd03c4330ee77644ee75ceb1caa1e5a30e6a4f25c7d66->leave($__internal_bb1dccb88d473a6ce4fcd03c4330ee77644ee75ceb1caa1e5a30e6a4f25c7d66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
