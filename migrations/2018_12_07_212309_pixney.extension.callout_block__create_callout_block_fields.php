<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionCalloutBlockCreateCalloutBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'headline'      => 'anomaly.field_type.text',
        'text'          => 'anomaly.field_type.markdown',
        'link_url'      => 'anomaly.field_type.url',
        'link_text'     => 'anomaly.field_type.text',
        'classes'       => 'anomaly.field_type.text',
    ];
}
