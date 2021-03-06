/**
 * Implements hook_update_status_alter().
 */
function <?php print $basename; ?>_update_status_alter(&\$projects) {
  ${1:\$settings = variable_get('update_advanced_project_settings', array());
  foreach (\$projects as \$project => \$project_info) {
    if (isset(\$settings[\$project]) && isset(\$settings[\$project]['check']) &&
        (\$settings[\$project]['check'] == 'never' ||
          (isset(\$project_info['recommended']) &&
            \$settings[\$project]['check'] === \$project_info['recommended']))) {
      \$projects[\$project]['status'] = UPDATE_NOT_CHECKED;
      \$projects[\$project]['reason'] = t('Ignored from settings');
      if (!empty(\$settings[\$project]['notes'])) {
        \$projects[\$project]['extra'][] = array(
          'class' => array('admin-note'),
          'label' => t('Administrator note'),
          'data' => \$settings[\$project]['notes'],
        );
      \}
    \}
  \}}
}

$2