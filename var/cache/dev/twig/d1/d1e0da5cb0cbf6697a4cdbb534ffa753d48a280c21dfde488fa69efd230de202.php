<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2c3fd2ea46deb4c2d86c906c21d29ccdde017943060a5b95ffe3cb476e5a9af0 extends Twig_Template
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
        $__internal_d64eca23e8f65be7a3258fac358afe92d696018bd49d8210d04d4647ed86c209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64eca23e8f65be7a3258fac358afe92d696018bd49d8210d04d4647ed86c209->enter($__internal_d64eca23e8f65be7a3258fac358afe92d696018bd49d8210d04d4647ed86c209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_20e6a2af5d83146c49a12a8777b455b57837b3993be6c65c993b1bf441481166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e6a2af5d83146c49a12a8777b455b57837b3993be6c65c993b1bf441481166->enter($__internal_20e6a2af5d83146c49a12a8777b455b57837b3993be6c65c993b1bf441481166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d64eca23e8f65be7a3258fac358afe92d696018bd49d8210d04d4647ed86c209->leave($__internal_d64eca23e8f65be7a3258fac358afe92d696018bd49d8210d04d4647ed86c209_prof);

        
        $__internal_20e6a2af5d83146c49a12a8777b455b57837b3993be6c65c993b1bf441481166->leave($__internal_20e6a2af5d83146c49a12a8777b455b57837b3993be6c65c993b1bf441481166_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
