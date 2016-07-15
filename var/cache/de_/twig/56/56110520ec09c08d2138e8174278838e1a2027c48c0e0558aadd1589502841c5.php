<?php

/* ::base.html.twig */
class __TwigTemplate_f660f0f9ff7ea1b1980ea4ec65008bd34d5720299a88f39f36ded7f38f7227ea extends Twig_Template
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
        $__internal_7e4e67bbbfccc3246a05a01c7a157cb99116dd3802d234fea1581019158032de = $this->env->getExtension("native_profiler");
        $__internal_7e4e67bbbfccc3246a05a01c7a157cb99116dd3802d234fea1581019158032de->enter($__internal_7e4e67bbbfccc3246a05a01c7a157cb99116dd3802d234fea1581019158032de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7e4e67bbbfccc3246a05a01c7a157cb99116dd3802d234fea1581019158032de->leave($__internal_7e4e67bbbfccc3246a05a01c7a157cb99116dd3802d234fea1581019158032de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bed4d2c5f0efed76850a3ed494cab65ea140552e3b0eb81fdbbb46e0c9a1796f = $this->env->getExtension("native_profiler");
        $__internal_bed4d2c5f0efed76850a3ed494cab65ea140552e3b0eb81fdbbb46e0c9a1796f->enter($__internal_bed4d2c5f0efed76850a3ed494cab65ea140552e3b0eb81fdbbb46e0c9a1796f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bed4d2c5f0efed76850a3ed494cab65ea140552e3b0eb81fdbbb46e0c9a1796f->leave($__internal_bed4d2c5f0efed76850a3ed494cab65ea140552e3b0eb81fdbbb46e0c9a1796f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a4ddcdc9f030fad07ca83ed7b7837677f1c9fa815c57d6d933e5acd62db4eb3 = $this->env->getExtension("native_profiler");
        $__internal_8a4ddcdc9f030fad07ca83ed7b7837677f1c9fa815c57d6d933e5acd62db4eb3->enter($__internal_8a4ddcdc9f030fad07ca83ed7b7837677f1c9fa815c57d6d933e5acd62db4eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8a4ddcdc9f030fad07ca83ed7b7837677f1c9fa815c57d6d933e5acd62db4eb3->leave($__internal_8a4ddcdc9f030fad07ca83ed7b7837677f1c9fa815c57d6d933e5acd62db4eb3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd744534365c4d915a13a18305fe16291de9f8c59fbee7045da5002a4672c57f = $this->env->getExtension("native_profiler");
        $__internal_bd744534365c4d915a13a18305fe16291de9f8c59fbee7045da5002a4672c57f->enter($__internal_bd744534365c4d915a13a18305fe16291de9f8c59fbee7045da5002a4672c57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd744534365c4d915a13a18305fe16291de9f8c59fbee7045da5002a4672c57f->leave($__internal_bd744534365c4d915a13a18305fe16291de9f8c59fbee7045da5002a4672c57f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3963378a2e6ea2cf3a27e67799fae6423cdac4b6f412b57bf45ab2342110838b = $this->env->getExtension("native_profiler");
        $__internal_3963378a2e6ea2cf3a27e67799fae6423cdac4b6f412b57bf45ab2342110838b->enter($__internal_3963378a2e6ea2cf3a27e67799fae6423cdac4b6f412b57bf45ab2342110838b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3963378a2e6ea2cf3a27e67799fae6423cdac4b6f412b57bf45ab2342110838b->leave($__internal_3963378a2e6ea2cf3a27e67799fae6423cdac4b6f412b57bf45ab2342110838b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
