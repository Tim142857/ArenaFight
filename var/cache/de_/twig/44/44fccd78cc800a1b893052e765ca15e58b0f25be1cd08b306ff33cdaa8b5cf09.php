<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c9d1e7356dd4a5835c1232c930f7984309b0dd7e8c73801653b86855c74d0feb extends Twig_Template
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
        $__internal_bf62abe35d7f9431abe1d8735d0818966ee3ddc088193a5d347ec56779d79a49 = $this->env->getExtension("native_profiler");
        $__internal_bf62abe35d7f9431abe1d8735d0818966ee3ddc088193a5d347ec56779d79a49->enter($__internal_bf62abe35d7f9431abe1d8735d0818966ee3ddc088193a5d347ec56779d79a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_bf62abe35d7f9431abe1d8735d0818966ee3ddc088193a5d347ec56779d79a49->leave($__internal_bf62abe35d7f9431abe1d8735d0818966ee3ddc088193a5d347ec56779d79a49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
