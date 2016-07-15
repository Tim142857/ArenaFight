<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1a6920397c0c92793d980b4137471664b2f85644ce3602226eb8e83cec336074 extends Twig_Template
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
        $__internal_5d6fff0cc8c68f23cdaf9c6c9b0374613181f5e22ccaf9b412d648ef2d96513c = $this->env->getExtension("native_profiler");
        $__internal_5d6fff0cc8c68f23cdaf9c6c9b0374613181f5e22ccaf9b412d648ef2d96513c->enter($__internal_5d6fff0cc8c68f23cdaf9c6c9b0374613181f5e22ccaf9b412d648ef2d96513c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5d6fff0cc8c68f23cdaf9c6c9b0374613181f5e22ccaf9b412d648ef2d96513c->leave($__internal_5d6fff0cc8c68f23cdaf9c6c9b0374613181f5e22ccaf9b412d648ef2d96513c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
