<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_1eb1c4c05f5357667b8489a95a1f6e9a72d2103dc6696c783ae8e8f5c85b2f7a extends Twig_Template
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
        $__internal_cbd8a3259d10b2ee0f320a4c3c56cff2f55da637eb43c2d5b6e98044f4210131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd8a3259d10b2ee0f320a4c3c56cff2f55da637eb43c2d5b6e98044f4210131->enter($__internal_cbd8a3259d10b2ee0f320a4c3c56cff2f55da637eb43c2d5b6e98044f4210131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_73250afb0d7466cf8fd26ac07d27ff3d29f52688bee86b0c0e06f650beeabe26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73250afb0d7466cf8fd26ac07d27ff3d29f52688bee86b0c0e06f650beeabe26->enter($__internal_73250afb0d7466cf8fd26ac07d27ff3d29f52688bee86b0c0e06f650beeabe26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_cbd8a3259d10b2ee0f320a4c3c56cff2f55da637eb43c2d5b6e98044f4210131->leave($__internal_cbd8a3259d10b2ee0f320a4c3c56cff2f55da637eb43c2d5b6e98044f4210131_prof);

        
        $__internal_73250afb0d7466cf8fd26ac07d27ff3d29f52688bee86b0c0e06f650beeabe26->leave($__internal_73250afb0d7466cf8fd26ac07d27ff3d29f52688bee86b0c0e06f650beeabe26_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cdd05564ff7a6e33f2f130a1e77bae6cfb7bbd56d806a3a1c17ad5b1974ec075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd05564ff7a6e33f2f130a1e77bae6cfb7bbd56d806a3a1c17ad5b1974ec075->enter($__internal_cdd05564ff7a6e33f2f130a1e77bae6cfb7bbd56d806a3a1c17ad5b1974ec075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_04eb0ffe79db04cfa85fc5abe173bd66d1c0fa2da4129c42e659114551bd14a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04eb0ffe79db04cfa85fc5abe173bd66d1c0fa2da4129c42e659114551bd14a1->enter($__internal_04eb0ffe79db04cfa85fc5abe173bd66d1c0fa2da4129c42e659114551bd14a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_04eb0ffe79db04cfa85fc5abe173bd66d1c0fa2da4129c42e659114551bd14a1->leave($__internal_04eb0ffe79db04cfa85fc5abe173bd66d1c0fa2da4129c42e659114551bd14a1_prof);

        
        $__internal_cdd05564ff7a6e33f2f130a1e77bae6cfb7bbd56d806a3a1c17ad5b1974ec075->leave($__internal_cdd05564ff7a6e33f2f130a1e77bae6cfb7bbd56d806a3a1c17ad5b1974ec075_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_e24f82a8c08f878a2f2fd48691165e8c1a2e1bf33a78eabdceba494dc5d0eb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24f82a8c08f878a2f2fd48691165e8c1a2e1bf33a78eabdceba494dc5d0eb57->enter($__internal_e24f82a8c08f878a2f2fd48691165e8c1a2e1bf33a78eabdceba494dc5d0eb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_bb985a981ab86699864a44bb06ba8eca1d509df303d36451853799b3afb18de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb985a981ab86699864a44bb06ba8eca1d509df303d36451853799b3afb18de8->enter($__internal_bb985a981ab86699864a44bb06ba8eca1d509df303d36451853799b3afb18de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_bb985a981ab86699864a44bb06ba8eca1d509df303d36451853799b3afb18de8->leave($__internal_bb985a981ab86699864a44bb06ba8eca1d509df303d36451853799b3afb18de8_prof);

        
        $__internal_e24f82a8c08f878a2f2fd48691165e8c1a2e1bf33a78eabdceba494dc5d0eb57->leave($__internal_e24f82a8c08f878a2f2fd48691165e8c1a2e1bf33a78eabdceba494dc5d0eb57_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_60f993b02ddf06adb52bb8ee2616e2bcd4ec5332d54cf8fe40e6510832b0ef4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f993b02ddf06adb52bb8ee2616e2bcd4ec5332d54cf8fe40e6510832b0ef4f->enter($__internal_60f993b02ddf06adb52bb8ee2616e2bcd4ec5332d54cf8fe40e6510832b0ef4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_021885ecee368db65e88937b6958972066d9d51997b1b84a60d6f8b29f74bcef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021885ecee368db65e88937b6958972066d9d51997b1b84a60d6f8b29f74bcef->enter($__internal_021885ecee368db65e88937b6958972066d9d51997b1b84a60d6f8b29f74bcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_021885ecee368db65e88937b6958972066d9d51997b1b84a60d6f8b29f74bcef->leave($__internal_021885ecee368db65e88937b6958972066d9d51997b1b84a60d6f8b29f74bcef_prof);

        
        $__internal_60f993b02ddf06adb52bb8ee2616e2bcd4ec5332d54cf8fe40e6510832b0ef4f->leave($__internal_60f993b02ddf06adb52bb8ee2616e2bcd4ec5332d54cf8fe40e6510832b0ef4f_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_b0e5f156f7930c5c0c5c14bb5e47a67fe4effedf052ce129aa057e7d128da24b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e5f156f7930c5c0c5c14bb5e47a67fe4effedf052ce129aa057e7d128da24b->enter($__internal_b0e5f156f7930c5c0c5c14bb5e47a67fe4effedf052ce129aa057e7d128da24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_abc1ec94c26ea020d8fb024830f6ab6653f7eaf36f84bbc09290dbb2886fe920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc1ec94c26ea020d8fb024830f6ab6653f7eaf36f84bbc09290dbb2886fe920->enter($__internal_abc1ec94c26ea020d8fb024830f6ab6653f7eaf36f84bbc09290dbb2886fe920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_abc1ec94c26ea020d8fb024830f6ab6653f7eaf36f84bbc09290dbb2886fe920->leave($__internal_abc1ec94c26ea020d8fb024830f6ab6653f7eaf36f84bbc09290dbb2886fe920_prof);

        
        $__internal_b0e5f156f7930c5c0c5c14bb5e47a67fe4effedf052ce129aa057e7d128da24b->leave($__internal_b0e5f156f7930c5c0c5c14bb5e47a67fe4effedf052ce129aa057e7d128da24b_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_4ef53bbcf6c90c6ff6c2020b2da00219f887cc390bdf59d20cf34bda9569fce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef53bbcf6c90c6ff6c2020b2da00219f887cc390bdf59d20cf34bda9569fce9->enter($__internal_4ef53bbcf6c90c6ff6c2020b2da00219f887cc390bdf59d20cf34bda9569fce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_2d49c8bbd6d4a6f2a185678e29399f61da04bae1be9585b81a71ae4e930b85c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d49c8bbd6d4a6f2a185678e29399f61da04bae1be9585b81a71ae4e930b85c6->enter($__internal_2d49c8bbd6d4a6f2a185678e29399f61da04bae1be9585b81a71ae4e930b85c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_2d49c8bbd6d4a6f2a185678e29399f61da04bae1be9585b81a71ae4e930b85c6->leave($__internal_2d49c8bbd6d4a6f2a185678e29399f61da04bae1be9585b81a71ae4e930b85c6_prof);

        
        $__internal_4ef53bbcf6c90c6ff6c2020b2da00219f887cc390bdf59d20cf34bda9569fce9->leave($__internal_4ef53bbcf6c90c6ff6c2020b2da00219f887cc390bdf59d20cf34bda9569fce9_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4b7708bac5efbfeb3fbd4c2a07a6b3fb97ec4a66be3db8b697b7dd1b94eb023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b7708bac5efbfeb3fbd4c2a07a6b3fb97ec4a66be3db8b697b7dd1b94eb023->enter($__internal_f4b7708bac5efbfeb3fbd4c2a07a6b3fb97ec4a66be3db8b697b7dd1b94eb023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a44cbabf9d35fb8d822f7a59f2818555e4494280f1623f8ddbf2fc13ed12bb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44cbabf9d35fb8d822f7a59f2818555e4494280f1623f8ddbf2fc13ed12bb38->enter($__internal_a44cbabf9d35fb8d822f7a59f2818555e4494280f1623f8ddbf2fc13ed12bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a44cbabf9d35fb8d822f7a59f2818555e4494280f1623f8ddbf2fc13ed12bb38->leave($__internal_a44cbabf9d35fb8d822f7a59f2818555e4494280f1623f8ddbf2fc13ed12bb38_prof);

        
        $__internal_f4b7708bac5efbfeb3fbd4c2a07a6b3fb97ec4a66be3db8b697b7dd1b94eb023->leave($__internal_f4b7708bac5efbfeb3fbd4c2a07a6b3fb97ec4a66be3db8b697b7dd1b94eb023_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0e5b6f58f65c993dd351ee8a4f2f240b8240e0930a5ded4fa5974d9401f95113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5b6f58f65c993dd351ee8a4f2f240b8240e0930a5ded4fa5974d9401f95113->enter($__internal_0e5b6f58f65c993dd351ee8a4f2f240b8240e0930a5ded4fa5974d9401f95113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_c83acb4149f38a8bb6eb5e05a071f1ff7c4e9ba62a3f887ee1e71009b32c6baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83acb4149f38a8bb6eb5e05a071f1ff7c4e9ba62a3f887ee1e71009b32c6baa->enter($__internal_c83acb4149f38a8bb6eb5e05a071f1ff7c4e9ba62a3f887ee1e71009b32c6baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_c83acb4149f38a8bb6eb5e05a071f1ff7c4e9ba62a3f887ee1e71009b32c6baa->leave($__internal_c83acb4149f38a8bb6eb5e05a071f1ff7c4e9ba62a3f887ee1e71009b32c6baa_prof);

        
        $__internal_0e5b6f58f65c993dd351ee8a4f2f240b8240e0930a5ded4fa5974d9401f95113->leave($__internal_0e5b6f58f65c993dd351ee8a4f2f240b8240e0930a5ded4fa5974d9401f95113_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_2ae72c055b6f6bed3a105c01669e77575d728e232f72391c7a8f6a84885265fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae72c055b6f6bed3a105c01669e77575d728e232f72391c7a8f6a84885265fe->enter($__internal_2ae72c055b6f6bed3a105c01669e77575d728e232f72391c7a8f6a84885265fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_01add9963b9d3b7b345085626ef3b5831c24528e117db0a4f2fddfe5795acd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01add9963b9d3b7b345085626ef3b5831c24528e117db0a4f2fddfe5795acd2d->enter($__internal_01add9963b9d3b7b345085626ef3b5831c24528e117db0a4f2fddfe5795acd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_01add9963b9d3b7b345085626ef3b5831c24528e117db0a4f2fddfe5795acd2d->leave($__internal_01add9963b9d3b7b345085626ef3b5831c24528e117db0a4f2fddfe5795acd2d_prof);

        
        $__internal_2ae72c055b6f6bed3a105c01669e77575d728e232f72391c7a8f6a84885265fe->leave($__internal_2ae72c055b6f6bed3a105c01669e77575d728e232f72391c7a8f6a84885265fe_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_28313c66513d219e31377c1c672605528a0f0c1725f2068d731daf0cf6e199d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28313c66513d219e31377c1c672605528a0f0c1725f2068d731daf0cf6e199d1->enter($__internal_28313c66513d219e31377c1c672605528a0f0c1725f2068d731daf0cf6e199d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_4f1b01344ce0352d8af805c23f47103d940cb6c0f544b0c2cf411e63815c712c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1b01344ce0352d8af805c23f47103d940cb6c0f544b0c2cf411e63815c712c->enter($__internal_4f1b01344ce0352d8af805c23f47103d940cb6c0f544b0c2cf411e63815c712c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_4f1b01344ce0352d8af805c23f47103d940cb6c0f544b0c2cf411e63815c712c->leave($__internal_4f1b01344ce0352d8af805c23f47103d940cb6c0f544b0c2cf411e63815c712c_prof);

        
        $__internal_28313c66513d219e31377c1c672605528a0f0c1725f2068d731daf0cf6e199d1->leave($__internal_28313c66513d219e31377c1c672605528a0f0c1725f2068d731daf0cf6e199d1_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_fd7e7e398fc5ee0db9ba096a7c05249d274abdd2c90428df2288954075edacb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7e7e398fc5ee0db9ba096a7c05249d274abdd2c90428df2288954075edacb6->enter($__internal_fd7e7e398fc5ee0db9ba096a7c05249d274abdd2c90428df2288954075edacb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f7a4bf9b72e550399328b06217f65fce5dc68415722105ce3be17fe7b2e9fc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a4bf9b72e550399328b06217f65fce5dc68415722105ce3be17fe7b2e9fc39->enter($__internal_f7a4bf9b72e550399328b06217f65fce5dc68415722105ce3be17fe7b2e9fc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_f7a4bf9b72e550399328b06217f65fce5dc68415722105ce3be17fe7b2e9fc39->leave($__internal_f7a4bf9b72e550399328b06217f65fce5dc68415722105ce3be17fe7b2e9fc39_prof);

        
        $__internal_fd7e7e398fc5ee0db9ba096a7c05249d274abdd2c90428df2288954075edacb6->leave($__internal_fd7e7e398fc5ee0db9ba096a7c05249d274abdd2c90428df2288954075edacb6_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_ec3d89cccdf1fb065902afe865646e5ce4ad3cbeade61e3b02235d014f4711b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3d89cccdf1fb065902afe865646e5ce4ad3cbeade61e3b02235d014f4711b9->enter($__internal_ec3d89cccdf1fb065902afe865646e5ce4ad3cbeade61e3b02235d014f4711b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_0034b659ca6bed2fc1f8189470e49ec64cfbf4c1e41ed041323860543bf2ca4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0034b659ca6bed2fc1f8189470e49ec64cfbf4c1e41ed041323860543bf2ca4d->enter($__internal_0034b659ca6bed2fc1f8189470e49ec64cfbf4c1e41ed041323860543bf2ca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_0034b659ca6bed2fc1f8189470e49ec64cfbf4c1e41ed041323860543bf2ca4d->leave($__internal_0034b659ca6bed2fc1f8189470e49ec64cfbf4c1e41ed041323860543bf2ca4d_prof);

        
        $__internal_ec3d89cccdf1fb065902afe865646e5ce4ad3cbeade61e3b02235d014f4711b9->leave($__internal_ec3d89cccdf1fb065902afe865646e5ce4ad3cbeade61e3b02235d014f4711b9_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_06a15326a4102d24fe37927b042637588bc376afcb75b94706626843991a6299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a15326a4102d24fe37927b042637588bc376afcb75b94706626843991a6299->enter($__internal_06a15326a4102d24fe37927b042637588bc376afcb75b94706626843991a6299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_f74e56ee9bc8c4588630da0a3ad9c1b6dbd92f50de154fd448c7f8800e50ca35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74e56ee9bc8c4588630da0a3ad9c1b6dbd92f50de154fd448c7f8800e50ca35->enter($__internal_f74e56ee9bc8c4588630da0a3ad9c1b6dbd92f50de154fd448c7f8800e50ca35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_f74e56ee9bc8c4588630da0a3ad9c1b6dbd92f50de154fd448c7f8800e50ca35->leave($__internal_f74e56ee9bc8c4588630da0a3ad9c1b6dbd92f50de154fd448c7f8800e50ca35_prof);

        
        $__internal_06a15326a4102d24fe37927b042637588bc376afcb75b94706626843991a6299->leave($__internal_06a15326a4102d24fe37927b042637588bc376afcb75b94706626843991a6299_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_2f25e41fc52fe24e5382b3789a4448d10827486a7bc4365aec238f1415faba9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f25e41fc52fe24e5382b3789a4448d10827486a7bc4365aec238f1415faba9f->enter($__internal_2f25e41fc52fe24e5382b3789a4448d10827486a7bc4365aec238f1415faba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_49823e4baa588282cc455b626a81e64b513399bcf2c939f517b9ce8834569804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49823e4baa588282cc455b626a81e64b513399bcf2c939f517b9ce8834569804->enter($__internal_49823e4baa588282cc455b626a81e64b513399bcf2c939f517b9ce8834569804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_49823e4baa588282cc455b626a81e64b513399bcf2c939f517b9ce8834569804->leave($__internal_49823e4baa588282cc455b626a81e64b513399bcf2c939f517b9ce8834569804_prof);

        
        $__internal_2f25e41fc52fe24e5382b3789a4448d10827486a7bc4365aec238f1415faba9f->leave($__internal_2f25e41fc52fe24e5382b3789a4448d10827486a7bc4365aec238f1415faba9f_prof);

    }

    // line 100
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_294425bf2cca89310eaff03fa23cae4bead68afe2ac1d1632b736a2baeffff0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294425bf2cca89310eaff03fa23cae4bead68afe2ac1d1632b736a2baeffff0c->enter($__internal_294425bf2cca89310eaff03fa23cae4bead68afe2ac1d1632b736a2baeffff0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_c901b46c2dd833d09b058f24669d6f44078fa0a72f785e81a37beb5bac0421fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c901b46c2dd833d09b058f24669d6f44078fa0a72f785e81a37beb5bac0421fe->enter($__internal_c901b46c2dd833d09b058f24669d6f44078fa0a72f785e81a37beb5bac0421fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_c901b46c2dd833d09b058f24669d6f44078fa0a72f785e81a37beb5bac0421fe->leave($__internal_c901b46c2dd833d09b058f24669d6f44078fa0a72f785e81a37beb5bac0421fe_prof);

        
        $__internal_294425bf2cca89310eaff03fa23cae4bead68afe2ac1d1632b736a2baeffff0c->leave($__internal_294425bf2cca89310eaff03fa23cae4bead68afe2ac1d1632b736a2baeffff0c_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_184672a58ef918fa2b80f1709f8e9c42cc1ec6dd3185e7854faaa007bef6ccb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184672a58ef918fa2b80f1709f8e9c42cc1ec6dd3185e7854faaa007bef6ccb9->enter($__internal_184672a58ef918fa2b80f1709f8e9c42cc1ec6dd3185e7854faaa007bef6ccb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_1f2625a099550cdc9d41e813a1e6df09a7b48beba3ecfb257ccc06c62664471b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2625a099550cdc9d41e813a1e6df09a7b48beba3ecfb257ccc06c62664471b->enter($__internal_1f2625a099550cdc9d41e813a1e6df09a7b48beba3ecfb257ccc06c62664471b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_1f2625a099550cdc9d41e813a1e6df09a7b48beba3ecfb257ccc06c62664471b->leave($__internal_1f2625a099550cdc9d41e813a1e6df09a7b48beba3ecfb257ccc06c62664471b_prof);

        
        $__internal_184672a58ef918fa2b80f1709f8e9c42cc1ec6dd3185e7854faaa007bef6ccb9->leave($__internal_184672a58ef918fa2b80f1709f8e9c42cc1ec6dd3185e7854faaa007bef6ccb9_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_a4bde6f59eb97ac85639a63d3157b1d366eaddedcbc0a5b3e7e94acba96ce339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4bde6f59eb97ac85639a63d3157b1d366eaddedcbc0a5b3e7e94acba96ce339->enter($__internal_a4bde6f59eb97ac85639a63d3157b1d366eaddedcbc0a5b3e7e94acba96ce339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_7c65ad81cf01a14cb4c2e6df2f7dd727d05af93f32609aa8389c08617791ab7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c65ad81cf01a14cb4c2e6df2f7dd727d05af93f32609aa8389c08617791ab7c->enter($__internal_7c65ad81cf01a14cb4c2e6df2f7dd727d05af93f32609aa8389c08617791ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_7c65ad81cf01a14cb4c2e6df2f7dd727d05af93f32609aa8389c08617791ab7c->leave($__internal_7c65ad81cf01a14cb4c2e6df2f7dd727d05af93f32609aa8389c08617791ab7c_prof);

        
        $__internal_a4bde6f59eb97ac85639a63d3157b1d366eaddedcbc0a5b3e7e94acba96ce339->leave($__internal_a4bde6f59eb97ac85639a63d3157b1d366eaddedcbc0a5b3e7e94acba96ce339_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_45ca8758ebfded53cd87425bc87e9502608c0dd1be80a85de2814e275c5e6aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ca8758ebfded53cd87425bc87e9502608c0dd1be80a85de2814e275c5e6aec->enter($__internal_45ca8758ebfded53cd87425bc87e9502608c0dd1be80a85de2814e275c5e6aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_652df853d052ccebce37c186be5ab05b586fe29c416365405f42cb53d8d415d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652df853d052ccebce37c186be5ab05b586fe29c416365405f42cb53d8d415d8->enter($__internal_652df853d052ccebce37c186be5ab05b586fe29c416365405f42cb53d8d415d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_652df853d052ccebce37c186be5ab05b586fe29c416365405f42cb53d8d415d8->leave($__internal_652df853d052ccebce37c186be5ab05b586fe29c416365405f42cb53d8d415d8_prof);

        
        $__internal_45ca8758ebfded53cd87425bc87e9502608c0dd1be80a85de2814e275c5e6aec->leave($__internal_45ca8758ebfded53cd87425bc87e9502608c0dd1be80a85de2814e275c5e6aec_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_4a25cf47cfbef6579a5e342920133a044d5a8431f3213a52159e542c2146e20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a25cf47cfbef6579a5e342920133a044d5a8431f3213a52159e542c2146e20b->enter($__internal_4a25cf47cfbef6579a5e342920133a044d5a8431f3213a52159e542c2146e20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_cb7ea69687cc13e498277577e543fd33d18e341ba3a84d1c78b20eeee3fa0874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7ea69687cc13e498277577e543fd33d18e341ba3a84d1c78b20eeee3fa0874->enter($__internal_cb7ea69687cc13e498277577e543fd33d18e341ba3a84d1c78b20eeee3fa0874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_cb7ea69687cc13e498277577e543fd33d18e341ba3a84d1c78b20eeee3fa0874->leave($__internal_cb7ea69687cc13e498277577e543fd33d18e341ba3a84d1c78b20eeee3fa0874_prof);

        
        $__internal_4a25cf47cfbef6579a5e342920133a044d5a8431f3213a52159e542c2146e20b->leave($__internal_4a25cf47cfbef6579a5e342920133a044d5a8431f3213a52159e542c2146e20b_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_5e930c8070ab4414887cebb5cfc9794817f0244ad09539640e37dfee0ecd297d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e930c8070ab4414887cebb5cfc9794817f0244ad09539640e37dfee0ecd297d->enter($__internal_5e930c8070ab4414887cebb5cfc9794817f0244ad09539640e37dfee0ecd297d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_0df2db48ee067e11bc3bfc0d5ad9f01304820b9641d7a1d7d0c91ef951e154f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df2db48ee067e11bc3bfc0d5ad9f01304820b9641d7a1d7d0c91ef951e154f1->enter($__internal_0df2db48ee067e11bc3bfc0d5ad9f01304820b9641d7a1d7d0c91ef951e154f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_0df2db48ee067e11bc3bfc0d5ad9f01304820b9641d7a1d7d0c91ef951e154f1->leave($__internal_0df2db48ee067e11bc3bfc0d5ad9f01304820b9641d7a1d7d0c91ef951e154f1_prof);

        
        $__internal_5e930c8070ab4414887cebb5cfc9794817f0244ad09539640e37dfee0ecd297d->leave($__internal_5e930c8070ab4414887cebb5cfc9794817f0244ad09539640e37dfee0ecd297d_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4f95330a1640496237dd08e64b4a36f4ee48ab88c791e17a2ec4b5d397ea7cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f95330a1640496237dd08e64b4a36f4ee48ab88c791e17a2ec4b5d397ea7cc5->enter($__internal_4f95330a1640496237dd08e64b4a36f4ee48ab88c791e17a2ec4b5d397ea7cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_3b67e4638b1ca317547d9395d80b39ed542d936284e65f8f75cc74d5d36bd7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b67e4638b1ca317547d9395d80b39ed542d936284e65f8f75cc74d5d36bd7b3->enter($__internal_3b67e4638b1ca317547d9395d80b39ed542d936284e65f8f75cc74d5d36bd7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_3b67e4638b1ca317547d9395d80b39ed542d936284e65f8f75cc74d5d36bd7b3->leave($__internal_3b67e4638b1ca317547d9395d80b39ed542d936284e65f8f75cc74d5d36bd7b3_prof);

        
        $__internal_4f95330a1640496237dd08e64b4a36f4ee48ab88c791e17a2ec4b5d397ea7cc5->leave($__internal_4f95330a1640496237dd08e64b4a36f4ee48ab88c791e17a2ec4b5d397ea7cc5_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_032e99ac8ca7681536b39eb56d67d2c962cee4eb81406908e7a9a06e01ae9fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032e99ac8ca7681536b39eb56d67d2c962cee4eb81406908e7a9a06e01ae9fac->enter($__internal_032e99ac8ca7681536b39eb56d67d2c962cee4eb81406908e7a9a06e01ae9fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_6fef49c8c89779b0cae25c8bb7de737ea33d219150517c698643a287b93382a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fef49c8c89779b0cae25c8bb7de737ea33d219150517c698643a287b93382a2->enter($__internal_6fef49c8c89779b0cae25c8bb7de737ea33d219150517c698643a287b93382a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_6fef49c8c89779b0cae25c8bb7de737ea33d219150517c698643a287b93382a2->leave($__internal_6fef49c8c89779b0cae25c8bb7de737ea33d219150517c698643a287b93382a2_prof);

        
        $__internal_032e99ac8ca7681536b39eb56d67d2c962cee4eb81406908e7a9a06e01ae9fac->leave($__internal_032e99ac8ca7681536b39eb56d67d2c962cee4eb81406908e7a9a06e01ae9fac_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_664530cba18346560a0b0c74d98176527000640a2713c2befa3278cbd25dc193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664530cba18346560a0b0c74d98176527000640a2713c2befa3278cbd25dc193->enter($__internal_664530cba18346560a0b0c74d98176527000640a2713c2befa3278cbd25dc193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fe48e7d1b00aeff6d3223503aa42d2aa33cea93df13b4866d204a4008505fe0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe48e7d1b00aeff6d3223503aa42d2aa33cea93df13b4866d204a4008505fe0d->enter($__internal_fe48e7d1b00aeff6d3223503aa42d2aa33cea93df13b4866d204a4008505fe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_fe48e7d1b00aeff6d3223503aa42d2aa33cea93df13b4866d204a4008505fe0d->leave($__internal_fe48e7d1b00aeff6d3223503aa42d2aa33cea93df13b4866d204a4008505fe0d_prof);

        
        $__internal_664530cba18346560a0b0c74d98176527000640a2713c2befa3278cbd25dc193->leave($__internal_664530cba18346560a0b0c74d98176527000640a2713c2befa3278cbd25dc193_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_16ec9229d1ab376f1d1f755f02ad34d2ea8ae674e1308204df84aca469574ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ec9229d1ab376f1d1f755f02ad34d2ea8ae674e1308204df84aca469574ca8->enter($__internal_16ec9229d1ab376f1d1f755f02ad34d2ea8ae674e1308204df84aca469574ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_1315812039fe6d22b4d847bd4a2fc7ba4cc92c032ce1979732f0b7b548e843bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1315812039fe6d22b4d847bd4a2fc7ba4cc92c032ce1979732f0b7b548e843bb->enter($__internal_1315812039fe6d22b4d847bd4a2fc7ba4cc92c032ce1979732f0b7b548e843bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_1315812039fe6d22b4d847bd4a2fc7ba4cc92c032ce1979732f0b7b548e843bb->leave($__internal_1315812039fe6d22b4d847bd4a2fc7ba4cc92c032ce1979732f0b7b548e843bb_prof);

        
        $__internal_16ec9229d1ab376f1d1f755f02ad34d2ea8ae674e1308204df84aca469574ca8->leave($__internal_16ec9229d1ab376f1d1f755f02ad34d2ea8ae674e1308204df84aca469574ca8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
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
", "EasyAdminBundle:default:layout.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/layout.html.twig");
    }
}
