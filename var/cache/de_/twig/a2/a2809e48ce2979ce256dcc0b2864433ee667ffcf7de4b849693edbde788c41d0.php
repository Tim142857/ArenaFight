<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_61809c770258b12c2d439e83f531680012a5b47f67c871bdb4c9f1a34b9fff01 extends Twig_Template
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
        $__internal_116560977cafb95cac6c698fbd0dcb8a1d633d859a977180748555bd7f70326c = $this->env->getExtension("native_profiler");
        $__internal_116560977cafb95cac6c698fbd0dcb8a1d633d859a977180748555bd7f70326c->enter($__internal_116560977cafb95cac6c698fbd0dcb8a1d633d859a977180748555bd7f70326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_116560977cafb95cac6c698fbd0dcb8a1d633d859a977180748555bd7f70326c->leave($__internal_116560977cafb95cac6c698fbd0dcb8a1d633d859a977180748555bd7f70326c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
