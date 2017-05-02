<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8571cdf1153e69794245d6b709690695c70233774161b17c63069b081545e7e2 extends Twig_Template
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
        $__internal_737f6985f4c415054f094a4c4726bb3d8368885872509117888662620a10a7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737f6985f4c415054f094a4c4726bb3d8368885872509117888662620a10a7b7->enter($__internal_737f6985f4c415054f094a4c4726bb3d8368885872509117888662620a10a7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9dea39aeea9d28177f0ac0b1de04d3595d3f8fc362df2aac511ec7a1300fb528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dea39aeea9d28177f0ac0b1de04d3595d3f8fc362df2aac511ec7a1300fb528->enter($__internal_9dea39aeea9d28177f0ac0b1de04d3595d3f8fc362df2aac511ec7a1300fb528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_737f6985f4c415054f094a4c4726bb3d8368885872509117888662620a10a7b7->leave($__internal_737f6985f4c415054f094a4c4726bb3d8368885872509117888662620a10a7b7_prof);

        
        $__internal_9dea39aeea9d28177f0ac0b1de04d3595d3f8fc362df2aac511ec7a1300fb528->leave($__internal_9dea39aeea9d28177f0ac0b1de04d3595d3f8fc362df2aac511ec7a1300fb528_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
