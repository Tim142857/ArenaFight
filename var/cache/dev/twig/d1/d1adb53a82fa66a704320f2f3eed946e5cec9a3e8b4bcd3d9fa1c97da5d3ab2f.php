<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_944169baddc9684125fdbe29f1529041057f7303b0fb5757c35f5f794df3c9aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4f433186c057def6d50c111d7c5fde7456c4831722f3d699d24123ce5de3c3e5 = $this->env->getExtension("native_profiler");
        $__internal_4f433186c057def6d50c111d7c5fde7456c4831722f3d699d24123ce5de3c3e5->enter($__internal_4f433186c057def6d50c111d7c5fde7456c4831722f3d699d24123ce5de3c3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f433186c057def6d50c111d7c5fde7456c4831722f3d699d24123ce5de3c3e5->leave($__internal_4f433186c057def6d50c111d7c5fde7456c4831722f3d699d24123ce5de3c3e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afea69d73163c6143e1e1dcb48fdf324072fb5657f59c6d4b612a2bb0db017d8 = $this->env->getExtension("native_profiler");
        $__internal_afea69d73163c6143e1e1dcb48fdf324072fb5657f59c6d4b612a2bb0db017d8->enter($__internal_afea69d73163c6143e1e1dcb48fdf324072fb5657f59c6d4b612a2bb0db017d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_afea69d73163c6143e1e1dcb48fdf324072fb5657f59c6d4b612a2bb0db017d8->leave($__internal_afea69d73163c6143e1e1dcb48fdf324072fb5657f59c6d4b612a2bb0db017d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
