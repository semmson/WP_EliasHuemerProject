<?php
class WP_Skills_MetaBox_Event_Custom_Fields {
  private $screen = array(
	'event',
  );

  private $meta_fields = array(
    array(
      'label' => 'Date',
      'id' => 'event_date',
      'type' => 'date',
      'default' => '',
    ),
    array(
      'label' => 'Location',
      'id' => 'event_location',
      'type' => 'text',
      'default' => '',
    ),
    array(
      'label' => 'Ticket Link',
      'id' => 'event_tickets',
      'type' => 'url',
      'default' => '',
    )
  );

  public function __construct() {
    add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
    add_action('admin_footer', array($this, 'media_fields'));
    add_action('save_post', array($this, 'save_fields'));
  }

  public function add_meta_boxes() {
    foreach ($this->screen as $single_screen) {
      add_meta_box(
        'Event_Custom_Fields',
        __('Event_Custom_Fields', 'event_custom_fields'),
        array($this, 'meta_box_callback'),
        $single_screen,
        'normal',
        'default'
      );
    }
  }

  public function meta_box_callback($post) {
    wp_nonce_field('Event_Custom_Fields_data', 'Event_Custom_Fields_nonce');
    echo 'Fields for Event Post Type';
    $this->field_generator($post);
  }
  public function media_fields() { ?>
    <script>
      jQuery(document).ready(function($) {
        if (typeof wp.media !== 'undefined') {
          var _custom_media = true,
            _orig_send_attachment = wp.media.editor.send.attachment;
          $('.new-media').click(function(e) {
            var send_attachment_bkp = wp.media.editor.send.attachment;
            var button = $(this);
            var id = button.attr('id').replace('_button', '');
            _custom_media = true;
            wp.media.editor.send.attachment = function(props, attachment) {
              if (_custom_media) {
                if ($('input#' + id).data('return') == 'url') {
                  $('input#' + id).val(attachment.url);
                } else {
                  $('input#' + id).val(attachment.id);
                }
                $('div#preview' + id).css('background-image', 'url(' + attachment.url + ')');
              } else {
                return _orig_send_attachment.apply(this, [props, attachment]);
              };
            }
            wp.media.editor.open(button);
            return false;
          });
          $('.add_media').on('click', function() {
            _custom_media = false;
          });
          $('.remove-media').on('click', function() {
            var parent = $(this).parents('td');
            parent.find('input[type="text"]').val('');
            parent.find('div').css('background-image', 'url()');
          });
        }
      });
    </script>
  <?php 
  }

  public function field_generator($post) {
    $output = '';
    foreach ($this->meta_fields as $meta_field) {
      $label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
      $meta_value = get_post_meta($post->ID, $meta_field['id'], true);
      if (empty($meta_value)) {
        if (isset($meta_field['default'])) {
          $meta_value = $meta_field['default'];
        }
      }
      switch ($meta_field['type']) {

        default:
          $input = sprintf(
            '<input %s id="%s" name="%s" type="%s" value="%s">',
            $meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
            $meta_field['id'],
            $meta_field['id'],
            $meta_field['type'],
            $meta_value
          );

/*         default:
          $input = sprintf(
            '<input %s id="%s" name="%s" type="%s" value="%s">',
            $meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
            $meta_field['id'],
            $meta_field['id'],
            $meta_field['type'],
            $meta_value
          );

        default:
          $input = sprintf(
            '<input %s id="%s" name="%s" type="%s" value="%s">',
            $meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
            $meta_field['id'],
            $meta_field['id'],
            $meta_field['type'],
            $meta_value
          ); */
      }
      $output .= $this->format_rows($label, $input);
    }
    echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
  }

  public function format_rows($label, $input) {
    return '<tr><th>' . $label . '</th><td>' . $input . '</td></tr>';
  }

  public function save_fields($post_id) {
    if (!isset($_POST['event_custom_fields_nonce']))
      return $post_id;
    $nonce = $_POST['event_custom_fields_nonce'];
    if (!wp_verify_nonce($nonce, 'event_custom_fields_data'))
      return $post_id;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
      return $post_id;
    foreach ($this->meta_fields as $meta_field) {
      if (isset($_POST[$meta_field['id']])) {
        switch ($meta_field['type']) {
          case 'email':
            $_POST[$meta_field['id']] = sanitize_email($_POST[$meta_field['id']]);
            break;
          case 'text':
            $_POST[$meta_field['id']] = sanitize_text_field($_POST[$meta_field['id']]);
            break;
        }
        update_post_meta($post_id, $meta_field['id'], $_POST[$meta_field['id']]);
      } else if ($meta_field['type'] === 'checkbox') {
        update_post_meta($post_id, $meta_field['id'], '0');
      }
    }
  }
}

if (class_exists('WP_Skills_MetaBox_Event_Custom_Fields')) {
  new WP_Skills_MetaBox_Event_Custom_Fields;
};

?>