<?php

/* ArenaFightBundle::Accueil.html.twig */
class __TwigTemplate_a01a5e2c05eca37f502a8469ccfde1d5840363f7af309c2653ea7e91bb50cfc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "ArenaFightBundle::Accueil.html.twig", 1);
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
        $__internal_1346cc28c8f743bb1e73977bd714d259631ab845bf5edccc6c7a8a2f6b15f835 = $this->env->getExtension("native_profiler");
        $__internal_1346cc28c8f743bb1e73977bd714d259631ab845bf5edccc6c7a8a2f6b15f835->enter($__internal_1346cc28c8f743bb1e73977bd714d259631ab845bf5edccc6c7a8a2f6b15f835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1346cc28c8f743bb1e73977bd714d259631ab845bf5edccc6c7a8a2f6b15f835->leave($__internal_1346cc28c8f743bb1e73977bd714d259631ab845bf5edccc6c7a8a2f6b15f835_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ced13168ed9d86df1cc509682cba96fe384041aa690e2cfaccb3f622174738a = $this->env->getExtension("native_profiler");
        $__internal_9ced13168ed9d86df1cc509682cba96fe384041aa690e2cfaccb3f622174738a->enter($__internal_9ced13168ed9d86df1cc509682cba96fe384041aa690e2cfaccb3f622174738a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_9ced13168ed9d86df1cc509682cba96fe384041aa690e2cfaccb3f622174738a->leave($__internal_9ced13168ed9d86df1cc509682cba96fe384041aa690e2cfaccb3f622174738a_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle::Accueil.html.twig";
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
