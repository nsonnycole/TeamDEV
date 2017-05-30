<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e4e71f926fdf95af45114576b779bcf46d1c2c8a44600236ee54b217b1ae579c extends Twig_Template
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
        $__internal_f029b87d6fd81382b86c2aca183c8a2856dc65428bb4870dc0a575cf90bef6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f029b87d6fd81382b86c2aca183c8a2856dc65428bb4870dc0a575cf90bef6b3->enter($__internal_f029b87d6fd81382b86c2aca183c8a2856dc65428bb4870dc0a575cf90bef6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7d16d32bb3f2113188239216713e330dcae7ec33bf9cfc38d210e85d4128896d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d16d32bb3f2113188239216713e330dcae7ec33bf9cfc38d210e85d4128896d->enter($__internal_7d16d32bb3f2113188239216713e330dcae7ec33bf9cfc38d210e85d4128896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f029b87d6fd81382b86c2aca183c8a2856dc65428bb4870dc0a575cf90bef6b3->leave($__internal_f029b87d6fd81382b86c2aca183c8a2856dc65428bb4870dc0a575cf90bef6b3_prof);

        
        $__internal_7d16d32bb3f2113188239216713e330dcae7ec33bf9cfc38d210e85d4128896d->leave($__internal_7d16d32bb3f2113188239216713e330dcae7ec33bf9cfc38d210e85d4128896d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
