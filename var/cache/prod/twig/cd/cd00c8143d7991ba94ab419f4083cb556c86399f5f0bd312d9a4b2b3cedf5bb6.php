<?php

/* ArenaFightBundle::Layout.html.twig */
class __TwigTemplate_a27df7ae477ec756827fb536771cce80a1277eeba020613dad7c6f908497ab3c extends Twig_Template
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
        <title>Tire page</title>
    </head>
    <body>
        <div class=\"container\">
            <header>
                <div class=\"container banniere\">
                </div>
                <div class=\"container\">
                    <nav class=\"navbar navbar-default menu\">
                        <div class=\"container\">
                            <ul class=\"nav navbar-nav\">
                                <li id=\"\"><a href=\"\">ACCUEIL</a></li>
                                <li id=\"\"><a href=\"\">PERSONNAGES</a></li>
                                <li id=\"\"><a href=\"\">INVENTAIRE</a></li>
                                <li id=\"\"><a href=\"\">QUETE</a></li>
                                <li id=\"\"><a href=\"\">COMBATS</a></li>
                                <li id=\"\"><a href=\"\">CLASSEMENTS</a></li>
                                <li id=\"\"><a href=\"\">BOUTIQUE</a></li>
                                <li id=\"\"><a href=\"\">SUPPORT</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>

            <div class=\"container corps\">
                ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "            </div>
        </div>
    </body>
</html>



";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "                ";
    }

    public function getTemplateName()
    {
        return "ArenaFightBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 39,  84 => 38,  73 => 40,  71 => 38,  41 => 11,  36 => 9,  32 => 8,  28 => 7,  20 => 1,);
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
/*         <title>Tire page</title>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             <header>*/
/*                 <div class="container banniere">*/
/*                 </div>*/
/*                 <div class="container">*/
/*                     <nav class="navbar navbar-default menu">*/
/*                         <div class="container">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 <li id=""><a href="">ACCUEIL</a></li>*/
/*                                 <li id=""><a href="">PERSONNAGES</a></li>*/
/*                                 <li id=""><a href="">INVENTAIRE</a></li>*/
/*                                 <li id=""><a href="">QUETE</a></li>*/
/*                                 <li id=""><a href="">COMBATS</a></li>*/
/*                                 <li id=""><a href="">CLASSEMENTS</a></li>*/
/*                                 <li id=""><a href="">BOUTIQUE</a></li>*/
/*                                 <li id=""><a href="">SUPPORT</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </nav>*/
/*                 </div>*/
/*             </header>*/
/* */
/*             <div class="container corps">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
