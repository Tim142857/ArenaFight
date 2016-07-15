<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8a6d6dd7413f6fa6a25f37ec592f4ab14eb94a817e06884b37207714a6bcc445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b14b4dbc2e4c7cd2e6b7929a18963e16d96e9ebfb5ad2367899dca46c145926 = $this->env->getExtension("native_profiler");
        $__internal_9b14b4dbc2e4c7cd2e6b7929a18963e16d96e9ebfb5ad2367899dca46c145926->enter($__internal_9b14b4dbc2e4c7cd2e6b7929a18963e16d96e9ebfb5ad2367899dca46c145926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9b14b4dbc2e4c7cd2e6b7929a18963e16d96e9ebfb5ad2367899dca46c145926->leave($__internal_9b14b4dbc2e4c7cd2e6b7929a18963e16d96e9ebfb5ad2367899dca46c145926_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
