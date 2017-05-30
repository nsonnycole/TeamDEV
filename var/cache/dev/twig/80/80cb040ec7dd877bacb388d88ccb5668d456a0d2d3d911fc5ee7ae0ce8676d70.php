<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_357a3709962281e74fff48f323d6a2a62b03fd37567cfddb832b7c576498d165 extends Twig_Template
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
        $__internal_6fdcd6440094d447806d397c217c2aa1cb331d26134b3e18c767db3233d93732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdcd6440094d447806d397c217c2aa1cb331d26134b3e18c767db3233d93732->enter($__internal_6fdcd6440094d447806d397c217c2aa1cb331d26134b3e18c767db3233d93732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_58d253ddd5e99b8c2d821990a91959e29229a39452d4fa7f925a574dcd4a4e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d253ddd5e99b8c2d821990a91959e29229a39452d4fa7f925a574dcd4a4e4b->enter($__internal_58d253ddd5e99b8c2d821990a91959e29229a39452d4fa7f925a574dcd4a4e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6fdcd6440094d447806d397c217c2aa1cb331d26134b3e18c767db3233d93732->leave($__internal_6fdcd6440094d447806d397c217c2aa1cb331d26134b3e18c767db3233d93732_prof);

        
        $__internal_58d253ddd5e99b8c2d821990a91959e29229a39452d4fa7f925a574dcd4a4e4b->leave($__internal_58d253ddd5e99b8c2d821990a91959e29229a39452d4fa7f925a574dcd4a4e4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
