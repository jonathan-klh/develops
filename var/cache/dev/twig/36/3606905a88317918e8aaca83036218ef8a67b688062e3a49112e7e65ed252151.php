<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81539c1389c8fa87fb2458c9522e34ba75a5e037c6b6391966d8208dd1bd7945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81539c1389c8fa87fb2458c9522e34ba75a5e037c6b6391966d8208dd1bd7945->enter($__internal_81539c1389c8fa87fb2458c9522e34ba75a5e037c6b6391966d8208dd1bd7945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0fd55bdddb26f95bd90690945580154d541f0576c9f7de52dbf79fe25dbf186c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd55bdddb26f95bd90690945580154d541f0576c9f7de52dbf79fe25dbf186c->enter($__internal_0fd55bdddb26f95bd90690945580154d541f0576c9f7de52dbf79fe25dbf186c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81539c1389c8fa87fb2458c9522e34ba75a5e037c6b6391966d8208dd1bd7945->leave($__internal_81539c1389c8fa87fb2458c9522e34ba75a5e037c6b6391966d8208dd1bd7945_prof);

        
        $__internal_0fd55bdddb26f95bd90690945580154d541f0576c9f7de52dbf79fe25dbf186c->leave($__internal_0fd55bdddb26f95bd90690945580154d541f0576c9f7de52dbf79fe25dbf186c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4aea4fac5e4aef5414e5f4c443018dd552043f45e0c8f2bd57cefdc96cfda58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aea4fac5e4aef5414e5f4c443018dd552043f45e0c8f2bd57cefdc96cfda58e->enter($__internal_4aea4fac5e4aef5414e5f4c443018dd552043f45e0c8f2bd57cefdc96cfda58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_682cefee0111b51dc9f390f3e5aef9b21e2a09823805d2e6fd31e9f481a09e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682cefee0111b51dc9f390f3e5aef9b21e2a09823805d2e6fd31e9f481a09e2f->enter($__internal_682cefee0111b51dc9f390f3e5aef9b21e2a09823805d2e6fd31e9f481a09e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_682cefee0111b51dc9f390f3e5aef9b21e2a09823805d2e6fd31e9f481a09e2f->leave($__internal_682cefee0111b51dc9f390f3e5aef9b21e2a09823805d2e6fd31e9f481a09e2f_prof);

        
        $__internal_4aea4fac5e4aef5414e5f4c443018dd552043f45e0c8f2bd57cefdc96cfda58e->leave($__internal_4aea4fac5e4aef5414e5f4c443018dd552043f45e0c8f2bd57cefdc96cfda58e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ace8f29741e66a9bbfe4c226f6a91fc9783b5b34268337035a8796d7c9ba6913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace8f29741e66a9bbfe4c226f6a91fc9783b5b34268337035a8796d7c9ba6913->enter($__internal_ace8f29741e66a9bbfe4c226f6a91fc9783b5b34268337035a8796d7c9ba6913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e58367dd2c4353b7b0468ce80839b578f89e17806fbeb6719e6c01e750dc05b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58367dd2c4353b7b0468ce80839b578f89e17806fbeb6719e6c01e750dc05b9->enter($__internal_e58367dd2c4353b7b0468ce80839b578f89e17806fbeb6719e6c01e750dc05b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e58367dd2c4353b7b0468ce80839b578f89e17806fbeb6719e6c01e750dc05b9->leave($__internal_e58367dd2c4353b7b0468ce80839b578f89e17806fbeb6719e6c01e750dc05b9_prof);

        
        $__internal_ace8f29741e66a9bbfe4c226f6a91fc9783b5b34268337035a8796d7c9ba6913->leave($__internal_ace8f29741e66a9bbfe4c226f6a91fc9783b5b34268337035a8796d7c9ba6913_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6109b80abe19f00d90ef6e5f3554044a1ace3832fcea6094c7af251d73a2d8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6109b80abe19f00d90ef6e5f3554044a1ace3832fcea6094c7af251d73a2d8ce->enter($__internal_6109b80abe19f00d90ef6e5f3554044a1ace3832fcea6094c7af251d73a2d8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e102d37e67e46f60bd9a2b94b44f622708d93e2b8ba26dd16f2726381fcb3b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e102d37e67e46f60bd9a2b94b44f622708d93e2b8ba26dd16f2726381fcb3b63->enter($__internal_e102d37e67e46f60bd9a2b94b44f622708d93e2b8ba26dd16f2726381fcb3b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e102d37e67e46f60bd9a2b94b44f622708d93e2b8ba26dd16f2726381fcb3b63->leave($__internal_e102d37e67e46f60bd9a2b94b44f622708d93e2b8ba26dd16f2726381fcb3b63_prof);

        
        $__internal_6109b80abe19f00d90ef6e5f3554044a1ace3832fcea6094c7af251d73a2d8ce->leave($__internal_6109b80abe19f00d90ef6e5f3554044a1ace3832fcea6094c7af251d73a2d8ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/axel/www/develops/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
