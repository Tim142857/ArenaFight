<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8422aa3b10fe80126a68bcb8f30becb193b3d665277e3a8fb4037a866f368679 extends Twig_Template
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
        $__internal_1936786a20270674efcf8dc77ad77a2c996a2b88b1e6741f8f0d0e743bdb8467 = $this->env->getExtension("native_profiler");
        $__internal_1936786a20270674efcf8dc77ad77a2c996a2b88b1e6741f8f0d0e743bdb8467->enter($__internal_1936786a20270674efcf8dc77ad77a2c996a2b88b1e6741f8f0d0e743bdb8467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1936786a20270674efcf8dc77ad77a2c996a2b88b1e6741f8f0d0e743bdb8467->leave($__internal_1936786a20270674efcf8dc77ad77a2c996a2b88b1e6741f8f0d0e743bdb8467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
