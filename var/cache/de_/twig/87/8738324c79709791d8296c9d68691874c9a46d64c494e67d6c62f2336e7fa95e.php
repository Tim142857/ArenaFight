<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e798823658bf397277eba1df08258d27f5b1ff941d62059e631a3346cae4cf17 extends Twig_Template
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
        $__internal_6ba4b5fab30c9441d9388e60e6fcf7762bb0a51a6c40a6f700983e8afd82d4b5 = $this->env->getExtension("native_profiler");
        $__internal_6ba4b5fab30c9441d9388e60e6fcf7762bb0a51a6c40a6f700983e8afd82d4b5->enter($__internal_6ba4b5fab30c9441d9388e60e6fcf7762bb0a51a6c40a6f700983e8afd82d4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6ba4b5fab30c9441d9388e60e6fcf7762bb0a51a6c40a6f700983e8afd82d4b5->leave($__internal_6ba4b5fab30c9441d9388e60e6fcf7762bb0a51a6c40a6f700983e8afd82d4b5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a19480f95a0a8178229eac56832b385e3510c806e0bdedc537aebd04076327c2 = $this->env->getExtension("native_profiler");
        $__internal_a19480f95a0a8178229eac56832b385e3510c806e0bdedc537aebd04076327c2->enter($__internal_a19480f95a0a8178229eac56832b385e3510c806e0bdedc537aebd04076327c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a19480f95a0a8178229eac56832b385e3510c806e0bdedc537aebd04076327c2->leave($__internal_a19480f95a0a8178229eac56832b385e3510c806e0bdedc537aebd04076327c2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_50540f8521cdfb684b3594f10623f38d818c34350ed69f16fc54fdfcd12afadd = $this->env->getExtension("native_profiler");
        $__internal_50540f8521cdfb684b3594f10623f38d818c34350ed69f16fc54fdfcd12afadd->enter($__internal_50540f8521cdfb684b3594f10623f38d818c34350ed69f16fc54fdfcd12afadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_50540f8521cdfb684b3594f10623f38d818c34350ed69f16fc54fdfcd12afadd->leave($__internal_50540f8521cdfb684b3594f10623f38d818c34350ed69f16fc54fdfcd12afadd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f70de7a5493aee4549e932897e8f83a48bef533c214cfa800224b7c8f87b6409 = $this->env->getExtension("native_profiler");
        $__internal_f70de7a5493aee4549e932897e8f83a48bef533c214cfa800224b7c8f87b6409->enter($__internal_f70de7a5493aee4549e932897e8f83a48bef533c214cfa800224b7c8f87b6409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f70de7a5493aee4549e932897e8f83a48bef533c214cfa800224b7c8f87b6409->leave($__internal_f70de7a5493aee4549e932897e8f83a48bef533c214cfa800224b7c8f87b6409_prof);

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
