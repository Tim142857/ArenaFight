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
        $__internal_c01f78ea736fb2fc552ba535c812ef103987a25c6190ab5b83f373fa497665b4 = $this->env->getExtension("native_profiler");
        $__internal_c01f78ea736fb2fc552ba535c812ef103987a25c6190ab5b83f373fa497665b4->enter($__internal_c01f78ea736fb2fc552ba535c812ef103987a25c6190ab5b83f373fa497665b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c01f78ea736fb2fc552ba535c812ef103987a25c6190ab5b83f373fa497665b4->leave($__internal_c01f78ea736fb2fc552ba535c812ef103987a25c6190ab5b83f373fa497665b4_prof);

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
