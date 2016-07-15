<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_930c929db4107684165a4057490f13c3742fdf8e60e7bccf44afa02a8db4d747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fe7021ad23344c21bb33a415f0cdf98a6f8a103137ad50796f2957d84ba95ae = $this->env->getExtension("native_profiler");
        $__internal_7fe7021ad23344c21bb33a415f0cdf98a6f8a103137ad50796f2957d84ba95ae->enter($__internal_7fe7021ad23344c21bb33a415f0cdf98a6f8a103137ad50796f2957d84ba95ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe7021ad23344c21bb33a415f0cdf98a6f8a103137ad50796f2957d84ba95ae->leave($__internal_7fe7021ad23344c21bb33a415f0cdf98a6f8a103137ad50796f2957d84ba95ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13285fc6214a33f8432b43c9841c84f42af5ecccfb68d800ffbb75e875f2a193 = $this->env->getExtension("native_profiler");
        $__internal_13285fc6214a33f8432b43c9841c84f42af5ecccfb68d800ffbb75e875f2a193->enter($__internal_13285fc6214a33f8432b43c9841c84f42af5ecccfb68d800ffbb75e875f2a193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_13285fc6214a33f8432b43c9841c84f42af5ecccfb68d800ffbb75e875f2a193->leave($__internal_13285fc6214a33f8432b43c9841c84f42af5ecccfb68d800ffbb75e875f2a193_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d13d655276eb934ccbd432ed063dd7a6155f9f668ac4d801b25d2b3e46843f7a = $this->env->getExtension("native_profiler");
        $__internal_d13d655276eb934ccbd432ed063dd7a6155f9f668ac4d801b25d2b3e46843f7a->enter($__internal_d13d655276eb934ccbd432ed063dd7a6155f9f668ac4d801b25d2b3e46843f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d13d655276eb934ccbd432ed063dd7a6155f9f668ac4d801b25d2b3e46843f7a->leave($__internal_d13d655276eb934ccbd432ed063dd7a6155f9f668ac4d801b25d2b3e46843f7a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_177aafaa674f5e050f38e144a0aa3a0f01aef192030469ebd31eb65611214005 = $this->env->getExtension("native_profiler");
        $__internal_177aafaa674f5e050f38e144a0aa3a0f01aef192030469ebd31eb65611214005->enter($__internal_177aafaa674f5e050f38e144a0aa3a0f01aef192030469ebd31eb65611214005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_177aafaa674f5e050f38e144a0aa3a0f01aef192030469ebd31eb65611214005->leave($__internal_177aafaa674f5e050f38e144a0aa3a0f01aef192030469ebd31eb65611214005_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
