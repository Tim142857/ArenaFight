<?php

/* @ArenaFight/Accueil.html.twig */
class __TwigTemplate_8e5a3c52801fb8947ce1d4f0d8e908a0b81827aa83d075d2468806d954a95253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "@ArenaFight/Accueil.html.twig", 1);
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
        $__internal_1293f8507e9d1ed4986dccea295c95faa1001b25f763fb650045b9cad3066428 = $this->env->getExtension("native_profiler");
        $__internal_1293f8507e9d1ed4986dccea295c95faa1001b25f763fb650045b9cad3066428->enter($__internal_1293f8507e9d1ed4986dccea295c95faa1001b25f763fb650045b9cad3066428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1293f8507e9d1ed4986dccea295c95faa1001b25f763fb650045b9cad3066428->leave($__internal_1293f8507e9d1ed4986dccea295c95faa1001b25f763fb650045b9cad3066428_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_14bec3bf36a5f12fdf74492743f6719d47b0aae1fe7986ef0413d20109baf735 = $this->env->getExtension("native_profiler");
        $__internal_14bec3bf36a5f12fdf74492743f6719d47b0aae1fe7986ef0413d20109baf735->enter($__internal_14bec3bf36a5f12fdf74492743f6719d47b0aae1fe7986ef0413d20109baf735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_14bec3bf36a5f12fdf74492743f6719d47b0aae1fe7986ef0413d20109baf735->leave($__internal_14bec3bf36a5f12fdf74492743f6719d47b0aae1fe7986ef0413d20109baf735_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Accueil.html.twig";
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
/* */
/* */
/* {% endblock %}*/
/* */
