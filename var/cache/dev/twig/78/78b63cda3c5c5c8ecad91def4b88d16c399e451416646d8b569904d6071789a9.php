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
        $__internal_eebf672fae4ede58020adf95eadb59aa3b859771917abec1bcae59d32289adf8 = $this->env->getExtension("native_profiler");
        $__internal_eebf672fae4ede58020adf95eadb59aa3b859771917abec1bcae59d32289adf8->enter($__internal_eebf672fae4ede58020adf95eadb59aa3b859771917abec1bcae59d32289adf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eebf672fae4ede58020adf95eadb59aa3b859771917abec1bcae59d32289adf8->leave($__internal_eebf672fae4ede58020adf95eadb59aa3b859771917abec1bcae59d32289adf8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78860117510c485683c7985bdd73c8be16483fd024005542630f495bcb559422 = $this->env->getExtension("native_profiler");
        $__internal_78860117510c485683c7985bdd73c8be16483fd024005542630f495bcb559422->enter($__internal_78860117510c485683c7985bdd73c8be16483fd024005542630f495bcb559422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78860117510c485683c7985bdd73c8be16483fd024005542630f495bcb559422->leave($__internal_78860117510c485683c7985bdd73c8be16483fd024005542630f495bcb559422_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8e21fdc357212e7ca635be852f29814b4fad9c0b4558331dfd302459583fe94 = $this->env->getExtension("native_profiler");
        $__internal_e8e21fdc357212e7ca635be852f29814b4fad9c0b4558331dfd302459583fe94->enter($__internal_e8e21fdc357212e7ca635be852f29814b4fad9c0b4558331dfd302459583fe94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8e21fdc357212e7ca635be852f29814b4fad9c0b4558331dfd302459583fe94->leave($__internal_e8e21fdc357212e7ca635be852f29814b4fad9c0b4558331dfd302459583fe94_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a78c11974a6fb403aaa39927a7281394ffb1ad7714bb63e6673951696fa43a7 = $this->env->getExtension("native_profiler");
        $__internal_9a78c11974a6fb403aaa39927a7281394ffb1ad7714bb63e6673951696fa43a7->enter($__internal_9a78c11974a6fb403aaa39927a7281394ffb1ad7714bb63e6673951696fa43a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a78c11974a6fb403aaa39927a7281394ffb1ad7714bb63e6673951696fa43a7->leave($__internal_9a78c11974a6fb403aaa39927a7281394ffb1ad7714bb63e6673951696fa43a7_prof);

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
