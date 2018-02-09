<?php
class FluidCache_Essential_Content_action_index_00471686a79ae9346872b4b3f633085befd60570 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output14 = '';

$output14 .= '
    <h1 style="color: #999999;">Footer Contact</h1>
    <p><b>Title: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments15 = array();
$arguments15['value'] = $currentVariableContainer->getOrNull('title');
$arguments15['keepQuotes'] = false;
$arguments15['encoding'] = NULL;
$arguments15['doubleEncode'] = true;
$renderChildrenClosure16 = function() {return NULL;};
$value17 = ($arguments15['value'] !== NULL ? $arguments15['value'] : $renderChildrenClosure16());

$output14 .= (!is_string($value17) ? $value17 : htmlspecialchars($value17, ($arguments15['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments15['encoding'] !== NULL ? $arguments15['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments15['doubleEncode']));

$output14 .= '</p>
    <p><b>Address Line One: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = $currentVariableContainer->getOrNull('addressLineOne');
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output14 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output14 .= '</p>
    <p><b>Address Line Two: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = $currentVariableContainer->getOrNull('addressLineTwo');
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output14 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output14 .= '</p>
    <p><b>Phone Number: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments24 = array();
$arguments24['value'] = $currentVariableContainer->getOrNull('phoneNumber');
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = NULL;
$arguments24['doubleEncode'] = true;
$renderChildrenClosure25 = function() {return NULL;};
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());

$output14 .= (!is_string($value26) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments24['encoding'] !== NULL ? $arguments24['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments24['doubleEncode']));

$output14 .= '</p>
    <p><b>Email: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = $currentVariableContainer->getOrNull('email');
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output14 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output14 .= '</p>
';


return $output14;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output30 = '';

$output30 .= '
    <div class="col-md-3">
        <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = $currentVariableContainer->getOrNull('title');
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() {return NULL;};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output30 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));

$output30 .= '</h4>
        <ul class="fh5co-footer-links">
            <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = $currentVariableContainer->getOrNull('addressLineOne');
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() {return NULL;};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output30 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments34['encoding'] !== NULL ? $arguments34['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments34['doubleEncode']));

$output30 .= '<br> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = $currentVariableContainer->getOrNull('addressLineTwo');
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output30 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output30 .= '</li>
            <li><a href="tel://1234567920">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = $currentVariableContainer->getOrNull('phoneNumber');
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output30 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output30 .= '</a></li>
            <li><a href="mailto:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = $currentVariableContainer->getOrNull('email');
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output30 .= (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));

$output30 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments46 = array();
$arguments46['value'] = $currentVariableContainer->getOrNull('email');
$arguments46['keepQuotes'] = false;
$arguments46['encoding'] = NULL;
$arguments46['doubleEncode'] = true;
$renderChildrenClosure47 = function() {return NULL;};
$value48 = ($arguments46['value'] !== NULL ? $arguments46['value'] : $renderChildrenClosure47());

$output30 .= (!is_string($value48) ? $value48 : htmlspecialchars($value48, ($arguments46['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments46['encoding'] !== NULL ? $arguments46['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments46['doubleEncode']));

$output30 .= '</a></li>
        </ul>
    </div>
';


return $output30;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output49 = '';

$output49 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments50 = array();
$arguments50['name'] = 'Content';
$renderChildrenClosure51 = function() {return NULL;};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output49 .= $viewHelper52->initializeArgumentsAndRender();

$output49 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments53 = array();
$arguments53['name'] = 'Configuration';
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output55 = '';

$output55 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments56 = array();
$arguments56['id'] = 'footerContact';
$arguments56['label'] = 'Footer Contact';
$arguments56['wizardTab'] = 'Footer';
$arguments56['description'] = NULL;
$arguments56['icon'] = NULL;
$arguments56['mergeValues'] = false;
$arguments56['enabled'] = true;
$arguments56['compact'] = false;
$arguments56['variables'] = array (
);
$arguments56['options'] = NULL;
$arguments56['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments56['extensionName'] = NULL;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments59 = array();
$arguments59['name'] = 'title';
$arguments59['label'] = 'Title';
$arguments59['default'] = NULL;
$arguments59['required'] = false;
$arguments59['exclude'] = false;
$arguments59['transform'] = NULL;
$arguments59['enabled'] = true;
$arguments59['requestUpdate'] = false;
$arguments59['displayCond'] = NULL;
$arguments59['inherit'] = true;
$arguments59['inheritEmpty'] = true;
$arguments59['clear'] = false;
$arguments59['variables'] = array (
);
$arguments59['extensionName'] = NULL;
$arguments59['eval'] = 'trim';
$arguments59['size'] = 32;
$arguments59['maxCharacters'] = NULL;
$arguments59['minimum'] = NULL;
$arguments59['maximum'] = NULL;
$arguments59['placeholder'] = NULL;
$renderChildrenClosure60 = function() {return NULL;};

$output58 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments61 = array();
$arguments61['name'] = 'addressLineOne';
$arguments61['label'] = 'Address Line One';
$arguments61['default'] = NULL;
$arguments61['required'] = false;
$arguments61['exclude'] = false;
$arguments61['transform'] = NULL;
$arguments61['enabled'] = true;
$arguments61['requestUpdate'] = false;
$arguments61['displayCond'] = NULL;
$arguments61['inherit'] = true;
$arguments61['inheritEmpty'] = true;
$arguments61['clear'] = false;
$arguments61['variables'] = array (
);
$arguments61['extensionName'] = NULL;
$arguments61['eval'] = 'trim';
$arguments61['size'] = 32;
$arguments61['maxCharacters'] = NULL;
$arguments61['minimum'] = NULL;
$arguments61['maximum'] = NULL;
$arguments61['placeholder'] = NULL;
$renderChildrenClosure62 = function() {return NULL;};

$output58 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output58 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments63 = array();
$arguments63['name'] = 'addressLineTwo';
$arguments63['label'] = 'Address Line Two';
$arguments63['default'] = NULL;
$arguments63['required'] = false;
$arguments63['exclude'] = false;
$arguments63['transform'] = NULL;
$arguments63['enabled'] = true;
$arguments63['requestUpdate'] = false;
$arguments63['displayCond'] = NULL;
$arguments63['inherit'] = true;
$arguments63['inheritEmpty'] = true;
$arguments63['clear'] = false;
$arguments63['variables'] = array (
);
$arguments63['extensionName'] = NULL;
$arguments63['eval'] = 'trim';
$arguments63['size'] = 32;
$arguments63['maxCharacters'] = NULL;
$arguments63['minimum'] = NULL;
$arguments63['maximum'] = NULL;
$arguments63['placeholder'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};

$output58 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output58 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments65 = array();
$arguments65['name'] = 'phoneNumber';
$arguments65['label'] = 'Phone Number';
$arguments65['default'] = NULL;
$arguments65['required'] = false;
$arguments65['exclude'] = false;
$arguments65['transform'] = NULL;
$arguments65['enabled'] = true;
$arguments65['requestUpdate'] = false;
$arguments65['displayCond'] = NULL;
$arguments65['inherit'] = true;
$arguments65['inheritEmpty'] = true;
$arguments65['clear'] = false;
$arguments65['variables'] = array (
);
$arguments65['extensionName'] = NULL;
$arguments65['eval'] = 'trim';
$arguments65['size'] = 32;
$arguments65['maxCharacters'] = NULL;
$arguments65['minimum'] = NULL;
$arguments65['maximum'] = NULL;
$arguments65['placeholder'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};

$output58 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output58 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments67 = array();
$arguments67['name'] = 'email';
$arguments67['label'] = 'Email';
$arguments67['default'] = NULL;
$arguments67['required'] = false;
$arguments67['exclude'] = false;
$arguments67['transform'] = NULL;
$arguments67['enabled'] = true;
$arguments67['requestUpdate'] = false;
$arguments67['displayCond'] = NULL;
$arguments67['inherit'] = true;
$arguments67['inheritEmpty'] = true;
$arguments67['clear'] = false;
$arguments67['variables'] = array (
);
$arguments67['extensionName'] = NULL;
$arguments67['eval'] = 'trim';
$arguments67['size'] = 32;
$arguments67['maxCharacters'] = NULL;
$arguments67['minimum'] = NULL;
$arguments67['maximum'] = NULL;
$arguments67['placeholder'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output58 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output58 .= '
    ';
return $output58;
};

$output55 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
';
return $output55;
};

$output49 .= '';

$output49 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments69 = array();
$arguments69['name'] = 'Preview';
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
    <h1 style="color: #999999;">Footer Contact</h1>
    <p><b>Title: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = $currentVariableContainer->getOrNull('title');
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() {return NULL;};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());

$output71 .= (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode']));

$output71 .= '</p>
    <p><b>Address Line One: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments75 = array();
$arguments75['value'] = $currentVariableContainer->getOrNull('addressLineOne');
$arguments75['keepQuotes'] = false;
$arguments75['encoding'] = NULL;
$arguments75['doubleEncode'] = true;
$renderChildrenClosure76 = function() {return NULL;};
$value77 = ($arguments75['value'] !== NULL ? $arguments75['value'] : $renderChildrenClosure76());

$output71 .= (!is_string($value77) ? $value77 : htmlspecialchars($value77, ($arguments75['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments75['encoding'] !== NULL ? $arguments75['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments75['doubleEncode']));

$output71 .= '</p>
    <p><b>Address Line Two: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = $currentVariableContainer->getOrNull('addressLineTwo');
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());

$output71 .= (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));

$output71 .= '</p>
    <p><b>Phone Number: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = $currentVariableContainer->getOrNull('phoneNumber');
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output71 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output71 .= '</p>
    <p><b>Email: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments84 = array();
$arguments84['value'] = $currentVariableContainer->getOrNull('email');
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = NULL;
$arguments84['doubleEncode'] = true;
$renderChildrenClosure85 = function() {return NULL;};
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());

$output71 .= (!is_string($value86) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments84['encoding'] !== NULL ? $arguments84['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments84['doubleEncode']));

$output71 .= '</p>
';
return $output71;
};

$output49 .= '';

$output49 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments87 = array();
$arguments87['name'] = 'Main';
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
    <div class="col-md-3">
        <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments90 = array();
$arguments90['value'] = $currentVariableContainer->getOrNull('title');
$arguments90['keepQuotes'] = false;
$arguments90['encoding'] = NULL;
$arguments90['doubleEncode'] = true;
$renderChildrenClosure91 = function() {return NULL;};
$value92 = ($arguments90['value'] !== NULL ? $arguments90['value'] : $renderChildrenClosure91());

$output89 .= (!is_string($value92) ? $value92 : htmlspecialchars($value92, ($arguments90['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments90['encoding'] !== NULL ? $arguments90['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments90['doubleEncode']));

$output89 .= '</h4>
        <ul class="fh5co-footer-links">
            <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = $currentVariableContainer->getOrNull('addressLineOne');
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output89 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output89 .= '<br> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments96 = array();
$arguments96['value'] = $currentVariableContainer->getOrNull('addressLineTwo');
$arguments96['keepQuotes'] = false;
$arguments96['encoding'] = NULL;
$arguments96['doubleEncode'] = true;
$renderChildrenClosure97 = function() {return NULL;};
$value98 = ($arguments96['value'] !== NULL ? $arguments96['value'] : $renderChildrenClosure97());

$output89 .= (!is_string($value98) ? $value98 : htmlspecialchars($value98, ($arguments96['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments96['encoding'] !== NULL ? $arguments96['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments96['doubleEncode']));

$output89 .= '</li>
            <li><a href="tel://1234567920">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments99 = array();
$arguments99['value'] = $currentVariableContainer->getOrNull('phoneNumber');
$arguments99['keepQuotes'] = false;
$arguments99['encoding'] = NULL;
$arguments99['doubleEncode'] = true;
$renderChildrenClosure100 = function() {return NULL;};
$value101 = ($arguments99['value'] !== NULL ? $arguments99['value'] : $renderChildrenClosure100());

$output89 .= (!is_string($value101) ? $value101 : htmlspecialchars($value101, ($arguments99['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments99['encoding'] !== NULL ? $arguments99['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments99['doubleEncode']));

$output89 .= '</a></li>
            <li><a href="mailto:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments102 = array();
$arguments102['value'] = $currentVariableContainer->getOrNull('email');
$arguments102['keepQuotes'] = false;
$arguments102['encoding'] = NULL;
$arguments102['doubleEncode'] = true;
$renderChildrenClosure103 = function() {return NULL;};
$value104 = ($arguments102['value'] !== NULL ? $arguments102['value'] : $renderChildrenClosure103());

$output89 .= (!is_string($value104) ? $value104 : htmlspecialchars($value104, ($arguments102['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments102['encoding'] !== NULL ? $arguments102['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments102['doubleEncode']));

$output89 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = $currentVariableContainer->getOrNull('email');
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() {return NULL;};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output89 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output89 .= '</a></li>
        </ul>
    </div>
';
return $output89;
};

$output49 .= '';


return $output49;
}


}
#1518192754    33417     