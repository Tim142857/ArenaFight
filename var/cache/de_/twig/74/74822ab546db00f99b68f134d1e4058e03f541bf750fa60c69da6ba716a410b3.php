<?php

/* base.html.twig */
class __TwigTemplate_14fb6bd04d026231749c45bfaa54159976ad9f3dc3961e41d1db9fb634a79e0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd8682cc813a1f64f6528e9f90dd07f681d7933c68f7e75b4da237b82aa8329c = $this->env->getExtension("native_profiler");
        $__internal_bd8682cc813a1f64f6528e9f90dd07f681d7933c68f7e75b4da237b82aa8329c->enter($__internal_bd8682cc813a1f64f6528e9f90dd07f681d7933c68f7e75b4da237b82aa8329c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bd8682cc813a1f64f6528e9f90dd07f681d7933c68f7e75b4da237b82aa8329c->leave($__internal_bd8682cc813a1f64f6528e9f90dd07f681d7933c68f7e75b4da237b82aa8329c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63bfbf02fbd657af1f88d42e4227600e30f039f388b86267e8fe0e72ebec0792 = $this->env->getExtension("native_profiler");
        $__internal_63bfbf02fbd657af1f88d42e4227600e30f039f388b86267e8fe0e72ebec0792->enter($__internal_63bfbf02fbd657af1f88d42e4227600e30f039f388b86267e8fe0e72ebec0792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_63bfbf02fbd657af1f88d42e4227600e30f039f388b86267e8fe0e72ebec0792->leave($__internal_63bfbf02fbd657af1f88d42e4227600e30f039f388b86267e8fe0e72ebec0792_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03387534cedbb473aefdd4fb005263c7b9f5871e5d32a8bc8fef330ff79b2d2d = $this->env->getExtension("native_profiler");
        $__internal_03387534cedbb473aefdd4fb005263c7b9f5871e5d32a8bc8fef330ff79b2d2d->enter($__internal_03387534cedbb473aefdd4fb005263c7b9f5871e5d32a8bc8fef330ff79b2d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_03387534cedbb473aefdd4fb005263c7b9f5871e5d32a8bc8fef330ff79b2d2d->leave($__internal_03387534cedbb473aefdd4fb005263c7b9f5871e5d32a8bc8fef330ff79b2d2d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_94fb175555904d0a19e3ffc7c321627c678693385551b8f33c0564c98b8bd23c = $this->env->getExtension("native_profiler");
        $__internal_94fb175555904d0a19e3ffc7c321627c678693385551b8f33c0564c98b8bd23c->enter($__internal_94fb175555904d0a19e3ffc7c321627c678693385551b8f33c0564c98b8bd23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_94fb175555904d0a19e3ffc7c321627c678693385551b8f33c0564c98b8bd23c->leave($__internal_94fb175555904d0a19e3ffc7c321627c678693385551b8f33c0564c98b8bd23c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52c7cd16884d6c5e407b5c620cf53da6a2f73bfa0fcf6b57f90da6b77ae51d6f = $this->env->getExtension("native_profiler");
        $__internal_52c7cd16884d6c5e407b5c620cf53da6a2f73bfa0fcf6b57f90da6b77ae51d6f->enter($__internal_52c7cd16884d6c5e407b5c620cf53da6a2f73bfa0fcf6b57f90da6b77ae51d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52c7cd16884d6c5e407b5c620cf53da6a2f73bfa0fcf6b57f90da6b77ae51d6f->leave($__internal_52c7cd16884d6c5e407b5c620cf53da6a2f73bfa0fcf6b57f90da6b77ae51d6f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
