<?php

/* ArenaFightBundle:Joueur:Accueil.html.twig */
class __TwigTemplate_d6c667f2c41b91c8be6ada11ab7b91b3b22396c24043cc8a088ae392fa87fd4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout.html.twig", "ArenaFightBundle:Joueur:Accueil.html.twig", 1);
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
        $__internal_5c5f1933f8d6ab179fec3b08bd15ae5fe468c9274fc73a0e97f7eeb12d968ed4 = $this->env->getExtension("native_profiler");
        $__internal_5c5f1933f8d6ab179fec3b08bd15ae5fe468c9274fc73a0e97f7eeb12d968ed4->enter($__internal_5c5f1933f8d6ab179fec3b08bd15ae5fe468c9274fc73a0e97f7eeb12d968ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c5f1933f8d6ab179fec3b08bd15ae5fe468c9274fc73a0e97f7eeb12d968ed4->leave($__internal_5c5f1933f8d6ab179fec3b08bd15ae5fe468c9274fc73a0e97f7eeb12d968ed4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9abfedc993abf8878378b7847ec53b3e104a744f42280ab9049086bd23a519f3 = $this->env->getExtension("native_profiler");
        $__internal_9abfedc993abf8878378b7847ec53b3e104a744f42280ab9049086bd23a519f3->enter($__internal_9abfedc993abf8878378b7847ec53b3e104a744f42280ab9049086bd23a519f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_9abfedc993abf8878378b7847ec53b3e104a744f42280ab9049086bd23a519f3->leave($__internal_9abfedc993abf8878378b7847ec53b3e104a744f42280ab9049086bd23a519f3_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Accueil.html.twig";
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
/* {% extends "ArenaFightBundle:Joueur:Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
/* */
