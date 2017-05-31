<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_a9650761869edb9a27a1f9be240c6c7b14ed445a57542fb983cce896b4913853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92c513dccb6f97941e49929987f2b81977082c1653d67ab50acfe318e7ca66f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c513dccb6f97941e49929987f2b81977082c1653d67ab50acfe318e7ca66f8->enter($__internal_92c513dccb6f97941e49929987f2b81977082c1653d67ab50acfe318e7ca66f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_acc4a94b65cf102f6bd5c1fd3e77f252d78f0fd037f9b033d11607bbfd71a1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc4a94b65cf102f6bd5c1fd3e77f252d78f0fd037f9b033d11607bbfd71a1e4->enter($__internal_acc4a94b65cf102f6bd5c1fd3e77f252d78f0fd037f9b033d11607bbfd71a1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_92c513dccb6f97941e49929987f2b81977082c1653d67ab50acfe318e7ca66f8->leave($__internal_92c513dccb6f97941e49929987f2b81977082c1653d67ab50acfe318e7ca66f8_prof);

        
        $__internal_acc4a94b65cf102f6bd5c1fd3e77f252d78f0fd037f9b033d11607bbfd71a1e4->leave($__internal_acc4a94b65cf102f6bd5c1fd3e77f252d78f0fd037f9b033d11607bbfd71a1e4_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_42dc2edd51a7ef0e463bf47c624f49306aeb4fbecb354476fbe53c5d17d065cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dc2edd51a7ef0e463bf47c624f49306aeb4fbecb354476fbe53c5d17d065cd->enter($__internal_42dc2edd51a7ef0e463bf47c624f49306aeb4fbecb354476fbe53c5d17d065cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_17a49e321777ab39e7712fe588014d4e7d7a2e571634e378e49166acd32001a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a49e321777ab39e7712fe588014d4e7d7a2e571634e378e49166acd32001a6->enter($__internal_17a49e321777ab39e7712fe588014d4e7d7a2e571634e378e49166acd32001a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_17a49e321777ab39e7712fe588014d4e7d7a2e571634e378e49166acd32001a6->leave($__internal_17a49e321777ab39e7712fe588014d4e7d7a2e571634e378e49166acd32001a6_prof);

        
        $__internal_42dc2edd51a7ef0e463bf47c624f49306aeb4fbecb354476fbe53c5d17d065cd->leave($__internal_42dc2edd51a7ef0e463bf47c624f49306aeb4fbecb354476fbe53c5d17d065cd_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_5c9e8d7543f0eb532021b07f049b179d461146ca870b1eb15649a6b849421a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9e8d7543f0eb532021b07f049b179d461146ca870b1eb15649a6b849421a05->enter($__internal_5c9e8d7543f0eb532021b07f049b179d461146ca870b1eb15649a6b849421a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_016d5ee1db3d9b35182a18d6ccf33b9080bf195038007702f70e147dad60b894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016d5ee1db3d9b35182a18d6ccf33b9080bf195038007702f70e147dad60b894->enter($__internal_016d5ee1db3d9b35182a18d6ccf33b9080bf195038007702f70e147dad60b894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_016d5ee1db3d9b35182a18d6ccf33b9080bf195038007702f70e147dad60b894->leave($__internal_016d5ee1db3d9b35182a18d6ccf33b9080bf195038007702f70e147dad60b894_prof);

        
        $__internal_5c9e8d7543f0eb532021b07f049b179d461146ca870b1eb15649a6b849421a05->leave($__internal_5c9e8d7543f0eb532021b07f049b179d461146ca870b1eb15649a6b849421a05_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8d80041158261ccb8c21a8649362f4f2d69c04ea186dfceaa91011518b550d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d80041158261ccb8c21a8649362f4f2d69c04ea186dfceaa91011518b550d96->enter($__internal_8d80041158261ccb8c21a8649362f4f2d69c04ea186dfceaa91011518b550d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ecf6197103cc5fbc0cfefc3951220a5656e4dea84eea0a00f309d0c227c189c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf6197103cc5fbc0cfefc3951220a5656e4dea84eea0a00f309d0c227c189c0->enter($__internal_ecf6197103cc5fbc0cfefc3951220a5656e4dea84eea0a00f309d0c227c189c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ecf6197103cc5fbc0cfefc3951220a5656e4dea84eea0a00f309d0c227c189c0->leave($__internal_ecf6197103cc5fbc0cfefc3951220a5656e4dea84eea0a00f309d0c227c189c0_prof);

        
        $__internal_8d80041158261ccb8c21a8649362f4f2d69c04ea186dfceaa91011518b550d96->leave($__internal_8d80041158261ccb8c21a8649362f4f2d69c04ea186dfceaa91011518b550d96_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9e87aab4927bafadc94c9103a5f396a92f94de4227eee43e85f1d667812f6e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e87aab4927bafadc94c9103a5f396a92f94de4227eee43e85f1d667812f6e64->enter($__internal_9e87aab4927bafadc94c9103a5f396a92f94de4227eee43e85f1d667812f6e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_c64efb3eb50463732c4037cfb1462aabd8725cb9dac409f95aaf1351e664cdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64efb3eb50463732c4037cfb1462aabd8725cb9dac409f95aaf1351e664cdde->enter($__internal_c64efb3eb50463732c4037cfb1462aabd8725cb9dac409f95aaf1351e664cdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_847356d6f6901b9ae658a994e8ef245a2e1c72f7cd3b68b71c715ce713755282 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_4a331417eb55f0f81dc70f38150eb89e4604fbe02982baf2c3f761bfc054dbf1 = "{{") && ('' === $__internal_4a331417eb55f0f81dc70f38150eb89e4604fbe02982baf2c3f761bfc054dbf1 || 0 === strpos($__internal_847356d6f6901b9ae658a994e8ef245a2e1c72f7cd3b68b71c715ce713755282, $__internal_4a331417eb55f0f81dc70f38150eb89e4604fbe02982baf2c3f761bfc054dbf1)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_c64efb3eb50463732c4037cfb1462aabd8725cb9dac409f95aaf1351e664cdde->leave($__internal_c64efb3eb50463732c4037cfb1462aabd8725cb9dac409f95aaf1351e664cdde_prof);

        
        $__internal_9e87aab4927bafadc94c9103a5f396a92f94de4227eee43e85f1d667812f6e64->leave($__internal_9e87aab4927bafadc94c9103a5f396a92f94de4227eee43e85f1d667812f6e64_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_44fd83b972aef8fbd7253bb3464a8a30fc9d8430360c2dcf82d052647c689604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fd83b972aef8fbd7253bb3464a8a30fc9d8430360c2dcf82d052647c689604->enter($__internal_44fd83b972aef8fbd7253bb3464a8a30fc9d8430360c2dcf82d052647c689604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a233cf7b4a0ff152edd96a2bf4d24dc60abcadc14f8b9d4f3b48a7d35d7e1002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a233cf7b4a0ff152edd96a2bf4d24dc60abcadc14f8b9d4f3b48a7d35d7e1002->enter($__internal_a233cf7b4a0ff152edd96a2bf4d24dc60abcadc14f8b9d4f3b48a7d35d7e1002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a233cf7b4a0ff152edd96a2bf4d24dc60abcadc14f8b9d4f3b48a7d35d7e1002->leave($__internal_a233cf7b4a0ff152edd96a2bf4d24dc60abcadc14f8b9d4f3b48a7d35d7e1002_prof);

        
        $__internal_44fd83b972aef8fbd7253bb3464a8a30fc9d8430360c2dcf82d052647c689604->leave($__internal_44fd83b972aef8fbd7253bb3464a8a30fc9d8430360c2dcf82d052647c689604_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d6b318ff5b6d3c8a93d1f06bc2190f36eff28169d6528b8753ab8737d8001b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b318ff5b6d3c8a93d1f06bc2190f36eff28169d6528b8753ab8737d8001b5a->enter($__internal_d6b318ff5b6d3c8a93d1f06bc2190f36eff28169d6528b8753ab8737d8001b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_09a29a97c701c5eed5c58f5d0127125ab873b9dea7149a02095485681cf8e0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a29a97c701c5eed5c58f5d0127125ab873b9dea7149a02095485681cf8e0dd->enter($__internal_09a29a97c701c5eed5c58f5d0127125ab873b9dea7149a02095485681cf8e0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_09a29a97c701c5eed5c58f5d0127125ab873b9dea7149a02095485681cf8e0dd->leave($__internal_09a29a97c701c5eed5c58f5d0127125ab873b9dea7149a02095485681cf8e0dd_prof);

        
        $__internal_d6b318ff5b6d3c8a93d1f06bc2190f36eff28169d6528b8753ab8737d8001b5a->leave($__internal_d6b318ff5b6d3c8a93d1f06bc2190f36eff28169d6528b8753ab8737d8001b5a_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c71758b97359e3f7b96558a05ebf21f60e94c7bcbb46d1c1e8560dcd4ab472da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71758b97359e3f7b96558a05ebf21f60e94c7bcbb46d1c1e8560dcd4ab472da->enter($__internal_c71758b97359e3f7b96558a05ebf21f60e94c7bcbb46d1c1e8560dcd4ab472da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_2e57adb0e2f61ce8f5e5ddc5a01684c525aac5b0d34edd0e586d2170b360f290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e57adb0e2f61ce8f5e5ddc5a01684c525aac5b0d34edd0e586d2170b360f290->enter($__internal_2e57adb0e2f61ce8f5e5ddc5a01684c525aac5b0d34edd0e586d2170b360f290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_2e57adb0e2f61ce8f5e5ddc5a01684c525aac5b0d34edd0e586d2170b360f290->leave($__internal_2e57adb0e2f61ce8f5e5ddc5a01684c525aac5b0d34edd0e586d2170b360f290_prof);

        
        $__internal_c71758b97359e3f7b96558a05ebf21f60e94c7bcbb46d1c1e8560dcd4ab472da->leave($__internal_c71758b97359e3f7b96558a05ebf21f60e94c7bcbb46d1c1e8560dcd4ab472da_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_8b25fea5320244887d73613403fff8318bc8bc7385e02fa105cbcf7e47683fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b25fea5320244887d73613403fff8318bc8bc7385e02fa105cbcf7e47683fe6->enter($__internal_8b25fea5320244887d73613403fff8318bc8bc7385e02fa105cbcf7e47683fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_2aebdd3aee8482bac5b8ec4e37158ea7e19dbc3f99c5b528e2578b57dc4e384f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aebdd3aee8482bac5b8ec4e37158ea7e19dbc3f99c5b528e2578b57dc4e384f->enter($__internal_2aebdd3aee8482bac5b8ec4e37158ea7e19dbc3f99c5b528e2578b57dc4e384f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_2aebdd3aee8482bac5b8ec4e37158ea7e19dbc3f99c5b528e2578b57dc4e384f->leave($__internal_2aebdd3aee8482bac5b8ec4e37158ea7e19dbc3f99c5b528e2578b57dc4e384f_prof);

        
        $__internal_8b25fea5320244887d73613403fff8318bc8bc7385e02fa105cbcf7e47683fe6->leave($__internal_8b25fea5320244887d73613403fff8318bc8bc7385e02fa105cbcf7e47683fe6_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_835821e988d1cd76e7e02f8b030938a0319d9944bfd2d62ab52c1533d8b1d166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835821e988d1cd76e7e02f8b030938a0319d9944bfd2d62ab52c1533d8b1d166->enter($__internal_835821e988d1cd76e7e02f8b030938a0319d9944bfd2d62ab52c1533d8b1d166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_b937180b7cd350c0b8fba0ff1904e3ed9273d4a856185acb1564deaac3e077e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b937180b7cd350c0b8fba0ff1904e3ed9273d4a856185acb1564deaac3e077e1->enter($__internal_b937180b7cd350c0b8fba0ff1904e3ed9273d4a856185acb1564deaac3e077e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_b937180b7cd350c0b8fba0ff1904e3ed9273d4a856185acb1564deaac3e077e1->leave($__internal_b937180b7cd350c0b8fba0ff1904e3ed9273d4a856185acb1564deaac3e077e1_prof);

        
        $__internal_835821e988d1cd76e7e02f8b030938a0319d9944bfd2d62ab52c1533d8b1d166->leave($__internal_835821e988d1cd76e7e02f8b030938a0319d9944bfd2d62ab52c1533d8b1d166_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_231d42518690bd0befd6e9b23eb556e03fc890d79c37fbd8224844f79a818826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231d42518690bd0befd6e9b23eb556e03fc890d79c37fbd8224844f79a818826->enter($__internal_231d42518690bd0befd6e9b23eb556e03fc890d79c37fbd8224844f79a818826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d963fb41ad7485bdbd3d1c09f7392bbc23cd76da93aeccf4bff94c2f9492a30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d963fb41ad7485bdbd3d1c09f7392bbc23cd76da93aeccf4bff94c2f9492a30a->enter($__internal_d963fb41ad7485bdbd3d1c09f7392bbc23cd76da93aeccf4bff94c2f9492a30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_d963fb41ad7485bdbd3d1c09f7392bbc23cd76da93aeccf4bff94c2f9492a30a->leave($__internal_d963fb41ad7485bdbd3d1c09f7392bbc23cd76da93aeccf4bff94c2f9492a30a_prof);

        
        $__internal_231d42518690bd0befd6e9b23eb556e03fc890d79c37fbd8224844f79a818826->leave($__internal_231d42518690bd0befd6e9b23eb556e03fc890d79c37fbd8224844f79a818826_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2a53ff613d30fbf7cd6a04fb3bd486d3fe9367a6791f88b932b6bfe836b23c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a53ff613d30fbf7cd6a04fb3bd486d3fe9367a6791f88b932b6bfe836b23c40->enter($__internal_2a53ff613d30fbf7cd6a04fb3bd486d3fe9367a6791f88b932b6bfe836b23c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_65743632eab3b7d323e46d98a37693c6c000b0ce0ff8d7da3831129b58454e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65743632eab3b7d323e46d98a37693c6c000b0ce0ff8d7da3831129b58454e24->enter($__internal_65743632eab3b7d323e46d98a37693c6c000b0ce0ff8d7da3831129b58454e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_65743632eab3b7d323e46d98a37693c6c000b0ce0ff8d7da3831129b58454e24->leave($__internal_65743632eab3b7d323e46d98a37693c6c000b0ce0ff8d7da3831129b58454e24_prof);

        
        $__internal_2a53ff613d30fbf7cd6a04fb3bd486d3fe9367a6791f88b932b6bfe836b23c40->leave($__internal_2a53ff613d30fbf7cd6a04fb3bd486d3fe9367a6791f88b932b6bfe836b23c40_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_65e04241a69110de216247214e027df29018571ff28ed09097985d7a372d3f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e04241a69110de216247214e027df29018571ff28ed09097985d7a372d3f15->enter($__internal_65e04241a69110de216247214e027df29018571ff28ed09097985d7a372d3f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ace392fba290a39910ec9abbd1a8adaa9ce9135847f7ad3828d8401b81146043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace392fba290a39910ec9abbd1a8adaa9ce9135847f7ad3828d8401b81146043->enter($__internal_ace392fba290a39910ec9abbd1a8adaa9ce9135847f7ad3828d8401b81146043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_ace392fba290a39910ec9abbd1a8adaa9ce9135847f7ad3828d8401b81146043->leave($__internal_ace392fba290a39910ec9abbd1a8adaa9ce9135847f7ad3828d8401b81146043_prof);

        
        $__internal_65e04241a69110de216247214e027df29018571ff28ed09097985d7a372d3f15->leave($__internal_65e04241a69110de216247214e027df29018571ff28ed09097985d7a372d3f15_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_182db7e69af352c1efc01240bf7a96c1fcddb4ba2cb588140f7efedbf65c43e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182db7e69af352c1efc01240bf7a96c1fcddb4ba2cb588140f7efedbf65c43e3->enter($__internal_182db7e69af352c1efc01240bf7a96c1fcddb4ba2cb588140f7efedbf65c43e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f165872c7cfa9d08f828661d58f6d826bb31c6653ac140d08e172412db59f39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f165872c7cfa9d08f828661d58f6d826bb31c6653ac140d08e172412db59f39f->enter($__internal_f165872c7cfa9d08f828661d58f6d826bb31c6653ac140d08e172412db59f39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_f165872c7cfa9d08f828661d58f6d826bb31c6653ac140d08e172412db59f39f->leave($__internal_f165872c7cfa9d08f828661d58f6d826bb31c6653ac140d08e172412db59f39f_prof);

        
        $__internal_182db7e69af352c1efc01240bf7a96c1fcddb4ba2cb588140f7efedbf65c43e3->leave($__internal_182db7e69af352c1efc01240bf7a96c1fcddb4ba2cb588140f7efedbf65c43e3_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_eb1bf733d9d57c24b8310b9bda5edab831b998a2f84cbe47bb313f3446908e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1bf733d9d57c24b8310b9bda5edab831b998a2f84cbe47bb313f3446908e1c->enter($__internal_eb1bf733d9d57c24b8310b9bda5edab831b998a2f84cbe47bb313f3446908e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_656ae6f5561d8c61c57f734dcc72863e3221e56ae34af3a06493eda847e70681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656ae6f5561d8c61c57f734dcc72863e3221e56ae34af3a06493eda847e70681->enter($__internal_656ae6f5561d8c61c57f734dcc72863e3221e56ae34af3a06493eda847e70681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_656ae6f5561d8c61c57f734dcc72863e3221e56ae34af3a06493eda847e70681->leave($__internal_656ae6f5561d8c61c57f734dcc72863e3221e56ae34af3a06493eda847e70681_prof);

        
        $__internal_eb1bf733d9d57c24b8310b9bda5edab831b998a2f84cbe47bb313f3446908e1c->leave($__internal_eb1bf733d9d57c24b8310b9bda5edab831b998a2f84cbe47bb313f3446908e1c_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2392366ec8e7d7bb362da4ba20221d39454ec1035e5bf0b7abe94322e2f369af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2392366ec8e7d7bb362da4ba20221d39454ec1035e5bf0b7abe94322e2f369af->enter($__internal_2392366ec8e7d7bb362da4ba20221d39454ec1035e5bf0b7abe94322e2f369af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_2102204d5fe3f787c0465fee8dccb259c33b69b92f7a8c490b91602b0ae8e63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2102204d5fe3f787c0465fee8dccb259c33b69b92f7a8c490b91602b0ae8e63f->enter($__internal_2102204d5fe3f787c0465fee8dccb259c33b69b92f7a8c490b91602b0ae8e63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2102204d5fe3f787c0465fee8dccb259c33b69b92f7a8c490b91602b0ae8e63f->leave($__internal_2102204d5fe3f787c0465fee8dccb259c33b69b92f7a8c490b91602b0ae8e63f_prof);

        
        $__internal_2392366ec8e7d7bb362da4ba20221d39454ec1035e5bf0b7abe94322e2f369af->leave($__internal_2392366ec8e7d7bb362da4ba20221d39454ec1035e5bf0b7abe94322e2f369af_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_107714d4c954a0f60bd71616fe0f9f99b5c66b864716bec785522d85647d8570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107714d4c954a0f60bd71616fe0f9f99b5c66b864716bec785522d85647d8570->enter($__internal_107714d4c954a0f60bd71616fe0f9f99b5c66b864716bec785522d85647d8570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b4bdd50205c508657e292251e45b1c94ed985349748abf1549c0aff4b2eaa54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bdd50205c508657e292251e45b1c94ed985349748abf1549c0aff4b2eaa54f->enter($__internal_b4bdd50205c508657e292251e45b1c94ed985349748abf1549c0aff4b2eaa54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b4bdd50205c508657e292251e45b1c94ed985349748abf1549c0aff4b2eaa54f->leave($__internal_b4bdd50205c508657e292251e45b1c94ed985349748abf1549c0aff4b2eaa54f_prof);

        
        $__internal_107714d4c954a0f60bd71616fe0f9f99b5c66b864716bec785522d85647d8570->leave($__internal_107714d4c954a0f60bd71616fe0f9f99b5c66b864716bec785522d85647d8570_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_63bf6a6cd0e601b8edf1a317c0106f237263670d7e634ee6658dfc3355d5ae8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bf6a6cd0e601b8edf1a317c0106f237263670d7e634ee6658dfc3355d5ae8e->enter($__internal_63bf6a6cd0e601b8edf1a317c0106f237263670d7e634ee6658dfc3355d5ae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_23f97eded8f61595175bbf9157e3a08a206cedd0842ef29d4305084de6a04178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f97eded8f61595175bbf9157e3a08a206cedd0842ef29d4305084de6a04178->enter($__internal_23f97eded8f61595175bbf9157e3a08a206cedd0842ef29d4305084de6a04178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_23f97eded8f61595175bbf9157e3a08a206cedd0842ef29d4305084de6a04178->leave($__internal_23f97eded8f61595175bbf9157e3a08a206cedd0842ef29d4305084de6a04178_prof);

        
        $__internal_63bf6a6cd0e601b8edf1a317c0106f237263670d7e634ee6658dfc3355d5ae8e->leave($__internal_63bf6a6cd0e601b8edf1a317c0106f237263670d7e634ee6658dfc3355d5ae8e_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ade15e3ac01afd39b83889ac69c19e15a9ccf4cfb5bf25d34afdae236ebb6cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade15e3ac01afd39b83889ac69c19e15a9ccf4cfb5bf25d34afdae236ebb6cf7->enter($__internal_ade15e3ac01afd39b83889ac69c19e15a9ccf4cfb5bf25d34afdae236ebb6cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_bc6c4e6c426c8afbbe104709ccf352a906a2aa9a846452420343b79b8d7e102b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6c4e6c426c8afbbe104709ccf352a906a2aa9a846452420343b79b8d7e102b->enter($__internal_bc6c4e6c426c8afbbe104709ccf352a906a2aa9a846452420343b79b8d7e102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 190
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 197
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_bc6c4e6c426c8afbbe104709ccf352a906a2aa9a846452420343b79b8d7e102b->leave($__internal_bc6c4e6c426c8afbbe104709ccf352a906a2aa9a846452420343b79b8d7e102b_prof);

        
        $__internal_ade15e3ac01afd39b83889ac69c19e15a9ccf4cfb5bf25d34afdae236ebb6cf7->leave($__internal_ade15e3ac01afd39b83889ac69c19e15a9ccf4cfb5bf25d34afdae236ebb6cf7_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_477268664ffb893870e933c3715f637217f52122389cf941cfbf490994fc10cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477268664ffb893870e933c3715f637217f52122389cf941cfbf490994fc10cf->enter($__internal_477268664ffb893870e933c3715f637217f52122389cf941cfbf490994fc10cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b6554a2c044ce3169466b0518dab4bbbd0341abac1c8a397d07d2ed2067d6d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6554a2c044ce3169466b0518dab4bbbd0341abac1c8a397d07d2ed2067d6d03->enter($__internal_b6554a2c044ce3169466b0518dab4bbbd0341abac1c8a397d07d2ed2067d6d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_b6554a2c044ce3169466b0518dab4bbbd0341abac1c8a397d07d2ed2067d6d03->leave($__internal_b6554a2c044ce3169466b0518dab4bbbd0341abac1c8a397d07d2ed2067d6d03_prof);

        
        $__internal_477268664ffb893870e933c3715f637217f52122389cf941cfbf490994fc10cf->leave($__internal_477268664ffb893870e933c3715f637217f52122389cf941cfbf490994fc10cf_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_192644c8df75697837ed76ef8c79e194b7f8c2c9618ed58471fde460d342cd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192644c8df75697837ed76ef8c79e194b7f8c2c9618ed58471fde460d342cd38->enter($__internal_192644c8df75697837ed76ef8c79e194b7f8c2c9618ed58471fde460d342cd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_436bf736b49d35b8734d139f0eb9a86de10168b4cae3419450308235e084f2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436bf736b49d35b8734d139f0eb9a86de10168b4cae3419450308235e084f2f9->enter($__internal_436bf736b49d35b8734d139f0eb9a86de10168b4cae3419450308235e084f2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_436bf736b49d35b8734d139f0eb9a86de10168b4cae3419450308235e084f2f9->leave($__internal_436bf736b49d35b8734d139f0eb9a86de10168b4cae3419450308235e084f2f9_prof);

        
        $__internal_192644c8df75697837ed76ef8c79e194b7f8c2c9618ed58471fde460d342cd38->leave($__internal_192644c8df75697837ed76ef8c79e194b7f8c2c9618ed58471fde460d342cd38_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1585771d58aab4e1e6f1d9ec8970e2577b04a53c2b28d8d89ffbe041e2290bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1585771d58aab4e1e6f1d9ec8970e2577b04a53c2b28d8d89ffbe041e2290bd7->enter($__internal_1585771d58aab4e1e6f1d9ec8970e2577b04a53c2b28d8d89ffbe041e2290bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7eb90206b70762d15da96ff99ef21db0da6f152359f1adc2b5469ed549835406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb90206b70762d15da96ff99ef21db0da6f152359f1adc2b5469ed549835406->enter($__internal_7eb90206b70762d15da96ff99ef21db0da6f152359f1adc2b5469ed549835406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7eb90206b70762d15da96ff99ef21db0da6f152359f1adc2b5469ed549835406->leave($__internal_7eb90206b70762d15da96ff99ef21db0da6f152359f1adc2b5469ed549835406_prof);

        
        $__internal_1585771d58aab4e1e6f1d9ec8970e2577b04a53c2b28d8d89ffbe041e2290bd7->leave($__internal_1585771d58aab4e1e6f1d9ec8970e2577b04a53c2b28d8d89ffbe041e2290bd7_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b54919a11d5ec0017e81fdf020eb6e2af8e1eed1fc4bca19b89242c504b71982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54919a11d5ec0017e81fdf020eb6e2af8e1eed1fc4bca19b89242c504b71982->enter($__internal_b54919a11d5ec0017e81fdf020eb6e2af8e1eed1fc4bca19b89242c504b71982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e55595ae198dc152a9f7c351eb580416b40bd3b2b8e8d37038c0291116d866ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55595ae198dc152a9f7c351eb580416b40bd3b2b8e8d37038c0291116d866ab->enter($__internal_e55595ae198dc152a9f7c351eb580416b40bd3b2b8e8d37038c0291116d866ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e55595ae198dc152a9f7c351eb580416b40bd3b2b8e8d37038c0291116d866ab->leave($__internal_e55595ae198dc152a9f7c351eb580416b40bd3b2b8e8d37038c0291116d866ab_prof);

        
        $__internal_b54919a11d5ec0017e81fdf020eb6e2af8e1eed1fc4bca19b89242c504b71982->leave($__internal_b54919a11d5ec0017e81fdf020eb6e2af8e1eed1fc4bca19b89242c504b71982_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e20bdf30e64ec5be2dc50f2da8cae9457f7af9971be3c77ee8b8719033b288cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20bdf30e64ec5be2dc50f2da8cae9457f7af9971be3c77ee8b8719033b288cc->enter($__internal_e20bdf30e64ec5be2dc50f2da8cae9457f7af9971be3c77ee8b8719033b288cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_5eafc5326b2c9fe65402213ac91c2ab6317fb8aa7ca6688f645e96755c8ab277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eafc5326b2c9fe65402213ac91c2ab6317fb8aa7ca6688f645e96755c8ab277->enter($__internal_5eafc5326b2c9fe65402213ac91c2ab6317fb8aa7ca6688f645e96755c8ab277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5eafc5326b2c9fe65402213ac91c2ab6317fb8aa7ca6688f645e96755c8ab277->leave($__internal_5eafc5326b2c9fe65402213ac91c2ab6317fb8aa7ca6688f645e96755c8ab277_prof);

        
        $__internal_e20bdf30e64ec5be2dc50f2da8cae9457f7af9971be3c77ee8b8719033b288cc->leave($__internal_e20bdf30e64ec5be2dc50f2da8cae9457f7af9971be3c77ee8b8719033b288cc_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_673439a8c370344b803ef3084ba591666fba189623c7aea76514967add43fe0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673439a8c370344b803ef3084ba591666fba189623c7aea76514967add43fe0b->enter($__internal_673439a8c370344b803ef3084ba591666fba189623c7aea76514967add43fe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_a70d821d0d485c7f5ab8bc831498c141b2847bad9feba90f81bfbf47dc00356d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70d821d0d485c7f5ab8bc831498c141b2847bad9feba90f81bfbf47dc00356d->enter($__internal_a70d821d0d485c7f5ab8bc831498c141b2847bad9feba90f81bfbf47dc00356d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a70d821d0d485c7f5ab8bc831498c141b2847bad9feba90f81bfbf47dc00356d->leave($__internal_a70d821d0d485c7f5ab8bc831498c141b2847bad9feba90f81bfbf47dc00356d_prof);

        
        $__internal_673439a8c370344b803ef3084ba591666fba189623c7aea76514967add43fe0b->leave($__internal_673439a8c370344b803ef3084ba591666fba189623c7aea76514967add43fe0b_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6e73fb79500a3414043bd35b20441ddf85fbf3493d83b4784f9a5436fc0dcd11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e73fb79500a3414043bd35b20441ddf85fbf3493d83b4784f9a5436fc0dcd11->enter($__internal_6e73fb79500a3414043bd35b20441ddf85fbf3493d83b4784f9a5436fc0dcd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e02d6589e2767f0e19295c3af3d4f46e60eb4ba1d228da259987d83175c2fc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02d6589e2767f0e19295c3af3d4f46e60eb4ba1d228da259987d83175c2fc8c->enter($__internal_e02d6589e2767f0e19295c3af3d4f46e60eb4ba1d228da259987d83175c2fc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_e02d6589e2767f0e19295c3af3d4f46e60eb4ba1d228da259987d83175c2fc8c->leave($__internal_e02d6589e2767f0e19295c3af3d4f46e60eb4ba1d228da259987d83175c2fc8c_prof);

        
        $__internal_6e73fb79500a3414043bd35b20441ddf85fbf3493d83b4784f9a5436fc0dcd11->leave($__internal_6e73fb79500a3414043bd35b20441ddf85fbf3493d83b4784f9a5436fc0dcd11_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bfdf442147f11b01238593042c0b2e1c8188ebfe1dea0622b9fe58664ff0262e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdf442147f11b01238593042c0b2e1c8188ebfe1dea0622b9fe58664ff0262e->enter($__internal_bfdf442147f11b01238593042c0b2e1c8188ebfe1dea0622b9fe58664ff0262e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ddabf6721490e9f01483bac288b7af81f202f963a595816e37a23e27e512c65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddabf6721490e9f01483bac288b7af81f202f963a595816e37a23e27e512c65f->enter($__internal_ddabf6721490e9f01483bac288b7af81f202f963a595816e37a23e27e512c65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_ddabf6721490e9f01483bac288b7af81f202f963a595816e37a23e27e512c65f->leave($__internal_ddabf6721490e9f01483bac288b7af81f202f963a595816e37a23e27e512c65f_prof);

        
        $__internal_bfdf442147f11b01238593042c0b2e1c8188ebfe1dea0622b9fe58664ff0262e->leave($__internal_bfdf442147f11b01238593042c0b2e1c8188ebfe1dea0622b9fe58664ff0262e_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f7b7318c3cc9c3a4383dde1f9a45c84afb0a8af3fe3a8b21c731a76f10e0b56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b7318c3cc9c3a4383dde1f9a45c84afb0a8af3fe3a8b21c731a76f10e0b56b->enter($__internal_f7b7318c3cc9c3a4383dde1f9a45c84afb0a8af3fe3a8b21c731a76f10e0b56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bf0d47a7e119d38134ca63ecc27b0ca3c3bd17ba289bc2a491aefe4b14409ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0d47a7e119d38134ca63ecc27b0ca3c3bd17ba289bc2a491aefe4b14409ae8->enter($__internal_bf0d47a7e119d38134ca63ecc27b0ca3c3bd17ba289bc2a491aefe4b14409ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_bf0d47a7e119d38134ca63ecc27b0ca3c3bd17ba289bc2a491aefe4b14409ae8->leave($__internal_bf0d47a7e119d38134ca63ecc27b0ca3c3bd17ba289bc2a491aefe4b14409ae8_prof);

        
        $__internal_f7b7318c3cc9c3a4383dde1f9a45c84afb0a8af3fe3a8b21c731a76f10e0b56b->leave($__internal_f7b7318c3cc9c3a4383dde1f9a45c84afb0a8af3fe3a8b21c731a76f10e0b56b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/TeamDEV/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
