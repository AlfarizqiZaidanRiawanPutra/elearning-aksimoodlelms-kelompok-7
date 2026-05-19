<?php

class __Mustache_dbc898de5b788d90408955e3776999a4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="btn-group dropup mt-2" id="bulkactionsui-container">
';
        $buffer .= $indent . '    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="bulkactionsui-selector">
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section752da9fdacd1ff04ab460b65fb488b03($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div class="dropdown-menu" aria-labelledby="bulkactionsui-selector">
';
        $value = $context->find('bulkactionitems');
        $buffer .= $this->section0bfb477c66d901f90d950bdb32677e58($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section752da9fdacd1ff04ab460b65fb488b03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' withselected, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' withselected, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bfb477c66d901f90d950bdb32677e58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <input type="submit" value="{{actionname}}" class="dropdown-item {{actionclasses}}" name="{{actionkey}}" data-action="toggle" data-togglegroup="qbank"
                   data-toggle="action" form="questionsubmit" formaction="{{{actionurl}}}" disabled="disabled">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <input type="submit" value="';
                $value = $this->resolveValue($context->find('actionname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="dropdown-item ';
                $value = $this->resolveValue($context->find('actionclasses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" name="';
                $value = $this->resolveValue($context->find('actionkey'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="toggle" data-togglegroup="qbank"
';
                $buffer .= $indent . '                   data-toggle="action" form="questionsubmit" formaction="';
                $value = $this->resolveValue($context->find('actionurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" disabled="disabled">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
