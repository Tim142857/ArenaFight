<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_55eca191e957ef1b369a323f4b499aa59dbf805547e738a65dc5ead8e0bd5e9e extends Twig_Template
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
        $__internal_255beaa23471eb77f765ca09acad7c3808b0382e456019fc03baae77b52daa34 = $this->env->getExtension("native_profiler");
        $__internal_255beaa23471eb77f765ca09acad7c3808b0382e456019fc03baae77b52daa34->enter($__internal_255beaa23471eb77f765ca09acad7c3808b0382e456019fc03baae77b52daa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_255beaa23471eb77f765ca09acad7c3808b0382e456019fc03baae77b52daa34->leave($__internal_255beaa23471eb77f765ca09acad7c3808b0382e456019fc03baae77b52daa34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
