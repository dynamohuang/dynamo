<?php

/* test.html */
class __TwigTemplate_14e12930a451530a318e5500a9ce47cd3dff473fe919db9a807a170612a71389 extends Twig_Template
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
        // line 1
        echo "view";
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
