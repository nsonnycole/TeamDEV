<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_aad350cf74d06a5daff199149be97353879d659b4720621c882c9bed21c01ead extends Twig_Template
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
        $__internal_b51edb12f7111e6b0461c956cfcdc588212df13a85c9b6e995c74d8f0279829e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51edb12f7111e6b0461c956cfcdc588212df13a85c9b6e995c74d8f0279829e->enter($__internal_b51edb12f7111e6b0461c956cfcdc588212df13a85c9b6e995c74d8f0279829e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StfalconTinymceBundle:Script:init.html.twig"));

        $__internal_c99895297a24f9144ab60d4abf72a0878e025a7988de4b62a190fa7dd09a1c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99895297a24f9144ab60d4abf72a0878e025a7988de4b62a190fa7dd09a1c4e->enter($__internal_c99895297a24f9144ab60d4abf72a0878e025a7988de4b62a190fa7dd09a1c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StfalconTinymceBundle:Script:init.html.twig"));

        // line 1
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : $this->getContext($context, "tinymce_jquery"))) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.jquery.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/ready.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.standard.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
    //<![CDATA[
    stfalcon_tinymce_config = ";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : $this->getContext($context, "tinymce_config"));
        echo ";
    initTinyMCE();
    //]]>
</script>
";
        
        $__internal_b51edb12f7111e6b0461c956cfcdc588212df13a85c9b6e995c74d8f0279829e->leave($__internal_b51edb12f7111e6b0461c956cfcdc588212df13a85c9b6e995c74d8f0279829e_prof);

        
        $__internal_c99895297a24f9144ab60d4abf72a0878e025a7988de4b62a190fa7dd09a1c4e->leave($__internal_c99895297a24f9144ab60d4abf72a0878e025a7988de4b62a190fa7dd09a1c4e_prof);

    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 12,  52 => 10,  48 => 9,  43 => 8,  38 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if include_jquery %}
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
{% endif %}
{% if tinymce_jquery %}
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js', asset_package_name) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/js/init.jquery.js', asset_package_name) }}\"></script>
{% else %}
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js', asset_package_name) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/js/ready.min.js', asset_package_name) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/js/init.standard.js', asset_package_name) }}\"></script>
{% endif %}
<script type=\"text/javascript\">
    //<![CDATA[
    stfalcon_tinymce_config = {{ tinymce_config|raw }};
    initTinyMCE();
    //]]>
</script>
", "StfalconTinymceBundle:Script:init.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle/Resources/views/Script/init.html.twig");
    }
}
