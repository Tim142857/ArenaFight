<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_094473744943d1f3bd9a42c6dd7523f72df7931b1a0608f9325f956edef6850c extends Twig_Template
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
        $__internal_8af24c273081489f4d1474f413fd6357fef66c5684b3989a17b43a38eddf111f = $this->env->getExtension("native_profiler");
        $__internal_8af24c273081489f4d1474f413fd6357fef66c5684b3989a17b43a38eddf111f->enter($__internal_8af24c273081489f4d1474f413fd6357fef66c5684b3989a17b43a38eddf111f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8af24c273081489f4d1474f413fd6357fef66c5684b3989a17b43a38eddf111f->leave($__internal_8af24c273081489f4d1474f413fd6357fef66c5684b3989a17b43a38eddf111f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
