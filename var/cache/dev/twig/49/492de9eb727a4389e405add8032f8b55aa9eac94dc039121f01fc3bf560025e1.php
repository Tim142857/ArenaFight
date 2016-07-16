<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8a6d6dd7413f6fa6a25f37ec592f4ab14eb94a817e06884b37207714a6bcc445 extends Twig_Template
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
        $__internal_c99ff196ecae2e21daf6635db45f009ab0b4e5edc14cb8a93c75151bf4acad44 = $this->env->getExtension("native_profiler");
        $__internal_c99ff196ecae2e21daf6635db45f009ab0b4e5edc14cb8a93c75151bf4acad44->enter($__internal_c99ff196ecae2e21daf6635db45f009ab0b4e5edc14cb8a93c75151bf4acad44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c99ff196ecae2e21daf6635db45f009ab0b4e5edc14cb8a93c75151bf4acad44->leave($__internal_c99ff196ecae2e21daf6635db45f009ab0b4e5edc14cb8a93c75151bf4acad44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
