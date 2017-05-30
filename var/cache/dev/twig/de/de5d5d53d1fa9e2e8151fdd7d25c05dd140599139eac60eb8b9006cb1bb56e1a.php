<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2d21deb7b8dff7837c1df8cb15c0027a06ee632763e0470c3d54d1e1acd2e643 extends Twig_Template
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
        $__internal_66c362dd13172221bde39fca8ddb2b69d4e057eaa43fd78d478ca86542695009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c362dd13172221bde39fca8ddb2b69d4e057eaa43fd78d478ca86542695009->enter($__internal_66c362dd13172221bde39fca8ddb2b69d4e057eaa43fd78d478ca86542695009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_87e00618b6a54d9a9a1df239090e01d3737637cfdfd264fe253d4e6d5f96804f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e00618b6a54d9a9a1df239090e01d3737637cfdfd264fe253d4e6d5f96804f->enter($__internal_87e00618b6a54d9a9a1df239090e01d3737637cfdfd264fe253d4e6d5f96804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_66c362dd13172221bde39fca8ddb2b69d4e057eaa43fd78d478ca86542695009->leave($__internal_66c362dd13172221bde39fca8ddb2b69d4e057eaa43fd78d478ca86542695009_prof);

        
        $__internal_87e00618b6a54d9a9a1df239090e01d3737637cfdfd264fe253d4e6d5f96804f->leave($__internal_87e00618b6a54d9a9a1df239090e01d3737637cfdfd264fe253d4e6d5f96804f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
