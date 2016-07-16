<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_542543d8f92e52c64676e3eb68162880c933820fabc6d549ff278aadb24db205 extends Twig_Template
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
        $__internal_1786f9fb8998af279d80bde01603bff14b1cdc0d432fed815ff5ff10079f4314 = $this->env->getExtension("native_profiler");
        $__internal_1786f9fb8998af279d80bde01603bff14b1cdc0d432fed815ff5ff10079f4314->enter($__internal_1786f9fb8998af279d80bde01603bff14b1cdc0d432fed815ff5ff10079f4314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1786f9fb8998af279d80bde01603bff14b1cdc0d432fed815ff5ff10079f4314->leave($__internal_1786f9fb8998af279d80bde01603bff14b1cdc0d432fed815ff5ff10079f4314_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0bb6c1d91cd4d1eff0afacb3304dc448d6d7f623580465da3d58f90166cd7717 = $this->env->getExtension("native_profiler");
        $__internal_0bb6c1d91cd4d1eff0afacb3304dc448d6d7f623580465da3d58f90166cd7717->enter($__internal_0bb6c1d91cd4d1eff0afacb3304dc448d6d7f623580465da3d58f90166cd7717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0bb6c1d91cd4d1eff0afacb3304dc448d6d7f623580465da3d58f90166cd7717->leave($__internal_0bb6c1d91cd4d1eff0afacb3304dc448d6d7f623580465da3d58f90166cd7717_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0f48c33eeafabf11e99c25d79308a76c2ae19d180e2d9a29e2323bc6804f7b88 = $this->env->getExtension("native_profiler");
        $__internal_0f48c33eeafabf11e99c25d79308a76c2ae19d180e2d9a29e2323bc6804f7b88->enter($__internal_0f48c33eeafabf11e99c25d79308a76c2ae19d180e2d9a29e2323bc6804f7b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0f48c33eeafabf11e99c25d79308a76c2ae19d180e2d9a29e2323bc6804f7b88->leave($__internal_0f48c33eeafabf11e99c25d79308a76c2ae19d180e2d9a29e2323bc6804f7b88_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0509c2428ad28b7caf2a684f6991875f274057dcba424ea4afe8bee9cb4f6fd2 = $this->env->getExtension("native_profiler");
        $__internal_0509c2428ad28b7caf2a684f6991875f274057dcba424ea4afe8bee9cb4f6fd2->enter($__internal_0509c2428ad28b7caf2a684f6991875f274057dcba424ea4afe8bee9cb4f6fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0509c2428ad28b7caf2a684f6991875f274057dcba424ea4afe8bee9cb4f6fd2->leave($__internal_0509c2428ad28b7caf2a684f6991875f274057dcba424ea4afe8bee9cb4f6fd2_prof);

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
