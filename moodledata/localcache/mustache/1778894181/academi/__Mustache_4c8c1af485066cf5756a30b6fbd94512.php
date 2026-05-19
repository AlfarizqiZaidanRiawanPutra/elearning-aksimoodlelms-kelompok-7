<?php

class __Mustache_4c8c1af485066cf5756a30b6fbd94512 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="question-banks-list">
';
        $buffer .= $indent . '    <ul class="list-unstyled">
';
        $buffer .= $indent . '        <li class="d-flex mb-2 me-2">
';
        $buffer .= $indent . '            <div class="flex-shrink-0 ';
        $value = $this->resolveValue($context->find('purpose'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' activityiconcontainer icon-size-6 modicon_';
        $value = $this->resolveValue($context->find('modname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <a href="';
        $value = $this->resolveValue($context->findDot('managequestions.url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                    <img class="icon activityicon" aria-hidden="true" src="';
        $value = $this->resolveValue($context->find('iconurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" alt="modicon_';
        $value = $this->resolveValue($context->find('modname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"/>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="flex-grow-1 align-self-center ms-3">
';
        $value = $context->find('managequestions');
        $buffer .= $this->sectionFe2c01c473a23105ccdc8c2de3fee281($context, $indent, $value);
        $buffer .= $indent . '                <div class="manage-bank-actions d-inline-block">
';
        $value = $context->find('managebank');
        $buffer .= $this->sectionEa368b13d36df95dfc90917d6f84e164($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionFe2c01c473a23105ccdc8c2de3fee281(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/action_link}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa368b13d36df95dfc90917d6f84e164(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core/action_menu}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
