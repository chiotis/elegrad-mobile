add_action( 'wp_head', function () { ?>
	<style>

/* Gravity Flow Customization */
.wrap.gf_entry_wrap.gravityflow_workflow_wrap.gravityflow_workflow_detail div {
	line-height: 1.4em;
	font-family: 'Roboto', sans-serif;
}

/*
#poststuff #post-body.columns-2 {
	margin-right: 0;
	display: grid;
	grid-template-columns: 3fr 300px;
	grid-template-rows: repeat(2, 1fr);
	grid-column-gap: 20px;
	grid-row-gap: 20px;
}
#post-body.columns-2 #post-body-content {
	float: none;
	width: 100%;
	grid-area: 1 / 1 / 2 / 2;
}
#post-body.columns-2 #postbox-container-1 {
	float: none;
	margin-right: 0;
	width: 100%;
	grid-area: 1 / 2 / 2 / 3;
}
#post-body.columns-2 #postbox-container-2 {
	float: none;
	width: 100%;
	grid-area: 2 / 1 / 3 / 2;
}
*/

table.entry-detail-view td {
	padding: 10px;
}
div#post-body-content {
    background: #fff;
    padding: 15px;
}
.gform_wrapper {
	background: #fff;
	padding: 15px;
	margin: 0;
    max-width: 100%;
}
.gform_wrapper .gsection {
    margin: 10px 0 0 0;
}
h2.gsection_title {
    border-bottom: none !important;
}
.gform_wrapper .chosen-container[style],
.gform_wrapper .chosen-container *[style] {
    width: 100% !important;
}




	
	
	
form#gravityflow-status-list {
    background: #fff;
    padding: 15px;
}
div#gravityflow-status-box-container {
    font-size: 14px;
    background: #222D32;
    color: #fff;
}
.entry-detail-view ul.gform_fields {
	margin: 0;
	padding: 0;
}
th#details {
    font-size: 18px;
    color: #605CA8;
}
.gravityflow-status-box label {
    display: block;
}
.gravityflow-status-box a {
    color: #fff;
    font-size: 16px;
    line-height: 20px;
    background: #605CA8;
    padding: 0 6px;
    display: inline-block;
    border-radius: 4px;
    pointer-events: none;
}
.gravityflow_workflow_wrap hr[style] {
    margin: 20px 0 !important;
    border-top-color: #605CA8;
}
textarea#gravityflow-note {
    border: none;
    line-height: 20px;
    color: #000;
    padding: 10px;
}
.gravityflow_workflow_wrap .postbox-container .button {
    background: #605CA8 none repeat scroll 0 0;
    border-color: transparent;
    box-shadow: none;
    color: #fff !important;
    vertical-align: middle;
    border-radius: 0;
    border-style: solid;
    border-width: 1px;
    box-sizing: border-box;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    height: auto;
    line-height: 26px;
    margin: 0 0 5px 0;
    padding: 5px;
    width: 100%;
    text-align: center;
}
.gravityflow_workflow_wrap .postbox-container .button:hover {
    background: #6E6AAF;
}

.postbox {
    padding: 10px;
}
.postbox.gravityflow-instructions {
    background: #605CA8;
    padding: 20px;
    color: #fff;
    font-size: 16px;
    overflow: hidden;
}
div.gf_entry_wrap #poststuff .inside {
    margin-top: 0;
}
body .content .gform_wrapper .top_label div.ginput_container {
    margin-top: 0;
}
select#gravityflow-admin-action {
    width: 100%;
    margin-bottom: 10px;
    font-size: 14px;
    height: auto;
    padding: 5px;
    cursor: pointer;
}
#minor-publishing ul {
    margin: 0;
    padding: 0;
}


.gravityflow-editable-field.gfield.green-background {
    background-color: #ddf9de !important;
    padding: 10px 10px 15px;
    border: 1px solid #43A047;
}
.gravityflow-editable-field.gfield.green-background label.gfield_label {
    color: #222;
    margin: 0 0 10px;
}
.gravityflow-editable-field.gfield.green-background a {
    color: #222 !important;
}


.gfield.gravityflow-display-field label.gfield_label, 
.gfield.gravityflow-editable-field:not(.green-background):not(.gfield_error) label.gfield_label {
    background-color: #ECF0F5;
    border-top: 1px solid #ECF0F5;
    border-bottom: 1px solid #ECF0F5;
    line-height: 1.5;
    padding: 5px 15px;
    width: 100%;
    margin: 0;
}
@media only screen and (min-width: 641px) {
/*     .content .gform_wrapper ul.gform_fields li.gfield {
        padding-right: 0;
    } */
}

