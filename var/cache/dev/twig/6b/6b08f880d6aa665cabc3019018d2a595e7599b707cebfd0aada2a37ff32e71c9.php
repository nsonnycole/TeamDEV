<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_cb249d74b62b3a77ecf939870b4669075bca76149005910d867cb54bc2899fc5 extends Twig_Template
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
        $__internal_5ee619f6a1c0289776f5b81b9076b704d477b3c01312470868bba9cba7ef2ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee619f6a1c0289776f5b81b9076b704d477b3c01312470868bba9cba7ef2ef0->enter($__internal_5ee619f6a1c0289776f5b81b9076b704d477b3c01312470868bba9cba7ef2ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_568709194080f7e686397a31e5f048f37871e5cacdb4d8af0a3de708fd22a8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568709194080f7e686397a31e5f048f37871e5cacdb4d8af0a3de708fd22a8f6->enter($__internal_568709194080f7e686397a31e5f048f37871e5cacdb4d8af0a3de708fd22a8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_5ee619f6a1c0289776f5b81b9076b704d477b3c01312470868bba9cba7ef2ef0->leave($__internal_5ee619f6a1c0289776f5b81b9076b704d477b3c01312470868bba9cba7ef2ef0_prof);

        
        $__internal_568709194080f7e686397a31e5f048f37871e5cacdb4d8af0a3de708fd22a8f6->leave($__internal_568709194080f7e686397a31e5f048f37871e5cacdb4d8af0a3de708fd22a8f6_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a74cb3d4eacb5c7ab840b51e1dd86151b5b56b057bde9d1c21cc02fe51630849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74cb3d4eacb5c7ab840b51e1dd86151b5b56b057bde9d1c21cc02fe51630849->enter($__internal_a74cb3d4eacb5c7ab840b51e1dd86151b5b56b057bde9d1c21cc02fe51630849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_29171a67b27ba64bd9f83ed0489c28eebba81795d44c460f9c6e35c2fe89cac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29171a67b27ba64bd9f83ed0489c28eebba81795d44c460f9c6e35c2fe89cac4->enter($__internal_29171a67b27ba64bd9f83ed0489c28eebba81795d44c460f9c6e35c2fe89cac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_29171a67b27ba64bd9f83ed0489c28eebba81795d44c460f9c6e35c2fe89cac4->leave($__internal_29171a67b27ba64bd9f83ed0489c28eebba81795d44c460f9c6e35c2fe89cac4_prof);

        
        $__internal_a74cb3d4eacb5c7ab840b51e1dd86151b5b56b057bde9d1c21cc02fe51630849->leave($__internal_a74cb3d4eacb5c7ab840b51e1dd86151b5b56b057bde9d1c21cc02fe51630849_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a8299367de6de9d60bf19a38756a8846d61de0543627bb0f8641066721e35277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8299367de6de9d60bf19a38756a8846d61de0543627bb0f8641066721e35277->enter($__internal_a8299367de6de9d60bf19a38756a8846d61de0543627bb0f8641066721e35277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f0ba64ff0a63f7e0d8b9f83029dad25f4195e671dbc0e88842029ba7e8c8e98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ba64ff0a63f7e0d8b9f83029dad25f4195e671dbc0e88842029ba7e8c8e98f->enter($__internal_f0ba64ff0a63f7e0d8b9f83029dad25f4195e671dbc0e88842029ba7e8c8e98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f0ba64ff0a63f7e0d8b9f83029dad25f4195e671dbc0e88842029ba7e8c8e98f->leave($__internal_f0ba64ff0a63f7e0d8b9f83029dad25f4195e671dbc0e88842029ba7e8c8e98f_prof);

        
        $__internal_a8299367de6de9d60bf19a38756a8846d61de0543627bb0f8641066721e35277->leave($__internal_a8299367de6de9d60bf19a38756a8846d61de0543627bb0f8641066721e35277_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e12f4034f7150909d42252d6cee0bbbe28fea734259a6a3636a4c660d37ad987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12f4034f7150909d42252d6cee0bbbe28fea734259a6a3636a4c660d37ad987->enter($__internal_e12f4034f7150909d42252d6cee0bbbe28fea734259a6a3636a4c660d37ad987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_46777da8bb727d136a194e57876c08ec2db3f7be187eb7f9b980f514b6ba8c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46777da8bb727d136a194e57876c08ec2db3f7be187eb7f9b980f514b6ba8c91->enter($__internal_46777da8bb727d136a194e57876c08ec2db3f7be187eb7f9b980f514b6ba8c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_46777da8bb727d136a194e57876c08ec2db3f7be187eb7f9b980f514b6ba8c91->leave($__internal_46777da8bb727d136a194e57876c08ec2db3f7be187eb7f9b980f514b6ba8c91_prof);

        
        $__internal_e12f4034f7150909d42252d6cee0bbbe28fea734259a6a3636a4c660d37ad987->leave($__internal_e12f4034f7150909d42252d6cee0bbbe28fea734259a6a3636a4c660d37ad987_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4b18b1ec1ae202697e0fed303524465f2ceda949fc3052057171193ca30f726e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b18b1ec1ae202697e0fed303524465f2ceda949fc3052057171193ca30f726e->enter($__internal_4b18b1ec1ae202697e0fed303524465f2ceda949fc3052057171193ca30f726e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ee93c80766cc318f8d3100c6cae042696f19b19acde7ad995835c4e8eff8f59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee93c80766cc318f8d3100c6cae042696f19b19acde7ad995835c4e8eff8f59d->enter($__internal_ee93c80766cc318f8d3100c6cae042696f19b19acde7ad995835c4e8eff8f59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_c3bb58b8dec92c733310a00ca34038cb8c6da7e48e558b18e1f13bb520faee95 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_114cb2ec82cb83e438b91f52b291664c1a9181fb18d050ace855e71c9b8131fa = "{{") && ('' === $__internal_114cb2ec82cb83e438b91f52b291664c1a9181fb18d050ace855e71c9b8131fa || 0 === strpos($__internal_c3bb58b8dec92c733310a00ca34038cb8c6da7e48e558b18e1f13bb520faee95, $__internal_114cb2ec82cb83e438b91f52b291664c1a9181fb18d050ace855e71c9b8131fa)));
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
        
        $__internal_ee93c80766cc318f8d3100c6cae042696f19b19acde7ad995835c4e8eff8f59d->leave($__internal_ee93c80766cc318f8d3100c6cae042696f19b19acde7ad995835c4e8eff8f59d_prof);

        
        $__internal_4b18b1ec1ae202697e0fed303524465f2ceda949fc3052057171193ca30f726e->leave($__internal_4b18b1ec1ae202697e0fed303524465f2ceda949fc3052057171193ca30f726e_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e0ba604e589b3e3f28d58e2d840ccb268516884481d1ef25d6a4265e50143163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ba604e589b3e3f28d58e2d840ccb268516884481d1ef25d6a4265e50143163->enter($__internal_e0ba604e589b3e3f28d58e2d840ccb268516884481d1ef25d6a4265e50143163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e9d7f4897a82b5f81c86a53feece871e13c57802e8cb9dc57c1f493d8082dcb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d7f4897a82b5f81c86a53feece871e13c57802e8cb9dc57c1f493d8082dcb8->enter($__internal_e9d7f4897a82b5f81c86a53feece871e13c57802e8cb9dc57c1f493d8082dcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_e9d7f4897a82b5f81c86a53feece871e13c57802e8cb9dc57c1f493d8082dcb8->leave($__internal_e9d7f4897a82b5f81c86a53feece871e13c57802e8cb9dc57c1f493d8082dcb8_prof);

        
        $__internal_e0ba604e589b3e3f28d58e2d840ccb268516884481d1ef25d6a4265e50143163->leave($__internal_e0ba604e589b3e3f28d58e2d840ccb268516884481d1ef25d6a4265e50143163_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_df6034f43965d214e3aeeace1ea35609ec37877cac107cdf8812b71d28bf2426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6034f43965d214e3aeeace1ea35609ec37877cac107cdf8812b71d28bf2426->enter($__internal_df6034f43965d214e3aeeace1ea35609ec37877cac107cdf8812b71d28bf2426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_3d16682fbbbef0f200aafec9b42f05861d71428b267e0f380752515d040e49fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d16682fbbbef0f200aafec9b42f05861d71428b267e0f380752515d040e49fd->enter($__internal_3d16682fbbbef0f200aafec9b42f05861d71428b267e0f380752515d040e49fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_3d16682fbbbef0f200aafec9b42f05861d71428b267e0f380752515d040e49fd->leave($__internal_3d16682fbbbef0f200aafec9b42f05861d71428b267e0f380752515d040e49fd_prof);

        
        $__internal_df6034f43965d214e3aeeace1ea35609ec37877cac107cdf8812b71d28bf2426->leave($__internal_df6034f43965d214e3aeeace1ea35609ec37877cac107cdf8812b71d28bf2426_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_60bc030cf948f589be725f342b1dd2adc5b9c3f7e8e2b197768688087d7fa1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60bc030cf948f589be725f342b1dd2adc5b9c3f7e8e2b197768688087d7fa1ab->enter($__internal_60bc030cf948f589be725f342b1dd2adc5b9c3f7e8e2b197768688087d7fa1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_40980db8156ec3ef59fe4daee7da7e7d68dd202086ad0d3ae060c4d99dcf1715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40980db8156ec3ef59fe4daee7da7e7d68dd202086ad0d3ae060c4d99dcf1715->enter($__internal_40980db8156ec3ef59fe4daee7da7e7d68dd202086ad0d3ae060c4d99dcf1715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_40980db8156ec3ef59fe4daee7da7e7d68dd202086ad0d3ae060c4d99dcf1715->leave($__internal_40980db8156ec3ef59fe4daee7da7e7d68dd202086ad0d3ae060c4d99dcf1715_prof);

        
        $__internal_60bc030cf948f589be725f342b1dd2adc5b9c3f7e8e2b197768688087d7fa1ab->leave($__internal_60bc030cf948f589be725f342b1dd2adc5b9c3f7e8e2b197768688087d7fa1ab_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ac530fad346373df452a0b264ece6d45be62b958a96938827aff04331c6acf57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac530fad346373df452a0b264ece6d45be62b958a96938827aff04331c6acf57->enter($__internal_ac530fad346373df452a0b264ece6d45be62b958a96938827aff04331c6acf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1d5156f4ab828182f11058f195a1c6ff6f603d05f2bc35d9c6c48cc7bd5b1722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5156f4ab828182f11058f195a1c6ff6f603d05f2bc35d9c6c48cc7bd5b1722->enter($__internal_1d5156f4ab828182f11058f195a1c6ff6f603d05f2bc35d9c6c48cc7bd5b1722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_1d5156f4ab828182f11058f195a1c6ff6f603d05f2bc35d9c6c48cc7bd5b1722->leave($__internal_1d5156f4ab828182f11058f195a1c6ff6f603d05f2bc35d9c6c48cc7bd5b1722_prof);

        
        $__internal_ac530fad346373df452a0b264ece6d45be62b958a96938827aff04331c6acf57->leave($__internal_ac530fad346373df452a0b264ece6d45be62b958a96938827aff04331c6acf57_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_bef9801bba182be489d602595281ced3ee6f5663fcc3a477d5072f646e593842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef9801bba182be489d602595281ced3ee6f5663fcc3a477d5072f646e593842->enter($__internal_bef9801bba182be489d602595281ced3ee6f5663fcc3a477d5072f646e593842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6e9288cb72a986c7f1048c437ce76e173b504e80a0aeeed2043c9fabb6122c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9288cb72a986c7f1048c437ce76e173b504e80a0aeeed2043c9fabb6122c7f->enter($__internal_6e9288cb72a986c7f1048c437ce76e173b504e80a0aeeed2043c9fabb6122c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_6e9288cb72a986c7f1048c437ce76e173b504e80a0aeeed2043c9fabb6122c7f->leave($__internal_6e9288cb72a986c7f1048c437ce76e173b504e80a0aeeed2043c9fabb6122c7f_prof);

        
        $__internal_bef9801bba182be489d602595281ced3ee6f5663fcc3a477d5072f646e593842->leave($__internal_bef9801bba182be489d602595281ced3ee6f5663fcc3a477d5072f646e593842_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5d63b817b9486adcf1510a977227e0838466427e8194eba43efb2293f77a6ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d63b817b9486adcf1510a977227e0838466427e8194eba43efb2293f77a6ceb->enter($__internal_5d63b817b9486adcf1510a977227e0838466427e8194eba43efb2293f77a6ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_73a90f7ce7bd5c1050c0e04d5d0d72c796a05dff76a4044f56ca37e2e18413ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a90f7ce7bd5c1050c0e04d5d0d72c796a05dff76a4044f56ca37e2e18413ab->enter($__internal_73a90f7ce7bd5c1050c0e04d5d0d72c796a05dff76a4044f56ca37e2e18413ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_73a90f7ce7bd5c1050c0e04d5d0d72c796a05dff76a4044f56ca37e2e18413ab->leave($__internal_73a90f7ce7bd5c1050c0e04d5d0d72c796a05dff76a4044f56ca37e2e18413ab_prof);

        
        $__internal_5d63b817b9486adcf1510a977227e0838466427e8194eba43efb2293f77a6ceb->leave($__internal_5d63b817b9486adcf1510a977227e0838466427e8194eba43efb2293f77a6ceb_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a397820e1d64c03e4add374cd0611cca58a60cc2faf9001b04872987c76f958d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a397820e1d64c03e4add374cd0611cca58a60cc2faf9001b04872987c76f958d->enter($__internal_a397820e1d64c03e4add374cd0611cca58a60cc2faf9001b04872987c76f958d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d1abff27bae02fe1694a3f4cf4842c6be0e62b5a5ac0972627b7ebec01c11472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1abff27bae02fe1694a3f4cf4842c6be0e62b5a5ac0972627b7ebec01c11472->enter($__internal_d1abff27bae02fe1694a3f4cf4842c6be0e62b5a5ac0972627b7ebec01c11472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_d1abff27bae02fe1694a3f4cf4842c6be0e62b5a5ac0972627b7ebec01c11472->leave($__internal_d1abff27bae02fe1694a3f4cf4842c6be0e62b5a5ac0972627b7ebec01c11472_prof);

        
        $__internal_a397820e1d64c03e4add374cd0611cca58a60cc2faf9001b04872987c76f958d->leave($__internal_a397820e1d64c03e4add374cd0611cca58a60cc2faf9001b04872987c76f958d_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_184a56ec5abcc2d1f2ac79b3a7a5e49b0a961af590adbf2c13cc4769af423c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184a56ec5abcc2d1f2ac79b3a7a5e49b0a961af590adbf2c13cc4769af423c06->enter($__internal_184a56ec5abcc2d1f2ac79b3a7a5e49b0a961af590adbf2c13cc4769af423c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6ba627ba766cb37f8732f3cc49c533b7aa3d1d9a428d7c724534dce869750c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba627ba766cb37f8732f3cc49c533b7aa3d1d9a428d7c724534dce869750c9d->enter($__internal_6ba627ba766cb37f8732f3cc49c533b7aa3d1d9a428d7c724534dce869750c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_6ba627ba766cb37f8732f3cc49c533b7aa3d1d9a428d7c724534dce869750c9d->leave($__internal_6ba627ba766cb37f8732f3cc49c533b7aa3d1d9a428d7c724534dce869750c9d_prof);

        
        $__internal_184a56ec5abcc2d1f2ac79b3a7a5e49b0a961af590adbf2c13cc4769af423c06->leave($__internal_184a56ec5abcc2d1f2ac79b3a7a5e49b0a961af590adbf2c13cc4769af423c06_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1fb8965a5e0468fc3d3239f126da5d32495fbb0128c98b191b97b8b645f727e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb8965a5e0468fc3d3239f126da5d32495fbb0128c98b191b97b8b645f727e4->enter($__internal_1fb8965a5e0468fc3d3239f126da5d32495fbb0128c98b191b97b8b645f727e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6c4f0ef77961e5c8b34430b33a28f6035ff69961ea7d5a3493b9cf354ea44084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4f0ef77961e5c8b34430b33a28f6035ff69961ea7d5a3493b9cf354ea44084->enter($__internal_6c4f0ef77961e5c8b34430b33a28f6035ff69961ea7d5a3493b9cf354ea44084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_6c4f0ef77961e5c8b34430b33a28f6035ff69961ea7d5a3493b9cf354ea44084->leave($__internal_6c4f0ef77961e5c8b34430b33a28f6035ff69961ea7d5a3493b9cf354ea44084_prof);

        
        $__internal_1fb8965a5e0468fc3d3239f126da5d32495fbb0128c98b191b97b8b645f727e4->leave($__internal_1fb8965a5e0468fc3d3239f126da5d32495fbb0128c98b191b97b8b645f727e4_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3df5641f92d4f4609b6a7c1cd87c968a65188eedadd596d81321c69234e93eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df5641f92d4f4609b6a7c1cd87c968a65188eedadd596d81321c69234e93eef->enter($__internal_3df5641f92d4f4609b6a7c1cd87c968a65188eedadd596d81321c69234e93eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_698b09c8add4207e6d89d00316a11438cd26559f4b480503b0a3fb041f3634e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698b09c8add4207e6d89d00316a11438cd26559f4b480503b0a3fb041f3634e9->enter($__internal_698b09c8add4207e6d89d00316a11438cd26559f4b480503b0a3fb041f3634e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_698b09c8add4207e6d89d00316a11438cd26559f4b480503b0a3fb041f3634e9->leave($__internal_698b09c8add4207e6d89d00316a11438cd26559f4b480503b0a3fb041f3634e9_prof);

        
        $__internal_3df5641f92d4f4609b6a7c1cd87c968a65188eedadd596d81321c69234e93eef->leave($__internal_3df5641f92d4f4609b6a7c1cd87c968a65188eedadd596d81321c69234e93eef_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_523e926f4031129130e89671c262abb8edc1a73c72ef8eae98493e20b838fae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523e926f4031129130e89671c262abb8edc1a73c72ef8eae98493e20b838fae2->enter($__internal_523e926f4031129130e89671c262abb8edc1a73c72ef8eae98493e20b838fae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_46f65a1653527d0e0a022a823f617cdd8f0165e35d5c36f3cf4de3f5e35de787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f65a1653527d0e0a022a823f617cdd8f0165e35d5c36f3cf4de3f5e35de787->enter($__internal_46f65a1653527d0e0a022a823f617cdd8f0165e35d5c36f3cf4de3f5e35de787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_46f65a1653527d0e0a022a823f617cdd8f0165e35d5c36f3cf4de3f5e35de787->leave($__internal_46f65a1653527d0e0a022a823f617cdd8f0165e35d5c36f3cf4de3f5e35de787_prof);

        
        $__internal_523e926f4031129130e89671c262abb8edc1a73c72ef8eae98493e20b838fae2->leave($__internal_523e926f4031129130e89671c262abb8edc1a73c72ef8eae98493e20b838fae2_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4bf0cd2843222b7f353a306fb4c737d9b493c6d4689d829c92fc7d47b07a491a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf0cd2843222b7f353a306fb4c737d9b493c6d4689d829c92fc7d47b07a491a->enter($__internal_4bf0cd2843222b7f353a306fb4c737d9b493c6d4689d829c92fc7d47b07a491a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5ce862589603ed10969fe15e461aaa56afa441b6c8647813a86f59187e8efeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce862589603ed10969fe15e461aaa56afa441b6c8647813a86f59187e8efeb5->enter($__internal_5ce862589603ed10969fe15e461aaa56afa441b6c8647813a86f59187e8efeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5ce862589603ed10969fe15e461aaa56afa441b6c8647813a86f59187e8efeb5->leave($__internal_5ce862589603ed10969fe15e461aaa56afa441b6c8647813a86f59187e8efeb5_prof);

        
        $__internal_4bf0cd2843222b7f353a306fb4c737d9b493c6d4689d829c92fc7d47b07a491a->leave($__internal_4bf0cd2843222b7f353a306fb4c737d9b493c6d4689d829c92fc7d47b07a491a_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8afa761c27aae9dd8da5460e27fc85e3f9f652460a02c36c076bd915f5208e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afa761c27aae9dd8da5460e27fc85e3f9f652460a02c36c076bd915f5208e2e->enter($__internal_8afa761c27aae9dd8da5460e27fc85e3f9f652460a02c36c076bd915f5208e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_5511ce8ff3a304e67b0f5fd46f04cf479183cceb9bfb23a1de28f5e58c51f23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5511ce8ff3a304e67b0f5fd46f04cf479183cceb9bfb23a1de28f5e58c51f23d->enter($__internal_5511ce8ff3a304e67b0f5fd46f04cf479183cceb9bfb23a1de28f5e58c51f23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5511ce8ff3a304e67b0f5fd46f04cf479183cceb9bfb23a1de28f5e58c51f23d->leave($__internal_5511ce8ff3a304e67b0f5fd46f04cf479183cceb9bfb23a1de28f5e58c51f23d_prof);

        
        $__internal_8afa761c27aae9dd8da5460e27fc85e3f9f652460a02c36c076bd915f5208e2e->leave($__internal_8afa761c27aae9dd8da5460e27fc85e3f9f652460a02c36c076bd915f5208e2e_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_33bd09f8d1479a3270d077c855782569e3fed5c445ce89974055b9186a96271d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bd09f8d1479a3270d077c855782569e3fed5c445ce89974055b9186a96271d->enter($__internal_33bd09f8d1479a3270d077c855782569e3fed5c445ce89974055b9186a96271d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_675014227619a875a5993887197e1b8aa51e9e4b0aa9a8fd63ed01e926d83709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675014227619a875a5993887197e1b8aa51e9e4b0aa9a8fd63ed01e926d83709->enter($__internal_675014227619a875a5993887197e1b8aa51e9e4b0aa9a8fd63ed01e926d83709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_675014227619a875a5993887197e1b8aa51e9e4b0aa9a8fd63ed01e926d83709->leave($__internal_675014227619a875a5993887197e1b8aa51e9e4b0aa9a8fd63ed01e926d83709_prof);

        
        $__internal_33bd09f8d1479a3270d077c855782569e3fed5c445ce89974055b9186a96271d->leave($__internal_33bd09f8d1479a3270d077c855782569e3fed5c445ce89974055b9186a96271d_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_85a391dd188bc7677bb90bef33e6ffb05a581480d99f4d1c532d33c364bbdcb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a391dd188bc7677bb90bef33e6ffb05a581480d99f4d1c532d33c364bbdcb7->enter($__internal_85a391dd188bc7677bb90bef33e6ffb05a581480d99f4d1c532d33c364bbdcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b5793f68dd651e04d5cf46c04ed108db9faae97734d599c5f88f94b090ab9c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5793f68dd651e04d5cf46c04ed108db9faae97734d599c5f88f94b090ab9c89->enter($__internal_b5793f68dd651e04d5cf46c04ed108db9faae97734d599c5f88f94b090ab9c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b5793f68dd651e04d5cf46c04ed108db9faae97734d599c5f88f94b090ab9c89->leave($__internal_b5793f68dd651e04d5cf46c04ed108db9faae97734d599c5f88f94b090ab9c89_prof);

        
        $__internal_85a391dd188bc7677bb90bef33e6ffb05a581480d99f4d1c532d33c364bbdcb7->leave($__internal_85a391dd188bc7677bb90bef33e6ffb05a581480d99f4d1c532d33c364bbdcb7_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8cc212f8dd9483c913fb2deca7da9f3dd3bbb2d456665f535069b232f89ccdf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc212f8dd9483c913fb2deca7da9f3dd3bbb2d456665f535069b232f89ccdf6->enter($__internal_8cc212f8dd9483c913fb2deca7da9f3dd3bbb2d456665f535069b232f89ccdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_53aab90b6650360f699ebd31619d8cedc653d783435876e2341f7fb27e03f477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53aab90b6650360f699ebd31619d8cedc653d783435876e2341f7fb27e03f477->enter($__internal_53aab90b6650360f699ebd31619d8cedc653d783435876e2341f7fb27e03f477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_53aab90b6650360f699ebd31619d8cedc653d783435876e2341f7fb27e03f477->leave($__internal_53aab90b6650360f699ebd31619d8cedc653d783435876e2341f7fb27e03f477_prof);

        
        $__internal_8cc212f8dd9483c913fb2deca7da9f3dd3bbb2d456665f535069b232f89ccdf6->leave($__internal_8cc212f8dd9483c913fb2deca7da9f3dd3bbb2d456665f535069b232f89ccdf6_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f8394dcf3151c47cd09a4bc8aa5382e5d1e397a690173bba052bcaeabb4c377c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8394dcf3151c47cd09a4bc8aa5382e5d1e397a690173bba052bcaeabb4c377c->enter($__internal_f8394dcf3151c47cd09a4bc8aa5382e5d1e397a690173bba052bcaeabb4c377c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_b50300555d812b98fdcca563f35816b47c654616462400a35966c6937456459a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50300555d812b98fdcca563f35816b47c654616462400a35966c6937456459a->enter($__internal_b50300555d812b98fdcca563f35816b47c654616462400a35966c6937456459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b50300555d812b98fdcca563f35816b47c654616462400a35966c6937456459a->leave($__internal_b50300555d812b98fdcca563f35816b47c654616462400a35966c6937456459a_prof);

        
        $__internal_f8394dcf3151c47cd09a4bc8aa5382e5d1e397a690173bba052bcaeabb4c377c->leave($__internal_f8394dcf3151c47cd09a4bc8aa5382e5d1e397a690173bba052bcaeabb4c377c_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ee012a2f003a8d44d6a7bde4bfb429fa8ed1de4a1cae75f7255e8169ab37ce04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee012a2f003a8d44d6a7bde4bfb429fa8ed1de4a1cae75f7255e8169ab37ce04->enter($__internal_ee012a2f003a8d44d6a7bde4bfb429fa8ed1de4a1cae75f7255e8169ab37ce04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_2f18d1e8fd36907ad613c430544d1b45f517d9705e1fc17a9b370794aa638d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f18d1e8fd36907ad613c430544d1b45f517d9705e1fc17a9b370794aa638d5c->enter($__internal_2f18d1e8fd36907ad613c430544d1b45f517d9705e1fc17a9b370794aa638d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2f18d1e8fd36907ad613c430544d1b45f517d9705e1fc17a9b370794aa638d5c->leave($__internal_2f18d1e8fd36907ad613c430544d1b45f517d9705e1fc17a9b370794aa638d5c_prof);

        
        $__internal_ee012a2f003a8d44d6a7bde4bfb429fa8ed1de4a1cae75f7255e8169ab37ce04->leave($__internal_ee012a2f003a8d44d6a7bde4bfb429fa8ed1de4a1cae75f7255e8169ab37ce04_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_fd3c9cc11202e222771806a3214787e92f5e031edfa65782e46c7fbff17b4bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3c9cc11202e222771806a3214787e92f5e031edfa65782e46c7fbff17b4bc6->enter($__internal_fd3c9cc11202e222771806a3214787e92f5e031edfa65782e46c7fbff17b4bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_4aef0a0464055f38abe3344c03e07f038305c421c51b6c3466b3656f1606a9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aef0a0464055f38abe3344c03e07f038305c421c51b6c3466b3656f1606a9c5->enter($__internal_4aef0a0464055f38abe3344c03e07f038305c421c51b6c3466b3656f1606a9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4aef0a0464055f38abe3344c03e07f038305c421c51b6c3466b3656f1606a9c5->leave($__internal_4aef0a0464055f38abe3344c03e07f038305c421c51b6c3466b3656f1606a9c5_prof);

        
        $__internal_fd3c9cc11202e222771806a3214787e92f5e031edfa65782e46c7fbff17b4bc6->leave($__internal_fd3c9cc11202e222771806a3214787e92f5e031edfa65782e46c7fbff17b4bc6_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5b157428426ae48306e81c8c3444665ccd52ec2091437a4f931f7761efb2e902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b157428426ae48306e81c8c3444665ccd52ec2091437a4f931f7761efb2e902->enter($__internal_5b157428426ae48306e81c8c3444665ccd52ec2091437a4f931f7761efb2e902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_f4818ec34705eb747ddd2086e8cc45cc8ab0350dd51f4b8d941cfd51d725be4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4818ec34705eb747ddd2086e8cc45cc8ab0350dd51f4b8d941cfd51d725be4d->enter($__internal_f4818ec34705eb747ddd2086e8cc45cc8ab0350dd51f4b8d941cfd51d725be4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f4818ec34705eb747ddd2086e8cc45cc8ab0350dd51f4b8d941cfd51d725be4d->leave($__internal_f4818ec34705eb747ddd2086e8cc45cc8ab0350dd51f4b8d941cfd51d725be4d_prof);

        
        $__internal_5b157428426ae48306e81c8c3444665ccd52ec2091437a4f931f7761efb2e902->leave($__internal_5b157428426ae48306e81c8c3444665ccd52ec2091437a4f931f7761efb2e902_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7b0c86fc6fe1957742db2048b78eb57ef0a8ccca9a8668fcbab60249e1e16d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0c86fc6fe1957742db2048b78eb57ef0a8ccca9a8668fcbab60249e1e16d30->enter($__internal_7b0c86fc6fe1957742db2048b78eb57ef0a8ccca9a8668fcbab60249e1e16d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9097236b0367bbbc68f34e0ec255e2d96328c9d1098577d2360b58804fef9ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9097236b0367bbbc68f34e0ec255e2d96328c9d1098577d2360b58804fef9ed7->enter($__internal_9097236b0367bbbc68f34e0ec255e2d96328c9d1098577d2360b58804fef9ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9097236b0367bbbc68f34e0ec255e2d96328c9d1098577d2360b58804fef9ed7->leave($__internal_9097236b0367bbbc68f34e0ec255e2d96328c9d1098577d2360b58804fef9ed7_prof);

        
        $__internal_7b0c86fc6fe1957742db2048b78eb57ef0a8ccca9a8668fcbab60249e1e16d30->leave($__internal_7b0c86fc6fe1957742db2048b78eb57ef0a8ccca9a8668fcbab60249e1e16d30_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9148b05d9900a74482574b99ec42edc53eabd4423522d3fc0f4511327183db2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9148b05d9900a74482574b99ec42edc53eabd4423522d3fc0f4511327183db2f->enter($__internal_9148b05d9900a74482574b99ec42edc53eabd4423522d3fc0f4511327183db2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a689a17d1fc5b431da12c0be91739ac1ab1c5023c287b34240d5ee1a6f9cd54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a689a17d1fc5b431da12c0be91739ac1ab1c5023c287b34240d5ee1a6f9cd54c->enter($__internal_a689a17d1fc5b431da12c0be91739ac1ab1c5023c287b34240d5ee1a6f9cd54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_a689a17d1fc5b431da12c0be91739ac1ab1c5023c287b34240d5ee1a6f9cd54c->leave($__internal_a689a17d1fc5b431da12c0be91739ac1ab1c5023c287b34240d5ee1a6f9cd54c_prof);

        
        $__internal_9148b05d9900a74482574b99ec42edc53eabd4423522d3fc0f4511327183db2f->leave($__internal_9148b05d9900a74482574b99ec42edc53eabd4423522d3fc0f4511327183db2f_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4a8a98e2512e6693d852c678d30de88382b22e71dce609046a5d900a12f591a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8a98e2512e6693d852c678d30de88382b22e71dce609046a5d900a12f591a0->enter($__internal_4a8a98e2512e6693d852c678d30de88382b22e71dce609046a5d900a12f591a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_54dada190a8f9c7a38cabe532c3cfe42a514bcab909a876a6b7b61e2e39ad037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dada190a8f9c7a38cabe532c3cfe42a514bcab909a876a6b7b61e2e39ad037->enter($__internal_54dada190a8f9c7a38cabe532c3cfe42a514bcab909a876a6b7b61e2e39ad037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_54dada190a8f9c7a38cabe532c3cfe42a514bcab909a876a6b7b61e2e39ad037->leave($__internal_54dada190a8f9c7a38cabe532c3cfe42a514bcab909a876a6b7b61e2e39ad037_prof);

        
        $__internal_4a8a98e2512e6693d852c678d30de88382b22e71dce609046a5d900a12f591a0->leave($__internal_4a8a98e2512e6693d852c678d30de88382b22e71dce609046a5d900a12f591a0_prof);

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
", "bootstrap_3_layout.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
