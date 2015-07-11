<?php

/* QuizQzBundle:Question:edit.html.twig */
class __TwigTemplate_26742ce8c71788884b01a5593b6bfe65aedbdd04a23f7e97738cd5fa0064b700 extends Twig_Template
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
        echo "<h1>Question edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("question");
        echo "\">
            Back to the list
        </a>
    </li>
    <!--<li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>-->
</ul>
    
    <script type=\"text/javascript\">
        
        \$(document).ready(function() {
            var ischecked0,ischecked1, checked;
            ischecked0 = \$(\"#quiz_qzbundle_question_responseType_0\").attr('checked');
            ischecked1 = \$(\"#quiz_qzbundle_question_responseType_1\").attr('checked');
            
            \$(\"input\").on( \"click\", function() {
                checked = \$(\"input:checked\").val() ;
               if (checked == 1) {
                 \$(\"#quiz_qzbundle_question_attachement_file\").parent().show(); 
                 \$(\"#quiz_qzbundle_question_questionText\").parent().hide();
                 \$(\"#quiz_qzbundle_question_questionTextEn\").parent().hide();
               }  
                 
               else{
                \$(\"#quiz_qzbundle_question_attachement_file\").parent().hide();
                \$(\"#quiz_qzbundle_question_questionText\").parent().show();
                \$(\"#quiz_qzbundle_question_questionTextEn\").parent().show();
               }
                   
            });
            
            if (ischecked0 != \"checked\")   
               \$(\"#quiz_qzbundle_question_attachement_file\").parent().hide(); 
            
            if (ischecked1 != \"checked\")  {
                \$(\"#quiz_qzbundle_question_questionText\").parent().hide();
                \$(\"#quiz_qzbundle_question_questionTextEn\").parent().hide();
            } 
               
                
         });
         
    </script>   
    
";
    }

    public function getTemplateName()
    {
        return "QuizQzBundle:Question:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  50 => 10,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
