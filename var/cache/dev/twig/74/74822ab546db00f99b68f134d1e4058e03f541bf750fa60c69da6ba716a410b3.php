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
        $__internal_f77d28f9f8c6953e8585a28effbeaffb111a1a64c861b1999580b42fc09a691a = $this->env->getExtension("native_profiler");
        $__internal_f77d28f9f8c6953e8585a28effbeaffb111a1a64c861b1999580b42fc09a691a->enter($__internal_f77d28f9f8c6953e8585a28effbeaffb111a1a64c861b1999580b42fc09a691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f77d28f9f8c6953e8585a28effbeaffb111a1a64c861b1999580b42fc09a691a->leave($__internal_f77d28f9f8c6953e8585a28effbeaffb111a1a64c861b1999580b42fc09a691a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d13da8201aafd5b33bb4da87f4d2151eb9862c43d76ce45c4dae4c8a36102b1b = $this->env->getExtension("native_profiler");
        $__internal_d13da8201aafd5b33bb4da87f4d2151eb9862c43d76ce45c4dae4c8a36102b1b->enter($__internal_d13da8201aafd5b33bb4da87f4d2151eb9862c43d76ce45c4dae4c8a36102b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d13da8201aafd5b33bb4da87f4d2151eb9862c43d76ce45c4dae4c8a36102b1b->leave($__internal_d13da8201aafd5b33bb4da87f4d2151eb9862c43d76ce45c4dae4c8a36102b1b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa6d27d1c4eb4cc9d15529d7254a1bc55d4a73fd717d3816d2a1d67cd4c513e1 = $this->env->getExtension("native_profiler");
        $__internal_fa6d27d1c4eb4cc9d15529d7254a1bc55d4a73fd717d3816d2a1d67cd4c513e1->enter($__internal_fa6d27d1c4eb4cc9d15529d7254a1bc55d4a73fd717d3816d2a1d67cd4c513e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa6d27d1c4eb4cc9d15529d7254a1bc55d4a73fd717d3816d2a1d67cd4c513e1->leave($__internal_fa6d27d1c4eb4cc9d15529d7254a1bc55d4a73fd717d3816d2a1d67cd4c513e1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_426ed4cd7682449c1974fa78fa85800518a543a2d03bd041c47c8109a9dcb377 = $this->env->getExtension("native_profiler");
        $__internal_426ed4cd7682449c1974fa78fa85800518a543a2d03bd041c47c8109a9dcb377->enter($__internal_426ed4cd7682449c1974fa78fa85800518a543a2d03bd041c47c8109a9dcb377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_426ed4cd7682449c1974fa78fa85800518a543a2d03bd041c47c8109a9dcb377->leave($__internal_426ed4cd7682449c1974fa78fa85800518a543a2d03bd041c47c8109a9dcb377_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b1ffd2a080ff408835d76914c17a6a69db7d266965710b2ad0d922e8ae01deb = $this->env->getExtension("native_profiler");
        $__internal_2b1ffd2a080ff408835d76914c17a6a69db7d266965710b2ad0d922e8ae01deb->enter($__internal_2b1ffd2a080ff408835d76914c17a6a69db7d266965710b2ad0d922e8ae01deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2b1ffd2a080ff408835d76914c17a6a69db7d266965710b2ad0d922e8ae01deb->leave($__internal_2b1ffd2a080ff408835d76914c17a6a69db7d266965710b2ad0d922e8ae01deb_prof);

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
