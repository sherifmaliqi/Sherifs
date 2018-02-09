<?php
class FluidCache_Essential_Standard_action_index_b53b288bb6a647264c8310521a26299754476974 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'footerCopyright';
$arguments1['label'] = 'Footer Copyright';
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
$arguments4['name'] = 'copyrightClaim';
$arguments4['label'] = 'Copyright Claim';
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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$arguments6 = array();
$arguments6['name'] = 'socialMedia';
$arguments6['label'] = 'Social Media';
$arguments6['variables'] = array (
);
$arguments6['extensionName'] = NULL;
$arguments6['inherit'] = false;
$arguments6['inheritEmpty'] = false;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$arguments9 = array();
$arguments9['name'] = 'socialNetwork';
$arguments9['label'] = 'Social Network';
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$arguments9['inherit'] = false;
$arguments9['inheritEmpty'] = false;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments12 = array();
$arguments12['name'] = 'link';
$arguments12['label'] = 'Link';
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

$output11 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$arguments14 = array();
$arguments14['name'] = 'name';
$arguments14['label'] = 'Name';
// Rendering Array
$array15 = array();
// Rendering Array
$array16 = array();
$array16['0'] = 'None';
$array16['1'] = 'null';
$array15['0'] = $array16;
// Rendering Array
$array17 = array();
$array17['0'] = 'Facebook';
$array17['1'] = 'icon-facebook';
$array15['1'] = $array17;
// Rendering Array
$array18 = array();
$array18['0'] = 'Linkedin';
$array18['1'] = 'icon-linkedin';
$array15['2'] = $array18;
// Rendering Array
$array19 = array();
$array19['0'] = 'Instagram';
$array19['1'] = 'icon-instagram';
$array15['3'] = $array19;
// Rendering Array
$array20 = array();
$array20['0'] = 'Twitter';
$array20['1'] = 'icon-twitter';
$array15['4'] = $array20;
$arguments14['items'] = $array15;
$arguments14['default'] = NULL;
$arguments14['required'] = false;
$arguments14['exclude'] = false;
$arguments14['transform'] = NULL;
$arguments14['enabled'] = true;
$arguments14['requestUpdate'] = false;
$arguments14['displayCond'] = NULL;
$arguments14['inherit'] = true;
$arguments14['inheritEmpty'] = true;
$arguments14['clear'] = false;
$arguments14['variables'] = array (
);
$arguments14['extensionName'] = NULL;
$arguments14['validate'] = 'trim';
$arguments14['size'] = 1;
$arguments14['multiple'] = false;
$arguments14['minItems'] = 0;
$arguments14['maxItems'] = 1;
$arguments14['itemListStyle'] = NULL;
$arguments14['selectedListStyle'] = NULL;
$arguments14['renderMode'] = NULL;
$arguments14['emptyOption'] = false;
$arguments14['translateCsvItems'] = NULL;
$arguments14['renderType'] = 'selectSingle';
$arguments14['showIconTable'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output11 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments14, $renderChildrenClosure21, $renderingContext);

$output11 .= '
            ';
return $output11;
};

$output8 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
        ';
return $output8;
};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

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

$output22 = '';

$output22 .= '
    <h1 style="color: #999999;">Footer Copyright</h1>
    <p><b>Copyright Claim: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output22 .= (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));

$output22 .= '</p>
    <p><b>Social Media: </b></p>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments26 = array();
$arguments26['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments26['as'] = 'socialItem';
$arguments26['key'] = '';
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
        <p><b>Name: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output28 .= '</p>
        <p><b>Link: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output28 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output28 .= '</p>
    ';
return $output28;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output22 .= '
';


return $output22;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output35 = '';

$output35 .= '
    <div class="col-md-12 text-center">
        <p>
            <small class="block">&copy;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output35 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode']));

$output35 .= '</small>
        </p>
        <p>
            <ul class="fh5co-social-icons">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments39 = array();
// Rendering Boolean node
$arguments39['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('socialMedia'));
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments45 = array();
$arguments45['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments45['as'] = 'socialItem';
$arguments45['key'] = '';
$arguments45['reverse'] = false;
$arguments45['iteration'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output47 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));

$output47 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output47 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output47 .= '"></i></a>
                        </li>
                    ';
return $output47;
};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                ';
return $output44;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments54 = array();
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output41 .= '
            ';
return $output41;
};
$arguments39['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments57 = array();
$arguments57['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments57['as'] = 'socialItem';
$arguments57['key'] = '';
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());

$output59 .= (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));

$output59 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());

$output59 .= (!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode']));

$output59 .= '"></i></a>
                        </li>
                    ';
return $output59;
};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
                ';
