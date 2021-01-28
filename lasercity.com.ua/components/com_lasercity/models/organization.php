<?php defined('_JEXEC') or die;

class lasercityModelOrganization extends JModelItem
{
	public function getItem($id = null)
	{
		$id       = (!empty($id)) ? $id : (int) $this->getState('item.id');
		
		$language = JFactory::$language->getTag();

		$db           = JFactory::getDbo();
		$organization = $db->setQuery("
SELECT 
    (
        SELECT `value`
        FROM `#__lasercity_translations_{$language}`
        WHERE
            `object_name`='organization' AND
            `object_column`='title' AND
            `object_id`=`organization`.`id`
    ) as `title`,
    (
        SELECT `value`
        FROM `#__lasercity_translations_{$language}`
        WHERE
            `object_name`='organization' AND
            `object_column`='type' AND
            `object_id`=`organization`.`id`
    ) as `type`,
    (
        SELECT `value`
        FROM `#__lasercity_translations_{$language}`
        WHERE
            `object_name`='organization' AND
            `object_column`='description' AND
            `object_id`=`organization`.`id`
    ) as `description`, `id`, `logo`, `alias`
FROM `#__lasercity_organizations` as `organization`
WHERE `id`={$id}
            ")->loadObject();


		$affiliates = $db->setQuery("
SELECT
    (
        SELECT `value`
        FROM `#__lasercity_translations_{$language}`
        WHERE
            `object_name`='affiliate' AND
            `object_column`='title' AND
            `object_id`=`affiliate`.`id`
    ) as `title`,
    (
        SELECT `line` FROM `#__lasercity_metro` WHERE `id`=`affiliate`.`metro`
    ) as `metro_line`,  
    (
        SELECT `value`
        FROM `#__lasercity_translations_{$language}`
        WHERE
            `object_name`='metro' AND
            `object_column`='title' AND
            `object_id`=`affiliate`.`metro`
    ) as `metro`,
    (
        SELECT `type` FROM `#__lasercity_locations` WHERE `id`=`affiliate`.`location`
    ) as `location_type`,  
    (
        SELECT `value`
        FROM `#__lasercity_translations_{$language}`
        WHERE
            `object_name`='location' AND
            `object_column`='title' AND
            `object_id`=`affiliate`.`location`
    ) as `location`,
    (
        SELECT `value`
        FROM `#__lasercity_translations_{$language}`
        WHERE
            `object_name`='district' AND
            `object_column`='title' AND
            `object_id`=`affiliate`.`district`
    ) as `district`,
    `id`, `main_image`, `alias`, `organization`, `phones`, `comforts`, `apparats`, `schedule`, `coordinate`, `number_home`
FROM `#__lasercity_affiliates` as `affiliate`
WHERE `organization`={$id}
            ")->loadObjectList();

		$ids = array();
		foreach ($affiliates as $affiliate) {
			$this->setActions(array(
				'organization' => ['unique', 'sort', 'first'],
				'phones' => ['decode'],
				'comforts' => ['decode', 'unique', 'sort'],
				'apparats' => ['decode', 'unique', 'sort'],
				'schedule' => ['decode', 'schedule'],
			), $affiliate, $ids);
			$affiliate->coordinate = 'https://www.google.com/maps?q=' . $affiliate->coordinate;
			$fullLocation = array();
			$affiliate->location_type = JText::_('COM_LASERCITY_TABLE_' . mb_strtoupper($affiliate->location_type) . '_S');
			if ($affiliate->location != null) {
				$fullLocation[] = $affiliate->location_type . ' ' . $affiliate->location;
			}
			if ($affiliate->number_home != null) {
				$fullLocation[] = $affiliate->number_home;
			}
			if ($affiliate->district != null) {
				$fullLocation[] = $affiliate->district;
			}
			unset($affiliate->location_type);
			unset($affiliate->location);
			unset($affiliate->number_home);
			unset($affiliate->district);
			$affiliate->location = implode(', ', $fullLocation);
		}

		$apparatus = [];
		$apparatIds = implode(',', $ids['apparats']);
		if (count($ids['apparats'])) {
			$apparatus = $db->setQuery("SELECT `id`, `title` FROM `#__lasercity_apparats` WHERE `id` IN ({$apparatIds})")->loadObjectList('id');
		}

		$comforts = [];

		$comfortIds = implode(',', $ids['comforts']);
		if (count($ids['comforts'])) {
			$comforts = $db->setQuery("
SELECT `id`, `icon`,
(
        SELECT `value`
        FROM `#__lasercity_translations_{$language}`
        WHERE
            `object_name`='comfort' AND
            `object_column`='title' AND
            `object_id`=`comfort`.`id`
) as `title`
FROM `#__lasercity_comforts` as `comfort`
WHERE `id` IN({$comfortIds})
            ")->loadAssocList('id');
		}

		if (count($ids['apparats']) || count($ids['comforts'])) {
			foreach ($affiliates as $affiliate) {
				if (count($ids['apparats'])) {
					foreach ($affiliate->apparats as $id => $c) {
						$affiliate->apparats[$id] = $apparatus[$c]->title;
					}
				}
				if (count($ids['comforts'])) {
					foreach ($affiliate->comforts as $id => $comfort) {
						$affiliate->comforts[$id] = $comforts[$comfort];
					}
				}
			}
		}

		return [
			'organization' => $organization,
			'comforts' => $comforts,
			'apparatus' => $apparatus,
			'affiliates' => $affiliates,
		];
	}

	private function setActions($instruction, &$obj, &$ids)
	{
		foreach ($instruction as $key => $actions) {
			if (in_array('decode', $actions)) {
				$obj->$key = json_decode($obj->$key);
			}
			if (in_array('unique', $actions)) {
				if (!isset($ids[$key])) {
					$ids[$key] = array();
				}
				$obj->$key = (array)$obj->$key;
				foreach ($obj->$key as $item) {
					if (!in_array($item, $ids[$key])) {
						$ids[$key][] = $item;
					}
				}
			}
			if (in_array('sort', $actions)) {
				asort($ids[$key]);
			}
			if (in_array('first', $actions)) {
				$obj->$key = reset($obj->$key);
			}
			if (in_array('schedule', $actions)) {
				Search::setSchedule($obj->$key);
			}
		}
	}

	function populateState()
	{
		$app = JFactory::$application;
		$id  = $app->input->getInt('id', 0);
		$this->setState('item.id', $id);
		parent::populateState();
	}
}