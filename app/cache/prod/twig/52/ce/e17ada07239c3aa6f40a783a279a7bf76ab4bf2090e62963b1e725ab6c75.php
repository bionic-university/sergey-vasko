<?php

/* JobmagazineBundle:Job:new.html.twig */
class __TwigTemplate_52cee17ada07239c3aa6f40a783a279a7bf76ab4bf2090e62963b1e725ab6c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        echo "<h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("job");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "JobmagazineBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  76 => 13,  53 => 7,  184 => 61,  180 => 14,  170 => 11,  90 => 49,  37 => 5,  23 => 1,  167 => 10,  157 => 51,  152 => 49,  148 => 47,  137 => 42,  127 => 63,  124 => 37,  118 => 36,  110 => 34,  104 => 32,  97 => 30,  81 => 23,  77 => 22,  74 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 13,  169 => 60,  140 => 71,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 5,  143 => 56,  135 => 69,  131 => 39,  119 => 42,  108 => 36,  102 => 53,  71 => 19,  67 => 18,  63 => 17,  59 => 10,  47 => 12,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 19,  56 => 9,  50 => 21,  29 => 3,  87 => 26,  72 => 20,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 50,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  40 => 15,  44 => 4,  35 => 6,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 59,  117 => 44,  115 => 43,  105 => 54,  101 => 31,  91 => 26,  69 => 11,  66 => 15,  62 => 23,  49 => 6,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 62,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 6,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 43,  133 => 55,  130 => 41,  125 => 61,  122 => 43,  116 => 41,  112 => 56,  109 => 55,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 48,  82 => 22,  80 => 19,  73 => 20,  64 => 10,  60 => 16,  57 => 13,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 10,  39 => 3,  36 => 5,  33 => 6,  30 => 3,);
    }
}
