<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_dc9b36d8012d00e3c79e2185e2c030195cd3c9418afa1357f3415f985ff4609b extends Twig_Template
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
        $__internal_9191440e3549f12b458f2b875957421ba894a32606e7cab7813676c1ef48384b = $this->env->getExtension("native_profiler");
        $__internal_9191440e3549f12b458f2b875957421ba894a32606e7cab7813676c1ef48384b->enter($__internal_9191440e3549f12b458f2b875957421ba894a32606e7cab7813676c1ef48384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9191440e3549f12b458f2b875957421ba894a32606e7cab7813676c1ef48384b->leave($__internal_9191440e3549f12b458f2b875957421ba894a32606e7cab7813676c1ef48384b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
