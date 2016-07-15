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
        $__internal_3fc7ca469a00360992390891562f22a7f6849fac1cbafada1de94fe83a333108 = $this->env->getExtension("native_profiler");
        $__internal_3fc7ca469a00360992390891562f22a7f6849fac1cbafada1de94fe83a333108->enter($__internal_3fc7ca469a00360992390891562f22a7f6849fac1cbafada1de94fe83a333108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Combat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc7ca469a00360992390891562f22a7f6849fac1cbafada1de94fe83a333108->leave($__internal_3fc7ca469a00360992390891562f22a7f6849fac1cbafada1de94fe83a333108_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5639074c9aee20902841b08d1afa6ad39dd764e7c45ee3d17ff9ceb01035a4a1 = $this->env->getExtension("native_profiler");
        $__internal_5639074c9aee20902841b08d1afa6ad39dd764e7c45ee3d17ff9ceb01035a4a1->enter($__internal_5639074c9aee20902841b08d1afa6ad39dd764e7c45ee3d17ff9ceb01035a4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des combats
";
        
        $__internal_5639074c9aee20902841b08d1afa6ad39dd764e7c45ee3d17ff9ceb01035a4a1->leave($__internal_5639074c9aee20902841b08d1afa6ad39dd764e7c45ee3d17ff9ceb01035a4a1_prof);

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
