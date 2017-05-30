<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3b6ca1b2d46da73100521008658378106a83287a0f53afe550aba126b08fa583 extends Twig_Template
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
        $__internal_8f44857a8796fe76e23c0d4cda21b8f2c0c86676c0748f3b6547497bc62d12ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f44857a8796fe76e23c0d4cda21b8f2c0c86676c0748f3b6547497bc62d12ef->enter($__internal_8f44857a8796fe76e23c0d4cda21b8f2c0c86676c0748f3b6547497bc62d12ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_39788a711569d1fbb0446fa8e7011751d842816ad033e1096515367d43afbde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39788a711569d1fbb0446fa8e7011751d842816ad033e1096515367d43afbde3->enter($__internal_39788a711569d1fbb0446fa8e7011751d842816ad033e1096515367d43afbde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8f44857a8796fe76e23c0d4cda21b8f2c0c86676c0748f3b6547497bc62d12ef->leave($__internal_8f44857a8796fe76e23c0d4cda21b8f2c0c86676c0748f3b6547497bc62d12ef_prof);

        
        $__internal_39788a711569d1fbb0446fa8e7011751d842816ad033e1096515367d43afbde3->leave($__internal_39788a711569d1fbb0446fa8e7011751d842816ad033e1096515367d43afbde3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
