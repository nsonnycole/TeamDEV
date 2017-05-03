<?php

/* base.html.twig */
class __TwigTemplate_cf8dd7734f89f5643c67cda8992bb134d7b6f94f3d770f4079a59b5ca58c9e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91cfd2cd138817dbe5117d894900a375d1e599ab9b7386074648de036f683e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cfd2cd138817dbe5117d894900a375d1e599ab9b7386074648de036f683e00->enter($__internal_91cfd2cd138817dbe5117d894900a375d1e599ab9b7386074648de036f683e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9d2e6169e4e6d3f6051ac5b6f852d03aa620a8aa838ae69de5f7a9a25b98a333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2e6169e4e6d3f6051ac5b6f852d03aa620a8aa838ae69de5f7a9a25b98a333->enter($__internal_9d2e6169e4e6d3f6051ac5b6f852d03aa620a8aa838ae69de5f7a9a25b98a333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
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
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

  </head>
    <body>
      <!-- Menu -->
    \t<nav class=\"menu\" id=\"theMenu\">
    \t\t<div class=\"menu-wrap\">
    \t\t\t<h1 class=\"logo\"><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">TeamDEV</a></h1>
    \t\t\t<i class=\"fa fa-arrow-right menu-close\"></i>
    \t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Accueil</a>
    \t\t\t<a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> Projets</a>
    \t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Profil</a>
          <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexAdmin");
        echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a>
    \t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"> <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Connexion</a>
    \t\t\t<a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> Deconnexion</a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-envelope\"></i></a>
    \t\t</div>

    \t\t<!-- Menu button -->
    \t\t<div id=\"menuToggle\"><i class=\"fa fa-bars\"></i></div>
    \t</nav>

        <section>
        ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        </section>
        <footer><p  class=\"container\">TeamDEV Copyright 2017</p></footer>
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "    </body>
</html>
";
        
        $__internal_91cfd2cd138817dbe5117d894900a375d1e599ab9b7386074648de036f683e00->leave($__internal_91cfd2cd138817dbe5117d894900a375d1e599ab9b7386074648de036f683e00_prof);

        
        $__internal_9d2e6169e4e6d3f6051ac5b6f852d03aa620a8aa838ae69de5f7a9a25b98a333->leave($__internal_9d2e6169e4e6d3f6051ac5b6f852d03aa620a8aa838ae69de5f7a9a25b98a333_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_63fce56ba52c53ed6e535c304ec679f494e038fa057e44cddb8aa58e072dd087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fce56ba52c53ed6e535c304ec679f494e038fa057e44cddb8aa58e072dd087->enter($__internal_63fce56ba52c53ed6e535c304ec679f494e038fa057e44cddb8aa58e072dd087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb7dc40c12370968e9154d79af7b01e2178f8da708a9ccc9dfdcd1c1e149485e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7dc40c12370968e9154d79af7b01e2178f8da708a9ccc9dfdcd1c1e149485e->enter($__internal_cb7dc40c12370968e9154d79af7b01e2178f8da708a9ccc9dfdcd1c1e149485e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "        ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 59
        echo "        ";
        
        $__internal_cb7dc40c12370968e9154d79af7b01e2178f8da708a9ccc9dfdcd1c1e149485e->leave($__internal_cb7dc40c12370968e9154d79af7b01e2178f8da708a9ccc9dfdcd1c1e149485e_prof);

        
        $__internal_63fce56ba52c53ed6e535c304ec679f494e038fa057e44cddb8aa58e072dd087->leave($__internal_63fce56ba52c53ed6e535c304ec679f494e038fa057e44cddb8aa58e072dd087_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf86a4c0d8796caefef5d2e159308029f25b94b4dee7ccd5d4a9ce69331f0251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf86a4c0d8796caefef5d2e159308029f25b94b4dee7ccd5d4a9ce69331f0251->enter($__internal_cf86a4c0d8796caefef5d2e159308029f25b94b4dee7ccd5d4a9ce69331f0251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_45e2502d40d5b4c155444b0ff1a5c5d4bc2b3a5057c357111cf0697d4e9dd827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e2502d40d5b4c155444b0ff1a5c5d4bc2b3a5057c357111cf0697d4e9dd827->enter($__internal_45e2502d40d5b4c155444b0ff1a5c5d4bc2b3a5057c357111cf0697d4e9dd827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "        <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
        <!-- <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> -->
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/imagesloaded.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/AnimOnScroll.js"), "html", null, true);
        echo "\"></script> -->
        <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
        <!-- <script src=\"https://cdn.datatables.net/plug-ins/1.10.15/i18n/French.json\"></script> -->
        <!-- <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
          minDuration : 0.4,
          maxDuration : 0.7,
          viewportFactor : 0.2
        } );
      </script> -->

      <!-- <script type=\"text/javascript\">
      \$(document).ready(function() {
       \$('.progress .progress-bar').css(\"width\",
                 function() {
                     return \$(this).attr(\"aria-valuenow\") + \"%\";
                 }
         )
     });
   </script> -->
    <script type=\"text/javascript\">
      \$(document).ready(function(){
          \$('#myTable').DataTable();
      });
    </script>
        ";
        
        $__internal_45e2502d40d5b4c155444b0ff1a5c5d4bc2b3a5057c357111cf0697d4e9dd827->leave($__internal_45e2502d40d5b4c155444b0ff1a5c5d4bc2b3a5057c357111cf0697d4e9dd827_prof);

        
        $__internal_cf86a4c0d8796caefef5d2e159308029f25b94b4dee7ccd5d4a9ce69331f0251->leave($__internal_cf86a4c0d8796caefef5d2e159308029f25b94b4dee7ccd5d4a9ce69331f0251_prof);

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
        return array (  198 => 69,  194 => 68,  190 => 67,  186 => 66,  182 => 65,  178 => 64,  175 => 63,  166 => 62,  156 => 59,  153 => 58,  144 => 57,  132 => 95,  130 => 62,  126 => 60,  124 => 57,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  84 => 38,  74 => 31,  60 => 20,  56 => 19,  51 => 17,  45 => 14,  37 => 9,  27 => 1,);
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

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('css/bootstrap.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/main.css')}}\" rel=\"stylesheet\">

    <link href=\"{{ asset('css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">
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
    \t\t\t<a href=\"{{path('projets')}}\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> Projets</a>
    \t\t\t<a href=\"{{path('fos_user_profile_show')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Profil</a>
          <a href=\"{{path('indexAdmin')}}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a>
    \t\t\t<a href=\"{{path('homepage')}}\"> <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Connexion</a>
    \t\t\t<a href=\"{{path('logout')}}\"><span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> Deconnexion</a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
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
        <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
        <!-- <script src=\"{{asset('js/bootstrap.min.js')}}\"></script> -->
        <script src=\"{{asset('js/main.js')}}\"></script>
        <!-- <script src=\"{{asset('js/masonry.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('js/imagesloaded.js')}}\"></script>
        <script src=\"{{asset('js/classie.js')}}\"></script>
        <script src=\"{{asset('js/AnimOnScroll.js')}}\"></script> -->
        <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
        <!-- <script src=\"https://cdn.datatables.net/plug-ins/1.10.15/i18n/French.json\"></script> -->
        <!-- <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
          minDuration : 0.4,
          maxDuration : 0.7,
          viewportFactor : 0.2
        } );
      </script> -->

      <!-- <script type=\"text/javascript\">
      \$(document).ready(function() {
       \$('.progress .progress-bar').css(\"width\",
                 function() {
                     return \$(this).attr(\"aria-valuenow\") + \"%\";
                 }
         )
     });
   </script> -->
    <script type=\"text/javascript\">
      \$(document).ready(function(){
          \$('#myTable').DataTable();
      });
    </script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/base.html.twig");
    }
}
