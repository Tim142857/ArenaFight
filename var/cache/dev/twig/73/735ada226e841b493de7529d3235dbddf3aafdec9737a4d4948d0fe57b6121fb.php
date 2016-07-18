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
        $__internal_4b1ada3a362354ab50ab6a77d016d839b35826ea5d6226e2a981395fb140d59c = $this->env->getExtension("native_profiler");
        $__internal_4b1ada3a362354ab50ab6a77d016d839b35826ea5d6226e2a981395fb140d59c->enter($__internal_4b1ada3a362354ab50ab6a77d016d839b35826ea5d6226e2a981395fb140d59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1ada3a362354ab50ab6a77d016d839b35826ea5d6226e2a981395fb140d59c->leave($__internal_4b1ada3a362354ab50ab6a77d016d839b35826ea5d6226e2a981395fb140d59c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de9ba5080c24e4ad04b67ee98d3f85b215f40e585a58430d112210e4c5391cb2 = $this->env->getExtension("native_profiler");
        $__internal_de9ba5080c24e4ad04b67ee98d3f85b215f40e585a58430d112210e4c5391cb2->enter($__internal_de9ba5080c24e4ad04b67ee98d3f85b215f40e585a58430d112210e4c5391cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de9ba5080c24e4ad04b67ee98d3f85b215f40e585a58430d112210e4c5391cb2->leave($__internal_de9ba5080c24e4ad04b67ee98d3f85b215f40e585a58430d112210e4c5391cb2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcad681b5249ca94590f61a5b4551fc5c50d15dd889e51e4c8fd14b83c7c7fb2 = $this->env->getExtension("native_profiler");
        $__internal_dcad681b5249ca94590f61a5b4551fc5c50d15dd889e51e4c8fd14b83c7c7fb2->enter($__internal_dcad681b5249ca94590f61a5b4551fc5c50d15dd889e51e4c8fd14b83c7c7fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dcad681b5249ca94590f61a5b4551fc5c50d15dd889e51e4c8fd14b83c7c7fb2->leave($__internal_dcad681b5249ca94590f61a5b4551fc5c50d15dd889e51e4c8fd14b83c7c7fb2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0036cb97c3c16207aa059e6ed12044b4c4c41353c675ff1025a41138e2018b95 = $this->env->getExtension("native_profiler");
        $__internal_0036cb97c3c16207aa059e6ed12044b4c4c41353c675ff1025a41138e2018b95->enter($__internal_0036cb97c3c16207aa059e6ed12044b4c4c41353c675ff1025a41138e2018b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0036cb97c3c16207aa059e6ed12044b4c4c41353c675ff1025a41138e2018b95->leave($__internal_0036cb97c3c16207aa059e6ed12044b4c4c41353c675ff1025a41138e2018b95_prof);

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
