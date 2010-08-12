<?php
/**
 * File containing the ezcTemplateRegExp class
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
 * This class contains a bundle of static functions, each implementing a specific
 * function used inside the template language. 
 * 
 * @package Template
 * @version //autogen//
 * @access private
 */
class ezcTemplateRegExp
{
    /**
     * Returns an array with the matching values of the performed match between the regular expression 
     * $reg and the $string. 
     *
     * @param string $reg
     * @param string $string
     * @return array(string)
     */
    public static function preg_match( $reg, $string )
    {
        preg_match( $reg, $string, $matches );
        return $matches;
    }
}


?>
