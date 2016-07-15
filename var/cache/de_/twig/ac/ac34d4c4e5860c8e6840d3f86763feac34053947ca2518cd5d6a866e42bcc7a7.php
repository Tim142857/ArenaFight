<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_b3e80a5d52b55963122aff7114aae5de0dfa39b4b50d573be188db6fb6f7500f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_c165216f129814ccbbcd1d1648e1da60f4227873092eb9d291b3b54743467286 = $this->env->getExtension("native_profiler");
        $__internal_c165216f129814ccbbcd1d1648e1da60f4227873092eb9d291b3b54743467286->enter($__internal_c165216f129814ccbbcd1d1648e1da60f4227873092eb9d291b3b54743467286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c165216f129814ccbbcd1d1648e1da60f4227873092eb9d291b3b54743467286->leave($__internal_c165216f129814ccbbcd1d1648e1da60f4227873092eb9d291b3b54743467286_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f209610d6c7c4a4ce3823df102d62efbc765c57bf7d468cbc6f60c10d827d40 = $this->env->getExtension("native_profiler");
        $__internal_7f209610d6c7c4a4ce3823df102d62efbc765c57bf7d468cbc6f60c10d827d40->enter($__internal_7f209610d6c7c4a4ce3823df102d62efbc765c57bf7d468cbc6f60c10d827d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_7f209610d6c7c4a4ce3823df102d62efbc765c57bf7d468cbc6f60c10d827d40->leave($__internal_7f209610d6c7c4a4ce3823df102d62efbc765c57bf7d468cbc6f60c10d827d40_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
