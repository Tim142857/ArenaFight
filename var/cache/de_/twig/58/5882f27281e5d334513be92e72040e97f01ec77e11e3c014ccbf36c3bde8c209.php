<?php

/* @ArenaFight/Combat.html.twig */
class __TwigTemplate_1fee46053d8c8ecaa52cfc28e34436993c656be6a80e90b8fb50176e52de02e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "@ArenaFight/Combat.html.twig", 1);
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
        $__internal_882447d2976bdb865de8fcec599f1ba780c6a4de28dce418047e2ede22e68d21 = $this->env->getExtension("native_profiler");
        $__internal_882447d2976bdb865de8fcec599f1ba780c6a4de28dce418047e2ede22e68d21->enter($__internal_882447d2976bdb865de8fcec599f1ba780c6a4de28dce418047e2ede22e68d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Combat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882447d2976bdb865de8fcec599f1ba780c6a4de28dce418047e2ede22e68d21->leave($__internal_882447d2976bdb865de8fcec599f1ba780c6a4de28dce418047e2ede22e68d21_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_71f96e2bd3f6e786ef6ea44f6ba44e1fae32bd1e9d391f87307a1034ae404364 = $this->env->getExtension("native_profiler");
        $__internal_71f96e2bd3f6e786ef6ea44f6ba44e1fae32bd1e9d391f87307a1034ae404364->enter($__internal_71f96e2bd3f6e786ef6ea44f6ba44e1fae32bd1e9d391f87307a1034ae404364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des combats
";
        
        $__internal_71f96e2bd3f6e786ef6ea44f6ba44e1fae32bd1e9d391f87307a1034ae404364->leave($__internal_71f96e2bd3f6e786ef6ea44f6ba44e1fae32bd1e9d391f87307a1034ae404364_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Combat.html.twig";
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
/*     Page des combats*/
/* {% endblock %}*/
/* */
