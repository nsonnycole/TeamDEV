<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_985bade58ec5c14dd37e7acf317aa2398ba00d12fcc85a665ba647eea5ef4b6a extends Twig_Template
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
        $__internal_8805754c8f328af00217af1da12426c24fe26fe0eee9d6dc1206bae313a0eb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8805754c8f328af00217af1da12426c24fe26fe0eee9d6dc1206bae313a0eb9a->enter($__internal_8805754c8f328af00217af1da12426c24fe26fe0eee9d6dc1206bae313a0eb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0495a4a81c8ed4107b583ad05eea11e4fb49e3aa76a2e8052ec9e64cc49eda2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0495a4a81c8ed4107b583ad05eea11e4fb49e3aa76a2e8052ec9e64cc49eda2e->enter($__internal_0495a4a81c8ed4107b583ad05eea11e4fb49e3aa76a2e8052ec9e64cc49eda2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8805754c8f328af00217af1da12426c24fe26fe0eee9d6dc1206bae313a0eb9a->leave($__internal_8805754c8f328af00217af1da12426c24fe26fe0eee9d6dc1206bae313a0eb9a_prof);

        
        $__internal_0495a4a81c8ed4107b583ad05eea11e4fb49e3aa76a2e8052ec9e64cc49eda2e->leave($__internal_0495a4a81c8ed4107b583ad05eea11e4fb49e3aa76a2e8052ec9e64cc49eda2e_prof);

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
", "@Framework/Form/form.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
