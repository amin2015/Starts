<?php

/* QuizQzBundle:Questionnaire:show.html.twig */
class __TwigTemplate_4e0a141e1e1bb5298c14411ac26671ab873c940ad67aa83b8bd45cdac81acb06 extends Twig_Template
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
        echo "<h1>Questionnaire</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Languageid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "languageId", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Welcomemessage</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "welcomeMessage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Attachement</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "attachement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isgenerated</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "isGenerated", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Confirmationsms</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "confirmationSms", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Finalmessage</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "finalMessage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("questionnaire");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionnaire_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "QuizQzBundle:Questionnaire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 62,  128 => 58,  120 => 53,  110 => 46,  103 => 42,  96 => 38,  89 => 34,  82 => 30,  75 => 26,  68 => 22,  61 => 18,  54 => 14,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
