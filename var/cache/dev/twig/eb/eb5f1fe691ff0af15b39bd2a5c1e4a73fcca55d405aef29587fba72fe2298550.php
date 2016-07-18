<?php

/* ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig */
class __TwigTemplate_f4a647b16cadca657b258bf0e0e8f50339bf9e80bc7ec3716179f09606bc4311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout.html.twig", "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig", 1);
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
        $__internal_fff60b7d5bc820d493acbbc44b3e1f9dc822b43942ea8581e74c929e31da43c3 = $this->env->getExtension("native_profiler");
        $__internal_fff60b7d5bc820d493acbbc44b3e1f9dc822b43942ea8581e74c929e31da43c3->enter($__internal_fff60b7d5bc820d493acbbc44b3e1f9dc822b43942ea8581e74c929e31da43c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fff60b7d5bc820d493acbbc44b3e1f9dc822b43942ea8581e74c929e31da43c3->leave($__internal_fff60b7d5bc820d493acbbc44b3e1f9dc822b43942ea8581e74c929e31da43c3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bd1fe197d9a614b2bafa0c20cbc0428fedd9050a4b243bc89325e27df61195d = $this->env->getExtension("native_profiler");
        $__internal_9bd1fe197d9a614b2bafa0c20cbc0428fedd9050a4b243bc89325e27df61195d->enter($__internal_9bd1fe197d9a614b2bafa0c20cbc0428fedd9050a4b243bc89325e27df61195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\" col-md-3 menu-personnage\">
            <ul>
                <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("joueur_vue_supprimer_perso");
        echo "\">Supprimer un perso</a></li>
                <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("joueur_equiper_perso");
        echo "\">Equiper ce perso</a></li>
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
        
        $__internal_9bd1fe197d9a614b2bafa0c20cbc0428fedd9050a4b243bc89325e27df61195d->leave($__internal_9bd1fe197d9a614b2bafa0c20cbc0428fedd9050a4b243bc89325e27df61195d_prof);

    }

    // line 13
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_063e958d3790c30df39135ab11bdf89374001b1968cde015ae9452ceb05e1cb5 = $this->env->getExtension("native_profiler");
        $__internal_063e958d3790c30df39135ab11bdf89374001b1968cde015ae9452ceb05e1cb5->enter($__internal_063e958d3790c30df39135ab11bdf89374001b1968cde015ae9452ceb05e1cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 14
        echo "            ";
        
        $__internal_063e958d3790c30df39135ab11bdf89374001b1968cde015ae9452ceb05e1cb5->leave($__internal_063e958d3790c30df39135ab11bdf89374001b1968cde015ae9452ceb05e1cb5_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  72 => 13,  64 => 15,  62 => 13,  55 => 9,  50 => 7,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout.html.twig" %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class=" col-md-3 menu-personnage">*/
/*             <ul>*/
/*                 <li><a href="{{ url('joueur_vue_supprimer_perso') }}">Supprimer un perso</a></li>*/
/*                 <li><a href="{{ url('joueur_equiper_perso') }}">Equiper ce perso</a></li>*/
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
