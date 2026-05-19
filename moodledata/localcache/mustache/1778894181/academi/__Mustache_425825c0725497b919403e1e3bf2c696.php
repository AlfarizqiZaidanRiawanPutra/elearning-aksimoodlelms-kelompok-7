<?php

class __Mustache_425825c0725497b919403e1e3bf2c696 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex flex-wrap flex-column flex-md-row align-items-md-center gap-2 mb-2">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('controls'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
