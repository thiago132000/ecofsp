<?php
if (! isset($data)) {
	exit; // no direct access
}

foreach ($data['all']['scripts'] as $obj) {
	$data['row'] = array();
    $data['row']['obj'] = $obj;

	$active = (isset($data['current']['scripts']) && in_array($data['row']['obj']->handle, $data['current']['scripts']));

    $data['row']['class']   = $active ? 'wpacu_not_load' : '';
	$data['row']['checked'] = $active ? 'checked="checked"' : '';

	/*
	 * $data['row']['is_group_unloaded'] is only used to apply a red background in the script's area to point out that the script is unloaded
	*/
	$data['row']['global_unloaded'] = $data['row']['is_post_type_unloaded'] = $data['row']['is_load_exception_per_page'] = $data['row']['is_group_unloaded'] = false;

	// Mark it as unloaded - Everywhere
	if (in_array($data['row']['obj']->handle, $data['global_unload']['scripts']) && !$data['row']['class']) {
		$data['row']['global_unloaded'] = $data['row']['is_group_unloaded'] = true;
	}

	// Mark it as unloaded - for the Current Post Type
	if ($data['bulk_unloaded_type'] && in_array($data['row']['obj']->handle, $data['bulk_unloaded'][$data['bulk_unloaded_type']]['scripts'])) {
		$data['row']['is_group_unloaded'] = true;

		if ($data['bulk_unloaded_type'] === 'post_type') {
			$data['row']['is_post_type_unloaded'] = true;
		}
	}

	$isLoadExceptionPerPage = isset($data['load_exceptions']['scripts']) && in_array($data['row']['obj']->handle, $data['load_exceptions']['scripts']);

	$data['row']['is_load_exception_per_page']    = $isLoadExceptionPerPage;

	$isLoadException = $isLoadExceptionPerPage;

	// No load exception of any kind and a bulk unload rule is applied? Append the CSS class for unloading
	if (! $isLoadException && $data['row']['is_group_unloaded']) {
		$data['row']['class'] .= ' wpacu_not_load';
	}

	$data['row']['extra_data_js'] = (is_object($data['row']['obj']->extra) && isset($data['row']['obj']->extra->data)) ? $data['row']['obj']->extra->data : false;

	if (! $data['row']['extra_data_js']) {
		$data['row']['extra_data_js'] = (is_array($data['row']['obj']->extra) && isset($data['row']['obj']->extra['data'])) ? $data['row']['obj']->extra['data'] : false;
	}

	$data['row']['class'] .= ' script_'.$data['row']['obj']->handle;

	// Load Template
	$templateRowOutput = \WpAssetCleanUp\Main::instance()->parseTemplate(
		'/meta-box-loaded-assets/_asset-script-single-row',
		$data
	);

	if (isset($data['rows_build_array']) && $data['rows_build_array']) {
		$uniqueHandle = $data['row']['obj']->handle;

		if (array_key_exists($uniqueHandle, $data['rows_assets'])) {
			$uniqueHandle .= 1; // make sure each key is unique
		}

		if (isset($data['rows_by_location']) && $data['rows_by_location']) {
			$data['rows_assets']
			  [$data['row']['obj']->locationMain]
				[$data['row']['obj']->locationChild]
				  [$uniqueHandle]
					['script'] = $templateRowOutput;
		} elseif (isset($data['rows_by_position']) && $data['rows_by_position']) {
			$handlePosition = $data['row']['obj']->position;

			$data['rows_assets']
				[$handlePosition] // 'head', 'body'
					[$uniqueHandle]
						['script'] = $templateRowOutput;
		} elseif (isset($data['rows_by_preload']) && $data['rows_by_preload']) {
			$preloadStatus = $data['row']['obj']->preload_status;

			$data['rows_assets']
				[$preloadStatus] // 'preloaded', 'not_preloaded'
					[$uniqueHandle]
						['script'] = $templateRowOutput;
		} elseif (isset($data['rows_by_parents']) && $data['rows_by_parents'])  {
			$childHandles = isset($data['all_deps']['scripts'][$data['row']['obj']->handle]) ? $data['all_deps']['scripts'][$data['row']['obj']->handle] : array();

			if (! empty($childHandles)) {
				$handleStatus = 'parent';
			} elseif (isset($data['row']['obj']->deps) && ! empty($data['row']['obj']->deps)) {
				$handleStatus = 'child';
			} else {
				$handleStatus = 'independent';
			}

			$data['rows_assets']
				[$handleStatus] // 'parent', 'child', 'independent'
					[$uniqueHandle]
						['scripts'] = $templateRowOutput;
		} elseif (isset($data['rows_by_loaded_unloaded']) && $data['rows_by_loaded_unloaded']) {
			$handleStatus = (strpos($data['row']['class'], 'wpacu_not_load') !== false) ? 'unloaded' : 'loaded';

			$data['rows_assets']
				[$handleStatus] // 'loaded', 'unloaded'
					[$uniqueHandle]
						['script'] = $templateRowOutput;
		} else {
			$data['rows_assets'][$uniqueHandle] = $templateRowOutput;
		}
	} else {
		echo $templateRowOutput;
	}
}
