<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f5e90c2f9d9d74242708a289b822ba0d92daaa5f4f9bda7a06655201191bbc19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_5e4e0f1ea6995a87198624b01060659bc6c0b05ac0b4f863a7b5ea3631a8e29c = $this->env->getExtension("native_profiler");
        $__internal_5e4e0f1ea6995a87198624b01060659bc6c0b05ac0b4f863a7b5ea3631a8e29c->enter($__internal_5e4e0f1ea6995a87198624b01060659bc6c0b05ac0b4f863a7b5ea3631a8e29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e4e0f1ea6995a87198624b01060659bc6c0b05ac0b4f863a7b5ea3631a8e29c->leave($__internal_5e4e0f1ea6995a87198624b01060659bc6c0b05ac0b4f863a7b5ea3631a8e29c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11982ceb6dfbbb71efeb53c48362a8c0f755facc2ad228350733b852bc9d97f4 = $this->env->getExtension("native_profiler");
        $__internal_11982ceb6dfbbb71efeb53c48362a8c0f755facc2ad228350733b852bc9d97f4->enter($__internal_11982ceb6dfbbb71efeb53c48362a8c0f755facc2ad228350733b852bc9d97f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_11982ceb6dfbbb71efeb53c48362a8c0f755facc2ad228350733b852bc9d97f4->leave($__internal_11982ceb6dfbbb71efeb53c48362a8c0f755facc2ad228350733b852bc9d97f4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
