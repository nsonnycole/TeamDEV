<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_06924a1356a8fa6502f04dabbc9691d0029bfeffc861796df5a68debcd11c7ce extends Twig_Template
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
        $__internal_33462532cd67202ab1e0fe41cfb68b3e9aa61ba4f12e324d2d296ecf190c6986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33462532cd67202ab1e0fe41cfb68b3e9aa61ba4f12e324d2d296ecf190c6986->enter($__internal_33462532cd67202ab1e0fe41cfb68b3e9aa61ba4f12e324d2d296ecf190c6986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_bffb4fb57593d82204b8dcfa8b695c2511110c13cfa7ea797eee7eb5b1803ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffb4fb57593d82204b8dcfa8b695c2511110c13cfa7ea797eee7eb5b1803ebe->enter($__internal_bffb4fb57593d82204b8dcfa8b695c2511110c13cfa7ea797eee7eb5b1803ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_33462532cd67202ab1e0fe41cfb68b3e9aa61ba4f12e324d2d296ecf190c6986->leave($__internal_33462532cd67202ab1e0fe41cfb68b3e9aa61ba4f12e324d2d296ecf190c6986_prof);

        
        $__internal_bffb4fb57593d82204b8dcfa8b695c2511110c13cfa7ea797eee7eb5b1803ebe->leave($__internal_bffb4fb57593d82204b8dcfa8b695c2511110c13cfa7ea797eee7eb5b1803ebe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
