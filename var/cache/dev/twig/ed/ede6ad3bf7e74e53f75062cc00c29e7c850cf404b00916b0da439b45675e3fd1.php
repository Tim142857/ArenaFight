<?php

/* ArenaFightBundle:Visitor:LayoutVisitor.html.twig */
class __TwigTemplate_8a38a5e78d539d6b55ab6efee5684c07011885e5bdb075f820ac25522c045997 extends Twig_Template
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
        $__internal_4fdf84eea59310602e4d1ad0038966d2696032f17811ec3dda3bcfdd2ebdc8f7 = $this->env->getExtension("native_profiler");
        $__internal_4fdf84eea59310602e4d1ad0038966d2696032f17811ec3dda3bcfdd2ebdc8f7->enter($__internal_4fdf84eea59310602e4d1ad0038966d2696032f17811ec3dda3bcfdd2ebdc8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Visitor:LayoutVisitor.html.twig"));

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
                    <div class=\"row\">
                        <nav class=\"navbar navbar-default menu menu-visitor\">
                            <div class=\"container\">
                                <ul class=\"nav navbar-nav\">
                                    <li id=\"\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("accueil_visitor");
        echo "\">ACCUEIL</a></li>
                                    <li id=\"\"><a href=\"\">SCREENSHOTS</a></li>
                                    <li id=\"\"><a href=\"\">SUPPORT</a></li>
                                    <li id=\"\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_login");
        echo "\">SE CONNECTER</a></li>
                                    <li id=\"\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("fos_user_registration_register");
        echo "\">CREER UN COMPTE</a></li>
                                </ul>

                            </div>
                        </nav>
                    </div> 
                </div>
            </header>
        </div>

        <div class=\"container corps\">
            ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        </div>
    </body>
</html>



";
        
        $__internal_4fdf84eea59310602e4d1ad0038966d2696032f17811ec3dda3bcfdd2ebdc8f7->leave($__internal_4fdf84eea59310602e4d1ad0038966d2696032f17811ec3dda3bcfdd2ebdc8f7_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c975ad33c326cbbcbd346127f5e7eb8311a0c6902d7400165557c33c0ba8c2c = $this->env->getExtension("native_profiler");
        $__internal_0c975ad33c326cbbcbd346127f5e7eb8311a0c6902d7400165557c33c0ba8c2c->enter($__internal_0c975ad33c326cbbcbd346127f5e7eb8311a0c6902d7400165557c33c0ba8c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "            ";
        
        $__internal_0c975ad33c326cbbcbd346127f5e7eb8311a0c6902d7400165557c33c0ba8c2c->leave($__internal_0c975ad33c326cbbcbd346127f5e7eb8311a0c6902d7400165557c33c0ba8c2c_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Visitor:LayoutVisitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  100 => 40,  87 => 42,  85 => 40,  71 => 29,  67 => 28,  61 => 25,  44 => 11,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
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
/* */
/*             <header>*/
/*                 <div class="container banniere">*/
/*                 </div>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <nav class="navbar navbar-default menu menu-visitor">*/
/*                             <div class="container">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li id=""><a href="{{ url('accueil_visitor') }}">ACCUEIL</a></li>*/
/*                                     <li id=""><a href="">SCREENSHOTS</a></li>*/
/*                                     <li id=""><a href="">SUPPORT</a></li>*/
/*                                     <li id=""><a href="{{ url('fos_user_security_login') }}">SE CONNECTER</a></li>*/
/*                                     <li id=""><a href="{{ url('fos_user_registration_register') }}">CREER UN COMPTE</a></li>*/
/*                                 </ul>*/
/* */
/*                             </div>*/
/*                         </nav>*/
/*                     </div> */
/*                 </div>*/
/*             </header>*/
/*         </div>*/
/* */
/*         <div class="container corps">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
