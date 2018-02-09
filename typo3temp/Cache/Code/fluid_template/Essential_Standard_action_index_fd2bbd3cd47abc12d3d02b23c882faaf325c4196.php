<?php
class FluidCache_Essential_Standard_action_index_fd2bbd3cd47abc12d3d02b23c882faaf325c4196 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'footerContact';
$arguments1['label'] = 'Footer Contact';
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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments6 = array();
$arguments6['name'] = 'addressLineOne';
$arguments6['label'] = 'Address Line One';
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
$arguments6['eval'] = 'trim';
$arguments6['size'] = 32;
$arguments6['maxCharacters'] = NULL;
$arguments6['minimum'] = NULL;
$arguments6['maximum'] = NULL;
$arguments6['placeholder'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments8 = array();
$arguments8['name'] = 'addressLineTwo';
$arguments8['label'] = 'Address Line Two';
$arguments8['default'] = NULL;
$arguments8['required'] = false;
$arguments8['exclude'] = false;
$arguments8['transform'] = NULL;
$arguments8['enabled'] = true;
$arguments8['requestUpdate'] = false;
$arguments8['displayCond'] = NULL;
$arguments8['inherit'] = true;
$arguments8['inheritEmpty'] = true;
$arguments8['clear'] = false;
$arguments8['variables'] = array (
);
$arguments8['extensionName'] = NULL;
$arguments8['eval'] = 'trim';
$arguments8['size'] = 32;
$arguments8['maxCharacters'] = NULL;
$arguments8['minimum'] = NULL;
$arguments8['maximum'] = NULL;
$arguments8['placeholder'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments10 = array();
$arguments10['name'] = 'phoneNumber';
$arguments10['label'] = 'Phone Number';
$arguments10['default'] = NULL;
$arguments10['required'] = false;
$arguments10['exclude'] = false;
$arguments10['transform'] = NULL;
$arguments10['enabled'] = true;
$arguments10['requestUpdate'] = false;
$arguments10['displayCond'] = NULL;
$arguments10['inherit'] = true;
$arguments10['inheritEmpty'] = true;
$arguments10['clear'] = false;
$arguments10['variables'] = array (
);
$arguments10['extensionName'] = NULL;
$arguments10['eval'] = 'trim';
$arguments10['size'] = 32;
$arguments10['maxCharacters'] = NULL;
$arguments10['minimum'] = NULL;
$arguments10['maximum'] = NULL;
$arguments10['placeholder'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments12 = array();
$arguments12['name'] = 'email';
$arguments12['label'] = 'Email';
$arguments12['default'] = NULL;
$arguments12['required'] = false;
$arguments12['exclude'] = false;
$arguments12['transform'] = NULL;
$arguments12['enabled'] = true;
$arguments12['requestUpdate'] = false;
$arguments12['displayCond'] = NULL;
$arguments12['inherit'] = true;
$arguments12['inheritEmpty'] = true;
$arguments12['clear'] = false;
$arguments12['variables'] = array (
);
$arguments12['extensionName'] = NULL;
$arguments12['eval'] = 'trim';
$arguments12['size'] = 32;
$arguments12['maxCharacters'] = NULL;
$arguments12['minimum'] = NULL;
$arguments12['maximum'] = NULL;
$arguments12['placeholder'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

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



return '
    <h1 style="color: #999999;">Footer Contact</h1>
';
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output14 = '';

$output14 .= '
    <div class="col-md-3">
        <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments15 = array();
$arguments15['value'] = $currentVariableContainer->getOrNull('title');
$arguments15['keepQuotes'] = false;
$arguments15['encoding'] = NULL;
$arguments15['doubleEncode'] = true;
$renderChildrenClosure16 = function() {return NULL;};
$value17 = ($arguments15['value'] !== NULL ? $arguments15['value'] : $renderChildrenClosure16());

$output14 .= (!is_string($value17) ? $value17 : htmlspecialchars($value17, ($arguments15['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments15['encoding'] !== NULL ? $arguments15['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments15['doubleEncode']));

$output14 .= '</h4>
        <ul class="fh5co-footer-links">
            <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = $currentVariableContainer->getOrNull('addressLineOne');
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output14 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output14 .= '<br> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = $currentVariableContainer->getOrNull('addressLineTwo');
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output14 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output14 .= '</li>
            <li><a href="tel://1234567920">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments24 = array();
$arguments24['value'] = $currentVariableContainer->getOrNull('phoneNumber');
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = NULL;
$arguments24['doubleEncode'] = true;
$renderChildrenClosure25 = function() {return NULL;};
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());

$output14 .= (!is_string($value26) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments24['encoding'] !== NULL ? $arguments24['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments24['doubleEncode']));

$output14 .= '</a></li>
            <li><a href="mailto:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = $currentVariableContainer->getOrNull('email');
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output14 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output14 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = $currentVariableContainer->getOrNull('email');
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output14 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output14 .= '</a></li>
        </ul>
    </div>
';


return $output14;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output33 = '';

$output33 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments34 = array();
$arguments34['name'] = 'Content';
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output33 .= $viewHelper36->initializeArgumentsAndRender();

$output33 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments37 = array();
$arguments37['name'] = 'Configuration';
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments40 = array();
$arguments40['id'] = 'footerContact';
$arguments40['label'] = 'Footer Contact';
$arguments40['wizardTab'] = 'Footer';
$arguments40['description'] = NULL;
$arguments40['icon'] = NULL;
$arguments40['mergeValues'] = false;
$arguments40['enabled'] = true;
$arguments40['compact'] = false;
$arguments40['variables'] = array (
);
$arguments40['options'] = NULL;
$arguments40['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments40['extensionName'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments43 = array();
$arguments43['name'] = 'title';
$arguments43['label'] = 'Title';
$arguments43['default'] = NULL;
$arguments43['required'] = false;
$arguments43['exclude'] = false;
$arguments43['transform'] = NULL;
$arguments43['enabled'] = true;
$arguments43['requestUpdate'] = false;
$arguments43['displayCond'] = NULL;
$arguments43['inherit'] = true;
$arguments43['inheritEmpty'] = true;
$arguments43['clear'] = false;
$arguments43['variables'] = array (
);
$arguments43['extensionName'] = NULL;
$arguments43['eval'] = 'trim';
$arguments43['size'] = 32;
$arguments43['maxCharacters'] = NULL;
$arguments43['minimum'] = NULL;
$arguments43['maximum'] = NULL;
$arguments43['placeholder'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments45 = array();
$arguments45['name'] = 'addressLineOne';
$arguments45['label'] = 'Address Line One';
$arguments45['default'] = NULL;
$arguments45['required'] = false;
$arguments45['exclude'] = false;
$arguments45['transform'] = NULL;
$arguments45['enabled'] = true;
$arguments45['requestUpdate'] = false;
$arguments45['displayCond'] = NULL;
$arguments45['inherit'] = true;
$arguments45['inheritEmpty'] = true;
$arguments45['clear'] = false;
$arguments45['variables'] = array (
);
$arguments45['extensionName'] = NULL;
$arguments45['eval'] = 'trim';
$arguments45['size'] = 32;
$arguments45['maxCharacters'] = NULL;
$arguments45['minimum'] = NULL;
$arguments45['maximum'] = NULL;
$arguments45['placeholder'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments47 = array();
$arguments47['name'] = 'addressLineTwo';
$arguments47['label'] = 'Address Line Two';
$arguments47['default'] = NULL;
$arguments47['required'] = false;
$arguments47['exclude'] = false;
$arguments47['transform'] = NULL;
$arguments47['enabled'] = true;
$arguments47['requestUpdate'] = false;
$arguments47['displayCond'] = NULL;
$arguments47['inherit'] = true;
$arguments47['inheritEmpty'] = true;
$arguments47['clear'] = false;
$arguments47['variables'] = array (
);
$arguments47['extensionName'] = NULL;
$arguments47['eval'] = 'trim';
$arguments47['size'] = 32;
$arguments47['maxCharacters'] = NULL;
$arguments47['minimum'] = NULL;
$arguments47['maximum'] = NULL;
$arguments47['placeholder'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments49 = array();
$arguments49['name'] = 'phoneNumber';
$arguments49['label'] = 'Phone Number';
$arguments49['default'] = NULL;
$arguments49['required'] = false;
$arguments49['exclude'] = false;
$arguments49['transform'] = NULL;
$arguments49['enabled'] = true;
$arguments49['requestUpdate'] = false;
$arguments49['displayCond'] = NULL;
$arguments49['inherit'] = true;
$arguments49['inheritEmpty'] = true;
$arguments49['clear'] = false;
$arguments49['variables'] = array (
);
$arguments49['extensionName'] = NULL;
$arguments49['eval'] = 'trim';
$arguments49['size'] = 32;
$arguments49['maxCharacters'] = NULL;
$arguments49['minimum'] = NULL;
$arguments49['maximum'] = NULL;
$arguments49['placeholder'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments51 = array();
$arguments51['name'] = 'email';
$arguments51['label'] = 'Email';
$arguments51['default'] = NULL;
$arguments51['required'] = false;
$arguments51['exclude'] = false;
$arguments51['transform'] = NULL;
$arguments51['enabled'] = true;
$arguments51['requestUpdate'] = false;
$arguments51['displayCond'] = NULL;
$arguments51['inherit'] = true;
$arguments51['inheritEmpty'] = true;
$arguments51['clear'] = false;
$arguments51['variables'] = array (
);
$arguments51['extensionName'] = NULL;
$arguments51['eval'] = 'trim';
$arguments51['size'] = 32;
$arguments51['maxCharacters'] = NULL;
$arguments51['minimum'] = NULL;
$arguments51['maximum'] = NULL;
$arguments51['placeholder'] = NULL;
$renderChildrenClosure52 = function() {return NULL;};

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output42 .= '
    ';
return $output42;
};

$output39 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
';
return $output39;
};

$output33 .= '';

$output33 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments53 = array();
$arguments53['name'] = 'Preview';
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
    <h1 style="color: #999999;">Footer Contact</h1>
';
};

$output33 .= '';

$output33 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments55 = array();
$arguments55['name'] = 'Main';
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
    <div class="col-md-3">
        <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments58 = array();
$arguments58['value'] = $currentVariableContainer->getOrNull('title');
$arguments58['keepQuotes'] = false;
$arguments58['encoding'] = NULL;
$arguments58['doubleEncode'] = true;
$renderChildrenClosure59 = function() {return NULL;};
$value60 = ($arguments58['value'] !== NULL ? $arguments58['value'] : $renderChildrenClosure59());

$output57 .= (!is_string($value60) ? $value60 : htmlspecialchars($value60, ($arguments58['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments58['encoding'] !== NULL ? $arguments58['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments58['doubleEncode']));

$output57 .= '</h4>
        <ul class="fh5co-footer-links">
            <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = $currentVariableContainer->getOrNull('addressLineOne');
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() {return NULL;};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());

$output57 .= (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode']));

$output57 .= '<br> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = $currentVariableContainer->getOrNull('addressLineTwo');
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output57 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output57 .= '</li>
            <li><a href="tel://1234567920">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = $currentVariableContainer->getOrNull('phoneNumber');
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() {return NULL;};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output57 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output57 .= '</a></li>
            <li><a href="mailto:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = $currentVariableContainer->getOrNull('email');
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = NULL;
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() {return NULL;};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());

$output57 .= (!is_string($value72) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments70['encoding'] !== NULL ? $arguments70['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments70['doubleEncode']));

$output57 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = $currentVariableContainer->getOrNull('email');
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() {return NULL;};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output57 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode']));

$output57 .= '</a></li>
        </ul>
    </div>
';
return $output57;
};

$output33 .= '';


return $output33;
}


}
#1518192372    25210     