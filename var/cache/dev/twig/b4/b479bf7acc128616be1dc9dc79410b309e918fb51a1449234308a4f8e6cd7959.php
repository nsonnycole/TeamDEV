<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95dfecc2bc54143adf6739b230500a66d929caa10de6f5bfaf6ce3ad3a17378e extends Twig_Template
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
        $__internal_73123a9f5d4d061927b6d22ebb01c315a848a122aba1b9fcccbcf33617e41f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73123a9f5d4d061927b6d22ebb01c315a848a122aba1b9fcccbcf33617e41f79->enter($__internal_73123a9f5d4d061927b6d22ebb01c315a848a122aba1b9fcccbcf33617e41f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_10ed5d6e46b54a46857b6c5131e1dd6dfcaf218c20181ec23d4502ade67a71ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ed5d6e46b54a46857b6c5131e1dd6dfcaf218c20181ec23d4502ade67a71ec->enter($__internal_10ed5d6e46b54a46857b6c5131e1dd6dfcaf218c20181ec23d4502ade67a71ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_73123a9f5d4d061927b6d22ebb01c315a848a122aba1b9fcccbcf33617e41f79->leave($__internal_73123a9f5d4d061927b6d22ebb01c315a848a122aba1b9fcccbcf33617e41f79_prof);

        
        $__internal_10ed5d6e46b54a46857b6c5131e1dd6dfcaf218c20181ec23d4502ade67a71ec->leave($__internal_10ed5d6e46b54a46857b6c5131e1dd6dfcaf218c20181ec23d4502ade67a71ec_prof);

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
