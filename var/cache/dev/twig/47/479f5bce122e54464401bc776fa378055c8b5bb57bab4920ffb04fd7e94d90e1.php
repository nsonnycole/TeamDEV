<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e1721a60dc789c3a6c99dca65dbac793c1f7da38caaf9309163e7e38eaf50e45 extends Twig_Template
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
        $__internal_e2e48beca14569f18095e7456fbd30b43199760a353eea5b6d18e49a2ea52f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e48beca14569f18095e7456fbd30b43199760a353eea5b6d18e49a2ea52f88->enter($__internal_e2e48beca14569f18095e7456fbd30b43199760a353eea5b6d18e49a2ea52f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_762685959317259a1411ea29294a2c908317936e14faadcd40e9a0feef88a460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762685959317259a1411ea29294a2c908317936e14faadcd40e9a0feef88a460->enter($__internal_762685959317259a1411ea29294a2c908317936e14faadcd40e9a0feef88a460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e2e48beca14569f18095e7456fbd30b43199760a353eea5b6d18e49a2ea52f88->leave($__internal_e2e48beca14569f18095e7456fbd30b43199760a353eea5b6d18e49a2ea52f88_prof);

        
        $__internal_762685959317259a1411ea29294a2c908317936e14faadcd40e9a0feef88a460->leave($__internal_762685959317259a1411ea29294a2c908317936e14faadcd40e9a0feef88a460_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
