<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_82bc64d248cd0f4ea579ba0c5c6a14cb77c1f697f44c10286a7b81d5ee4f5ef3 extends Twig_Template
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
        $__internal_9c8270e03999c36861bb67c2c8d8a9cc761347817517483bd671dfd1764dd61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8270e03999c36861bb67c2c8d8a9cc761347817517483bd671dfd1764dd61c->enter($__internal_9c8270e03999c36861bb67c2c8d8a9cc761347817517483bd671dfd1764dd61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_eb41ed9e267a95ac2f67338c3b4fb5aaaf321fe3d6669c628ecfabd4301b63c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb41ed9e267a95ac2f67338c3b4fb5aaaf321fe3d6669c628ecfabd4301b63c0->enter($__internal_eb41ed9e267a95ac2f67338c3b4fb5aaaf321fe3d6669c628ecfabd4301b63c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9c8270e03999c36861bb67c2c8d8a9cc761347817517483bd671dfd1764dd61c->leave($__internal_9c8270e03999c36861bb67c2c8d8a9cc761347817517483bd671dfd1764dd61c_prof);

        
        $__internal_eb41ed9e267a95ac2f67338c3b4fb5aaaf321fe3d6669c628ecfabd4301b63c0->leave($__internal_eb41ed9e267a95ac2f67338c3b4fb5aaaf321fe3d6669c628ecfabd4301b63c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
