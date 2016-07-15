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
        $__internal_cad3c4484f20b67fb7e123e7d45f7db08deefc096912190a32f2dc26489e07c8 = $this->env->getExtension("native_profiler");
        $__internal_cad3c4484f20b67fb7e123e7d45f7db08deefc096912190a32f2dc26489e07c8->enter($__internal_cad3c4484f20b67fb7e123e7d45f7db08deefc096912190a32f2dc26489e07c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_cad3c4484f20b67fb7e123e7d45f7db08deefc096912190a32f2dc26489e07c8->leave($__internal_cad3c4484f20b67fb7e123e7d45f7db08deefc096912190a32f2dc26489e07c8_prof);

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
