<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4c366c5081e147616458cf88136a917e44693c52eaa937aef29f309ca66f8f69 extends Twig_Template
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
        $__internal_666ce50db27adac5846d5c29763f512fb453a38df1a6edc3fb637dd4310ab957 = $this->env->getExtension("native_profiler");
        $__internal_666ce50db27adac5846d5c29763f512fb453a38df1a6edc3fb637dd4310ab957->enter($__internal_666ce50db27adac5846d5c29763f512fb453a38df1a6edc3fb637dd4310ab957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_666ce50db27adac5846d5c29763f512fb453a38df1a6edc3fb637dd4310ab957->leave($__internal_666ce50db27adac5846d5c29763f512fb453a38df1a6edc3fb637dd4310ab957_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b6ce9e2949224cb33d588afb3d8aabf0bff5938096af003de99c4e1f7cbca29c = $this->env->getExtension("native_profiler");
        $__internal_b6ce9e2949224cb33d588afb3d8aabf0bff5938096af003de99c4e1f7cbca29c->enter($__internal_b6ce9e2949224cb33d588afb3d8aabf0bff5938096af003de99c4e1f7cbca29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b6ce9e2949224cb33d588afb3d8aabf0bff5938096af003de99c4e1f7cbca29c->leave($__internal_b6ce9e2949224cb33d588afb3d8aabf0bff5938096af003de99c4e1f7cbca29c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_379ea03aafb3717de52fb2c337a5c46400f0d99417aae8aa8978422bdd021755 = $this->env->getExtension("native_profiler");
        $__internal_379ea03aafb3717de52fb2c337a5c46400f0d99417aae8aa8978422bdd021755->enter($__internal_379ea03aafb3717de52fb2c337a5c46400f0d99417aae8aa8978422bdd021755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_379ea03aafb3717de52fb2c337a5c46400f0d99417aae8aa8978422bdd021755->leave($__internal_379ea03aafb3717de52fb2c337a5c46400f0d99417aae8aa8978422bdd021755_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ff8278f12658593599813c6cc548679c0433e681de65f2bfef4f678b84175201 = $this->env->getExtension("native_profiler");
        $__internal_ff8278f12658593599813c6cc548679c0433e681de65f2bfef4f678b84175201->enter($__internal_ff8278f12658593599813c6cc548679c0433e681de65f2bfef4f678b84175201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ff8278f12658593599813c6cc548679c0433e681de65f2bfef4f678b84175201->leave($__internal_ff8278f12658593599813c6cc548679c0433e681de65f2bfef4f678b84175201_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
