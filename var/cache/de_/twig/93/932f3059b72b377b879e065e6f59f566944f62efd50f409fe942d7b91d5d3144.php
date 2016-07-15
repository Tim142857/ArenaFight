<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_023c4f605953628d192730e5267b4c018227a1362bf6a61a5d7f1d1d4cf42b7f extends Twig_Template
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
        $__internal_60f5695a3d8842bf5be926cf39340c687f23e876cd7bb3de8cccafa412fe64fa = $this->env->getExtension("native_profiler");
        $__internal_60f5695a3d8842bf5be926cf39340c687f23e876cd7bb3de8cccafa412fe64fa->enter($__internal_60f5695a3d8842bf5be926cf39340c687f23e876cd7bb3de8cccafa412fe64fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_60f5695a3d8842bf5be926cf39340c687f23e876cd7bb3de8cccafa412fe64fa->leave($__internal_60f5695a3d8842bf5be926cf39340c687f23e876cd7bb3de8cccafa412fe64fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
