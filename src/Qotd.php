<?php namespace Comodojo\Qotd;

/** 
 * Music quotes to inspire your coding
 *
 * @package     Comodojo Spare Parts
 * @author      Marco Giovinazzi <info@comodojo.org>
 * @license     GPL-3.0+
 *
 * LICENSE:
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

class Qotd {

    /**
     * Quotes repo
     * 
     * @var array
     */
    private $quotes = null;

    /**
     * No quote message
     * 
     * @var string
     */
    private $no_quotes_message = "Sorry, no music for you today";

    /**
     * Load quotes
     *
     * @return  Object  $this
     */
    public function __construct() {

        $quotes = file_get_contents( __DIR__ . '/../resources/quotes');

        if ( $quotes === false ) return;

        $quotes_array = explode("\n",$quotes);
        
        array_shift($quotes_array);

        $this->quotes = $quotes_array;

    }

    /**
     * Get all quotes
     *
     * @return  array
     */
    public function getQuotes() {

        if ( is_null($this->quotes) ) return array($this->no_quotes_message);

        return $this->quotes;

    }

    /**
     * Get single quote
     *
     * @return  string
     */
    public function getQuote() {

        if ( is_null($this->quotes) ) return $this->no_quotes_message;

        return $this->quotes[rand(1,sizeof($this->quotes)-1)];

    }

    /**
     * Get all quotes as a store
     *
     * @return  array
     */
    public function getQuotesAsStore() {

        if ( is_null($this->quotes) ) return array(array('id'=>0, 'quote'=>$this->no_quotes_message));

        $return = array();
        
        foreach($this->quotes as $id=>$quote) array_push($return, array('id'=>$id, 'quote'=>$quote));

        return $return;

    }

}