return $output56;
};
$arguments39['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output35 .= '
            </ul>
        </p>
    </div>
';


return $output35;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output66 = '';

$output66 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments67 = array();
$arguments67['name'] = 'Content';
$renderChildrenClosure68 = function() {return NULL;};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper69->setArguments($arguments67);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output66 .= $viewHelper69->initializeArgumentsAndRender();

$output66 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments70 = array();
$arguments70['name'] = 'Configuration';
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments73 = array();
$arguments73['id'] = 'footerCopyright';
$arguments73['label'] = 'Footer Copyright';
$arguments73['wizardTab'] = 'Footer';
$arguments73['description'] = NULL;
$arguments73['icon'] = NULL;
$arguments73['mergeValues'] = false;
$arguments73['enabled'] = true;
$arguments73['compact'] = false;
$arguments73['variables'] = array (
);
$arguments73['options'] = NULL;
$arguments73['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments73['extensionName'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments76 = array();
$arguments76['name'] = 'copyrightClaim';
$arguments76['label'] = 'Copyright Claim';
$arguments76['default'] = NULL;
$arguments76['required'] = false;
$arguments76['exclude'] = false;
$arguments76['transform'] = NULL;
$arguments76['enabled'] = true;
$arguments76['requestUpdate'] = false;
$arguments76['displayCond'] = NULL;
$arguments76['inherit'] = true;
$arguments76['inheritEmpty'] = true;
$arguments76['clear'] = false;
$arguments76['variables'] = array (
);
$arguments76['extensionName'] = NULL;
$arguments76['eval'] = 'trim';
$arguments76['size'] = 32;
$arguments76['maxCharacters'] = NULL;
$arguments76['minimum'] = NULL;
$arguments76['maximum'] = NULL;
$arguments76['placeholder'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};

$output75 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$arguments78 = array();
$arguments78['name'] = 'socialMedia';
$arguments78['label'] = 'Social Media';
$arguments78['variables'] = array (
);
$arguments78['extensionName'] = NULL;
$arguments78['inherit'] = false;
$arguments78['inheritEmpty'] = false;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output80 = '';

$output80 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$arguments81 = array();
$arguments81['name'] = 'socialNetwork';
$arguments81['label'] = 'Social Network';
$arguments81['variables'] = array (
);
$arguments81['extensionName'] = NULL;
$arguments81['inherit'] = false;
$arguments81['inheritEmpty'] = false;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments84 = array();
$arguments84['name'] = 'link';
$arguments84['label'] = 'Link';
$arguments84['default'] = NULL;
$arguments84['required'] = false;
$arguments84['exclude'] = false;
$arguments84['transform'] = NULL;
$arguments84['enabled'] = true;
$arguments84['requestUpdate'] = false;
$arguments84['displayCond'] = NULL;
$arguments84['inherit'] = true;
$arguments84['inheritEmpty'] = true;
$arguments84['clear'] = false;
$arguments84['variables'] = array (
);
$arguments84['extensionName'] = NULL;
$arguments84['eval'] = 'trim';
$arguments84['size'] = 32;
$arguments84['maxCharacters'] = NULL;
$arguments84['minimum'] = NULL;
$arguments84['maximum'] = NULL;
$arguments84['placeholder'] = NULL;
$renderChildrenClosure85 = function() {return NULL;};

$output83 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$arguments86 = array();
$arguments86['name'] = 'name';
$arguments86['label'] = 'Name';
// Rendering Array
$array87 = array();
// Rendering Array
$array88 = array();
$array88['0'] = 'None';
$array88['1'] = 'null';
$array87['0'] = $array88;
// Rendering Array
$array89 = array();
$array89['0'] = 'Facebook';
$array89['1'] = 'icon-facebook';
$array87['1'] = $array89;
// Rendering Array
$array90 = array();
$array90['0'] = 'Linkedin';
$array90['1'] = 'icon-linkedin';
$array87['2'] = $array90;
// Rendering Array
$array91 = array();
$array91['0'] = 'Instagram';
$array91['1'] = 'icon-instagram';
$array87['3'] = $array91;
// Rendering Array
$array92 = array();
$array92['0'] = 'Twitter';
$array92['1'] = 'icon-twitter';
$array87['4'] = $array92;
$arguments86['items'] = $array87;
$arguments86['default'] = NULL;
$arguments86['required'] = false;
$arguments86['exclude'] = false;
$arguments86['transform'] = NULL;
$arguments86['enabled'] = true;
$arguments86['requestUpdate'] = false;
$arguments86['displayCond'] = NULL;
$arguments86['inherit'] = true;
$arguments86['inheritEmpty'] = true;
$arguments86['clear'] = false;
$arguments86['variables'] = array (
);
$arguments86['extensionName'] = NULL;
$arguments86['validate'] = 'trim';
$arguments86['size'] = 1;
$arguments86['multiple'] = false;
$arguments86['minItems'] = 0;
$arguments86['maxItems'] = 1;
$arguments86['itemListStyle'] = NULL;
$arguments86['selectedListStyle'] = NULL;
$arguments86['renderMode'] = NULL;
$arguments86['emptyOption'] = false;
$arguments86['translateCsvItems'] = NULL;
$arguments86['renderType'] = 'selectSingle';
$arguments86['showIconTable'] = false;
$renderChildrenClosure93 = function() {return NULL;};

$output83 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments86, $renderChildrenClosure93, $renderingContext);

$output83 .= '
            ';
return $output83;
};

