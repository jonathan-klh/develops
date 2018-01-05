<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1ac72ca77b31d17e291a9cfe4a53185d490cd414a56ac3092ef2f7c9ca0eb505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac72ca77b31d17e291a9cfe4a53185d490cd414a56ac3092ef2f7c9ca0eb505->enter($__internal_1ac72ca77b31d17e291a9cfe4a53185d490cd414a56ac3092ef2f7c9ca0eb505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4f2052551e219b808d60bdd1bbfc798042059b31f514bda906689e964eda484b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2052551e219b808d60bdd1bbfc798042059b31f514bda906689e964eda484b->enter($__internal_4f2052551e219b808d60bdd1bbfc798042059b31f514bda906689e964eda484b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ac72ca77b31d17e291a9cfe4a53185d490cd414a56ac3092ef2f7c9ca0eb505->leave($__internal_1ac72ca77b31d17e291a9cfe4a53185d490cd414a56ac3092ef2f7c9ca0eb505_prof);

        
        $__internal_4f2052551e219b808d60bdd1bbfc798042059b31f514bda906689e964eda484b->leave($__internal_4f2052551e219b808d60bdd1bbfc798042059b31f514bda906689e964eda484b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98859947f6018bf5632dbbf3bb004aa01ae580e1aee8ca0c6358835f71e9f1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98859947f6018bf5632dbbf3bb004aa01ae580e1aee8ca0c6358835f71e9f1c4->enter($__internal_98859947f6018bf5632dbbf3bb004aa01ae580e1aee8ca0c6358835f71e9f1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_53c566ada520ce6c695ff6b0e4fd9a87643d74b7580f61e927229d62c0086ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c566ada520ce6c695ff6b0e4fd9a87643d74b7580f61e927229d62c0086ffd->enter($__internal_53c566ada520ce6c695ff6b0e4fd9a87643d74b7580f61e927229d62c0086ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_53c566ada520ce6c695ff6b0e4fd9a87643d74b7580f61e927229d62c0086ffd->leave($__internal_53c566ada520ce6c695ff6b0e4fd9a87643d74b7580f61e927229d62c0086ffd_prof);

        
        $__internal_98859947f6018bf5632dbbf3bb004aa01ae580e1aee8ca0c6358835f71e9f1c4->leave($__internal_98859947f6018bf5632dbbf3bb004aa01ae580e1aee8ca0c6358835f71e9f1c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe55f5a18caf51804b8f29941eab401605c228cc922d0c6a560601a34990a8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe55f5a18caf51804b8f29941eab401605c228cc922d0c6a560601a34990a8ab->enter($__internal_fe55f5a18caf51804b8f29941eab401605c228cc922d0c6a560601a34990a8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cecac42f1909ddaad557f587a76afc4b6cfe80bf6332935903f5e924919026f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecac42f1909ddaad557f587a76afc4b6cfe80bf6332935903f5e924919026f2->enter($__internal_cecac42f1909ddaad557f587a76afc4b6cfe80bf6332935903f5e924919026f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cecac42f1909ddaad557f587a76afc4b6cfe80bf6332935903f5e924919026f2->leave($__internal_cecac42f1909ddaad557f587a76afc4b6cfe80bf6332935903f5e924919026f2_prof);

        
        $__internal_fe55f5a18caf51804b8f29941eab401605c228cc922d0c6a560601a34990a8ab->leave($__internal_fe55f5a18caf51804b8f29941eab401605c228cc922d0c6a560601a34990a8ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fb31ba06d1b21b5a46fbc19d5fc78a47a0931a37e3f79704e688fd203441537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb31ba06d1b21b5a46fbc19d5fc78a47a0931a37e3f79704e688fd203441537->enter($__internal_0fb31ba06d1b21b5a46fbc19d5fc78a47a0931a37e3f79704e688fd203441537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9bf9815c5b4da520f60166a0ac7489254377e669304a3fa73f4f2140af2fa1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf9815c5b4da520f60166a0ac7489254377e669304a3fa73f4f2140af2fa1c0->enter($__internal_9bf9815c5b4da520f60166a0ac7489254377e669304a3fa73f4f2140af2fa1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9bf9815c5b4da520f60166a0ac7489254377e669304a3fa73f4f2140af2fa1c0->leave($__internal_9bf9815c5b4da520f60166a0ac7489254377e669304a3fa73f4f2140af2fa1c0_prof);

        
        $__internal_0fb31ba06d1b21b5a46fbc19d5fc78a47a0931a37e3f79704e688fd203441537->leave($__internal_0fb31ba06d1b21b5a46fbc19d5fc78a47a0931a37e3f79704e688fd203441537_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/axel/www/develops/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
