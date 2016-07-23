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
        $__internal_29b491d8013cd69264e142e342c8a982ba66bdf8c877c161119178ec730d9614 = $this->env->getExtension("native_profiler");
        $__internal_29b491d8013cd69264e142e342c8a982ba66bdf8c877c161119178ec730d9614->enter($__internal_29b491d8013cd69264e142e342c8a982ba66bdf8c877c161119178ec730d9614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b491d8013cd69264e142e342c8a982ba66bdf8c877c161119178ec730d9614->leave($__internal_29b491d8013cd69264e142e342c8a982ba66bdf8c877c161119178ec730d9614_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_421090e97dda98bccaf785b498ab58505ec581bd27fbe13d44485fb5723943d5 = $this->env->getExtension("native_profiler");
        $__internal_421090e97dda98bccaf785b498ab58505ec581bd27fbe13d44485fb5723943d5->enter($__internal_421090e97dda98bccaf785b498ab58505ec581bd27fbe13d44485fb5723943d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\" col-md-2 menu-personnage\">
            <ul>
                <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("joueur_accueil_persos");
        echo "\">Mes persos</a></li>
                <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("joueur_vue_supprimer_perso");
        echo "\">Supprimer un perso</a></li>
                <li><a href=\"\">Renommer un perso</a></li>
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("joueur_ajouter_perso");
        echo "\">Ajouter un perso</a></li>
            </ul>
        </div>
        <div class=\"col-md-10\">
            ";
        // line 13
        $this->displayBlock('bodyPerso', $context, $blocks);
        // line 15
        echo "        </div>
    </div>
";
        
        $__internal_421090e97dda98bccaf785b498ab58505ec581bd27fbe13d44485fb5723943d5->leave($__internal_421090e97dda98bccaf785b498ab58505ec581bd27fbe13d44485fb5723943d5_prof);

    }

    // line 13
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_8f67d7e83e24b053b997fb85a451086b709d150097503ad3dc7e6968aa5dc752 = $this->env->getExtension("native_profiler");
        $__internal_8f67d7e83e24b053b997fb85a451086b709d150097503ad3dc7e6968aa5dc752->enter($__internal_8f67d7e83e24b053b997fb85a451086b709d150097503ad3dc7e6968aa5dc752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 14
        echo "            ";
        
        $__internal_8f67d7e83e24b053b997fb85a451086b709d150097503ad3dc7e6968aa5dc752->leave($__internal_8f67d7e83e24b053b997fb85a451086b709d150097503ad3dc7e6968aa5dc752_prof);

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
        return array (  79 => 14,  73 => 13,  64 => 15,  62 => 13,  55 => 9,  50 => 7,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout.html.twig" %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class=" col-md-2 menu-personnage">*/
/*             <ul>*/
/*                 <li><a href="{{ url('joueur_accueil_persos') }}">Mes persos</a></li>*/
/*                 <li><a href="{{ url('joueur_vue_supprimer_perso') }}">Supprimer un perso</a></li>*/
/*                 <li><a href="">Renommer un perso</a></li>*/
/*                 <li><a href="{{ url('joueur_ajouter_perso') }}">Ajouter un perso</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-md-10">*/
/*             {% block bodyPerso %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
