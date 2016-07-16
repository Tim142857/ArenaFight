<?php

/* @ArenaFight/Visitor/AccueilVisitor.html.twig */
class __TwigTemplate_1f25dfe83a55783b99bed35fb7c180d35867ff3a832092e0fe531d5a066978d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Visitor:LayoutVisitor.html.twig", "@ArenaFight/Visitor/AccueilVisitor.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Visitor:LayoutVisitor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c55e5d866ed1220ca6103defad3551194a572092e90984be5708e41fe48409e = $this->env->getExtension("native_profiler");
        $__internal_0c55e5d866ed1220ca6103defad3551194a572092e90984be5708e41fe48409e->enter($__internal_0c55e5d866ed1220ca6103defad3551194a572092e90984be5708e41fe48409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Visitor/AccueilVisitor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c55e5d866ed1220ca6103defad3551194a572092e90984be5708e41fe48409e->leave($__internal_0c55e5d866ed1220ca6103defad3551194a572092e90984be5708e41fe48409e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_28455a1d4469a49f79496b0752fb3139ad1c7edb02ea783231bcb4b5033fcc23 = $this->env->getExtension("native_profiler");
        $__internal_28455a1d4469a49f79496b0752fb3139ad1c7edb02ea783231bcb4b5033fcc23->enter($__internal_28455a1d4469a49f79496b0752fb3139ad1c7edb02ea783231bcb4b5033fcc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_28455a1d4469a49f79496b0752fb3139ad1c7edb02ea783231bcb4b5033fcc23->leave($__internal_28455a1d4469a49f79496b0752fb3139ad1c7edb02ea783231bcb4b5033fcc23_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Visitor/AccueilVisitor.html.twig";
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
/* {% extends "ArenaFightBundle:Visitor:LayoutVisitor.html.twig" %}*/
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
/* */
