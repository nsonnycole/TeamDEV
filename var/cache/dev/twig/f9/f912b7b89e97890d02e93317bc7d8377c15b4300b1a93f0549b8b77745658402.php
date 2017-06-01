<?php

/* base.html.twig */
class __TwigTemplate_3ec03b3f53befa956325c8018909135f2bc3a4eb1b43c6aa96094e1ac4ee9a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'documentReady' => array($this, 'block_documentReady'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af5ed091c862b34f99daac1062f115c29c152bdce53939fc9537678d7814be58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5ed091c862b34f99daac1062f115c29c152bdce53939fc9537678d7814be58->enter($__internal_af5ed091c862b34f99daac1062f115c29c152bdce53939fc9537678d7814be58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4d375075885230a9eea8ce0e122479b130afe211ce175ec4d81b46500cf0944f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d375075885230a9eea8ce0e122479b130afe211ce175ec4d81b46500cf0944f->enter($__internal_4d375075885230a9eea8ce0e122479b130afe211ce175ec4d81b46500cf0944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">

    <title>TeamDEV</title>

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chosen/chosen.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chosen/chosen.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\"rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

  </head>
    <body>
      <!-- Menu -->
    \t<nav class=\"menu\" id=\"theMenu\">
    \t\t<div class=\"menu-wrap\">
    \t\t\t<h1 class=\"logo\"><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">TeamDEV</a></h1>
    \t\t\t<i class=\"fa fa-arrow-right menu-close\"></i>
    \t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Accueil</a>
          ";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "        \t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
            echo "\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> Projets</a>
          <hr>
          <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Mon profil</a>
          <!-- <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a> -->
    \t\t\t<a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesNotifications");
            echo "\"> <span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span> Mes notifications</a>
          <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesMessages");
            echo "\"> <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Mes messages</a>
          <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesProjets");
            echo "\"> <span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"></span> Mes projets</a>
          ";
        } else {
            // line 54
            echo "          <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> Connexion</a>
          ";
        }
        // line 56
        echo "          <hr>
          ";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 58
            echo "          <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute");
            echo "\"> Communauté</a>
          ";
        }
        // line 60
        echo "          <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-envelope\"></i></a>



    \t\t</div>

    \t\t<!-- Menu button -->
    \t\t<div id=\"menuToggle\"><i class=\"fa fa-bars\"></i></div>
    \t</nav>

        <section>
        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        </section>
        <footer><p  class=\"container\">TeamDEV Copyright 2017</p></footer>
        ";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 167
        echo "    </body>
