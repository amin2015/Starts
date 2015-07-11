<?php

/* QuizQzBundle:Response:responsesList.html.twig */
class __TwigTemplate_678cc8618f4467876fb0c364dbe713b8840f90acd21e215d1482c4228dd5d227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Response list</h1>

    <table id=\"datatable\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                
                <th>Callid</th>
                <th>Content</th>
                <th>Attachement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "callId", array()), "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attachement", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("response_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("response");
        echo "\">
                Back to the list of responses
            </a>
        </li>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("response_new");
        echo "\">
                Create a new response
            </a>
        </li>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("question");
        echo "\">
                Back to the list of questions
            </a>
        </li>
        
    </ul>
           
     <script type=\"text/javascript\">
        
        \$(document).ready(function() {
            \$('#datatable').dataTable();
        } );

    </script>  
                
    ";
    }

    public function getTemplateName()
    {
        return "QuizQzBundle:Response:responsesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  104 => 42,  96 => 37,  89 => 32,  77 => 26,  69 => 21,  65 => 20,  61 => 19,  58 => 18,  54 => 17,  39 => 4,  36 => 3,  11 => 1,);
    }
}
