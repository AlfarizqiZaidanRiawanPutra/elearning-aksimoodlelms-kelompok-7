<?php

class __Mustache_b28cbd0745096cd92abc83a83539f3a0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<form method="dialog">
';
        if ($partial = $this->mustache->loadPartial('core/datafilter/filter')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionB866b831c973ebffb67f97bdc63cef4d($context, $indent, $value);

        return $buffer;
    }

    private function section46b3e97167d72f129ac6222588722d0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'core-filter-{{uniqid}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'core-filter-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ed366829a97b7cf9c6a5e4acf567a90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{component}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55c95cc670844c4c03d4204da568347d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{callback}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('callback'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4cae5b692c4dede491c897cd1ad2c32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{view}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('view'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB866b831c973ebffb67f97bdc63cef4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core_question/filter\'], function(Filter) {
        Filter.init(
            {{#quote}}core-filter-{{uniqid}}{{/quote}},
            {{courseid}},
            {{categoryid}},
            {{perpage}},
            {{contextid}},
            {{quizcmid}},
            {{#quote}}{{component}}{{/quote}},
            {{#quote}}{{callback}}{{/quote}},
            {{#quote}}{{view}}{{/quote}},
            {{cmid}},
            {{{pagevars}}},
            {{{extraparams}}},
        );
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core_question/filter\'], function(Filter) {
';
                $buffer .= $indent . '        Filter.init(
';
                $buffer .= $indent . '            ';
                $value = $context->find('quote');
                $buffer .= $this->section46b3e97167d72f129ac6222588722d0f($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('perpage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('contextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('quizcmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $context->find('quote');
                $buffer .= $this->section2ed366829a97b7cf9c6a5e4acf567a90($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $context->find('quote');
                $buffer .= $this->section55c95cc670844c4c03d4204da568347d($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $context->find('quote');
                $buffer .= $this->sectionB4cae5b692c4dede491c897cd1ad2c32($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('pagevars'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ',
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('extraparams'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ',
';
                $buffer .= $indent . '        );
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
