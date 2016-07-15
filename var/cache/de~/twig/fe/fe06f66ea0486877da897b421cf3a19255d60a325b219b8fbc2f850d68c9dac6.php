<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_b3517c312cfb70d934c4ed028f0e3256c856af08d11f709cc5755636e8f41330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_a5146d1d02aefe07fc2c820a581908b65972dbbc1f4c9254c4b5ca2d5561324d = $this->env->getExtension("native_profiler");
        $__internal_a5146d1d02aefe07fc2c820a581908b65972dbbc1f4c9254c4b5ca2d5561324d->enter($__internal_a5146d1d02aefe07fc2c820a581908b65972dbbc1f4c9254c4b5ca2d5561324d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5146d1d02aefe07fc2c820a581908b65972dbbc1f4c9254c4b5ca2d5561324d->leave($__internal_a5146d1d02aefe07fc2c820a581908b65972dbbc1f4c9254c4b5ca2d5561324d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5337399b53a06f59f3996b10dbbf393c91792d23f1a32bd274f5ded2ef2f33b8 = $this->env->getExtension("native_profiler");
        $__internal_5337399b53a06f59f3996b10dbbf393c91792d23f1a32bd274f5ded2ef2f33b8->enter($__internal_5337399b53a06f59f3996b10dbbf393c91792d23f1a32bd274f5ded2ef2f33b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_5337399b53a06f59f3996b10dbbf393c91792d23f1a32bd274f5ded2ef2f33b8->leave($__internal_5337399b53a06f59f3996b10dbbf393c91792d23f1a32bd274f5ded2ef2f33b8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
