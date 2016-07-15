<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_f4e92e16c1e167e6a0cf06c7721278b86cf6543f10a61852f4442fe4110dc926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_d3695e57f14d5403ba13344d5afdc8fb64d206ada255f734a220bec027bbd563 = $this->env->getExtension("native_profiler");
        $__internal_d3695e57f14d5403ba13344d5afdc8fb64d206ada255f734a220bec027bbd563->enter($__internal_d3695e57f14d5403ba13344d5afdc8fb64d206ada255f734a220bec027bbd563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3695e57f14d5403ba13344d5afdc8fb64d206ada255f734a220bec027bbd563->leave($__internal_d3695e57f14d5403ba13344d5afdc8fb64d206ada255f734a220bec027bbd563_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_522a63f42b70261ec24cc366a16d9dc8526faaa080d6b54f9629c20f7cd526eb = $this->env->getExtension("native_profiler");
        $__internal_522a63f42b70261ec24cc366a16d9dc8526faaa080d6b54f9629c20f7cd526eb->enter($__internal_522a63f42b70261ec24cc366a16d9dc8526faaa080d6b54f9629c20f7cd526eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_522a63f42b70261ec24cc366a16d9dc8526faaa080d6b54f9629c20f7cd526eb->leave($__internal_522a63f42b70261ec24cc366a16d9dc8526faaa080d6b54f9629c20f7cd526eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
