<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e79afa1ea78726088f76ef93636e5f8dc9e081256f18b81e744e80b980c7e81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79afa1ea78726088f76ef93636e5f8dc9e081256f18b81e744e80b980c7e81a->enter($__internal_e79afa1ea78726088f76ef93636e5f8dc9e081256f18b81e744e80b980c7e81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a4b10b521c403bbcf85c3620736e7a00b58dba668550702dfd7db520d27b7a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b10b521c403bbcf85c3620736e7a00b58dba668550702dfd7db520d27b7a0d->enter($__internal_a4b10b521c403bbcf85c3620736e7a00b58dba668550702dfd7db520d27b7a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e79afa1ea78726088f76ef93636e5f8dc9e081256f18b81e744e80b980c7e81a->leave($__internal_e79afa1ea78726088f76ef93636e5f8dc9e081256f18b81e744e80b980c7e81a_prof);

        
        $__internal_a4b10b521c403bbcf85c3620736e7a00b58dba668550702dfd7db520d27b7a0d->leave($__internal_a4b10b521c403bbcf85c3620736e7a00b58dba668550702dfd7db520d27b7a0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f01d626d55c951066e077cd6268f440a24b934f464034e3663418c7d69e133f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01d626d55c951066e077cd6268f440a24b934f464034e3663418c7d69e133f3->enter($__internal_f01d626d55c951066e077cd6268f440a24b934f464034e3663418c7d69e133f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_962d290449b70f53c9c1422e759c528a1180d87faaa5c3d3d110eac5c2f35410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962d290449b70f53c9c1422e759c528a1180d87faaa5c3d3d110eac5c2f35410->enter($__internal_962d290449b70f53c9c1422e759c528a1180d87faaa5c3d3d110eac5c2f35410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_962d290449b70f53c9c1422e759c528a1180d87faaa5c3d3d110eac5c2f35410->leave($__internal_962d290449b70f53c9c1422e759c528a1180d87faaa5c3d3d110eac5c2f35410_prof);

        
        $__internal_f01d626d55c951066e077cd6268f440a24b934f464034e3663418c7d69e133f3->leave($__internal_f01d626d55c951066e077cd6268f440a24b934f464034e3663418c7d69e133f3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c9eb5b223b1833348d1ed0c3c633cad1d132a34718f42c79d072a5fef3e14e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9eb5b223b1833348d1ed0c3c633cad1d132a34718f42c79d072a5fef3e14e2->enter($__internal_4c9eb5b223b1833348d1ed0c3c633cad1d132a34718f42c79d072a5fef3e14e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94e99dea24ea8d5e459f12a05c3e603222f3458bacbaba07e026a0d04b07f230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e99dea24ea8d5e459f12a05c3e603222f3458bacbaba07e026a0d04b07f230->enter($__internal_94e99dea24ea8d5e459f12a05c3e603222f3458bacbaba07e026a0d04b07f230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_94e99dea24ea8d5e459f12a05c3e603222f3458bacbaba07e026a0d04b07f230->leave($__internal_94e99dea24ea8d5e459f12a05c3e603222f3458bacbaba07e026a0d04b07f230_prof);

        
        $__internal_4c9eb5b223b1833348d1ed0c3c633cad1d132a34718f42c79d072a5fef3e14e2->leave($__internal_4c9eb5b223b1833348d1ed0c3c633cad1d132a34718f42c79d072a5fef3e14e2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ca90dcff044436a6e7b399e3c8990e09639070da140e116f5f4f5686f54c888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca90dcff044436a6e7b399e3c8990e09639070da140e116f5f4f5686f54c888->enter($__internal_8ca90dcff044436a6e7b399e3c8990e09639070da140e116f5f4f5686f54c888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8b15dd5916e1ba7d5c93ac443947c7190f4404a65cb418a0f5cd0e7c7f27d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b15dd5916e1ba7d5c93ac443947c7190f4404a65cb418a0f5cd0e7c7f27d26->enter($__internal_c8b15dd5916e1ba7d5c93ac443947c7190f4404a65cb418a0f5cd0e7c7f27d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c8b15dd5916e1ba7d5c93ac443947c7190f4404a65cb418a0f5cd0e7c7f27d26->leave($__internal_c8b15dd5916e1ba7d5c93ac443947c7190f4404a65cb418a0f5cd0e7c7f27d26_prof);

        
        $__internal_8ca90dcff044436a6e7b399e3c8990e09639070da140e116f5f4f5686f54c888->leave($__internal_8ca90dcff044436a6e7b399e3c8990e09639070da140e116f5f4f5686f54c888_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/axel/www/develops/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
