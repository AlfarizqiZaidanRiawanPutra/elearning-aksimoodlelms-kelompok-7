<?php

class __Mustache_2b98d8f3d4109774160d94bce7afa870 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="xp-border-0 xp-border-solid xp-border-b xp-border-gray-200 xp-mb-6 xp-pb-1">
';
        $buffer .= $indent . '    <div class="xp-flex xp-flex-wrap xp-gap-x-2 xp-gap-y-1">
';
        $buffer .= $indent . '        <div class="xp-grow">
';
        $buffer .= $indent . '            <h4 class="xp-m-0 xp-leading-none">
';
        $buffer .= $indent . '                <span class="xp-block xp-text-2xs xp-font-normal xp-uppercase">';
        $value = $context->find('str');
        $buffer .= $this->sectionFe5f65d8a16868c0298e3ed68a505626($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span class="xp-block">';
        $value = $this->resolveValue($context->find('scopename'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $value = $context->find('scopeurl');
        $buffer .= $this->section130791941b9ff22c2a684d5f7a3732bb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </h4>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="xp-flex xp-gap-2 xp-items-end">
';
        $buffer .= $indent . '            <div class="xp-grow xp-shrink-0 xp-flex xp-gap-1 xp-flex-wrap">
';
        $buffer .= $indent . '                <button class="btn btn-sm btn-secondary xp-truncate" id="block_xp-course-selector-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('isincourse');
        $buffer .= $this->section38ebd251a4b1aa1f9807722869fa3e68($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $context->find('isincourse');
        if (empty($value)) {
            
            $value = $context->find('str');
            $buffer .= $this->sectionA5bef4ab076825f04cc346b84cb0ca3b($context, $indent, $value);
        }
        $buffer .= '
';
        $buffer .= $indent . '                </button>
';
        $value = $context->find('isincourse');
        $buffer .= $this->sectionF745a757da34db6e62502d0ffeb4fdcb($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="xp-grow-0 xp-shrink-0 [&_.icon]:xp-m-0 xp-pb-0.5">
';
        $value = $context->find('helpicon');
        $buffer .= $this->section57863b7d896bd80d941fee3cceac7b6b($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section31ce6e7ceb118db085548534f6551a9b($context, $indent, $value);

        return $buffer;
    }

    private function sectionFe5f65d8a16868c0298e3ed68a505626(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' rulesscope, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' rulesscope, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91441d471b8e3cf4d156ef9ab6ee9dc8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' go, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' go, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section130791941b9ff22c2a684d5f7a3732bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{.}}" target="_blank" class="xp-inline-block xp-ml-2 xp-text-base xp-text-inherit"
                            title="{{#str}} go, core {{/str}}">
                        <span class="sr-only">{{#str}} go, core {{/str}}</span>
                        <i class="fa fa-external-link" aria-hidden="true"></i>
                    </a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" class="xp-inline-block xp-ml-2 xp-text-base xp-text-inherit"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->section91441d471b8e3cf4d156ef9ab6ee9dc8($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section91441d471b8e3cf4d156ef9ab6ee9dc8($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        <i class="fa fa-external-link" aria-hidden="true"></i>
';
                $buffer .= $indent . '                    </a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38d1b4b8c0dc5eb60c23348ff9ee9cba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' changecourse, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' changecourse, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38ebd251a4b1aa1f9807722869fa3e68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} changecourse, block_xp {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section38d1b4b8c0dc5eb60c23348ff9ee9cba($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5bef4ab076825f04cc346b84cb0ca3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' changetocourse, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' changetocourse, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5bc9773ce642c6d43aa62bd4e2631e0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' changetositewide, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' changetositewide, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF745a757da34db6e62502d0ffeb4fdcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{ sitewideurl }}" class="btn btn-sm btn-secondary xp-truncate">{{#str}} changetositewide, block_xp {{/str}}</a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('sitewideurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-sm btn-secondary xp-truncate">';
                $value = $context->find('str');
                $buffer .= $this->section5bc9773ce642c6d43aa62bd4e2631e0d($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57863b7d896bd80d941fee3cceac7b6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core/help_icon }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31ce6e7ceb118db085548534f6551a9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_xp/course-selector\'], function(CourseSelector) {
    var trigger = document.getElementById(\'block_xp-course-selector-{{uniqid}}\');
    var courseUrlTemplate = "{{ courseurltemplate }}";
    var urlHasHash = courseUrlTemplate.includes(\'#\');
    trigger.addEventListener(\'click\', function() {
        CourseSelector.openCourseSelector(function(course) {
            var url = courseUrlTemplate.replace(\'CONTEXTID\', course.contextid);
            window.location.href = url + (!urlHasHash ? window.location.hash : \'\');
        });
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'block_xp/course-selector\'], function(CourseSelector) {
';
                $buffer .= $indent . '    var trigger = document.getElementById(\'block_xp-course-selector-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    var courseUrlTemplate = "';
                $value = $this->resolveValue($context->find('courseurltemplate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '";
';
                $buffer .= $indent . '    var urlHasHash = courseUrlTemplate.includes(\'#\');
';
                $buffer .= $indent . '    trigger.addEventListener(\'click\', function() {
';
                $buffer .= $indent . '        CourseSelector.openCourseSelector(function(course) {
';
                $buffer .= $indent . '            var url = courseUrlTemplate.replace(\'CONTEXTID\', course.contextid);
';
                $buffer .= $indent . '            window.location.href = url + (!urlHasHash ? window.location.hash : \'\');
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
