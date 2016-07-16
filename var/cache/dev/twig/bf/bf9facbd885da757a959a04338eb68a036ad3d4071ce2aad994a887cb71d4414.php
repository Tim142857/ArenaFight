<?php

/* @ArenaFight/Joueur/Quetes.html.twig */
class __TwigTemplate_522c3c8a0f789c874ed87a986b9a458d972a3b6d734d4c3cd0c19af88219be97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout.html.twig", "@ArenaFight/Joueur/Quetes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Joueur:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40b578847862be3e39dff0f182ef2cdc72222bf811b8e69eef66228e969c4062 = $this->env->getExtension("native_profiler");
        $__internal_40b578847862be3e39dff0f182ef2cdc72222bf811b8e69eef66228e969c4062->enter($__internal_40b578847862be3e39dff0f182ef2cdc72222bf811b8e69eef66228e969c4062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Joueur/Quetes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b578847862be3e39dff0f182ef2cdc72222bf811b8e69eef66228e969c4062->leave($__internal_40b578847862be3e39dff0f182ef2cdc72222bf811b8e69eef66228e969c4062_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fe5dc65fbb0296311f315b1a11123d3f5c14383af78de3cde8d41c3007d8155 = $this->env->getExtension("native_profiler");
        $__internal_2fe5dc65fbb0296311f315b1a11123d3f5c14383af78de3cde8d41c3007d8155->enter($__internal_2fe5dc65fbb0296311f315b1a11123d3f5c14383af78de3cde8d41c3007d8155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-12\">
        ";
        // line 5
        if (array_key_exists("messageUtilisateur", $context)) {
            // line 6
            echo "            <div class=\"alert alert-success\">
                ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["messageUtilisateur"]) ? $context["messageUtilisateur"] : $this->getContext($context, "messageUtilisateur")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quetes"]) ? $context["quetes"] : $this->getContext($context, "quetes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quete"]) {
            // line 12
            echo "            <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("joueur_envoi_quete");
            echo "\" method=\"post\">
                <input type=\"hidden\" name=\"idQuete\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["quete"], "getId", array(), "method"), "html", null, true);
            echo "\">
                <h2>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["quete"], "getNom", array(), "method"), "html", null, true);
            echo "</h2>
                <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["quete"], "description", array()), "html", null, true);
            echo "</p>
                <ul>
                    <li>argent : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["quete"], "getArgent", array(), "method"), "html", null, true);
            echo "</li>
                    <li>experience : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["quete"], "getExperience", array(), "method"), "html", null, true);
            echo "</li>
                    <li>duree : ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quete"], "getDuree", array(), "method"), "H:i"), "html", null, true);
            echo "</li>
                </ul>
                ";
            // line 21
            if ((twig_length_filter($this->env, (isset($context["persos"]) ? $context["persos"] : $this->getContext($context, "persos"))) > 0)) {
                // line 22
                echo "                    <fieldset class=\"form-group\">
                        <select name=\"idPerso\" class=\"form-control\">               
                            ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["persos"]) ? $context["persos"] : $this->getContext($context, "persos")));
                foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
                    // line 25
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getId", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getNom", array(), "method"), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                        </select>
                    </fieldset>
                    <button type=\"submit\" class=\"btn btn-primary\">Envoyer en quête</button>
                ";
            } else {
                // line 31
                echo "                    <div class=\"alert alert-danger\">
                        Aucun personnage disponible
                    </div>
                ";
            }
            // line 35
            echo "            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
";
        
        $__internal_2fe5dc65fbb0296311f315b1a11123d3f5c14383af78de3cde8d41c3007d8155->leave($__internal_2fe5dc65fbb0296311f315b1a11123d3f5c14383af78de3cde8d41c3007d8155_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Joueur/Quetes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  125 => 35,  119 => 31,  113 => 27,  102 => 25,  98 => 24,  94 => 22,  92 => 21,  87 => 19,  83 => 18,  79 => 17,  74 => 15,  70 => 14,  66 => 13,  61 => 12,  57 => 11,  54 => 10,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="col-md-12">*/
/*         {% if messageUtilisateur is defined %}*/
/*             <div class="alert alert-success">*/
/*                 {{ messageUtilisateur }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% for quete in quetes %}*/
/*             <form action="{{ url('joueur_envoi_quete') }}" method="post">*/
/*                 <input type="hidden" name="idQuete" value="{{ quete.getId() }}">*/
/*                 <h2>{{ quete.getNom() }}</h2>*/
/*                 <p>{{ quete.description }}</p>*/
/*                 <ul>*/
/*                     <li>argent : {{ quete.getArgent() }}</li>*/
/*                     <li>experience : {{ quete.getExperience() }}</li>*/
/*                     <li>duree : {{ quete.getDuree()|date("H:i") }}</li>*/
/*                 </ul>*/
/*                 {% if persos|length>0 %}*/
/*                     <fieldset class="form-group">*/
/*                         <select name="idPerso" class="form-control">               */
/*                             {% for perso in persos %}*/
/*                                 <option value="{{ perso.getId() }}">{{ perso.getNom() }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </fieldset>*/
/*                     <button type="submit" class="btn btn-primary">Envoyer en quête</button>*/
/*                 {% else %}*/
/*                     <div class="alert alert-danger">*/
/*                         Aucun personnage disponible*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </form>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
