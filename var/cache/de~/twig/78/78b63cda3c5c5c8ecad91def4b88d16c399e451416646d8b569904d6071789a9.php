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
        $__internal_6acf5e029fb95a8ea6b3d60f8d2174f22b9c4984c5ee1e1a955cb1dca0053ad1 = $this->env->getExtension("native_profiler");
        $__internal_6acf5e029fb95a8ea6b3d60f8d2174f22b9c4984c5ee1e1a955cb1dca0053ad1->enter($__internal_6acf5e029fb95a8ea6b3d60f8d2174f22b9c4984c5ee1e1a955cb1dca0053ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6acf5e029fb95a8ea6b3d60f8d2174f22b9c4984c5ee1e1a955cb1dca0053ad1->leave($__internal_6acf5e029fb95a8ea6b3d60f8d2174f22b9c4984c5ee1e1a955cb1dca0053ad1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_946ff1f4fa0342c71ecb53b265bb08141cbf121e844a016288894eb7db3f9a56 = $this->env->getExtension("native_profiler");
        $__internal_946ff1f4fa0342c71ecb53b265bb08141cbf121e844a016288894eb7db3f9a56->enter($__internal_946ff1f4fa0342c71ecb53b265bb08141cbf121e844a016288894eb7db3f9a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_946ff1f4fa0342c71ecb53b265bb08141cbf121e844a016288894eb7db3f9a56->leave($__internal_946ff1f4fa0342c71ecb53b265bb08141cbf121e844a016288894eb7db3f9a56_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d20ce39d850704ddb05624d6bfcf41bae9cf6ad38432c12e6cdb5adf2a28141b = $this->env->getExtension("native_profiler");
        $__internal_d20ce39d850704ddb05624d6bfcf41bae9cf6ad38432c12e6cdb5adf2a28141b->enter($__internal_d20ce39d850704ddb05624d6bfcf41bae9cf6ad38432c12e6cdb5adf2a28141b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d20ce39d850704ddb05624d6bfcf41bae9cf6ad38432c12e6cdb5adf2a28141b->leave($__internal_d20ce39d850704ddb05624d6bfcf41bae9cf6ad38432c12e6cdb5adf2a28141b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9c6835a3d16fbfd65d48da78368edb3d66838e9f67fad38ff46193e74f1867b = $this->env->getExtension("native_profiler");
        $__internal_e9c6835a3d16fbfd65d48da78368edb3d66838e9f67fad38ff46193e74f1867b->enter($__internal_e9c6835a3d16fbfd65d48da78368edb3d66838e9f67fad38ff46193e74f1867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e9c6835a3d16fbfd65d48da78368edb3d66838e9f67fad38ff46193e74f1867b->leave($__internal_e9c6835a3d16fbfd65d48da78368edb3d66838e9f67fad38ff46193e74f1867b_prof);

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
