<?php
/**
 * File containing the ezcTemplatePropertyFetchOperatorTstNode class
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Template
 * @version //autogen//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @access private
 */
/**
 * Fetching of property value in an expression.
 *
 * @package Template
 * @version //autogen//
 * @access private
 */
class ezcTemplatePropertyFetchOperatorTstNode extends ezcTemplateOperatorTstNode
{
    /**
     * The source operand element which the fetch is executed on.
     *
     * @var ezcTemplateTstNode
     */
    public $sourceOperand;

    /**
     * The element which contains the name of the property.
     *
     * @var ezcTemplateTstNode
     */
    public $property;

    /**
     *
     * @param ezcTemplateSource $source
     * @param ezcTemplateCursor $start
     * @param ezcTemplateCursor $end
     */
    public function __construct( ezcTemplateSourceCode $source, /*ezcTemplateCursor*/ $start, /*ezcTemplateCursor*/ $end )
    {
        parent::__construct( $source, $start, $end,
                             11, 2, self::LEFT_ASSOCIATIVE,
                             '->' );
        $this->sourceOperand = null;
        $this->property = null;
    }

    public function getTreeProperties()
    {
        return array( 'symbol'         => $this->symbol,
                      'sourceOperand'  => $this->sourceOperand,
                      'property'       => $this->property );
    }

    public function appendParameter( $element )
    {
        if ( $this->sourceOperand === null )
            $this->sourceOperand = $element;
        else
            $this->property = $element;
        $this->parameters[] = $element;
    }
}
?>
