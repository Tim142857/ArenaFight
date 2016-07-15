<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9070cc5ba527531dbf019199252bd5886011857953fb27418a147fcd6c0a4181 extends Twig_Template
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
        $__internal_8dd172e4b3383d9cdbf702a27e4e2e2d68e3884af7de90bdfda0c68549b462d8 = $this->env->getExtension("native_profiler");
        $__internal_8dd172e4b3383d9cdbf702a27e4e2e2d68e3884af7de90bdfda0c68549b462d8->enter($__internal_8dd172e4b3383d9cdbf702a27e4e2e2d68e3884af7de90bdfda0c68549b462d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8dd172e4b3383d9cdbf702a27e4e2e2d68e3884af7de90bdfda0c68549b462d8->leave($__internal_8dd172e4b3383d9cdbf702a27e4e2e2d68e3884af7de90bdfda0c68549b462d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
