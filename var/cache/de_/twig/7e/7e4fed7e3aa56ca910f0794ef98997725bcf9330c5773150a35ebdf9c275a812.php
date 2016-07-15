<?php

/* ArenaFightBundle::Personnages.html.twig */
class __TwigTemplate_00f30aeb6f7d83db94fcf1bad918bf615e6c6e7757958324bd88ffea261a4d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "ArenaFightBundle::Personnages.html.twig", 1);
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
        $__internal_9e708ba114d4fca161aaf44edaa90903a913360727e8f904719bfbb4b21b1f00 = $this->env->getExtension("native_profiler");
        $__internal_9e708ba114d4fca161aaf44edaa90903a913360727e8f904719bfbb4b21b1f00->enter($__internal_9e708ba114d4fca161aaf44edaa90903a913360727e8f904719bfbb4b21b1f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Personnages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e708ba114d4fca161aaf44edaa90903a913360727e8f904719bfbb4b21b1f00->leave($__internal_9e708ba114d4fca161aaf44edaa90903a913360727e8f904719bfbb4b21b1f00_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_80c63bfb21b7fdcfc2e07e2f67eb4eedbdb09d69867648a302c0c02d15877c1f = $this->env->getExtension("native_profiler");
        $__internal_80c63bfb21b7fdcfc2e07e2f67eb4eedbdb09d69867648a302c0c02d15877c1f->enter($__internal_80c63bfb21b7fdcfc2e07e2f67eb4eedbdb09d69867648a302c0c02d15877c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des personnages du joueur
";
        
        $__internal_80c63bfb21b7fdcfc2e07e2f67eb4eedbdb09d69867648a302c0c02d15877c1f->leave($__internal_80c63bfb21b7fdcfc2e07e2f67eb4eedbdb09d69867648a302c0c02d15877c1f_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle::Personnages.html.twig";
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
