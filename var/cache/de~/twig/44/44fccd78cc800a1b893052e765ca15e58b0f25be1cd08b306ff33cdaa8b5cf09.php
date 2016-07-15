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
        $__internal_131499c75e613a5ffa76c7dfeb3027b4acf8b87401fe1ae37deddcc5a0bcd820 = $this->env->getExtension("native_profiler");
        $__internal_131499c75e613a5ffa76c7dfeb3027b4acf8b87401fe1ae37deddcc5a0bcd820->enter($__internal_131499c75e613a5ffa76c7dfeb3027b4acf8b87401fe1ae37deddcc5a0bcd820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_131499c75e613a5ffa76c7dfeb3027b4acf8b87401fe1ae37deddcc5a0bcd820->leave($__internal_131499c75e613a5ffa76c7dfeb3027b4acf8b87401fe1ae37deddcc5a0bcd820_prof);

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
