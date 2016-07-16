<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_64822658b468879b18d4cd69c9f65599b53d04d5757decc20c2f914acf22de74 extends Twig_Template
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
        $__internal_6aa7a2241bd38909c8e1a0ebc867598a6707c995f11882f4c813ee4d83cd8a2c = $this->env->getExtension("native_profiler");
        $__internal_6aa7a2241bd38909c8e1a0ebc867598a6707c995f11882f4c813ee4d83cd8a2c->enter($__internal_6aa7a2241bd38909c8e1a0ebc867598a6707c995f11882f4c813ee4d83cd8a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6aa7a2241bd38909c8e1a0ebc867598a6707c995f11882f4c813ee4d83cd8a2c->leave($__internal_6aa7a2241bd38909c8e1a0ebc867598a6707c995f11882f4c813ee4d83cd8a2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
