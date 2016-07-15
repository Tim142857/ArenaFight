<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_be7f46c96ad824c011a6dabd64c85130300dcb097818ecc30969bbeaa7fb5961 extends Twig_Template
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
        $__internal_9b9374f33dd0d2a877fdaee2f22566fea7c62d790e2a8246ce85ded0339b4904 = $this->env->getExtension("native_profiler");
        $__internal_9b9374f33dd0d2a877fdaee2f22566fea7c62d790e2a8246ce85ded0339b4904->enter($__internal_9b9374f33dd0d2a877fdaee2f22566fea7c62d790e2a8246ce85ded0339b4904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9b9374f33dd0d2a877fdaee2f22566fea7c62d790e2a8246ce85ded0339b4904->leave($__internal_9b9374f33dd0d2a877fdaee2f22566fea7c62d790e2a8246ce85ded0339b4904_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
