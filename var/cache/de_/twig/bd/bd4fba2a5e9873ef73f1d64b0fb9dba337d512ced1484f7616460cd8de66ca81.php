<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_af51aed3420ef863bad1d75d9991deb3b5e1f7c7792c01daeca3bbbbce621aae extends Twig_Template
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
        $__internal_a3fdad00729ba8289e5bdd413f213372e5d770297a10ff351ef6be006d7a9e91 = $this->env->getExtension("native_profiler");
        $__internal_a3fdad00729ba8289e5bdd413f213372e5d770297a10ff351ef6be006d7a9e91->enter($__internal_a3fdad00729ba8289e5bdd413f213372e5d770297a10ff351ef6be006d7a9e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a3fdad00729ba8289e5bdd413f213372e5d770297a10ff351ef6be006d7a9e91->leave($__internal_a3fdad00729ba8289e5bdd413f213372e5d770297a10ff351ef6be006d7a9e91_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d72297e560518cb9b1140688e04d61084ec45a129e38accb6e352ffc773b938a = $this->env->getExtension("native_profiler");
        $__internal_d72297e560518cb9b1140688e04d61084ec45a129e38accb6e352ffc773b938a->enter($__internal_d72297e560518cb9b1140688e04d61084ec45a129e38accb6e352ffc773b938a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d72297e560518cb9b1140688e04d61084ec45a129e38accb6e352ffc773b938a->leave($__internal_d72297e560518cb9b1140688e04d61084ec45a129e38accb6e352ffc773b938a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5457d6906bbcc752fbde3b0562b10e55d37eb300e9536b7a11676bb8aba3c0ea = $this->env->getExtension("native_profiler");
        $__internal_5457d6906bbcc752fbde3b0562b10e55d37eb300e9536b7a11676bb8aba3c0ea->enter($__internal_5457d6906bbcc752fbde3b0562b10e55d37eb300e9536b7a11676bb8aba3c0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5457d6906bbcc752fbde3b0562b10e55d37eb300e9536b7a11676bb8aba3c0ea->leave($__internal_5457d6906bbcc752fbde3b0562b10e55d37eb300e9536b7a11676bb8aba3c0ea_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_129766f0b31f7bb2a01e43bbb6934a27a4dd197a2867ad8c41d52ad265a9ea69 = $this->env->getExtension("native_profiler");
        $__internal_129766f0b31f7bb2a01e43bbb6934a27a4dd197a2867ad8c41d52ad265a9ea69->enter($__internal_129766f0b31f7bb2a01e43bbb6934a27a4dd197a2867ad8c41d52ad265a9ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_129766f0b31f7bb2a01e43bbb6934a27a4dd197a2867ad8c41d52ad265a9ea69->leave($__internal_129766f0b31f7bb2a01e43bbb6934a27a4dd197a2867ad8c41d52ad265a9ea69_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
