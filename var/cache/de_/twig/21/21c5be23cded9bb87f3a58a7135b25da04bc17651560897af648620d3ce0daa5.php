<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4f98373b91f9d4c2e3e1e390a030d0f03e4be58440db0c2aa0f01578e9e1d983 extends Twig_Template
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
        $__internal_2cb1691f35cfcf08738551ebd8e25d5d113a4961898f24dba6865f7128a23691 = $this->env->getExtension("native_profiler");
        $__internal_2cb1691f35cfcf08738551ebd8e25d5d113a4961898f24dba6865f7128a23691->enter($__internal_2cb1691f35cfcf08738551ebd8e25d5d113a4961898f24dba6865f7128a23691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2cb1691f35cfcf08738551ebd8e25d5d113a4961898f24dba6865f7128a23691->leave($__internal_2cb1691f35cfcf08738551ebd8e25d5d113a4961898f24dba6865f7128a23691_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
