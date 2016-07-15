<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7eb04f1e8a86b0cb62f74f7339a76af3d13beab8d4409209359b6c66a6b746c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9bc79446d7ba30e078dfc2a4c56b387cc98ba06fd9b1a326fbaa176179514fc6 = $this->env->getExtension("native_profiler");
        $__internal_9bc79446d7ba30e078dfc2a4c56b387cc98ba06fd9b1a326fbaa176179514fc6->enter($__internal_9bc79446d7ba30e078dfc2a4c56b387cc98ba06fd9b1a326fbaa176179514fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bc79446d7ba30e078dfc2a4c56b387cc98ba06fd9b1a326fbaa176179514fc6->leave($__internal_9bc79446d7ba30e078dfc2a4c56b387cc98ba06fd9b1a326fbaa176179514fc6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ff7231c69294ec3b860aec81a0d6ac97ba5ce0b3e5230123e16c2bc87493085 = $this->env->getExtension("native_profiler");
        $__internal_1ff7231c69294ec3b860aec81a0d6ac97ba5ce0b3e5230123e16c2bc87493085->enter($__internal_1ff7231c69294ec3b860aec81a0d6ac97ba5ce0b3e5230123e16c2bc87493085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1ff7231c69294ec3b860aec81a0d6ac97ba5ce0b3e5230123e16c2bc87493085->leave($__internal_1ff7231c69294ec3b860aec81a0d6ac97ba5ce0b3e5230123e16c2bc87493085_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fa25f8c2ca0a5c18b368e6357da1b11f26e84e98271a6b12d18a270f6c7560b = $this->env->getExtension("native_profiler");
        $__internal_7fa25f8c2ca0a5c18b368e6357da1b11f26e84e98271a6b12d18a270f6c7560b->enter($__internal_7fa25f8c2ca0a5c18b368e6357da1b11f26e84e98271a6b12d18a270f6c7560b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7fa25f8c2ca0a5c18b368e6357da1b11f26e84e98271a6b12d18a270f6c7560b->leave($__internal_7fa25f8c2ca0a5c18b368e6357da1b11f26e84e98271a6b12d18a270f6c7560b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f54077ff1086aafe2ccfc0370299594bd3b2741684bc70f36d38d7653010841 = $this->env->getExtension("native_profiler");
        $__internal_2f54077ff1086aafe2ccfc0370299594bd3b2741684bc70f36d38d7653010841->enter($__internal_2f54077ff1086aafe2ccfc0370299594bd3b2741684bc70f36d38d7653010841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2f54077ff1086aafe2ccfc0370299594bd3b2741684bc70f36d38d7653010841->leave($__internal_2f54077ff1086aafe2ccfc0370299594bd3b2741684bc70f36d38d7653010841_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
