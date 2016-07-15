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
        $__internal_acfe8b485c958b96b298f99f69864e4628182e79de143f454efa0aaabc8a035f = $this->env->getExtension("native_profiler");
        $__internal_acfe8b485c958b96b298f99f69864e4628182e79de143f454efa0aaabc8a035f->enter($__internal_acfe8b485c958b96b298f99f69864e4628182e79de143f454efa0aaabc8a035f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acfe8b485c958b96b298f99f69864e4628182e79de143f454efa0aaabc8a035f->leave($__internal_acfe8b485c958b96b298f99f69864e4628182e79de143f454efa0aaabc8a035f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_064977edd7631ffb6d50c1a3d7aae1bd01d6f9f783e29119fe7661dca859fc4b = $this->env->getExtension("native_profiler");
        $__internal_064977edd7631ffb6d50c1a3d7aae1bd01d6f9f783e29119fe7661dca859fc4b->enter($__internal_064977edd7631ffb6d50c1a3d7aae1bd01d6f9f783e29119fe7661dca859fc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_064977edd7631ffb6d50c1a3d7aae1bd01d6f9f783e29119fe7661dca859fc4b->leave($__internal_064977edd7631ffb6d50c1a3d7aae1bd01d6f9f783e29119fe7661dca859fc4b_prof);

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
