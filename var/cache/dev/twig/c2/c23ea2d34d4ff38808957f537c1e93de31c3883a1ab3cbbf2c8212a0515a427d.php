<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a359644211959334fee8ad20ca97db882b0dea9df1ce0b00e0f693e5c5e893a9 extends Twig_Template
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
        $__internal_703d89a41c42d5cd15d5c7347f2738f7e1e66323a4da3ec14a91654b12514c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703d89a41c42d5cd15d5c7347f2738f7e1e66323a4da3ec14a91654b12514c7e->enter($__internal_703d89a41c42d5cd15d5c7347f2738f7e1e66323a4da3ec14a91654b12514c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_80e6bbeb4257afdb9d6e43946a15e6af20b04dffc947b6e573e4cc9f80a18853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e6bbeb4257afdb9d6e43946a15e6af20b04dffc947b6e573e4cc9f80a18853->enter($__internal_80e6bbeb4257afdb9d6e43946a15e6af20b04dffc947b6e573e4cc9f80a18853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_703d89a41c42d5cd15d5c7347f2738f7e1e66323a4da3ec14a91654b12514c7e->leave($__internal_703d89a41c42d5cd15d5c7347f2738f7e1e66323a4da3ec14a91654b12514c7e_prof);

        
        $__internal_80e6bbeb4257afdb9d6e43946a15e6af20b04dffc947b6e573e4cc9f80a18853->leave($__internal_80e6bbeb4257afdb9d6e43946a15e6af20b04dffc947b6e573e4cc9f80a18853_prof);

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
", "@Framework/Form/collection_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
