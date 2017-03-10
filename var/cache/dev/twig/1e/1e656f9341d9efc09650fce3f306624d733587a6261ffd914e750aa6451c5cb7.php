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
        $__internal_57d18e38465dc53e446486cf63bb3ec625022eb1d86b2a4fc1d3436bee565e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d18e38465dc53e446486cf63bb3ec625022eb1d86b2a4fc1d3436bee565e9a->enter($__internal_57d18e38465dc53e446486cf63bb3ec625022eb1d86b2a4fc1d3436bee565e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e64be7818a50ab70448cc95a41c282035a130430f2fb3da375ef3f833f289bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64be7818a50ab70448cc95a41c282035a130430f2fb3da375ef3f833f289bc9->enter($__internal_e64be7818a50ab70448cc95a41c282035a130430f2fb3da375ef3f833f289bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    \t\t\t<a href=\"portfolio.html\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Profil</a>
          <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexAdmin");
        echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a>
    \t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
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

        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "        <footer><p>TeamDEV Copyright 2017</p></footer>
        ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "    </body>
</html>
";
        
        $__internal_57d18e38465dc53e446486cf63bb3ec625022eb1d86b2a4fc1d3436bee565e9a->leave($__internal_57d18e38465dc53e446486cf63bb3ec625022eb1d86b2a4fc1d3436bee565e9a_prof);

        
        $__internal_e64be7818a50ab70448cc95a41c282035a130430f2fb3da375ef3f833f289bc9->leave($__internal_e64be7818a50ab70448cc95a41c282035a130430f2fb3da375ef3f833f289bc9_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_009562d9cc33ab1f17e8579ee0ef40b9e1a141ce9f0153ab9c723862e0bb8f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009562d9cc33ab1f17e8579ee0ef40b9e1a141ce9f0153ab9c723862e0bb8f90->enter($__internal_009562d9cc33ab1f17e8579ee0ef40b9e1a141ce9f0153ab9c723862e0bb8f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_317e63a0c4a760d124914f1f80c9532b15877208428e89136c7f28425c5fdcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317e63a0c4a760d124914f1f80c9532b15877208428e89136c7f28425c5fdcb9->enter($__internal_317e63a0c4a760d124914f1f80c9532b15877208428e89136c7f28425c5fdcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_317e63a0c4a760d124914f1f80c9532b15877208428e89136c7f28425c5fdcb9->leave($__internal_317e63a0c4a760d124914f1f80c9532b15877208428e89136c7f28425c5fdcb9_prof);

        
        $__internal_009562d9cc33ab1f17e8579ee0ef40b9e1a141ce9f0153ab9c723862e0bb8f90->leave($__internal_009562d9cc33ab1f17e8579ee0ef40b9e1a141ce9f0153ab9c723862e0bb8f90_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20e6f8724e1877b200543d9dcab3ff3886dceb5a2257e29d0c76ed768bf9769c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e6f8724e1877b200543d9dcab3ff3886dceb5a2257e29d0c76ed768bf9769c->enter($__internal_20e6f8724e1877b200543d9dcab3ff3886dceb5a2257e29d0c76ed768bf9769c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_99c222c67e9b327d41cfb7572bbc351335b9536523ccb5f6380db06417f0d6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c222c67e9b327d41cfb7572bbc351335b9536523ccb5f6380db06417f0d6c1->enter($__internal_99c222c67e9b327d41cfb7572bbc351335b9536523ccb5f6380db06417f0d6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "        <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/imagesloaded.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/AnimOnScroll.js"), "html", null, true);
        echo "\"></script>
        <!-- <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
          minDuration : 0.4,
          maxDuration : 0.7,
          viewportFactor : 0.2
        } );
      </script> -->
        ";
        
        $__internal_99c222c67e9b327d41cfb7572bbc351335b9536523ccb5f6380db06417f0d6c1->leave($__internal_99c222c67e9b327d41cfb7572bbc351335b9536523ccb5f6380db06417f0d6c1_prof);

        
        $__internal_20e6f8724e1877b200543d9dcab3ff3886dceb5a2257e29d0c76ed768bf9769c->leave($__internal_20e6f8724e1877b200543d9dcab3ff3886dceb5a2257e29d0c76ed768bf9769c_prof);

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
        return array (  188 => 65,  184 => 64,  180 => 63,  176 => 62,  172 => 61,  168 => 60,  165 => 59,  156 => 58,  139 => 56,  127 => 74,  125 => 58,  122 => 57,  120 => 56,  106 => 45,  102 => 44,  98 => 43,  93 => 41,  89 => 40,  84 => 38,  74 => 31,  60 => 20,  56 => 19,  51 => 17,  45 => 14,  37 => 9,  27 => 1,);
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
    \t\t\t<a href=\"portfolio.html\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Profil</a>
          <a href=\"{{path('indexAdmin')}}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Administration</a>
    \t\t\t<a href=\"{{path('login')}}\"> <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Connexion</a>
    \t\t\t<a href=\"{{path('logout')}}\"><span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span> Deconnexion</a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
    \t\t\t<a href=\"#\"><i class=\"fa fa-envelope\"></i></a>
    \t\t</div>

    \t\t<!-- Menu button -->
    \t\t<div id=\"menuToggle\"><i class=\"fa fa-bars\"></i></div>
    \t</nav>

        {% block body %}{% endblock %}
        <footer><p>TeamDEV Copyright 2017</p></footer>
        {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
        <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('js/main.js')}}\"></script>
        <script src=\"{{asset('js/masonry.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('js/imagesloaded.js')}}\"></script>
        <script src=\"{{asset('js/classie.js')}}\"></script>
        <script src=\"{{asset('js/AnimOnScroll.js')}}\"></script>
        <!-- <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
          minDuration : 0.4,
          maxDuration : 0.7,
          viewportFactor : 0.2
        } );
      </script> -->
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/sonny-cole/Documents/Projets/Projet_2/TeamDEV/app/Resources/views/base.html.twig");
    }
}
