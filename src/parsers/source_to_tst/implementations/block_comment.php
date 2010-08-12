<?php
/**
 * File containing the ezcTemplateBlockCommentSourceToTstParser class
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
 * Parser for block comments.
 *
 * Block comments start with a slash (/) and an asterix (*) and ends with an
 * asterix (*) and a slash (/).
 *
 * @package Template
 * @version //autogen//
 * @access private
 */
class ezcTemplateBlockCommentSourceToTstParser extends ezcTemplateSourceToTstParser
{
   /**
     * Passes control to parent.
     *
     * @param ezcTemplateParser $parser
     * @param ezcTemplateSourceToTstParser $parentParser
     * @param ezcTemplateCursor $startCursor
     */
    function __construct( ezcTemplateParser $parser, /*ezcTemplateSourceToTstParser*/ $parentParser, /*ezcTemplateCursor*/ $startCursor )
    {
        parent::__construct( $parser, $parentParser, $startCursor );
    }

    /**
     * Parses the comment by looking for the end marker * + /.
     *
     * @param ezcTemplateCursor $cursor
     * @return bool
     */
    protected function parseCurrent( ezcTemplateCursor $cursor )
    {
        if ( !$cursor->atEnd() )
        {
            $cursor->advance( 2 );

            $tagPos = $cursor->findPosition( '*/' );
            if ( $tagPos !== false )
            {
                // reached end of comment
                $cursor->gotoPosition( $tagPos + 2 );
                $commentBlock = new ezcTemplateBlockCommentTstNode( $this->parser->source, $this->startCursor, clone $cursor );

                $commentBlock->commentText = substr( $commentBlock->text(), 2, -2 );
                $this->appendElement( $commentBlock );
                return true;
            }
        }
        return false;
    }
}

?>
