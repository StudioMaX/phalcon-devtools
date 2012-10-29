<?php 

namespace Phalcon\Mvc\Model\MetaData {

	/**
	 * Phalcon\Mvc\Model\MetaData\Apc
	 *
	 * Stores model meta-data in the APC cache. Data will erased if the web server is restarted
	 *
	 * By default meta-data is stored 48 hours (172800 seconds)
	 *
	 * You can query the meta-data by printing apc_fetch('$PMM$') or apc_fetch('$PMM$my-local-app')
	 *
	 *<code>
	 * $metaData = new Phalcon\Mvc\Model\Metadata\Apc(array(
	 *    'suffix' => 'my-app-id',
	 *    'lifetime' => 86400
	 * ));
	 *</code>
	 */
	
	class Apc extends \Phalcon\Mvc\Model\MetaData {

		const MODELS_ATTRIBUTES = 0;

		const MODELS_PRIMARY_KEY = 1;

		const MODELS_NON_PRIMARY_KEY = 2;

		const MODELS_NOT_NULL = 3;

		const MODELS_DATA_TYPES = 4;

		const MODELS_DATA_TYPES_NUMERIC = 5;

		const MODELS_DATE_AT = 6;

		const MODELS_DATE_IN = 7;

		const MODELS_IDENTITY_COLUMN = 8;

		const MODELS_DATA_TYPES_BIND = 9;

		const MODELS_AUTOMATIC_DEFAULT_INSERT = 10;

		const MODELS_AUTOMATIC_DEFAULT_UPDATE = 11;

		protected $_metaData;

		protected $_suffix;

		protected $_ttl;

		/**
		 * \Phalcon\Mvc\Model\MetaData\Apc constructor
		 *
		 * @param array $options
		 */
		public function __construct($options){ }


		/**
		 * Reads meta-data from APC
		 *
		 * @param  string $key
		 * @return array
		 */
		public function read($key){ }


		/**
		 * Writes the meta-data to APC
		 *
		 * @param string $key
		 * @param array $data
		 */
		public function write($key, $data){ }

	}
}
