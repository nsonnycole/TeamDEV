<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_935ea45bcc4312b3267006efc8aae14494cf15e7dbff8a3b59dc27c31d14c9df extends Twig_Template
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
        $__internal_e91f702381395c8d2ce3255e7fd92aa79c2dd75b06559cc4e9b7d6ccc1161a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91f702381395c8d2ce3255e7fd92aa79c2dd75b06559cc4e9b7d6ccc1161a61->enter($__internal_e91f702381395c8d2ce3255e7fd92aa79c2dd75b06559cc4e9b7d6ccc1161a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_123814f18b83adc2d2b3495534be1c77c653c6e7ed6b73734f130b431c7b50e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123814f18b83adc2d2b3495534be1c77c653c6e7ed6b73734f130b431c7b50e2->enter($__internal_123814f18b83adc2d2b3495534be1c77c653c6e7ed6b73734f130b431c7b50e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e91f702381395c8d2ce3255e7fd92aa79c2dd75b06559cc4e9b7d6ccc1161a61->leave($__internal_e91f702381395c8d2ce3255e7fd92aa79c2dd75b06559cc4e9b7d6ccc1161a61_prof);

        
        $__internal_123814f18b83adc2d2b3495534be1c77c653c6e7ed6b73734f130b431c7b50e2->leave($__internal_123814f18b83adc2d2b3495534be1c77c653c6e7ed6b73734f130b431c7b50e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
