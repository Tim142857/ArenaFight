<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_470f1f18794016aafab559d2289fc6d5d8da1c963f71b76eb47ca90ff6ea3fdf extends Twig_Template
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
        $__internal_c46eb65c58492bc5b514b1bc11808df39b305dc2a2ff04e581b313c5053595b2 = $this->env->getExtension("native_profiler");
        $__internal_c46eb65c58492bc5b514b1bc11808df39b305dc2a2ff04e581b313c5053595b2->enter($__internal_c46eb65c58492bc5b514b1bc11808df39b305dc2a2ff04e581b313c5053595b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c46eb65c58492bc5b514b1bc11808df39b305dc2a2ff04e581b313c5053595b2->leave($__internal_c46eb65c58492bc5b514b1bc11808df39b305dc2a2ff04e581b313c5053595b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
