<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_7301403c59fb82ada0fff0969448e055533ab6bc8004553fc37880446ca02b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8df3d886b80975d23e711b5d4ca847550db13922bb76bf232e4337b7df6d098a = $this->env->getExtension("native_profiler");
        $__internal_8df3d886b80975d23e711b5d4ca847550db13922bb76bf232e4337b7df6d098a->enter($__internal_8df3d886b80975d23e711b5d4ca847550db13922bb76bf232e4337b7df6d098a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df3d886b80975d23e711b5d4ca847550db13922bb76bf232e4337b7df6d098a->leave($__internal_8df3d886b80975d23e711b5d4ca847550db13922bb76bf232e4337b7df6d098a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c68bfd7047ac4a3f45fb7882fcd30970106fc6f026c286066c9c921fb3124c9 = $this->env->getExtension("native_profiler");
        $__internal_1c68bfd7047ac4a3f45fb7882fcd30970106fc6f026c286066c9c921fb3124c9->enter($__internal_1c68bfd7047ac4a3f45fb7882fcd30970106fc6f026c286066c9c921fb3124c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_1c68bfd7047ac4a3f45fb7882fcd30970106fc6f026c286066c9c921fb3124c9->leave($__internal_1c68bfd7047ac4a3f45fb7882fcd30970106fc6f026c286066c9c921fb3124c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
