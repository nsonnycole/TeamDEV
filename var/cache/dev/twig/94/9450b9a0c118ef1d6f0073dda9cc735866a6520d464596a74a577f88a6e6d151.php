<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1a1334a1431ff7afd4a400f3d7edbbff31d2dcbc6ab30f4fd2855545a6aa9a48 extends Twig_Template
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
        $__internal_8c3e1dffe843285ba3ce314c5810f2c38b29cda94b42eadeec3c5dde8870b0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3e1dffe843285ba3ce314c5810f2c38b29cda94b42eadeec3c5dde8870b0f8->enter($__internal_8c3e1dffe843285ba3ce314c5810f2c38b29cda94b42eadeec3c5dde8870b0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_deb6269cea962384edfc807616eeee1f5d10c12261c16e062928a87b2254d0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb6269cea962384edfc807616eeee1f5d10c12261c16e062928a87b2254d0b1->enter($__internal_deb6269cea962384edfc807616eeee1f5d10c12261c16e062928a87b2254d0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8c3e1dffe843285ba3ce314c5810f2c38b29cda94b42eadeec3c5dde8870b0f8->leave($__internal_8c3e1dffe843285ba3ce314c5810f2c38b29cda94b42eadeec3c5dde8870b0f8_prof);

        
        $__internal_deb6269cea962384edfc807616eeee1f5d10c12261c16e062928a87b2254d0b1->leave($__internal_deb6269cea962384edfc807616eeee1f5d10c12261c16e062928a87b2254d0b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
