<?php

/* JobmagazineBundle:Category:show.html.twig */
class __TwigTemplate_1c3acdb9a364bb20ab428e7cf2683133058f438bf1abd35ec443255f75353ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JobmagazineBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JobmagazineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Вакансии в категории ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jobmagazine/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"\">Подписка</a>
        </div>
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo "</h1>
    </div>
    ";
        // line 19
        echo twig_include($this->env, $context, "JobmagazineBundle:Job:list.html.twig", array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs")));
        echo "
    ";
        // line 20
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 21
            echo "        <div class=\"pagination\">
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JobmagazineBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => 1)), "html", null, true);
            echo "\">
                <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jobmagazine/images/first.png"), "html", null, true);
            echo "\" alt=\"Первая страница\" title=\"Первая страница\" />
            </a>
 
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JobmagazineBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jobmagazine/images/previous.png"), "html", null, true);
            echo "\" alt=\"Следующая страница\" title=\"Предыдущая страница\" />
            </a>
 
            ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "                ";
                if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["current_page"]) ? $context["current_page"] : null))) {
                    // line 32
                    echo "                    ";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "
                ";
                } else {
                    // line 34
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JobmagazineBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["page"]) ? $context["page"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a>
                ";
                }
                // line 36
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo " 
            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JobmagazineBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["next_page"]) ? $context["next_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jobmagazine/images/next.png"), "html", null, true);
            echo "\" alt=\"Предыдущая страница\" title=\"Следующая страница\" />
            </a>
 
            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JobmagazineBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["last_page"]) ? $context["last_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jobmagazine/images/last.png"), "html", null, true);
            echo "\" alt=\"Последняя страница\" title=\"Последняя страница\" />
            </a>
        </div>
    ";
        }
        // line 47
        echo " 
    <div class=\"pagination_desc\">
        В этой категории <strong>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["total_jobs"]) ? $context["total_jobs"] : null), "html", null, true);
        echo "</strong> вакансий
 
        ";
        // line 51
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 52
            echo "            - страница <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : null), "html", null, true);
            echo "</strong>
        ";
        }
        // line 54
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "JobmagazineBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 54,  157 => 51,  152 => 49,  148 => 47,  137 => 42,  127 => 38,  124 => 37,  118 => 36,  110 => 34,  104 => 32,  97 => 30,  81 => 23,  77 => 22,  74 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 52,  143 => 56,  135 => 53,  131 => 39,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 19,  56 => 9,  50 => 10,  29 => 3,  87 => 26,  72 => 20,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 7,  44 => 12,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 31,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 43,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
