<?php

/* ArenaFightBundle:Joueur:Personnages_Supprimer.html.twig */
class __TwigTemplate_cd162a833039211f0c0bac2a26fbc13ece5e75ce0b49a0518542525f22ccaee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig", "ArenaFightBundle:Joueur:Personnages_Supprimer.html.twig", 1);
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
        $__internal_64332072a8a77371f0b962beacada69d52ac894ac96a7fd5739d0a6369bc7819 = $this->env->getExtension("native_profiler");
        $__internal_64332072a8a77371f0b962beacada69d52ac894ac96a7fd5739d0a6369bc7819->enter($__internal_64332072a8a77371f0b962beacada69d52ac894ac96a7fd5739d0a6369bc7819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Personnages_Supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64332072a8a77371f0b962beacada69d52ac894ac96a7fd5739d0a6369bc7819->leave($__internal_64332072a8a77371f0b962beacada69d52ac894ac96a7fd5739d0a6369bc7819_prof);

    }

    // line 2
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_c6afbb9b53e80e45b75f2520298bcaa51eb11cb3a663ffc89e603f4772ea0684 = $this->env->getExtension("native_profiler");
        $__internal_c6afbb9b53e80e45b75f2520298bcaa51eb11cb3a663ffc89e603f4772ea0684->enter($__internal_c6afbb9b53e80e45b75f2520298bcaa51eb11cb3a663ffc89e603f4772ea0684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 3
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getUrl("joueur_supprimer_perso");
        echo "\" method=\"post\">
        <select name=\"idPerso\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persos"]) ? $context["persos"] : $this->getContext($context, "persos")));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 6
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getNom", array(), "method"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </select>
        <button type=\"submit\" class=\"btn btn-primary\">Supprimer</button>
    </form>
";
        
        $__internal_c6afbb9b53e80e45b75f2520298bcaa51eb11cb3a663ffc89e603f4772ea0684->leave($__internal_c6afbb9b53e80e45b75f2520298bcaa51eb11cb3a663ffc89e603f4772ea0684_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Personnages_Supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  50 => 6,  46 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig" %}*/
/* {% block bodyPerso %}*/
/*     <form action="{{ url('joueur_supprimer_perso') }}" method="post">*/
/*         <select name="idPerso">*/
/*             {% for perso in persos %}*/
/*                 <option value="{{ perso.getId() }}">{{ perso.getNom() }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         <button type="submit" class="btn btn-primary">Supprimer</button>*/
/*     </form>*/
/* {% endblock %}*/
/* */
