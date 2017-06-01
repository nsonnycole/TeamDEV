<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_47d04fb7322698ed92e7670cdc1ec6848f1715d4049ce1a5991d2bc54567e85b extends Twig_Template
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
        $__internal_6ca37104045140db07909d1208bb363eb8cbb4f2aae83b2cea7cd213ea1918b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca37104045140db07909d1208bb363eb8cbb4f2aae83b2cea7cd213ea1918b9->enter($__internal_6ca37104045140db07909d1208bb363eb8cbb4f2aae83b2cea7cd213ea1918b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0818864cb4961c94751a358f65cb794928a2037ee6a85bbda48e1b5f221cad0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0818864cb4961c94751a358f65cb794928a2037ee6a85bbda48e1b5f221cad0e->enter($__internal_0818864cb4961c94751a358f65cb794928a2037ee6a85bbda48e1b5f221cad0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6ca37104045140db07909d1208bb363eb8cbb4f2aae83b2cea7cd213ea1918b9->leave($__internal_6ca37104045140db07909d1208bb363eb8cbb4f2aae83b2cea7cd213ea1918b9_prof);

        
        $__internal_0818864cb4961c94751a358f65cb794928a2037ee6a85bbda48e1b5f221cad0e->leave($__internal_0818864cb4961c94751a358f65cb794928a2037ee6a85bbda48e1b5f221cad0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
