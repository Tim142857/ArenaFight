<?php

/* ArenaFightBundle:Joueur:Personnages_Accueil.html.twig */
class __TwigTemplate_fe0d46a28bbd089219a5f5bb79d8f4961a6e015e36701350122cd59f85b76467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig", "ArenaFightBundle:Joueur:Personnages_Accueil.html.twig", 1);
        $this->blocks = array(
            'bodyPerso' => array($this, 'block_bodyPerso'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d2b99c23d18a134a16f57529200a9cc4157fa7be7838a718e4ba23c3d060c53 = $this->env->getExtension("native_profiler");
        $__internal_4d2b99c23d18a134a16f57529200a9cc4157fa7be7838a718e4ba23c3d060c53->enter($__internal_4d2b99c23d18a134a16f57529200a9cc4157fa7be7838a718e4ba23c3d060c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Personnages_Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d2b99c23d18a134a16f57529200a9cc4157fa7be7838a718e4ba23c3d060c53->leave($__internal_4d2b99c23d18a134a16f57529200a9cc4157fa7be7838a718e4ba23c3d060c53_prof);

    }

    // line 2
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_76601a71b17918f056150017b428b33137e055c95a9fd2e793193a3eaef13311 = $this->env->getExtension("native_profiler");
        $__internal_76601a71b17918f056150017b428b33137e055c95a9fd2e793193a3eaef13311->enter($__internal_76601a71b17918f056150017b428b33137e055c95a9fd2e793193a3eaef13311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persos"]) ? $context["persos"] : $this->getContext($context, "persos")));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 4
            echo "        <p>
        <h2>Nom: ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getNom", array(), "method"), "html", null, true);
            echo "</h2><br/>
        Race: ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["perso"], "getRace", array()), "getNom", array(), "method"), "html", null, true);
            echo "<br/>
        Vie: ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getVie", array(), "method"), "html", null, true);
            echo "<br/>
        Attaque: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getAttaque", array(), "method"), "html", null, true);
            echo "<br/>
        Equipements:
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["perso"], "getItems", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "            Nom item: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getNom", array(), "method"), "html", null, true);
                echo " 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_76601a71b17918f056150017b428b33137e055c95a9fd2e793193a3eaef13311->leave($__internal_76601a71b17918f056150017b428b33137e055c95a9fd2e793193a3eaef13311_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Personnages_Accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig" %}*/
/* {% block bodyPerso %}*/
/*     {% for perso in persos %}*/
/*         <p>*/
/*         <h2>Nom: {{ perso.getNom() }}</h2><br/>*/
/*         Race: {{ perso.getRace.getNom() }}<br/>*/
/*         Vie: {{ perso.getVie() }}<br/>*/
/*         Attaque: {{ perso.getAttaque() }}<br/>*/
/*         Equipements:*/
/*         {% for item in perso.getItems() %}*/
/*             Nom item: {{ item.getNom() }} */
/*         {% endfor %}*/
/*     </p>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* */
