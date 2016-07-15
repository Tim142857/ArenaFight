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
        $__internal_f8cbf85f23d53f0b527a0636c86db60548593e6fb8d765ed241ac130d5f9221f = $this->env->getExtension("native_profiler");
        $__internal_f8cbf85f23d53f0b527a0636c86db60548593e6fb8d765ed241ac130d5f9221f->enter($__internal_f8cbf85f23d53f0b527a0636c86db60548593e6fb8d765ed241ac130d5f9221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f8cbf85f23d53f0b527a0636c86db60548593e6fb8d765ed241ac130d5f9221f->leave($__internal_f8cbf85f23d53f0b527a0636c86db60548593e6fb8d765ed241ac130d5f9221f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_31716f30d359683f9767805518c0b81d43c51013eabc1475e472193f3a90fa9b = $this->env->getExtension("native_profiler");
        $__internal_31716f30d359683f9767805518c0b81d43c51013eabc1475e472193f3a90fa9b->enter($__internal_31716f30d359683f9767805518c0b81d43c51013eabc1475e472193f3a90fa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_31716f30d359683f9767805518c0b81d43c51013eabc1475e472193f3a90fa9b->leave($__internal_31716f30d359683f9767805518c0b81d43c51013eabc1475e472193f3a90fa9b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19b1dc1918198d8f5f4535024caeb104c465cfed271b70e25674f93932203bcb = $this->env->getExtension("native_profiler");
        $__internal_19b1dc1918198d8f5f4535024caeb104c465cfed271b70e25674f93932203bcb->enter($__internal_19b1dc1918198d8f5f4535024caeb104c465cfed271b70e25674f93932203bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_19b1dc1918198d8f5f4535024caeb104c465cfed271b70e25674f93932203bcb->leave($__internal_19b1dc1918198d8f5f4535024caeb104c465cfed271b70e25674f93932203bcb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eab964a5126acbf93320803b6c28149d81450c4f5cc57a15ad56b89bd6dbc99e = $this->env->getExtension("native_profiler");
        $__internal_eab964a5126acbf93320803b6c28149d81450c4f5cc57a15ad56b89bd6dbc99e->enter($__internal_eab964a5126acbf93320803b6c28149d81450c4f5cc57a15ad56b89bd6dbc99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eab964a5126acbf93320803b6c28149d81450c4f5cc57a15ad56b89bd6dbc99e->leave($__internal_eab964a5126acbf93320803b6c28149d81450c4f5cc57a15ad56b89bd6dbc99e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba86f6210efd2d9212a73edb6b5785bc81e32fe0853e39126c304478418ebd68 = $this->env->getExtension("native_profiler");
        $__internal_ba86f6210efd2d9212a73edb6b5785bc81e32fe0853e39126c304478418ebd68->enter($__internal_ba86f6210efd2d9212a73edb6b5785bc81e32fe0853e39126c304478418ebd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba86f6210efd2d9212a73edb6b5785bc81e32fe0853e39126c304478418ebd68->leave($__internal_ba86f6210efd2d9212a73edb6b5785bc81e32fe0853e39126c304478418ebd68_prof);

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