</html>
";
        
        $__internal_af5ed091c862b34f99daac1062f115c29c152bdce53939fc9537678d7814be58->leave($__internal_af5ed091c862b34f99daac1062f115c29c152bdce53939fc9537678d7814be58_prof);

        
        $__internal_4d375075885230a9eea8ce0e122479b130afe211ce175ec4d81b46500cf0944f->leave($__internal_4d375075885230a9eea8ce0e122479b130afe211ce175ec4d81b46500cf0944f_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3dad6d6ff9a72779b440c0adc8c917eca81d5ddea96501618f22d0acd9bd974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dad6d6ff9a72779b440c0adc8c917eca81d5ddea96501618f22d0acd9bd974->enter($__internal_a3dad6d6ff9a72779b440c0adc8c917eca81d5ddea96501618f22d0acd9bd974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1019f57f22b6aba7fe58e7c1a43fa5fb897d56edfc80822b43e79b5335de6fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1019f57f22b6aba7fe58e7c1a43fa5fb897d56edfc80822b43e79b5335de6fd0->enter($__internal_1019f57f22b6aba7fe58e7c1a43fa5fb897d56edfc80822b43e79b5335de6fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "        ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 76
        echo "        ";
        
        $__internal_1019f57f22b6aba7fe58e7c1a43fa5fb897d56edfc80822b43e79b5335de6fd0->leave($__internal_1019f57f22b6aba7fe58e7c1a43fa5fb897d56edfc80822b43e79b5335de6fd0_prof);

        
        $__internal_a3dad6d6ff9a72779b440c0adc8c917eca81d5ddea96501618f22d0acd9bd974->leave($__internal_a3dad6d6ff9a72779b440c0adc8c917eca81d5ddea96501618f22d0acd9bd974_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f428d28c84554af7c7bee7be6ae9afa68ad218627fff0c23070688eac3cf4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f428d28c84554af7c7bee7be6ae9afa68ad218627fff0c23070688eac3cf4f1->enter($__internal_3f428d28c84554af7c7bee7be6ae9afa68ad218627fff0c23070688eac3cf4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cdb45fae618fe6048e2d9dff49a64b3c035a7b7737beb14cad973b5a0502a61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb45fae618fe6048e2d9dff49a64b3c035a7b7737beb14cad973b5a0502a61e->enter($__internal_cdb45fae618fe6048e2d9dff49a64b3c035a7b7737beb14cad973b5a0502a61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.8.0.min.js"), "html", null, true);
        echo "\"></script>
       <!-- <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script> -->
       <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/imagesloaded.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/AnimOnScroll.js"), "html", null, true);
        echo "\"></script> -->
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>

        <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
        <!-- <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script> -->

        <!-- <script src=\"https://cdn.datatables.net/plug-ins/1.10.15/i18n/French.json\"></script> -->
        <!-- <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
          minDuration : 0.4,
          maxDuration : 0.7,
          viewportFactor : 0.2
        } );
      </script> -->

      <script type=\"text/javascript\">
      \$(document).ready(function() {
       \$('.progress .progress-bar').css(\"width\",
                 function() {
                     return \$(this).attr(\"aria-valuenow\") + \"%\";
                 }
         )

     });


   </script>

   <script type=\"text/javascript\">
   \$(document).ready(function() {

     \$( function() {
       \$('.datepicker').datepicker({
           format: 'dd/mm/yyyy',
           startDate: '-3d'
       });
      } );
    });
</script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){
          \$('#myTable').DataTable();
      });
    </script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){
           \$(\".chosen-select\").chosen();
           \$(\".chosen-select\").chosen({no_results_text: \"Oops, Aucun résultat trouvée!\"});
           \$(\".chosen-select\").chosen({width: \"100%\"});
      });
    </script>

    <script type=\"text/javascript\">
    \$(function() {
      \$('.range').next().text('--'); // Valeur par défaut
      \$('.range').on('input', function() {
        var \$set = \$(this).val();
        \$(this).next().text(\$set);
      });
    });
    </script>

    <script>

       jQuery(document).ready(function(){
           \$('.chosen-select').chosen();
       });
</script>


<script type=\"text/javascript\">
  \$(document).ready(function () {
      ";
        // line 162
        $this->displayBlock('documentReady', $context, $blocks);
        // line 163
        echo "  });
</script>

        ";
        
        $__internal_cdb45fae618fe6048e2d9dff49a64b3c035a7b7737beb14cad973b5a0502a61e->leave($__internal_cdb45fae618fe6048e2d9dff49a64b3c035a7b7737beb14cad973b5a0502a61e_prof);

        
        $__internal_3f428d28c84554af7c7bee7be6ae9afa68ad218627fff0c23070688eac3cf4f1->leave($__internal_3f428d28c84554af7c7bee7be6ae9afa68ad218627fff0c23070688eac3cf4f1_prof);

    }

    // line 162
    public function block_documentReady($context, array $blocks = array())
    {
        $__internal_9f586ed77bea1016ab6bfdf1e9e3b687b5c9c5a8b453e361286b2eebc9f540bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f586ed77bea1016ab6bfdf1e9e3b687b5c9c5a8b453e361286b2eebc9f540bb->enter($__internal_9f586ed77bea1016ab6bfdf1e9e3b687b5c9c5a8b453e361286b2eebc9f540bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "documentReady"));

        $__internal_b06042590dfb3b2e093e6b481534e9d1cb861c269f84783348c9592586d21205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06042590dfb3b2e093e6b481534e9d1cb861c269f84783348c9592586d21205->enter($__internal_b06042590dfb3b2e093e6b481534e9d1cb861c269f84783348c9592586d21205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "documentReady"));

        
        $__internal_b06042590dfb3b2e093e6b481534e9d1cb861c269f84783348c9592586d21205->leave($__internal_b06042590dfb3b2e093e6b481534e9d1cb861c269f84783348c9592586d21205_prof);

        
        $__internal_9f586ed77bea1016ab6bfdf1e9e3b687b5c9c5a8b453e361286b2eebc9f540bb->leave($__internal_9f586ed77bea1016ab6bfdf1e9e3b687b5c9c5a8b453e361286b2eebc9f540bb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 162,  335 => 163,  333 => 162,  260 => 92,  254 => 89,  250 => 88,  246 => 87,  242 => 86,  238 => 85,  234 => 84,  230 => 83,  226 => 82,  220 => 80,  211 => 79,  201 => 76,  198 => 75,  189 => 74,  177 => 167,  175 => 79,  171 => 77,  169 => 74,  153 => 60,  147 => 58,  145 => 57,  142 => 56,  136 => 54,  131 => 52,  127 => 51,  123 => 50,  119 => 49,  115 => 48,  109 => 46,  107 => 45,  103 => 44,  98 => 42,  88 => 35,  73 => 23,  69 => 22,  65 => 21,  60 => 19,  54 => 16,  49 => 14,  45 => 13,  38 => 9,  28 => 1,);
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
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.png')}}\">

    <title>TeamDEV</title>

    <link href=\"{{ asset('chosen/chosen.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('chosen/chosen.min.css')}}\" rel=\"stylesheet\">
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('css/bootstrap.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/main.css')}}\" rel=\"stylesheet\">

    <link href=\"{{ asset('css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/datepicker.css')}}\" rel=\"stylesheet\">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\"rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <script src=\"{{ asset('js/modernizr.custom.js')}}\"></script>

  </head>
    <body>
      <!-- Menu -->
    \t<nav class=\"menu\" id=\"theMenu\">
    \t\t<div class=\"menu-wrap\">
    \t\t\t<h1 class=\"logo\"><a href=\"{{path('homepage')}}\">TeamDEV</a></h1>
    \t\t\t<i class=\"fa fa-arrow-right menu-close\"></i>
    \t\t\t<a href=\"{{path('homepage')}}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Accueil</a>
          {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        \t<a href=\"{{path('projets')}}\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> Projets</a>
          <hr>
          <a href=\"{{path('fos_user_profile_show')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Mon profil</a>
          <!-- <a href=\"{{path('admin')}}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a> -->
    \t\t\t<a href=\"{{path('mesNotifications')}}\"> <span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span> Mes notifications</a>
          <a href=\"{{path('mesMessages')}}\"> <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Mes messages</a>
          <a href=\"{{path('mesProjets')}}\"> <span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"></span> Mes projets</a>
          {% else %}
          <a href=\"{{path('fos_user_security_login')}}\"> <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> Connexion</a>
          {% endif %}
          <hr>
          {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
          <a href=\"{{path('communaute')}}\"> Communauté</a>
          {% endif %}
          <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-envelope\"></i></a>



    \t\t</div>

    \t\t<!-- Menu button -->
    \t\t<div id=\"menuToggle\"><i class=\"fa fa-bars\"></i></div>
    \t</nav>

        <section>
        {% block body %}
        {% form_theme form 'bootstrap_3_layout.html.twig' %}
        {% endblock %}
        </section>
        <footer><p  class=\"container\">TeamDEV Copyright 2017</p></footer>
        {% block javascripts %}
      <script src=\"{{asset('js/jquery-1.8.0.min.js')}}\"></script>
       <!-- <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script> -->
       <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('js/main.js')}}\"></script>
        <!-- <script src=\"{{asset('js/masonry.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('js/imagesloaded.js')}}\"></script>
        <script src=\"{{asset('js/classie.js')}}\"></script>
        <script src=\"{{asset('js/AnimOnScroll.js')}}\"></script> -->
        <script src=\"{{asset('chosen/chosen.jquery.min.js')}}\"></script>
        <script src=\"{{asset('js/bootstrap-datepicker.js')}}\"></script>

        <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
        <!-- <script src=\"{{asset('js/functions.js')}}\"></script> -->

        <!-- <script src=\"https://cdn.datatables.net/plug-ins/1.10.15/i18n/French.json\"></script> -->
        <!-- <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
          minDuration : 0.4,
          maxDuration : 0.7,
          viewportFactor : 0.2
        } );
      </script> -->

      <script type=\"text/javascript\">
      \$(document).ready(function() {
       \$('.progress .progress-bar').css(\"width\",
                 function() {
                     return \$(this).attr(\"aria-valuenow\") + \"%\";
                 }
         )

     });


   </script>

   <script type=\"text/javascript\">
   \$(document).ready(function() {

     \$( function() {
       \$('.datepicker').datepicker({
           format: 'dd/mm/yyyy',
           startDate: '-3d'
       });
      } );
    });
</script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){
          \$('#myTable').DataTable();
      });
    </script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){
           \$(\".chosen-select\").chosen();
           \$(\".chosen-select\").chosen({no_results_text: \"Oops, Aucun résultat trouvée!\"});
           \$(\".chosen-select\").chosen({width: \"100%\"});
      });
    </script>

    <script type=\"text/javascript\">
    \$(function() {
      \$('.range').next().text('--'); // Valeur par défaut
      \$('.range').on('input', function() {
        var \$set = \$(this).val();
        \$(this).next().text(\$set);
      });
    });
    </script>

    <script>

       jQuery(document).ready(function(){
           \$('.chosen-select').chosen();
       });
</script>


<script type=\"text/javascript\">
  \$(document).ready(function () {
      {% block documentReady %}{% endblock documentReady %}
  });
</script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/TeamDEV/app/Resources/views/base.html.twig");
    }
}
