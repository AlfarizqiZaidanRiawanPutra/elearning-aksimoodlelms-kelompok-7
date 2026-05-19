<?php

class __Mustache_6e1de054e5fbc7a1e11a9f3afa76a2cd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_academi/navbar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $value = $context->find('themestyleheader');
        $buffer .= $this->sectionD2a231ce0cbdf8019bab078967ae5449($context, $indent, $value);

        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d48646f6ac9348e54f11650ab5fa541(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="logo">
                            <img src="{{logourl}}" alt="{{sitename}}">
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="logo">
';
                $buffer .= $indent . '                            <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDff528c47af29e8c87ad9be20fcc4e1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{# logourl }}
                        <span class="logo">
                            <img src="{{logourl}}" alt="{{sitename}}">
                        </span>
                    {{/ logourl }}
                    {{^ logourl }}
                        <span class="site-name hidden-sm-down">{{{ sitename }}}</span>
                    {{/ logourl }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('logourl');
                $buffer .= $this->section4d48646f6ac9348e54f11650ab5fa541($context, $indent, $value);
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <span class="site-name hidden-sm-down">';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93c8d9d1fbc83d3304990812340c40e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="nav-site-name">{{{sitename}}}</span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="nav-site-name">';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4c2668d30bb21c04e6c1d399f6a463e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="primary-navigation">
                        {{> core/moremenu}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2a231ce0cbdf8019bab078967ae5449(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="header-main">
        <div class="container-fluid">
            <nav class="navbar navbar-light bg-faded navbar-expand">
                <a href="{{{ config.wwwroot }}}/?redirect=0" class="navbar-brand {{# logourl }}has-logo{{/ logourl }}
                {{^ logourl }}
                    hidden-sm-down
                {{/ logourl }}
                    ">
                {{#showlogo}}
                    {{# logourl }}
                        <span class="logo">
                            <img src="{{logourl}}" alt="{{sitename}}">
                        </span>
                    {{/ logourl }}
                    {{^ logourl }}
                        <span class="site-name hidden-sm-down">{{{ sitename }}}</span>
                    {{/ logourl }}
                {{/showlogo}}
                {{#showsitename}}
                    <span class="nav-site-name">{{{sitename}}}</span>
                {{/showsitename}}
                </a>

                {{#primarymoremenu}}
                    <div class="primary-navigation">
                        {{> core/moremenu}}
                    </div>
                {{/primarymoremenu}}

                <ul class="navbar-nav d-none d-md-flex my-1 px-1">
                    <!-- page_heading_menu -->
                    {{{ output.page_heading_menu }}}
                </ul>

            </nav>
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="header-main">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                $buffer .= $indent . '            <nav class="navbar navbar-light bg-faded navbar-expand">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/?redirect=0" class="navbar-brand ';
                $value = $context->find('logourl');
                $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    hidden-sm-down
';
                }
                $buffer .= $indent . '                    ">
';
                $value = $context->find('showlogo');
                $buffer .= $this->sectionDff528c47af29e8c87ad9be20fcc4e1a($context, $indent, $value);
                $value = $context->find('showsitename');
                $buffer .= $this->section93c8d9d1fbc83d3304990812340c40e1($context, $indent, $value);
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '
';
                $value = $context->find('primarymoremenu');
                $buffer .= $this->sectionD4c2668d30bb21c04e6c1d399f6a463e($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
                $buffer .= $indent . '                    <!-- page_heading_menu -->
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            </nav>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
