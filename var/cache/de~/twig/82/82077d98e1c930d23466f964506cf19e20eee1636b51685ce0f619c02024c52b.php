<?php

/* ArenaFightBundle::Authentification.html.twig */
class __TwigTemplate_5c6cc6cf8302de64bb776ea6849a830af6a26646d788d58275b7a50c409815bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "ArenaFightBundle::Authentification.html.twig", 1);
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
        $__internal_ade996843f37eb0dc7313a61cb20f25620478cd985264e9b9ace1837a0add8ac = $this->env->getExtension("native_profiler");
        $__internal_ade996843f37eb0dc7313a61cb20f25620478cd985264e9b9ace1837a0add8ac->enter($__internal_ade996843f37eb0dc7313a61cb20f25620478cd985264e9b9ace1837a0add8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Authentification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade996843f37eb0dc7313a61cb20f25620478cd985264e9b9ace1837a0add8ac->leave($__internal_ade996843f37eb0dc7313a61cb20f25620478cd985264e9b9ace1837a0add8ac_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0230d5ceba125cb6ed0c71fe72c63af49825c7b9dee28a421aae09165c9cc7ea = $this->env->getExtension("native_profiler");
        $__internal_0230d5ceba125cb6ed0c71fe72c63af49825c7b9dee28a421aae09165c9cc7ea->enter($__internal_0230d5ceba125cb6ed0c71fe72c63af49825c7b9dee28a421aae09165c9cc7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   

";
        
        $__internal_0230d5ceba125cb6ed0c71fe72c63af49825c7b9dee28a421aae09165c9cc7ea->leave($__internal_0230d5ceba125cb6ed0c71fe72c63af49825c7b9dee28a421aae09165c9cc7ea_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle::Authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle::Layout.html.twig" %}*/
/* {% block body %}   */
/* */
/* {% endblock %}*/
/* */
