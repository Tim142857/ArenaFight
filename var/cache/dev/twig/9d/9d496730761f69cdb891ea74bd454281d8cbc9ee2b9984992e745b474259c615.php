<?php

/* ArenaFightBundle:Joueur:Personnages_Ajouter.html.twig */
class __TwigTemplate_a266813df2648ab42fededd2b458526248715ba377cfed8c92b57f1baedd1eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig", "ArenaFightBundle:Joueur:Personnages_Ajouter.html.twig", 1);
        $this->blocks = array(
            'bodyPerso' => array($this, 'block_bodyPerso'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebfa7c0cdbbfa222626c82077ea209cb68d6e960162ea26d97f0eb0c0cf0ea60 = $this->env->getExtension("native_profiler");
        $__internal_ebfa7c0cdbbfa222626c82077ea209cb68d6e960162ea26d97f0eb0c0cf0ea60->enter($__internal_ebfa7c0cdbbfa222626c82077ea209cb68d6e960162ea26d97f0eb0c0cf0ea60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Personnages_Ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebfa7c0cdbbfa222626c82077ea209cb68d6e960162ea26d97f0eb0c0cf0ea60->leave($__internal_ebfa7c0cdbbfa222626c82077ea209cb68d6e960162ea26d97f0eb0c0cf0ea60_prof);

    }

    // line 2
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_70a8de8093e633027ab414b043cf49240203dddcc1f939ca62744b31d578d478 = $this->env->getExtension("native_profiler");
        $__internal_70a8de8093e633027ab414b043cf49240203dddcc1f939ca62744b31d578d478->enter($__internal_70a8de8093e633027ab414b043cf49240203dddcc1f939ca62744b31d578d478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_70a8de8093e633027ab414b043cf49240203dddcc1f939ca62744b31d578d478->leave($__internal_70a8de8093e633027ab414b043cf49240203dddcc1f939ca62744b31d578d478_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Personnages_Ajouter.html.twig";
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
/* {% extends "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig" %}*/
/* {% block bodyPerso %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
