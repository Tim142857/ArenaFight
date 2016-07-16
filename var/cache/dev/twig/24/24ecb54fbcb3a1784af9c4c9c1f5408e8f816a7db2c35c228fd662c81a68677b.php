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
        $__internal_971cd87ad5f81c296064d751aba198ed74251261aa65892792b277504b8aeb51 = $this->env->getExtension("native_profiler");
        $__internal_971cd87ad5f81c296064d751aba198ed74251261aa65892792b277504b8aeb51->enter($__internal_971cd87ad5f81c296064d751aba198ed74251261aa65892792b277504b8aeb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_971cd87ad5f81c296064d751aba198ed74251261aa65892792b277504b8aeb51->leave($__internal_971cd87ad5f81c296064d751aba198ed74251261aa65892792b277504b8aeb51_prof);

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
