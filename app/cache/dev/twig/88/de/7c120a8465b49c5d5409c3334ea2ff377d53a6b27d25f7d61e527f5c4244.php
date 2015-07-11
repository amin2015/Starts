<?php

/* QuizQzBundle:Question:questionsList.html.twig */
class __TwigTemplate_88de7c120a8465b49c5d5409c3334ea2ff377d53a6b27d25f7d61e527f5c4244 extends Twig_Template
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
        echo "<h1>Question list</h1>

    <table id=\"datatable\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                
                <th>Questiontext</th>
                <th>Questiontexten</th>
                <th>Attachement</th>
                <th>Responsetype</th>
                <th>Position</th>
                <th>Mode</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "questionText", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "questionTextEn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attachement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "responseType", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mode", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("responses_question_list", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">List of responses</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("questionnaire");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("question_new");
        echo "\">
                Create a new question
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
        return "QuizQzBundle:Question:questionsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  117 => 46,  110 => 41,  98 => 35,  92 => 32,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  61 => 21,  57 => 20,  39 => 4,  36 => 3,  11 => 1,);
    }
}
