<?php

namespace Sulfur\Parser\Filters;

class Type extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $lineno = $token->getLine();
        $name = $this->parser->getStream()->expect(Twig_Token::NAME_TYPE)->getValue();
        $this->parser->getStream()->expect(Twig_Token::OPERATOR_TYPE, '=');
        $value = $this->parser->getExpressionParser()->parseExpression();

        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

        return new \Sulfur\Node\Filters\Type($name, $value, $lineno, $this->getTag());
    }

    public function getTag()
    {
        return 'sulfur.filters.type';
    }
}