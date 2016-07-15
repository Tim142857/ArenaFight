<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_200be960ff6b73ac3941e53e0cd8435d394b69c1cc16be516cdc724995fedf48 extends Twig_Template
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
        $__internal_2b49e16a4df939be919603a70e38bb27b46aa50b779ead87255564c3954067a6 = $this->env->getExtension("native_profiler");
        $__internal_2b49e16a4df939be919603a70e38bb27b46aa50b779ead87255564c3954067a6->enter($__internal_2b49e16a4df939be919603a70e38bb27b46aa50b779ead87255564c3954067a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_2b49e16a4df939be919603a70e38bb27b46aa50b779ead87255564c3954067a6->leave($__internal_2b49e16a4df939be919603a70e38bb27b46aa50b779ead87255564c3954067a6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
