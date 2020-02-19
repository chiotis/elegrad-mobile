<?php

function filter_submit_button_attributes( $attributes, $form, $args ) {
    $attributes['class'] .= ' btn btn-success btn-block btn-lg mr-1 mb-1';
    
    return $attributes;
}
add_filter( 'af/form/button_attributes', 'filter_submit_button_attributes', 10, 3 );
add_filter( 'af/form/button_attributes/id=FORM_ID', 'filter_submit_button_attributes', 10, 3 );
add_filter( 'af/form/button_attributes/key=FORM_KEY', 'filter_submit_button_attributes', 10, 3 );

// move the Gravity Forms scripts to the footer
add_filter('gform_init_scripts_footer', 'init_scripts');
function init_scripts() {
    return true;
}
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='btn btn-primary btn-block shadowed btn-lg mb-2 gform_button' id='gform_submit_button_{$form['id']}'><span>".__('Ολοκλήρωση και Αποστολή', 'elegrad-mobile')."</span></button>";
}
add_filter( 'gform_next_button', 'form_next_button', 10, 2 );
function form_next_button( $button, $form ) {
    return "<button class='btn btn-primary btn-block btn-lg mb-2 gform_next_button' id='gform_next_button_{$form['id']}'><span>".__('Επόμενη Σελίδα', 'elegrad-mobile')."</span></button>";
}
add_filter( 'gform_previous_button', 'form_previous_button', 10, 2 );
function form_previous_button( $button, $form ) {
    return "<button class='btn btn-text-secondary shadowed btn-block gform_previous_button' id='gform_previous_button_{$form['id']}'><span>".__('Προηγούμενη Σελίδα', 'elegrad-mobile')."</span></button>";
}

add_filter( 'gform_validation_message', function ( $message, $form ) {
    if ( gf_upgrade()->get_submissions_block() ) {
        return $message;
    }
    $message = "<div class='alert alert-danger mb-1' role='alert'>" . __('Παρακαλώ συμπληρώστε τα υποχρεωτικά πεδία', 'elegrad-mobile') . "</div>";
    foreach ( $form['fields'] as $field ) {
        if ( $field->failed_validation ) {
            $message .= sprintf( '<div class="chip chip-outline chip-danger ml-05 mb-05"><span class="chip-label">%s - %s</span></div>', GFCommon::get_label( $field ), $field->validation_message );
        }
    } 
    return $message;
}, 10, 2 );

// Change Flow buttons text
add_filter( 'gravityflow_update_button_text_user_input', 'sh_gravityflow_update_button_text_user_input', 10, 3 );
function sh_gravityflow_update_button_text_user_input( $text, $form, $step ) {
	return "Ενημέρωση";
}
add_filter( 'gravityflow_save_progress_button_text_user_input', 'sh_gravityflow_update_save_button_text_user_input' );
function sh_gravityflow_update_save_button_text_user_input( $text ) {
	return "Προσωρινή Αποθήκευση";
}
add_filter( 'gravityflow_submit_button_text_user_input', 'sh_gravityflow_update_submit_button_text_user_input' );
function sh_gravityflow_update_submit_button_text_user_input( $text ) {
	return "Ολοκλήρωση";
}

// Gravity Form File Upload Delete Icon Change
add_filter( 'gform_file_upload_markup', 'change_upload_markup', 3, 8 );
 
function change_upload_markup( $file_upload_markup, $file_info, $form_id, $field_id ) {
  return '<strong>' . esc_html( $file_info['uploaded_filename'] ) . "</strong > <img class='gform_delete' src='https://dmo.ancienttheatersofepirus.gr/wp-content/uploads/2019/11/delete-1.png' 
  onclick='gformDeleteUploadedFile({$form_id}, {$field_id }, this);' />";
}