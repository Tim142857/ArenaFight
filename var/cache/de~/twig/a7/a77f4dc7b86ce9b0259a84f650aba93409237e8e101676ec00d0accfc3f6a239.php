<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_43d7c1c1a1462e0f23b29b3d12cc84f6eebfe8bd2b730573d292819d5d2a6a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_7bb73475d46f718a4adceb50aa54258143ea39986b71ffb16a10e6749f4b081c = $this->env->getExtension("native_profiler");
        $__internal_7bb73475d46f718a4adceb50aa54258143ea39986b71ffb16a10e6749f4b081c->enter($__internal_7bb73475d46f718a4adceb50aa54258143ea39986b71ffb16a10e6749f4b081c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb73475d46f718a4adceb50aa54258143ea39986b71ffb16a10e6749f4b081c->leave($__internal_7bb73475d46f718a4adceb50aa54258143ea39986b71ffb16a10e6749f4b081c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dab4edcee6ee6f27cc01a55298eba6ceb94ae77b834c4dfd06dcbaab68d127a = $this->env->getExtension("native_profiler");
        $__internal_3dab4edcee6ee6f27cc01a55298eba6ceb94ae77b834c4dfd06dcbaab68d127a->enter($__internal_3dab4edcee6ee6f27cc01a55298eba6ceb94ae77b834c4dfd06dcbaab68d127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3dab4edcee6ee6f27cc01a55298eba6ceb94ae77b834c4dfd06dcbaab68d127a->leave($__internal_3dab4edcee6ee6f27cc01a55298eba6ceb94ae77b834c4dfd06dcbaab68d127a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
