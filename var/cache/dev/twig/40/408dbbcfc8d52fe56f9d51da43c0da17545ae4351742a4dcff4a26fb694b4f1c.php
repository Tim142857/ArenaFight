<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0fc5a620ff7d9a868d6e3fd36dfc9b3c0d9dc8c77f7797054c041f6c5d014f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8b5eeaae1d315e7712d8fe989f8825bbf55e058e8f640f39f09db1b29e83a74c = $this->env->getExtension("native_profiler");
        $__internal_8b5eeaae1d315e7712d8fe989f8825bbf55e058e8f640f39f09db1b29e83a74c->enter($__internal_8b5eeaae1d315e7712d8fe989f8825bbf55e058e8f640f39f09db1b29e83a74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5eeaae1d315e7712d8fe989f8825bbf55e058e8f640f39f09db1b29e83a74c->leave($__internal_8b5eeaae1d315e7712d8fe989f8825bbf55e058e8f640f39f09db1b29e83a74c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0cb3516a3a3f2a73be1dd2b78c82c352ee7aae0092ff5b4f9fe14c0c5be3361 = $this->env->getExtension("native_profiler");
        $__internal_d0cb3516a3a3f2a73be1dd2b78c82c352ee7aae0092ff5b4f9fe14c0c5be3361->enter($__internal_d0cb3516a3a3f2a73be1dd2b78c82c352ee7aae0092ff5b4f9fe14c0c5be3361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d0cb3516a3a3f2a73be1dd2b78c82c352ee7aae0092ff5b4f9fe14c0c5be3361->leave($__internal_d0cb3516a3a3f2a73be1dd2b78c82c352ee7aae0092ff5b4f9fe14c0c5be3361_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