$output80 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
        ';
return $output80;
};

$output75 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output75 .= '
    ';
return $output75;
};

$output72 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
';
return $output72;
};

$output66 .= '';

$output66 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments94 = array();
$arguments94['name'] = 'Preview';
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';

$output96 .= '
    <h1 style="color: #999999;">Footer Copyright</h1>
    <p><b>Copyright Claim: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() {return NULL;};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());

$output96 .= (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));

$output96 .= '</p>
    <p><b>Social Media: </b></p>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments100 = array();
$arguments100['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments100['as'] = 'socialItem';
$arguments100['key'] = '';
$arguments100['reverse'] = false;
$arguments100['iteration'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
        <p><b>Name: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments103 = array();
$arguments103['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments103['keepQuotes'] = false;
$arguments103['encoding'] = NULL;
$arguments103['doubleEncode'] = true;
$renderChildrenClosure104 = function() {return NULL;};
$value105 = ($arguments103['value'] !== NULL ? $arguments103['value'] : $renderChildrenClosure104());

$output102 .= (!is_string($value105) ? $value105 : htmlspecialchars($value105, ($arguments103['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments103['encoding'] !== NULL ? $arguments103['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments103['doubleEncode']));

$output102 .= '</p>
        <p><b>Link: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() {return NULL;};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output102 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output102 .= '</p>
    ';
return $output102;
};

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output96 .= '
';
return $output96;
};

$output66 .= '';

$output66 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments109 = array();
$arguments109['name'] = 'Main';
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
    <div class="col-md-12 text-center">
        <p>
            <small class="block">&copy;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments112 = array();
$arguments112['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments112['keepQuotes'] = false;
$arguments112['encoding'] = NULL;
$arguments112['doubleEncode'] = true;
$renderChildrenClosure113 = function() {return NULL;};
$value114 = ($arguments112['value'] !== NULL ? $arguments112['value'] : $renderChildrenClosure113());

$output111 .= (!is_string($value114) ? $value114 : htmlspecialchars($value114, ($arguments112['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments112['encoding'] !== NULL ? $arguments112['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments112['doubleEncode']));

$output111 .= '</small>
        </p>
        <p>
            <ul class="fh5co-social-icons">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments115 = array();
// Rendering Boolean node
$arguments115['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('socialMedia'));
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments118 = array();
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments121 = array();
$arguments121['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments121['as'] = 'socialItem';
$arguments121['key'] = '';
$arguments121['reverse'] = false;
$arguments121['iteration'] = NULL;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output123 = '';

$output123 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = NULL;
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() {return NULL;};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());

$output123 .= (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments124['encoding'] !== NULL ? $arguments124['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments124['doubleEncode']));

$output123 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments127 = array();
$arguments127['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments127['keepQuotes'] = false;
$arguments127['encoding'] = NULL;
$arguments127['doubleEncode'] = true;
$renderChildrenClosure128 = function() {return NULL;};
$value129 = ($arguments127['value'] !== NULL ? $arguments127['value'] : $renderChildrenClosure128());

$output123 .= (!is_string($value129) ? $value129 : htmlspecialchars($value129, ($arguments127['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments127['encoding'] !== NULL ? $arguments127['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments127['doubleEncode']));

$output123 .= '"></i></a>
                        </li>
                    ';
return $output123;
};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
                ';
return $output120;
};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments130 = array();
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output117 .= '
            ';
return $output117;
};
$arguments115['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output132 = '';

$output132 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments133 = array();
$arguments133['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments133['as'] = 'socialItem';
$arguments133['key'] = '';
$arguments133['reverse'] = false;
$arguments133['iteration'] = NULL;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output135 = '';

$output135 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments136 = array();
$arguments136['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments136['keepQuotes'] = false;
$arguments136['encoding'] = NULL;
$arguments136['doubleEncode'] = true;
$renderChildrenClosure137 = function() {return NULL;};
$value138 = ($arguments136['value'] !== NULL ? $arguments136['value'] : $renderChildrenClosure137());

$output135 .= (!is_string($value138) ? $value138 : htmlspecialchars($value138, ($arguments136['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments136['encoding'] !== NULL ? $arguments136['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments136['doubleEncode']));

$output135 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments139 = array();
$arguments139['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments139['keepQuotes'] = false;
$arguments139['encoding'] = NULL;
$arguments139['doubleEncode'] = true;
$renderChildrenClosure140 = function() {return NULL;};
$value141 = ($arguments139['value'] !== NULL ? $arguments139['value'] : $renderChildrenClosure140());

$output135 .= (!is_string($value141) ? $value141 : htmlspecialchars($value141, ($arguments139['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments139['encoding'] !== NULL ? $arguments139['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments139['doubleEncode']));

$output135 .= '"></i></a>
                        </li>
                    ';
return $output135;
};

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                ';
return $output132;
};
$arguments115['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output111 .= '
            </ul>
        </p>
    </div>
';
return $output111;
};

$output66 .= '';


return $output66;
}


}
#1518194064    39648     