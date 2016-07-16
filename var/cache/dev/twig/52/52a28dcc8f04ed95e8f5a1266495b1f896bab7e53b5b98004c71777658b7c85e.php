<?php

/* ArenaFightBundle:Joueur:Combat.html.twig */
class __TwigTemplate_4fbec05fc2de06c3b16c2f966f45f95d12827b34c46bde22bc9b92f6de9f3bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "ArenaFightBundle:Joueur:Combat.html.twig", 1);
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
        $__internal_7b426586d7b0544c52dd37a18518f2fa622519f85c3f2d532da55835bc4e9409 = $this->env->getExtension("native_profiler");
        $__internal_7b426586d7b0544c52dd37a18518f2fa622519f85c3f2d532da55835bc4e9409->enter($__internal_7b426586d7b0544c52dd37a18518f2fa622519f85c3f2d532da55835bc4e9409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Combat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b426586d7b0544c52dd37a18518f2fa622519f85c3f2d532da55835bc4e9409->leave($__internal_7b426586d7b0544c52dd37a18518f2fa622519f85c3f2d532da55835bc4e9409_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a029b7b0e8e7d3e69b6d870ba03589030b5006497dba7519499c198472b33de2 = $this->env->getExtension("native_profiler");
        $__internal_a029b7b0e8e7d3e69b6d870ba03589030b5006497dba7519499c198472b33de2->enter($__internal_a029b7b0e8e7d3e69b6d870ba03589030b5006497dba7519499c198472b33de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des combats
";
        
        $__internal_a029b7b0e8e7d3e69b6d870ba03589030b5006497dba7519499c198472b33de2->leave($__internal_a029b7b0e8e7d3e69b6d870ba03589030b5006497dba7519499c198472b33de2_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Combat.html.twig";
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
