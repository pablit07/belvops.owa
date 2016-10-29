<?php

//
// Open Web Analytics - An Open Source Web Analytics Framework
//
// Copyright 2006 Peter Adams. All rights reserved.
//
// Licensed under GPL v2.0 http://www.gnu.org/copyleft/gpl.html
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// $Id$
//

/**
 * OWA Configuration
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version		$Revision$	      
 * @since		owa 1.0.0
 */
 
/**
 * DATABASE CONFIGURATION
 *
 * Connection info for databases that will be used by OWA. 
 *
 */

define('OWA_DB_TYPE', 'mysql'); // options: mysql
define('OWA_DB_NAME', 'belvede2_owa'); // name of the database
define('OWA_DB_HOST', 'localhost'); // host name of the server housing the database
define('OWA_DB_USER', 'belvede2_owa'); // database user
define('OWA_DB_PASSWORD', '}VklK]nw,kpT'); // database user's password

/**
 * AUTHENTICATION KEYS AND SALTS
 *
 * Change these to different unique phrases.
 */
define('OWA_NONCE_KEY', 'IIn0mVz]~a,tck76U}B74/^&{2{bP+3x,FU<z%K&T7d>uroPt9z67Ufxx=k&,,4z');  
define('OWA_NONCE_SALT', '!m;t}=$QL)6!vh-j?Tr9~Fq|~7?JYyOnvfV*piVu*=z]$^pz#A]Gr1kM&OzZ.9X6');
define('OWA_AUTH_KEY', 'dz@wAsk$lUV|[E2P1NK)]#[7k A}3_n{j&SY2diSVV/biDT9hc>y-}IEGGhHI&Oy');
define('OWA_AUTH_SALT', 'ywzYOX(HQ1=Kvkd32AtAj`hT`1.i.|s?M?7?r?)sUkj7[a.#5^F{brS>!LOjN+a-');

/** 
 * PUBLIC URL
 *
 * Define the URL of OWA's base directory e.g. http://www.domain.com/path/to/owa/ 
 * Don't forget the slash at the end.
 */
 
define('OWA_PUBLIC_URL', 'http://belvops.com/owa/');  

/** 
 * OWA ERROR HANDLER
 *
 * Overide OWA error handler. This should be done through the admin GUI, but 
 * can be handy during install or development. 
 * 
 * Choices are: 
 *
 * 'production' - will log only critical errors to a log file.
 * 'development' - logs al sorts of useful debug to log file.
 */

//define('OWA_ERROR_HANDLER', 'development');

/** 
 * LOG PHP ERRORS
 *
 * Log all php errors to OWA's error log file. Only do this to debug.
 */

//define('OWA_LOG_PHP_ERRORS', true);
 
/** 
 * OBJECT CACHING
 *
 * Override setting to cache objects. Caching will increase performance. 
 */

//define('OWA_CACHE_OBJECTS', true);

/**
 * CONFIGURATION ID
 *
 * Override to load an alternative user configuration
 */
 
//define('OWA_CONFIGURATION_ID', '1');


?>