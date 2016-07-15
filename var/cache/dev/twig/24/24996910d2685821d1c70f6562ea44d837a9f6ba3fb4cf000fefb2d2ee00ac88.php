<?php

/* ArenaFightBundle::Layout.html.twig */
class __TwigTemplate_841b4ef287a3b156f8571e9a936c3b8a1250022adb893f9eed44fa895ba29b66 extends Twig_Template
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
        $__internal_4204fca25f21b4b373bccc514fb5357659943a717ed1b90610c9894a3524a4ea = $this->env->getExtension("native_profiler");
        $__internal_4204fca25f21b4b373bccc514fb5357659943a717ed1b90610c9894a3524a4ea->enter($__internal_4204fca25f21b4b373bccc514fb5357659943a717ed1b90610c9894a3524a4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Layout.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
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
        
        $__internal_4204fca25f21b4b373bccc514fb5357659943a717ed1b90610c9894a3524a4ea->leave($__internal_4204fca25f21b4b373bccc514fb5357659943a717ed1b90610c9894a3524a4ea_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f1b828e63b90020f76a857e83964683b5193922c457e26343b2b0ff0be209aa = $this->env->getExtension("native_profiler");
        $__internal_3f1b828e63b90020f76a857e83964683b5193922c457e26343b2b0ff0be209aa->enter($__internal_3f1b828e63b90020f76a857e83964683b5193922c457e26343b2b0ff0be209aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "                ";
        
        $__internal_3f1b828e63b90020f76a857e83964683b5193922c457e26343b2b0ff0be209aa->leave($__internal_3f1b828e63b90020f76a857e83964683b5193922c457e26343b2b0ff0be209aa_prof);

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
        return array (  100 => 40,  94 => 39,  80 => 41,  78 => 39,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
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
