<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0f800de14dcd9093493018b1cda66231d6e8b522498b59d50d6fbe1ade7cf28c extends Twig_Template
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
        $__internal_6a1cc259934c8f028a6465431828c178b037188cb33ae8cf755f5d8519e049ac = $this->env->getExtension("native_profiler");
        $__internal_6a1cc259934c8f028a6465431828c178b037188cb33ae8cf755f5d8519e049ac->enter($__internal_6a1cc259934c8f028a6465431828c178b037188cb33ae8cf755f5d8519e049ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6a1cc259934c8f028a6465431828c178b037188cb33ae8cf755f5d8519e049ac->leave($__internal_6a1cc259934c8f028a6465431828c178b037188cb33ae8cf755f5d8519e049ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
