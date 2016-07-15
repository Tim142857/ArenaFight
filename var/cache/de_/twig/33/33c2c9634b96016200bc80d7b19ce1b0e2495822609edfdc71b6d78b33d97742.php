<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a060a0f9337f7397d8b0bcacbe2e0cb1246c552256d64767f84cfdea5eb76de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_1c04f110cf8a369877cdc1993016ffe5d54bf7db0335208e22789fcc2111650d = $this->env->getExtension("native_profiler");
        $__internal_1c04f110cf8a369877cdc1993016ffe5d54bf7db0335208e22789fcc2111650d->enter($__internal_1c04f110cf8a369877cdc1993016ffe5d54bf7db0335208e22789fcc2111650d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c04f110cf8a369877cdc1993016ffe5d54bf7db0335208e22789fcc2111650d->leave($__internal_1c04f110cf8a369877cdc1993016ffe5d54bf7db0335208e22789fcc2111650d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d29418d06226f692922c1df930804a9e596276953812f3d797acacbd011bf126 = $this->env->getExtension("native_profiler");
        $__internal_d29418d06226f692922c1df930804a9e596276953812f3d797acacbd011bf126->enter($__internal_d29418d06226f692922c1df930804a9e596276953812f3d797acacbd011bf126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d29418d06226f692922c1df930804a9e596276953812f3d797acacbd011bf126->leave($__internal_d29418d06226f692922c1df930804a9e596276953812f3d797acacbd011bf126_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
