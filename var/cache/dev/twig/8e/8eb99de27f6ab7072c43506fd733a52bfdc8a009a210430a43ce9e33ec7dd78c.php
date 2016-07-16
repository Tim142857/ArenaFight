<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f4c60ed54d78ef51a983610cbcdb941b3ba668627599aa36be046c36e9810bab extends Twig_Template
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
        $__internal_f85da9b852e15c6d4cde0a0e7d283e0e950e3d4e8ed7ec7a3b6e887d6cc9541b = $this->env->getExtension("native_profiler");
        $__internal_f85da9b852e15c6d4cde0a0e7d283e0e950e3d4e8ed7ec7a3b6e887d6cc9541b->enter($__internal_f85da9b852e15c6d4cde0a0e7d283e0e950e3d4e8ed7ec7a3b6e887d6cc9541b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f85da9b852e15c6d4cde0a0e7d283e0e950e3d4e8ed7ec7a3b6e887d6cc9541b->leave($__internal_f85da9b852e15c6d4cde0a0e7d283e0e950e3d4e8ed7ec7a3b6e887d6cc9541b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
