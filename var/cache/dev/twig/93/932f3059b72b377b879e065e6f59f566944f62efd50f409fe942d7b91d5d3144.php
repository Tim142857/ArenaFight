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
        $__internal_d4b202094ee1fb6acc68704bd50b21e4c2c48d5386357429c56318a1c5498e70 = $this->env->getExtension("native_profiler");
        $__internal_d4b202094ee1fb6acc68704bd50b21e4c2c48d5386357429c56318a1c5498e70->enter($__internal_d4b202094ee1fb6acc68704bd50b21e4c2c48d5386357429c56318a1c5498e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d4b202094ee1fb6acc68704bd50b21e4c2c48d5386357429c56318a1c5498e70->leave($__internal_d4b202094ee1fb6acc68704bd50b21e4c2c48d5386357429c56318a1c5498e70_prof);

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
