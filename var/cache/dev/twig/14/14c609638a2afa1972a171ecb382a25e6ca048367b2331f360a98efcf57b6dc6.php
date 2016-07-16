<?php

/* @ArenaFight/Joueur/Layout.html.twig */
class __TwigTemplate_00d7c407179a731d2518b6e42f1cbe9cb19434a7d4d0dcf85f4375366cf397c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e004ab833bd1a58a7d87457946436447bebff07d8de6dfcd3ba10917e7d1d81 = $this->env->getExtension("native_profiler");
        $__internal_8e004ab833bd1a58a7d87457946436447bebff07d8de6dfcd3ba10917e7d1d81->enter($__internal_8e004ab833bd1a58a7d87457946436447bebff07d8de6dfcd3ba10917e7d1d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Joueur/Layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/notaire/images/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/style/bootstrap.min.css"), "html", null, true);
        echo "\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <title>Titre de la page</title>
    </head>
    <body>
        <div class=\"container\">

            <header>
                <div class=\"container banniere\">
                </div>
                <div class=\"container\">
                    <div class=\"row\">
                        <nav class=\"navbar navbar-default menu\">
                            <div class=\"container\">
                                <ul class=\"nav navbar-nav\">
                                    <li id=\"\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("joueur_accueil_persos");
        echo "\">PERSONNAGES</a></li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">ITEMS</a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"\">Inventaire</a></li>
                                            <li><a href=\"\">Boutique</a></li>
                                        </ul>
                                    </li>
                                    <li id=\"\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("joueur_quetes");
        echo "\">QUETES</a></li>
                                    <li id=\"\"><a href=\"\">COMBATS</a></li>
                                    <li id=\"\"><a href=\"\">CLASSEMENTS</a></li>
                                    <li id=\"\"><a href=\"\">GEMMES</a></li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"\">Profil</a></li>
                                            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_logout");
        echo "\">Deconnexion</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div> 
                </div>
            </header>

            <div class=\"container corps\">
                ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "            </div>

        </div>
    </body>
</html>



";
        
        $__internal_8e004ab833bd1a58a7d87457946436447bebff07d8de6dfcd3ba10917e7d1d81->leave($__internal_8e004ab833bd1a58a7d87457946436447bebff07d8de6dfcd3ba10917e7d1d81_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_b84f02dbde41a3cd3f91e221b8b8b85bad915c14bde336867e34382d3f607b6e = $this->env->getExtension("native_profiler");
        $__internal_b84f02dbde41a3cd3f91e221b8b8b85bad915c14bde336867e34382d3f607b6e->enter($__internal_b84f02dbde41a3cd3f91e221b8b8b85bad915c14bde336867e34382d3f607b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "                ";
        
        $__internal_b84f02dbde41a3cd3f91e221b8b8b85bad915c14bde336867e34382d3f607b6e->leave($__internal_b84f02dbde41a3cd3f91e221b8b8b85bad915c14bde336867e34382d3f607b6e_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Joueur/Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 53,  117 => 52,  102 => 54,  100 => 52,  86 => 41,  80 => 38,  72 => 33,  61 => 25,  44 => 11,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="icon" href="{{ asset('bundles/notaire/images/favicon.ico') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/arenafight/style/style.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/arenafight/style/bootstrap.min.css') }}">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>*/
/*         <script src="{{ asset('bundles/arenafight/js/bootstrap.min.js') }}"></script>*/
/*         <title>Titre de la page</title>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/* */
/*             <header>*/
/*                 <div class="container banniere">*/
/*                 </div>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <nav class="navbar navbar-default menu">*/
/*                             <div class="container">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li id=""><a href="{{ url('joueur_accueil_persos') }}">PERSONNAGES</a></li>*/
/*                                     <li class="dropdown">*/
/*                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ITEMS</a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li><a href="">Inventaire</a></li>*/
/*                                             <li><a href="">Boutique</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li id=""><a href="{{ url('joueur_quetes') }}">QUETES</a></li>*/
/*                                     <li id=""><a href="">COMBATS</a></li>*/
/*                                     <li id=""><a href="">CLASSEMENTS</a></li>*/
/*                                     <li id=""><a href="">GEMMES</a></li>*/
/*                                     <li class="dropdown">*/
/*                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ app.user }}</a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li><a href="">Profil</a></li>*/
/*                                             <li><a href="{{ url('fos_user_security_logout') }}">Deconnexion</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </nav>*/
/*                     </div> */
/*                 </div>*/
/*             </header>*/
/* */
/*             <div class="container corps">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/* */
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
