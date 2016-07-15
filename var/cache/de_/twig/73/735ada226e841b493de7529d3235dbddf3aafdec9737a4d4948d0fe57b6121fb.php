<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_57da6e2cde32f47270e5234a2468e1dd80af977365e95d2de388dd034df3ca1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11cfb693c61a640376ad4ca10fbe3670df47cf23e1966957a18442c703944745 = $this->env->getExtension("native_profiler");
        $__internal_11cfb693c61a640376ad4ca10fbe3670df47cf23e1966957a18442c703944745->enter($__internal_11cfb693c61a640376ad4ca10fbe3670df47cf23e1966957a18442c703944745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11cfb693c61a640376ad4ca10fbe3670df47cf23e1966957a18442c703944745->leave($__internal_11cfb693c61a640376ad4ca10fbe3670df47cf23e1966957a18442c703944745_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50433d889811825563c3cedc79385cfb83668d10fd4a9650fba9b00323386ad1 = $this->env->getExtension("native_profiler");
        $__internal_50433d889811825563c3cedc79385cfb83668d10fd4a9650fba9b00323386ad1->enter($__internal_50433d889811825563c3cedc79385cfb83668d10fd4a9650fba9b00323386ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50433d889811825563c3cedc79385cfb83668d10fd4a9650fba9b00323386ad1->leave($__internal_50433d889811825563c3cedc79385cfb83668d10fd4a9650fba9b00323386ad1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2db15e767319c94007ebf599bb39a9d55b821b36e999060a8f531b14e0ac54f6 = $this->env->getExtension("native_profiler");
        $__internal_2db15e767319c94007ebf599bb39a9d55b821b36e999060a8f531b14e0ac54f6->enter($__internal_2db15e767319c94007ebf599bb39a9d55b821b36e999060a8f531b14e0ac54f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2db15e767319c94007ebf599bb39a9d55b821b36e999060a8f531b14e0ac54f6->leave($__internal_2db15e767319c94007ebf599bb39a9d55b821b36e999060a8f531b14e0ac54f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_998616b8df6b7d5e814a6594acdce3ad4d76c71f6e8c63a93183e93d64e363f4 = $this->env->getExtension("native_profiler");
        $__internal_998616b8df6b7d5e814a6594acdce3ad4d76c71f6e8c63a93183e93d64e363f4->enter($__internal_998616b8df6b7d5e814a6594acdce3ad4d76c71f6e8c63a93183e93d64e363f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_998616b8df6b7d5e814a6594acdce3ad4d76c71f6e8c63a93183e93d64e363f4->leave($__internal_998616b8df6b7d5e814a6594acdce3ad4d76c71f6e8c63a93183e93d64e363f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
