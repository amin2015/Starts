<?php

/* QuizQzBundle:Question:index.html.twig */
class __TwigTemplate_037ace73077b247145845fc813b43e7060efd1cd63be8a8de46973807804940c extends Twig_Template
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
                <th>Id</th>
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "questionText", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "questionTextEn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attachement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "responseType", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mode", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 36
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
        // line 42
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("question_new");
        echo "\">
                Create a new question
            </a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("questionnaire");
        echo "\">
                Back to the list of questionnaires
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
        return "QuizQzBundle:Question:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  123 => 47,  116 => 42,  104 => 36,  98 => 33,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  64 => 22,  61 => 21,  57 => 20,  39 => 4,  36 => 3,  11 => 1,);
    }
}
