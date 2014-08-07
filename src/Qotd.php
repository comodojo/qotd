<?php namespace Comodojo\Qotd;

/** 
 * Music's quotes to inspire your coding
 *
 * @package     Comodojo Spare Parts
 * @author      Marco Giovinazzi <info@comodojo.org>
 * @license     GPL-3.0+
 *
 * LICENSE:
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

class Qotd {

    private $quotes = null;

    private $no_quotes_message = "Sorry, no music for you today";

    public function __construct() {

        $quotes = file_get_contents('../resources/quotes');

        if ( $quotes === false ) return;

        $quotes_array = explode("\n",$quotes);
        
        array_shift($quotes_array);

        $this->quotes = $quotes_array;

    }

    public function getQuotes() {

        if ( is_null($this->quotes) ) return array($this->no_quotes_message);

        return $this->quotes;

    }

    public function getQuote() {

        if ( is_null($this->quotes) ) return $this->no_quotes_message;

        return $this->quotes[rand(1,sizeof($this->quotes)-1)];

    }

    public function getQuotesAsStore() {

        if ( is_null($this->quotes) ) return array(array('id'=>0, 'quote'=>$this->no_quotes_message));

        $return = array();
        
        foreach($this->quotes as $id=>$quote) array_push($return, array('id'=>$id, 'quote'=>$quote));

        return $return;

    }

}
