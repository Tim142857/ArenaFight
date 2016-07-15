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
        $__internal_09ecd9b280c0b4e45b7c313b3c1d0bd8aa95fa64d94ff95b7e8b363c402f771f = $this->env->getExtension("native_profiler");
        $__internal_09ecd9b280c0b4e45b7c313b3c1d0bd8aa95fa64d94ff95b7e8b363c402f771f->enter($__internal_09ecd9b280c0b4e45b7c313b3c1d0bd8aa95fa64d94ff95b7e8b363c402f771f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ecd9b280c0b4e45b7c313b3c1d0bd8aa95fa64d94ff95b7e8b363c402f771f->leave($__internal_09ecd9b280c0b4e45b7c313b3c1d0bd8aa95fa64d94ff95b7e8b363c402f771f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c994379fbfaaab88c7b7dc9d2480cbfacb904db4dbebe6f9941676ee4a748175 = $this->env->getExtension("native_profiler");
        $__internal_c994379fbfaaab88c7b7dc9d2480cbfacb904db4dbebe6f9941676ee4a748175->enter($__internal_c994379fbfaaab88c7b7dc9d2480cbfacb904db4dbebe6f9941676ee4a748175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c994379fbfaaab88c7b7dc9d2480cbfacb904db4dbebe6f9941676ee4a748175->leave($__internal_c994379fbfaaab88c7b7dc9d2480cbfacb904db4dbebe6f9941676ee4a748175_prof);

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
