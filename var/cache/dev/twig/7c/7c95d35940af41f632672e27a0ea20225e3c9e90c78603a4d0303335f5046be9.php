<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9bb62380e06dde616a373a36624b30d8906ad0915fb6c3efee60942c28abed42 extends Twig_Template
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
        $__internal_a5ac04dbc924c116585a0e6b84492b6a7d60ff14fe1bb6b04e41a2ed4ab86143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ac04dbc924c116585a0e6b84492b6a7d60ff14fe1bb6b04e41a2ed4ab86143->enter($__internal_a5ac04dbc924c116585a0e6b84492b6a7d60ff14fe1bb6b04e41a2ed4ab86143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9ad71d002bd22e40f5e93a8e42f2a5dfeb71042d9b7994e433d87dc694c35d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad71d002bd22e40f5e93a8e42f2a5dfeb71042d9b7994e433d87dc694c35d48->enter($__internal_9ad71d002bd22e40f5e93a8e42f2a5dfeb71042d9b7994e433d87dc694c35d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a5ac04dbc924c116585a0e6b84492b6a7d60ff14fe1bb6b04e41a2ed4ab86143->leave($__internal_a5ac04dbc924c116585a0e6b84492b6a7d60ff14fe1bb6b04e41a2ed4ab86143_prof);

        
        $__internal_9ad71d002bd22e40f5e93a8e42f2a5dfeb71042d9b7994e433d87dc694c35d48->leave($__internal_9ad71d002bd22e40f5e93a8e42f2a5dfeb71042d9b7994e433d87dc694c35d48_prof);

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
", "@Framework/Form/button_row.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
