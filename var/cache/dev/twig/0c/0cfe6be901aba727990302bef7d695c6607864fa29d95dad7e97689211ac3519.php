<?php

/* @ArenaFight/Joueur/Layout_Page_Personnages.html.twig */
class __TwigTemplate_9b87894029934c5a6342f29a37073b72cdc8902fc6c358c868d94afe461b5e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout.html.twig", "@ArenaFight/Joueur/Layout_Page_Personnages.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bodyPerso' => array($this, 'block_bodyPerso'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Joueur:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ba7626b4a68a971268fbdbb26a1662c7ff915543343a02d0b5b8a4adfeb44ed = $this->env->getExtension("native_profiler");
        $__internal_9ba7626b4a68a971268fbdbb26a1662c7ff915543343a02d0b5b8a4adfeb44ed->enter($__internal_9ba7626b4a68a971268fbdbb26a1662c7ff915543343a02d0b5b8a4adfeb44ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Joueur/Layout_Page_Personnages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ba7626b4a68a971268fbdbb26a1662c7ff915543343a02d0b5b8a4adfeb44ed->leave($__internal_9ba7626b4a68a971268fbdbb26a1662c7ff915543343a02d0b5b8a4adfeb44ed_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c38ba64320b100c7975392486b9f8fc07798973b2079bdde806f39728e232a29 = $this->env->getExtension("native_profiler");
        $__internal_c38ba64320b100c7975392486b9f8fc07798973b2079bdde806f39728e232a29->enter($__internal_c38ba64320b100c7975392486b9f8fc07798973b2079bdde806f39728e232a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\" col-md-3 menu-personnage\">
            <ul>
                <li><a href=\"\">Supprimer ce perso</a></li>
                <li><a href=\"\">Equiper ce perso</a></li>
                <li><a href=\"\">Renommer ce perso</a></li>
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("joueur_ajouter_perso");
        echo "\">Ajouter un perso</a></li>
            </ul>
        </div>
        <div class=\"col-md-9\">
            ";
        // line 13
        $this->displayBlock('bodyPerso', $context, $blocks);
        // line 15
        echo "        </div>
    ";
        
        $__internal_c38ba64320b100c7975392486b9f8fc07798973b2079bdde806f39728e232a29->leave($__internal_c38ba64320b100c7975392486b9f8fc07798973b2079bdde806f39728e232a29_prof);

    }

    // line 13
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_b3ae3d3ccb6b1e9f3379ba6dcfc1ab0fef4139077bfd7a3a09a79d9435163ccd = $this->env->getExtension("native_profiler");
        $__internal_b3ae3d3ccb6b1e9f3379ba6dcfc1ab0fef4139077bfd7a3a09a79d9435163ccd->enter($__internal_b3ae3d3ccb6b1e9f3379ba6dcfc1ab0fef4139077bfd7a3a09a79d9435163ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 14
        echo "            ";
        
        $__internal_b3ae3d3ccb6b1e9f3379ba6dcfc1ab0fef4139077bfd7a3a09a79d9435163ccd->leave($__internal_b3ae3d3ccb6b1e9f3379ba6dcfc1ab0fef4139077bfd7a3a09a79d9435163ccd_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Joueur/Layout_Page_Personnages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  66 => 13,  58 => 15,  56 => 13,  49 => 9,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout.html.twig" %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class=" col-md-3 menu-personnage">*/
/*             <ul>*/
/*                 <li><a href="">Supprimer ce perso</a></li>*/
/*                 <li><a href="">Equiper ce perso</a></li>*/
/*                 <li><a href="">Renommer ce perso</a></li>*/
/*                 <li><a href="{{ url('joueur_ajouter_perso') }}">Ajouter un perso</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-md-9">*/
/*             {% block bodyPerso %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     {% endblock %}*/
/* */
