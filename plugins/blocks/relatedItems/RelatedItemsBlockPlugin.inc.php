<?php

/**
 * @file RelatedItemsBlockPlugin.inc.php
 *
 * Copyright (c) 2003-2010 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class RelatedItemsBlockPlugin
 * @ingroup plugins_blocks_related_items
 *
 * @brief Class for related items block plugin
 */

// $Id$


import('plugins.BlockPlugin');

class RelatedItemsBlockPlugin extends BlockPlugin {
	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return Locale::translate('plugins.block.relatedItems.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return Locale::translate('plugins.block.relatedItems.description');
	}

	/**
	 * Get the supported contexts (e.g. BLOCK_CONTEXT_...) for this block.
	 * @return array
	 */
	function getSupportedContexts() {
		return array(BLOCK_CONTEXT_RIGHT_SIDEBAR);
	}

	/**
	 * Get the HTML contents for this block.
	 * @param $templateMgr object
	 * @return $string
	 */
	function getContents(&$templateMgr) {
		$journal =& Request::getJournal();

		return parent::getContents($templateMgr);
	}
}

?>