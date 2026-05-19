<?php

class __Mustache_150a9e493ea6ca31310124bfda544f53 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('sitefeatures');
        $buffer .= $this->section089aa2ee901551e34df50c4e52aad4de($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('mspot');
        $buffer .= $this->section3cf4068facfb65f628e5fa96f6234989($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('jumbotron');
        $buffer .= $this->section239e49a5092988f95cebce6dc5238f85($context, $indent, $value);

        return $buffer;
    }

    private function section56f0628a53a78b8028d2b0324829f27f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blockemptymessage, theme_academi';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blockemptymessage, theme_academi';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b7e7ef469d5fda15584df7b8e5f4e98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="custom-alert-block alert alert-warning">
            {{#str}}blockemptymessage, theme_academi{{/str}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="custom-alert-block alert alert-warning">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section56f0628a53a78b8028d2b0324829f27f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d941d274ab13ccf96cbd0f05bc60161(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <h2><b>{{blocktitle}}</b></h2>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <h2><b>';
                $value = $this->resolveValue($context->find('blocktitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</b></h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16be0d1ea78cd84cc4b1de4683c5b131(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <p>{{{blockdesc}}}</p>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <p>';
                $value = $this->resolveValue($context->find('blockdesc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB39510752e497463cc55c0d9dd274547(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class=\'sitefeature-block-title\'>
                            {{#blocktitle}}
                                <h2><b>{{blocktitle}}</b></h2>
                            {{/blocktitle}}
                            {{#blockdesc}}
                                <p>{{{blockdesc}}}</p>
                            {{/blockdesc}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class=\'sitefeature-block-title\'>
';
                $value = $context->find('blocktitle');
                $buffer .= $this->section2d941d274ab13ccf96cbd0f05bc60161($context, $indent, $value);
                $value = $context->find('blockdesc');
                $buffer .= $this->section16be0d1ea78cd84cc4b1de4683c5b131($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section743e18b527eb92cba9268c98b61c2547(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="site-feature-head">
                                                <div class="rcthumb">
                                                    <i class="fa fa-{{icon}}"></i>
                                                </div>
                                            </div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="site-feature-head">
';
                $buffer .= $indent . '                                                <div class="rcthumb">
';
                $buffer .= $indent . '                                                    <i class="fa fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5acf0f3700cda6c6b8bab20822b7a359(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        <h6>
                                                            <a href="{{url}}" target=\'_blank\'>{{title}}</a>
                                                        </h6>
                                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                        <h6>
';
                $buffer .= $indent . '                                                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target=\'_blank\'>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                                                        </h6>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB529720f0c331757dd80a0e2c2b10108(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{#url}}
                                                        <h6>
                                                            <a href="{{url}}" target=\'_blank\'>{{title}}</a>
                                                        </h6>
                                                    {{/url}}
                                                    {{^url}}
                                                        <h6>{{title}}</h6>
                                                    {{/url}}
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('url');
                $buffer .= $this->section5acf0f3700cda6c6b8bab20822b7a359($context, $indent, $value);
                $value = $context->find('url');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                        <h6>';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h6>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d61cd0cc743724995975e8865ea7b19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<p>{{content}}</p>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<p>';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f1ea36bd4b1d8d7afcddf22fb3bbfc6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="site-feature-body">
                                                {{#title}}
                                                    {{#url}}
                                                        <h6>
                                                            <a href="{{url}}" target=\'_blank\'>{{title}}</a>
                                                        </h6>
                                                    {{/url}}
                                                    {{^url}}
                                                        <h6>{{title}}</h6>
                                                    {{/url}}
                                                {{/title}}
                                                {{#content}}<p>{{content}}</p>{{/content}}
                                            </div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="site-feature-body">
';
                $value = $context->find('title');
                $buffer .= $this->sectionB529720f0c331757dd80a0e2c2b10108($context, $indent, $value);
                $buffer .= $indent . '                                                ';
                $value = $context->find('content');
                $buffer .= $this->section2d61cd0cc743724995975e8865ea7b19($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d85647aa16bee1123636d7a21be62dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{colclass}}">
                                    <div class="sitebox">
                                        {{#icon}}
                                            <div class="site-feature-head">
                                                <div class="rcthumb">
                                                    <i class="fa fa-{{icon}}"></i>
                                                </div>
                                            </div>
                                        {{/icon}}
                                        {{#sfbbody}}
                                            <div class="site-feature-body">
                                                {{#title}}
                                                    {{#url}}
                                                        <h6>
                                                            <a href="{{url}}" target=\'_blank\'>{{title}}</a>
                                                        </h6>
                                                    {{/url}}
                                                    {{^url}}
                                                        <h6>{{title}}</h6>
                                                    {{/url}}
                                                {{/title}}
                                                {{#content}}<p>{{content}}</p>{{/content}}
                                            </div>
                                        {{/sfbbody}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="sitebox">
';
                $value = $context->find('icon');
                $buffer .= $this->section743e18b527eb92cba9268c98b61c2547($context, $indent, $value);
                $value = $context->find('sfbbody');
                $buffer .= $this->section7f1ea36bd4b1d8d7afcddf22fb3bbfc6($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section269602fbf1c69e0be8ba82c3f70ea846(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#status}}
                                <div class="{{colclass}}">
                                    <div class="sitebox">
                                        {{#icon}}
                                            <div class="site-feature-head">
                                                <div class="rcthumb">
                                                    <i class="fa fa-{{icon}}"></i>
                                                </div>
                                            </div>
                                        {{/icon}}
                                        {{#sfbbody}}
                                            <div class="site-feature-body">
                                                {{#title}}
                                                    {{#url}}
                                                        <h6>
                                                            <a href="{{url}}" target=\'_blank\'>{{title}}</a>
                                                        </h6>
                                                    {{/url}}
                                                    {{^url}}
                                                        <h6>{{title}}</h6>
                                                    {{/url}}
                                                {{/title}}
                                                {{#content}}<p>{{content}}</p>{{/content}}
                                            </div>
                                        {{/sfbbody}}
                                    </div>
                                </div>
                            {{/status}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('status');
                $buffer .= $this->section4d85647aa16bee1123636d7a21be62dc($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section329ee7a7cb40daf9d81676a830bdaf24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="site-features {{class}}" id="sitefeatures">
            <div class="custom-site-expo">
                <div class="container">
                    {{#blockstatus}}
                        <div class=\'sitefeature-block-title\'>
                            {{#blocktitle}}
                                <h2><b>{{blocktitle}}</b></h2>
                            {{/blocktitle}}
                            {{#blockdesc}}
                                <p>{{{blockdesc}}}</p>
                            {{/blockdesc}}
                        </div>
                    {{/blockstatus}}

                    <div class="row">
                        {{#feature}}
                            {{#status}}
                                <div class="{{colclass}}">
                                    <div class="sitebox">
                                        {{#icon}}
                                            <div class="site-feature-head">
                                                <div class="rcthumb">
                                                    <i class="fa fa-{{icon}}"></i>
                                                </div>
                                            </div>
                                        {{/icon}}
                                        {{#sfbbody}}
                                            <div class="site-feature-body">
                                                {{#title}}
                                                    {{#url}}
                                                        <h6>
                                                            <a href="{{url}}" target=\'_blank\'>{{title}}</a>
                                                        </h6>
                                                    {{/url}}
                                                    {{^url}}
                                                        <h6>{{title}}</h6>
                                                    {{/url}}
                                                {{/title}}
                                                {{#content}}<p>{{content}}</p>{{/content}}
                                            </div>
                                        {{/sfbbody}}
                                    </div>
                                </div>
                            {{/status}}
                        {{/feature}}
                    </div>
                </div>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="site-features ';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" id="sitefeatures">
';
                $buffer .= $indent . '            <div class="custom-site-expo">
';
                $buffer .= $indent . '                <div class="container">
';
                $value = $context->find('blockstatus');
                $buffer .= $this->sectionB39510752e497463cc55c0d9dd274547($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="row">
';
                $value = $context->find('feature');
                $buffer .= $this->section269602fbf1c69e0be8ba82c3f70ea846($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section089aa2ee901551e34df50c4e52aad4de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#isblockempty}}
        <div class="custom-alert-block alert alert-warning">
            {{#str}}blockemptymessage, theme_academi{{/str}}
        </div>
    {{/isblockempty}}

    {{#blockisempty}}
        <div class="site-features {{class}}" id="sitefeatures">
            <div class="custom-site-expo">
                <div class="container">
                    {{#blockstatus}}
                        <div class=\'sitefeature-block-title\'>
                            {{#blocktitle}}
                                <h2><b>{{blocktitle}}</b></h2>
                            {{/blocktitle}}
                            {{#blockdesc}}
                                <p>{{{blockdesc}}}</p>
                            {{/blockdesc}}
                        </div>
                    {{/blockstatus}}

                    <div class="row">
                        {{#feature}}
                            {{#status}}
                                <div class="{{colclass}}">
                                    <div class="sitebox">
                                        {{#icon}}
                                            <div class="site-feature-head">
                                                <div class="rcthumb">
                                                    <i class="fa fa-{{icon}}"></i>
                                                </div>
                                            </div>
                                        {{/icon}}
                                        {{#sfbbody}}
                                            <div class="site-feature-body">
                                                {{#title}}
                                                    {{#url}}
                                                        <h6>
                                                            <a href="{{url}}" target=\'_blank\'>{{title}}</a>
                                                        </h6>
                                                    {{/url}}
                                                    {{^url}}
                                                        <h6>{{title}}</h6>
                                                    {{/url}}
                                                {{/title}}
                                                {{#content}}<p>{{content}}</p>{{/content}}
                                            </div>
                                        {{/sfbbody}}
                                    </div>
                                </div>
                            {{/status}}
                        {{/feature}}
                    </div>
                </div>
            </div>
        </div>
    {{/blockisempty}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isblockempty');
                $buffer .= $this->section6b7e7ef469d5fda15584df7b8e5f4e98($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('blockisempty');
                $buffer .= $this->section329ee7a7cb40daf9d81676a830bdaf24($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5e86c178fb86c9b101c2a039baae99b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2><b>{{title}}</b></h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2><b>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</b></h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f7c057c31698afa4490cc3bb77ec0d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<p>{{desc}}</p>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<p>';
                $value = $this->resolveValue($context->find('desc'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9c098ea83724045d6239b6ec4e7c596(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="info-head">
                                    {{#title}}<h2><b>{{title}}</b></h2>{{/title}}
                                    {{#desc}}<p>{{desc}}</p>{{/desc}}
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="info-head">
';
                $buffer .= $indent . '                                    ';
                $value = $context->find('title');
                $buffer .= $this->sectionC5e86c178fb86c9b101c2a039baae99b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                $value = $context->find('desc');
                $buffer .= $this->section0f7c057c31698afa4490cc3bb77ec0d7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAff7deff453eb73ac6c4f47b830d8661(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="info-content">
                                    <p>{{{content}}}</p>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="info-content">
';
                $buffer .= $indent . '                                    <p>';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section405a86c5f403edd5406c8e3c03bb1c93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="{{colclass}}">
                                <div class="info-media">
                                    <img src="{{{media}}}" class="media-image">
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="info-media">
';
                $buffer .= $indent . '                                    <img src="';
                $value = $this->resolveValue($context->find('media'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="media-image">
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33fb409f72b4d08f044eb4865575e9b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="marketing-spot" id="marketingspot">
            <div class="container">
                <div class="info-block">
                    <div class="row">
                        <div class="{{colclass}}">
                            {{#mspotheadcontent}}
                                <div class="info-head">
                                    {{#title}}<h2><b>{{title}}</b></h2>{{/title}}
                                    {{#desc}}<p>{{desc}}</p>{{/desc}}
                                </div>
                            {{/mspotheadcontent}}
                            {{#content}}
                                <div class="info-content">
                                    <p>{{{content}}}</p>
                                </div>
                            {{/content}}
                        </div>
                        {{#media}}
                            <div class="{{colclass}}">
                                <div class="info-media">
                                    <img src="{{{media}}}" class="media-image">
                                </div>
                            </div>
                        {{/media}}
                    </div>
                </div>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="marketing-spot" id="marketingspot">
';
                $buffer .= $indent . '            <div class="container">
';
                $buffer .= $indent . '                <div class="info-block">
';
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('mspotheadcontent');
                $buffer .= $this->sectionC9c098ea83724045d6239b6ec4e7c596($context, $indent, $value);
                $value = $context->find('content');
                $buffer .= $this->sectionAff7deff453eb73ac6c4f47b830d8661($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $value = $context->find('media');
                $buffer .= $this->section405a86c5f403edd5406c8e3c03bb1c93($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cf4068facfb65f628e5fa96f6234989(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#isblockempty}}
        <div class="custom-alert-block alert alert-warning">
            {{#str}}blockemptymessage, theme_academi{{/str}}
        </div>
    {{/isblockempty}}

    {{#blockisempty}}
        <div class="marketing-spot" id="marketingspot">
            <div class="container">
                <div class="info-block">
                    <div class="row">
                        <div class="{{colclass}}">
                            {{#mspotheadcontent}}
                                <div class="info-head">
                                    {{#title}}<h2><b>{{title}}</b></h2>{{/title}}
                                    {{#desc}}<p>{{desc}}</p>{{/desc}}
                                </div>
                            {{/mspotheadcontent}}
                            {{#content}}
                                <div class="info-content">
                                    <p>{{{content}}}</p>
                                </div>
                            {{/content}}
                        </div>
                        {{#media}}
                            <div class="{{colclass}}">
                                <div class="info-media">
                                    <img src="{{{media}}}" class="media-image">
                                </div>
                            </div>
                        {{/media}}
                    </div>
                </div>
            </div>
        </div>
    {{/blockisempty}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isblockempty');
                $buffer .= $this->section6b7e7ef469d5fda15584df7b8e5f4e98($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('blockisempty');
                $buffer .= $this->section33fb409f72b4d08f044eb4865575e9b3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc88055ba3f8a8484de1de82ae5035b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="desc-wrap">
                            {{#title}}<h2><b>{{title}}</b></h2>{{/title}}
                            {{#desc}}<p>{{desc}}</p>{{/desc}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="desc-wrap">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('title');
                $buffer .= $this->sectionC5e86c178fb86c9b101c2a039baae99b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('desc');
                $buffer .= $this->section0f7c057c31698afa4490cc3bb77ec0d7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA894d289dcf8a1b40477f9f091177625(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="btn-block">
                            <a href="{{{buttonlink}}}" target="{{btntarget}}" class=\'btn-jumbo\'>
                                {{{btntext}}}
                            </a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="btn-block">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('buttonlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="';
                $value = $this->resolveValue($context->find('btntarget'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class=\'btn-jumbo\'>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('btntext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53dfcc62fe24e169cbbe4f21d2da2fdc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="jumbotron-block {{^jumbotroncontent}}jumbotron-btn-block{{/jumbotroncontent}} {{btnclass}}" id="jumbotron">
            <div class="container">
                <div class="inner-wrap">
                    {{#jumbotroncontent}}
                        <div class="desc-wrap">
                            {{#title}}<h2><b>{{title}}</b></h2>{{/title}}
                            {{#desc}}<p>{{desc}}</p>{{/desc}}
                        </div>
                    {{/jumbotroncontent}}
                    {{#btntext}}
                        <div class="btn-block">
                            <a href="{{{buttonlink}}}" target="{{btntarget}}" class=\'btn-jumbo\'>
                                {{{btntext}}}
                            </a>
                        </div>
                    {{/btntext}}
                </div>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="jumbotron-block ';
                $value = $context->find('jumbotroncontent');
                if (empty($value)) {
                    
                    $buffer .= 'jumbotron-btn-block';
                }
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('btnclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" id="jumbotron">
';
                $buffer .= $indent . '            <div class="container">
';
                $buffer .= $indent . '                <div class="inner-wrap">
';
                $value = $context->find('jumbotroncontent');
                $buffer .= $this->sectionCc88055ba3f8a8484de1de82ae5035b8($context, $indent, $value);
                $value = $context->find('btntext');
                $buffer .= $this->sectionA894d289dcf8a1b40477f9f091177625($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section239e49a5092988f95cebce6dc5238f85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#isblockempty}}
        <div class="custom-alert-block alert alert-warning">
            {{#str}}blockemptymessage, theme_academi{{/str}}
        </div>
    {{/isblockempty}}

    {{#blockisempty}}
        <div class="jumbotron-block {{^jumbotroncontent}}jumbotron-btn-block{{/jumbotroncontent}} {{btnclass}}" id="jumbotron">
            <div class="container">
                <div class="inner-wrap">
                    {{#jumbotroncontent}}
                        <div class="desc-wrap">
                            {{#title}}<h2><b>{{title}}</b></h2>{{/title}}
                            {{#desc}}<p>{{desc}}</p>{{/desc}}
                        </div>
                    {{/jumbotroncontent}}
                    {{#btntext}}
                        <div class="btn-block">
                            <a href="{{{buttonlink}}}" target="{{btntarget}}" class=\'btn-jumbo\'>
                                {{{btntext}}}
                            </a>
                        </div>
                    {{/btntext}}
                </div>
            </div>
        </div>
    {{/blockisempty}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isblockempty');
                $buffer .= $this->section6b7e7ef469d5fda15584df7b8e5f4e98($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('blockisempty');
                $buffer .= $this->section53dfcc62fe24e169cbbe4f21d2da2fdc($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
