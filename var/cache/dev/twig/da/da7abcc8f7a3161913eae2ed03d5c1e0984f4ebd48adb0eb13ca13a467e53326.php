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
        $__internal_40350ac4147001365a49e1eae6d003bc36e629d2493d299e2918cf3e4c8865c7 = $this->env->getExtension("native_profiler");
        $__internal_40350ac4147001365a49e1eae6d003bc36e629d2493d299e2918cf3e4c8865c7->enter($__internal_40350ac4147001365a49e1eae6d003bc36e629d2493d299e2918cf3e4c8865c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_40350ac4147001365a49e1eae6d003bc36e629d2493d299e2918cf3e4c8865c7->leave($__internal_40350ac4147001365a49e1eae6d003bc36e629d2493d299e2918cf3e4c8865c7_prof);

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
