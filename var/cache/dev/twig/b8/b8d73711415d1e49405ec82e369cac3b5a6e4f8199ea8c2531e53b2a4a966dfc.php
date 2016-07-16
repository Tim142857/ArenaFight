<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8b7e2ec008b0cc56fdf7ae5e4cf42f05aee43e16b987b9c27d7bbe6f813d3c23 extends Twig_Template
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
        $__internal_43e4cf0ce5eec2944d01dd8d94cb41d1889fb956b813db592c66a3f89a9e4e4d = $this->env->getExtension("native_profiler");
        $__internal_43e4cf0ce5eec2944d01dd8d94cb41d1889fb956b813db592c66a3f89a9e4e4d->enter($__internal_43e4cf0ce5eec2944d01dd8d94cb41d1889fb956b813db592c66a3f89a9e4e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43e4cf0ce5eec2944d01dd8d94cb41d1889fb956b813db592c66a3f89a9e4e4d->leave($__internal_43e4cf0ce5eec2944d01dd8d94cb41d1889fb956b813db592c66a3f89a9e4e4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
