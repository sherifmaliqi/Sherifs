<?php
class FluidCache_Essential_Content_action_render_48624e56852cb9aaee6e8f95028ac02ae476e240 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Content';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['id'] = 'footerAbout';
$arguments1['label'] = 'Footer About';
$arguments1['wizardTab'] = 'Footer';
$arguments1['description'] = NULL;
$arguments1['icon'] = NULL;
$arguments1['mergeValues'] = false;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments4 = array();
$arguments4['name'] = 'title';
$arguments4['label'] = 'Title';
$arguments4['default'] = NULL;
$arguments4['required'] = false;
$arguments4['exclude'] = false;
$arguments4['transform'] = NULL;
$arguments4['enabled'] = true;
$arguments4['requestUpdate'] = false;
$arguments4['displayCond'] = NULL;
$arguments4['inherit'] = true;
$arguments4['inheritEmpty'] = true;
$arguments4['clear'] = false;
$arguments4['variables'] = array (
);
$arguments4['extensionName'] = NULL;
$arguments4['eval'] = 'trim';
$arguments4['size'] = 32;
$arguments4['maxCharacters'] = NULL;
$arguments4['minimum'] = NULL;
$arguments4['maximum'] = NULL;
$arguments4['placeholder'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$arguments6 = array();
$arguments6['name'] = 'description';
$arguments6['label'] = 'Description';
$arguments6['default'] = NULL;
$arguments6['required'] = false;
$arguments6['exclude'] = false;
$arguments6['transform'] = NULL;
$arguments6['enabled'] = true;
$arguments6['requestUpdate'] = false;
$arguments6['displayCond'] = NULL;
$arguments6['inherit'] = true;
$arguments6['inheritEmpty'] = true;
$arguments6['clear'] = false;
$arguments6['variables'] = array (
);
$arguments6['extensionName'] = NULL;
$arguments6['validate'] = 'trim';
$arguments6['cols'] = 85;
$arguments6['rows'] = 10;
$arguments6['defaultExtras'] = '';
$arguments6['enableRichText'] = false;
$arguments6['renderType'] = '';
$arguments6['format'] = '';
$renderChildrenClosure7 = function() {return NULL;};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
    ';
return $output3;
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * section Preview
 */
public function section_f1fbb2b43dca281d0138f4fcc92543ad143ef0b1(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output8 = '';

$output8 .= '
    <h1 style="color: #999999;">Footer About</h1>
    <p><b>Title: </b></b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = $currentVariableContainer->getOrNull('title');
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = NULL;
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() {return NULL;};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());

$output8 .= (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments9['encoding'] !== NULL ? $arguments9['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments9['doubleEncode']));

$output8 .= '</p>
    <p><b>Description: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = $currentVariableContainer->getOrNull('description');
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output8 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));

$output8 .= '</p>
';


return $output8;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output15 = '';

$output15 .= '
    <div class="col-md-3 fh5co-widget">
        <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = $currentVariableContainer->getOrNull('title');
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output15 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output15 .= '</h4>
        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = $currentVariableContainer->getOrNull('description');
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = NULL;
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() {return NULL;};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());

$output15 .= (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments19['encoding'] !== NULL ? $arguments19['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments19['doubleEncode']));

$output15 .= '</p>
    </div>
';


return $output15;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output22 = '';

$output22 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments23 = array();
$arguments23['name'] = 'Content';
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output22 .= $viewHelper25->initializeArgumentsAndRender();

$output22 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments26 = array();
$arguments26['name'] = 'Configuration';
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments29 = array();
$arguments29['id'] = 'footerAbout';
$arguments29['label'] = 'Footer About';
$arguments29['wizardTab'] = 'Footer';
$arguments29['description'] = NULL;
$arguments29['icon'] = NULL;
$arguments29['mergeValues'] = false;
$arguments29['enabled'] = true;
$arguments29['compact'] = false;
$arguments29['variables'] = array (
);
$arguments29['options'] = NULL;
$arguments29['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments29['extensionName'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments32 = array();
$arguments32['name'] = 'title';
$arguments32['label'] = 'Title';
$arguments32['default'] = NULL;
$arguments32['required'] = false;
$arguments32['exclude'] = false;
$arguments32['transform'] = NULL;
$arguments32['enabled'] = true;
$arguments32['requestUpdate'] = false;
$arguments32['displayCond'] = NULL;
$arguments32['inherit'] = true;
$arguments32['inheritEmpty'] = true;
$arguments32['clear'] = false;
$arguments32['variables'] = array (
);
$arguments32['extensionName'] = NULL;
$arguments32['eval'] = 'trim';
$arguments32['size'] = 32;
$arguments32['maxCharacters'] = NULL;
$arguments32['minimum'] = NULL;
$arguments32['maximum'] = NULL;
$arguments32['placeholder'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};

$output31 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$arguments34 = array();
$arguments34['name'] = 'description';
$arguments34['label'] = 'Description';
$arguments34['default'] = NULL;
$arguments34['required'] = false;
$arguments34['exclude'] = false;
$arguments34['transform'] = NULL;
$arguments34['enabled'] = true;
$arguments34['requestUpdate'] = false;
$arguments34['displayCond'] = NULL;
$arguments34['inherit'] = true;
$arguments34['inheritEmpty'] = true;
$arguments34['clear'] = false;
$arguments34['variables'] = array (
);
$arguments34['extensionName'] = NULL;
$arguments34['validate'] = 'trim';
$arguments34['cols'] = 85;
$arguments34['rows'] = 10;
$arguments34['defaultExtras'] = '';
$arguments34['enableRichText'] = false;
$arguments34['renderType'] = '';
$arguments34['format'] = '';
$renderChildrenClosure35 = function() {return NULL;};

$output31 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output31 .= '
    ';
return $output31;
};

$output28 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
';
return $output28;
};

$output22 .= '';

$output22 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments36 = array();
$arguments36['name'] = 'Preview';
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
    <h1 style="color: #999999;">Footer About</h1>
    <p><b>Title: </b></b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = $currentVariableContainer->getOrNull('title');
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output38 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output38 .= '</p>
    <p><b>Description: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = $currentVariableContainer->getOrNull('description');
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output38 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode']));

$output38 .= '</p>
';
return $output38;
};

$output22 .= '';

$output22 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments45 = array();
$arguments45['name'] = 'Main';
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
    <div class="col-md-3 fh5co-widget">
        <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = $currentVariableContainer->getOrNull('title');
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output47 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));

$output47 .= '</h4>
        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = $currentVariableContainer->getOrNull('description');
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output47 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output47 .= '</p>
    </div>
';
return $output47;
};

$output22 .= '';


return $output22;
}


}
#1518192421    16005     