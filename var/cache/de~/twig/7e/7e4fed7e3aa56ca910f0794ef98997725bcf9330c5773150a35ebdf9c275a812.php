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
        $__internal_1d40c38f83f4671e4b10fc57049f1a47bec0b21b237fdfd7701c9332a0843a66 = $this->env->getExtension("native_profiler");
        $__internal_1d40c38f83f4671e4b10fc57049f1a47bec0b21b237fdfd7701c9332a0843a66->enter($__internal_1d40c38f83f4671e4b10fc57049f1a47bec0b21b237fdfd7701c9332a0843a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Personnages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d40c38f83f4671e4b10fc57049f1a47bec0b21b237fdfd7701c9332a0843a66->leave($__internal_1d40c38f83f4671e4b10fc57049f1a47bec0b21b237fdfd7701c9332a0843a66_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dfd2e1bfe51e1db3246bda08fd5986532a72a5e8e0d35c4f134bd4a57820fe6 = $this->env->getExtension("native_profiler");
        $__internal_9dfd2e1bfe51e1db3246bda08fd5986532a72a5e8e0d35c4f134bd4a57820fe6->enter($__internal_9dfd2e1bfe51e1db3246bda08fd5986532a72a5e8e0d35c4f134bd4a57820fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des personnages du joueur
";
        
        $__internal_9dfd2e1bfe51e1db3246bda08fd5986532a72a5e8e0d35c4f134bd4a57820fe6->leave($__internal_9dfd2e1bfe51e1db3246bda08fd5986532a72a5e8e0d35c4f134bd4a57820fe6_prof);

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
