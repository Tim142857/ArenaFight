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
        $__internal_c19c9c0627e7f0ca5817b0a30a8a2adaca385acb058290ddc5f26a6a4806821e = $this->env->getExtension("native_profiler");
        $__internal_c19c9c0627e7f0ca5817b0a30a8a2adaca385acb058290ddc5f26a6a4806821e->enter($__internal_c19c9c0627e7f0ca5817b0a30a8a2adaca385acb058290ddc5f26a6a4806821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c19c9c0627e7f0ca5817b0a30a8a2adaca385acb058290ddc5f26a6a4806821e->leave($__internal_c19c9c0627e7f0ca5817b0a30a8a2adaca385acb058290ddc5f26a6a4806821e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3f7cf878a604342f71e6c0583ce3e825f15040d2a648fccdbe5bf3e7bc7904d = $this->env->getExtension("native_profiler");
        $__internal_c3f7cf878a604342f71e6c0583ce3e825f15040d2a648fccdbe5bf3e7bc7904d->enter($__internal_c3f7cf878a604342f71e6c0583ce3e825f15040d2a648fccdbe5bf3e7bc7904d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c3f7cf878a604342f71e6c0583ce3e825f15040d2a648fccdbe5bf3e7bc7904d->leave($__internal_c3f7cf878a604342f71e6c0583ce3e825f15040d2a648fccdbe5bf3e7bc7904d_prof);

    }

    // line 13
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_e8a1cfcbb19816c599bba6aaa96f86c38ee68ec6af58add48cdd91829fd8f5c6 = $this->env->getExtension("native_profiler");
        $__internal_e8a1cfcbb19816c599bba6aaa96f86c38ee68ec6af58add48cdd91829fd8f5c6->enter($__internal_e8a1cfcbb19816c599bba6aaa96f86c38ee68ec6af58add48cdd91829fd8f5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 14
        echo "            ";
        
        $__internal_e8a1cfcbb19816c599bba6aaa96f86c38ee68ec6af58add48cdd91829fd8f5c6->leave($__internal_e8a1cfcbb19816c599bba6aaa96f86c38ee68ec6af58add48cdd91829fd8f5c6_prof);

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
