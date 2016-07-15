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
        $__internal_e55ac36e3aba6cec1bfa2c6619dc043f0ed34813f92407218b5b91161a815faa = $this->env->getExtension("native_profiler");
        $__internal_e55ac36e3aba6cec1bfa2c6619dc043f0ed34813f92407218b5b91161a815faa->enter($__internal_e55ac36e3aba6cec1bfa2c6619dc043f0ed34813f92407218b5b91161a815faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Combat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55ac36e3aba6cec1bfa2c6619dc043f0ed34813f92407218b5b91161a815faa->leave($__internal_e55ac36e3aba6cec1bfa2c6619dc043f0ed34813f92407218b5b91161a815faa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc613369c080e6f10cdc77cc372f5bbaa326e312d30f9b07d98ce76d0af7a3f4 = $this->env->getExtension("native_profiler");
        $__internal_fc613369c080e6f10cdc77cc372f5bbaa326e312d30f9b07d98ce76d0af7a3f4->enter($__internal_fc613369c080e6f10cdc77cc372f5bbaa326e312d30f9b07d98ce76d0af7a3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des combats
";
        
        $__internal_fc613369c080e6f10cdc77cc372f5bbaa326e312d30f9b07d98ce76d0af7a3f4->leave($__internal_fc613369c080e6f10cdc77cc372f5bbaa326e312d30f9b07d98ce76d0af7a3f4_prof);

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
