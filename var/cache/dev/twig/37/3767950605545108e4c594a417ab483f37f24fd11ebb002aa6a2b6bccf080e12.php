<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_de56ea8d41e393796af93a6fa847990ed423b5e8faca02d97b012bd802c372fe extends Twig_Template
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
        $__internal_9bdb13a55fb6ffb55a5a0c3c0f0400db8e1c01cf763cda7420c33bc3425c1335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdb13a55fb6ffb55a5a0c3c0f0400db8e1c01cf763cda7420c33bc3425c1335->enter($__internal_9bdb13a55fb6ffb55a5a0c3c0f0400db8e1c01cf763cda7420c33bc3425c1335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6b93a68f4ec41084baf4c7afe4f0c502050180bf891efe69f8782e060a115b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b93a68f4ec41084baf4c7afe4f0c502050180bf891efe69f8782e060a115b29->enter($__internal_6b93a68f4ec41084baf4c7afe4f0c502050180bf891efe69f8782e060a115b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9bdb13a55fb6ffb55a5a0c3c0f0400db8e1c01cf763cda7420c33bc3425c1335->leave($__internal_9bdb13a55fb6ffb55a5a0c3c0f0400db8e1c01cf763cda7420c33bc3425c1335_prof);

        
        $__internal_6b93a68f4ec41084baf4c7afe4f0c502050180bf891efe69f8782e060a115b29->leave($__internal_6b93a68f4ec41084baf4c7afe4f0c502050180bf891efe69f8782e060a115b29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
