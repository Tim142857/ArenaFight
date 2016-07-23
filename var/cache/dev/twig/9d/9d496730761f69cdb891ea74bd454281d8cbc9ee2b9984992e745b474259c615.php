<?php

/* ArenaFightBundle:Joueur:Personnages_Ajouter.html.twig */
class __TwigTemplate_a266813df2648ab42fededd2b458526248715ba377cfed8c92b57f1baedd1eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig", "ArenaFightBundle:Joueur:Personnages_Ajouter.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'bodyPerso' => array($this, 'block_bodyPerso'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9605f5a8beee8a63a4d13ca1f4f906adb3f71f9ef5e48c5224ab733c3ba715c = $this->env->getExtension("native_profiler");
        $__internal_c9605f5a8beee8a63a4d13ca1f4f906adb3f71f9ef5e48c5224ab733c3ba715c->enter($__internal_c9605f5a8beee8a63a4d13ca1f4f906adb3f71f9ef5e48c5224ab733c3ba715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Personnages_Ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9605f5a8beee8a63a4d13ca1f4f906adb3f71f9ef5e48c5224ab733c3ba715c->leave($__internal_c9605f5a8beee8a63a4d13ca1f4f906adb3f71f9ef5e48c5224ab733c3ba715c_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbc56e474f1afa0b49eb2b62f7df1daa8c2e2f089422381d6efa855f0af8b110 = $this->env->getExtension("native_profiler");
        $__internal_cbc56e474f1afa0b49eb2b62f7df1daa8c2e2f089422381d6efa855f0af8b110->enter($__internal_cbc56e474f1afa0b49eb2b62f7df1daa8c2e2f089422381d6efa855f0af8b110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/jqueryui/jquery-ui.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/jqueryui/jquery-ui.structure.min.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/jqueryui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cbc56e474f1afa0b49eb2b62f7df1daa8c2e2f089422381d6efa855f0af8b110->leave($__internal_cbc56e474f1afa0b49eb2b62f7df1daa8c2e2f089422381d6efa855f0af8b110_prof);

    }

    // line 7
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_d2d9312356af8d5a278a9def29ee5243813cdea8463680523caa851072abd5c7 = $this->env->getExtension("native_profiler");
        $__internal_d2d9312356af8d5a278a9def29ee5243813cdea8463680523caa851072abd5c7->enter($__internal_d2d9312356af8d5a278a9def29ee5243813cdea8463680523caa851072abd5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 8
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "


    <script>
        \$(document).ready(function () {
            \$('option').each(function () {
                \$(this).attr('data-class', \$(this).text());
            });

            \$(function () {
                \$.widget(\"custom.iconselectmenu\", \$.ui.selectmenu, {
                    _renderItem: function (ul, item) {
                        var li = \$(\"<li>\", {text: item.label});

                        if (item.disabled) {
                            li.addClass(\"ui-state-disabled\");
                        }

                        \$(\"<span>\", {
                            style: item.element.attr(\"data-style\"),
                            \"class\": \"ui-icon \" + item.element.attr(\"data-class\")
                        })
                                .appendTo(li);

                        return li.appendTo(ul);
                    }
                });
                \$(\"#add_perso_fichierImage\")
                        .iconselectmenu()
                        .iconselectmenu(\"menuWidget\")
                        .addClass(\"ui-menu-icons customicons\");
                \$('.ui-selectmenu-button.ui-widget.ui-state-default.ui-corner-all').width('100%');
            });

        });
    </script>
";
        
        $__internal_d2d9312356af8d5a278a9def29ee5243813cdea8463680523caa851072abd5c7->leave($__internal_d2d9312356af8d5a278a9def29ee5243813cdea8463680523caa851072abd5c7_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Personnages_Ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig" %}*/
/* {% block head %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/arenafight/jqueryui/jquery-ui.min.css') }}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/arenafight/jqueryui/jquery-ui.structure.min.css') }}" />*/
/*     <script type="text/javascript" src="{{ asset('bundles/arenafight/jqueryui/jquery-ui.min.js') }}"></script>*/
/* {% endblock %}*/
/* {% block bodyPerso %}*/
/*     {{ form(form) }}*/
/* */
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $('option').each(function () {*/
/*                 $(this).attr('data-class', $(this).text());*/
/*             });*/
/* */
/*             $(function () {*/
/*                 $.widget("custom.iconselectmenu", $.ui.selectmenu, {*/
/*                     _renderItem: function (ul, item) {*/
/*                         var li = $("<li>", {text: item.label});*/
/* */
/*                         if (item.disabled) {*/
/*                             li.addClass("ui-state-disabled");*/
/*                         }*/
/* */
/*                         $("<span>", {*/
/*                             style: item.element.attr("data-style"),*/
/*                             "class": "ui-icon " + item.element.attr("data-class")*/
/*                         })*/
/*                                 .appendTo(li);*/
/* */
/*                         return li.appendTo(ul);*/
/*                     }*/
/*                 });*/
/*                 $("#add_perso_fichierImage")*/
/*                         .iconselectmenu()*/
/*                         .iconselectmenu("menuWidget")*/
/*                         .addClass("ui-menu-icons customicons");*/
/*                 $('.ui-selectmenu-button.ui-widget.ui-state-default.ui-corner-all').width('100%');*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
