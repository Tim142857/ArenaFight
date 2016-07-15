<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_1e9ecaf19a80335cd9b43ffcd307cbe999dee4f83ee306f4be58c391c3e6c37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5533e15583ae51bd35bfde02cd0f5980b3e854e3266ee1ba75eeb0138faa1663 = $this->env->getExtension("native_profiler");
        $__internal_5533e15583ae51bd35bfde02cd0f5980b3e854e3266ee1ba75eeb0138faa1663->enter($__internal_5533e15583ae51bd35bfde02cd0f5980b3e854e3266ee1ba75eeb0138faa1663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5533e15583ae51bd35bfde02cd0f5980b3e854e3266ee1ba75eeb0138faa1663->leave($__internal_5533e15583ae51bd35bfde02cd0f5980b3e854e3266ee1ba75eeb0138faa1663_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
