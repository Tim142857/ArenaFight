<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_2977ab505db26f0fa9aaa596a1b2fdc337f926d2ca876e7e636da8bdb499fcf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8940d2a925deb4fbc1cca6fc3aadcf264c58fe3e1000beb7425a155a370d3e00 = $this->env->getExtension("native_profiler");
        $__internal_8940d2a925deb4fbc1cca6fc3aadcf264c58fe3e1000beb7425a155a370d3e00->enter($__internal_8940d2a925deb4fbc1cca6fc3aadcf264c58fe3e1000beb7425a155a370d3e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8940d2a925deb4fbc1cca6fc3aadcf264c58fe3e1000beb7425a155a370d3e00->leave($__internal_8940d2a925deb4fbc1cca6fc3aadcf264c58fe3e1000beb7425a155a370d3e00_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a9dc9d40ba717bc9bc4dff11a78665881c79edf0f0024bf8723391070ed1bcf1 = $this->env->getExtension("native_profiler");
        $__internal_a9dc9d40ba717bc9bc4dff11a78665881c79edf0f0024bf8723391070ed1bcf1->enter($__internal_a9dc9d40ba717bc9bc4dff11a78665881c79edf0f0024bf8723391070ed1bcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a9dc9d40ba717bc9bc4dff11a78665881c79edf0f0024bf8723391070ed1bcf1->leave($__internal_a9dc9d40ba717bc9bc4dff11a78665881c79edf0f0024bf8723391070ed1bcf1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5b0b630faefe7757a7486fe8479b5cda808c980c1103e10040957ffb7fc1be7a = $this->env->getExtension("native_profiler");
        $__internal_5b0b630faefe7757a7486fe8479b5cda808c980c1103e10040957ffb7fc1be7a->enter($__internal_5b0b630faefe7757a7486fe8479b5cda808c980c1103e10040957ffb7fc1be7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5b0b630faefe7757a7486fe8479b5cda808c980c1103e10040957ffb7fc1be7a->leave($__internal_5b0b630faefe7757a7486fe8479b5cda808c980c1103e10040957ffb7fc1be7a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e319db17d68d993a071063a69a418570bbea1dfae62edde08367e6b812587442 = $this->env->getExtension("native_profiler");
        $__internal_e319db17d68d993a071063a69a418570bbea1dfae62edde08367e6b812587442->enter($__internal_e319db17d68d993a071063a69a418570bbea1dfae62edde08367e6b812587442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e319db17d68d993a071063a69a418570bbea1dfae62edde08367e6b812587442->leave($__internal_e319db17d68d993a071063a69a418570bbea1dfae62edde08367e6b812587442_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
