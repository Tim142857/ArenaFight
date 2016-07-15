<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_39b1db2c56a2d903c8849e5964abe654d51c3e940341046fb9bbce35c7d216a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_78fff7a3dbd6cb361905452dd48689e49f988c301f178baee131a5fe939c5fc6 = $this->env->getExtension("native_profiler");
        $__internal_78fff7a3dbd6cb361905452dd48689e49f988c301f178baee131a5fe939c5fc6->enter($__internal_78fff7a3dbd6cb361905452dd48689e49f988c301f178baee131a5fe939c5fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78fff7a3dbd6cb361905452dd48689e49f988c301f178baee131a5fe939c5fc6->leave($__internal_78fff7a3dbd6cb361905452dd48689e49f988c301f178baee131a5fe939c5fc6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_656c0293fb69fd4e03f31579331fa6c9c6cc9abc25ec34d706eb3417a6502f53 = $this->env->getExtension("native_profiler");
        $__internal_656c0293fb69fd4e03f31579331fa6c9c6cc9abc25ec34d706eb3417a6502f53->enter($__internal_656c0293fb69fd4e03f31579331fa6c9c6cc9abc25ec34d706eb3417a6502f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_656c0293fb69fd4e03f31579331fa6c9c6cc9abc25ec34d706eb3417a6502f53->leave($__internal_656c0293fb69fd4e03f31579331fa6c9c6cc9abc25ec34d706eb3417a6502f53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd0021a33b136420f43d634fb3b7392098d61e8de36f699aa55e5c4c81a83ea2 = $this->env->getExtension("native_profiler");
        $__internal_bd0021a33b136420f43d634fb3b7392098d61e8de36f699aa55e5c4c81a83ea2->enter($__internal_bd0021a33b136420f43d634fb3b7392098d61e8de36f699aa55e5c4c81a83ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd0021a33b136420f43d634fb3b7392098d61e8de36f699aa55e5c4c81a83ea2->leave($__internal_bd0021a33b136420f43d634fb3b7392098d61e8de36f699aa55e5c4c81a83ea2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec511b8b70a1cc1bd01a851361d62af3b5b69cd24c282083531c8266158bb016 = $this->env->getExtension("native_profiler");
        $__internal_ec511b8b70a1cc1bd01a851361d62af3b5b69cd24c282083531c8266158bb016->enter($__internal_ec511b8b70a1cc1bd01a851361d62af3b5b69cd24c282083531c8266158bb016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec511b8b70a1cc1bd01a851361d62af3b5b69cd24c282083531c8266158bb016->leave($__internal_ec511b8b70a1cc1bd01a851361d62af3b5b69cd24c282083531c8266158bb016_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
