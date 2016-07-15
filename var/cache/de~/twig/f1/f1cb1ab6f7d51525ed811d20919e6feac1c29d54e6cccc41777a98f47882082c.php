<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4bd2719dff5920aeadc0e34a7e16a2e6c8fb58d125428391c646cfbdc333b78f extends Twig_Template
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
        $__internal_6cba8dd8fd0b0d1942b349a30efb2469ffe7b13714482e2dba0cd43be11b4343 = $this->env->getExtension("native_profiler");
        $__internal_6cba8dd8fd0b0d1942b349a30efb2469ffe7b13714482e2dba0cd43be11b4343->enter($__internal_6cba8dd8fd0b0d1942b349a30efb2469ffe7b13714482e2dba0cd43be11b4343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6cba8dd8fd0b0d1942b349a30efb2469ffe7b13714482e2dba0cd43be11b4343->leave($__internal_6cba8dd8fd0b0d1942b349a30efb2469ffe7b13714482e2dba0cd43be11b4343_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
