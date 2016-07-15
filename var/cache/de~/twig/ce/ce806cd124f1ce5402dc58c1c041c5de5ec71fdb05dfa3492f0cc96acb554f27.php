<?php

/* @ArenaFight/Personnages.html.twig */
class __TwigTemplate_98b311d01c612316cb0d0d3534a4bac1df273b0f3da4de0e22749544821227cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "@ArenaFight/Personnages.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f058042220629fb67b56019155c3dfaff39b23b7798dbf9620e62903d1cdc11e = $this->env->getExtension("native_profiler");
        $__internal_f058042220629fb67b56019155c3dfaff39b23b7798dbf9620e62903d1cdc11e->enter($__internal_f058042220629fb67b56019155c3dfaff39b23b7798dbf9620e62903d1cdc11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Personnages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f058042220629fb67b56019155c3dfaff39b23b7798dbf9620e62903d1cdc11e->leave($__internal_f058042220629fb67b56019155c3dfaff39b23b7798dbf9620e62903d1cdc11e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2bef88894643833ceba4484926dea9be35d0f9f7b0ae3f9a1eafa05fcb0f5a9 = $this->env->getExtension("native_profiler");
        $__internal_c2bef88894643833ceba4484926dea9be35d0f9f7b0ae3f9a1eafa05fcb0f5a9->enter($__internal_c2bef88894643833ceba4484926dea9be35d0f9f7b0ae3f9a1eafa05fcb0f5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des personnages du joueur
";
        
        $__internal_c2bef88894643833ceba4484926dea9be35d0f9f7b0ae3f9a1eafa05fcb0f5a9->leave($__internal_c2bef88894643833ceba4484926dea9be35d0f9f7b0ae3f9a1eafa05fcb0f5a9_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Personnages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/*     Page des personnages du joueur*/
/* {% endblock %}*/
/* */
