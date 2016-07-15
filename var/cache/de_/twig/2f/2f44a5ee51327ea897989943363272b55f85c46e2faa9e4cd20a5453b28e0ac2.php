<?php

/* ArenaFightBundle::Combat.html.twig */
class __TwigTemplate_4bf8dc715fc7826da538330a1c068e589430ad76793e3bcd3f8ceb1dbc7ade41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "ArenaFightBundle::Combat.html.twig", 1);
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
        $__internal_d9a58e9136182ad405b428359629d571f9937701511f4d7948a6a307b4726506 = $this->env->getExtension("native_profiler");
        $__internal_d9a58e9136182ad405b428359629d571f9937701511f4d7948a6a307b4726506->enter($__internal_d9a58e9136182ad405b428359629d571f9937701511f4d7948a6a307b4726506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Combat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a58e9136182ad405b428359629d571f9937701511f4d7948a6a307b4726506->leave($__internal_d9a58e9136182ad405b428359629d571f9937701511f4d7948a6a307b4726506_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fc6e740200416aedba894fa4a9e9bd4a3bd43a8b6a28b3a3d42a24fd5ff69cb = $this->env->getExtension("native_profiler");
        $__internal_9fc6e740200416aedba894fa4a9e9bd4a3bd43a8b6a28b3a3d42a24fd5ff69cb->enter($__internal_9fc6e740200416aedba894fa4a9e9bd4a3bd43a8b6a28b3a3d42a24fd5ff69cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des combats
";
        
        $__internal_9fc6e740200416aedba894fa4a9e9bd4a3bd43a8b6a28b3a3d42a24fd5ff69cb->leave($__internal_9fc6e740200416aedba894fa4a9e9bd4a3bd43a8b6a28b3a3d42a24fd5ff69cb_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle::Combat.html.twig";
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
