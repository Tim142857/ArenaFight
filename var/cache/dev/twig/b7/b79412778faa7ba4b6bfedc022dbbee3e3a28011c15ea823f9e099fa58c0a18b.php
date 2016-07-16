<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d56ae02cd62d4533ad25e366fc6b2751c9a38c918308c26ddde714311b72a98c extends Twig_Template
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
        $__internal_20e8bac5eed45b1fba4df1d8d7d4b31064e406a889945b8453549778db67f108 = $this->env->getExtension("native_profiler");
        $__internal_20e8bac5eed45b1fba4df1d8d7d4b31064e406a889945b8453549778db67f108->enter($__internal_20e8bac5eed45b1fba4df1d8d7d4b31064e406a889945b8453549778db67f108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_20e8bac5eed45b1fba4df1d8d7d4b31064e406a889945b8453549778db67f108->leave($__internal_20e8bac5eed45b1fba4df1d8d7d4b31064e406a889945b8453549778db67f108_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
