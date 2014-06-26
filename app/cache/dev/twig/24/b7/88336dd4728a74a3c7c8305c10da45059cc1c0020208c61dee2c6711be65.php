<?php

/* JobmagazineBundle:Job:list.html.twig */
class __TwigTemplate_24b788336dd4728a74a3c7c8305c10da45059cc1c0020208c61dee2c6711be65 extends Twig_Template
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
        echo "<table class=\"jobs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
            echo "\">
            <td class=\"location\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location"), "html", null, true);
            echo "</td>
            <td class=\"position\">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "company" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "companyslug"), "location" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "locationslug"), "position" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "positionslug"))), "html", null, true);
            echo "\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position"), "html", null, true);
            echo "
                </a>
            </td>
            <td class=\"company\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company"), "html", null, true);
            echo "</td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "JobmagazineBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  44 => 4,  39 => 3,  22 => 2,  19 => 1,  187 => 62,  184 => 61,  180 => 14,  177 => 13,  170 => 11,  167 => 10,  162 => 6,  159 => 5,  140 => 71,  135 => 69,  127 => 63,  125 => 61,  121 => 59,  112 => 56,  109 => 55,  105 => 54,  102 => 53,  93 => 50,  90 => 49,  86 => 48,  64 => 29,  54 => 22,  50 => 21,  40 => 15,  35 => 10,  31 => 8,  23 => 1,  91 => 26,  84 => 24,  76 => 13,  73 => 20,  71 => 19,  67 => 18,  60 => 16,  53 => 7,  49 => 6,  46 => 9,  43 => 8,  37 => 13,  32 => 4,  29 => 5,);
    }
}
