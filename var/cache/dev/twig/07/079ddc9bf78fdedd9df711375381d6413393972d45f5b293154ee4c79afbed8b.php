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
        $__internal_c8b16302c5441fbe6efbd4ec60a808cb0dc7a004b7feaa77deb1390539decf15 = $this->env->getExtension("native_profiler");
        $__internal_c8b16302c5441fbe6efbd4ec60a808cb0dc7a004b7feaa77deb1390539decf15->enter($__internal_c8b16302c5441fbe6efbd4ec60a808cb0dc7a004b7feaa77deb1390539decf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Personnages_Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b16302c5441fbe6efbd4ec60a808cb0dc7a004b7feaa77deb1390539decf15->leave($__internal_c8b16302c5441fbe6efbd4ec60a808cb0dc7a004b7feaa77deb1390539decf15_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1ee2b02d87831f824dad470e1de5c70cb5b9272a61c82ec68b643ee8f5cf5bf = $this->env->getExtension("native_profiler");
        $__internal_b1ee2b02d87831f824dad470e1de5c70cb5b9272a61c82ec68b643ee8f5cf5bf->enter($__internal_b1ee2b02d87831f824dad470e1de5c70cb5b9272a61c82ec68b643ee8f5cf5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/arenafight/paginJs/jquery.twbsPagination.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b1ee2b02d87831f824dad470e1de5c70cb5b9272a61c82ec68b643ee8f5cf5bf->leave($__internal_b1ee2b02d87831f824dad470e1de5c70cb5b9272a61c82ec68b643ee8f5cf5bf_prof);

    }

    // line 5
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_16710a291f9d4ae40cc2cee88db17b47c24e9147e623b6d692b6daa85a604f61 = $this->env->getExtension("native_profiler");
        $__internal_16710a291f9d4ae40cc2cee88db17b47c24e9147e623b6d692b6daa85a604f61->enter($__internal_16710a291f9d4ae40cc2cee88db17b47c24e9147e623b6d692b6daa85a604f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persos"]) ? $context["persos"] : $this->getContext($context, "persos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 7
            echo "        <div id=\"perso-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"hidden infos-perso\">
            <h2>Nom:<span id=\"nom-perso\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getNom", array(), "method"), "html", null, true);
            echo "</span></h2><br/>
            <p>
                Race: <span id=\"race-perso\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["perso"], "getRace", array()), "getNom", array(), "method"), "html", null, true);
            echo "</span><br/>
                Vie: <span id=\"vie-perso\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getVie", array(), "method"), "html", null, true);
            echo "</span><br/>
                Attaque: <span id=\"attaque-perso\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "getAttaque", array(), "method"), "html", null, true);
            echo "</span><br/>
            </p>
            <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/arenafight/images/images-persos/" . $this->getAttribute($context["perso"], "getFichierimage", array(), "method"))), "html", null, true);
            echo "\" style=\"width:60px; height:80px;\">
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    <ul id=\"pagination-demo\" class=\"pagination-sm\">
    </ul>
    <script>
        \$(document).ready(function () {
        if (";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["persos"]) ? $context["persos"] : $this->getContext($context, "persos"))), "html", null, true);
        echo " > 0){
        \$('#pagination-demo').twbsPagination({
        totalPages:";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["persos"]) ? $context["persos"] : $this->getContext($context, "persos"))), "html", null, true);
        echo ",
                visiblePages: 1,
                onPageClick: function (event, page) {
                \$(\".infos-perso\").addClass(\"hidden\");
                \$('#perso-' + page).removeClass(\"hidden\");
                }
        });
        }
        });
    </script>

";
        
        $__internal_16710a291f9d4ae40cc2cee88db17b47c24e9147e623b6d692b6daa85a604f61->leave($__internal_16710a291f9d4ae40cc2cee88db17b47c24e9147e623b6d692b6daa85a604f61_prof);

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
        return array (  126 => 23,  121 => 21,  115 => 17,  98 => 14,  93 => 12,  89 => 11,  85 => 10,  80 => 8,  75 => 7,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig" %}*/
/* {% block head %}*/
/*     <script src="{{ asset('bundles/arenafight/paginJs/jquery.twbsPagination.min.js') }}"></script>*/
/* {% endblock %}*/
/* {% block bodyPerso %}*/
/*     {% for perso in persos %}*/
/*         <div id="perso-{{ loop.index }}" class="hidden infos-perso">*/
/*             <h2>Nom:<span id="nom-perso">{{ perso.getNom() }}</span></h2><br/>*/
/*             <p>*/
/*                 Race: <span id="race-perso">{{ perso.getRace.getNom() }}</span><br/>*/
/*                 Vie: <span id="vie-perso">{{ perso.getVie() }}</span><br/>*/
/*                 Attaque: <span id="attaque-perso">{{ perso.getAttaque() }}</span><br/>*/
/*             </p>*/
/*             <img src="{{ asset('bundles/arenafight/images/images-persos/'~perso.getFichierimage()) }}" style="width:60px; height:80px;">*/
/*         </div>*/
/*     {% endfor %}*/
/*     <ul id="pagination-demo" class="pagination-sm">*/
/*     </ul>*/
/*     <script>*/
/*         $(document).ready(function () {*/
/*         if ({{ persos|length }} > 0){*/
/*         $('#pagination-demo').twbsPagination({*/
/*         totalPages:{{ persos|length }},*/
/*                 visiblePages: 1,*/
/*                 onPageClick: function (event, page) {*/
/*                 $(".infos-perso").addClass("hidden");*/
/*                 $('#perso-' + page).removeClass("hidden");*/
/*                 }*/
/*         });*/
/*         }*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
