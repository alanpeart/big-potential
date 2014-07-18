<?php
/**
 * @file
 * funding_application_node_type.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function funding_application_node_type_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_about_org|node|application|form';
  $field_group->group_name = 'group_ap_about_org';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_section_h';
  $field_group->data = array(
    'label' => 'About the organisation',
    'weight' => '56',
    'children' => array(
      0 => 'field_ap_organisation_intro',
      1 => 'field_ap_org_name',
      2 => 'field_ap_org_alt_name',
      3 => 'field_address',
      4 => 'field_ap_organisation_telephone',
      5 => 'field_ap_organisation_email',
      6 => 'field_ap_org_website',
      7 => 'field_ap_org_status',
      8 => 'field_ap_company_no',
      9 => 'field_ap_reg_charity',
      10 => 'field_ap_charity_no',
      11 => 'field_ap_area_covered',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'formatter' => 'open',
      'instance_settings' => array(
        'description' => '',
        'show_label' => 1,
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
        'classes' => 'group-ap-about-org field-group-div',
        'required_fields' => 1,
        'id' => '',
      ),
    ),
  );
  $export['group_ap_about_org|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_areas_sectors|node|application|form';
  $field_group->group_name = 'group_ap_areas_sectors';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_section_h';
  $field_group->data = array(
    'label' => 'Tick all those that apply to your organisation',
    'weight' => '58',
    'children' => array(
      0 => 'field_areas_included',
      1 => 'field_sectors_you_work_in',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'formatter' => 'open',
      'instance_settings' => array(
        'description' => '',
        'show_label' => 1,
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
        'classes' => 'group-ap-areas-sectors field-group-div',
        'required_fields' => 1,
        'id' => '',
      ),
    ),
  );
  $export['group_ap_areas_sectors|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_budget_summary|node|application|form';
  $field_group->group_name = 'group_ap_budget_summary';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_section_f';
  $field_group->data = array(
    'label' => 'Summary Information',
    'weight' => '29',
    'children' => array(
      0 => 'field_ap_total_exp_provider',
      1 => 'field_ap_total_exp_spec_prov',
      2 => 'field_ap_total_exp_vcse',
      3 => 'field_ap_total_grant_request',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Summary Information',
      'instance_settings' => array(
        'required_fields' => 1,
        'id' => '',
        'classes' => 'group-ap-budget-summary field-group-div',
        'description' => 'In this section you will give us detailed information about your timelines and budget, by downloading our spreadsheets and uploading them with your information filled in. In order to assist us to summarise your information please also fill out these summary fields.',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_budget_summary|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_a|node|application|default';
  $field_group->group_name = 'group_ap_display_a';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Section A: Application Checklist',
    'weight' => '2',
    'children' => array(
      0 => 'field_ap_state_aid_confidence',
      1 => 'field_ap_eligible',
      2 => 'field_ap_diagnostic_complete',
      3 => 'field_ap_11_session',
      4 => 'field_ap_provider_consult',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Section A: Application Checklist',
      'instance_settings' => array(
        'classes' => 'group-ap-display-a field-group-div panel white',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_a|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_b|node|application|default';
  $field_group->group_name = 'group_ap_display_b';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Section B: Key Details',
    'weight' => '3',
    'children' => array(
      0 => 'field_ap_organisation_name',
      1 => 'field_ap_about_org',
      2 => 'field_ap_provider_name',
      3 => 'field_ap_grant_amount',
      4 => 'field_ap_grant_type',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Section B: Key Details',
      'instance_settings' => array(
        'classes' => 'group-ap-display-b field-group-div panel white',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_b|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_contact|node|application|default';
  $field_group->group_name = 'group_ap_display_contact';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = 'group_ap_display_h';
  $field_group->data = array(
    'label' => 'Main Contact',
    'weight' => '27',
    'children' => array(
      0 => 'field_ap_first_name',
      1 => 'field_ap_last_name',
      2 => 'field_ap_position',
      3 => 'field_ap_primary_telephone',
      4 => 'field_ap_secondary_telephone',
      5 => 'field_ap_contact_email',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Main Contact',
      'instance_settings' => array(
        'classes' => 'group-ap-display-contact field-group-div panel outline',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_contact|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_c|node|application|default';
  $field_group->group_name = 'group_ap_display_c';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Section C: The VCSE Organisation',
    'weight' => '4',
    'children' => array(
      0 => 'field_ap_track_record',
      1 => 'field_field_ap_impact',
      2 => 'field_ap_financial_performance',
      3 => 'field_ap_fin_perf_upload',
      4 => 'field_ap_fin_perf_clarify',
      5 => 'field_ap_investment_potential',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Section C: The VCSE Organisation',
      'instance_settings' => array(
        'classes' => 'group-ap-display-c field-group-div panel white',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_c|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_d|node|application|default';
  $field_group->group_name = 'group_ap_display_d';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Section D: Development Needs',
    'weight' => '5',
    'children' => array(
      0 => 'field_ap_choose_stage',
      1 => 'field_ap_stage_select',
      2 => 'field_ap_how_much_investment',
      3 => 'field_when_do_you_hope_to_raise_',
      4 => 'field_ap_identify_inv_readiness',
      5 => 'field_ap_invest_readiness_desc',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Section D: Development Needs',
      'instance_settings' => array(
        'classes' => 'group-ap-display-d field-group-div panel white',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_d|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_e|node|application|default';
  $field_group->group_name = 'group_ap_display_e';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Section E: Investment Readiness Plan',
    'weight' => '6',
    'children' => array(
      0 => 'field_ap_inv_readiness_intro',
      1 => 'field_ap_invest_ready_plan',
      2 => 'field_ap_provider_choice',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Section E: Investment Readiness Plan',
      'instance_settings' => array(
        'classes' => 'group-ap-display-e field-group-div panel white',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_e|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_f|node|application|default';
  $field_group->group_name = 'group_ap_display_f';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Section F: Milestones and Budget',
    'weight' => '7',
    'children' => array(
      0 => 'field_milestones_intro',
      1 => 'field_ap_inv_readiness_upload',
      2 => 'field_ap_budget_intro',
      3 => 'field_ap_budget_table_upload',
      4 => 'field_ap_able_contribute',
      5 => 'field_ap_success_fee',
      6 => 'field_ap_total_exp_provider',
      7 => 'field_ap_total_exp_spec_prov',
      8 => 'field_ap_total_exp_vcse',
      9 => 'field_ap_total_grant_request',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Section F: Milestones and Budget',
      'instance_settings' => array(
        'classes' => 'group-ap-display-f field-group-div panel white',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_f|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_g|node|application|default';
  $field_group->group_name = 'group_ap_display_g';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Section G: State Aid',
    'weight' => '8',
    'children' => array(
      0 => 'field_ap_state_aid_intro',
      1 => 'field_ap_statutory_services',
      2 => 'field_ap_statutory_perc',
      3 => 'field_ap_list_grants_intro',
      4 => 'field_ap_list_grants',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Section G: State Aid',
      'instance_settings' => array(
        'classes' => 'group-ap-display-g field-group-div panel white',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_g|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_h|node|application|default';
  $field_group->group_name = 'group_ap_display_h';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Section H: About The Organisation',
    'weight' => '9',
    'children' => array(
      0 => 'field_areas_included',
      1 => 'field_sectors_you_work_in',
      2 => 'group_ap_display_org',
      3 => 'group_ap_display_contact',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Section H: About The Organisation',
      'instance_settings' => array(
        'classes' => 'group-ap-display-h field-group-div panel white',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_h|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_i|node|application|default';
  $field_group->group_name = 'group_ap_display_i';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Section I: Declarations',
    'weight' => '10',
    'children' => array(
      0 => 'field_ap_annual_accounts',
      1 => 'field_ap_declaration_intro',
      2 => 'field_dec_firstname',
      3 => 'field_dec_lastname',
      4 => 'field_dec_on_behalf_of',
      5 => 'field_dec_email',
      6 => 'field_dec_telephone',
      7 => 'field_dec_acceptance_text',
      8 => 'field_dec_acceptance',
      9 => 'field_ap_save_note',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Section I: Declarations',
      'instance_settings' => array(
        'classes' => 'group-ap-display-i field-group-div panel white',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_i|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_display_org|node|application|default';
  $field_group->group_name = 'group_ap_display_org';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'default';
  $field_group->parent_name = 'group_ap_display_h';
  $field_group->data = array(
    'label' => 'About the organisation',
    'weight' => '26',
    'children' => array(
      0 => 'field_ap_organisation_intro',
      1 => 'field_ap_org_name',
      2 => 'field_ap_org_alt_name',
      3 => 'field_address',
      4 => 'field_ap_organisation_telephone',
      5 => 'field_ap_organisation_email',
      6 => 'field_ap_org_website',
      7 => 'field_ap_org_status',
      8 => 'field_ap_company_no',
      9 => 'field_ap_reg_charity',
      10 => 'field_ap_charity_no',
      11 => 'field_ap_area_covered',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'About the organisation',
      'instance_settings' => array(
        'classes' => 'group-ap-display-org field-group-div panel outline',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_ap_display_org|node|application|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_financial_performance|node|application|form';
  $field_group->group_name = 'group_ap_financial_performance';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_section_c';
  $field_group->data = array(
    'label' => 'Financial Performance',
    'weight' => '18',
    'children' => array(
      0 => 'field_ap_financial_performance',
      1 => 'field_ap_fin_perf_upload',
      2 => 'field_ap_fin_perf_clarify',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'formatter' => 'open',
      'instance_settings' => array(
        'description' => '',
        'show_label' => 1,
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
        'classes' => '',
        'required_fields' => 1,
        'id' => '',
      ),
    ),
  );
  $export['group_ap_financial_performance|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_main_contact|node|application|form';
  $field_group->group_name = 'group_ap_main_contact';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_section_h';
  $field_group->data = array(
    'label' => 'Please provide details of the main contact for this application',
    'weight' => '57',
    'children' => array(
      0 => 'field_ap_first_name',
      1 => 'field_ap_last_name',
      2 => 'field_ap_position',
      3 => 'field_ap_primary_telephone',
      4 => 'field_ap_secondary_telephone',
      5 => 'field_ap_contact_email',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'formatter' => 'open',
      'instance_settings' => array(
        'description' => '',
        'show_label' => 1,
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
        'classes' => 'group-ap-main-contact field-group-div',
        'required_fields' => 1,
        'id' => '',
      ),
    ),
  );
  $export['group_ap_main_contact|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_main|node|application|form';
  $field_group->group_name = 'group_ap_main';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Main',
    'weight' => '2',
    'children' => array(
      0 => 'group_ap_section_a',
      1 => 'group_ap_section_b',
      2 => 'group_ap_section_c',
      3 => 'group_ap_section_d',
      4 => 'group_ap_section_e',
      5 => 'group_ap_section_f',
      6 => 'group_ap_section_g',
      7 => 'group_ap_section_h',
      8 => 'group_ap_section_i',
      9 => 'group_ap_section_intro',
    ),
    'format_type' => 'multipage-group',
    'format_settings' => array(
      'label' => 'Main',
      'instance_settings' => array(
        'classes' => '',
        'page_header' => '1',
        'page_counter' => '0',
        'move_button' => '0',
        'move_additional' => '1',
      ),
      'formatter' => '',
    ),
  );
  $export['group_ap_main|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_outline_inv_goals|node|application|form';
  $field_group->group_name = 'group_ap_outline_inv_goals';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_section_d';
  $field_group->data = array(
    'label' => 'Please outline your investment goals, even if these are a long way off',
    'weight' => '24',
    'children' => array(
      0 => 'field_ap_how_much_investment',
      1 => 'field_when_do_you_hope_to_raise_',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'formatter' => 'open',
      'instance_settings' => array(
        'description' => '',
        'show_label' => 1,
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
        'classes' => 'group-ap-outline-inv-goals field-group-div',
        'required_fields' => 1,
        'id' => '',
      ),
    ),
  );
  $export['group_ap_outline_inv_goals|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_a|node|application|form';
  $field_group->group_name = 'group_ap_section_a';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Section A: Application Checklist',
    'weight' => '8',
    'children' => array(
      0 => 'field_ap_introduction_a',
      1 => 'field_ap_state_aid_confidence',
      2 => 'field_ap_eligible',
      3 => 'field_ap_diagnostic_complete',
      4 => 'field_ap_11_session',
      5 => 'field_ap_provider_consult',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'formatter' => 'no-start',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-ap-section-a',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ap_section_a|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_b|node|application|form';
  $field_group->group_name = 'group_ap_section_b';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Section B: Key Details',
    'weight' => '9',
    'children' => array(
      0 => 'field_ap_organisation_name',
      1 => 'field_ap_about_org',
      2 => 'field_ap_provider_name',
      3 => 'field_ap_grant_amount',
      4 => 'field_ap_grant_type',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'formatter' => 'no-start',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-ap-section-b',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ap_section_b|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_c|node|application|form';
  $field_group->group_name = 'group_ap_section_c';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Section C: The VCSE Organisation',
    'weight' => '10',
    'children' => array(
      0 => 'field_ap_track_record',
      1 => 'field_field_ap_impact',
      2 => 'field_ap_investment_potential',
      3 => 'group_ap_financial_performance',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'formatter' => 'no-start',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-ap-section-c',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ap_section_c|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_d|node|application|form';
  $field_group->group_name = 'group_ap_section_d';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Section D: Development Needs',
    'weight' => '11',
    'children' => array(
      0 => 'field_ap_choose_stage',
      1 => 'field_ap_stage_select',
      2 => 'field_ap_identify_inv_readiness',
      3 => 'field_ap_invest_readiness_desc',
      4 => 'group_ap_outline_inv_goals',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'formatter' => 'no-start',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-ap-section-d',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ap_section_d|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_e|node|application|form';
  $field_group->group_name = 'group_ap_section_e';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Section E: Investment Readiness Plan',
    'weight' => '12',
    'children' => array(
      0 => 'field_ap_inv_readiness_intro',
      1 => 'field_ap_invest_ready_plan',
      2 => 'field_ap_provider_choice',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'formatter' => 'no-start',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-ap-section-e',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ap_section_e|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_f|node|application|form';
  $field_group->group_name = 'group_ap_section_f';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Section F: Milestones and Budget',
    'weight' => '13',
    'children' => array(
      0 => 'field_milestones_intro',
      1 => 'field_ap_inv_readiness_upload',
      2 => 'field_ap_budget_intro',
      3 => 'field_ap_budget_table_upload',
      4 => 'field_ap_able_contribute',
      5 => 'field_ap_success_fee',
      6 => 'group_ap_budget_summary',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'formatter' => 'no-start',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-ap-section-f',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ap_section_f|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_g|node|application|form';
  $field_group->group_name = 'group_ap_section_g';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Section G: State Aid',
    'weight' => '14',
    'children' => array(
      0 => 'field_ap_state_aid_intro',
      1 => 'field_ap_statutory_services',
      2 => 'field_ap_statutory_perc',
      3 => 'field_ap_list_grants_intro',
      4 => 'field_ap_list_grants',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'formatter' => 'no-start',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-ap-section-g',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ap_section_g|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_h|node|application|form';
  $field_group->group_name = 'group_ap_section_h';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Section H: About The Organisation',
    'weight' => '15',
    'children' => array(
      0 => 'group_ap_about_org',
      1 => 'group_ap_main_contact',
      2 => 'group_ap_areas_sectors',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'label' => 'Section H: About The Organisation',
      'instance_settings' => array(
        'required_fields' => 1,
        'classes' => 'group-ap-section-h',
        'description' => '',
      ),
      'formatter' => 'no-start',
    ),
  );
  $export['group_ap_section_h|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_intro|node|application|form';
  $field_group->group_name = 'group_ap_section_intro';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Introduction',
    'weight' => '7',
    'children' => array(
      0 => 'field_ap_introduction',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'formatter' => 'no-start',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-ap-section-intro',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ap_section_intro|node|application|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ap_section_i|node|application|form';
  $field_group->group_name = 'group_ap_section_i';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'application';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_ap_main';
  $field_group->data = array(
    'label' => 'Section I: Declarations',
    'weight' => '16',
    'children' => array(
      0 => 'field_ap_annual_accounts',
      1 => 'field_ap_declaration_intro',
      2 => 'field_dec_firstname',
      3 => 'field_dec_lastname',
      4 => 'field_dec_on_behalf_of',
      5 => 'field_dec_email',
      6 => 'field_dec_telephone',
      7 => 'field_dec_acceptance_text',
      8 => 'field_dec_acceptance',
      9 => 'field_ap_save_note',
    ),
    'format_type' => 'multipage',
    'format_settings' => array(
      'formatter' => 'no-start',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-ap-section-i',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ap_section_i|node|application|form'] = $field_group;

  return $export;
}
