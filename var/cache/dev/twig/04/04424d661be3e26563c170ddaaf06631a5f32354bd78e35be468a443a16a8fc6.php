<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_961bfde8648a63e6ca98109c709877203143c83022a0427d69aedb9c1c8464b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f2903a2669b49ba741e62df88f7587fa7b3e285a348aeba04a46fde1ce995b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2903a2669b49ba741e62df88f7587fa7b3e285a348aeba04a46fde1ce995b1->enter($__internal_6f2903a2669b49ba741e62df88f7587fa7b3e285a348aeba04a46fde1ce995b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_6423d9809b58042a27194d51c8dffd24b2996d8ae2f19f7d8edf3323bce1dc9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6423d9809b58042a27194d51c8dffd24b2996d8ae2f19f7d8edf3323bce1dc9e->enter($__internal_6423d9809b58042a27194d51c8dffd24b2996d8ae2f19f7d8edf3323bce1dc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_6f2903a2669b49ba741e62df88f7587fa7b3e285a348aeba04a46fde1ce995b1->leave($__internal_6f2903a2669b49ba741e62df88f7587fa7b3e285a348aeba04a46fde1ce995b1_prof);

        
        $__internal_6423d9809b58042a27194d51c8dffd24b2996d8ae2f19f7d8edf3323bce1dc9e->leave($__internal_6423d9809b58042a27194d51c8dffd24b2996d8ae2f19f7d8edf3323bce1dc9e_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_17fb48b56f9bd3f3125ab237d8ba4716926d30b6921cc3fcb740bc7332ecc862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fb48b56f9bd3f3125ab237d8ba4716926d30b6921cc3fcb740bc7332ecc862->enter($__internal_17fb48b56f9bd3f3125ab237d8ba4716926d30b6921cc3fcb740bc7332ecc862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_55e670aaad2c3dd9be39a1b667902c8a86de9ad8bf77e8c0c415e3d09bd471a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e670aaad2c3dd9be39a1b667902c8a86de9ad8bf77e8c0c415e3d09bd471a0->enter($__internal_55e670aaad2c3dd9be39a1b667902c8a86de9ad8bf77e8c0c415e3d09bd471a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_55e670aaad2c3dd9be39a1b667902c8a86de9ad8bf77e8c0c415e3d09bd471a0->leave($__internal_55e670aaad2c3dd9be39a1b667902c8a86de9ad8bf77e8c0c415e3d09bd471a0_prof);

        
        $__internal_17fb48b56f9bd3f3125ab237d8ba4716926d30b6921cc3fcb740bc7332ecc862->leave($__internal_17fb48b56f9bd3f3125ab237d8ba4716926d30b6921cc3fcb740bc7332ecc862_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_962294804001ff14e450f9bfc27d7cba7583199a3699b85eb2af160c9802e961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962294804001ff14e450f9bfc27d7cba7583199a3699b85eb2af160c9802e961->enter($__internal_962294804001ff14e450f9bfc27d7cba7583199a3699b85eb2af160c9802e961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_7fafca1c22a28566d58a3840b267bd26bdedcdb6ebf53fed379e771aa9367f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fafca1c22a28566d58a3840b267bd26bdedcdb6ebf53fed379e771aa9367f94->enter($__internal_7fafca1c22a28566d58a3840b267bd26bdedcdb6ebf53fed379e771aa9367f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_7fafca1c22a28566d58a3840b267bd26bdedcdb6ebf53fed379e771aa9367f94->leave($__internal_7fafca1c22a28566d58a3840b267bd26bdedcdb6ebf53fed379e771aa9367f94_prof);

        
        $__internal_962294804001ff14e450f9bfc27d7cba7583199a3699b85eb2af160c9802e961->leave($__internal_962294804001ff14e450f9bfc27d7cba7583199a3699b85eb2af160c9802e961_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_eeee7c788ab19ea915be8f4bc1b7dc65e30e8ee2b2e086ab6f6f9986837ca89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeee7c788ab19ea915be8f4bc1b7dc65e30e8ee2b2e086ab6f6f9986837ca89d->enter($__internal_eeee7c788ab19ea915be8f4bc1b7dc65e30e8ee2b2e086ab6f6f9986837ca89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_ae730c4aa164e47263681961ef8adff023180b654aaab31fe6f6d3af071dd888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae730c4aa164e47263681961ef8adff023180b654aaab31fe6f6d3af071dd888->enter($__internal_ae730c4aa164e47263681961ef8adff023180b654aaab31fe6f6d3af071dd888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_ae730c4aa164e47263681961ef8adff023180b654aaab31fe6f6d3af071dd888->leave($__internal_ae730c4aa164e47263681961ef8adff023180b654aaab31fe6f6d3af071dd888_prof);

        
        $__internal_eeee7c788ab19ea915be8f4bc1b7dc65e30e8ee2b2e086ab6f6f9986837ca89d->leave($__internal_eeee7c788ab19ea915be8f4bc1b7dc65e30e8ee2b2e086ab6f6f9986837ca89d_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_1ae51986acae4d8482a0a67c87431006999082320719cdf42c2afb4f4eb27365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae51986acae4d8482a0a67c87431006999082320719cdf42c2afb4f4eb27365->enter($__internal_1ae51986acae4d8482a0a67c87431006999082320719cdf42c2afb4f4eb27365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_757978f8fbae4f851ae16f6321e16590177aed0d97445cb8c2d8945333303fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757978f8fbae4f851ae16f6321e16590177aed0d97445cb8c2d8945333303fcb->enter($__internal_757978f8fbae4f851ae16f6321e16590177aed0d97445cb8c2d8945333303fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_757978f8fbae4f851ae16f6321e16590177aed0d97445cb8c2d8945333303fcb->leave($__internal_757978f8fbae4f851ae16f6321e16590177aed0d97445cb8c2d8945333303fcb_prof);

        
        $__internal_1ae51986acae4d8482a0a67c87431006999082320719cdf42c2afb4f4eb27365->leave($__internal_1ae51986acae4d8482a0a67c87431006999082320719cdf42c2afb4f4eb27365_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_0885e2cd10f4844eca0ee83745b94048884ca9e1902da158dd62441b17913d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0885e2cd10f4844eca0ee83745b94048884ca9e1902da158dd62441b17913d57->enter($__internal_0885e2cd10f4844eca0ee83745b94048884ca9e1902da158dd62441b17913d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_ae9c8e80edd6513199f823b57b3d8a3fc8229b937787536db6895ccafb5d01ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9c8e80edd6513199f823b57b3d8a3fc8229b937787536db6895ccafb5d01ef->enter($__internal_ae9c8e80edd6513199f823b57b3d8a3fc8229b937787536db6895ccafb5d01ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_ae9c8e80edd6513199f823b57b3d8a3fc8229b937787536db6895ccafb5d01ef->leave($__internal_ae9c8e80edd6513199f823b57b3d8a3fc8229b937787536db6895ccafb5d01ef_prof);

        
        $__internal_0885e2cd10f4844eca0ee83745b94048884ca9e1902da158dd62441b17913d57->leave($__internal_0885e2cd10f4844eca0ee83745b94048884ca9e1902da158dd62441b17913d57_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_52f7c93499da95f30101916859582831ca62f6faf664ab906092e74c00c5934f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f7c93499da95f30101916859582831ca62f6faf664ab906092e74c00c5934f->enter($__internal_52f7c93499da95f30101916859582831ca62f6faf664ab906092e74c00c5934f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2d0f4b2a76edbf16e993c171b42302b60fa16672bb4f2a94df557e3537bf4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d0f4b2a76edbf16e993c171b42302b60fa16672bb4f2a94df557e3537bf4b6->enter($__internal_e2d0f4b2a76edbf16e993c171b42302b60fa16672bb4f2a94df557e3537bf4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 60
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_e2d0f4b2a76edbf16e993c171b42302b60fa16672bb4f2a94df557e3537bf4b6->leave($__internal_e2d0f4b2a76edbf16e993c171b42302b60fa16672bb4f2a94df557e3537bf4b6_prof);

        
        $__internal_52f7c93499da95f30101916859582831ca62f6faf664ab906092e74c00c5934f->leave($__internal_52f7c93499da95f30101916859582831ca62f6faf664ab906092e74c00c5934f_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3fabae89b1779e9251ff5ffab995665df3c8058b40f1bc8ec55ab29382d56a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fabae89b1779e9251ff5ffab995665df3c8058b40f1bc8ec55ab29382d56a9a->enter($__internal_3fabae89b1779e9251ff5ffab995665df3c8058b40f1bc8ec55ab29382d56a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_86c6ff75e7002d55e8544418fb885dba745099c999f6889252c714b976bc526d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c6ff75e7002d55e8544418fb885dba745099c999f6889252c714b976bc526d->enter($__internal_86c6ff75e7002d55e8544418fb885dba745099c999f6889252c714b976bc526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_86c6ff75e7002d55e8544418fb885dba745099c999f6889252c714b976bc526d->leave($__internal_86c6ff75e7002d55e8544418fb885dba745099c999f6889252c714b976bc526d_prof);

        
        $__internal_3fabae89b1779e9251ff5ffab995665df3c8058b40f1bc8ec55ab29382d56a9a->leave($__internal_3fabae89b1779e9251ff5ffab995665df3c8058b40f1bc8ec55ab29382d56a9a_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9f483cc4d87cc0d1562095c78e19832a60345428f401bbbd3760990b57d796f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f483cc4d87cc0d1562095c78e19832a60345428f401bbbd3760990b57d796f2->enter($__internal_9f483cc4d87cc0d1562095c78e19832a60345428f401bbbd3760990b57d796f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_a53405e3e1d0f03e280f6a25d97d4c64f6857d564b0d55e0d48504b64e8af0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53405e3e1d0f03e280f6a25d97d4c64f6857d564b0d55e0d48504b64e8af0cf->enter($__internal_a53405e3e1d0f03e280f6a25d97d4c64f6857d564b0d55e0d48504b64e8af0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_a53405e3e1d0f03e280f6a25d97d4c64f6857d564b0d55e0d48504b64e8af0cf->leave($__internal_a53405e3e1d0f03e280f6a25d97d4c64f6857d564b0d55e0d48504b64e8af0cf_prof);

        
        $__internal_9f483cc4d87cc0d1562095c78e19832a60345428f401bbbd3760990b57d796f2->leave($__internal_9f483cc4d87cc0d1562095c78e19832a60345428f401bbbd3760990b57d796f2_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_dd24c11619ae7c94e69e238cbe44a8c9cb74be1807aac0469b36f055a6414bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd24c11619ae7c94e69e238cbe44a8c9cb74be1807aac0469b36f055a6414bb9->enter($__internal_dd24c11619ae7c94e69e238cbe44a8c9cb74be1807aac0469b36f055a6414bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_6d0ba8ee99187d5dd6b4de6ca1213f62cb81b843fdac60edb18c55a95b83ae8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0ba8ee99187d5dd6b4de6ca1213f62cb81b843fdac60edb18c55a95b83ae8a->enter($__internal_6d0ba8ee99187d5dd6b4de6ca1213f62cb81b843fdac60edb18c55a95b83ae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 61
        echo "            <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_6d0ba8ee99187d5dd6b4de6ca1213f62cb81b843fdac60edb18c55a95b83ae8a->leave($__internal_6d0ba8ee99187d5dd6b4de6ca1213f62cb81b843fdac60edb18c55a95b83ae8a_prof);

        
        $__internal_dd24c11619ae7c94e69e238cbe44a8c9cb74be1807aac0469b36f055a6414bb9->leave($__internal_dd24c11619ae7c94e69e238cbe44a8c9cb74be1807aac0469b36f055a6414bb9_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_253cc7ed00b1d7dc65ffd29197ebe8b610018be3982247e2ad15106f44cddc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253cc7ed00b1d7dc65ffd29197ebe8b610018be3982247e2ad15106f44cddc98->enter($__internal_253cc7ed00b1d7dc65ffd29197ebe8b610018be3982247e2ad15106f44cddc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5d101492ffdd49d7e5e105c48b9ab904ddd6d3e755fa44b63ba5c08d136fa40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d101492ffdd49d7e5e105c48b9ab904ddd6d3e755fa44b63ba5c08d136fa40c->enter($__internal_5d101492ffdd49d7e5e105c48b9ab904ddd6d3e755fa44b63ba5c08d136fa40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 69
        $this->displayBlock('header_logo', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 77
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_5d101492ffdd49d7e5e105c48b9ab904ddd6d3e755fa44b63ba5c08d136fa40c->leave($__internal_5d101492ffdd49d7e5e105c48b9ab904ddd6d3e755fa44b63ba5c08d136fa40c_prof);

        
        $__internal_253cc7ed00b1d7dc65ffd29197ebe8b610018be3982247e2ad15106f44cddc98->leave($__internal_253cc7ed00b1d7dc65ffd29197ebe8b610018be3982247e2ad15106f44cddc98_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_c3f9e958743ff58746d3f1a16d6e67e3ad8357831ca42aaabdc4fbf1635c3e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f9e958743ff58746d3f1a16d6e67e3ad8357831ca42aaabdc4fbf1635c3e12->enter($__internal_c3f9e958743ff58746d3f1a16d6e67e3ad8357831ca42aaabdc4fbf1635c3e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_beaf05595b0cbbe6c7f598beb7c2092afec1952fa57a59ab0f74a5023bc0d6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beaf05595b0cbbe6c7f598beb7c2092afec1952fa57a59ab0f74a5023bc0d6bf->enter($__internal_beaf05595b0cbbe6c7f598beb7c2092afec1952fa57a59ab0f74a5023bc0d6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 70
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 71
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_beaf05595b0cbbe6c7f598beb7c2092afec1952fa57a59ab0f74a5023bc0d6bf->leave($__internal_beaf05595b0cbbe6c7f598beb7c2092afec1952fa57a59ab0f74a5023bc0d6bf_prof);

        
        $__internal_c3f9e958743ff58746d3f1a16d6e67e3ad8357831ca42aaabdc4fbf1635c3e12->leave($__internal_c3f9e958743ff58746d3f1a16d6e67e3ad8357831ca42aaabdc4fbf1635c3e12_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_218d7013b3275db095e477542e5b971be3d1e6d2fa6d88b63ae48eb7724a34d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218d7013b3275db095e477542e5b971be3d1e6d2fa6d88b63ae48eb7724a34d9->enter($__internal_218d7013b3275db095e477542e5b971be3d1e6d2fa6d88b63ae48eb7724a34d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_d56238fcd6e284e6455ac2bfc93a631b2427929a55c8319c29ac0004728e8477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56238fcd6e284e6455ac2bfc93a631b2427929a55c8319c29ac0004728e8477->enter($__internal_d56238fcd6e284e6455ac2bfc93a631b2427929a55c8319c29ac0004728e8477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 78
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 79
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 81
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_d56238fcd6e284e6455ac2bfc93a631b2427929a55c8319c29ac0004728e8477->leave($__internal_d56238fcd6e284e6455ac2bfc93a631b2427929a55c8319c29ac0004728e8477_prof);

        
        $__internal_218d7013b3275db095e477542e5b971be3d1e6d2fa6d88b63ae48eb7724a34d9->leave($__internal_218d7013b3275db095e477542e5b971be3d1e6d2fa6d88b63ae48eb7724a34d9_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_0c0a2eb0721bdfb657cefd05bd3713e53e87b62cec6561c5336344f33a09a366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0a2eb0721bdfb657cefd05bd3713e53e87b62cec6561c5336344f33a09a366->enter($__internal_0c0a2eb0721bdfb657cefd05bd3713e53e87b62cec6561c5336344f33a09a366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_a1810cb0e9906521de05b7847b7ce488eb39068fd481f833334e9bf1aff1588b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1810cb0e9906521de05b7847b7ce488eb39068fd481f833334e9bf1aff1588b->enter($__internal_a1810cb0e9906521de05b7847b7ce488eb39068fd481f833334e9bf1aff1588b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 82
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 84
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), false)) : (false)) == false)) {
            // line 85
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 87
(isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path"))) {
            // line 88
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 91
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 100
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_a1810cb0e9906521de05b7847b7ce488eb39068fd481f833334e9bf1aff1588b->leave($__internal_a1810cb0e9906521de05b7847b7ce488eb39068fd481f833334e9bf1aff1588b_prof);

        
        $__internal_0c0a2eb0721bdfb657cefd05bd3713e53e87b62cec6561c5336344f33a09a366->leave($__internal_0c0a2eb0721bdfb657cefd05bd3713e53e87b62cec6561c5336344f33a09a366_prof);

    }

    // line 100
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_7dc9d3f8e5cfdfcca5ac10ff3d8a707e7168f8a57fc18dc0b3cc05abe5fba007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc9d3f8e5cfdfcca5ac10ff3d8a707e7168f8a57fc18dc0b3cc05abe5fba007->enter($__internal_7dc9d3f8e5cfdfcca5ac10ff3d8a707e7168f8a57fc18dc0b3cc05abe5fba007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_64e5f543e398ae481c37952488b88a6083441ff9972f2da0c59fb5a93ec3e5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e5f543e398ae481c37952488b88a6083441ff9972f2da0c59fb5a93ec3e5aa->enter($__internal_64e5f543e398ae481c37952488b88a6083441ff9972f2da0c59fb5a93ec3e5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 101
        echo "                                                <li>
                                                    <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_64e5f543e398ae481c37952488b88a6083441ff9972f2da0c59fb5a93ec3e5aa->leave($__internal_64e5f543e398ae481c37952488b88a6083441ff9972f2da0c59fb5a93ec3e5aa_prof);

        
        $__internal_7dc9d3f8e5cfdfcca5ac10ff3d8a707e7168f8a57fc18dc0b3cc05abe5fba007->leave($__internal_7dc9d3f8e5cfdfcca5ac10ff3d8a707e7168f8a57fc18dc0b3cc05abe5fba007_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7c580eac37aa06974418d03cacb23442e61d121555b5800bf84d6e4c83a60e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c580eac37aa06974418d03cacb23442e61d121555b5800bf84d6e4c83a60e81->enter($__internal_7c580eac37aa06974418d03cacb23442e61d121555b5800bf84d6e4c83a60e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_d25051f3fa9d3d007c9af72cf30dcc054cf75e1c76473a72823c9ea175862ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25051f3fa9d3d007c9af72cf30dcc054cf75e1c76473a72823c9ea175862ec1->enter($__internal_d25051f3fa9d3d007c9af72cf30dcc054cf75e1c76473a72823c9ea175862ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_d25051f3fa9d3d007c9af72cf30dcc054cf75e1c76473a72823c9ea175862ec1->leave($__internal_d25051f3fa9d3d007c9af72cf30dcc054cf75e1c76473a72823c9ea175862ec1_prof);

        
        $__internal_7c580eac37aa06974418d03cacb23442e61d121555b5800bf84d6e4c83a60e81->leave($__internal_7c580eac37aa06974418d03cacb23442e61d121555b5800bf84d6e4c83a60e81_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_76c6f9026bb96766304af6598cc8bbaf8fc7b6d51e6b5075388073bab9e8d1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c6f9026bb96766304af6598cc8bbaf8fc7b6d51e6b5075388073bab9e8d1ed->enter($__internal_76c6f9026bb96766304af6598cc8bbaf8fc7b6d51e6b5075388073bab9e8d1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_c9300bc7a1156df4053877eae416f9ef54c941a7a0b8e1409229e2c9b1ba2a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9300bc7a1156df4053877eae416f9ef54c941a7a0b8e1409229e2c9b1ba2a8f->enter($__internal_c9300bc7a1156df4053877eae416f9ef54c941a7a0b8e1409229e2c9b1ba2a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_c9300bc7a1156df4053877eae416f9ef54c941a7a0b8e1409229e2c9b1ba2a8f->leave($__internal_c9300bc7a1156df4053877eae416f9ef54c941a7a0b8e1409229e2c9b1ba2a8f_prof);

        
        $__internal_76c6f9026bb96766304af6598cc8bbaf8fc7b6d51e6b5075388073bab9e8d1ed->leave($__internal_76c6f9026bb96766304af6598cc8bbaf8fc7b6d51e6b5075388073bab9e8d1ed_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5ffa4511393f1af0a555ea45386e5dba342459c7cb1b49bcd0c49b618a184c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ffa4511393f1af0a555ea45386e5dba342459c7cb1b49bcd0c49b618a184c5->enter($__internal_e5ffa4511393f1af0a555ea45386e5dba342459c7cb1b49bcd0c49b618a184c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6ec2a9223fbb788895dec455aea1c2dd49f3ead07352f22e7db50688589bc7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec2a9223fbb788895dec455aea1c2dd49f3ead07352f22e7db50688589bc7ce->enter($__internal_6ec2a9223fbb788895dec455aea1c2dd49f3ead07352f22e7db50688589bc7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_6ec2a9223fbb788895dec455aea1c2dd49f3ead07352f22e7db50688589bc7ce->leave($__internal_6ec2a9223fbb788895dec455aea1c2dd49f3ead07352f22e7db50688589bc7ce_prof);

        
        $__internal_e5ffa4511393f1af0a555ea45386e5dba342459c7cb1b49bcd0c49b618a184c5->leave($__internal_e5ffa4511393f1af0a555ea45386e5dba342459c7cb1b49bcd0c49b618a184c5_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_146104517689c882cd7c41b9470a86d665d256223bd7558161c6df573f3d97ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146104517689c882cd7c41b9470a86d665d256223bd7558161c6df573f3d97ff->enter($__internal_146104517689c882cd7c41b9470a86d665d256223bd7558161c6df573f3d97ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_b5d74279fed7e2aec772297e57eb2e2b90672451899810c092b924e6aa875824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d74279fed7e2aec772297e57eb2e2b90672451899810c092b924e6aa875824->enter($__internal_b5d74279fed7e2aec772297e57eb2e2b90672451899810c092b924e6aa875824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_b5d74279fed7e2aec772297e57eb2e2b90672451899810c092b924e6aa875824->leave($__internal_b5d74279fed7e2aec772297e57eb2e2b90672451899810c092b924e6aa875824_prof);

        
        $__internal_146104517689c882cd7c41b9470a86d665d256223bd7558161c6df573f3d97ff->leave($__internal_146104517689c882cd7c41b9470a86d665d256223bd7558161c6df573f3d97ff_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_523d5c2ad355d0d984ccca33416b50f2555c0abe3deab472d7834beb0def283b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523d5c2ad355d0d984ccca33416b50f2555c0abe3deab472d7834beb0def283b->enter($__internal_523d5c2ad355d0d984ccca33416b50f2555c0abe3deab472d7834beb0def283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_89138942a2adad5e725fb0f84ed95628c1fb402a19f3f779dc19eb9a7cce6e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89138942a2adad5e725fb0f84ed95628c1fb402a19f3f779dc19eb9a7cce6e5b->enter($__internal_89138942a2adad5e725fb0f84ed95628c1fb402a19f3f779dc19eb9a7cce6e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_89138942a2adad5e725fb0f84ed95628c1fb402a19f3f779dc19eb9a7cce6e5b->leave($__internal_89138942a2adad5e725fb0f84ed95628c1fb402a19f3f779dc19eb9a7cce6e5b_prof);

        
        $__internal_523d5c2ad355d0d984ccca33416b50f2555c0abe3deab472d7834beb0def283b->leave($__internal_523d5c2ad355d0d984ccca33416b50f2555c0abe3deab472d7834beb0def283b_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4ebd2c1da944df4887eeab37e269676744783feb7647ca4c3a119aa7583cba6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebd2c1da944df4887eeab37e269676744783feb7647ca4c3a119aa7583cba6e->enter($__internal_4ebd2c1da944df4887eeab37e269676744783feb7647ca4c3a119aa7583cba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_7caccade8bd2ed5024e44ee2743a55aee03a994cb337d791d1f3f2391b133bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7caccade8bd2ed5024e44ee2743a55aee03a994cb337d791d1f3f2391b133bc1->enter($__internal_7caccade8bd2ed5024e44ee2743a55aee03a994cb337d791d1f3f2391b133bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_7caccade8bd2ed5024e44ee2743a55aee03a994cb337d791d1f3f2391b133bc1->leave($__internal_7caccade8bd2ed5024e44ee2743a55aee03a994cb337d791d1f3f2391b133bc1_prof);

        
        $__internal_4ebd2c1da944df4887eeab37e269676744783feb7647ca4c3a119aa7583cba6e->leave($__internal_4ebd2c1da944df4887eeab37e269676744783feb7647ca4c3a119aa7583cba6e_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_43a871b4bcd30137d0e24403ad76ce30f234a72ad8eed33efeb48793fb83ec1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a871b4bcd30137d0e24403ad76ce30f234a72ad8eed33efeb48793fb83ec1b->enter($__internal_43a871b4bcd30137d0e24403ad76ce30f234a72ad8eed33efeb48793fb83ec1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_ec6ece59b458b512e44e70646eb16daadc966faeffa69d9f911ff5af2f38904f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6ece59b458b512e44e70646eb16daadc966faeffa69d9f911ff5af2f38904f->enter($__internal_ec6ece59b458b512e44e70646eb16daadc966faeffa69d9f911ff5af2f38904f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_ec6ece59b458b512e44e70646eb16daadc966faeffa69d9f911ff5af2f38904f->leave($__internal_ec6ece59b458b512e44e70646eb16daadc966faeffa69d9f911ff5af2f38904f_prof);

        
        $__internal_43a871b4bcd30137d0e24403ad76ce30f234a72ad8eed33efeb48793fb83ec1b->leave($__internal_43a871b4bcd30137d0e24403ad76ce30f234a72ad8eed33efeb48793fb83ec1b_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_f073947e6e3048696da16cc4c163ec9e443ab1eda20b4f6df67ca2d78bf0752a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f073947e6e3048696da16cc4c163ec9e443ab1eda20b4f6df67ca2d78bf0752a->enter($__internal_f073947e6e3048696da16cc4c163ec9e443ab1eda20b4f6df67ca2d78bf0752a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5daf4d35c4c09188c2a13e01691b45ace26adcc9b252ac06cc3a2c7efc31e584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5daf4d35c4c09188c2a13e01691b45ace26adcc9b252ac06cc3a2c7efc31e584->enter($__internal_5daf4d35c4c09188c2a13e01691b45ace26adcc9b252ac06cc3a2c7efc31e584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_5daf4d35c4c09188c2a13e01691b45ace26adcc9b252ac06cc3a2c7efc31e584->leave($__internal_5daf4d35c4c09188c2a13e01691b45ace26adcc9b252ac06cc3a2c7efc31e584_prof);

        
        $__internal_f073947e6e3048696da16cc4c163ec9e443ab1eda20b4f6df67ca2d78bf0752a->leave($__internal_f073947e6e3048696da16cc4c163ec9e443ab1eda20b4f6df67ca2d78bf0752a_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a95cc897bc05ffb2f92701f4b316c49ec20233b3a99336c693c9a21716d12a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95cc897bc05ffb2f92701f4b316c49ec20233b3a99336c693c9a21716d12a28->enter($__internal_a95cc897bc05ffb2f92701f4b316c49ec20233b3a99336c693c9a21716d12a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_7152ed97ee16588386cd0cb3cf1ff433de25c38d344e150f649d35046af85efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7152ed97ee16588386cd0cb3cf1ff433de25c38d344e150f649d35046af85efb->enter($__internal_7152ed97ee16588386cd0cb3cf1ff433de25c38d344e150f649d35046af85efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_7152ed97ee16588386cd0cb3cf1ff433de25c38d344e150f649d35046af85efb->leave($__internal_7152ed97ee16588386cd0cb3cf1ff433de25c38d344e150f649d35046af85efb_prof);

        
        $__internal_a95cc897bc05ffb2f92701f4b316c49ec20233b3a99336c693c9a21716d12a28->leave($__internal_a95cc897bc05ffb2f92701f4b316c49ec20233b3a99336c693c9a21716d12a28_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 160,  769 => 153,  759 => 149,  752 => 145,  748 => 143,  745 => 142,  736 => 141,  707 => 139,  698 => 138,  685 => 134,  676 => 133,  665 => 154,  663 => 153,  658 => 150,  655 => 141,  653 => 138,  649 => 136,  646 => 133,  637 => 132,  626 => 125,  624 => 122,  622 => 121,  613 => 120,  602 => 127,  600 => 120,  597 => 119,  588 => 118,  573 => 102,  570 => 101,  561 => 100,  551 => 108,  546 => 105,  544 => 100,  535 => 94,  530 => 91,  525 => 89,  522 => 88,  520 => 87,  516 => 86,  513 => 85,  511 => 84,  505 => 82,  496 => 81,  484 => 109,  482 => 81,  478 => 79,  475 => 78,  466 => 77,  453 => 71,  444 => 70,  435 => 69,  423 => 112,  421 => 77,  416 => 74,  414 => 69,  407 => 65,  403 => 63,  394 => 62,  383 => 156,  381 => 132,  376 => 129,  374 => 118,  369 => 115,  367 => 62,  364 => 61,  355 => 60,  322 => 58,  311 => 165,  302 => 163,  298 => 162,  295 => 161,  293 => 160,  289 => 158,  287 => 60,  277 => 58,  268 => 57,  247 => 30,  238 => 29,  226 => 43,  223 => 42,  220 => 29,  211 => 28,  196 => 25,  193 => 24,  184 => 23,  171 => 15,  165 => 13,  156 => 12,  138 => 10,  127 => 167,  125 => 57,  118 => 53,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/layout.html.twig");
    }
}
