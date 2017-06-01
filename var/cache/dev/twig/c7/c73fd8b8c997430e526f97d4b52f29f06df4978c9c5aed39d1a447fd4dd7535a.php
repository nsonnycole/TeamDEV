<?php

/* EasyAdminBundle:default:list.html.twig */
class __TwigTemplate_8cfad0cddee7f540cb05c73a9886bd4adf66222ca2d164dadf49453739db382c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f31b45dc03f8dab955cb8b472320c8b3d9c363e706d1e4d7a84ae236022d2097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31b45dc03f8dab955cb8b472320c8b3d9c363e706d1e4d7a84ae236022d2097->enter($__internal_f31b45dc03f8dab955cb8b472320c8b3d9c363e706d1e4d7a84ae236022d2097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        $__internal_e131a90f920cea5b9ce37f235c8cd5a5c55c98c0d1cbdf11a08c0cdf33eb69e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e131a90f920cea5b9ce37f235c8cd5a5c55c98c0d1cbdf11a08c0cdf33eb69e1->enter($__internal_e131a90f920cea5b9ce37f235c8cd5a5c55c98c0d1cbdf11a08c0cdf33eb69e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 2
(isset($context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"]) ? $context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"] : $this->getContext($context, "__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 2
(isset($context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"]) ? $context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"] : $this->getContext($context, "__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"))));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : (""))));
        }
        // line 21
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", (isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters"))))));
        // line 26
        ob_start();
        // line 27
        ob_start();
        // line 28
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 29
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "list", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 2
(isset($context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"]) ? $context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"] : $this->getContext($context, "__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a")))) : (            // line 32
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["_content_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f31b45dc03f8dab955cb8b472320c8b3d9c363e706d1e4d7a84ae236022d2097->leave($__internal_f31b45dc03f8dab955cb8b472320c8b3d9c363e706d1e4d7a84ae236022d2097_prof);

        
        $__internal_e131a90f920cea5b9ce37f235c8cd5a5c55c98c0d1cbdf11a08c0cdf33eb69e1->leave($__internal_e131a90f920cea5b9ce37f235c8cd5a5c55c98c0d1cbdf11a08c0cdf33eb69e1_prof);

    }

    // line 23
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_82f2ed0441739dca68cdc0af07530c9c50b07e37f0ce875680413ff86bd94ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f2ed0441739dca68cdc0af07530c9c50b07e37f0ce875680413ff86bd94ad5->enter($__internal_82f2ed0441739dca68cdc0af07530c9c50b07e37f0ce875680413ff86bd94ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_2d86b769cab6385b564ea056cda389da6b635fb9bb103db48dee99ededd959cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d86b769cab6385b564ea056cda389da6b635fb9bb103db48dee99ededd959cd->enter($__internal_2d86b769cab6385b564ea056cda389da6b635fb9bb103db48dee99ededd959cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_2d86b769cab6385b564ea056cda389da6b635fb9bb103db48dee99ededd959cd->leave($__internal_2d86b769cab6385b564ea056cda389da6b635fb9bb103db48dee99ededd959cd_prof);

        
        $__internal_82f2ed0441739dca68cdc0af07530c9c50b07e37f0ce875680413ff86bd94ad5->leave($__internal_82f2ed0441739dca68cdc0af07530c9c50b07e37f0ce875680413ff86bd94ad5_prof);

    }

    // line 24
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_bb95a24f3daf97755ffca950737dfdc15fcb438c12114cb435e59804bf31b269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb95a24f3daf97755ffca950737dfdc15fcb438c12114cb435e59804bf31b269->enter($__internal_bb95a24f3daf97755ffca950737dfdc15fcb438c12114cb435e59804bf31b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_01a7d99147d44a4b474a76026d1e489f324e1d165b5c6e870bd900aec93caa88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a7d99147d44a4b474a76026d1e489f324e1d165b5c6e870bd900aec93caa88->enter($__internal_01a7d99147d44a4b474a76026d1e489f324e1d165b5c6e870bd900aec93caa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_01a7d99147d44a4b474a76026d1e489f324e1d165b5c6e870bd900aec93caa88->leave($__internal_01a7d99147d44a4b474a76026d1e489f324e1d165b5c6e870bd900aec93caa88_prof);

        
        $__internal_bb95a24f3daf97755ffca950737dfdc15fcb438c12114cb435e59804bf31b269->leave($__internal_bb95a24f3daf97755ffca950737dfdc15fcb438c12114cb435e59804bf31b269_prof);

    }

    // line 37
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_31037719eb3f46f4e3ec860e0f285bca152a3cc73c58fc8871bd0ed872ee06ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31037719eb3f46f4e3ec860e0f285bca152a3cc73c58fc8871bd0ed872ee06ab->enter($__internal_31037719eb3f46f4e3ec860e0f285bca152a3cc73c58fc8871bd0ed872ee06ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_9858b8e3194185a4de6dae477ff82691724a0a1d3746f11d1bb87bb91c0fac95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9858b8e3194185a4de6dae477ff82691724a0a1d3746f11d1bb87bb91c0fac95->enter($__internal_9858b8e3194185a4de6dae477ff82691724a0a1d3746f11d1bb87bb91c0fac95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags((isset($context["_content_title"]) ? $context["_content_title"] : $this->getContext($context, "_content_title")));
        
        $__internal_9858b8e3194185a4de6dae477ff82691724a0a1d3746f11d1bb87bb91c0fac95->leave($__internal_9858b8e3194185a4de6dae477ff82691724a0a1d3746f11d1bb87bb91c0fac95_prof);

        
        $__internal_31037719eb3f46f4e3ec860e0f285bca152a3cc73c58fc8871bd0ed872ee06ab->leave($__internal_31037719eb3f46f4e3ec860e0f285bca152a3cc73c58fc8871bd0ed872ee06ab_prof);

    }

    // line 39
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_59c026a5b12b75f8df464cee725c7a5e7aa682dacb56c71986fa89062a71c636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c026a5b12b75f8df464cee725c7a5e7aa682dacb56c71986fa89062a71c636->enter($__internal_59c026a5b12b75f8df464cee725c7a5e7aa682dacb56c71986fa89062a71c636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_bd92084d6b45aa37b067597da5408a42bda2f8743e33728bd927280067ed4c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd92084d6b45aa37b067597da5408a42bda2f8743e33728bd927280067ed4c97->enter($__internal_bd92084d6b45aa37b067597da5408a42bda2f8743e33728bd927280067ed4c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 40
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 42
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 45
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 49
        $this->displayBlock('global_actions', $context, $blocks);
        // line 90
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_bd92084d6b45aa37b067597da5408a42bda2f8743e33728bd927280067ed4c97->leave($__internal_bd92084d6b45aa37b067597da5408a42bda2f8743e33728bd927280067ed4c97_prof);

        
        $__internal_59c026a5b12b75f8df464cee725c7a5e7aa682dacb56c71986fa89062a71c636->leave($__internal_59c026a5b12b75f8df464cee725c7a5e7aa682dacb56c71986fa89062a71c636_prof);

    }

    // line 42
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_c2552fcfe2d87dcaa0d121f072917e1403bcbb24fc143c49089b68f51989286a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2552fcfe2d87dcaa0d121f072917e1403bcbb24fc143c49089b68f51989286a->enter($__internal_c2552fcfe2d87dcaa0d121f072917e1403bcbb24fc143c49089b68f51989286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_52f45a8faffd5a64200f928f99f899acaeda612fa88d65e1faac7d992c927916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f45a8faffd5a64200f928f99f899acaeda612fa88d65e1faac7d992c927916->enter($__internal_52f45a8faffd5a64200f928f99f899acaeda612fa88d65e1faac7d992c927916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 43
        echo "                <h1 class=\"title\">";
        echo twig_escape_filter($this->env, (isset($context["_content_title"]) ? $context["_content_title"] : $this->getContext($context, "_content_title")), "html", null, true);
        echo "</h1>
            ";
        
        $__internal_52f45a8faffd5a64200f928f99f899acaeda612fa88d65e1faac7d992c927916->leave($__internal_52f45a8faffd5a64200f928f99f899acaeda612fa88d65e1faac7d992c927916_prof);

        
        $__internal_c2552fcfe2d87dcaa0d121f072917e1403bcbb24fc143c49089b68f51989286a->leave($__internal_c2552fcfe2d87dcaa0d121f072917e1403bcbb24fc143c49089b68f51989286a_prof);

    }

    // line 49
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_d45b29da8790687b547ee49efe1ee9d6096473a98b0bc530fd48858570e3d48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45b29da8790687b547ee49efe1ee9d6096473a98b0bc530fd48858570e3d48a->enter($__internal_d45b29da8790687b547ee49efe1ee9d6096473a98b0bc530fd48858570e3d48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_26509605bd443a19478d04b3a57d3698f32598b11f214fd2844fef2be6c3f436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26509605bd443a19478d04b3a57d3698f32598b11f214fd2844fef2be6c3f436->enter($__internal_26509605bd443a19478d04b3a57d3698f32598b11f214fd2844fef2be6c3f436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 50
        echo "                    ";
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 51
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 52
            echo "
                        ";
            // line 53
            $this->displayBlock('search_action', $context, $blocks);
            // line 76
            echo "                    ";
        }
        // line 77
        echo "
                    ";
        // line 78
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 79
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 80
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 88
            echo "                    ";
        }
        // line 89
        echo "                ";
        
        $__internal_26509605bd443a19478d04b3a57d3698f32598b11f214fd2844fef2be6c3f436->leave($__internal_26509605bd443a19478d04b3a57d3698f32598b11f214fd2844fef2be6c3f436_prof);

        
        $__internal_d45b29da8790687b547ee49efe1ee9d6096473a98b0bc530fd48858570e3d48a->leave($__internal_d45b29da8790687b547ee49efe1ee9d6096473a98b0bc530fd48858570e3d48a_prof);

    }

    // line 53
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_e603d25e0d68a4f4814c5d3295eb270bb55f4d9de6cec2a11f8d41cd40c73abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e603d25e0d68a4f4814c5d3295eb270bb55f4d9de6cec2a11f8d41cd40c73abc->enter($__internal_e603d25e0d68a4f4814c5d3295eb270bb55f4d9de6cec2a11f8d41cd40c73abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_8561740146d388be97143e15668beb1a98189d2d54258077847b162a2dac3ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8561740146d388be97143e15668beb1a98189d2d54258077847b162a2dac3ae9->enter($__internal_8561740146d388be97143e15668beb1a98189d2d54258077847b162a2dac3ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 54
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 56
        $this->displayBlock('search_form', $context, $blocks);
        // line 73
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_8561740146d388be97143e15668beb1a98189d2d54258077847b162a2dac3ae9->leave($__internal_8561740146d388be97143e15668beb1a98189d2d54258077847b162a2dac3ae9_prof);

        
        $__internal_e603d25e0d68a4f4814c5d3295eb270bb55f4d9de6cec2a11f8d41cd40c73abc->leave($__internal_e603d25e0d68a4f4814c5d3295eb270bb55f4d9de6cec2a11f8d41cd40c73abc_prof);

    }

    // line 56
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_09c34b40f7ff80b5d054b0698f428ca78fba087994cf71946d671a6edb3992b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c34b40f7ff80b5d054b0698f428ca78fba087994cf71946d671a6edb3992b4->enter($__internal_09c34b40f7ff80b5d054b0698f428ca78fba087994cf71946d671a6edb3992b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_fa7b7e124f461e22fe0153d4413c80d338a8741f7b8299f3fb1274ee47a55298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7b7e124f461e22fe0153d4413c80d338a8741f7b8299f3fb1274ee47a55298->enter($__internal_fa7b7e124f461e22fe0153d4413c80d338a8741f7b8299f3fb1274ee47a55298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 57
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortField", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortDirection", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 2
(isset($context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"]) ? $context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"] : $this->getContext($context, "__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"))), "html", null, true);
        // line 68
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_fa7b7e124f461e22fe0153d4413c80d338a8741f7b8299f3fb1274ee47a55298->leave($__internal_fa7b7e124f461e22fe0153d4413c80d338a8741f7b8299f3fb1274ee47a55298_prof);

        
        $__internal_09c34b40f7ff80b5d054b0698f428ca78fba087994cf71946d671a6edb3992b4->leave($__internal_09c34b40f7ff80b5d054b0698f428ca78fba087994cf71946d671a6edb3992b4_prof);

    }

    // line 80
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_d691994e49995950e73059e0efee02ec1b55a959fe632fdf9153078f78c73ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d691994e49995950e73059e0efee02ec1b55a959fe632fdf9153078f78c73ded->enter($__internal_d691994e49995950e73059e0efee02ec1b55a959fe632fdf9153078f78c73ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_fef778e5b608fcb1f67e9fc4e1f534aafdd4e1f0a8cfec0218b759ce31458647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef778e5b608fcb1f67e9fc4e1f534aafdd4e1f0a8cfec0218b759ce31458647->enter($__internal_fef778e5b608fcb1f67e9fc4e1f534aafdd4e1f0a8cfec0218b759ce31458647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 81
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 83
        if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 84
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 2
(isset($context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"]) ? $context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"] : $this->getContext($context, "__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a")))) : ("")), "html", null, true);
        // line 84
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_fef778e5b608fcb1f67e9fc4e1f534aafdd4e1f0a8cfec0218b759ce31458647->leave($__internal_fef778e5b608fcb1f67e9fc4e1f534aafdd4e1f0a8cfec0218b759ce31458647_prof);

        
        $__internal_d691994e49995950e73059e0efee02ec1b55a959fe632fdf9153078f78c73ded->leave($__internal_d691994e49995950e73059e0efee02ec1b55a959fe632fdf9153078f78c73ded_prof);

    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        $__internal_79f962c9d4fe5c37d75826a9d06d94d2f639b2fff996699cdfb5beae6cfdb1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f962c9d4fe5c37d75826a9d06d94d2f639b2fff996699cdfb5beae6cfdb1e3->enter($__internal_79f962c9d4fe5c37d75826a9d06d94d2f639b2fff996699cdfb5beae6cfdb1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d0691a143166b7931bc48f96de32fec6e11f5a11570f167d96c8347a30d29926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0691a143166b7931bc48f96de32fec6e11f5a11570f167d96c8347a30d29926->enter($__internal_d0691a143166b7931bc48f96de32fec6e11f5a11570f167d96c8347a30d29926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 96
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 97
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 101
        $this->displayBlock('table_head', $context, $blocks);
        // line 128
        echo "        </thead>

        <tbody>
        ";
        // line 131
        $this->displayBlock('table_body', $context, $blocks);
        // line 168
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 172
        $this->displayBlock('paginator', $context, $blocks);
        // line 175
        echo "
    ";
        // line 176
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_d0691a143166b7931bc48f96de32fec6e11f5a11570f167d96c8347a30d29926->leave($__internal_d0691a143166b7931bc48f96de32fec6e11f5a11570f167d96c8347a30d29926_prof);

        
        $__internal_79f962c9d4fe5c37d75826a9d06d94d2f639b2fff996699cdfb5beae6cfdb1e3->leave($__internal_79f962c9d4fe5c37d75826a9d06d94d2f639b2fff996699cdfb5beae6cfdb1e3_prof);

    }

    // line 101
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_a59181e6a392b28af664566a5db855ce7a6e0741287a08774026e607aea4466d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59181e6a392b28af664566a5db855ce7a6e0741287a08774026e607aea4466d->enter($__internal_a59181e6a392b28af664566a5db855ce7a6e0741287a08774026e607aea4466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_a06ec40aa3d601c1488450d21e9a168d21c24985a0012d07cd743bb332410fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06ec40aa3d601c1488450d21e9a168d21c24985a0012d07cd743bb332410fb0->enter($__internal_a06ec40aa3d601c1488450d21e9a168d21c24985a0012d07cd743bb332410fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 102
        echo "            <tr>
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 104
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 105
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 106
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 2
(isset($context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"]) ? $context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"] : $this->getContext($context, "__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a")));
            // line 107
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((((isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 108
            echo "
                    <th data-property-name=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 110
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 111
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 112
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) ? $context["_column_icon"] : $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 113
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 116
                echo "                            <span>";
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 118
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                ";
        // line 121
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 122
            echo "                    <th>
                        <span>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 126
        echo "            </tr>
        ";
        
        $__internal_a06ec40aa3d601c1488450d21e9a168d21c24985a0012d07cd743bb332410fb0->leave($__internal_a06ec40aa3d601c1488450d21e9a168d21c24985a0012d07cd743bb332410fb0_prof);

        
        $__internal_a59181e6a392b28af664566a5db855ce7a6e0741287a08774026e607aea4466d->leave($__internal_a59181e6a392b28af664566a5db855ce7a6e0741287a08774026e607aea4466d_prof);

    }

    // line 131
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_1ff8d3a0d8c3ab6d198e5de020ff2c43b184aed6bed72185143a4e73852fe728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff8d3a0d8c3ab6d198e5de020ff2c43b184aed6bed72185143a4e73852fe728->enter($__internal_1ff8d3a0d8c3ab6d198e5de020ff2c43b184aed6bed72185143a4e73852fe728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_9fe38352005a52a3e11e47e80ed6ce24dbf3f4c50ab4c1f45e56342b6bb376ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe38352005a52a3e11e47e80ed6ce24dbf3f4c50ab4c1f45e56342b6bb376ab->enter($__internal_9fe38352005a52a3e11e47e80ed6ce24dbf3f4c50ab4c1f45e56342b6bb376ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 132
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "                ";
            // line 134
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
            // line 135
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 137
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 138
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),                 // line 2
(isset($context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"]) ? $context["__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a"] : $this->getContext($context, "__internal_04c4b223a51b5387d40b1ebbd4f4e3c0d0910d03138108ae6f4789eb6f26903a")));
                // line 139
                echo "
                        <td data-label=\"";
                // line 140
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 141
                echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
                    ";
            // line 145
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 146
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 147
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 148
                $this->displayBlock('item_actions', $context, $blocks);
                // line 157
                echo "                        </td>
                    ";
            }
            // line 159
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 161
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 162
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        ";
        
        $__internal_9fe38352005a52a3e11e47e80ed6ce24dbf3f4c50ab4c1f45e56342b6bb376ab->leave($__internal_9fe38352005a52a3e11e47e80ed6ce24dbf3f4c50ab4c1f45e56342b6bb376ab_prof);

        
        $__internal_1ff8d3a0d8c3ab6d198e5de020ff2c43b184aed6bed72185143a4e73852fe728->leave($__internal_1ff8d3a0d8c3ab6d198e5de020ff2c43b184aed6bed72185143a4e73852fe728_prof);

    }

    // line 148
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_262ec01dd356697335ffae47c40eca5d0328b6caa66d1db44f5772bc41f397bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262ec01dd356697335ffae47c40eca5d0328b6caa66d1db44f5772bc41f397bd->enter($__internal_262ec01dd356697335ffae47c40eca5d0328b6caa66d1db44f5772bc41f397bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_d409861bf2881037eb5b1f36668c2ceaeee6bcdc0f89e41cacc4c8e2e5705f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d409861bf2881037eb5b1f36668c2ceaeee6bcdc0f89e41cacc4c8e2e5705f03->enter($__internal_d409861bf2881037eb5b1f36668c2ceaeee6bcdc0f89e41cacc4c8e2e5705f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 149
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 150
(isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 151
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 152
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 153
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 154
(isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id"))), false);
        // line 155
        echo "
                        ";
        
        $__internal_d409861bf2881037eb5b1f36668c2ceaeee6bcdc0f89e41cacc4c8e2e5705f03->leave($__internal_d409861bf2881037eb5b1f36668c2ceaeee6bcdc0f89e41cacc4c8e2e5705f03_prof);

        
        $__internal_262ec01dd356697335ffae47c40eca5d0328b6caa66d1db44f5772bc41f397bd->leave($__internal_262ec01dd356697335ffae47c40eca5d0328b6caa66d1db44f5772bc41f397bd_prof);

    }

    // line 172
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_9c40b677ddfe84c8a2e973d022fef27b07d7a3e76c87aecfed21c8470007705f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c40b677ddfe84c8a2e973d022fef27b07d7a3e76c87aecfed21c8470007705f->enter($__internal_9c40b677ddfe84c8a2e973d022fef27b07d7a3e76c87aecfed21c8470007705f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_2ea698186efe71b533251d07c58d3195ff74bd20f332359f59b46d494a1860f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea698186efe71b533251d07c58d3195ff74bd20f332359f59b46d494a1860f2->enter($__internal_2ea698186efe71b533251d07c58d3195ff74bd20f332359f59b46d494a1860f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 173
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_2ea698186efe71b533251d07c58d3195ff74bd20f332359f59b46d494a1860f2->leave($__internal_2ea698186efe71b533251d07c58d3195ff74bd20f332359f59b46d494a1860f2_prof);

        
        $__internal_9c40b677ddfe84c8a2e973d022fef27b07d7a3e76c87aecfed21c8470007705f->leave($__internal_9c40b677ddfe84c8a2e973d022fef27b07d7a3e76c87aecfed21c8470007705f_prof);

    }

    // line 176
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_0f7efa0f195b2ffb5a6d5ca45363f21601bd632c944ff1c482c051994068e92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7efa0f195b2ffb5a6d5ca45363f21601bd632c944ff1c482c051994068e92a->enter($__internal_0f7efa0f195b2ffb5a6d5ca45363f21601bd632c944ff1c482c051994068e92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_3c5822277f42114f8397f87f044cff73153f385b1ae8149d67f53a7337cb3403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5822277f42114f8397f87f044cff73153f385b1ae8149d67f53a7337cb3403->enter($__internal_3c5822277f42114f8397f87f044cff73153f385b1ae8149d67f53a7337cb3403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 177
        echo "        ";
        $context["referer"] = ((((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 178
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 179
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 181
        echo "
        ";
        // line 182
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 184
(isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer"))), "delete_form" =>         // line 185
(isset($context["delete_form_template"]) ? $context["delete_form_template"] : $this->getContext($context, "delete_form_template")), "_translation_domain" => $this->getAttribute(        // line 186
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 187
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 188
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 189
        echo "
    ";
        
        $__internal_3c5822277f42114f8397f87f044cff73153f385b1ae8149d67f53a7337cb3403->leave($__internal_3c5822277f42114f8397f87f044cff73153f385b1ae8149d67f53a7337cb3403_prof);

        
        $__internal_0f7efa0f195b2ffb5a6d5ca45363f21601bd632c944ff1c482c051994068e92a->leave($__internal_0f7efa0f195b2ffb5a6d5ca45363f21601bd632c944ff1c482c051994068e92a_prof);

    }

    // line 193
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0dcfa43a2b3120c4609cb8529cb1e7edec273eeb839a6674e580c8e5e4603e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcfa43a2b3120c4609cb8529cb1e7edec273eeb839a6674e580c8e5e4603e63->enter($__internal_0dcfa43a2b3120c4609cb8529cb1e7edec273eeb839a6674e580c8e5e4603e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_29478da87fc0cea6cc78227522509b8672a342913db6c84095630ee4d89bc249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29478da87fc0cea6cc78227522509b8672a342913db6c84095630ee4d89bc249->enter($__internal_29478da87fc0cea6cc78227522509b8672a342913db6c84095630ee4d89bc249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 194
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 237
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 238
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 239
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_29478da87fc0cea6cc78227522509b8672a342913db6c84095630ee4d89bc249->leave($__internal_29478da87fc0cea6cc78227522509b8672a342913db6c84095630ee4d89bc249_prof);

        
        $__internal_0dcfa43a2b3120c4609cb8529cb1e7edec273eeb839a6674e580c8e5e4603e63->leave($__internal_0dcfa43a2b3120c4609cb8529cb1e7edec273eeb839a6674e580c8e5e4603e63_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 239,  824 => 238,  822 => 237,  788 => 206,  772 => 194,  763 => 193,  752 => 189,  750 => 188,  749 => 187,  748 => 186,  747 => 185,  746 => 184,  745 => 182,  742 => 181,  740 => 179,  739 => 178,  737 => 177,  728 => 176,  715 => 173,  706 => 172,  695 => 155,  693 => 154,  692 => 153,  691 => 152,  690 => 151,  689 => 150,  687 => 149,  678 => 148,  668 => 167,  658 => 163,  654 => 162,  651 => 161,  637 => 159,  633 => 157,  631 => 148,  626 => 147,  623 => 146,  621 => 145,  618 => 144,  609 => 141,  599 => 140,  596 => 139,  594 => 2,  592 => 138,  589 => 137,  585 => 136,  580 => 135,  577 => 134,  575 => 133,  556 => 132,  547 => 131,  536 => 126,  530 => 123,  527 => 122,  525 => 121,  522 => 120,  515 => 118,  509 => 116,  503 => 113,  499 => 112,  494 => 111,  492 => 110,  480 => 109,  477 => 108,  474 => 107,  472 => 2,  470 => 106,  467 => 105,  464 => 104,  460 => 103,  457 => 102,  448 => 101,  438 => 176,  435 => 175,  433 => 172,  427 => 168,  425 => 131,  420 => 128,  418 => 101,  412 => 97,  409 => 96,  400 => 95,  387 => 84,  385 => 2,  383 => 84,  377 => 83,  369 => 82,  366 => 81,  357 => 80,  343 => 68,  341 => 2,  340 => 68,  335 => 66,  330 => 64,  325 => 62,  321 => 61,  317 => 60,  313 => 59,  309 => 58,  306 => 57,  297 => 56,  285 => 73,  283 => 56,  279 => 55,  274 => 54,  265 => 53,  255 => 89,  252 => 88,  249 => 80,  246 => 79,  244 => 78,  241 => 77,  238 => 76,  236 => 53,  233 => 52,  230 => 51,  227 => 50,  218 => 49,  205 => 43,  196 => 42,  183 => 90,  181 => 49,  175 => 45,  173 => 42,  169 => 40,  160 => 39,  142 => 37,  124 => 24,  106 => 23,  96 => 5,  89 => 32,  88 => 2,  86 => 32,  83 => 31,  77 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 21,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = _request_parameters|default({})|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({ query: app.request.get('query')|default('') }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% set _content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {{ 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle')|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ _entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title }}
    {% endif %}
{% endspaceless %}
{% endset %}

{% block page_title %}{{ _content_title|striptags|raw }}{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ _content_title }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _request_parameters.sortField }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _request_parameters.sortDirection }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "EasyAdminBundle:default:list.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/list.html.twig");
    }
}
