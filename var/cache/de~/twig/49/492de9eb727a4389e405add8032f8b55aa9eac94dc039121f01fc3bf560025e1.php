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
        $__internal_b09e2b702d2dc79421e55b768839b72782c69cbfa2729c12e3ed441d42f2dba5 = $this->env->getExtension("native_profiler");
        $__internal_b09e2b702d2dc79421e55b768839b72782c69cbfa2729c12e3ed441d42f2dba5->enter($__internal_b09e2b702d2dc79421e55b768839b72782c69cbfa2729c12e3ed441d42f2dba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b09e2b702d2dc79421e55b768839b72782c69cbfa2729c12e3ed441d42f2dba5->leave($__internal_b09e2b702d2dc79421e55b768839b72782c69cbfa2729c12e3ed441d42f2dba5_prof);

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
