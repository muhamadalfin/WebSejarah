<?php

/* list-email-template.html */
class __TwigTemplate_70efb794548bd1a6acb9b58332453353a7cbea333d382f2341e989269737b823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Email Template -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module\">
    <div class=\"module-head\">
        <h3>Email Template</h3>
    </div>
    <div class=\"module-body\">";
        // line 13
        echo get_flashdata("mapel");
        // line 15
        if (is_demo_app()) {
            // line 16
            echo get_alert("warning", get_demo_msg());
        }
        // line 18
        echo "
        <table class=\"table table-striped datatable\">
            <thead>
                <tr>
                    <th>Nama template</th>
                    <th width=\"15%\"></th>
                </tr>
            </thead>
            <tbody>";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["template"]) ? $context["template"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 28
            echo "                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "nama"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, site_url(("email/edit/" . $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                    </td>
                </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </tbody>
        </table>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "list-email-template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 35,  75 => 31,  70 => 29,  67 => 28,  63 => 27,  53 => 18,  50 => 16,  48 => 15,  46 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
