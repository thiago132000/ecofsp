<?php
if (! isset($data)) {
	exit; // no direct access
}

foreach ($data['all']['styles'] as $obj) {
	$data['row'] = array();
	$data['row']['obj'] = $obj;

	$active = (isset($data['current']['styles']) && in_array($data['row']['obj']->handle, $data['current']['styles']));

	$data['row']['class'] = $active ? 'wpacu_not_load' : '';
	$data['row']['checked'] = $active ? 'checked="checked"' : '';

	/*
	 * $data['row']['is_group_unloaded'] is only used to apply a red background in the style's area to point out that the style is unloaded
	 *               is set to `true` if either the asset is unloaded everywhere or it's unloaded on a group of pages (such as all pages belonging to 'page' post type)
	*/
	$data['row']['global_unloaded'] = $data['row']['is_post_type_unloaded'] = $data['row']['is_load_exception_per_page'] = $data['row']['is_group_unloaded'] = $data['row']['is_regex_unload_match'] = false;

	// Mark it as unloaded - Everywhere
	if (in_array($data['row']['obj']->handle, $data['global_unload']['styles'])) {
		$data['row']['global_unloaded'] = $data['row']['is_group_unloaded'] = true;
	}

	// Mark it as unloaded - for the Current Post Type
	if ($data['bulk_unloaded_type'] && in_array($data['row']['obj']->handle, $data['bulk_unloaded'][$data['bulk_unloaded_type']]['styles'])) {
		$data['row']['is_group_unloaded'] = true;

		if ($data['bulk_unloaded_type'] === 'post_type') {
			$data['row']['is_post_type_unloaded'] = true;
		}
	}

	$isLoadExceptionPerPage = isset($data['load_exceptions']['styles']) && in_array($data['row']['obj']->handle, $data['load_exceptions']['styles']);

	$data['row']['is_load_exception_per_page'] = $isLoadExceptionPerPage;

	if ($data['row']['is_group_unloaded']) {
		$data['row']['class'] .= ' wpacu_not_load';
	}

	$data['row']['extra_data_css_list'] = (is_object($data['row']['obj']->extra) && isset($data['row']['obj']->extra->after)) ? $data['row']['obj']->extra->after : array();

	if (! $data['row']['extra_data_css_list']) {
		$data['row']['extra_data_css_list'] = (is_array($data['row']['obj']->extra) && isset($data['row']['obj']->extra['after'])) ? $data['row']['obj']->extra['after'] : array();
	}

	$data['row']['class'] .= ' style_'.$data['row']['obj']->handle;

	// Load Template
	$templateRowOutput = \WpAssetCleanUp\Main::instance()->parseTemplate(
		'/meta-box-loaded-assets/_asset-style-single-row',
		$data
	);

	if (isset($data['rows_build_array']) && $data['rows_build_array']) {
		$uniqueHandle = $uniqueHandleOriginal = $data['row']['obj']->handle;

		if (array_key_exists($uniqueHandle, $data['rows_assets'])) {
			$uniqueHandle .= 1; // make sure each key is unique
		}

		if (isset($data['rows_by_location']) && $data['rows_by_location']) {
			$data['rows_assets']
	          [$data['row']['obj']->locationMain] // 'plugins', 'themes' etc.
			    [$data['row']['obj']->locationChild] // Theme/Plugin Title
			      [$uniqueHandle]
			        ['style'] = $templateRowOutput;
		} elseif (isset($data['rows_by_position']) && $data['rows_by_position']) {
			$handlePosition = $data['row']['obj']->position;

			$data['rows_assets']
			  [$handlePosition] // 'head', 'body'
			    [$uniqueHandle]
			      ['style'] = $templateRowOutput;
		} elseif (isset($data['rows_by_preload']) && $data['rows_by_preload']) {
			$preloadStatus = $data['row']['obj']->preload_status;

			$data['rows_assets']
				[$preloadStatus] // 'preloaded', 'not_preloaded'
					[$uniqueHandle]
						['style'] = $templateRowOutput;
		} elseif (isset($data['rows_by_parents']) && $data['rows_by_parents'])  {
			$childHandles = isset($data['all_deps']['styles'][$data['row']['obj']->handle]) ? $data['all_deps']['styles'][$data['row']['obj']->handle] : array();

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
						['style'] = $templateRowOutput;
		} elseif (isset($data['rows_by_loaded_unloaded']) && $data['rows_by_loaded_unloaded']) {
			$handleStatus = (strpos($data['row']['class'], 'wpacu_not_load') !== false) ? 'unloaded' : 'loaded';

			$data['rows_assets']
				[$handleStatus] // 'loaded', 'unloaded'
					[$uniqueHandle]
						['style'] = $templateRowOutput;
		} else {
			$data['rows_assets'][$uniqueHandle] = $templateRowOutput;
		}
	} else {
		echo $templateRowOutput;
	}
}
