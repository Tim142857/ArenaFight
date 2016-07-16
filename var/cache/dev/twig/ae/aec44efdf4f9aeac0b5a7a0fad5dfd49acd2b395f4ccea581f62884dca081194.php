<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_14c2b401888d70c7897ea13005d0163e9a28ee4e5249529881a4a93783488dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382c482e9e00322c9f3b4bbc59b928622fa00393def98bcdecea5c6584fa1922 = $this->env->getExtension("native_profiler");
        $__internal_382c482e9e00322c9f3b4bbc59b928622fa00393def98bcdecea5c6584fa1922->enter($__internal_382c482e9e00322c9f3b4bbc59b928622fa00393def98bcdecea5c6584fa1922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382c482e9e00322c9f3b4bbc59b928622fa00393def98bcdecea5c6584fa1922->leave($__internal_382c482e9e00322c9f3b4bbc59b928622fa00393def98bcdecea5c6584fa1922_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abfc0ef9af58e60270e869efde4087c2453306dd5b135587ac848826e2ee1f13 = $this->env->getExtension("native_profiler");
        $__internal_abfc0ef9af58e60270e869efde4087c2453306dd5b135587ac848826e2ee1f13->enter($__internal_abfc0ef9af58e60270e869efde4087c2453306dd5b135587ac848826e2ee1f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_abfc0ef9af58e60270e869efde4087c2453306dd5b135587ac848826e2ee1f13->leave($__internal_abfc0ef9af58e60270e869efde4087c2453306dd5b135587ac848826e2ee1f13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
