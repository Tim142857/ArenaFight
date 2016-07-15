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
        $__internal_68058e343a10a9a8546c6b15504a530a24eb8da0c1f336df31e9b2c8fbedfddb = $this->env->getExtension("native_profiler");
        $__internal_68058e343a10a9a8546c6b15504a530a24eb8da0c1f336df31e9b2c8fbedfddb->enter($__internal_68058e343a10a9a8546c6b15504a530a24eb8da0c1f336df31e9b2c8fbedfddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68058e343a10a9a8546c6b15504a530a24eb8da0c1f336df31e9b2c8fbedfddb->leave($__internal_68058e343a10a9a8546c6b15504a530a24eb8da0c1f336df31e9b2c8fbedfddb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2906e3fcd68f0a7a98d21ebb0870cea4d0b7cedc90a6ed364e23e393d8b18847 = $this->env->getExtension("native_profiler");
        $__internal_2906e3fcd68f0a7a98d21ebb0870cea4d0b7cedc90a6ed364e23e393d8b18847->enter($__internal_2906e3fcd68f0a7a98d21ebb0870cea4d0b7cedc90a6ed364e23e393d8b18847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2906e3fcd68f0a7a98d21ebb0870cea4d0b7cedc90a6ed364e23e393d8b18847->leave($__internal_2906e3fcd68f0a7a98d21ebb0870cea4d0b7cedc90a6ed364e23e393d8b18847_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9a48d2b9a5cd0893720c9787fb1cb54a66e15a19386490bd424db526e7911a7 = $this->env->getExtension("native_profiler");
        $__internal_f9a48d2b9a5cd0893720c9787fb1cb54a66e15a19386490bd424db526e7911a7->enter($__internal_f9a48d2b9a5cd0893720c9787fb1cb54a66e15a19386490bd424db526e7911a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9a48d2b9a5cd0893720c9787fb1cb54a66e15a19386490bd424db526e7911a7->leave($__internal_f9a48d2b9a5cd0893720c9787fb1cb54a66e15a19386490bd424db526e7911a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8e0d7014dc575fd22b0bbb280bf79f83fa46568cbe0b3215211a1d68d60e3fe = $this->env->getExtension("native_profiler");
        $__internal_f8e0d7014dc575fd22b0bbb280bf79f83fa46568cbe0b3215211a1d68d60e3fe->enter($__internal_f8e0d7014dc575fd22b0bbb280bf79f83fa46568cbe0b3215211a1d68d60e3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f8e0d7014dc575fd22b0bbb280bf79f83fa46568cbe0b3215211a1d68d60e3fe->leave($__internal_f8e0d7014dc575fd22b0bbb280bf79f83fa46568cbe0b3215211a1d68d60e3fe_prof);

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
