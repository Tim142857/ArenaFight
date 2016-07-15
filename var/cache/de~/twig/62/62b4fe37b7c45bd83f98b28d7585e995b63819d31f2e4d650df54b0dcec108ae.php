<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b87b65323b06f27f3ed0c1ac365cb110a6b6a47a036bce33cc524bcc5917739c extends Twig_Template
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
        $__internal_b60a8a384ad7e998e225726f8d34186a99dbf03d09779c46e568adf682bdb1bd = $this->env->getExtension("native_profiler");
        $__internal_b60a8a384ad7e998e225726f8d34186a99dbf03d09779c46e568adf682bdb1bd->enter($__internal_b60a8a384ad7e998e225726f8d34186a99dbf03d09779c46e568adf682bdb1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b60a8a384ad7e998e225726f8d34186a99dbf03d09779c46e568adf682bdb1bd->leave($__internal_b60a8a384ad7e998e225726f8d34186a99dbf03d09779c46e568adf682bdb1bd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7596ee93f0951cb533d2293206414359343c929fb424f1d4193ca44e5609ed0d = $this->env->getExtension("native_profiler");
        $__internal_7596ee93f0951cb533d2293206414359343c929fb424f1d4193ca44e5609ed0d->enter($__internal_7596ee93f0951cb533d2293206414359343c929fb424f1d4193ca44e5609ed0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7596ee93f0951cb533d2293206414359343c929fb424f1d4193ca44e5609ed0d->leave($__internal_7596ee93f0951cb533d2293206414359343c929fb424f1d4193ca44e5609ed0d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_57b316494a11c4e00e87d454c22f4f59a6ac0847daadd6d937400ae2e4ad92e3 = $this->env->getExtension("native_profiler");
        $__internal_57b316494a11c4e00e87d454c22f4f59a6ac0847daadd6d937400ae2e4ad92e3->enter($__internal_57b316494a11c4e00e87d454c22f4f59a6ac0847daadd6d937400ae2e4ad92e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_57b316494a11c4e00e87d454c22f4f59a6ac0847daadd6d937400ae2e4ad92e3->leave($__internal_57b316494a11c4e00e87d454c22f4f59a6ac0847daadd6d937400ae2e4ad92e3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d01fc6eed97e1afe9d3c88fcd250b56617371bcfe06917c08ed21f28dc2014ef = $this->env->getExtension("native_profiler");
        $__internal_d01fc6eed97e1afe9d3c88fcd250b56617371bcfe06917c08ed21f28dc2014ef->enter($__internal_d01fc6eed97e1afe9d3c88fcd250b56617371bcfe06917c08ed21f28dc2014ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d01fc6eed97e1afe9d3c88fcd250b56617371bcfe06917c08ed21f28dc2014ef->leave($__internal_d01fc6eed97e1afe9d3c88fcd250b56617371bcfe06917c08ed21f28dc2014ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
