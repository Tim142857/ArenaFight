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
        $__internal_35b04e73f26dd10dc088100deb510fc20a90b02d3cf06e936a940d0eaff13f50 = $this->env->getExtension("native_profiler");
        $__internal_35b04e73f26dd10dc088100deb510fc20a90b02d3cf06e936a940d0eaff13f50->enter($__internal_35b04e73f26dd10dc088100deb510fc20a90b02d3cf06e936a940d0eaff13f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b04e73f26dd10dc088100deb510fc20a90b02d3cf06e936a940d0eaff13f50->leave($__internal_35b04e73f26dd10dc088100deb510fc20a90b02d3cf06e936a940d0eaff13f50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ec99fe63eb78dc362092a03eb76816e489db5a6d06bb2ff83947959f01986f6 = $this->env->getExtension("native_profiler");
        $__internal_7ec99fe63eb78dc362092a03eb76816e489db5a6d06bb2ff83947959f01986f6->enter($__internal_7ec99fe63eb78dc362092a03eb76816e489db5a6d06bb2ff83947959f01986f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ec99fe63eb78dc362092a03eb76816e489db5a6d06bb2ff83947959f01986f6->leave($__internal_7ec99fe63eb78dc362092a03eb76816e489db5a6d06bb2ff83947959f01986f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_840fd77e9d9395cc9a93536718db4c13037014bd6b617226326c870fe9bc6da2 = $this->env->getExtension("native_profiler");
        $__internal_840fd77e9d9395cc9a93536718db4c13037014bd6b617226326c870fe9bc6da2->enter($__internal_840fd77e9d9395cc9a93536718db4c13037014bd6b617226326c870fe9bc6da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_840fd77e9d9395cc9a93536718db4c13037014bd6b617226326c870fe9bc6da2->leave($__internal_840fd77e9d9395cc9a93536718db4c13037014bd6b617226326c870fe9bc6da2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_006e5afe05ae9fccf1d37876ce68e430c808c05dd96516beeee86ea2841d0767 = $this->env->getExtension("native_profiler");
        $__internal_006e5afe05ae9fccf1d37876ce68e430c808c05dd96516beeee86ea2841d0767->enter($__internal_006e5afe05ae9fccf1d37876ce68e430c808c05dd96516beeee86ea2841d0767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_006e5afe05ae9fccf1d37876ce68e430c808c05dd96516beeee86ea2841d0767->leave($__internal_006e5afe05ae9fccf1d37876ce68e430c808c05dd96516beeee86ea2841d0767_prof);

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
