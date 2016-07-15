<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_37459d7900be50a79fbd9fe8b1f4488a2560470e94b667cbe3bbdb17112ded48 extends Twig_Template
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
        $__internal_4d9401624ae2590f1a52ef66f8be19e8223e9a7a1265d5acce66dc99004872fb = $this->env->getExtension("native_profiler");
        $__internal_4d9401624ae2590f1a52ef66f8be19e8223e9a7a1265d5acce66dc99004872fb->enter($__internal_4d9401624ae2590f1a52ef66f8be19e8223e9a7a1265d5acce66dc99004872fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4d9401624ae2590f1a52ef66f8be19e8223e9a7a1265d5acce66dc99004872fb->leave($__internal_4d9401624ae2590f1a52ef66f8be19e8223e9a7a1265d5acce66dc99004872fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
