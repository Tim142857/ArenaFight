<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_33cbb1c6360fbac4285a5afa665d530fbe227fee8916d270ce8f08fe7c78f74b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_50c9959f0e118970a52016d773b6b3a7a18a838e39e73af4aefee893e84c504b = $this->env->getExtension("native_profiler");
        $__internal_50c9959f0e118970a52016d773b6b3a7a18a838e39e73af4aefee893e84c504b->enter($__internal_50c9959f0e118970a52016d773b6b3a7a18a838e39e73af4aefee893e84c504b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50c9959f0e118970a52016d773b6b3a7a18a838e39e73af4aefee893e84c504b->leave($__internal_50c9959f0e118970a52016d773b6b3a7a18a838e39e73af4aefee893e84c504b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33bcaf4f1af2840515236cf123c902d516ea234afc820bb15ed49389441bb6dd = $this->env->getExtension("native_profiler");
        $__internal_33bcaf4f1af2840515236cf123c902d516ea234afc820bb15ed49389441bb6dd->enter($__internal_33bcaf4f1af2840515236cf123c902d516ea234afc820bb15ed49389441bb6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_33bcaf4f1af2840515236cf123c902d516ea234afc820bb15ed49389441bb6dd->leave($__internal_33bcaf4f1af2840515236cf123c902d516ea234afc820bb15ed49389441bb6dd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
