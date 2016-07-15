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
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <title>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <div class=\"container\">
            <header>
                <div class=\"container\">
                </div>

                <nav class=\"navbar navbar-default menuHorizontal\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-10 col-md-offset-2 col-xs-12\">
                                <ul class=\"nav navbar-nav\">
                                    <li id=\"\"><a href=\"\">ACCUEIL</a></li>
                                    <li id=\"\"><a href=\"\">PERSONNAGES</a></li>
                                    <li id=\"\"><a href=\"\">COMBATS</a></li>
                                    <li id=\"\"><a href=\"\">CLASSEMENTS</a></li>
                                    <li id=\"\"><a href=\"\">BOUTIQUE</a></li>
                                    <li id=\"\"><a href=\"\">SUPPORT</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </nav>
            </header>

            <div class=\"container\">
                ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </div>
        </div>
    </body>
</html>



";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
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
        return array (  91 => 40,  88 => 39,  77 => 41,  75 => 39,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  28 => 7,  20 => 1,);
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
/*         <script src="{{ asset('bundles/arenafight/js/bootstrap.min.js') }}"></script>*/
/*         <title>{{ title }}</title>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             <header>*/
/*                 <div class="container">*/
/*                 </div>*/
/* */
/*                 <nav class="navbar navbar-default menuHorizontal">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-md-10 col-md-offset-2 col-xs-12">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li id=""><a href="">ACCUEIL</a></li>*/
/*                                     <li id=""><a href="">PERSONNAGES</a></li>*/
/*                                     <li id=""><a href="">COMBATS</a></li>*/
/*                                     <li id=""><a href="">CLASSEMENTS</a></li>*/
/*                                     <li id=""><a href="">BOUTIQUE</a></li>*/
/*                                     <li id=""><a href="">SUPPORT</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/* */
/*             <div class="container">*/
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