.updated.notice {
    background: #B3E5FC;
    border: 1px solid #03A9F4;
    padding: 20px !important;
    color: #01579B;
    font-weight: bold;
}
td.entry-view-field-name {
    font-weight: bold;
    background-color: #ECF0F5;
    border-top: none;
    border-bottom: none;
    line-height: 1.5;
    padding: 7px;
}
td.entry-view-field-value {
    border-top: none;
    border-bottom: none;
}
td.entry-view-section-break {
    background: #4A5459;
    color: #fff;
}

.gform_wrapper .description_above .gfield_description,
.gform_wrapper .gfield .instruction {
/*     color: #C8E6C9;
    font-size: 14px; */
}
body.page-submit-a-workflow-form .gform_wrapper .description_above .gfield_description,
body.page-submit-a-workflow-form .gform_wrapper .gfield .instruction {
    color: #999;
    font-size: 14px;
}
.gravityflow_workflow_wrap button, 
.gravityflow_workflow_wrap select {
    cursor: pointer;
}
.gravityflow_workflow_wrap button, 
.gravityflow_workflow_wrap input, 
.gravityflow_workflow_wrap select {
    width: 100%;
}
.gravityflow_workflow_wrap input[type=radio],
.gravityflow_workflow_wrap input[type=checkbox] {
	width: auto;
}
body .gform_wrapper table.gfield_list.gfield_list_container tbody tr.gfield_list_group td.gfield_list_icons {
    padding: 0 0 0 5px !important;
}
.gform_wrapper .gfield_required {
    color: #e53935;
}
/* Timeline Style */
.gravityflow-editable-field .gfield_radio li label,
.gravityflow-editable-field .gfield_checkbox li label {
    color: #222;
    font-size: 14px !important;
    padding: 0 0 0 5px !important;
}
input#gravityflow_in_progress,
input#gravityflow_complete {
    width: auto;
    margin: 0 10px;
}
input#gravityflow_in_progress:before,
input#gravityflow_complete:before {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    display: inline-block;
    content: ' ';
    box-shadow: 0 0 0 5px #222D32, 0 0 0 6px #9575CD;
    background: #222D32;
    transition: all .3s;
    cursor: pointer;
    outline: none;
}
input#gravityflow_in_progress:checked:before,
input#gravityflow_complete:checked:before {
    background: #9575CD;
}
.gravityflow-note-body-wrap {
    border: none;
}
.gravityflow-note-title {
    display: none;
}
.gravityflow-note-meta {
    color: #939FA5;
    float: none;
    font-size: 11px;
    text-align: left;
    display: block;
}
.gravityflow-note-approval i.fa.fa-check,
.gravityflow-note-user_input .gravityflow-note-avatar span > i,
.gravityflow-note-notification .gravityflow-note-avatar span > i {
    color: #888 !important;
} 
.validation_message {
/*     color: #fff !important;
    background: #e53935; */
    padding: 10px;
    font-size: 14px;
    font-family: sans-serif;
    letter-spacing: normal;
}
/* .gform_wrapper div.validation_error {
    color: #e53935;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 25px;
    border-top: 3px solid #e53935;
    border-bottom: 3px solid #e53935;
    padding: 16px 0 16px 0;
    clear: both;
    width: 100%;
    text-align: center;
} */
div.gravityflow_validation_error {
    border-bottom: 2px solid #e53935;
    border-top: 2px solid #e53935;
    clear: both;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 1.6em;
    padding: 1em 0;
    width: 100%;
    background: #e53935;
    padding: 15px !important;
}
/* Status Page Custom */
#gravityflow-status-date-filters input,
#gravityflow-status-date-filters select,
#bulk-action-selector-top, #doaction, #bulk-action-selector-bottom, #doaction2 {
    width: auto !important;
} 
.gfield_error {
    background: #f00 !important;
    padding: 10px;
}
.gform_wrapper .gfield_error .gfield_label,
.gform_wrapper .gfield_error .gfield_description {
    color: #fff !important;
}
.gform_wrapper select {
    padding: 6px 4px !important;
}
input.datepicker {
    width: 88% !important;
}


	</style>
<?php } );
