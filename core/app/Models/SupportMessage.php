<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportMessage extends Model
{
    public function ticket()
    {
        return $this->belongsTo(SupportTicket::class, 'support_ticket_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function attachments()
    {
        return $this->hasMany(SupportAttachment::class, 'support_message_id', 'id');
    }
}
